<?php

require_once("./helper/index.php");

unset($_SESSION['isLoggedIn']);
redirect("index.php");
