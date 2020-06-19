<?php
require '../resources/Class.php';
if ((!(($_SESSION['role']) == 'admin')) && (!(($_SESSION['role']) == 'manager'))){
    session_destroy();
    header( 'location: \auth\login.html');
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
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[4]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[4]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[4]['ua']);
                        break;
                }
                $admin->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[4]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[4]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[4]['ua']);
                        break;
                }
                $admin->introduce();
            }
        }
        break;
    case 'manager';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[2]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[2]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[2]['ua']);
                        break;
                }
                $manager->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[2]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[2]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[2]['ua']);
                        break;
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