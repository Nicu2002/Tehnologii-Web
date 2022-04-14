<?php
    session_start(); 
    $users_json = file_get_contents('users.json');
 
    $decoded_json = json_decode($users_json, true);
     
    $users = $decoded_json["users"];
    foreach($users as $user) {
        if($user["name"] == $_GET["login"] && $user["password"] == $_GET["password"]) {
            $_SESSION["logged"] = true;
            $_SESSION["login"] = $user["name"];
            header( 'Location: index.php' );
            return;
        }
    }

    echo "error";
?>