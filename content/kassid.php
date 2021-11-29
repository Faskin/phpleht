<?php
    require ("conf.php");
    //kassi lisamine
    if(isset($_REQUEST["kassivorm"])){
        $kask=$yhendus->prepare("INSERT INTO kassid(nimi) VALUES (?)");
        $kask->bind_param("s", $_REQUEST["nimi"]);
        $kask->execute();
        header("Location: $_SERVER[PHP_SELF]");
        $yhendus->close();
    }
    // kassi kustamine
    if(isset($_REQUEST["kustuta"])){
        $kask=$yhendus->prepare("DELETE FROM kassid WHERE id=?");
        $kask->bind_param("i", $_REQUEST["kustuta"]);
        $kask->execute();
    }
    // kassi andmete muutmine
    if(isset($_REQUEST["muuda"])){
        $kask=$yhendus->prepare("UPDATE kassid SET nimi=?, kirjeldus=?, pilt=? WHERE id=?");
        $kask->bind_param("sssi", $_REQUEST["nimi"], $_REQUEST["pilt"], $_REQUEST["muuda"]);
        $kask->execute();
    }
    ?>
    
    <h1>Kasside leht</h1>
    <div id="meny">
    <ul>
    <?php
    $kask=$yhendus->prepare("SELECT id, nimi FROM kassid");
    $kask->bind_result($id, $nimi);
    $kask->execute();

    while($kask->fetch()){
        echo "<li><a href='".basename($_SERVER['REQUEST_URI'])."id=$id'>$nimi</a>";
    }
    ?>

    </ul>
    
    <a href='<?="$_SERVER[PHP_SELF]?lisa=jah" ?>'> 
        Lisa kassi...</a>

    </div>

    
    <div id="sisu">
        <?php
        if(isset($_REQUEST["id"])){
        $kask=$yhendus->prepare("SELECT id, nimi, kirjeldus, pilt FROM kassid WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"] );
        $kask->bind_result($id, $nimi, $kirjeldus, $pilt);
        $kask->execute();
            
        } else { 

            if($kask->fetch()){
                echo "<h3>".htmlspecialchars($nimi). "</h3><br>";
                echo htmlspecialchars($kirjeldus);
                echo "<br><img src='$pilt'>";
                echo "<br><a href='".basename($_SERVER['REQUEST_URL'])."&kustuta=$id'>Kustuta</a>";
                echo "<br><a href='$_SERVER[PHP_SELF]?id=$id&muutmine=jah'>Muuda</a>";
                // href='basename($_SERVER['REQUEST_URL']
    
            } else {
                echo "VIGA VIGA<br>";
            }
        }
        if($kask->fetch()){
            if(isset($_REQUEST["muutmine"])){
                echo "
                <form action='$_SERVER[PHP_SELF]'>
                <input type='hidden' name='muuda' value='$id'>
                <h2>Kassi andmete muutmine</h2>
                Nimi: 
                <input type='text' name='nimi' value='".htmlspecialchars($nimi)."'>
                <input type='submit' value='Muuda'>
                </form>
                <br>
                Kirjeldus:
                <textarea name='kirjeldus'>
                ".htmlspecialchars($kirjeldus)."</textarea>
                <br>
                Pilt (Sisesta pildi aadress):
                <textarea name='pilt>
                ".htmlspecialchars($pilt)."</textarea>
                <br>
                ";
            }
        }
        else {
            echo "Vajuta kassi nimele!";
        }

        if(isset($_REQUEST["lisa"])){

            ?>
        
        <form>
            <input type="hidden" name="kassivorm" value="jah">
            Kasii nimi:
            <input type="text" name="nimi" id="">
            <input type="submit" value="OK">
        </form>

        <?php

        $yhendus->close();
        }
        ?>
        
    </div>
    