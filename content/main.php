
<form class="avaleht" action="">

    <input type="text" name="nimi" id="">
    <input type="submit">
</form>
<?php
if(isset($_REQUEST["nimi"])){
    if(empty($_REQUEST["nimi"])){
        echo "<strong>palun sisesta nimi!</strong>";
    } else{
        echo "<h2>Tere tulemast,".$_REQUEST["nimi"]. "</h2>";
        echo "<p>Vajuta navigatsioni lingi peale</p>";

    }
    
}
