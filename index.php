<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS / PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body onload="juhuslikPilt()">

<?php
    include('header.php');
?>

<?php
    include('navigation.php');
?>
<br>

<main class="mainbody">

    <?php
    if(isset($_GET["leht"])){

        include('content/'.$_GET["leht"]. ".php");

    } else {
        include('content/main.php');
    }
    
    ?>

</main>
<?php
include('footer.php');
?>
</body>
<script src="js/puzzle.js"></script>
<script src="js/legoScript.js"></script>
<script src="js/valikud.js"></script>
<script src="js/eucip.js"></script>
<script src="js/trips.js"></script>
</html>