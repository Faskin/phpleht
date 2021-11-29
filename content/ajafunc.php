<h2>Ajafunktioonid</h2>


<?php


echo "Jooksev aasta ".date("Y");
echo "<br>";
//ajavöö seadistamine
date_default_timezone_set('Europe/Tallinn');
//
echo "Tänane kuupäev + aeg ".date('d.m.Y G:i' , time());
echo "<br>";
?>
<div id="america" style="background-color: yellow;">
    <?php echo "America Buenos-Aires: "
        .getAegAmericaBuenos_Aires();?>
</div>
<div id="eesti_kuupaevad" style="background-color: blue;">
    <?php
    //kuude massiiv
    $eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
    //kuupäevad massiividesse
    $paev = date('d');
    $kuu = $eesti_kuud[date('n')];
    $aasta = date('Y');
    //kuupäeva väljastamine
    echo "Kuunimi eesti keeles<br>";
    echo $paev.'.'.$kuu.' '.$aasta;    //22.veebruar2013
    ?>
</div>
<div id="aastalopp" style="background-color: yellow;">

    <?php getAastaLopuni();?>
</div>
<div id="hooaeg">
    Tänase hooaja pilt:
    <br>
    <img src="<?php season() ?>" alt="pilt">
</div>
<div>
    <?php echo vanus();
    highlight_file('ajafunktsioonid.php');?>
</div>
