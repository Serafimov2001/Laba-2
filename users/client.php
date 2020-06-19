<?php
require '../resources/Class.php';
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
}
switch($_SESSION['role']) {
    case 'admin';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                }
                $admin->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
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
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                }
                $manager->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[5]['ru']);
                        break;
                    case 'en';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[5]['en']);
                        break;
                    case 'ua';
                        $manager = new manager($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[5]['ua']);
                        break;
                }
                $manager->introduce();
            }
        }
        break;
    case 'client';
        for ($m = 0; $m < count($users); $m++) {
            if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))) {
                switch ($users[$m]['lang']) {
                    case 'ru';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[3]['ru']);
                        break;
                    case 'en';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[3]['en']);
                        break;
                    case 'ua';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[3]['ua']);
                        break;
                }
                $client->introduce();
            }
            if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))) {
                switch ($_GET['lang']) {
                    case 'ru';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[3]['ru']);
                        break;
                    case 'en';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[3]['en']);
                        break;
                    case 'ua';
                        $client = new client($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[3]['ua']);
                        break;
                }
                $client->introduce();
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
<form name = "test" action = "manager.php" method = "post">
    <button><font color ="black">Manager</font></button>
</form>