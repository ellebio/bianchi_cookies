<?php

    setcookie("lang", "fr", time() + (60*60*24), "/");
    header("Location:../pages/fr/index.html");
