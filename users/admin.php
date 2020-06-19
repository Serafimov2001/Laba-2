<?php
require '../resources/Class.php';
if (!(($_SESSION['role']) == 'admin')) {
    session_destroy();
    header("Location: ..\auth\login.html");
}
class admin extends User {

    public function introduce (){
        echo $this ->langhi . $this->name. "  " . $this->surname. "  ". $this ->langinfo;
    }
}

for ($m = 0; $m < count($users); $m++){
    if (($_SESSION['login'] == $users[$m]['login']) && !(isset($_GET['lang']))){
        switch ($users[$m]['lang']){
            case 'ru';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[1]['ru']);
                break;
            case 'en';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[1]['en']);
                break;
            case 'ua';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[1]['ua']);
                break;
        }
        $admin ->introduce();
    }
    if (($_SESSION['login'] == $users[$m]['login']) && (isset($_GET['lang']))){
        switch ($_GET['lang']){
            case 'ru';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ru'], $lang[1]['ru']);
                break;
            case 'en';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['en'], $lang[1]['en']);
                break;
            case 'ua';
                $admin = new admin($users[$m]['login'], $users[$m]['password'], $users[$m]['name'], $users[$m]['surname'], $users[$m]['role'], $lang[0]['ua'], $lang[1]['ua']);
                break;
        }
        $admin ->introduce();
    }
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
<form name = "test" action = "manager.php" method = "post">
    <button><font color ="black">Manager</font></button>
</form>
<form name = "test" action = "client.php" method = "post">
    <button><font color ="black">Client</font></button>
</form>