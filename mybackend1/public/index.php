<?php
include '../views/header.php';
include_once('../controllers/stagiaireC.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_stagiaire'])) {
    AjouterS(); // Call function from controller to insert data
}

// Always show the form at the top of the page
ShowAjouterForm();

// Show the stagiaire list below the form
ListIndex();

include '../views/footer.php';
?>
