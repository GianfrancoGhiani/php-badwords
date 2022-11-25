<?php
$text = $_POST['text'];
$badWord = $_POST['badWord'];
$rightText;
$cens = '***';

if (isset($text) && isset($badWord)) {
    $rightText = str_ireplace($badWord, $cens, $text);
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
    <div>
        <div>
            <?php echo 'Il testo inserito è: ' . "<p class='text-secondary'> $text </p>" . 'Contiene ' . str_word_count($text) . ' parole e ' . strlen($text) . ' caratteri' ?>
        </div>
        <div>
            <?php
            echo 'Il testo censurato è: ' . "<p class='text-secondary'> $rightText </p>" . 'Contiene ' . str_word_count($rightText) . ' parole non censurate e ha ' . substr_count($rightText, $cens) . ' censura'
                ?>
        </div>
    </div>
</body>

</html>