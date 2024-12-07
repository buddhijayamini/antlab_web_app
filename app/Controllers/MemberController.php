<?php
namespace App\Controllers;

use App\Helpers\ApiHelper;

class MemberController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $memberID = $_POST['memberID'];
            $pin = $_POST['pin'];
            
            $config = include __DIR__ . '/../../config/config.php';
            $response = ApiHelper::postRequest($config['member_api_url'], ['memberID' => $memberID, 'pin' => $pin]);
            echo  $response;

            if (json_decode($response, true)['success'] ?? false) {
                header("Location: index.php?page=success");
            } else {
                echo "Invalid Member ID or PIN.";
            }
        } else {
            include_once __DIR__ . '/../Views/member_auth.php';
        }
    }
}
