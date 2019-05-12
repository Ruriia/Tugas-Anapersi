<?php

 function connection(){
        try{
            $a = "mysql:host=localhost; dbname=lagendia";
            $key = new PDO($a,"root","");
            return $key;
        }catch(PDOExcption $e){
        	
        }
 }
 
?>