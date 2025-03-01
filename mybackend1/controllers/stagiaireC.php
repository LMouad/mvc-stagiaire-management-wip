<?php
include('../config/mydb.php');  
include('../models/stagiaireDbList.php'); 
include('../models/ajouterS.php');

 function AjouterS(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        AjouterStagiaire($username, $password); // Call model function
        header("Location: ../public/index.php"); // Redirect to list after success
        exit();
    }
 }

function ListIndex(){
    global $conn; // Use the global $conn from mydb.php
    $stagiaires = getAllStagiaires($conn);
    include('../views/stagiaire_list.php');
}

function ShowAjouterForm() {
    include('../views/ajouterForm.php');
}
?>
