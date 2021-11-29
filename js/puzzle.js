function choose(pilt) {
    var part1 = document.getElementById("part1");
    var part2 = document.getElementById("part2");
    var part3 = document.getElementById("part3");
    var part4 = document.getElementById("part4");
    var part5 = document.getElementById("part5");
    var part6 = document.getElementById("part6");
    var part7 = document.getElementById("part7");
    var part8 = document.getElementById("part8");
    var part9 = document.getElementById("part9");
    var part10 = document.getElementById("part10");
    var part11 = document.getElementById("part11");
    var part12 = document.getElementById("part12");


    var valikk1 = document.getElementById("valikk1");
    var valikk2 = document.getElementById("valikk2");
    var valikk3 = document.getElementById("valikk3");
    var valikk4 = document.getElementById("valikk4");
    var valikk5 = document.getElementById("valikk5");
    var valikk6 = document.getElementById("valikk6");
    var valikk7 = document.getElementById("valikk7");
    var valikk8 = document.getElementById("valikk8");
    var valikk9 = document.getElementById("valikk9");
    var valikk10 = document.getElementById("valikk10");
    var valikk11 = document.getElementById("valikk11");
    var valikk12 = document.getElementById("valikk12");


    pilt.src = valitudPilt;

    if (
    valikk1.src == part1.src &&
    valikk2.src == part2.src &&
    valikk3.src == part3.src &&
    valikk4.src == part4.src &&
    valikk5.src == part5.src &&
    valikk6.src == part6.src &&
    valikk7.src == part7.src &&
    valikk8.src == part8.src &&
    valikk9.src == part9.src &&
    valikk10.src == part10.src &&
    valikk11.src == part11.src &&
    valikk12.src == part12.src 
    )
    {
    document.getElementById("valikk").innerHTML = "tubli";
    alert("Olen Tubli");

    } 
    else{
        
    document.getElementById("valikk").innerHTML = "Ei";
    alert("Ei");
    }

}
function pildiValik(pilt) {
    valitudPilt = pilt.src;
    document.getElementById("valik").src = valitudPilt;
}