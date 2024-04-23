<?php

use Firebase\Auth\Token\Exception\InvalidToken;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

session_start();
require('./app/config/dbconfig.php');
require "./app/views/login.view.php";

// if(isset($_POST['login_btn'])){
//     $email = $_POST['email'];
//     $clearTextPassword = $_POST['password'];

//     try {
//         $user = $auth->getUserByEmail($email);
//         try {
//             $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
//             $idTokenString = $signInResult->idToken(); 

//             try {
//                 $verifiedIdToken = $auth->verifyIdToken($idTokenString);
//                 $uid = $verifiedIdToken->claims()->get('sub');

//                 $_SESSION['verified_user_id'] = $uid;
//                 $_SESSION['idTokenSTRING'] = $idTokenString;

//                 $_SESSION = 'Login successfully!';
//                 header('Location: ./app/Controllers/index.php');
//                 exit();

//             } catch (FailedToVerifyToken $e) {
//                 echo 'The token is invalid: '.$e->getMessage();
//             }



//         }catch(Exception){
//             $_SESSION = "Wrong password!";
//             header('Location: ./app/views/login.view.php');
//             exit();
//         }
        

//     } catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
//         $_SESSION = "Invalid email address";
//         header('Location: ./app/views/login.view.php');
//         exit();
//     }

// }else {
//     $_SESSION = "Not Allowed";
//     header('Location: ./app/views/login.view.php');
//     exit();
// }

?>