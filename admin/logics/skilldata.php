<?php

include("common.php");


if (isset(($_POST['submit-btn']))) {
    $card_title = mysqli_real_escape_string($connection, $_POST['title']);
    $card_category = mysqli_real_escape_string($connection, $_POST['Category']);
    $card_description = mysqli_real_escape_string($connection, $_POST['description']);
    $experience_description = mysqli_real_escape_string($connection, $_POST['expdesc']);
    $experience_years = (int)$_POST['Experience'];
    $contact_number = mysqli_real_escape_string($connection, $_POST['contact-number']);
    $whatsapp_number = mysqli_real_escape_string($connection, $_POST['whatsapp-number']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);


    $query = "INSERT INTO `cards` 
    (`id`, `card_title`, `card_category`, `card_description`, `experience_description`, `experience_years`, `contact_number`, `whatsapp_number`, `address`, `likes`, `views`, `shares`, `created_at`, `updated_at`) 
    VALUES 
    (NULL, '$card_title', '$card_category', '$card_description', '$experience_description', '$experience_years', '$contact_number', '$whatsapp_number', '$address', '0', '0', '0', current_timestamp(), current_timestamp())";

if (mysqli_query($connection, $query)) {
    // Redirect with success message
    header("Location: http://localhost/PakFixer/admin/pages/add_skill_card.php?card=yes&message=Successfully+your+card+created");
    exit();  // Make sure to call exit after header to stop further code execution
} else {
    // Redirect with failure message
    header("Location: http://localhost/PakFixer/admin/pages/add_skill_card.php?card=no&message=Your+card+not+created");
    exit();  // Stop further code execution
}
}
