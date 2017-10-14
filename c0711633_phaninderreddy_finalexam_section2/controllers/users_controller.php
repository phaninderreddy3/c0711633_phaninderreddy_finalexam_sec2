<?php    

class UsersController
{
    public function login()
    { 
        // we expect a url of form ?controller=users&action=login&username=kkk&password=jjj
        // without username and password we just redirect to the error page 
        if (!isset($_POST['username']) && !isset($_POST['password'])) {
            require_once('views/users/login.php');
        }else{
            $user = User::login($_POST['username'], $_POST['password']);
            if($user instanceof User){
                $user_name = $_POST['username'];
                require_once('views/pages/home.php');
            }else{
                require_once('views/users/login.php');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        require_once('views/pages/home.php');
    }
    
    public function register()
    { 
        $error = '';
        if (!isset($_POST['username']) ) {
            require_once('views/users/register.php');
        }else{
           $error = User::validate($_POST) ;    
            if(empty($error)){
                //hash the password
                $hashedpassword = password_hash($_POST['password'], PASSWORD_BCRYPT); 
                $newuser_id = User::register($_POST['username'], $hashedpassword, $_POST['email'], $_POST['telephone'] );              
                if(!empty($newuser_id)){
                    require_once('views/pages/home.php');
                   unset($_SESSION['new_user']);
                }
            }else{          
                $err_msg = implode("|", $error);
                require_once('views/users/register.php');
            }
        }
         
     }
         
}