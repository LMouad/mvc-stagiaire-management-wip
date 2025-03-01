<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaires List</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">List of Stagiaires</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($stagiaires as $stagiaire): ?>
                    <tr>
                        <td><?= htmlspecialchars($stagiaire['id']); ?></td>
                        <td><?= htmlspecialchars($stagiaire['username']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (for any future dynamic elements you may add) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
