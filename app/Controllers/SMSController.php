<?php
namespace App\Controllers;

use App\Helpers\ApiHelper;

class SMSController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $phone = $_POST['phone'];
            $config = include __DIR__ . '/../../config/config.php';
            $response = ApiHelper::postRequest($config['sms_api_url'], ['phone' => $phone]);

            if (json_decode($response, true)['success'] ?? false) {
                header("Location: index.php?page=success");
            } else {
                echo "Failed to send SMS.";
            }
        } else {
            include_once __DIR__ . '/../Views/sms_auth.php';
        }
    }
}
