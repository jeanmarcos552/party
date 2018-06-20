<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 14/06/2018
 * Time: 12:06
 */

namespace App\Controllers;

use App\dao\UserDAO;
use App\Model\User;
use App\utils\InstagramApi;
use InstagramScraper\Model\Location;

class LoginController
{


    /**
     *
     */
    public function login()
    {
        if (isset($_GET['code'])){

            $u = new User();
            $login = $_GET['code'];
            session_start();
            try {
                $instagram_ob = new InstagramApi();
                $access_token = $instagram_ob->GetAccessToken(INSTAGRAM_CLIENT_ID, INSTAGRAM_REDIRECT_URI, INSTAGRAM_CLIENT_SECRET, $login);
                $user_info = $instagram_ob->GetUserProfileInfo($access_token);

                $u->setName($user_info['full_name']);
                $u->setImageUrl($user_info['profile_picture']);
                $u->setMyInstagram($user_info['username']);
                $u->setIdInstagram($user_info['id']);

                //$userDao->saveUser($u);

                $_SESSION['logged_in'] = 1;

                return $u;
            }
            catch(\Exception $e) {
                echo $e->getMessage();
                exit;
            }
        }
        else{
            return false;
        }
    }

    public function logout()
    {
        session_destroy();

        header("Location: /");
    }
}