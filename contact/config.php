<?php
    $con = new mysqli('localhost','root','','contacts');

    try{
        $con = new mysqli('localhost','root','','contacts');

        if(!$con){
            echo"<script>alert('error')</script>";
        }

    }catch(mysqli_sql_exception $e){

    }


?>
