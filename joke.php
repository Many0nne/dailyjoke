<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jokes</title>
</head>

<?php 

include "./actions/randomjoke.php";

?>


<body>
    <div id="jokeBody" class="jokeBody">
        <div class="jokeContainer">
            <p class="dailyJoke"><?php echo $lastJoke; ?></p>
            <div class="jokeVote">
                <a href="#" id="showModalUp"><button class="upVote">Ta geule, non ?</button></a> <!-- upvote -->
                <a href="#" id="showModalDown"><button class="downVote">😂😂😂</button></a> <!-- upvote -->
            </div>
        </div>
    </div>
    <div id="jokeModal" class="jokeModal">
        <p>Merci d'avoir lu la blague d'ajourd'hui !</p>
        <div class="modalButton">
            <a href="./writeajoke.php"><button>Je veut en écrire une</button></a> <!-- write a joke -->
            <button>Partager la blague</button> <!-- share -->
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>
