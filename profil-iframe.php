<?php
header("Access-Control-Allow-Origin: *");
?>
<style>
div.sss {
    background: white;
height:51px;
}
.notificationslider ,
.dib {
    display: none;
}
.faviconaliq03 {
    display: none;
}
.nav-menu-aliq {
    display: none;
}

div#content b:nth-of-type(1) a[href*="profile-"] {
position: fixed;
    top: 13.5px;
    z-index: 9999;
    left: 27px;
    color: #343333;
    font-size: 17px;
    font-family: roboto;
    font-weight: 400;
    width: 90px;
    text-align: left;
text-decoration:none;
}
div#content b:nth-of-type(1) a[href*="profile-"]:before {
    background-size: 33px;
    background-repeat: no-repeat;
    margin-left: -42px;
    margin-top: -6.5px;
    width: 33px;
    height: 33px;
    border-radius: 50%;
    right: 93px;
    margin-right: 100px;
}
a.iframeprofil.aliq-btn.aliq-btn--flat {
    margin: -13px -41px;
    padding: 14px 93px 15px 79px;
}
</style>



<script>
$(document).ready(function(){
$("div#content b:nth-of-type(1) a[href*='profile-']").attr('target' , '_blank');
$("div#content b:nth-of-type(1) a[href*='profile-']").attr('class' , 'iframeprofil aliq-btn aliq-btn--flat');
});
</script>