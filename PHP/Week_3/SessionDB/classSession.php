<?php
class MySessionHandler
{
  private $db;
  /**
   * Initialization method of class
   * @return void
   */
  public function __construct()
  {
    // function to override all functions of default session in php
    session_set_save_handler(
      [$this, 'open'],
      [$this, 'close'],
      [$this, 'read'],
      [$this, 'write'],
      [$this, 'destroy'],
      [$this, 'gc']
    );
    register_shutdown_function('session_write_close');
  }
  /**
   * Method to start sessions
   * @param string $sessionName to set name for this Session
   * @param boolean $secure to make sure cookie will sent sent over secure connections or not.
   * @return void
   */
  public function start_session($sessionName, $secure)
  {
    $httponly = true;
    // Hash algorithm to use for the sessionid
    $session_hash = 'sha512';
    // Find a hash is exist or not exist in function hash_algos()
    if (in_array($session_hash, hash_algos())) {
      ini_set('session.hash_function', $session_hash);
    }
    /* How many bits per character of the hash:
       The possible values are '4-bits' (0-9, a-f), '5-bits' (0-9, a-v), and '6-bit' (0-9, a-z, A-Z, "-", ",")
    */
    ini_set('session.hash_bits_per_character', 5);
    // Force the session just only use cookies
    ini_set('session.use_cookies', 1);
    // Get all parameters of cookie
    $cookieParams = session_get_cookie_params();
    // Set all parameters of cookie
    session_set_cookie_params(
      $cookieParams["lifetime"],
      $cookieParams["path"],
      $cookieParams["domain"],
      $secure,
      $httponly
    );
    // Change the session name
    session_name($sessionName);
    ini_set('session.save_path', __DIR__);
    // Start the session
    session_start();
  }
  /**
   * Method to connect to database
   * @return boolean
   */
  public function open()
  {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'tablesession';
    $connect = new mysqli($host, $user, $password, $database);
    $this->db = $connect;
    return true;
  }
  /**
   * Method to close connected with database
   * @return boolean
   */
  public function close()
  {
    $this->db->close();
    return true;
  }
  /**
   * Method to get data of id input session
   * @param string $id to get id of session in database
   * @return string $data of session
   */
  public function read($id)
  {
    if ($this->checkId($id) == false) {
      $stringQuery="SELECT value FROM session WHERE id = '".$id."'";
      $result=mysqli_query($this->db,$stringQuery);
      if(mysqli_num_rows($result) > 0)
      {
        while ($row = mysqli_fetch_assoc($result))
        {
          $data=$row['value'];
        }
      }
    }
    if (empty($data)) {
      return '';
    }
    $data = $this->decrypt($data, $id);
    $splitData = explode('"', $data);
    return $splitData[1];
  }

  function checkId($id) {
    $check="";
    $query="select count(*) as 'exist' from session where id='".$id."'";
    $result=mysqli_query($this->db,$query);
    if(mysqli_num_rows($result) > 0)
    {
      while ($row = mysqli_fetch_assoc($result))
      {
        $check=$row['exist'];
      }
    }
    if( $check != "0") {
      return false;
    }
    else {
      return true;
    }
  }
  /**
   * Method to insert a new session or update old session
   * @param string $id to get id of session in database or set a new id for new session
   * @param string $data to get data of session in database or set a new data for new session
   * @return boolean
   */
  public function write($id, $data)
  {
    if (empty($data)) {
      return true;
    }
    $data = $this->encrypt($data, $id);
    $query="insert into session values ('".$id."','".$data."')";
    mysqli_query($this->db,$query);
    return true;
  }
  function destroy($id)
  {
    if (!isset($this->delete_stmt)) {
      $this->delete_stmt = $this->db->prepare("DELETE FROM sessions WHERE id = ?");
    }
    $this->delete_stmt->bind_param('s', $id);
    $this->delete_stmt->execute();
    return true;
  }
  /**
   *  Method garbage collector to remove old sessions in database when the time exist are over
   *  @return boolean
   */
  function gc($max)
  {
    return true;
  }
  /**
   * Method to encrypt a data of session with sessionID
   * @param string $data is a data will be encrypt
   * @param string $key is sessionID of this session
   * @return string $encrypted is a encrypted data
   */
  private function encrypt($data, $key)
  {
    $salt = 'cH!swe!retReGu7W6bEDRup7usuDUh9THeD2CHeGE*ewr4n39=E@rAsp7c-Ph@pH';
    $iv = substr(hash('sha256', $salt . $key . $salt), 0, 16);
    $encrypted = openssl_encrypt(base64_encode($data), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
    return $encrypted;
  }
  /**
   * Method to decrypt a data of session with sessionID
   * @param string $data is a encrypted data will be decrypt
   * @param string $key is sessionID of this session
   * @return string $decrypted is a decrypted data
   */
  public function decrypt($data, $key)
  {
    $salt = 'cH!swe!retReGu7W6bEDRup7usuDUh9THeD2CHeGE*ewr4n39=E@rAsp7c-Ph@pH';
    $iv = substr(hash('sha256', $salt . $key . $salt), 0, 16);
    $decrypted = base64_decode(openssl_decrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv));
    return $decrypted;
  }
}