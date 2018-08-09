<?php
header("Access-Control-Allow-Origin: *"); 
?>
<style>

/**/
table[align="center"] table[width="100%"] td:first-child {
    color: red;
    font-size: 0px;
    padding-left: 6px;
    float: left;
height:30px;
}
table[width="100%"] b a[target="_blank"] {
     margin-top: -32px;
    position: absolute;
    margin-left: 57px;
    color: #3B5998;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 600;
    font-style: normal;
    line-height: inherit;
    text-transform: initial;
}
table[width="100%"] b a[target="_blank"] img {
     width: 42px;
    height: 42px;
    margin-left: -64px;
    border-radius: 11px;
    margin-top: 33px;
}
table[align="center"] table[width="100%"] td:nth-child(2) {
   padding-left: 0px;
    padding-right: 5px;
    margin-left: 54px;
    margin-top: -24px;
    float: left;
    padding-top: 17px;
    padding-bottom: 5px;
    letter-spacing: 0.5px;
    color: #2b2b2b;
    width: 600px;
    font-size: 12px;
    line-height: 1.3;
    word-wrap: break-word;
    font-size: 15px;
    font-family: arial;
}

/*normal kullanýcý*/
table.yorum-alani {
       background: #f5f5f5;
    margin-top: -5px;
    padding-top: 0;
    margin-left: -1px;
    padding-bottom: 3px;
    border: 1px solid #d9d8da;
    border-top: 0px;
    box-shadow: 0px 2px 1px 0px rgba(0,0,0,0.2);
    display: block;

}
table[width="100%"] tbody tr td[width="100%"] i {font-size:0}
table[width="100%"] tbody tr td[width="100%"] i b {
    color: #3B5998;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-size: 14px;
    position: absolute;
    margin-left: -7px;
    margin-top: -40px;
    font-style: normal;
    font-weight: 600;
    border: 0;
    letter-spacing: initial;
}
table[width="100%"] tbody tr td[width="100%"] i b:before {
    content: "";
    position: absolute;
    margin-left: -61px;
    margin-top: 0px;
    background: url(https://img.webme.com/pic/a/aliq/purpleuser1.png);
    background-size: 61px;
    border-radius: 11px;
    width: 42px;
    height: 42px;
}
table[align="center"] table[width="100%"] td[width="100%"] {
    padding: 40px 0px 2px 60px;
    letter-spacing: 0.5px;
    color: #2b2b2b;
    width: 600px;
    font-size: 15px;
    display: inline-table;
    line-height: 1.3;
    word-wrap: break-word;
    font-family:arial;
}
.localtime {
    font-size: 11px;
    font-style: normal;
    font-family: arial;
    color: rgb(2, 2, 2);
    position: absolute;
    left: 50%;
    margin: -18px -442px;
}
td[align="right"] .localtime {
    margin-top: 33px;
}
/*yorum*/
hr {display:none}
table[width="100%"][align="center"] table[width="100%"] {
 background: white;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
    padding-top: 0;
    padding-bottom: 15px;
    margin-top: -22px;
}
.yorumlar tbody tr td > b:nth-of-type(1) {
    position: absolute;
    margin-top: -33px;
    text-transform: uppercase;
    font-size: 15px;
}
.yorumlar font {
    width: 57px;
    position: absolute;
    margin-left: -11px;
    text-align: center;
margin-top:-13px;
}
</style>



<div class="paylas-yorum">
<div class="user share-comment" data-tooltip="Yorum yap"></div>
<div class="share-5 share-comment">
  <span class="share">Share</span>
<a class="twitter-share-button" data-via="helperblogger" href="https://twitter.com/share" target="_blank"></a>
<a target="_blank" title="Facebook" onclick="window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href)+'&amp;t='+encodeURIComponent(document.title));return false;" href="http://www.facebook.com/" style="text-decoration:none;" rel="nofollow"></a>
<a href="javascript:(&#10; function(){&#10; var w=480;var h=380;&#10; var x=Number((window.screen.width-w)/2);&#10; var y=Number((window.screen.height-h)/2);&#10; window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href)+'&#10; &amp;title='+encodeURIComponent(document.title),'','width='+w+',height='+h+',left='+x+',top='+y +',&#10; scrollbars=no');&#10; })();"> </a>
</div>
</div>
<script>
$(window).scroll(function() {
				if ($(this).scrollTop() > 110) {
                    $('.share-comment').addClass('s-c-fix');
		        } else {
		            $('.share-comment').removeClass('s-c-fix');
		        }
		});
</script>
<style>
.paylas-yorum .user.share-comment.s-c-fix,
.paylas-yorum .share-5.share-comment.s-c-fix {
    position: fixed;
    top: 77px;
    z-index: 10;
}

 {
    position: fixed;
    top: 77px;
    z-index: 10;
}
.user.share-comment {
    position: absolute;
    left: 50%;
    margin-left: -615px;
    -webkit-box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);

}
.user.share-comment:hover {
    -webkit-box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    transition: 0.2s;}
.user {
    background: url(https://img.webme.com/pic/a/aliq03/comnt13.png)white no-repeat;
    background-size: 28px;
    background-position: 16px;
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.user:before {
       position: absolute;
    bottom: 150%;
    left: 50%;
    margin-bottom: -73px;
    margin-left: 38px;
    padding: 4px;
    width: 74px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background-color: #000;
    background-color: hsl(0, 0%, 14%);
    color: #fff;
    content: attr(data-tooltip);
    text-align: center;
    font-size: 14px;
    line-height: 1.2;
    font-family: roboto;
    font-weight: 500;
}
.user:after {
    position: initial;
    bottom: 150%;
    left: 50%;
    margin-left: -5px;
    width: 0;
    border-top: 5px solid rgba(0, 0, 0, 0);
    border-top: 5px solid hsla(0, 0%, 20%, 0);
    border-right: 5px solid transparent;
    border-left: 5px solid transparent;
    content: " ";
    font-size: 0;
    line-height: 0;
}
</style>




<div class="msg_box" style="right:290px">
<div class="msg_head">yorum ekle
<div class="close">x</div>
</div>
<div class="msg_wrap">
<div class="yrm-user-logo"></div>
<div class="yorumyap">
</div><div class="smile-cmnt">
<a href="#" class="InsertSmilie" onclick="insert_smilie(';)'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/wink1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':)'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/smiley1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':D'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/cheesy1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie('>:('); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/angry1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':('); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/sad1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':o'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/shocked1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie('8)'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/cool1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(';-)'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/rolleyes1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':P'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/tongue1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie(':\'('); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/cry1.png" border="0"></a>
<a href="#" class="InsertSmilie" onclick="insert_smilie('???'); blur(this); return false;"><img src="https://img.webme.com/pic/a/aliq03/huh1.png" border="0"></a>
</div>
</div>
</div>
</html>
<style>
.msg_box {
    position: fixed;
    bottom: -5px;
    width: 663px;
    background: white;
    border-radius: 5px 5px 0px 0px;
    left: 50%;
    margin-left: -500px;
    z-index:9;
-webkit-box-shadow: 0px -2px 34px 2px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px -2px 34px 2px rgba(0,0,0,0.75);
    box-shadow: 0px -2px 34px 2px rgba(0,0,0,0.75);
}

.msg_head {
    background: #eaaa1c;
    padding: 10px;
    font-family: roboto;
    text-transform: uppercase;
    color: white;
cursor:pointer;
    letter-spacing: 1.1px;
    font-weight: 500;
}

.msg_body{
	background:white;
	height:200px;
	font-size:12px;
	padding:15px;
	overflow:auto;
	overflow-x: hidden;
}
.msg_input{
	width:100%;
	border: 1px solid white;
	border-top:1px solid #DDDDDD;
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;  
}

.close {
    float: right;
    cursor: pointer;
    text-transform: initial;
    font-size: 0px;
    width: 42px;
    height: 48px;
    margin: -10px;
    background: url(https://img.webme.com/pic/a/aliq03/close-icon-white.png) no-repeat;
    background-size: 17px;
    background-position: 12px;
    image-rendering: pixelated;
}
.close:hover {
    background-color: #ef2929;
}
.minimize{
	float:right;
	cursor:pointer;
	padding-right:5px;
	
}
.msg_box {display:none}
.msg_wrap {height:204px}
.msg_a{
	position:relative;
	background:#FDE4CE;
	padding:10px;
	min-height:10px;
	margin-bottom:5px;
	margin-right:10px;
	border-radius:5px;
}
.msg_a:before{
	content:"";
	position:absolute;
	width:0px;
	height:0px;
	border: 10px solid;
	border-color: transparent #FDE4CE transparent transparent;
	left:-20px;
	top:7px;
}


.msg_b{
	background:#EEF2E7;
	padding:10px;
	min-height:15px;
	margin-bottom:5px;
	position:relative;
	margin-left:10px;
	border-radius:5px;
	word-wrap: break-word;
}
.msg_b:after{
	content:"";
	position:absolute;
	width:0px;
	height:0px;
	border: 10px solid;
	border-color: transparent transparent transparent #EEF2E7;
	right:-20px;
	top:7px;
}
</style>
<script>
$(document).ready(function(){

	$('.chat_head').click(function(){
		$('.chat_body').slideToggle('slow');
	});
	$('.msg_head').click(function(){
		$('.msg_wrap').slideToggle('slow');
	});
	
	$('.close').click(function(){
		$('.msg_box').hide();
	});
	
	$('.user').click(function(){

		$('.msg_wrap').show();
		$('.msg_box').show();
	});
	
	$('textarea').keypress(
    function(e){
        if (e.keyCode == 13) {
            e.preventDefault();
            var msg = $(this).val();
			$(this).val('');
			if(msg!='')
			$('<div class="msg_b">'+msg+'</div>').insertBefore('.msg_push');
			$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
        }
    });
	
});
</script>
<script>
$(document).ready(function(){
$("img[src='//theme.webme.com/smiles/wink.gif']").attr('src','https://img.webme.com/pic/a/aliq03/wink1.png');
$("img[src='//theme.webme.com/smiles/smiley.gif']").attr('src','https://img.webme.com/pic/a/aliq03/smiley1.png');
                  
$("img[src='//theme.webme.com/smiles/cheesy.gif']").attr('src','https://img.webme.com/pic/a/aliq03/cheesy1.png');
$("img[src='//theme.webme.com/smiles/angry.gif']").attr('src','https://img.webme.com/pic/a/aliq03/angry1.png');

$("img[src='//theme.webme.com/smiles/sad.gif']").attr('src','https://img.webme.com/pic/a/aliq03/sad1.png');
$("img[src='//theme.webme.com/smiles/shocked.gif']").attr('src','https://img.webme.com/pic/a/aliq03/shocked1.png');

$("img[src='//theme.webme.com/smiles/cool.gif']").attr('src','https://img.webme.com/pic/a/aliq03/cool1.png');
$("img[src='//theme.webme.com/smiles/huh.gif']").attr('src','https://img.webme.com/pic/a/aliq03/huh1.png');

$("img[src='//theme.webme.com/smiles/rolleyes.gif']").attr('src','https://img.webme.com/pic/a/aliq03/rolleyes1.png');
$("img[src='//theme.webme.com/smiles/tongue.gif']").attr('src','https://img.webme.com/pic/a/aliq03/tongue1.png');

$("img[src='//theme.webme.com/smiles/cry.gif']").attr('src','https://img.webme.com/pic/a/aliq03/cry1.png');
$("img[src='//theme.webme.com/smiles/undecided.gif']").attr('src','https://img.webme.com/pic/a/aliq03/undecided1.png');

$("table[width='100%'][align='center'] table[width='100%'] img").attr('width','18');
$("table[width='100%'][align='center'] table[width='100%'] img").attr('height','18');
$("div#content table[width='100%'][align='center']:last-of-type").attr('class','yorumlar');
});
</script>

<script type="text/javascript">
$( document ).ready(function() {
$(".yorumyap form[method='POST']").prepend( $( "form textarea#kommentartext" ) );
$(".yorumyap").append( $( "center form[method='POST']" ) );
$("form a[target='_blank'] img").attr('width','48');
$(".yorumyap form[method='POST']").prepend( $( "form a[target='_blank'] img" ) );
$(".yorumyap form[method='POST']").prepend( $( "form table td a" ) );
$("form input[type='text']").attr('placeholder','Adiniz');
$(".yorumyap form[method='POST']").prepend( $( "form input[type='text']" ) );
$("form textarea#kommentartext").attr('placeholder','Mesajinizi giriniz...');
$(".yorumyap form[method='POST']").prepend( $( "form textarea#kommentartext" ) );
$("textarea#kommentartext").attr('style','');
});
</script>
<style>
table.yorumlar {
    background: #fff;
box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);

}
.yorumyap form table {
    display: none;
}
.yorumyap form img[alt] {
    position: absolute;
    left: 6px;
    top: 60px;
}
.yorumyap textarea#kommentartext {
    margin: 78px 5px;
padding:7px;
    position: absolute;
    resize: none;
    width: 636px;
    height: 63px;
    border: 1px solid transparent;
    border-top: 1px solid #d8d8d8;
font-family: roboto;
    letter-spacing: 1.1px;
}
.yorumyap textarea#kommentartext:hover {
    border: 1px solid #cccccc;
}
.yorumyap form a.InsertSmilie img {
    margin: 35px 6px;
    position: relative;
    display: -webkit-inline-box;
    left: 300px;
    height: 15px;
    display: none;
}
.yorumyap input[type="submit"] {
       position: absolute;
    top: 0;
    margin: 218px 530px;
    background: transparent;
    border: transparent;
    font-weight: bold;
    font-family: Arial,sans-serif;
    color: #cb3315;
    cursor: pointer;
    letter-spacing: 1.2px;
    font-size: 14px;
    text-transform: uppercase;
    z-index: 0;
}
.yorumyap form a[target="_blank"]:nth-of-type(2) {
        position: absolute;
    margin: 30px 65px;
    color: #484848;
    text-transform: uppercase;
    font-family: roboto;
    font-weight: 400;
    font-size: 14px;
    letter-spacing: 1.3px;
}
.yorumyap input[type="text"] {
      position: absolute;
    top: 76px;
    left: 65px;
    padding: 5px;
    border: 1px solid #d8d8d8;
}
.yrm-user-logo {
    position: absolute;
    width: 48px;
    height: 48px;
    background: url(https://img.webme.com/pic/a/aliq/purpleuser1.png);
    background-size: 68px;
    left: 6px;
    top: 60px;
}
.smile-cmnt {
    position: absolute;
    right: 25px;
    top: 75px;
}
.smile-cmnt a img {
    padding: 3px;
}
.smile-cmnt a img:hover {
    border-radius: 5px;
    background:#f3f2f2;
}
table[width="100%"][align="center"] table[width="100%"] img {
    vertical-align: -4px;
 padding: 0px 3px;
}
div#content > b:last-of-type {
    display: none;
}
</style>
<style>
div.share-5 {
    color: #fff;
    width: 50px;
    text-align: center;
    margin: 66px -615px;
    position: absolute;
    left: 50%;
}
div.share-5 .share{
  width:60px;
  height:60px;
  display:inline-block;
  border-radius:30px;
  margin:5px auto;
  cursor:pointer;
  position:relative;
  background:#fff 
  line-height:100;
  overflow:hidden;
}
div.share-5 a {
    width: 45px;
    height: 45px;
    display: inline-block;
    border-radius: 30px;
    margin: 5px 5.6px;
    cursor: pointer;
    position: relative;
    background: #fff line-height:100;
    overflow: hidden;
font-size:0;
}
div.share-5 .share {
    background: url(https://img.webme.com/pic/a/aliq03/share13.png) white no-repeat;
    background-size: 26px;
    background-position: 15px;
    font-size: 0;
-webkit-box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 25px -8px rgba(0,0,0,0.75);
}
.share-5 .share:hover {
    -webkit-box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 60px -11px rgba(0,0,0,0.75);
    transition: 0.2s;
}

div.share-5 a:nth-of-type(1) {
    background: url(https://img.webme.com/pic/a/aliq03/twitter57px.png) #29C5F6 no-repeat;
    background-position: 5px;
    background-size: 38px;
}
div.share-5 a:nth-of-type(2) {
    background: url(https://img.webme.com/pic/a/aliq03/fb-art02.png) #3B5998 no-repeat;
        background-position: 4px 5px;
    background-size: 29px;

}
div.share-5 a:nth-of-type(3) {
    background: url(https://img.webme.com/pic/a/aliq03/google+logo1.png) #D54E31 no-repeat;
        background-position: 6px;
    background-size: 33px;

}
div.share-5 a{
  -webkit-transform: scale(0) translate3d(0,0,0);
  -webkit-transition: -webkit-transform 0.0001s linear,background 0.0001s ease;
}

/* animation */
div.share-5:hover i{
  height:190px;
  -webkit-transition: height 0.0001s linear;
  -webkit-transition-duration:.3s;
}
div.share-5:hover a{
  -webkit-transform: scale(1) translate3d(0,0,0);
  -webkit-transition-delay: 0.1s,0.0001s;
  -webkit-transition-duration: 0.3s, 0.4s;
}
div.share-5:hover a:nth-of-type(2){
  -webkit-transition-delay: 0.2s,0.0001s;
}
div.share-5:hover a:nth-of-type(3){
  -webkit-transition-delay: 0.3s, 0.001s;
}
</style>
<script> ! function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = &quot;//platform.twitter.com/widgets.js&quot;; fjs.parentNode.insertBefore(js, fjs); } }(document, &quot;script&quot;, &quot;twitter-wjs&quot;); </script>

<style>
body .rns {display:inline}
ol#new-projects article,
.sidebaryan1,
.sidebaryan2 {
    display: none;
}
ol#new-projects {
    margin-left: -20px;
}
body article.carditem {
    width: auto;}
.carditem header {height:125px;}
.carditem .img-fluid {image-rendering: -webkit-optimize-contrast;}
ol#new-projects article:nth-of-type(1),
ol#new-projects article:nth-of-type(2),
ol#new-projects article:nth-of-type(3),
ol#new-projects article:nth-of-type(4),
ol#new-projects article:nth-of-type(5),
ol#new-projects article:nth-of-type(6),
ol#new-projects article:nth-of-type(7) {
    display: inherit;
}
body .carditem .img-fluid {
    width: 33%;
    float: left;
}
body .carditem header {
    height: auto;
background:none;
}
body .carditem div {
    float: right;
    width: 130px;
    position: absolute;
    top: 0px;
    margin: -2px 61px;
    height: 51px;
    max-height: 50px;
    overflow: hidden;
    padding-left: 43px;
}
body .carditem div:before {
    margin: 3px -38px;
    border-radius: 13px;
    background-color: white;
    background-position: 2px;
}
body .carditem div:after {width:100px }
body .sidebar_section.sidebar_section_bg.sidebaryan3 {
    width: 241px;
    margin-left: 29px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
}
body #webme_sky_ad {
    padding-left: 45px;
}
body #new-projects .carditem:first-of-type {
    margin-left: 8px;
}
</style>
<style>
article.carditem {
   height:auto;
    width:332px;
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 1px 5px 0 rgba(0, 0, 0, 0.12), 0 3px 1px -2px rgba(0, 0, 0, 0.2);
padding:0;
margin: 20px 5px;
background:white;
}
.carditem {
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
}
.carditem a {
    color: #212121;
}
#content .carditem:first-of-type {
    margin-left: 8px;
}
.carditem .img-fluid {
    height: auto;
    -moz-transition: -moz-transform 0.2s ease-out;
    -webkit-transition: -webkit-transform 0.2s ease-out;
    -ms-transition: -ms-transform 0.2s ease-out;
    transition: transform 0.2s ease-out;
    width: 100%;
        image-rendering: -webkit-optimize-contrast;
    height: 80px;

}
.carditem header:hover img {
    -moz-transform: scale(1.05);
    -webkit-transform: scale(1.05);
    -ms-transform: scale(1.05);
    transform: scale(1.05);
}

.carditem header {
    background: url(https://img.webme.com/pic/a/aliq03/pattern.png)  #fdfbd1;
    background-size: 600px;
    background-position: -63px;
overflow: hidden;
}
.carditem div {
    text-transform: capitalize;
    padding: 12px 10px;
    text-align: left;
    font-family: roboto;
    font-weight: 400;
    font-size: 16px;
    height: 30px;
    word-wrap: break-word;
    margin-left: 36px;
}
.carditem div:before {
    content: "";
    background: red;
    width: 30px;
    height: 30px;
    position: absolute;
    margin-left: -34px;
margin-top:-3px;
}
article.carditem.aliq-btn {
    white-space: inherit;
    line-height: 20px;
background: white;
}
article.carditem.aliq-btn:hover{
background: white;
  box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2), 0 6px 10px 0 rgba(0,0,0,0.3);
}
.carditem div:after {
    display: block;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 39px;
    height: 30px;
    content: "";
    background: linear-gradient(to right,rgba(255,255,255,0),rgba(255,255,255,1));
}
/*********/
.filter-select .filters {
    width:29px;
    height: 29px;
    background: #333333;
    display: -webkit-inline-box;
    margin-right:6px;
    font-size: 0;
    cursor: pointer;
}
.filter-select {
    position: absolute;
    right: 50%;
    margin-right: -508px;
    margin-top: -41px;
}
.filter-select .tema-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/template-icon.png) no-repeat;
    background-size: 29px;
}
.filter-select .kodlar-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/codes-icon.png) no-repeat;
    background-size: 29px;
}
.filter-select .ps-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/icon-psd.png) no-repeat;
    background-size: 29px;
}
.filter-select .font-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/icon-font.png) no-repeat;
    background-size: 29px;
}
.filter-select .photo-filter-button {
    background: url(https://img.webme.com/pic/a/aliq03/photo-aqua-icon.png) no-repeat;
    background-size: 29px;
}

.filter-select .all-filter-button {
    background: transparent;
    background-size: 32px;
    font-size: 16px;
    width: auto;
    font-weight: 400;
    vertical-align: text-top;
    letter-spacing: 1px;
}
.tema-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/template-icon.png) no-repeat;
background-size:25px;
}
.kodlar-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/adimsa.png) no-repeat;
background-size:25px;
}
.ps-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/icon-psd.png) no-repeat;
background-size:25px;
}
.photo-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/photo-aqua-icon.png) no-repeat;
background-size:25px;
}
.font-button div:before {
    background: url(https://img.webme.com/pic/a/aliq03/icon-font.png) no-repeat;
background-size:25px;
}
</style>
