<?php
include 'BaseController.php';
include_once 'models/User.php';

class UserController extends BaseController
{
    /**
     * Method initialization of Class
     * @return void.
     */
    public function __construct()
    {
        $this->folder = 'user';
    }

    /**
     * Method to show all record in table User
     * @return void.
     */
    public function showUser()
    {
        $user = new User();
        $data = $user->all();
        $this->render('show', ['listUser' => $data]);
    }

    /**
     * Method delete a record existed in table User
     * @return void.
     */
    public function deleteUser()
    {
        $user = new User();
        $id = $_GET['userID'];
        // Check this user are exist or not
        if ($user->find($id) == null) {
            die('This user does not exist..');
        }
        $user->delete($id);
        $data = $user->all();
        $result = 'Delete successful..';
        $this->render('show', ['listUser' => $data, 'result' => $result]);
    }

    /**
     * Method to get page Update User
     * @return void.
     */
    public function getUpdateUser()
    {
        $user = new User();
        $id = $_GET['userID'];
        // Check this user are exist or not
        if ($user->find($id) == null) {
            die('This user does not exist..');
        }
        $data = $user->all();
        $this->render('update', ['listUser' => $data, 'userID' => $id]);
    }

    /**
     * Method to update a user exist in table User
     * @return void.
     */
    public function postUpdateUser()
    {
        $user = new User();
        $id = $_GET['userID'];
        // Check this user are exist or not
        if ($user->find($id) == null) {
            die('This user does not exist..');
        }

        $data = $user->all();
        $name = htmlspecialchars($_POST['txtName']);
        $pass = password_hash(htmlspecialchars($_POST['txtPass']), PASSWORD_BCRYPT);
        $email = htmlspecialchars($_POST['txtEmail']);
        $birthDay = htmlspecialchars($_POST['txtDoB']);
        $validate = [];

        // Check the input username are empty or not
        if (empty($name)) {
            $validate['emptyName'] = 'Username must not be empty..';
        }

        // Check the input password are empty or not
        if (empty($pass)) {
            $validate['emptyPass'] = 'Password must not be empty..';
        }

        // Check the input email are empty or not
        if (empty($email)) {
            $validate['emptyEmail'] = 'Email must not be empty..';
        }

        // Check the input birth day are empty or not
        if (empty($birthDay)) {
            $validate['emptyDoB'] = 'BirthDay must not be empty..';
        }

        // Check the validate has error or not
        if (count($validate) > 0) {
            $this->render('update', ['listValidate' => $validate, 'listUser' => $data, 'userID' => $id]);
        } else if ($user->update($id, ['username' => $name, 'password' => $pass, 'email' => $email, 'birthday' => $birthDay])) {
            // If this validate hasn't error -> update this user. If fail: return to page Update
            $result = 'Update successful..';
            $data = $user->all();
            $this->render('update', ['listUser' => $data, 'result' => $result, 'userID' => $id]);
        } else {
            $this->getUpdateUser();
        }
    }

    /**
     * Method to get page insert
     * @return void.
     */
    public function getInsertUser()
    {
        $user = new User();
        $data = $user->all();
        $this->render('insert', ['listUser' => $data]);
    }

    /**
     * Method insert a user to table User
     * @return void.
     */
    public function postInsertUser()
    {
        $user = new User();
        $data = $user->all();
        $name = htmlspecialchars($_POST['txtName']);
        $pass = password_hash(htmlspecialchars($_POST['txtPass']), PASSWORD_BCRYPT);
        $email = htmlspecialchars($_POST['txtEmail']);
        $birthDay = htmlspecialchars($_POST['txtDoB']);
        $validate = [];

        // Check the input username are empty or not
        if (empty($name)) {
            $validate['emptyName'] = 'Username must not be empty..';
        }

        // Check the input password are empty or not
        if (empty($pass)) {
            $validate['emptyPass'] = 'Password must not be empty..';
        }

        // Check the input email are empty or not
        if (empty($email)) {
            $validate['emptyEmail'] = 'Email must not be empty..';
        }

        // Check the input birth day are empty or not
        if (empty($birthDay)) {
            $validate['emptyDoB'] = 'BirthDay must not be empty..';
        }

        // Check the validate has error or not
        if (count($validate) > 0) {
            $this->render('insert', ['listValidate' => $validate, 'listUser' => $data]);
        } else if ($user->insert([$name, $pass, $email, $birthDay])) {
            // If this validate hasn't error -> insert new user. If fail: return to page Insert
            $result = 'Insert successful..';
            $data = $user->all();
            $this->render('insert', ['listUser' => $data, 'result' => $result]);
        } else {
            $this->getInsertUser();
        }
    }
}