<?php 
    $file = fopen("../pass/dbc.txt", "r") or die();
    $filestring=fgets($file);
    $filearray= explode(",", $filestring);
    fclose($file);
    function dbc(){
        global $filearray;
        $host="$filearray[0]";
        $user="$filearray[1]";
        $password="$filearray[2]";
        $database="$filearray[3]";
        $dbc=mysqli_connect($host,$user,$password,$database);
        return $dbc;
    }
?>