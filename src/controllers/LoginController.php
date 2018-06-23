<?php
/**
 * Created by PhpStorm.
 * User: jeanmarcos
 * Date: 14/06/2018
 * Time: 12:06
 */

namespace App\controllers;

use App\dao\UserDAO;
use App\model\User;
use App\utils\InstagramApi;

class LoginController
{
    /**
     *
     */
    public function login()
    {
        if (isset($_GET['code'])){
            $u = new User();
            $userDao = new UserDAO();
            $login = $_GET['code'];
            session_start();

            try {
                $instagram_ob = new InstagramApi();
                $access_token = $instagram_ob->GetAccessToken(INSTAGRAM_CLIENT_ID, INSTAGRAM_REDIRECT_URI, INSTAGRAM_CLIENT_SECRET, $login);
                $user_info = $instagram_ob->GetUserProfileInfo($access_token);

                $u->setName($user_info['full_name']);
                $u->setImageUrl($user_info['profile_picture']);
                $u->setIdInstagramHash(md5($user_info['id']));
                $u->setMyInstagram($user_info['username']);
                $u->setIdInstagram($user_info['id']);

                $login = $userDao->saveUser($u);

                if ($login || $login == '23000'){
                    $_SESSION['logged_in'] = 1;
                    setcookie("user", md5($user_info['id']) , time() + (86400 * 30), "/");
                }
                else{
                    var_dump($login);
                }

                header('Location: /');

                return true;
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
        session_start();
        session_destroy();
        header("Location: /");
    }
}