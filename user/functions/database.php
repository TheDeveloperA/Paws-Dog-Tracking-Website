<?php

/**
 * Created by PhpStorm.
 * User: A's
 * Date: 26/03/2018
 * Time: 17:26
 *
 * This file is used to store all the functions used to communicate with DB.
 */

// Contains information to connect to DB.
require ($_SERVER['DOCUMENT_ROOT']."/Project/user/includes/config.php");


    /**
     * @param $email_address - The email address of the User, where the dog is saved to.
     * @return array - Returns array of dogs registered to user.
     */
    function getDogs($email_address){

        global $db;

        $sql_query = "SELECT * FROM dogs WHERE dogs_user_email = '$email_address' ";
        $result = mysqli_query($db,$sql_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $dogs_id = $row["dogs_id"];
        $dogs_user_email = $row["dogs_user_email"];
        $dogs_name = $row["dogs_name"];
        $dogs_age = $row["dogs_age"];
        $dogs_weight = $row["dogs_weight"];

        return array($dogs_id,$dogs_user_email,$dogs_name,$dogs_age,$dogs_weight);
    }

    /**
     * @param $id - The ID of the dog, used to retrieve all data for the dog
     * @return array - Returns array of data for the dog.
     */
    function getDogsInfoForToday($id){

        global $db;

        $date = date(date("Y/m/d"));

        $sql_query = "SELECT * FROM dogs_info WHERE dogs_info_dogs_identifier = '$id' AND dogs_date = '$date'";
        $result = mysqli_query($db,$sql_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $dogs_info_id = $row["dogs_info_id"];
        $dogs_info_dogs_identifier = $row["dogs_info_dogs_identifier"];
        $dogs_hourly_average = $row["dogs_hourly_average"];
        $dogs_min_play = $row["dogs_min_play"];
        $dogs_min_active = $row["dogs_min_active"];
        $dogs_min_rest = $row["dogs_min_rest"];
        $dogs_date = $row["dogs_date"];

        return array($dogs_info_id,$dogs_info_dogs_identifier,$dogs_hourly_average,$dogs_min_play,$dogs_min_active,
            $dogs_min_rest,$dogs_date);
    }

    /**
     * @param $id - The ID of the dog, used to retrieve all data for the dog
     * @return array - Returns array of data for the dog.
     */
    function getDogsMinPlay($id,$noOfDays){

        global $db;

        $sql_query = "SELECT SUM(dogs_min_play) FROM dogs_info WHERE dogs_info_dogs_identifier = '$id' AND dogs_date > CURRENT_DATE - INTERVAL '$noOfDays' DAY";

        $result = mysqli_query($db,$sql_query);

        if ($result === FALSE){
            $sum = -1;
        }else{

            $row = mysqli_fetch_row($result);
            $sum = $row[0];
        }

        return $sum;
    }

    function getDogsMinActive($id,$noOfDays){

        global $db;

        $sql_query = "SELECT SUM(dogs_min_active) FROM dogs_info WHERE dogs_info_dogs_identifier = '$id' AND dogs_date > CURRENT_DATE - INTERVAL '$noOfDays' DAY";

        $result = mysqli_query($db,$sql_query);

        if ($result === FALSE){
            $sum = -1;
        }else{

            $row = mysqli_fetch_row($result);
            $sum = $row[0];
        }

        return $sum;

    }

    function getDogsMinRest($id,$noOfDays){

        global $db;

        $sql_query = "SELECT SUM(dogs_min_rest) FROM dogs_info WHERE dogs_info_dogs_identifier = '$id' AND dogs_date > CURRENT_DATE - INTERVAL '$noOfDays' DAY";

        $result = mysqli_query($db,$sql_query);

        if ($result === FALSE){
            $sum = -1;
        }else{

            $row = mysqli_fetch_row($result);
            $sum = $row[0];
        }

        return $sum;

    }

    function getDogsDataFor30days($id){

        global $db;

        $sql_query = "SELECT * FROM dogs_info WHERE dogs_info_dogs_identifier = '$id' AND dogs_date > CURRENT_DATE - INTERVAL '30' DAY ORDER BY dogs_date ASC";

        $result = mysqli_query($db,$sql_query);

        $rows =  mysqli_fetch_all($result);

        return $rows;

    }


    /**
     * @param $id - the user id associated with the account.
     * @return mixed - returns the users name save on database.
     */
    function getNameFromDB($id){

        global $db;

        $sql_query = "SELECT * FROM users WHERE users_id =  '$id' ";
        $result = mysqli_query($db,$sql_query);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row > 0){

            $users_name = $row["users_name"];

            return $users_name;

        }else{

            return "null";
        }

    }

    function getEmailFromDB($id){

        global $db;

        $sql_query = "SELECT * FROM users WHERE users_id =  '$id' ";
        $result = mysqli_query($db,$sql_query);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row > 0){

            $users_email = $row["users_email"];

            return $users_email;

        }else{

            return "null";
        }

    }


    function getIDFromDB($email_address){

        global $db;

        $sql_query = "SELECT * FROM users WHERE users_email =  '$email_address' ";
        $result = mysqli_query($db,$sql_query);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row > 0){

            $users_id = $row["users_id"];

            return $users_id;

        }else{

            return "null";
        }
    }

    function insertNewName($id,$name){

        global $db;

        $sql_query = "UPDATE users SET users_name = '$name' WHERE users_id = '$id'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }

    function insertNewPass($id,$pass){

        global $db;

        $sql_query = "UPDATE users SET users_pass = '$pass' WHERE users_id = '$id'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }

    function insertNewEmail($id,$new_email){

        global $db;

        $sql_query = "UPDATE users SET users_email = '$new_email' WHERE  users_id = '$id'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }

    function insertDogName($email_address, $dogs_name){

        global $db;

        $sql_query = "UPDATE dogs SET dogs_name = '$dogs_name' WHERE  dogs_user_email = '$email_address'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }

    function insertDogAge($email_address, $dogs_age){

        global $db;

        $sql_query = "UPDATE dogs SET dogs_age = '$dogs_age' WHERE  dogs_user_email = '$email_address'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }

    function insertDogWeight($email_address, $dogs_weight){

        global $db;

        $sql_query = "UPDATE dogs SET dogs_weight = '$dogs_weight' WHERE  dogs_user_email = '$email_address'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }


