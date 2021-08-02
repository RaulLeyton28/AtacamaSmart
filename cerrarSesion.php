<?php

session_start();

session_destroy();

header("location: sesion.html");
exit();

?>