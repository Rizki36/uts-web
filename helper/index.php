<?php

if (session_status() === PHP_SESSION_NONE)
    session_start();

if (!function_exists("set_flashdata")) {
    function set_flashdata($key = "", $value = "")
    {
        if (!empty($key) && !empty($value)) {
            $_SESSION['_flashdata'][$key] = $value;
            return true;
        }
        return false;
    }
}

if (!function_exists("get_flashdata")) {
    function get_flashdata($key = "")
    {
        if (!empty($key) && isset($_SESSION['_flashdata'][$key])) {
            $data = $_SESSION['_flashdata'][$key];
            unset($_SESSION['_flashdata'][$key]);
            return $data;
        }
    }
}


if (!function_exists("redirect")) {
    function redirect($file)
    {
        header("location: $file", true, 301);
        exit();
    }
}

if (!function_exists("useAuth")) {
    function useAuth()
    {
        if (!isset($_SESSION['isLoggedIn'])) redirect("./index.php");
    }
}
