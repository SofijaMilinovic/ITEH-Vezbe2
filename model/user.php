<?php

class User{
    public $id;
    public $username;
    public $password;

    public function _constructor($id=null,$username=null,$password=null){

        $this->id = $id;
        $this->username = $username;
        $this->password = $password;

    }

    public static function logInUser($usr,mysqli $connection){

        $query="SELECT *  FROM user  WHERE username=$usr->$username and password=$usr->$password";
        echo $query;
        //konekcija sa bazom
        return $conn->query($query);
    }
}
?>