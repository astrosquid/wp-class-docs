<?php
    ini_set('display_errors', 1);
    date_default_timezone_get("America/New_York");

    function GetConnection() {
        $sql_password = 'some_pass';
        return new mysqli( 'localhost', 'bo', $sql_password, 'c9' );
    }
    
    