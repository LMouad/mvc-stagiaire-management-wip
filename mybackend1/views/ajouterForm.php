<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Login Form</h2>

        <form action="../public/index.php" method="POST">
            <input type="text" name="username" placeholder="Enter username" required>
            <input type="password" name="password" placeholder="Enter password" required>
            <button type="submit" name="add_stagiaire">Add Stagiaire</button>
        </form>
    </div>

    <!-- Bootstrap JS (for any future dynamic elements you may add) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
