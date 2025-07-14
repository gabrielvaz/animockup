<?php
// Vercel serverless function for subscription management
// All premium features are enabled by default (Paddle removed)

$request = $_POST["request"] ?? $_GET["request"] ?? "";

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

if ($request === "check-subscription") {
    // Always return active for premium features
    echo json_encode("active");
} else if ($request === "get-subscription") {
    // Return empty URLs since no subscription management needed
    echo json_encode(["", ""]);
} else {
    echo json_encode(["error" => "Invalid request"]);
}
?>