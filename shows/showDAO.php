<?php

class ShowDAO{

    function getAllShows(){
        require_once('./utilities/connection.php');

        $sql="SELECT show_id, show_title, show_description, show_rating FROM cs3620.shows";
        $result = $conn->query($sql);

        $shows;
        $index = 0;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $show = new show();

            $show->setShowId($row["show_id"]);
            $show->setShowTitle($row["show_title"]);
            $show->setShowRating($row["show_rating"]);
            $show->setShowDescription($row["show_description"]);
            $shows[$index] = $show;
            $index++;
            }
        }
        $conn->close();

        return $shows;
    }
    
    function createShow($show){
        require_once('./utilities/connection.php');

        //prepare and bind
        $stmt = $conn->prepare("INSERT INTO cs3620.shows (`show_title`,
        `show_rating`,
        `show_description`) VALUES (?, ?, ?)");

        $title = $show->getShowTitle();
        $rating = $show->getShowRating();
        $desc = $show->getShowDescription();
        $show->setUserId($user_id);

        $stmt->bind_param("sss", $title, $rating, $desc);
        $stmt->execute();

        $stmt->close();
        $conn->close();

        header("Location: ./dashboard.php");

    }

    function getShowsByUserId($user_id){
        require_once('./utilities/connection.php');
        require_once('./shows/show.php');

        $sql = "SELECT show_id, show_title, show_description, show_rating FROM cs3620.shows where user_id =" . $user_id;
        $result = $conn->query($sql);

        $shows;
        $index = 0;

        if ($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
            $show = new show();

            $show->setShowId($row["show_id"]);
            $show->setShowTitle($row["show_title"]);
            $show->setShowRating($row["show_rating"]);
            $show->setShowDescription($row["show_description"]);
            $shows[$index] = $show;
            $index++;
            }
        }
        $conn->close();

        return $shows;
    }

    function deleteShow($user_id, $show_id){
        require_once('./utilities/connection.php');
    
        $sql = "DELETE FROM CS3620.shows WHERE user_id = " . $user_id . " AND show_id = ". $show_id  . ";";
    
        if($conn->query($sql) == TRUE){
            echo "Show Deleted";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    
    
    }

}


?>