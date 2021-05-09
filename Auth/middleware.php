<?php


class middleware
{
    public static function checkMiddleware()
    {
        session_start();
        if(!$_SESSION['id'])  //sudhu teacher ra
        {
            die("You are not logged in");
        }
    }
}