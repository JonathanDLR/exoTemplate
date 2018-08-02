<?php

session_start();

session_unset();

session_destroy();

header('Location: /jdlr/300718/index.php');
?>
