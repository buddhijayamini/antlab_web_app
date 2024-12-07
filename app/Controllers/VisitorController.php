<?php
namespace App\Controllers;

class VisitorController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['visitorTerms'] === 'accepted') {
                header("Location: index.php?page=success");
            } else {
                echo "You must accept the terms and conditions.";
            }
        } else {
            include_once __DIR__ . '/../Views/visitor_auth.php';
        }
    }
}
