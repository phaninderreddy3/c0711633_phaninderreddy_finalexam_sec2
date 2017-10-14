<?php
  class User {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    public $id;
    public $username;
    public $password;

    public function __construct($id, $username, $email) {
      $this->id      = $id;
      $this->username  = $username;
      $this->email = $email;
    }

    /* member login function to fetch a user from users table
     * fetch on either username or email
     * @param : $username and $password
     * @return : fetched user object or NULL if not found
    */
    public static function login($username,$password) {
      try{
          if(!empty($username) && !empty($password)){
              $db = Db::getInstance();

              $req = $db->prepare('SELECT * FROM users WHERE username = :username');
              
              $req->execute(array('username' => $username));
              $user = $req->fetch();
              if(!empty($user)){
                if(password_verify($password,$user['password']) == 1){
                    $_SESSION['user_session'] = $user['userID'];
                    return new User($user['userID'], $user['username'], $user['email']);
                }else{
                    return 'Please check your entered password';
                }
              }else{
                  return 'OOP! We couldn\'t find you. Please try logging again';
              }
          }
       }
       catch(PDOException $e)
       {
           return $e->getMessage();
       }

    }
    public static function validate($post) {
            //validate data
            $error = [];
            $db = Db::getInstance();
            if(strlen($post['username']) < 3){
                $error[] = 'Username is too short.';
            } else {
                
                $stmt = $db->prepare('SELECT username FROM users WHERE username = :username');
                $stmt->execute(array(':username' => $post['username']));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if(!empty($row['username'])){
                    $error[] = 'Username provided is already in use.';
                }
                
            }
            if($post['password'] != $post['passwordConfirm']){
                    $error[] = 'Passwords do not match.';
            }
            //email validation
            if(!filter_var($post['email'], FILTER_VALIDATE_EMAIL)){
                $error[] = 'Please enter a valid email address';
            } else {
                
                $stmt = $db->prepare('SELECT email FROM users WHERE email = :email');
                $stmt->execute(array(':email' => $post['email']));
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if(!empty($row['email'])){
                    $error[] = 'Email provided is already in use.';
                }

            }
            return $error;
    }
      
    public static function register($username, $password, $email, $telephone) {
        try{
            if(!empty($username) && !empty($password)){
                $db = Db::getInstance();
                $stmt = $db->prepare('INSERT INTO users (username,password,email,telephone) VALUES (:username, :password, :email, :telephone)');
                $stmt->execute(array(
                ':username' => $username,
                ':password' => $password,
                ':email' => $email,
                ':telephone' => $telephone
            ));
            $id = $db->lastInsertId('userID');
            $_SESSION['new_user'] = $id;
            return $id;       
            }
        }
        catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }        

  }
?>
