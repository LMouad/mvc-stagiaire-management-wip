<?php include_once('../config/mydb.php');

function getAllStagiaires($conn) {
    $sql = "SELECT * FROM stagiaires";
    try {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Database Error: " . $e->getMessage());
    }
}

?>
