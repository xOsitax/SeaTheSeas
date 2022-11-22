<?php

session_start();

session_destroy();

header("Location: index-1.php");
exit;
