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
?>