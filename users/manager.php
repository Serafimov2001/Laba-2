<?php
session_start();
include 'D:\Open\OSPanel\domains\Php\users.php';
include 'D:\Open\OSPanel\domains\Php\resources\lang.php';

if($_GET["exit"]){
    session_destroy();
    header("Location: ..\auth\login.html");
}

if (isset($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'];
}

if (!(isset($_SESSION['login'])) && (!(isset($_SESSION['password'])))){
    session_destroy();
    header('location: \auth\login.html');
}
if ((!(($_SESSION['role']) == 'admin')) && (!(($_SESSION['role']) == 'manager'))){
    session_destroy();
    header( 'location: \auth\login.html');
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
switch($_SESSION['role']) {
    case 'admin';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                if ($users[$m]['lang'] == 'ru') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[4]['ru']);
                } elseif ($users[$m]['lang'] == 'en') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[4]['en']);
                } elseif ($users[$m]['lang'] == 'ua') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[4]['ua']);
                }
                $admin->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                if ($users[$m]['lang'] == 'ru') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[4]['ru']);
                } elseif ($users[$m]['lang'] == 'en') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[4]['en']);
                } elseif ($users[$m]['lang'] == 'ua') {
                    $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[4]['ua']);
                }
                $admin->introduce();
            }
        }
            break;
        case 'manager';
            for ($m = 0; $m < count($users); $m++) {
                if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                    if ($users[$m]['lang'] == 'ru') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[2]['ru']);
                    } elseif ($users[$m]['lang'] == 'en') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[2]['en']);
                    } elseif ($users[$m]['lang'] == 'ua') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[2]['ua']);
                    }
                    $manager->introduce();
                }
                if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                    if ($users[$m]['lang'] == 'ru') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[2]['ru']);
                    } elseif ($users[$m]['lang'] == 'en') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[2]['en']);
                    } elseif ($users[$m]['lang'] == 'ua') {
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[2]['ua']);

                }
                $manager->introduce();
            }
        }

        break;

}
?>
<form >
    <select name="lang" method="GET">
        <option value="ru">Русский</option>
        <option value="ua">Українська</option>
        <option value="en">English</option>
    </select>
    <input type="submit" class="b2" value="Ok">
</form>

<form method="GET">
    <input type="submit" class="b1" name="exit"  value="Exit">
</form>

<form name = "test" action = "admin.php" method = "post">
    <button><font color ="black">Admin</font></button>
</form>
<form name = "test" action = "client.php" method = "post">
    <button><font color ="black">Client</font></button>
</form>