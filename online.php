<?php
header("Access-Control-Allow-Origin: *");
?>

<!--mesajlar basla-->
<style>
			#nav-message{list-style:none;margin: 0px;padding: 0px;}
			#nav-message li {
    float: left;
    margin-right: 20px;
    font-family: 'Roboto',Tahoma,Arial,sans-serif;
    font-size: 14px;
    font-weight: 500;
}

			#notification_li-message
			{
			position:relative
			}
			#notificationContainer-message 
			{
		    background-color: #fff;
    border: 1px solid rgba(100, 100, 100, .4);
    -webkit-box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
    overflow: visible;
    position: absolute;
    top: 33px;
    margin-left: -240px;
    width: 400px;
    display: none; }
			#notificationContainer-message:before {
    content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    color: transparent;
    border: 12px solid black;
    border-color: transparent transparent white;
    margin-top: -24px;
    margin-left: 255px;
}
			#notificationTitle-message
			{
			font-weight: bold;
			padding: 8px;
			font-size: 13px;
			background-color: #ffffff;
			position: absolute;
			z-index: 1000;
			width: 384px;
			border-bottom: 1px solid #dddddd;
			}
			a#notificationLink-message {
    color: #eeeeee;
    text-decoration: none;
}
			#notificationsBody-message
			{
			padding: 33px 0px 0px 0px !important;
			min-height:300px;
			}
			#notificationFooter-message
			{
			background-color: #e9eaed;
			text-align: center;
			font-weight: bold;
			padding: 8px;
			font-size: 12px;
			border-top: 1px solid #dddddd;
			}
			#notificationFooter-message a {
    color: #626262;
    text-decoration: none;
}

.mesaj {
    position: fixed;
    top: 17px;
    z-index: 99999;
    left: 50%;
    margin-left: 346px;
display:none;
}
		#notification_count-message {
    padding: 2px 4px;
    background: #cc0000;
    color: #ffffff;
    margin-left: 57px;
    position: absolute;
    margin-top: -17px;
    font-size: 11px;;
    border-radius: 3px;
    
    display:none; /sonra sil
}
img.no-message-img {
    margin: 135px 167px;width:75px;
}
.no-message-text {
    -webkit-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.51);
    background-color: #dedede;
    color: #575757;
    display: inline-block;
    font-size: 13px;
    padding: 15px 20px;
    margin: 77px 120px;
    position: absolute;
        width: 126px;
}
</style>
<script>
			$(document).ready(function()
			{
			$("#notificationLink-message").click(function()
			{
			$("#notificationContainer-message").fadeToggle(300);
			$("#notification_count-message").fadeOut("slow");
			return false;
			});

			//Document Click hiding the popup 
			$(document).click(function()
			{
			$("#notificationContainer-message").hide();
			});

			//Popup on click
			$("#notificationContainer-message").click(function()
			{
			return false;
			});

			});
</script>


<div class="mesaj"><ul id="nav-message"><li id="notification_li-message">
		<a href="#" id="notificationLink-message">Mesajlar</a>
			<span id="notification_count-message">3</span>
            <div id="notificationContainer-message">
			<div id="notificationTitle-message"><a>Mesajlar</a></div>
			<div id="notificationsBody-message" class="notifications-message"><div class="no-message-text">Henüz mesajınız yok!</div>
			    <img class="no-message-img" src="http://www.freeiconspng.com/uploads/message-icon-png-25.png"></div>
			<div id="notificationFooter-message"><a href="#">Tümünü Gör</a></div>
			</div></li></ul></div>
    <!--mesajlar bitis-->

<!---ayarlar basla--->
<div class="modal">
  <div class="overlay"></div>
  <div class="modal__contents modal--transition">
    <a class="modal__close" href="#">X</a>
    <div id="proflifrmediv"><iframe target="_blank" width="250" height="50" src="http://aliq03.tr.gg/Forum/topic-17-1-Prflframe.htm" scrolling="no" frameborder="0" style="padding: 3px;"></iframe></div>
    <ul>
        <li>
          <a class="profilresimdegistir aliq-btn aliq-btn--flat" href="http://aliq03.tr.gg/Forum/topic-10-1--Profil-Resmini-GÃ¼ncelle.htm">Profil resmini değiştir</a>
        </li>
        <li>
          <a class="kapakresimdegistir aliq-btn aliq-btn--flat" href="http://aliq03.tr.gg/Forum/topic-12-1-Kapak-Resmini-GÃ¼ncelle.htm">Kapak resmini değiştir</a>
        </li>
        <li>
          <a class="cikismenusu aliq-btn aliq-btn--flat" href="logout.htm">Çıkış yap</a>
        </li>
      </ul>
  </div>
</div>

<div class="dib tc">
  <a class="aliq-btn aliq-btn--fab btn" href="#forum-menu"></a>
</div>
<style>
#proflifrmediv {
    position: absolute;
    margin: -3px -10px;
    clip: rect(4px 225px 172px 10px);
}
.tc {
  text-align: center;
}

.dib {
  display: block;
}

.overlay {	position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
      cursor: default;
}

.modal {
  visibility: hidden;
}
.modal ul {
    margin-top:53px;
list-style: none;
    margin-left: -40px;
}
.modal__contents {
    background: white;
    width: 215px;
    height: auto;
    position: fixed;
    border-radius: 1px;
    left: 50%;
    margin-left: 291px;
    top: 47px;
    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14),0 3px 14px 2px rgba(0,0,0,0.12),0 5px 5px -3px rgba(0,0,0,0.2);
    z-index: 11111111;
}
.modal__contents:before {
    margin-left: 129px;
    margin-bottom: -69px;
    border-bottom: 9px solid hsl(0, 0%, 100%);
    border-right: 9px solid transparent;
    border-left: 9px solid transparent;
    content: "";
    top: -9px;
    position: absolute;
}
.modal__contents li a {
    font-family: Roboto,Arial,sans-serif;
    -webkit-font-smoothing: antialiased;
    font-size: 13px;
    font-weight: normal;
    text-decoration: none;
    color: #222;
    cursor: pointer;
    display: block;
    margin: 2px 0px;
    outline: none;
    overflow: hidden;
    padding: 11px 24px 11px 60px;
    margin-bottom: 2px;
    position: relative;
    -webkit-transition: all .05s ease,opacity .3s ease .2s,margin-left .2s ease .2s;
    transition: all .05s ease,opacity .3s ease .2s,margin-left .2s ease .2s;
    line-height: 15px;
    text-transform: none;
    text-shadow: none;
    height: 15px;
    text-align: left;
}
a.aliq-btn.aliq-btn--flat {
    color: rgba(31, 30, 30, 0.87);
}
a.profilresimdegistir.aliq-btn.aliq-btn--flat:before {
    content: " ";
    position: absolute;
    background: url(https://img.webme.com/pic/a/aliq03/profilresimiconn.png);
    background-size: 22px;
    width: 22px;
    height: 22px;
    margin: -3px -40px;
}

a.kapakresimdegistir.aliq-btn.aliq-btn--flat:before {
    content: " ";
    position: absolute;
    background: url(https://img.webme.com/pic/a/aliq03/kapakresmicon.png);
    background-size: 22px;
    width: 22px;
    height: 22px;
    margin: -3px -40px;
}
a.cikismenusu.aliq-btn.aliq-btn--flat:before {
      content: " ";
    position: absolute;
    background: url(https://img.webme.com/pic/a/aliq03/logoutmenusu.PNG);
    background-size: 22px;
    width: 22px;
    height: 22px;
    margin: -3px -40px;
}
.modal__contents li a:hover {
    background: #e9ebee;
}
.modal__close {
  position: absolute;
  right: 2rem;
  top: 2rem;
  text-decoration: none;
  display: none;
}

.modal--show {
  visibility: visible;
}

.modal--transition {
	-webkit-transform: scale(0.7);
	-moz-transform: scale(0.7);
	-ms-transform: scale(0.7);
	transform: scale(0.7);
	opacity: 0;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.modal--show .modal--transition {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}

.dib.tc a.btn {
    background: transparent;
    background-position: 12.5px 6px;
    width: 28px;
    height: 28px;
    position: fixed;
    background-size: 3.5px;
    top: 0px;
    left: 50%;
    margin-left: 416px;
    z-index: 999992;
    border-radius: 55%;
}
@media (max-width : 48rem) {

  .modal__contents {
  	top: 0;
  	left: 0;
    bottom: 0;
    width: 100%;
    margin: 0;
  }
  
  .modal__close {
    display: block;
  }
  
  .modal--transition {
    -webkit-transform: translateX(-0) translateY(150%);
    -moz-transform: translateX(-0) translateY(150%);
    -ms-transform: translateX(-0) translateY(150%);
    transform: translateX(-0) translateY(150%);
    
  }
  
}
</style>
<script>
var modal = $('.modal');

$( ".btn" ).on( "click", function() {
  $( modal ).toggleClass('modal--show');
});

$( ".overlay" ).on( "click", function() {
  $( modal ).toggleClass('modal--show');
});

$( ".modal__close" ).on( "click", function() {
  $( modal ).toggleClass('');
});  

</script>
<!---ayarlar bitis--->
<!--bildirimler--basla--->
<div class="notificationslider">             <input type="checkbox" id="notifications" />                 <label for="notifications">
<div class="notificationscounter list-count"><img src="http://img.webme.com/pic/a/aliq03/loadingyesil.gif" width="10" height="10" alt="" /></div>
</label>                     <div class="notifications">    
<!-----yazi-ici--basla--->
<div class="wrapper"><div class="guncelleme-baslik">YENİ GÜNCELLEME</div>
<ul class="list" id="list"> <!----basla----->
<!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-08-05T19:13">aliq03.tr.gg</abbr>Kayıt ol sayfası yenilendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
<!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-08-05T19:13">aliq03.tr.gg</abbr>Artık Giriş yapılmadığı takdirde kullanıcı profilini beğenme ve kullanıcıyı bildirme(Şikayet etme) yapılamayacak.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
<!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-08-05T19:11">aliq03.tr.gg</abbr>Profil Sayfasına kullanıcı bilgileri eklendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
<!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-01-14T15:56">aliq03.tr.gg</abbr>Forum emojileri yenilendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->

 <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-01-14T15:04">aliq03.tr.gg</abbr>Profil Sayfasına profili beğen tuşu eklendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
     <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2016-01-14T15:04">aliq03.tr.gg</abbr>Profil Sayfasına kullanıcıyı bildir tuşu eklendi ve artık kullanıcı hakkında ki şikayetinizi iletebilirsiniz.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
 <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2015-09-09T18:46">aliq03.tr.gg</abbr>Profil Sayfasına yorum kutusu eklendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->

   
   <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2015-09-08T18:46">aliq03.tr.gg</abbr>Profil Sayfasına Kapak fotosu ekleme aktif hale getirildi ve kapak fotonuzu değiştirin sayfasına giderek kapak fotoğrafınızın değiştirilmesini isteyebilirsiniz.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
    <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2015-09-08T18:46">aliq03.tr.gg</abbr>Her kullanıcının kendisine ait profil resmi ekleyebilmesi sağlandı ve profil sayfasında profil resminizin üzerine tıklayarak profil resminizi değiştirebilirsiniz.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
    <!--guncelleme ekle basla---> <li>
    <div class="post">
    <div class="post-inner"><abbr class="timeago" title="2015-09-08T18:46">aliq03.tr.gg</abbr>Güncellemeler Panosu eklendi.</div>
    </div>
    </li><!--guncelleme ekle bitis--->
    <!----bitis--> 
<!--guncelleme sayisi alma--basla--->
<script>$(document).ready(function() {

  var jobCount = $('#list .post').length;
  $('.list-count').text(jobCount + '  ');
    
  
  $("#search-text").keyup(function () {
     //$(this).addClass('hidden');
  
    var searchTerm = $("#search-text").val();
    var listItem = $('#list').children('li');
  
    
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
      //extends :contains to be case insensitive
  $.extend($.expr[':'], {
  'containsi': function(elem, i, match, array)
  {
    return (elem.textContent || elem.postnerText || '').toLowerCase()
    .postdexOf((match[3] || "").toLowerCase()) >= 0;
  }
});
    
    
    $("#list li").not(":containsi('" + searchSplit + "')").each(function(e)   {
      $(this).addClass('hiding out').removeClass('in');
      setTimeout(function() {
          $('.out').addClass('hidden');
        }, 300);
    });
    
    $("#list li:containsi('" + searchSplit + "')").each(function(e) {
      $(this).removeClass('hidden out').addClass('in');
      setTimeout(function() {
          $('.post').removeClass('hiding');
        }, 1);
    });
    
  
      var jobCount = $('#list .post').length;
    $('.list-count').text(jobCount + '  ');
    
    //shows empty state text when no jobs found
    if(jobCount == '0') {
      $('#list').addClass('empty');
    }
    else {
      $('#list').removeClass('empty');
    }
    
  });

  
                  
     /*  
     An extra! This function implements
     jQuery autocomplete in the searchbox.
     Uncomment to use :)
     
     
 function searchList() {                
    //array of list items
    var listArray = [];
  
     $("#list li").each(function() {
    var listText = $(this).text().trim();
      listArray.push(listText);
    });
    
    $('#search-text').autocomplete({
        source: listArray
    });
    
    
  }
                                   
  searchList();
*/
  
                    
});
</script>
<!---guncelleme sayisi alma bitis-->
</ul>
    <button id="next">Daha Eski</button></div>
    <style type="text/css">
.list {
	list-style: none;
	padding: 0;
	margin: 0;
}
button#next {
  background-color: rgb(68, 68, 68);
  border: 0;
  color: white;
  padding: 10px;
  cursor: pointer;
  border-radius: 3px;
  width: 200px;
  margin: 10px;
  margin-left: 37px;
  font-weight: 600;
  box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.58);
}
button#next:hover {
  transition: 1s;
  background-color: rgb(147, 147, 147);
}

.list li {
	position: relative;}

</style> <script>
$(document).ready(function(){

      var list = $(".list li");
      var numToShow = 6;
      var button = $("#next");
      var numInList = list.length;
      list.hide();
      if (numInList > numToShow) {
        button.show();
      }
      list.slice(0, numToShow).show();

      button.click(function(){
          var showing = list.filter(':visible').length;
          list.slice(showing - 1, showing + numToShow).fadeIn();
          var nowShowing = list.filter(':visible').length;
          if (nowShowing >= numInList) {
            button.hide();
          }
      });

});
</script> <!--yazi---bitis-->
 <style type="text/css">
.wrapper::-webkit-scrollbar {
    width:5px;border-radius: 40px;
}
.wrapper::-webkit-scrollbar-track {
  background-color: rgba(255, 255, 255, 0.06);
  border-left: 1px solid #ccc;border-radius: 40px;
}
.wrapper::-webkit-scrollbar-thumb {
    background-color: rgba(111, 111, 111, 0.56);
    border-radius: 40px;
    transition: 1s;
}
.wrapper::-webkit-scrollbar-thumb:hover {
        background-color: rgb(56, 56, 56);
    border-radius: 40px;    transition: 1s;
}
.wrapper {
overflow: scroll;
  overflow-x: hidden;
  height: 293px;
}
.guncelleme-baslik {
    position: absolute;
    margin-top: -30px;
    margin-left: 7px;
    font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #4c4c4c;
    border-bottom: 1px solid #c9c9c9;
    padding-left: 26px;
    padding-bottom: 7px;
    width: 224px;
}
.guncelleme-baslik:after {
    content: "";
    background: url(https://img.webme.com/pic/a/aliq03/arrow-2.png);
    background-size: 15px;
    width: 15px;
    height: 15px;
    position: absolute;
    margin: -2px 69px;
}
.post {
  width: 254px;
  padding-top: 5px;
  padding-bottom: 3px;
  padding-left: 5px;
  position: relative;
  padding-right: 5px;
}
.guncelleme {
    padding: 10px;
    width: 256px;
    background-color: rgb(111, 111, 111);
    color: white;
    text-transform: uppercase;
    font-weight: 600;
    margin-top: -6px;
    margin-left: -5px;
    position: absolute;
    text-align: center;
}

.post-inner {
border: 1px solid #FFFFFF;
    border-radius: 4px;
    padding: 10px;
    padding-bottom: 29px;
    box-shadow: 1px 1px 3px rgba(0,0,0,0.35);
    background-color: rgb(255, 255, 255);
    color: rgb(82, 79, 79);
    margin-top: 1px;
    margin-bottom: 4px;
    text-align: left;
    line-height: 1.3em;
    font-family: RobotoDraft, 'Helvetica Neue', Helvetica, Arial;
    font-size: 14px;
    font-weight: 400;
}
.post-inner:After {
    content: "";
    position: absolute;
    background: url(http://img.webme.com/pic/a/aliq03/logo-gray.png) no-repeat;
    background-size: 17px;
    width: 20px;
    height: 20px;
    left: 0;
    margin-left: 16px;
    margin-top: 23px;
}
figure.snip1300.blue ,
.pic-container {display:inherit;}
abbr.timeago {
    position: absolute;
    width: 238px;
    text-align: left;
    font-size: 12px;
    color: rgb(78, 80, 82);
    bottom: 14px;
    margin-left: 25px;
    letter-spacing: 0.5px;
    word-spacing: -1px;
    font-weight: 600;
}
.bildirimler ,{}
</style>
<!--timeago-ayarlar--->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script> <script src="http://aliq3.hol.es/timeago.js" type="text/javascript"></script>     <script src="http://timeago.yarp.com/test/test_helpers.js" type="text/javascript"></script>     <script src="http://aliq3.hol.es/timeago2.js" type="text/javascript"></script>  <!--timeago-ayarlar-bitis-->
<!-----yazi-ici--bitis--->
</div>      

<style type="text/css">
.notificationslider {
    width: 170px;
    height: 0px;
    position: fixed;
    top: -4px;
    left: 50%;
    margin-left: 327px;
    z-index: 999998;
}
.notifications{
     background: #E5E5E5;
    height: 310px;
    width: 270px;
    position: relative;
    top: -595px;
    right: 110px;
    border: 1px solid #CCCCCC;
    border-radius: 0px;
    border-bottom-left-radius: 2px;
    border-bottom-right-radius: 2px;
    padding-top: 55px;
    padding-left: 5px;
    padding-right: 5px;
    box-shadow: 0px -50px 0px #121a21;
    transition: all .4s cubic-bezier(0.565, -0.260, 0.255, 1.410);
box-shadow: 0 2px 10px rgba(0,0,0,.2);
-webkit-box-shadow: 0 2px 10px rgba(0,0,0,.2);
}

.notification{
    display: block;
    position: relative;
    background: rgba(255,255,255,0.02);
    padding: 7px;
    border-radius: 3px;
    z-index:999999;
    font-family: Lato;
    color: #DDD;
    margin-bottom: 5px;
    transition: all .1s cubic-bezier(0.565, -0.260, 0.255, 1.410);
}
.notification:hover{
    background: rgba(255,255,255,0.05);
}
input#notifications + label {
    font-size: 25px;
    width: 9px;
    height: 30px;
    text-align: center;
    float: right;
    display: inline-block;
    padding: 10px;
    color: white;
    background: none;
    cursor: pointer;
    position: relative;
    top: 0;
    z-index: 1000;
    transition: all .5s cubic-bezier(0.565, -0.260, 0.255, 1.410);
}
input#notifications{
    position:absolute;
    opacity:0;
    width: 0;
    height: 0;
    display: none;
}
input#notifications + label:before {
    font-family: 'FontAwesome';
    content: "\f0f3";
    color: transparent;
    position: absolute;
    top: 16px;
    right: 1px;
    cursor: pointer;
    background: url(https://img.webme.com/pic/a/aliq/notify5.png) no-repeat;
    background-size: 16.5px;
    width: 28px;
}
input#notifications:checked + label:before {
    content: "\f0f3";
    color:transparent;
    transition: all .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
    cursor: pointer;
}
input#notifications:checked + label {
    top: 0px;
    width: 280px;
}
input#notifications + label div.notificationscounter {
    position: absolute;
    bottom: 25px;
    left: 9px;
    background: #F05C44;
    border: 2px solid #507299;
    font-size: 0px;
    color: #FFF;
    border-radius: 500px;
    padding: 5px 5px;
    transition: all .2s cubic-bezier(0.565, -0.260, 0.255, 1.410);
}
input#notifications:checked + label .notificationscounter {
    position: absolute;
    bottom: 12px;
    left: 30px;
    background: none;
    border: 0;
    border-radius: 1px;
    padding: 3px 6px;
    font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
    font-size: 15px;
    font-weight: 500;
    color: #4c4c4c;
}
input#notifications:checked ~ .notifications {
    top: -8px;
}

/* N O T I F I C A T I O N   S T Y L E S */

.notifications .notification b{
    font-weight: 700;
    text-shadow: 0px 0px 4px #222;
}

.notifications .notification.follow{
    padding-left: 40px;
}
.notifications .notification.follow img{
    position: absolute;
    top: 4px;
    left: 5px;
    width: 25px;
    height: 25px;
    border-radius: 3px;
    opacity: 0.9;
}

.notifications .notification.message:before{
    font-family: 'FontAwesome';
    contet: "\f0e0;";
    font-size: 20px;
    color: #59ABE3;
    position: absolute;
    top: 5px;
    left: 5px;
}
</style><div>
<!--bildirimler----bitis-->

</div>
<style>


.yorumlar {
    padding-top: 16px;
}
div#content b:nth-of-type(1) a[href*="profile-"] {
    z-index: 99999;}
.bildirimler {
    display: inherit;
}
.notify {display:none;}


</style>
<!----cikis yap bitis--->

<!---- mesaji duzenle bolumu basla --->

<script>
$(document).ready(function(){

$("div#content form[action*='edit-']").append('<style> table[width="100"] input[accesskey="b"], table[width="100"] input[accesskey="i"], table[width="100"] input[accesskey="u"] {margin-top: -267px;} table[width="100"] input[accesskey="q"], table[width="100"] input[accesskey="c"] {margin-top: -269px;} span.gensmall a {margin-top:-106px;} td[colspan="9"] table[border="0"] span {margin-top:46px; margin-left: 139px;} div[style="padding-left:130px;"] input[type="submit"] {margin-top:9px;} div#content form[action*="edit-"]:before {color: #507299; text-align: left; font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;} </style>');


});
</script>
<!---- mesaji duzenle bolumu bitis --->
<style>

</style>