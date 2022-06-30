<?php
include "/Applications/XAMPP/xamppfiles/htdocs/pro1014_duan/sources/Utils/Database.php";
include '../User.php';

class UserDAO {
    private $database;
    public function __construct() {
        $this->database = new Database();
        $this->database = $this->database->getDatabase();
    }

    public function getUserByID($id) {
        if($this->database->connect_error) {
            return false;
        } else {
            $query = $this->database->prepare("SELECT * FROM `User` WHERE `User`.`id` = ?");
            $query->bind_param('s', $id);

            if($query->execute()) {
                $result = $query->get_result();
                if($result->num_rows > 0) {
                    $user = $result->fetch_assoc();
                    return new User($user['id'], $user['username'], $user['password'], $user['email'], $user['fullname'], $user['phone_number'], $user['currency'], $user['role_id']);
                } else return false;
            } else return false;
        }
    }
}

?>