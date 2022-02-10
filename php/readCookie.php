<?php

if (isset($_COOKIE["lang"])) {
    $lang = $_COOKIE["lang"];
    switch ($lang) {
        case "it":
            header("Location:../pages/it/index.html");
            break;
        case "fr":
            header("Location:../pages/fr/index.html");
            break;
        case "es":
            header("Location:../pages/es/index.html");
            break;
    }
}else{
    header("Location:welcome.php");
}
