<?php

if (isset($_COOKIE["lang"]) && !empty(trim($_COOKIE["lang"]))) {
    setcookie("lang");
    header("Location:welcome.php");
}else{
    header("Location:welcome.php");
}