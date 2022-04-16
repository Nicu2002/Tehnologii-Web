<?php 
    session_start();
    $users_json = file_get_contents('users.json');
    $decoded_json = json_decode($users_json, true);
    $users = $decoded_json["users"];

    foreach($users as $user) {
        if($user["name"] == $_POST["login"] || $user["email"] == $_POST["email"]) {
            $_SESSION["regSucces"] = false;
            header( 'Location: auth-page.php' );
        }
    }
    if($_SESSION["regSucces"] == true) {
        array_push($users, [
            'name' => $_POST["login"],
            'email' => $_POST["email"],
            'password' => $_POST["password"],
        ]);
        $new_users_array = (object)[
            "users" => $users
        ];
        $final_data = json_encode($new_users_array);
        file_put_contents('users.json', $final_data);
        $_SESSION["logged"] = true;
        $_SESSION["login"] = $_POST["login"];
        header( 'Location: index.php' );
    }
?>