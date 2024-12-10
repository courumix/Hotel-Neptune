<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <div class="container my-5">
        <div class="alert alert-danger">
            <?php echo $_GET['message'] ?? ''; ?>
        </div>
    </div>
</body>
</html>