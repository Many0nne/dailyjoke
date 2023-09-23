<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jokes</title>
</head>
<body>
    <div class="writeAJokeBody">
        <form method="POST" action="./actions/jokebdd.php" accept-charset="UTF-8">
            <input name="joke" required placeholder="Ecrit une blague" type="text">
            <input type="submit">
        </form>
    </div>
</body>
</html>