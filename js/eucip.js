var aItems = new Array();
function toggleItem(){
    var itemClass=this.parentNode.className;

    for(var i=0; i< aItems.length; i++){
        aItems[i].className = 'aItem hide';
    }
    if(itemClass == 'aItem hide'){
        this.parentNode.className='aItem';
    }
}


function init(){
    var divs=document.getElementsByTagName('div');
    for(var i=0; i< divs.length; i++){     
        if ( divs[i].className == 'aItem' )
            aItems.push( divs[i] ); }
for (var i = 0; i < aItems.length; i++) {
        var h2 = getFirstChildWithTagName( aItems[i], 'H2' );
        h2.onclick = toggleItem;
}
for (var i = 1; i < aItems.length; i++) {
        aItems[i].className = 'aItem hide';
    }
}


function getFirstChildWithTagName(element, tagName) {
    for(var i = 0; i < element.childNodes.length; i++ ) {
        if (element.childNodes[i].nodeName == tagName) return element.childNodes[i];
    }
    }

function vastus() {

if(a1.checked){
vv1.innerHTML = "Ответ: Верно";
vv1.style.color = "Green";
}
else if(b1.checked || c1.checked || d1.checked){
    vv1.innerHTML = "Ответ: Не верно";
vv1.style.color = "Red";
}
if(a2.checked){
    vv2.innerHTML = "Ответ: Верно";
vv2.style.color = "Green";
}
else if(b2.checked || c2.checked || d2.checked){
    vv2.innerHTML = "Ответ: Не верно";
vv2.style.color = "Red";
}
if(a3.checked){
    vv3.innerHTML = "Ответ: Верно";
vv3.style.color = "Green";
}
else if(b3.checked || c3.checked || d3.checked){
    vv3.innerHTML = "Ответ: Не верно";
vv3.style.color = "Red";
}
if(a4.checked){
    vv4.innerHTML = "Ответ: Верно";
vv4.style.color = "Green";
}
else if(b4.checked || c4.checked || d4.checked){
    vv4.innerHTML = "Ответ: Не верно";
vv4.style.color = "Red";
}
if(a5.checked){
    vv5.innerHTML = "Ответ: Верно";
vv5.style.color = "Green";
}
else if(b5.checked || c5.checked || d5.checked){
    vv5.innerHTML = "Ответ: Не верно";
vv5.style.color = "Red";
}
if(a6.checked){
    vv6.innerHTML = "Ответ: Верно";
vv6.style.color = "Green";
}
else if(b6.checked || c6.checked || d6.checked){
    vv6.innerHTML = "Ответ: Не верно";
vv6.style.color = "Red";
}
if(a7.checked){
    vv7.innerHTML = "Ответ: Верно";
vv7.style.color = "Green";
}
else if(b7.checked || c7.checked){
    vv7.innerHTML = "Ответ: Не верно";
vv7.style.color = "Red";
}
if(a8.checked){
    vv8.innerHTML = "Ответ: Верно";
vv8.style.color = "Green";
}
else if(b8.checked || c8.checked || d8.checked){
    vv8.innerHTML = "Ответ: Не верно";
vv8.style.color = "Red";
}
if(c9.checked){
    vv9.innerHTML = "Ответ: Верно";
vv9.style.color = "Green";
}
else if(a9.checked || b9.checked || d9.checked){
    vv9.innerHTML = "Ответ: Не верно";
vv9.style.color = "Red";
}
if(a10.checked){
    vv10.innerHTML = "Ответ: Верно";
vv10.style.color = "Green";
}
else if(b10.checked || c10.checked || d10.checked){
    vv10.innerHTML = "Ответ: Не верно";
vv10.style.color = "Red";
}
}