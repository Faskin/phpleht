function tere() {
    var vastus=document.getElementById("vastus");
    var nimi=document.getElementById("nimi");
    var m=document.getElementById("mees");
    var n=document.getElementById("naine");
    var t=document.getElementById("tundmatu");
    var x=document.getElementById("ryhm").selectedIndex;
    var mat=document.getElementById("matemaatika");
    var lugu=document.getElementById("ajalugu");
    var prog=document.getElementById("programmerimine");
    var veb=document.getElementById("veebirakendused");
    var lemmik  = "";
    // checkbox -andmete lugemine
    var jada=document.getElementsByName("lemmik");
    for(var i=0; i<jada.length; i++){
        if(jada[i].checked){
            lemmik+="*"+jada[i].value+"<br>";
        }
    }
    // radio andmete lugemine
    if(m.checked){
        var sugu=m.value;
        pilt.src='images/mees.png'
    }else if(n.checked){
        var sugu=n.value;
        pilt.src='images/naine.png'
    } else {
        var sugu=t.value;
        pilt.src='images/tundmatu.jpg'
    }
    /*let result = ""
    if(mat.checked){
        result+=mat.value+", ";
    }if(lugu.checked){
        result+=lugu.value+", ";
    }if(prog.checked){
        result+=prog.value+", ";
    }if(veb.checked) {
        result+=veb.value+", ";
    }*/
    vastus.innerHTML="tere hommikust,  "+sugu+" "+nimi.value+ ". Sa oled "+ ryhm.value+ " opilane.<br>"+ " sinu lemmikud on: <br>" +lemmik;
    console.log(lemmik);
    //vastus.innerHTML="tere hommikust,  "+sugu+" "+nimi.value+ " Sa oled "+ ryhm.value + " opilane "+ " Sinu valid " +result.substring(0, result.length - 2);
}
