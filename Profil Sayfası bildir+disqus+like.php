<?php
header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="tr" lang="tr">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<div class="transparanbolumu"></div>
<div class="sikayetbolumu"></div>
<!--begen-basla-><div id="profilbegen" class="profilbegen" >
<!-- LikeBtn.com BEGIN --><div class="likebtn3"><span class="likebtn-wrapper" data-theme="custom" data-icon_l="hrt6" data-icon_l_c_v="#fb0505" data-icon_d_c_v="#fb0505" label_c="#fff" data-label_c_v="#fff" data-lang="tr" data-dislike_enabled="false" data-f_size="-" data-counter_l_c="#ffffff" data-counter_d_c="#ffffff" data-site_id="56c2fe7ea4c688a2139531a5" data-counter_type="substract_dislikes" data-i18n_like="PROFİLİ BEĞEN" data-i18n_after_like="  BEĞENDİN!       "><img src="http://img.webme.com/pic/a/aliq03/loadingfb.gif" width="18" height="18" alt="" /></span><script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script></div><!-- LikeBtn.com END -->


 <script>
$(document).ready(function(){
 $("likebtn-label lb-like-label").attr('style','font-size:/px;');
 $("td.profiladi").append( $( "div.likebtn3" ) );
});
</script>


<div id="disqus_thread"></div>
<script>

/**
 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
/*
var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = '//aliq03-2.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

 <style type="text/css">
.likebtn3 {
    text-align: left;
    margin: 8px 1px;
}
.likebtn-wrapper .lb-a .lb-tt i {color: transparent;border: 0px solid;background:transparent;}
.lb-popup-label.lb-popup-label-share {
  display: none;
}
.likebtn-wrapper .lb-a i {display: none;}
.lb-share-tt .addthis_toolbox {display: none;}
.likebtn-wrapper {
    z-index: 12;
    position: absolute;
}
.lb-style-custom .lb-like, .lb-style-custom .lb-dislike {
    background-color: rgba(255, 255, 255, 0);
    border: 1px solid rgb(255, 255, 255);
}
span#lb-like-0:hover {
    background: transparent;
}
span.likebtn-label.lb-like-label {
    padding: 10px 17px;
    height: 49px;
}
span.lb-count {
    position: absolute;
    margin-top: 50px;
    left: 1px;
    background: none;
    font-size: 16px;
    width: 124px;
color:white;
}
span.lb-count:before {
    content: "PROFiL BEğENiLERi";
    position: absolute;
    width: 132px;
    display: block;
    -webkit-margin-before: 1.33em;
    -webkit-margin-after: 1.33em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
    text-transform: uppercase;
    color: #90949c;
    font-size: 11px;
    line-height: 20px;
    margin-top: -18px;
    letter-spacing: 0.6px;
}
span.lb-count:after {
    content: "";
    position: absolute;
    width: 1px;
    height: 30px;
    background: #222325;
       right: -5px;
    top: -13px;
}
span.lb-fi-hrt6.likebtn-icon.lb-like-icon.lb-fi {
    display: none;
}
.lb-style-custom .lb-like, .lb-style-custom .lb-dislike {
    background:transparent;}
.lb-style-custom .lb-like, .lb-style-custom .lb-dislike:hover {
    background: rgb(255, 255, 255);
    border: 1px solid #dddddd;
    padding: 2px;
    text-transform: uppercase;
    width: 118px;
    border-radius: 3px;
}
.likebtn3 span.lb-voted {
    background: transparent;
}
td[height="102"] iframe {
    position: absolute;
    left: 50%;
    margin-left: -183px;
    margin-top: 274px;
    background: white;
    padding: 10px;
    border: 1px solid #e2e2e2;
    border-radius: 3px;
}
#webme_sky_ad {
    margin-left: 639px;
}
body {
    background:#E9EBEE;
font-family: "Proxima Nova","helvetica neue",helvetica,arial,sans-serif;
}
.col_32 {        margin-top: -71px;
border-radius: 2px;
    box-shadow: 0 1px 0 0 #d7d8db, 0 0 0 1px #e3e4e8;
    color: #525252;
    font-size: 13px;
    font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
    line-height: 1.154;
    font-weight: 400;
    -webkit-font-smoothing: subpixel-antialiased;
    -moz-osx-font-smoothing: auto;
    left: 50%;
    width: 1190px;
    margin-left: -107px;
    border: 0px;
    padding: 20px;
    padding-top: 70px;
    background: #f5f5f5;
    border: 1px solid #c8c8c8;
}


.transparanbolumu {
    position: absolute;
    top: 319px;
    background: transparent;
    width: 241px;
    left: 50%;
    height: 48px;
    margin-left: -638px;
    z-index: 11;
}
.begenbolumu {
    background: white;
    position: absolute;
    top: 328px;
    left: 50%;
    margin-left: -567px;
    width: 344px;
    height: 118px;
    border-radius: 3px;
    padding: 5px;
    z-index: 12;
    border: 1px solid #e2e2e2;
}
.begenbolumu h3 {
    display: block;
    -webkit-margin-before: 1.33em;
    -webkit-margin-after: 1.33em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
    text-transform: uppercase;
    left: 50%;
    margin: 0;
    color: #505050;
    font-size: 11px;
    line-height: 20px;
    margin-top: 1px;
    letter-spacing: 0.6px;
    text-align: center;
}
.sikayetbolumu {
    background: white;
    position: absolute;
    top: 680px;
    left: 50%;
    margin-left: -567px;
    width: 344px;
    height: 80px;
    border-radius: 3px;
    padding: 5px;
    z-index: 12;
    border: 1px solid #e2e2e2;
}
div#disqus_thread {
    width: 716px;
    margin-left: 62px;
    background: #ffffff;
    padding: 16px;
    border-radius: 4px;
    margin-top: 38px;
    border: 1px solid #e2e2e2;
}
</style>


<a href="#" class='notify'><div>Error :(</div></a>
<a href="#" class='notify error'><div>Error :(</div></a>
<style>body {
    font-family: sans-serif;
    overflow-x:hidden;
}
.notify {
    display: block;
    text-decoration: none;
    margin: 40px 0;
    color: #00A300;
    text-align: center;
    position: absolute;
    background: transparent;
    font-size: 0;
    z-index: 15;
    top: 664px;
    left: 50%;
    margin-left: -489px;
    height: 37px;
    width: 186px;
}
.notify.error {
    color: transparent;
    position: absolute;
    top: 177px;
    left: 50%;
    margin-left: -432px;
    z-index: 99;
    width: 126px;
    background: transparent;
    height: 30px;
}

.natification {
    position: fixed;
    bottom: 0px;
    text-align: center;
    color: #fff;
width: 100%;
    right: 0;
    left: 0;
    z-index: 9999999999999999999999;
    height: 0;
    overflow: hidden;
    -webkit-transition: all ease 0.4s;
    -moz-transition: all ease 0.4s;
    -ms-transition: all ease 0.4s;
    -o-transition: all ease 0.4s;
    transition: all ease 0.4s;
}
.natification.is-visible {
    height: 150px;
}
.natification.success {
    background: #8F0000;
}
.natification.error {
    background: #8F0000;
}
.natification .close {
    position: absolute;
    top: 10px;
    right: 15px;
    color: #fff;
    text-decoration: none;
    font-size:x-large;
    
}
.natification h5 {
    margin: 35px 0;
    font-size: 20px;
}
.natification p {
    margin: 20px 0;
    font-size: 12px;
    line-height: 20px;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    font-size: 15px;
    font-family: 'Open Sans','Helvetica Neue',Arial,Helvetica,sans-serif;
    font-weight: 400;
}
</style>
<script>// Notify.js
// lightweight natification/alert system
var Notify = {
    container: null,
    title: null,
    message: null,
    close: null,
    page: $('body'),
    isClosedByUser: false,
    showTime: 3000, // determines how long natification should be visible for
    showTimer: null,

    showTimeout: function () {
        return setTimeout(function () {
            _n.events.hide();
        }, _n.showTime);
    },


    init: function () {
        _n.page.append('<div class=natification><h5></h5><p></p> <a class="close" href="#">&times;</a></div>');
        _n.container = $('.natification');
        _n.title = _n.container.find('h5');
        _n.message = _n.container.find('p');
        _n.close = _n.container.find('.close');

        // when you hover over the natification, clear the timeout,
        // then set it again when they mouse out
        _n.container.mouseenter(_n.events.hoverStart)
            .mouseleave(_n.events.hoverFinish);

        _n.close.on('click', _n.events.hide);
    },

    events: {
        show: function (success, title, message) {

            if (_n.showTimer != null) {
                clearTimeout(_n.showTimer);
            }
            _n.isClosedByUser = true;
            _n.title.html(title);
            _n.message.html(message);
            if (success) {
                _n.container.removeClass('error')
                    .addClass('success');
            } else {
                _n.container.removeClass('success')
                    .addClass('error');
            }
            _n.container.addClass('is-visible');

            //hide after Notify.showTime seconds
            _n.showTimer = _n.showTimeout();
        },

        hide: function (e) {
            // check if the user clicked the close button
            if (typeof e != 'undefined') {
                e.preventDefault();
                isClosedByUser = true;
            } else {
                isClosedByUser = false;
            }

            _n.container.removeClass('is-visible');
            clearTimeout(_n.showTimer);
        },

        hoverStart: function () {
            clearTimeout(_n.showTimer);
        },

        hoverFinish: function () {
            // if the user clicked the close button
            // then we don't restart the timer
            if (!isClosedByUser) {
                _n.showTimer = _n.showTimeout();
            }
        }
    }

},
//shortcut
_n = Notify,
    $notify = $('.notify');

_n.init();

$notify.on('click', function (e) {
    e.preventDefault();
    if ($(this).hasClass('error')) {
        _n.events.show(false, 'Heeey!', ' Bu profili beğenmek için giriş yap veya hesap oluştur.');
    } else {
        _n.events.show(true, 'Heeey!', ' Bu kullanıcıyla ilgili şikayetini bildirmek için giriş yap veya hesap oluştur.');
    }
});
</script>
<!---Kullanıcıyı bildir basla--->
<script>
  function activateModal() {
    // initialize modal element
    var modalEl = document.createElement('div');
    modalEl.innerHTML = document.getElementById("kullanicisikayet").innerHTML
    modalEl.style.width = '400px';
    modalEl.style.height = '56px';
    modalEl.style.margin = '100px auto';
    modalEl.style.backgroundColor = '#fff';
    modalEl.style.class = 'ahmet';
   

    // show modal
    aliq.overlay('on', modalEl);
  }
</script>
<button class="sikayet-buton aliq-btn aliq-btn--primary" onclick="activateModal()">Kullanıcıyı Bildir</button>
<div id="kullanicisikayet">Şikayetler yöneticiye Facebook ile bildirildiğinden dolayı ilk olarak Facebook'a giriş yapmalısınız, eğer daha önce giriş yaptıysanız devam edebilirsiniz. 
<!-- Kod Dostu HTML Hata Bildir Kodu-->
<script>
var profilidm = '100000099206873'</script>

<a href="javascript:void(0);" onclick="window.open('http://www.facebook.com/dialog/send?app_id=120436181399321&name='+encodeURIComponent(document.title)+'&link='+encodeURIComponent(location.href)+'&redirect_uri=http://s9games.tr.gg/tesekkurler.htm&to='+profilidm, 'Arkadaşına Yolla','toolbar=no,width=850,height=400'); return false;" class="aliq-btn aliq-btn--flat bildir-btn">devam et</a>
<!-- Kod Dostu HTML Hata Bildir Kodu-->
</div>
<style>
div#kullanicisikayet{display:none}

div#aliq-overlay div {
    padding: 30px;
    font-family: arial;
    font-size: 13px;
    letter-spacing: 1px;
    box-shadow: 0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12), 0 5px 5px -3px rgba(0,0,0,0.2);
    border-bottom: 60px solid #e7e8e8;
    color: black;
    border-radius: 5px;
}
button.sikayet-buton {
    position: absolute;
    top: 698px;
    left: 50%;
    margin-left: -489px;
    height: 37px;
    z-index: 14;
}
a.aliq-btn.aliq-btn--flat.bildir-btn {
    position: absolute;
    margin:65px -258px;
    text-decoration: none;
    background: #405b7a;
    color: white;
}


</style>
<!---Kullanıcıyı bildir bitis--->
<style>
table.forumtabelle.psaltbolum {
    background: none;
    border: 0px solid;
width:100%;}
td.yorumlarbolumu {
    width: 598px;
    padding: 96px 5px 5px 349px;
}
td.forummesaj {
     position: absolute;
    font-size: 15px;
    top: 250px;
    color: #cbcbcb;
    left: 50%;
    margin-left: -275px;
}
td.forummesaj:after {
    content: "";
    position: absolute;
    width: 1px;
    height: 30px;
    background: #222325;
    right: -21px;
    top: 2px;
}
td.forummesaj:before {
    content: " FORUM MESAJI";
display: block;
    -webkit-margin-before: 1.33em;
    -webkit-margin-after: 1.33em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
    text-transform: uppercase;
    left: 50%;
    margin: 0;
    color: #90949c;
    font-size: 11px;
       line-height: 20px;
    margin-top: 1px;
    letter-spacing: 0.6px;
    font-family: arial;
}
td.mesajorani {
    position: absolute;
    font-size: 15px;
    top: 250px;
    color: #cbcbcb;
    left: 50%;
    margin-left: -157px;
}
td.mesajorani:before {
    content: "TüM MESAJLARA ORANI";
   display: block;
    -webkit-margin-before: 1.33em;
    -webkit-margin-after: 1.33em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    font-weight: bold;
    text-transform: uppercase;
    left: 50%;
    margin: 0;
    color: #90949c;
    font-size: 11px;
       line-height: 20px;
    margin-top: 1px;
    letter-spacing: 0.6px;
    font-family: arial;
}
#templatemo_wrapper {
    width: 1020px;
    margin-top: -52px;
}
</style>