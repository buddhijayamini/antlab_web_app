<?php
namespace App\Models;

use App\Helpers\DBConnection;

class OTPModel {
    public function generateOTP($phone) {
        $otp = rand(100000, 999999);
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("INSERT INTO otps (phone, otp, created_at) VALUES (?, ?, NOW())");
        $stmt->bind_param("ss", $phone, $otp);
        $stmt->execute();
        return $otp;
    }

    public function validateOTP($phone, $otp) {
        $db = DBConnection::getConnection();
        $stmt = $db->prepare("SELECT * FROM otps WHERE phone = ? AND otp = ? AND created_at > NOW() - INTERVAL 5 MINUTE");
        $stmt->bind_param("ss", $phone, $otp);
        $stmt->execute();
        return $stmt->get_result()->num_rows > 0;
    }
}
