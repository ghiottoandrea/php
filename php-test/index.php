<?
$message = 'Hello World';
$name= 'Andrea'


?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Document</title>
    <link href='./style.css' rel='stylesheet'>
</head>

<body>
    <div id='app'>
        <h1><? echo $message ?></h1>
    </div>
    <!-- Development only cdn, disable in production -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./app.js'></script>
</body>

</html>