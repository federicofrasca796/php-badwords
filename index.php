<?php

//Creo una variabile stringa
$fucking_txt = "When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to read/look at/use then why fucking bother? You are not your fucking work. Fuck. Don’t get hung up on things that don’t fucking work. Don’t fucking quit. Even with the odds against you, time is against the odds. Accomplishment validates belief, and belief inspires accomplishment. Never, never assume that what you have achieved is fucking good enough. Design is all about fucking relationships—the relationship of form and content, the relationship of elements, the relationship of designer and user. Be fucking bold. Greatness isn’t the height of your stature, it’s the heft of your spirit. Keep fucking going. It isn’t what you are, but what you’re going to become. Form follows fucking function. What’s important is the fucking drive to see a project through no matter what. Don’t fucking lie to yourself. Dedicate yourself to lifelong fucking learning. The details are not the details. They make the fucking design. To surpass others is fucking tough, if you only do as you are told you don’t have it in you to succeed. Learn from fucking criticism. Be fucking impossible to ignore.";

//Mostro a schermo la variabile
// echo $fucking_txt . '<br>' . 'Il paragrafo è lungo ' . strlen($fucking_txt) . ' caratteri.';

//Salva in una variabile la parola da censurare scelta dall'utente
$badword = $_GET['badword'];

//Se l'array di testo contiene la parola scelta, sostituisce la parola con '***'
if (in_array($badword, explode(' ', $fucking_txt))) {
    echo "<h1>Censored paragraph</h1>" . str_replace($badword, "***", $fucking_txt);
} else {
    echo "<br> <i>The paragraph does not contain the word you chose";
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Uncensored paragraph</h1>
    <p><?= $fucking_txt;?></p>
</body>
</html>

