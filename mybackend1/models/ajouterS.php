<?php 
include_once('../config/mydb.php');

function AjouterStagiaire($username, $password) {
    global $conn; // Ensure we use the database connection

    if (!empty($username) && !empty($password)) {
        try {
            $sql = "INSERT INTO stagiaires (username, password) VALUES (:username, :password)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                echo "✅ Debug: Insert successful!"; // Debugging
            } else {
                echo "❌ Error: Insert failed.";
            }
        } catch (PDOException $e) {
            die("Database Error: " . $e->getMessage());
        }
    } else {
        echo "❌ Error: Please fill in all fields!";
    }
}
?>
