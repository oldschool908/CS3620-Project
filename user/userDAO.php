<?php
class UserDAO {
  function getUser($user){
    require_once('./utilities/connection.php');
    
    $sql = "SELECT first_name, last_name, username, user_id FROM users WHERE user_id =" . $user->getUserId();
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }

  function createUser($user){
    require_once('./utilities/connection.php');
    
    $sql = " INSERT INTO `CS3620`.`users`
    (`username`,
    `first_name`,
    `last_name`,
    `password`)
    VALUES
    ('" . $user->getUsername() . "',
    '"  . $user->getFirstName() . "',
    '"  . $user->getLastName() . "',
    '"  . $user->getPassword() . "');";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $user->setFirstName($row["first_name"]);
        $user->setLastName($row["last_name"]);
        $user->setUsername($row["username"]);
    }
    } else {
        echo "0 results";
    }
    $conn->close();
  }
}
?>