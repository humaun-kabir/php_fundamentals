<?php
    //superglobal are built-in variables that are always available in all scopes
    $GLOBALS;
    $_SERVER;
    $_REQUEST;
    $_POST;
    $_GET;
    $_FILES;
    $_COOKIE;
    $_SESSION;

    $a = 10;
    $b = 20;

    function display(){
        echo $GLOBALS['a']. "<br>";
        echo $GLOBALS['b'];
    }

    display();

?>