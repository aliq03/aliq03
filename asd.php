<br/>
<!-----------------g-gonderi paylas basla----------->
<div id='tikla-gonderi-ac'>Bizimle bir şeyler paylaş ! <div class="gggg-profil-resmi"></div></div>

<div class="g-gonderi-content" style="display:none;"><div id="tikla-gonderi-kapat">kapat</div>
<form action="https://aliq03.tr.gg/linklist.htm" method="post" name="post">
  <div class="profil-resmi-gonderen"></div>
<input class="g-gonderen-isim" placeholder="İsmin" value="" type="text" name="modulenter[titel]" >
<input class="url-link1a" type="text" name="modulenter[url]" style="width:200px" value="aliq.tr.gg">
<input class="editor-default-value g-gonderi-basligi" id="editor-textarea" value="Baslik">
<div class="center">
    <textarea id="kommentartext" name="modulenter[text]" type="text" class="getcontent">
    </textarea>
  </div>
<div class="center">
<div class="gonderi-numarasi-1"></div>
<input class="sai btttttn "type="submit" value="Gönder" onclick="editor_append()">
<input type="hidden" name="mode" value="addlink">
  </div>
</form>

<!---basla--->
<div class="g-gonderi-yazisi-editor">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <div class="toolbar">
  
<button class="tool-items fa fa-underline"  onclick="document.execCommand('underline', false, '');">
    </button>

    <button class="tool-items fa fa-italic" onclick="document.execCommand('italic', false, '');">
    </button>


    <button class="tool-items fa fa-bold" onclick="document.execCommand('bold', false, '');">
    </button>

  <button class="tool-items fa buyult" data-toggle="dropdown" onclick="if(document.execCommand('increaseFontSize', false, null) == false) {addHTML('big')}"><strong>A+</strong><i class="glyphicon glyphicon-arrow-up"></i></button>
  
<button class="tool-items fa kucult" data-toggle="dropdown" onclick="if(document.execCommand('decreaseFontSize', false, null) == false) {addHTML('small')}"><strong>A-</strong><i class="glyphicon glyphicon-arrow-down"></i></button>

    <button class="tool-items fa fa-link" onclick="link()">
    </button>

    <button class="tool-items fa fa-scissors" onclick="document.execCommand('cut',false,'')"></button>


    <button class="tool-items fa fa-file-image-o" onclick="image()"></button>





    <button class="tool-items fa fa-undo" onclick="document.execCommand('undo',false,'')"></button>

    <button class="tool-items fa fa-repeat" onclick="document.execCommand('redo',false,'')"></button>

    <button class="tool-items fa fa-tint" onclick="changeColor()"></button>

    <button class="tool-items fa fa-strikethrough" onclick="document.execCommand('strikeThrough',false,'')"></button>

    <button class="tool-items fa fa-trash" onclick="document.execCommand('delete',false,'')"></button>


    <button class="tool-items fa fa-clone" onclick="copy()"></button>




    <!-- Jutify -->

    <button class="tool-items fa fa-align-center" onclick="document.execCommand('justifyCenter',false,'')"></button>


    <button class="tool-items fa fa-align-left" onclick="document.execCommand('justifyLeft',false,'')"></button>
    <button class="tool-items fa fa-align-right" onclick="document.execCommand('justifyRight',false,'')"></button>
     <ul class="pButon">
             <li><a href="#" class="tool-items fa ol-list " data-obj='{"name":"InsertOrderedList", "arg":"newOL"}'></a></li>
	     <li><a href="#" class="tool-items fa ul-list" data-obj='{"name":"InsertUnorderedList", "arg":"newUL"}'></a></li></ul>

     <a  class="tool-items fa silbastan" onClick="document.getElementById('editor').innerHTML='<br>'"><strong>temizle</strong></a>
  </div>

  <div class="center">
    <div id="editor" class="editor pEditor" contentEditable=true data-text="Bir şeyler yaz...">
      Bir şeyler yaz...
    </div>
  </div>


<style>
[contentEditable=true]:empty:not(:focus):before{
        content:attr(data-text);
        cursor: text;
    }
.toolbar {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(20px,30px));
    color: rgb(0, 0, 0);
    grid-gap: 2px;
    justify-content: left;
    align-items: center;
    margin-left: -20px;
    margin-right: -20px;
    margin-bottom: -15px;
    background: #EEEEEE;
    padding: 10px;
    padding-left: 13px;
    
}
a.tool-items.silbastan {
    width: max-content;
    cursor: pointer;
    color: #2b2b2b;
}
button.tool-items.fa.buyult, button.tool-items.fa.kucult {
    font-size: 19px;
    margin-top: 0px;
    color: #2b2b2b;
    padding-top: 3px;
}
.tool-items{
     background-color: transparent;
    padding: 6px;
    cursor: pointer;
    color: #2b2b2b;
    border: 0;
}
.tool-items:hover{
    box-shadow: none;
    background-color: #d0cdcd;

}


.editor{
    width: 615px;
    min-height: 120px;
    margin: 48px 26px 15px 15px;
    font-size: 1.2rem;
    overflow-y: auto;
    font-size: 1rem;
    letter-spacing: -0.2px;
    text-align: left;
    font-family: 'IBM Plex Serif',serif;
    word-break: break-word;
    font-weight: 400;
    line-height: 1.5;
    color: #23242b;
}
.editor img {
    max-width: 585px;
    margin: 15px;
}
.editor:focus {
    outline: 0;
}
.getcontent{
    white-space: pre;
    width: 80vw;
    background-color: rgb(255, 255, 255);
    overflow: auto;
    padding: 1rem;
    display: none;
    visibility: hidden;
    margin-top: 1rem;
    box-shadow: .1rem .1rem .5rem rgb(255, 255, 255);
    border: 1px solid rgb(0, 0, 0);
}


input.url-link1a {
    display: none;
}
.sai.btttttn {
    padding: .5rem;
    background-color: #09bf6b;
    margin-right: 1rem;
    color: #fffffc;
    letter-spacing: .1rem;
    font-size: 1rem;
    border-radius: 35px;
    cursor: pointer;
    outline: none;
    transition: all .3s;
    border: 0;
    position: absolute;
    margin: 18px 540px;
}

.sai.btttttn:hover{
     background-color: #27a56c;
    border-color: #27a56c;
}
.sai.btttttn:focus{
  box-shadow: 0 0 0 0.2rem rgba(40,167,69,.5);
}
ul.pButon {
    display: contents;
    list-style-type: none;
}
a.tool-items.fa.ol-list, a.tool-items.fa.ul-list {
    color: #2b2b2b;
}
a.tool-items.fa.ol-list:before {
    content:"\f0cb";
}
a.tool-items.fa.ul-list:before {
    content:"\f0ca";
}

</style>
<script>
var btttttn = document.querySelector(".sai");
var getText = document.querySelector(".getText");
var content = document.querySelector(".getcontent");
var editorContent = document.querySelector(".editor");

btttttn.addEventListener("click", function() {
  var s = editorContent.innerHTML;
  content.style.display = "block";
  content.textContent = s;
});

getText.addEventListener("click", function() {
  const old = editorContent.textContent;
  content.style.display = "block";
  content.textContent = old;
});

function link() {
  var url = prompt("Linki buraya yapistirin");
  document.execCommand("createLink", false, url);
}

function copy() {
  document.execCommand("copy", false, "");
}

function changeColor() {
  var color = prompt("Renk kodu giriniz");
  document.execCommand("foreColor", false, color);
}


function getImage() {
  var file = document.querySelector("input[type=file]").files[0];

  var reader = new FileReader();

  let dataURI;

  reader.addEventListener(
    "load",
    function() {
      dataURI = reader.result;

      const img = document.createElement("img");
      img.src = dataURI;
      editorContent.appendChild(img);
    },
    false
  );

  if (file) {
    console.log("s");
    reader.readAsDataURL(file);
  }
}

function printMe() {
  if (confirm("Check your Content before print")) {
    const body = document.body;
    let s = body.innerHTML;
    body.textContent = editorContent.innerHTML;

    document.execCommandShowHelp;
    body.style.whiteSpace = "pre";
    window.print();
    location.reload();
  }
}

</script>
</div>
<!---bitis--->
</div>


<style>
.g-gonderi-content {
    width: 648px;
    height: auto;
    background: white;
    padding: 20px;
    margin-left: 13px;
}
.profil-resmi-gonderen {
    position: absolute;
    width: 40px;
    height: 40px;
    background: url(https://img.webme.com/pic/a/aliq03/5gd3dsa4.png);
    background-size: 40px;
    border-radius: 50%;
    margin: 15px;
}
input.g-gonderi-basligi {
    position: absolute;
    margin: 66px 17px;
    width: 600px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 1.375rem;
    font-weight: bold;
    border: 0;
    color: #525252;
}
input.g-gonderi-basligi:focus {
    outline: none;
}
input.g-gonderen-isim {
    position: absolute;
    margin: 25px 66px;
    width: 250px;
    border: 0;
    color: #23242b;
    font-size: .9rem;
    font-weight: 700;
    line-height: 1.3;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
}
input.g-gonderen-isim:focus {
    outline: none;
}
.g-gonderi-yazisi-editor {
    margin-top:110px;
}

div#tikla-gonderi-kapat {
    position: absolute;
    margin: -50px 618px;
    cursor: pointer;
    color: #545454;
}
div#tikla-gonderi-ac {
    width: 516px;
    background: white;
    padding: 30px 86px;
    cursor: pointer;
    font-size: 1.13rem;
    letter-spacing: -0.2px;
    text-align: left;
    font-family: 'IBM Plex Serif',serif;
    word-break: break-word;
    font-weight: 400;
    line-height: 1.5;
    color: #717171;
    margin-left: 13px;
}
.gggg-profil-resmi {
    position: absolute;
    width: 45px;
    height: 45px;
    background: url(https://img.webme.com/pic/a/aliq03/5gd3dsa4.png);
    background-size: 45px;
    border-radius: 50%;
    margin: -36px -60px;
}

.editor::-webkit-scrollbar {width:0px;}
</style>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"> 
</script>
<script>
$(function(){
$('#tikla-gonderi-ac').click(function(e){
$('.g-gonderi-content').show();
});
$('#tikla-gonderi-kapat').click(function(e){
$('.g-gonderi-content').hide();
});
$('#tikla-gonderi-ac').click(function(e){
$('#tikla-gonderi-ac').hide();
});
$('#tikla-gonderi-kapat').click(function(e){
$('#tikla-gonderi-ac').show();
});
})
</script>
<!--basla-->
<script>
var textarea1=document.querySelector('div.editor');

textarea1.addEventListener('keydown', autosize);
             
function autosize(){
  var el1 = this;
  setTimeout(function(){
    el1.style.cssText = 'height:auto; padding:0';
    // for box-sizing other than "content-box" use:
    // el1.style.cssText = '-moz-box-sizing:content-box';
    el1.style.cssText = 'height:' + el1.scrollHeight + 'px';
  },0);
}
</script>
<!--bitis-->
<!---image upload basla--->
<!-- Latest compiled and minified CSS -->


<script class="cssdeck" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script>
function addHTML(tag) {
var selection = window.getSelection();
var range = selection.getRangeAt(0);
var strong = document.createElement(tag);
range.surroundContents(strong);
$("#editor").focus()
};var index;
var a = ["a", "b", "c"];
for (index = 0; index < a.length; ++index) {
    console.log(a[index]);
}
function image() {
  var url=prompt("Resim linkini yapistirin");
  document.execCommand('insertImage', false, url)
}
$(document).on('keyup',function(){$('#res').text($('#editor').html())})
$(document).on('click',function(){$('#res').text($('#editor').html())})
$(".panel-default .panel-heading .btn-group .btn").on('click',function(){$('#res').text($('#editor').html())})
</script>
<!---image upload bitis--->
	<script type="text/javascript" src="https://www.prototurk.com/demo/142/scripts/wysiwyg.js?v=1"></script>
	<script language="javascript">
$('.editor-default-value').each(function() {
    var default_value = this.value;
    $(this).focus(function() {
        if(this.value == default_value) {
            this.value = '';
        }
    });
    $(this).blur(function() {
        if(this.value == '') {
            this.value = default_value;
        }
    });
});
function editor_append() {
$('#editor').prepend( "::::::::::::" );
    $('#editor').prepend($('#editor-textarea').val());
$('#editor').prepend( "::::::::::::" );
}
</script>
<script>
$(document).ready(function(){
$("div.gonderi-numarasi-1").load( "https://aliq03.tr.gg/linklist.htm input[name='email']" );
});
</script>
<!-----------------g-gonderi paylas bitis----------->






  
  
<div class="baslik-blog-post">SON GÖNDERİLER</div>
<!--yan menu sabitleme-->
<script>
$(function () {
   
  var msie6 = $.browser == 'msie' && $.browser.version < 7;
   
  if (!msie6 && $('.leftsidebar').offset()!=null) {
    var top = $('.leftsidebar').offset().top - parseFloat($('.leftsidebar').css('margin-top').replace(/auto/, 0));
    var height = $('.leftsidebar').height();
    var winHeight = $(window).height(); 
    var footerTop = $('#templatemo_footer').offset().top - parseFloat($('#templatemo_footer').css('margin-top').replace(/auto/, 0));
    var gap = 950;
    $(window).scroll(function (event) {
      // what the y position of the scroll is
      var y = $(this).scrollTop();
       
      // whether that's below the form
      if (y+winHeight >= top+ height+gap && y+winHeight<=footerTop) {
        // if so, ad the fixed class
        $('.leftsidebar').addClass('leftsidebarfixed').css('top',winHeight-height-gap +'px');
      } 
      else if (y+winHeight>footerTop) {
        // if so, ad the fixed class
       $('.leftsidebar').addClass('leftsidebarfixed').css('top',footerTop-height-y-gap+'px');
      } 
      else    
      {
        // otherwise remove it
        $('.leftsidebar').removeClass('leftsidebarfixed').css('top','0px');
      }
    });
  }  
});
</script>
<!--yan menu sabitleme bit-->
<script>
$(document).ready(function(){
$("table[style='color:;width:100%;']").attr('class','haberblok');
$("table[style='color:;width:100%;'] > tbody > tr:first-child  b").attr('class','baslik');

$("table[style='color:;width:100%;'] > tbody > tr:first-child  div").attr('class','gonderen');
$("table[style='color:;width:100%;'] > tbody > tr:first-child  div").prepend('<a class="gonderen-profil" href="http://aliq03.tr.gg/forum/profile-1.htm">aliq03</a>');
$("table[style='color:;width:100%;'] > tbody > tr:first-child  div span.localtime").attr('class','gonderi-tarihi');
$("td[width='100%'][style='color:;']").attr('class','haber-icerik');
$("td[width='100%'][style='color:;']").append($( ".yorumyaz" ));
$("center").append('<div class="yorumeklekapa"></div>');
$("table[style='color:;width:100%;'] tr:nth-child(2) table[width='100%'] tr:nth-child(2) table[width='100%'][align='center']").attr('class','yorum-alani');
$("table[style='color:;width:100%;'] tr:nth-child(2) table[width='100%'] tr:nth-child(2) table[width='100%'][align='center'] table[width='100%']").attr('class','yorumlar');


$("table td[width='33%'][align='left'] a").attr('class','sol acikk');
$("table td[width='33%'][align='left'] p").attr('class','sol kapalii');
$("table td[width='33%'][align='center'] a").attr('class','orta acikk');
$("table td[width='33%'][align='center'] b").attr('class','orta kapalii');
$("table td[width='33%'][align='right'] a").attr('class','sag acikk');
$("table td[width='33%'][align='right'] p").attr('class','sag kapalii');
$(".orta.acikk").attr('class','orta acikk aliq-btn aliq-btn--flat');
$(".sag.acikk").attr('class','sag acikk aliq-btn aliq-btn--flat');
$(".sol.acikk").attr('class','sol acikk aliq-btn aliq-btn--flat');

$("img[src='//wtheme.webme.com/img/profile/default.png'] ").attr('src','https://img.webme.com/pic/a/aliq/bedavasitemyorumlogo.png');
$("form[method='POST'] tr:nth-child(2) td:nth-child(2) a img ").attr('class','kullanici-img');
$("form[method='POST'] tr:nth-child(2) td:nth-child(2) a:nth-child(3)").attr('class','kullanici-adi');
$( ".kullanici-img" ).clone().appendTo( ".kullanici-yorum-resmi" );
$(".leftsidebar").append ($( ".sidebaryan0" ));

$("div[style='font-size:10px;'] ").attr('style','');
});
</script>
<script type="text/javascript">
$( document ).ready(function() {
$("table.haberblok:nth-of-type(1)").attr('id', 'blok1');
$("table.haberblok:nth-of-type(2)").attr('id', 'blok2'); 
$("table.haberblok:nth-of-type(3)").attr('id', 'blok3'); 
$("table.haberblok:nth-of-type(4)").attr('id', 'blok4'); 
$("table.haberblok:nth-of-type(5)").attr('id', 'blok5'); 
$("table.haberblok:nth-of-type(6)").attr('id', 'blok6');
$(".yorumlar1").attr('id', 'yyorum1');

$("#blok1 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok1yorum');
$("#blok2 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok2yorum'); 
$("#blok3 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok3yorum'); 
$("#blok4 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok4yorum'); 
$("#blok5 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok5yorum'); 
$("#blok6 table[width='100%'] table[align='center'] table[width='100%']").attr('id', 'blok6yorum');
$("#blok1 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok1yorum');
$("#blok2 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok2yorum'); 
$("#blok3 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok3yorum'); 
$("#blok4 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok4yorum'); 
$("#blok5 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok5yorum'); 
$("#blok6 table[width='100%'] table[align='center'] table[width='100%']").attr('class', 'byorum bblok6yorum'); 
$("#blok1 table.yorum-alani").attr('id', 'yorumalani1');
$("#blok2 table.yorum-alani").attr('id', 'yorumalani2'); 
$("#blok3 table.yorum-alani").attr('id', 'yorumalani3'); 
$("#blok4 table.yorum-alani").attr('id', 'yorumalani4'); 
$("#blok5 table.yorum-alani").attr('id', 'yorumalani5'); 
$("#blok6 table.yorum-alani").attr('id', 'yorumalani6'); 
 
 $("table.haberblok:nth-of-type(1) a[name='comment']").load('http://aliq3.hol.es/blog/toogle1.php');
 $("table.haberblok:nth-of-type(2) a[name='comment']").load('http://aliq3.hol.es/blog/toogle2.php');
 $("table.haberblok:nth-of-type(3) a[name='comment']").load('http://aliq3.hol.es/blog/toogle3.php');
 $("table.haberblok:nth-of-type(4) a[name='comment']").load('http://aliq3.hol.es/blog/toogle4.php');
 $("table.haberblok:nth-of-type(5) a[name='comment']").load('http://aliq3.hol.es/blog/toogle5.php');
 $("table.haberblok:nth-of-type(6) a[name='comment']").load('http://aliq3.hol.es/blog/toogle6.php');

$("#blok1 .yorumekle").attr('id', 'yorumekle1');
$("#blok2 .yorumekle").attr('id', 'yorumekle2'); 
$("#blok3 .yorumekle").attr('id', 'yorumekle3'); 
$("#blok4 .yorumekle").attr('id', 'yorumekle4'); 
$("#blok5 .yorumekle").attr('id', 'yorumekle5'); 
$("#blok6 .yorumekle").attr('id', 'yorumekle6'); 

$("#yorumekle1").load('http://aliq3.hol.es/blog/yorumekle1.php');
$("#yorumekle2").load('http://aliq3.hol.es/blog/yorumekle2.php');
$("#yorumekle3").load('http://aliq3.hol.es/blog/yorumekle3.php');
$("#yorumekle4").load('http://aliq3.hol.es/blog/yorumekle4.php');
$("#yorumekle5").load('http://aliq3.hol.es/blog/yorumekle5.php');
$("#yorumekle6").load('http://aliq3.hol.es/blog/yorumekle6.php');

$("td[width='33%'][align='left']").attr('width', '15%');
$("td[width='33%'][align='right']").attr('width', '15%');
$("td[width='33%'][align='center']").attr('width', '55%');
$("td b font[color='red']").attr('color', 'redimsi');
$("font[color='red']").attr('id', 'hatamesaji');
$("font[color='red']").attr('color', '');

$("table.byorum tr:nth-child(1) td").attr('class', 'minimize');
$("table.byorum tr:nth-child(2) td:nth-child(2)").attr('class', 'minimize');
$("table.byorum tr:nth-child(1) td[align='right']").attr('class', '');

$("#hatamesaji").prepend( $( "#close-hatamesaji" ) );

});
</script>
<div class="yorumyaz"><div class="kullanici-yorum-resmi">resim</div><a class="yorumekle"><img src="http://img.webme.com/pic/a/aliq03/loadingfb.gif" width="15" /><a></div>
<style>
body {
    background-color: #E8EAF5;
} 
#templatemo_main {
   background-color: #E8EAF5;
}
font.hatamesaji {
    background: #8F0000!important;
    color: #fff!important;
    padding: 56px 10px;
    text-align: center;
    position: fixed;
    bottom: 0px;
    right: 0;
    left: 0;
    z-index: 99999999999999999999;
    height: initial;
    transition: all ease 0.4s;
    animation: initiate 350ms ease;
    line-height: 20px;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    font-family:'RobotoDraft',arial,sans-serif;}
.sayialmak {
    position: absolute;
    margin-top: -58px;
    left: 596px;
    font-size: 16px;
}
.sayialmak:before {
    content: "";
    position: absolute;
    margin: 5px -19px;
    width: 15px;
    height: 15px;
    background: url(https://img.webme.com/pic/a/aliq03/comment%2048px.png);
    background-size: 15px;
}

.kapatma-k-adi {
       position: absolute;
    width: 215px;
    height: 24px;
    background: #ffffff;
    margin: -25px 3px;
    z-index: 1;
    border-radius: 71px;
}

.byorum img[src*="https://img.webme.com/pic/a/aliq/tt"] {
    width: 16px;
    height: 16px;
vertical-align: -3px;
}
.yorumekle img {
    margin-top: 7px;
}
.yorumeklekapa {
    text-align: left;
    position: absolute;
    margin: -21px 0px;
    width: 230px;
    height: 25px;
    background: #eeeeee;
}

.select-x {
    position: absolute;
    visibility: hidden;
}
center form[method="POST"] {
    display:none;
}
:focus {outline:none}
.kommentartext::-webkit-scrollbar {
    width:5px;border-radius: 40px;
}
[data-tooltip]:before {background-color: #2f2f2f;}

.kommentartext::-webkit-scrollbar-track {
  background-color: rgba(255, 255, 255, 0.06);
  border-left: 1px solid #ccc;border-radius: 40px;
}
.kommentartext::-webkit-scrollbar-thumb {
    background-color: rgba(111, 111, 111, 0.56);
    border-radius: 40px;
    transition: 1s;
}
.kommentartext::-webkit-scrollbar-thumb:hover {
        background-color: rgb(56, 56, 56);
    border-radius: 40px;    transition: 1s;
}
div.bilgi111, div.bilgi222, div.bilgi333, div.bilgi444, div.bilgi555, div.bilgi666 {
    background: #ffffff;
    border-radius: 13px;
    border: 1px solid #dddddd;
    display: inline-block;
    cursor: pointer;
    color: #333333;
    font-family: arial;
    font-size: 14px;
    padding: 6px 5px;
    text-decoration: none;
    position: absolute;
    width: 107px;
    margin: -199px 419px;
    -webkit-box-shadow: 0px 0px 4px -1px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 4px -1px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 4px -1px rgba(0,0,0,0.75);
}
img.smilemenu {
    width: 26px;
    height: 26px;
    padding: 3px;
}
img.smilemenu:hover {
    background: #ececec;
    border-radius: 4px;
}
.smilemenudiv:After {
    position: absolute;
    bottom: -8px;
    left: 50%;
    margin-left: 25px;
    width: 0;
    border-top: 5px solid #000;
    border-top: 8px solid hsl(0, 0%, 100%);
    border-right: 8px solid transparent;
    border-left: 8px solid transparent;
    content: " ";
    font-size: 0;
    line-height: 0;
}
div#yazi111, div#yazi222, div#yazi333, div#yazi444, div#yazi555, div#yazi666 {
    position: absolute;
   margin-left: 502px;
    margin-top: 6px;
    background: url(https://img.webme.com/pic/a/aliq03/smile12.png) no-repeat;
    background-size: 20px;
    font-size: 0;
    width: 20px;
    height: 20px;
    cursor: pointer;
}
div#yazi111:hover, div#yazi222:hover, div#yazi333:hover, div#yazi444:hover, div#yazi555:hover, div#yazi666:hover {
    background: url(https://img.webme.com/pic/a/aliq03/smile12.png) no-repeat;
    background-size: 20px;
    background-position: 0px -22px;
}
input[type="submit"] {
    border: 1px solid #2C78CB;
    background: #EEF5FC;
    cursor: pointer;
    border-radius: 25px;
    color: #205c9c;
    font-weight: 500;
    font-family: roboto;
    text-transform: uppercase;
    margin-top: 2px;
    letter-spacing: 1px;
    padding: 5px 9px;
    position: absolute;
    margin: 12px 167px;
}
#bilgi a.kullanici-adi, #bilgi2 a.kullanici-adi, #bilgi3 a.kullanici-adi, #bilgi4 a.kullanici-adi, #bilgi5 a.kullanici-adi, #bilgi6 a.kullanici-adi {
    position: absolute;
    margin: 13.5px -206px;
    padding: 2px;
    border-radius: 3px;
    z-index: 2;
    color: #4e4f50;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 400;
    font-style: normal;
}
.kommentartext {
    width: 460px;
    height: 16px;
    resize: none;
    outline: none;
    margin-top: -5px;
    margin-left: 3px;
    padding: 14px;
    padding-bottom: 12px;
    margin-bottom: -5px;
    font-size: 14px;
    font-family: arial;
    border: 0px;
    background: #e8eaf5;
    border-radius: 14px;
}
.sol.kapalii {margin-left: 65px;}
.sol.acikk {margin-left:50px;}
.sag.acikk {margin-right:40px;}
.sag.kapalii {margin-right:68px;}

.orta.kapalii {
    color: #999999;
    padding: 13px;
}
.orta.acikk {
    padding: 0px 10px;
    margin: 6px -6px;
    font-weight: bold;
    height: 40px;
}
.kapalii, .acikk {
    font-family: 'RobotoDraft',arial,sans-serif;
    text-transform: uppercase;
    font-weight: bold;
text-decoration:none;
}

input.adinizne {
    width: 200px;
    margin-top: 10px;
    font-size: 12px;
    font-weight: normal;
    border-radius: 3px;
    padding: 5px;
    padding-left: 13px;
    background: white;
    border: 0px solid #dddfe2;
    border-radius: 22px;
}
.byorum tr:nth-child(2) td b font[color="redimsi"] {
   display:none}
.byorum tr:nth-child(2) td b font[color="green"] {
      display:none}
hr {
    display: none;
}
.kullanici-yorum-resmi {
    position: absolute;
    margin: -6px -51px;
    background: url(https://img.webme.com/pic/a/aliq03/5gd3dsa4.png);
    background-size:40px;
    font-size: 0;
    border-radius: 50%;
    width: 40px;
    height: 40px;
}
.kullanici-yorum-resmi img {
    width: 40px;
    height: 40px;
    margin-left: 0px;
    border-radius: 50%;
}
.baslik-blog-post {
    font-weight: 500;
    margin-left: 15px;
    font-size: 15px;
    color: #565656;
    margin: 15px 15px;
}
.yorumyaz {
    background: #ffffff;
    padding: 25px;
padding-bottom: 50px;
    border-top: 2px solid #eef0f5;
    margin: 50px -20.5px 37px 5px;
    padding-left: 72px;
    margin-bottom: 0px;
    width: 500px;
}
span.gonderi-tarihi {
    position: absolute;
    margin: 27px 77px;
    font-size: 11px;
    color: #424242;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-weight: 400;
    width: 160px;
    font-size: 0.8rem;
    line-height: 1.3;
}
a.gonderen-profil {
    text-decoration: none;
    color: #23242b;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    margin: 1px;
    margin-left: 78px;
    margin-top: 9px;
    position: absolute;
    letter-spacing: 0px;
    font-size: .9rem;
    font-weight: 700;
    line-height: 1.3;
}
b.baslik {
        position: absolute;
    margin: 87px 10px;
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    background: #ffffff;
    padding-bottom: 9px;
    padding-left: 40px;
    padding-right: 40px;
    width: 608px;
    border-right: 0px solid #d8d9da;
    border-left: 0px solid #d8d9da;
    font-size: 1.375rem;
    font-weight: bold;
    margin-bottom: 4px;
    word-break: break-word;
    color: #23242b;
}
.gonderen {
    font-size: 0px;
    font-weight: bold;
    padding-bottom: 49px;
    margin-left: 10px;
    width: 679px;
    background: #ffffff;
    margin-right: 0px;
    margin-top: -21px;
    padding-top: 23px;
    padding-bottom: 34px;
    padding-left: 9px;
    border: 0px solid #d8d9da;
}
.gonderen:before {
    content: "";
    width: 40px;
    height: 40px;
    background: url(http://profile.webme.com/profile/a/aliq/big.png);
    background-size: 100%;
    position: absolute;
    margin: 7px 29px;
    border-radius: 50%;
}
td.haber-icerik {
   background: #ffffff;
    padding: 30px 38px;
    padding-bottom: 0;
    color: #23242b;
    border: 0px solid #d9d8da;
    max-width: 609px;
    font-size: 1rem;
    letter-spacing: -0.2px;
    text-align: left;
    font-family: 'IBM Plex Serif',serif;
    word-break: break-word;
    font-weight: 400;
    line-height: 1.5;
}
.byorum tr td.minimize:nth-last-of-type(2) {
    display: none;
}
/*yorum*/

/**/
table[align="center"] table[width="100%"] td:first-child {
    color: red;
    font-size: 0px;
    padding-left: 6px;
    float: left;
}
table[width="100%"] b a[target="_blank"] {
    margin-top: -29px;
    position: absolute;
    margin-left: 102px;
    color: #4e4f50;
    font-size: 14px;
    text-decoration: none;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-weight: 600;
    font-style: normal;
    letter-spacing: 1px;
}
table[width="100%"] b a[target="_blank"] img {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    margin: 28px -51px;
}
table[align="center"] table[width="100%"] td:nth-child(2) {
     padding: 5px;
    margin-left: 96px;
    margin-top: -2px;
    float: left;
    letter-spacing: 0.5px;
    width: 532px;
    word-wrap: break-word;
    font-size: 1rem;
    font-family: 'IBM Plex Serif',serif;
    color: #212121;
    line-height: 1.5;
}

.byorum td[align="right"] span.localtime {
    font-size: 10px;
    font-style: normal;
    color: rgb(108, 108, 108);
    position: absolute;
    left:600px;
margin-top: 7px;
}
/*normal kullanıcı*/
table.yorum-alani {
      background: #ffffff;
    margin-top: -5px;
    padding-top: 0;
    margin-left: -1px;
    margin-right: -1px;
    padding-bottom: 12px;
    border: 1px solid #ffffff;
    border-top: 0px;
    display: block;
    width: 686px;
}
.yorum-alani .byorum:nth-of-type(1):before {
    content: "";
    position: absolute;
    margin: -30px 64px;
    width: 545px;
    height: 1px;
    background: #eef0f5;
}
table[width="100%"] tbody tr td[width="100%"] i {font-size:0}
table[width="100%"] tbody tr td[width="100%"] i b {
    color: #4e4f50;
    font-family: 'RobotoDraft',arial,sans-serif;
    font-size: 14px;
    position: initial;
    margin-left: -7px;
    font-style: normal;
    font-weight: 600;
    border: 0;
    letter-spacing: 1px;
}
table[width="100%"] tbody tr td[width="100%"] i b:before {
    content: "";
    position: absolute;
    margin-left: -51px;
    margin-top: 0px;
    background: url(https://img.webme.com/pic/a/aliq03/5gd3dsa4.png);
       background-size: 32px;
    border-radius: 50%;
    width: 32px;
    height: 32px;
}
table[align="center"] table[width="100%"] td[width="100%"] {
  padding: 5px 0px 5px 5px;
    margin-left: 103px;
    letter-spacing: 0.5px;
    width: 532px;
    word-wrap: break-word;
    font-size: 1rem;
    font-family: 'IBM Plex Serif',serif;
    color: #212121;
    line-height: 1.5;
}
table[width="100%"] tbody tr td[width="100%"] i .localtime {
    font-size: 10px;
    font-style: normal;
    color: rgb(108, 108, 108);
    position: absolute;
    left:600px;
}
.yorumtogglebutton {
       position: absolute;
    margin: -22px 58px;
}
.yorumtogglebutton button{
    background: transparent;
    background-size: 100%;
    font-size: 13px;
    border: 0;
    font-family: 'IBM Plex Serif',serif;
    color: #c0c1ca;
}
button.lm-button {
background: #d4d4d4;
    border: 0;
    color: #3b5998;
    cursor: pointer;
    margin: 6px 44px 12px 12px;
    padding: 9px;
    width: 661px;
}
button.lm-button:focus {
    outline: 1px solid #1668ff;
}
table#blok1yorum tr:nth-last-of-type(2) td.minimize {display:none}

/*yorum*/


</style>

<style>
.youtube {
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    display: inline-block;
    overflow: hidden;
    -webkit-transition: all 200ms ease-out;
    -moz-transition: all 200ms ease-out;
    -o-transition: all 200ms ease-out;
    transition: all 200ms ease-out;
    cursor: pointer;
width:608px;
 height:342px; 
   margin: 7px 0px;
margin-bottom: 20px;
}
.youtube .play {
      background: url("http://img.webme.com/pic/a/aliq/playsea1.png") no-repeat center center;
  background-size: 72px 72px;
    position: absolute;
    height: 100%;
    width: 100%;
    opacity: .8;
    filter: alpha(opacity=80);
    -webkit-transition: all 0.2s ease-out;
    -moz-transition: all 0.2s ease-out;
    -o-transition: all 0.2s ease-out;
    transition: all 0.2s ease-out;
}

.youtube .play:hover {
    opacity: 1;
  background: url("http://img.webme.com/pic/a/aliq/playsea2.png") no-repeat center center;
    filter: alpha(opacity=100);
}
.ytp-title {
    display: none;
}
table[width="100%"] td[style="color:;"] iframe[frameborder="0"] {
    width: 608px;
    height: 342px;
    margin: 7px 0px;
margin-bottom: 20px;
}
</style>
<script>
"use strict";
function r(f){/in/.test(document.readyState)?setTimeout('r('+f+')',9):f()}
r(function(){
    if(!document.getElementsByClassName) {
        // IE8 support
        var getElementsByClassName = function(node, classname) {
            var a = [];
            var re = new RegExp('(^| )'+classname+'( |$)');
            var els = node.getElementsByTagName("*");
            for(var i=0,j=els.length; i<j; i++)
                if(re.test(els[i].className))a.push(els[i]);
            return a;
        }
        var videos = getElementsByClassName(document.body,"youtube");
    }
    else {
        var videos = document.getElementsByClassName("youtube");
    }

    var nb_videos = videos.length;
    for (var i=0; i<nb_videos; i++) {
        // Based on the YouTube ID, we can easily find the thumbnail image
        videos[i].style.backgroundImage = 'url(http://i.ytimg.com/vi/' + videos[i].id + '/sddefault.jpg)';

        // Overlay the Play icon to make it look like a video player
        var play = document.createElement("div");
        play.setAttribute("class","play");
        videos[i].appendChild(play);

        videos[i].onkeypress = function(event) {
            // return key
            if (event.keyCode == 13) {
                document.getElementById(this.id).click();
            }
        }

        videos[i].onclick = function() {
            // Create an iFrame with autoplay set to true
            var iframe = document.createElement("iframe");
            var iframe_url = "https://www.youtube.com/embed/" + this.id + "?autoplay=1&autohide=1&rel=0&showinfo=0";
            if (this.getAttribute("data-params")) iframe_url+='&'+this.getAttribute("data-params");
            iframe.setAttribute("src",iframe_url);
            iframe.setAttribute("frameborder",'0');

            // The height and width of the iFrame should be the same as parent
            iframe.style.width  = this.style.width;
            iframe.style.height = this.style.height;

            // Replace the YouTube thumbnail with YouTube Player
            this.parentNode.replaceChild(iframe, this);
        }
    }
});

</script>

<script>
$(document).ready(function(){
$("img[src='//theme.webme.com/smiles/wink.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt16.png');
$("img[src='//theme.webme.com/smiles/smiley.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt2.png');

$("img[src='//theme.webme.com/smiles/cheesy.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt1.png');
$("img[src='//theme.webme.com/smiles/angry.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt13.png');

$("img[src='//theme.webme.com/smiles/sad.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt3.png');
$("img[src='//theme.webme.com/smiles/shocked.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt4.png');

$("img[src='//theme.webme.com/smiles/cool.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt7.png');
$("img[src='//theme.webme.com/smiles/huh.gif']").attr('src','https://img.webme.com/pic/a/aliq/ttt18.png');

$("img[src='//theme.webme.com/smiles/rolleyes.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt15.png');
$("img[src='//theme.webme.com/smiles/tongue.gif']").attr('src','https://img.webme.com/pic/a/aliq/tt9.png');
});
</script>
<a href="#" id="close-hatamesaji" class="aliq-btn">Mesajı Kapat</a>
<style>
#hatamesaji {
    display: none;
    width: 100%;
    height:100px;
    padding-top: 30px;
    position: fixed;
    background: #921010;
    color: white;
    text-align: center;
    bottom: 0;
    left: 0;
    z-index: 9999;
    line-height: 20px;
    letter-spacing: 0.6px;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
    -webkit-font-smoothing: antialiased;
    font-family: 'RobotoDraft',arial,sans-serif;
}

  #hatamesaji > p {
    margin: 0 0 10px 0;
    font-weight: bold;}
  
  #hatamesaji > p a {
    color: #332b17;
    text-decoration: none;}

#close-hatamesaji {display:none;}

font#hatamesaji #close-hatamesaji {
    display: inherit;
    position: absolute;
    margin: 4px;
    color: #921010;
    text-decoration: none;
    right: 10px;
    margin-top: -18px;
    font-size: 12px;
}

#hatamesaji.display {
display:block;
  /* Cross browser animation */
  -webkit-animation: hatamesaji 1s 1; /* Chrome, Safari 5+ */
     -moz-animation: hatamesaji 1s 1; /* Firefox 5-15 */
      -ms-animation: hatamesaji 1s 1; /* IE9 */
       -o-animation: hatamesaji 1s 1; /* Opera 12.00 */
          animation: hatamesaji 1s 1; /* Chrome, Firefox 16+, IE 10+, Opera 12.10+ */}

@keyframes hatamesaji {
  0%   {
    -webkit-transform: translate3d(0,100px,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,100px,0); /* Firefox */
        -ms-transform: translate3d(0,100px,0); /* IE9 */
         -o-transform: translate3d(0,100px,0); /* Opera */
            transform: translate3d(0,100px,0);
  }
  100% {
    -webkit-transform: translate3d(0,0,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,0,0); /* Firefox */
        -ms-transform: translate3d(0,0,0); /* IE9 */
         -o-transform: translate3d(0,0,0); /* Opera */
            transform: translate3d(0,0,0);
  }
}
@-webkit-keyframes hatamesaji {
  0%   {
    -webkit-transform: translate3d(0,100px,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,100px,0); /* Firefox */
        -ms-transform: translate3d(0,100px,0); /* IE9 */
         -o-transform: translate3d(0,100px,0); /* Opera */
            transform: translate3d(0,100px,0);
  }
  100% {
    -webkit-transform: translate3d(0,0,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,0,0); /* Firefox */
        -ms-transform: translate3d(0,0,0); /* IE9 */
         -o-transform: translate3d(0,0,0); /* Opera */
            transform: translate3d(0,0,0);
  }
}
@-moz-keyframes hatamesaji {
  0%   {
    -webkit-transform: translate3d(0,100px,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,100px,0); /* Firefox */
        -ms-transform: translate3d(0,100px,0); /* IE9 */
         -o-transform: translate3d(0,100px,0); /* Opera */
            transform: translate3d(0,100px,0);
  }
  100% {
    -webkit-transform: translate3d(0,0,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,0,0); /* Firefox */
        -ms-transform: translate3d(0,0,0); /* IE9 */
         -o-transform: translate3d(0,0,0); /* Opera */
            transform: translate3d(0,0,0);
  }
}
@-o-keyframes hatamesaji {
  0%   {
    -webkit-transform: translate3d(0,100px,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,100px,0); /* Firefox */
        -ms-transform: translate3d(0,100px,0); /* IE9 */
         -o-transform: translate3d(0,100px,0); /* Opera */
            transform: translate3d(0,100px,0);
  }
  100% {
    -webkit-transform: translate3d(0,0,0); /* Safari & Chrome */
       -moz-transform: translate3d(0,0,0); /* Firefox */
        -ms-transform: translate3d(0,0,0); /* IE9 */
         -o-transform: translate3d(0,0,0); /* Opera */
            transform: translate3d(0,0,0);
  }
}

.close-hatamesaji {
  -webkit-transition: all 0.2s ease-out;
     -moz-transition: all 0.2s ease-out;
      -ms-transition: all 0.2s ease-out;
       -o-transition: all 0.2s ease-out;
          transition: all 0.2s ease-out;
  
  -webkit-transform: translate3d(0,130px,0); /* Safari & Chrome */
     -moz-transform: translate3d(0,130px,0); /* Firefox */
      -ms-transform: translate3d(0,130px,0); /* IE9 */
       -o-transform: translate3d(0,130px,0); /* Opera */
          transform: translate3d(0,130px,0);
}

</style>
<script>
/* hatamesaji */
$(document).ready(function(){
  $("#hatamesaji").addClass("display");
   $("#close-hatamesaji").click(function(){ 
    event.preventDefault();
    $("#hatamesaji").addClass("close-hatamesaji");
  });
});
</script>

<script>
jQuery(function(){

    var minimized_elements = $(td.minimize');
    
    minimized_elements.each(function(){    
        var t = $(this).text();        
        if(t.length < 445) return;
        
        $(this).html(
            t.slice(0,445)+'<span>... </span><a href="#" class="more">More</a>'+
            '<span style="display:none;">'+ t.slice(445,t.length)+' <a href="#" class="less">Less</a></span>'
        );
        
    }); 
    
    $('a.more', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).hide().prev().hide();
        $(this).next().show();        
    });
    
    $('a.less', minimized_elements).click(function(event){
        event.preventDefault();
        $(this).parent().hide().prev().show().prev().show();    
    });

});
</script>
<div class="sidebar_section sidebar_section_bg sidebaryan0">
               <a href="http://aliq03.tr.gg/abonelik.htm" class="abone-ol">Abone Ol</a><div>Blogda ki son paylaşımlardan haberdar ol!</div>
			</div>
<style>
.sidebaryan0 div {
    font-family: roboto;
    font-size: 15px;
     padding: 16px;
    color: #6f7173;}

.sidebaryan0 {text-align:center; padding:23px 5px 12px 5px;}
</style>
<!----duzeltme go----->
<style>
.yorumyaz {display:none}
td.haber-icerik .yorumyaz {display: flex;}

table[style='color:;width:100%;'] {
    height: 300px;
    margin-bottom: 63px;
}
table[style='color:;width:100%;']:before {
    content: "";
    background: url(https://img.webme.com/pic/a/aliq03/facebook-load.gif);
    position: absolute;
    width: 704px;
    height: 346px;
    border: 1px solid #d8d9da;
    background-size: 1148px 539px;
    background-position: -221px -11px;
}
#content .haberblok {
height: auto;
    margin-bottom: inherit;
    margin-top: -20px;
}
.haberblok:before {
    display: none;
}
.sidebaryan0 {display:none}
#templatemo_sidebar .sidebaryan0 {display:block}
</style>
<!----duzeltme finish----->

<script type="text/javascript">
$( document ).ready(function() {
$("#yorumalani3 #blok3yorum + table#blok3yorum") .append(<style>.lm-blok3yorum {display:none;}</style>);
});
</script>
<script>
$('input.OPP-choice-button').wrap('<div class="radio-btn"><i></i></div>');
$(".radio-btn").on('click', function () {
    var _this = $(this),
        block = _this.parent().parent();
    block.find('input:radio').attr('checked', false);
    block.find(".radio-btn").removeClass('checkedRadio');
    _this.addClass('checkedRadio');
    _this.find('input:radio').attr('checked', true);
});
$('input[name="check-box"]').wrap('<div class="check-box"><i></i></div>');
$.fn.toggleCheckbox = function () {
    this.attr('checked', !this.attr('checked'));
}
$('.check-box').on('click', function () {
    $(this).find(':checkbox').toggleCheckbox();
    $(this).toggleClass('checkedBox');
});
</script>
<style>
/*Custom radio button*/
 .radio-btn {
    width: 20px;
    height: 20px;
    display: inline-block;
    float: left;
    margin: 3px 7px 0 0;
    cursor: pointer;
    position: relative;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 1px solid #ccc;
    box-shadow: 0 0 1px #ccc;
    background: rgb(255, 255, 255);
    background: -moz-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, rgba(255, 255, 255, 1)), color-stop(47%, rgba(246, 246, 246, 1)), color-stop(100%, rgba(237, 237, 237, 1)));
    background: -webkit-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -o-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: -ms-linear-gradient(top, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(246, 246, 246, 1) 47%, rgba(237, 237, 237, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed', GradientType=0);
}
.checkedRadio {
    -moz-box-shadow: inset 0 0 5px 1px #ccc;
    -webkit-box-shadow: inset 0 0 5px 1px #ccc;
    box-shadow: inset 0 0 5px 1px #ccc;
}
.radio-btn i {
    border: 1px solid #E1E2E4;
    width: 10px;
    height: 10px;
    position: absolute;
    left: 4px;
    top: 4px;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
}
.checkedRadio i {
    background-color: #898A8C; 
}
</style>
