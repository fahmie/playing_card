<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Distribute Playing Cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4">Distribute Playing Cards</h2>
        <div class="mb-3">
            <label for="numPeople" class="form-label">Enter number of people:</label>
            <input type="number" id="numPeople" class="form-control" min="1">
        </div>
        <button id="distributeBtn" class="btn btn-primary">Distribute</button>

        <div id="result" class="mt-4"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/script.js"></script>
</body>
</html>
