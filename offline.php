<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="girisvekayit">
<style>
div.bilgi {
    background: #ffffff;
    background-size: 187px;
    position: fixed;
    padding: 10px;
    cursor: default;
    color: red;
    left: 50%;
    margin-left:165px;
    top: 46px;
    border: 1px solid #c5d0db;
    border-radius: 2px;
    box-shadow: 0 1px 3px rgba(0,0,0,.1);
    filter: alpha(opacity=0);
    -o-transition: opacity 100ms linear, top 100ms linear, visibility 100ms linear;
    transition: opacity 100ms linear, top 100ms linear, visibility 100ms linear;
}
input.sign-up-button {
    background:#507299;
    margin-top: 0px;
    margin-left: -34px;
    font-size: 14px;
    padding: 9px;
    cursor: pointer;
    color: white;
    font-weight: bold;
    outline: none;
    border-radius: 4px;
    border: 0;
    box-shadow: 0px 1px 1px rgba(0, 0, 0, .3);
    width: 125px;
    text-transform: uppercase;
    height: 38px;
}
a.aliq-btn.aliq-btn--flat.gyapb {
    background: transparent;
    width: 60px;
    margin-left: 4px;
    border-radius: 4px;
}
input.sign-up-button:hover {
        background:#33475f;
}
.aq1 {
    margin: 3px;
    border: 1px solid #CACACA;
    background: #ffffff;
    padding: 5px;
    border-radius: 5px;
    font-family: Arial;
    outline: none;
    cursor: pointer;
    color: #616161;
    font-weight: 100;
    font-size: 16px;
}
.aq1:Focus {
    background: white;
}
a#link {
    position: fixed;
    background: #507299;
    height: 16px;
    color: white;
    padding: 21px;
    top: 0px;
    z-index: 12;
    left: 50%;
    margin-left: 285px;
    margin-top: -17px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 0.87);
    font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
}
a#link:focus {
    background: #43648C;
}
a#kayitol {
  position: fixed;
    background: #507299;
    height: 16px;
    color: white;
    padding: 21px;
    top: 0px;
    z-index: 12;
    left: 50%;
    margin-left:395px;
    margin-top: -17px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    color: rgba(255, 255, 255, 0.87);
    font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
}
a#kayitol:focus {
    background: #43648C;
}
</style>

<!----HATA GİDERME SAYFA BOŞLUĞU GİDERME BASLA--->

<script>
$(document).ready(function(){

$("td.digersayfalarbolumu").append('<style> body div#wrapper div#content {padding-top:68px;} </style>');


});
</script>
<!----HATA GİDERME SAYFA BOŞLUĞU GİDERME BİTİS--->

<script>
function JSTR_Id(id){
return document.getElementById(id);
}
function JSTR_HideDiv(){
var bilgi=JSTR_Id("bilgi");
if(! JSTR_IsClickedLink) bilgi.style.display="none";
JSTR_IsClickedLink=false;
}
function JSTR_AppToDiv(){
if(window.attachEvent){
document.attachEvent("onclick",JSTR_HideDiv);
window.attachEvent("onresize",JSTR_HideDiv);
}
else{
if(document.addEventListener){
document.addEventListener("click",JSTR_HideDiv,false);
window.addEventListener("resize",JSTR_HideDiv,false);
}
else{window.onclick=JSTR_HideDiv;window.onresize=JSTR_HideDiv;
}
}
}
</script>
<script>
var JSTR_IsClickedLink=false;
function Goster(){
var q;
q=JSTR_Id("bilgi");
q.style.display="";
JSTR_IsClickedLink=true;
}
function Gizle(){
if(JSTR_Id("bilgi").style.display.length==0) JSTR_Id("jstr_div").removeAttribute("onclick");
else JSTR_Id("jstr_div").setAttribute("onclick","Goster()");
}
</script>

<a id="kayitol"class="kayitol aliq-btn aliq-btn--flat" href="http://aliq03.tr.gg/forum/register.htm">kayıt ol</a>

<div onclick="Goster()" id="jstr_div">
<div class="link"><a onclick="Gizle()" id="link" class="link aliq-btn aliq-btn--flat" href="javascript://">Giriş Yap</a>
</div>
<div class="bilgi" id="bilgi" style="display:none;" >

<form class="login-form" method="post" style="top: 125px;">
    <input class="aq1" type="text" placeholder="Kullanici adi" name="modulenter[nick]" id="name"></br>
    <input class="aq1" type="password" placeholder="Sifre" name="modulenter[pwd]" id="password"></br>
    <input class="aq1" type="hidden" name="mode" value="login"><a class="aliq-btn aliq-btn--flat gyapb"><input type="submit" value="Giris Yap" name="" class="sign-up-button"></a>
</form>


</div>
</div>
<script>(function(){JSTR_AppToDiv()}())</script>
<style>

.girisvekayit {
    position: fixed;
    top: 0px;
    z-index: 999999;
    left: 0;
}
.gizlemeuser a {
    position: fixed;
    left: 50%;
    margin-left: -537px;
    width: 951px;
    height: 42px;
    background: #507299;
    top: 0px;
    z-index: 100000;
    cursor: default;
}
td[align="right"] a[href="#1"]:before {display:none;}
.forumEntry {
    display: none;
}

a.alintiyap {display:none;}
div#templatemo_wrapper {
    margin-top: -81px;
}
</style>
</div>
<div class="gizlemeuser"><a href="#ustmenu"></a></div>