<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Triangle Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="api.php" method="post">
            <label for="height">Enter the height of the triangle:</label>
            <input type="number" name="height" id="height" required>
            <input type="hidden" name="action" value="print_triangle">
            <button type="submit">Print Triangle</button>
        </form>

        <form action="api.php" method="post">
            <label for="inputString">Enter a string:</label>
            <input type="text" name="inputString" id="inputString" required>
            <input type="hidden" name="action" value="find_valid_date">
            <button type="submit">Find Valid Date</button>
        </form>
    </div>
</body>
</html>

