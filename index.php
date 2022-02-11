<?php

if (isset($_COOKIE["lang"]) && !empty(trim($_COOKIE["lang"]))) {
    $lang = $_COOKIE["lang"];
    header("Location:pages/$lang/index.html");
}else{
    header("Location:php/welcome.php");
}
