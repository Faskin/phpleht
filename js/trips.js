var kellekord ="images/X.png";
var lopp=false;

function vajutus(pilt){

    pilt.src = kellekord;
    if(vyidukontroll()){
        alert("sa võitsid");
        lopp=true;

    }
    if(kellekord=="images/X.png"){
        kellekord="images/O.png";
    } else {
        kellekord="images/X.png";
    }
    if(ruududkasutatud()){
        lopp=true;
        alert("mang labi");
    }
}

function ruududkasutatud(){
    pildid=document.images;
    for(var i=0; i<pildid.length; i++){
        if (pildid[i].src.split("/").pop()=="tyhi.png"){
            return false;

        }
    }
    return true;
}

//maarab failinime
function sisu(nr){
    var tulemus=document.getElementById("piltt"+nr).src
    // slplit("/") - teeb massivi faili teekonnast 
    // pop() - votab nimest viimase vaartuse ehk pildifailinimi
    tulemus.split("/").pop();
    return tulemus;

}

function kontrollsisu (a, b, c, sisulopp) {
    //a, b, c - piltide numbrid ja sisulopp - vajaliku pildi 
    if(sisu(a)==sisulopp && sisu(b)==sisulopp && sisu(c)==sisulopp) {
        return true;
    } else {
        return false;
    }

}
function vyidukontroll(){
    if(kontrollsisu(1, 2, 3, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(4, 5, 6, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(7, 8, 9, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(1, 5, 9, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(3, 5, 7, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(1, 4, 7, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(2, 5, 8, kellekord.split("/").pop())) {return true;}
    if(kontrollsisu(3, 6, 9, kellekord.split("/").pop())) {return true;}
}