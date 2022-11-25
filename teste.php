<?php
    session_start();
?>

<?php
$url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$home = $_SERVER['HTTP_HOST'] . "/site/";
$mat = $_SERVER['HTTP_HOST'] . "/site/materias/matematica.php/";
$port = $_SERVER['HTTP_HOST'] . "/site/materias/portugues.php/";
$fis = $_SERVER['HTTP_HOST'] . "/site/materias/fisica.php/";
$soc = $_SERVER['HTTP_HOST'] . "/site/materias/sociologia.php/";
$hist = $_SERVER['HTTP_HOST'] . "/site/materias/historia.php/";
$geo = $_SERVER['HTTP_HOST'] . "/site/materias/geografia.php/";
$ing = $_SERVER['HTTP_HOST'] . "/site/materias/ingles.php/";
$esp = $_SERVER['HTTP_HOST'] . "/site/materias/espanhol.php/";
$bio = $_SERVER['HTTP_HOST'] . "/site/materias/biologia.php/";
$qui = $_SERVER['HTTP_HOST'] . "/site/materias/quimica.php/";
$filo = $_SERVER['HTTP_HOST'] . "/site/materias/filosofia.php/";

function url($url, $home) : string {
    if($url == $home) {
        return "";
    }else if($url == $GLOBALS['mat']) {
        return "../../";
    } else if($url == $GLOBALS['port']) {
        return "../../";
    } else if($url == $GLOBALS['fis']) {
        return "../../";
    } else if($url == $GLOBALS['soc']) {
        return "../../";
    } else if($url == $GLOBALS['hist']) {
        return "../../";
    } else if($url == $GLOBALS['geo']) {
        return "../../";
    } else if($url == $GLOBALS['ing']) {
        return "../";
    } else if($url == $GLOBALS['esp']) {
        return "../";
    } else if($url == $GLOBALS['bio']) {
        return "../";
    } else if($url == $GLOBALS['qui']) {
        return "../";
    } else if($url == $GLOBALS['filo']) {
        return "../";
    } else {
        return "/site/";
    }
}
?>