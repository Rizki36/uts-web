<?php
require_once("./helper/index.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $_SESSION['isLoggedIn'] = true;
    redirect("./dashboard.php");
} else {
    set_flashdata("error", "Login gagal");
    redirect("./index.php");
}
