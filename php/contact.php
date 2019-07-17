<?php
    $array = array("firstname" => "", "name" => "", "mail" => "", "phone" => "", "message" => "", "firstnameError" => "", "nameError" => "", "mailError" => "", "phoneError" => "", "messageError" => "", "isSuccess" => false);

    $emailTo = "contact@benperez.fr";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $array["firstname"] = verifyInput($_POST['firstname']);
        $array["name"] = verifyInput($_POST['name']);
        $array["mail"] = verifyInput($_POST['mail']);
        $array["phone"] = verifyInput($_POST['phone']);
        $array["message"] = verifyInput($_POST['message']);
        $array["isSuccess"] = true;
        $emailText = "";
        
        if(empty($array["firstname"])){
            $array["firstnameError"] = "Je veux connaitre ton prénom !";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "Firstname : {$array["firstname"]}\n"; 
        }
        if(empty($array["name"])){
            $array["nameError"] = "Et oui je veux tout savoir. Même ton nom !";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "Name : {$array["name"]}\n"; 
        }
        if(!isEmail($array["mail"])){
            $array["mailError"] = "Ce n'est pas un email valide ça !";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "mail : {$array["mail"]}\n"; 
        }
        if(!isPhone($array["phone"])){
            $array["phoneError"] = "Que des chiffres et des espaces, stp...";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "phone : {$array["phone"]}\n"; 
        }
        if(empty($array["message"])){
            $array["messageError"] = "Tu ne veux rien me dire ?";
            $array["isSuccess"] = false;
        } else {
            $emailText .= "Message : {$array["message"]}\n"; 
        }
        if($array["isSuccess"]){
            $headers = "From: {$array["firstname"]} {$array["name"]} <{$array["mail"]}>\r\nReply-To: {$array["mail"]}";
            mail($emailTo, "Message du site CV", $emailText, $headers);
            
        }
        echo json_encode($array);
    }
    
    function isPhone($var){
        return preg_match("/^[0-9 ]*$/",$var);
    }
    function isEmail($var){
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
    function verifyInput($var){
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);
        
        return $var;
    }
?>