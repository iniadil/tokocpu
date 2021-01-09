<?php

    date_default_timezone_set('Asia/Jakarta');

    if (session_start() == PHP_SESSION_NONE){
        session_start();
    }

    $koneksi = new mysqli('localhost','root','','tokocpu_db');

    ini_set('display_errors','on');