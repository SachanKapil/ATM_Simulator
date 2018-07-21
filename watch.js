function Time(){
var d=new Date();
var hh=d.getHours();
var mm=d.getMinutes();
var ss=d.getSeconds();
if(hh<=9){hh='0'+hh;}
if(mm<=9){mm='0'+mm;}
if(ss<=9){ss='0'+ss;}
document.getElementById('txt').innerHTML=hh+":"+mm+":"+ss;
}
window.setInterval("Time()",1000);

