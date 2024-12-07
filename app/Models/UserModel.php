<?php
namespace App\Models;

use App\Helpers\DBConnection;

class UserModel {
    public function getUserByID($userID) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $userID);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function userExists($userID) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT id FROM users WHERE id = ?");
        $stmt->bind_param("i", $userID);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }

    public function createUser($name, $email, $phone) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("INSERT INTO users (name, email, phone) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $phone);
        $stmt->execute();
        return $stmt->insert_id;
    }
}
