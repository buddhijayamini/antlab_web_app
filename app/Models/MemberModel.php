<?php
namespace App\Models;

use App\Helpers\DBConnection;

class MemberModel {
    public function validateMemberCredentials($memberID, $pin) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM members WHERE member_id = ? AND pin = ?");
        $stmt->bind_param("ss", $memberID, $pin);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }

    public function getMemberDetails($memberID) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM members WHERE member_id = ?");
        $stmt->bind_param("s", $memberID);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function createMember($memberID, $name, $email, $pin) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("INSERT INTO members (member_id, name, email, pin) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $memberID, $name, $email, $pin);
        $stmt->execute();
        return $stmt->insert_id;
    }
}
