// обнулить выбор радиокнопок
function tyhistaRadioValik(){
    var elem =document.getElementsByName("valik1");
    for(var i=0; i<elem.length; i++)
        elem[i].checked=false;

}

// обнулить выбор чекбокс-кнопок
function tyhistaCheckboxValik(){
    var elem =document.getElementsByName("valik2");

    for(var i=0; i<elem.length; i++)
        elem[i].checked=false;

}
function checkboxnupuValik(){
    tyhistaRadioValik()
    tyhistaSelectValik()
    var piltImg="";
    var t=0;
    var img11=document.getElementById("check1")
    var img22=document.getElementById("check2")
    var img33=document.getElementById("check3")
    var img44=document.getElementById("check4")
    var pilt=document.getElementById("pilt")

    if(img11.checked) {
        t+=1;
        piltImg="images/img1.png";
    }
    if (img22.checked) {
        t+=1;
        piltImg="images/img2.jpg";
    }
    if (img33.checked) {
        t+=1;
        piltImg="images/img3.jpeg";
    }
    if (img44.checked) {
        t+=1;
        piltImg="images/img4.jpeg";
    }
    if (t >= 2 || t<=0) {
        pilt.src = "images/img5.jpeg";
    }
    else pilt.src=piltImg;
}


function checkboxValik() {
    tyhistaRadioValik()
    tyhistaSelectValik()
}
function selectValik() {
    tyhistaRadioValik();
    tyhistaCheckboxValik();
    var valik3=document.getElementById("valik3").value;
    var pilt=document.getElementById("pilt")
    pilt.src =valik3;
}
function tyhistaSelectValik(){
    var elem =document.getElementById("valik3");
    for(var i=0; i<elem.length; i++)
        elem.options[i].selected=false;

}
function textValik() {
    tyhistaRadioValik();
    tyhistaCheckboxValik();
    
    let img = document.getElementById("tekst").value
    let pilt=document.getElementById("pilt")
    if (img == "Twitter" || img == "twi") {
        pilt.src = "images/img1.png"
    }
    else if (img == "Done" || img == "don") {
        pilt.src="images/img2.jpg"
    }
    else if (img == "Sponge" || img == "bob") {
        pilt.src="images/img3.jpeg"
    }
    else if (img == "Windows" || img == "win") {
        pilt.src="images/img4.jpeg"
    }

}


function radionupuValik() {
    tyhistaCheckboxValik()
    tyhistaSelectValik()
    var img1=document.getElementById("img1")
    var img2=document.getElementById("img2")
    var img3=document.getElementById("img3")
    var img4=document.getElementById("img4")
    var pilt=document.getElementById("pilt")
    
    if(img1.checked) {
        pilt.src="images/img1.png"
    }
    else if (img2.checked) {
        pilt.src="images/img2.jpg"
    }
    else if (img3.checked) {
        pilt.src="images/img3.jpeg"
    }
    else if (img4.checked) {
        pilt.src="images/img4.jpeg"
    }
    
}

function juhuslikPilt(){
    var pilt2=Math.round(Math.random()*3);
    image=[];
    image[0]="images/img1.png";
    image[1]="images/img2.jpg";
    image[2]="images/img3.jpeg";
    image[3]="images/img4.jpeg";
    
    //document.getElementById("pilt2").src="image[pilt2]";
}

function teeValik(){
	if(document.getElementById("valikud").value==pilt2.getAttribute("src"))
	{
		document.getElementById("vastus").innerHTML="õige";
		
	}else{
		document.getElementById("vastus").innerHTML="vale";
	}
}

function teeValik2(){
    var radios = document.getElementsByName('valik6');
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            if(radios[i].value == pilt22.getAttribute("src")){
                document.getElementById("vastus").innerHTML="õige";
            }
            else{
                document.getElementById("vastus").innerHTML="vale";
            }
        }
    }
}