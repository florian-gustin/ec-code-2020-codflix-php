<?php

require_once('controller/homeController.php');
require_once('controller/loginController.php');
require_once('controller/signupController.php');
require_once('controller/mediaController.php');
require_once('controller/checkingController.php');
require_once('controller/profileController.php');
require_once('controller/contactController.php');

/**************************
 * ----- HANDLE ACTION -----
 ***************************/

if (isset($_GET['action'])):

    switch ($_GET['action']):

        case 'login':

            if (!empty($_POST)) login($_POST);
            else loginPage();

            break;

        case 'signup':

            if (!empty($_POST)) signup($_POST);
            else signupPage();

            break;

        case 'checking':
            if(isset($_GET['email']) && !empty($_GET['email'])) $_SESSION['ses_email'] = htmlspecialchars($_GET['email']);

            checkingPage();

            break;

        case 'silentsearch':

            silentSearch();

            break;

        case 'silentcheck':

            silentCheck();

            break;

        case 'silenthistory':

            silentHistory();

            break;
        case 'silentfavorite':

            silentFavorite();

            break;

        case 'silentisfavorite':

            silentIsFavorite();

            break;

        case 'silentmodal':

            silentModal();

            break;

        case 'silentseries':

            silentSeries();

            break;

        case 'logout':

            logout();

            break;

        case 'profile':
            if (!empty($_POST)) updateProfile($_POST);

            profilePage();

            break;


        case 'deleting':

            deleteProfile();

            break;

        case 'deletehistory':

            deleteHistory();

            break;

        case 'deleteallhistory':

            deleteAllHistory();

            break;
        case 'contact':
            if (!empty($_POST)) sendContactMessage($_POST);

            contactPage();

            break;

        case 'fix1':

            $_SESSION['err_msg'] = '';

            break;


    endswitch;

else:

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;

    if ($user_id):
        mediaPage();
    else:
        homePage();
    endif;

endif;
