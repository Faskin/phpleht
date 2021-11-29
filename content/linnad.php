<h2>Linnad</h2>
<?php



$tekst="Tallinn";
//teksi pikkus
echo "Täned selles linnas ".strlen($tekst). " tähte";
echo "<br>";
//esimesed 3 tähte
echo "Esimesed 3 tähte on ".substr($tekst, 0, 3);
echo "<br>";
//tühiku asukoht
echo "Tühiku asukoht on peale ".strpos($tekst, " ").
    " sümboli";
echo "<br>";
echo "Viimane tähte on " .substr($tekst, 5, 6);
echo "<br>";
// leia peale esimest sõnad tekstis
echo "leia peale esimest sõnad tekstis on "
    .substr($tekst, strpos($tekst, " "), strlen($tekst)-strpos($tekst, " "));

?>
<form action="<?=strtok(basename($_SERVER['REQUEST_URI']))?>" method="post">
    Sisesta linnanimi:
    <input type="text" name="linn">
    <input type="submit" value="Ok">
</form>
<?php
//linnanimi kontroll
if(isSet($_POST['linn'])){
if($_POST['linn']==$tekst){
    echo "<div style='background-color: yellow';>linn on õige</div>";
}else {
    echo "<div style='background-color: red';>linn on vale</div>";
}
}
echo "<br>";


?>
