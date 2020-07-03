<?php
session_start();
require '..\users.php';
require '..\resources\lang.php';
if($_GET["exit"]){
    session_destroy();
    header("Location: ..\auth\login.html");
}
if (isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}
if (!(isset($_SESSION['login'])) && !(isset($_SESSION['password']))){
    session_destroy();
    header('Location: ..\auth\login.html');
}

class User{
    public $login;
    public $password;
    public $name;
    public $surname;
    public $role;
    public $langhi;
    public $langinfo;

    function __construct($login,$password,$name,$surname,$role,$langhi,$langinfo)
    {
        $this->login = $login;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
        $this->role = $role;
        $this->langhi = $langhi;
        $this->langinfo = $langinfo;
    }
   
}
class admin extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}
class manager extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}
class client extends user {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
    function auth(){
        if(empty($_SESSION['id'])){
            return null;
        }
        $id = $_SESSION['id'];
        $user = $users[$id];
        if($user['role'] == 'admin'){
            return new Admin($user['$login'],['$password'],['$name'],['$surname'],['$role'],['$langhi'],['$langinfo']);
        }
        elseif ($user['role'] == 'manager'){
            return new Manager($user['$login'],['$password'],['$name'],['$surname'],['$role'],['$langhi'],['$langinfo']);
        }
        elseif ($user['role'] == 'client'){
            return new Client($user['$login'],['$password'],['$name'],['$surname'],['$role'],['$langhi'],['$langinfo']);
        }
    }
}
?>