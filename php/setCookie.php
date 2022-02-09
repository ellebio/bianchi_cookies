<?php

    setcookie("lang", "it", time() + (60*60*24), "/");

    echo("setto il cookie");

?>
<br><br>
<a href="readCookie.php"><button>Read cookie language</button></a>