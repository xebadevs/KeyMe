<?php

//    function connect(){
//        try{
//            $host = 'localhost';
//            $database = 'keyme';
//            $user = 'root';
//            $pass = '';
//
//            $pdo = new PDO(
//                "mysql:host = $host; dbname = $database", $user,  $pass
//            );
//
////            echo 'SUCCESSFUL CONNECTION TO THE DATABASE';
//
//        }catch(PDOException $error){
//            echo $error -> getMessage();
//        }
//    }
//
//    connect();

// ------------------------------------------------------------------------------------

$connection = mysqli_connect('localhost', 'root', '', 'keyme');