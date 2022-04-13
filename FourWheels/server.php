<?php 
    $users_json = file_get_contents('users.json');
 
    $decoded_json = json_decode($users_json, true);
     
    $users = $decoded_json["users"];
     
    foreach($users as $user) {
        if($user["name"] == $_GET["login"] && $user["password"] == $_GET["password"]) {
            header( 'Location: index.php' );
            return;
        }
    }
    echo "error";
?>