<?php

    setcookie("lang", "it", time() + (60*60*24), "/");
    header("Location:../pages/it/index.html");
