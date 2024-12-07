<?php
namespace App\Models;

use App\Helpers\DBConnection;

class VisitorModel {
    public function createVisitorSession($name, $duration) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("INSERT INTO visitors (name, duration, created_at) VALUES (?, ?, NOW())");
        $stmt->bind_param("si", $name, $duration);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function validateVisitor($visitorID) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM visitors WHERE id = ? AND created_at > NOW() - INTERVAL duration HOUR");
        $stmt->bind_param("i", $visitorID);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }
}
