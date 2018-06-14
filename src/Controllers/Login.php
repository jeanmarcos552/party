<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 14/06/2018
 * Time: 12:06
 */

namespace App\Controllers;


class Login
{
    public function getDataLogin()
    {
        $login = $_GET['code'];

        session_start();
        try {
            $instagram_ob = new InstagramApi();

            $access_token = $instagram_ob->GetAccessToken(INSTAGRAM_CLIENT_ID, INSTAGRAM_REDIRECT_URI, INSTAGRAM_CLIENT_SECRET, $login);

            $user_info = $instagram_ob->GetUserProfileInfo($access_token);

            echo '<pre>';print_r($user_info); echo '</pre>';

            $_SESSION['logged_in'] = 1;

        }
        catch(\Exception $e) {
            echo $e->getMessage();
            exit;
        }

    }
}