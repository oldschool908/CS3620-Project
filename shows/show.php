<?php
require_once('./shows/showDAO.php');

class Show implements \JsonSerializable{

    private $show_id;
    private $show_title;
    private $show_rating;
    private $show_description;


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

    function createShow(){
        $showDAO = new showDAO();
        $showDAO->createShow($this);
      }


    public function getMyShows(){
        $showDAO = new showDAO();
        return $showDAO->getAllShows();
    }

    public function jsonSerialize(){
        $vars = get_object_vars($this);
        return $vars;
    }
}

?>