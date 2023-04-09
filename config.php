<?php
ini_set('display_errors', 'On');
session_start();
define('SITE_TITLE','MY PROJECT');

$docroot = $_SERVER['DOCUMENT_ROOT']. '/frontend';

$webroot = 'http://myBB.test/frontend/';
$elements = $docroot.'/elements';

define('CSS',$webroot."/public/assets/css");
define('BS',$webroot."/public/bootstrap");



// $frontend = 'http://myBB.test';
// $admin    = 'http://myBB.test';


function redirect($url){
    header('location:'.$url);
}

function d($data){  
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function dd($data){
    d($data);
    die();
}




function connectDb($displayMessage=false){
        
    $host = 'localhost';
    $dbusername = 'root';
    $dbpassword = "root";
    $db = "blood_bank";

    $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($pdo) {
            if($displayMessage){
                echo "Connected to the $db database successfully!";
            }
            return $pdo;
        }

    } catch (PDOException $e) {
        echo $e->getMessage();
    } 

}

function insert($sql, $data){
    try{
        $pdo = connectDB();
        $stmt = $pdo->prepare($sql);
        return $stmt->execute($data);
    }catch(Exception $e){
        echo $e->getMessage();
    }
}