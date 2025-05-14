<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userMessage = trim($_POST['message']);

    if (!empty($userMessage)) {
        // Call the astrology API (you'll integrate the actual API here)
        $astrologyPrediction = getAstrologyPrediction($userMessage);

        echo $astrologyPrediction;  // Send the response to the frontend
    } else {
        echo "Please ask a valid question.";
    }
}

function getAstrologyPrediction($message) {
    // Placeholder for calling the astrology API
    // Example: Call an external astrology API with user's input

    // Assuming the API call and parsing result
    return "Your astrological prediction based on: " . $message;
}
