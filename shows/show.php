<?php
require_once("./shows/showDAO.php");

class Show implements \JsonSerializable{

    private $show_id;
    private $show_title;
    private $show_rating;
    private $show_description;
    private $user_id;


    function __construct(){

    }

    function getShowId(){
        return $this->show_id;
    }
    function setShowId($show_id){
        $this->show_id = $show_id;
    }

    function getShowTitle(){
        return $this->show_title;
    }
    
    function setShowTitle($show_title){
        $this->show_title = $show_title;
    }

    function getShowRating(){
        return $this->show_rating;
    }
    function setShowRating($show_rating){
        $this->show_rating = $show_rating;
    }

    function getShowDescription(){
        return $this->show_description;
    }
    function setShowDescription($show_description){
        $this->show_description = $show_description;
    }

    function getUserId(){
        return $this->user_id;
    }
    function setUserId($user_id){
        $this->user_id = $user_id;
    }

    function createShow(){
        $showDAO = new showDAO();
        $showDAO->createShow($this);
      }
      
    function deleteShow($user_id, $show_id){
        $showDAO = new showDAO();
        return $showDAO->deleteShow($user_id, $show_id);
    }

    public function getMyShows($user_id){
        $showDAO = new showDAO();
        return $showDAO->getShowsByUserId($user_id);
    }

    public function jsonSerialize(){
        $vars = get_object_vars($this);
        return $vars;
    }
}

?>