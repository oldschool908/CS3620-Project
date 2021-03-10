<?php
// require_once("sessioncheck.php");
require_once('./user/user.php');
require_once('./shows/show.php');

class session {
  // Methods
  function login($username, $password) {
    $user = new User();
    $loggedInUser = $user->checkLogin($username, $password);
    if($loggedInUser != 0){
      $_SESSION["loggedIn"] = true;
      $_SESSION["user_id"] = $loggedInUser;
      return true;
    }
    else{
      logout();
      return false;
    }
  }
  function logout(){
    unset($_SESSION["loggedIn"]);
    unset($_SESSION["user_id"]);
  }



}
?>