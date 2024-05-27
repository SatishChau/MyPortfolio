<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("Location: https://formspree.io/f/xyyraveb"); // Replace "your_form_id" with your actual Formspree form ID.
    exit;
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "There was a problem with your submission, please try again.";
}
?>
