<?php

 /* function __autoload($class)
  {
      $file = str_replace('_','/',substr($class,2)).'.php';     
      require_once(FR_BASE_PATH.'/includes/'.$file);
  }
*/      

  function call($controller, $action) { 
    // require the file that matches the controller name
    require_once('controllers/' . $controller . '_controller.php');

    // create a new instance of the needed controller
    
    if($controller){
        $controller_class = ucfirst($controller).'Controller'; 
        require_once('models/user.php');
        $controller = new $controller_class();
        
    }
    $controller->{ $action }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('pages' => ['home', 'error'], 
                       'users' => ['login', 'register', 'logout']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>