<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Bad-Word</title>
</head>

<body>
    <form action="answer.php" method="POST" class="d-flex flex-column m-auto align-items-center">
        <textarea name="text" id="text" cols="30" rows="10" class="mt-3 w-50 p-3"></textarea>
        <input type="text" name="badWord" class="my-3 w-auto py-2 text-center">
        <button type="submit">Work on it!</button>
    </form>
</body>

</html>