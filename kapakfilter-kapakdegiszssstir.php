<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="profilkapakfilter"></div>
<style>
.profilkapakfilter {
background: linear-gradient(to bottom,transparent 0,rgba(0,0,0,0.03) 8%,rgba(0,0,0,0.11) 21%,rgba(0,0,0,0.61) 78%,rgba(0,0,0,0.7) 95%,rgba(0,0,0,0.7) 100%);
    background-size: 100%;
    position: absolute;
    right: 0%;
    height: 151px;
    left: 50%;
    margin-left: -616px;
    margin-top: -153px;
    width: 1232px;
}
</style>
<div class="pic-container">
    <img src="http://img.webme.com/pic/a/aliq03/icon-photo.png" class="pic" />
    <img src="http://img.webme.com/pic/a/aliq03/icon-photo.png" class="pic" />
    <img src="http://img.webme.com/pic/a/aliq03/icon-photo.png" class="pic" />
    <a class="pic-caption" href="http://aliq03.tr.gg/Forum/topic-12-1-Kapak-Resmini-G%C3%BCncelle.htm"><img src="http://img.webme.com/pic/a/aliq03/dfjkksa.png" class="kapakdegisresim" width="200">
</div>

<style>
img.kapakdegisresim {
    background: rgba(39, 39, 39, 0.5);
    padding: 10px;
    border-radius: 2px;
}
.pic-container {
    max-width: 210px;
    max-height: 210px;
    left: 50%;
    margin-left: 536px;
    position: absolute;
    top: 233px;
    cursor: pointer;
}

.pic {
    background: rgba(0, 0, 0, 0.32);
    position: absolute;
    height: 40px;
    border: 1px solid #848484;
    padding: 7px;
    border-radius: 50%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
}
.pix:nth:child(1){
    z-index: 3;
}
.pic:nth-child(2){
    z-index: 1;
}
.pic:nth-child(3){
    z-index: 2;
}
.pic-container:hover .pic:nth-child(1)
{
    -webkit-transform: rotate(15deg);
     transform: rotate(15deg);
    
    -webkit-transition: all 0.5s ease;
     transition: all 0.5s ease;
}

.pic-container:hover .pic:nth-child(2){
    -webkit-transform: rotate(7deg);
     transform: rotate(7deg);
     
    -webkit-transition: all 0.10s ease;
     transition: all 0.10s ease;
}

.pic-container:hover .pic:nth-child(3){
    -webkit-transform: rotate(-5deg);
     transform: rotate(-5deg);
}
.pic-caption {
    padding: 10px 0px;
    color: #fff;
    font-size: 15px;
    text-decoration: none;
    position: relative;
    z-index: 10;
    font-family: tahoma;
    top: 8px;
    left: -98px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-transition: all 0.5s ease;
    transition: all 0.5s ease;
    -webkit-opacity: 0;
    opacity: 0;
}
.pic-container:hover .pic-caption{
    left:-230px;
  
    -webkit-opacity: 1;
    opacity: 1;
}
</style>