<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hotel Check-in/Check-out</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Hotel Check-in/Check-out</h1>
    <form action="process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="checkin">Check-in Date:</label>
        <input type="date" id="checkin" name="checkin" required><br><br>
        <label for="checkout">Check-out Date:</label>
        <input type="date" id="checkout" name="checkout" required><br><br>
        <input type="submit" value="Submit">
    </form>
</div>
</body>
</html>
