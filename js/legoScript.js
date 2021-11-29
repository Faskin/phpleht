function kustuta(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.clearRect(0, 0, 500, 500);
}


function lLeg(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.fillStyle="#FF8C00";
	p2.fillRect(157, 355, 50, 100); // x, y, laius, kõrgus  ширина высота
	p2.fillRect(154, 455, 57, 10);
}

function rLeg(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.fillStyle="#FF8C00";
	p2.fillRect(235, 355, 50, 100); // x, y, laius, kõrgus ширина высота
	p2.fillRect(232, 455, 57, 10);
}
function lHand(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="5";
	p2.strokeStyle="#FF8C00";
	p2.lineTo(142.5,189);
	p2.lineTo(100,215);
	p2.lineTo(85,326);
	p2.stroke();

}

function rHand(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="5";
	p2.strokeStyle="#FF8C00";
	p2.lineTo(300,189);
	p2.lineTo(335,215);
	p2.lineTo(335,326);
	p2.moveTo(333,338);
	p2.stroke();
}
function torso(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.fillStyle="#FF8C00";
	p2.fillRect(147, 355, 150, 10);
	p2.fillRect(142, 185, 160, 170); // x, y, laius, kõrgus ширина высота
	p2.fillRect(147, 175, 150, 10);
}
function finger(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="5";
	p2.strokeStyle="#100000";
	p2.moveTo(338,339);
	p2.arc(338, 339, 15, 0.5, 2, true,); // x, y, R , ширина высота
	p2.moveTo(85,338);
	p2.arc(85, 339, 15, 0.5, 2, true); // x, y, R , ширина высота
	p2.stroke();
}
function neck(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="5";
	p2.strokeStyle="#FDBD27";
	p2.fillStyle="#FDBD27";
    p2.lineTo(200,173);
    p2.lineTo(240,173);
    p2.lineTo(240,120);
    p2.lineTo(200,120);
	p2.fill();
	p2.stroke();
}

function mouth(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="4";
	p2.strokeStyle="#100000";
	p2.lineTo(206,115);
	p2.lineTo(236,115);
	p2.stroke();
}
function lefteye(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="1";
	p2.strokeStyle="#E9C56F";
	p2.fillStyle="#100000";
	p2.arc(201, 77, 6, 0, 2*Math.PI, true); // x, y, R
	p2.fill();
	p2.beginPath();
	p2.fill();
	p2.stroke();
}
function righteye(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="1";
	p2.strokeStyle="#E9C56F";
	p2.fillStyle="#100000";
	p2.arc(241, 77, 6, 0, 2*Math.PI, true); // x, y, R
	p2.fill();
	p2.beginPath();
	p2.fill();
	p2.stroke();
	
}



function hat(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="10";
	p2.strokeStyle="#DCDCDC";

	p2.lineTo(177,137);
	p2.lineTo(163,125);
	p2.lineTo(163,60);
	p2.lineTo(178,46);
	p2.lineTo(263,46);
	p2.lineTo(276,60);
	p2.lineTo(276,124);
	p2.lineTo(268,135);

	p2.moveTo(174,41);
	p2.lineTo(178,43);
	p2.lineTo(180,33);
	p2.lineTo(184,25);
	p2.lineTo(191,19);
	p2.lineTo(198,13);
	p2.lineTo(207,10);
	p2.lineTo(220,9);
	p2.lineTo(227,11);
	p2.lineTo(236,15);
	p2.lineTo(242,20);
	p2.lineTo(250,25);
	p2.lineTo(256,31);
    p2.lineTo(261,44);
	p2.stroke()
}

function headd(){
	var p2=document.getElementById("plate").getContext("2d");
	p2.beginPath();
	p2.lineWidth="5";
	p2.fillStyle="#FDBD27";
	p2.strokeStyle="#FDBD27";
	p2.lineTo(180,133);
	p2.lineTo(170,123);
	p2.lineTo(170,62);
	p2.lineTo(180,52);

	p2.lineTo(262,52);
	p2.lineTo(272,62);
	p2.lineTo(272,62);
	p2.lineTo(272,120);
	p2.lineTo(262,133);
	p2.fill();
	p2.stroke();
}
function draww(){
	lLeg();
	rLeg();
	torso();
	lHand();
	rHand();
	neck();
	headd();
	mouth();
	hat();
	finger();
	righteye();
	lefteye();
}

