<?php
//take variables from index.php
$text = $_POST['text'];
$badWord = $_POST['badWord'];
$rightText;
$cens = '***';
$pre = 'Il testo inserito è:';
//control section, if user gives both parameters replace every $badword found in $text
if ((strlen($text)) && (strlen($badWord))) {
    $rightText = str_ireplace($badWord, $cens, $text);
    //if user doesn't give the badword, take a random word from his text and do a censorship with that 
} elseif (str_word_count($text) > 1) {
    //explode the given string into an array of words
    $textArray = explode(' ', $text);
    //pick a random index of this array
    $randomWordIndex = array_rand($textArray, 1);
    //pick the badWord at this index
    $badWord = $textArray[$randomWordIndex];
    //write the rightText
    $rightText = str_ireplace($badWord, $cens, $text);

} else {
    // if our user gives nothing so go for lorem ipsum and work on it as done in the "elseif"
    $pre = 'Abbiamo scelto noi un testo per te';
    $text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in porttitor enim. Duis luctus neque accumsan elit aliquam, finibus gravida turpis pulvinar. Sed nec justo eget mi mollis porttitor. Ut accumsan egestas neque. Praesent molestie hendrerit elit, at maximus velit varius at. Morbi consectetur imperdiet justo id vulputate. Etiam porta rhoncus risus, sit amet pharetra turpis porta sit amet. Etiam non mattis enim. Duis maximus luctus sem ac vehicula. Donec eu dui et erat maximus tincidunt. Nunc auctor at erat ut facilisis.';
    $textArray = explode(' ', $text);
    $randomWordIndex = array_rand($textArray, 1);
    $badWord = $textArray[$randomWordIndex];
    $rightText = str_ireplace($badWord, $cens, $text);
}
//change plural or singular based on censored words
$censNum = substr_count($rightText, $cens);
if ($censNum > 1) {
    $censText = ' censure';
} else {
    $censText = ' censura';

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Bad-Word Answer</title>
</head>

<body>
    <div class="w-75 m-auto">
        <div class="">
            <?php echo $pre . "<p class='text-secondary'> $text </p>" . 'Contiene ' . str_word_count($text) . ' parole e ' . strlen($text) . ' caratteri' ?>
        </div>
        <div class="">
            <?php
            echo 'Il testo censurato è: ' . "<p class='text-secondary'> $rightText </p>" . 'Contiene ' . str_word_count($rightText) . ' parole non censurate e ha ' . $censNum . $censText
                ?>
        </div>
        <a href="index.php">Go back</a>

    </div>

</body>

</html>