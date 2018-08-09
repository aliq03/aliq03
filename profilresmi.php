<?php
header("Access-Control-Allow-Origin: *");
?>
<div class="profilresmidegistir">
<figure class="snip1300 blue">
  <img src="http://img.webme.com/pic/a/aliq03/transparent400.png" alt="sample6" />
  <i class="cameraicon">Profil Resmini Guncelle</i>
  <a class="resmiguncelleyazisi" href="http://aliq03.tr.gg/Forum/topic-10-1--Profil-Resmini-G%C3%BCncelle.htm"></a>
</figure>
</div>
<style>
/* Included color classes.. 
	.red 
	.blue 
	.yellow
	.green
	.orange
	.navy 
*/
/* Icon set - http://ionicons.com */
@import url(http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip1300 {
    position: relative;
    float: left;
    overflow: hidden;
    margin: 10px 1%;
    min-width: 121px;
    max-width: 121px;
    width: 121px;
    height: 121px;
    max-height: 121px;
    min-height: 121px;
    background: #000000;
    text-align: center;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}
i.cameraicon {
    font-style: normal;
    font-family: tahoma;
}
.profilresmidegistir {
    position: absolute;
    top: 168px;
    left: 50%;
    margin-left: -479px;
}
figure.snip1300 i.cameraicon img {
    width: 80px;
    height: 80px;
    position: absolute;
    margin: -66px -40px;
    opacity: 0.5;
}
figure.snip1300 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}
figure.snip1300 img {
    width: 120px;
    height: 120px;
}
figure.snip1300 i {
    position: absolute;
    top: 100%;
    left: 50%;
    background: rgba(0, 0, 0, 0.48);
    border-radius: 50%;
    font-size: 13px;
    font-weight: 600;
    color: #000000;
    padding: 68px 21px;
    width: 145px;
    height: 120px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    transition: all 300ms 0ms cubic-bezier(0.6, -0.28, 0.735, 0.045);
}
figure.snip1300 i:before {
    content: "";
    background: url(https://img.webme.com/pic/a/aliq03/icon-white1.png);
    width: 29px;
    height: 24px;
    position: absolute;
    background-size: 29px;
    margin: -30px 29px;
}

figure.snip1300 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
}
figure.snip1300.blue {
    border-radius: 50%;
    background:transparent}
figure.snip1300.blue i {
    color: #FFFFFF;
}

figure.snip1300.navy {
  background-color: #2b3c4e;
}
figure.snip1300.navy i {
  color: #222f3d;
}
figure.snip1300:hover img,
figure.snip1300.hover img {
  opacity: 0.3;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
figure.snip1300:hover i,
figure.snip1300.hover i {
  top: 50%;
  transition: all 500ms 100ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
  opacity: 1;
}
</style>
<script>
  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
</script>