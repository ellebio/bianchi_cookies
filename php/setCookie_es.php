<?php

    setcookie("lang", "es", time() + (60*60*24), "/");
    header("Location:../pages/es/index.html");
