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
    function getDogsInfo($id){

        global $db;

        $sql_query = "SELECT * FROM dogs_info WHERE dogs_info_dogs_identifier = '$id'";
        $result = mysqli_query($db,$sql_query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        $dogs_info_id = $row["dogs_info_id"];
        $dogs_info_dogs_identifier = $row["dogs_info_dogs_identifier"];
        $dogs_hourly_average = $row["dogs_hourly_average"];
        $dogs_min_play = $row["dogs_min_play"];
        $dogs_min_active = $row["dogs_min_active"];
        $dogs_min_rest = $row["dogs_min_rest"];
        $dogs_date = $row["dogs_min_date"];

        return array($dogs_info_id,$dogs_info_dogs_identifier,$dogs_hourly_average,$dogs_min_play,$dogs_min_active,
            $dogs_min_rest,$dogs_date);
    }

    /**
     * @param $email_address - the email address associated with the account.
     * @return mixed - returns the users name save on database.
     */
    function getNameFromDB($email_address){

        global $db;

        $sql_query = "SELECT * FROM users WHERE users_email =  '$email_address' ";
        $result = mysqli_query($db,$sql_query);

        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

        if ($row > 0){

            $users_name = $row["users_name"];

            return $users_name;

        }else{

            return "null";
        }

    }

    function insertNewName($email_Address,$name){

        global $db;

        $sql_query = "UPDATE users SET users_name = '$name' WHERE users_email = '$email_Address'";

        if (mysqli_query($db,$sql_query)){
            echo "saved";
        }else{
            echo "error";
        }
    }
