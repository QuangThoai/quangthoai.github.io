<?php
  class Log
  {
    private $URL='document/log.txt';
    private function writeLog($log, $message)
    {
      $file=fopen($this->URL,'a');
      if (!$file) {
        echo 'Mở file không thành công';
      } else {
        if ($this->checkEmpty($message)) {
          $time =date('Y-m-d H:i:s');
          fwrite($file," [$time] [$log] : $message". PHP_EOL);
        }
      }
      fclose($file);
    }
    public function readLog()
    {
      $file=fopen($this->URL,'r');
      if (!$file) {
        echo 'Mở file không thành công';
      } else {
        while (!feof($file)) {
          echo fgets($file)."<br>";
        }
      }
      fclose($file);
    }
    private function checkEmpty($message)
    {
      if (empty($message))
        return false;
      else
        return true;
    }
    public function emergency($message)
    {
        $this->writeLog("Emergency",$message);
    }
    public function alert($message)
    {
        $this->writeLog("Alert",$message);
    }
    public function critical($message)
    {
        $this->writeLog("Critical",$message);
    }
    public function error($message)
    {
        $this->writeLog("Error",$message);
    }
    public function warning($message)
    {
        $this->writeLog("Warning",$message);
    }
    public function notice($message)
    {
        $this->writeLog("Notice",$message);
    }
    public function info($message)
    {
        $this->writeLog("Info",$message);
    }
    public function debug($message)
    {
        $this->writeLog("Debug",$message);
    }
  }
?>