<?php
header("Access-Control-Allow-Origin: *");
?>
<style>
.profilkismi a:nth-child(2),
.profilkismi a:nth-child(3),
.profilkismi a:nth-child(4),
.profilkismi a:nth-child(5),
.profilkismi a:nth-child(6) {display:none}
</style>
<style>
.selectBox select {
    background-color: #ffffff;
    background-image: url(http://img.webme.com/pic/a/aliq03/select-arrow.jpg);
    background-position: right -15px;
    background-repeat: no-repeat;
    background-size: 30px 120px;
    padding-right: 40px;
    border: 1px solid #d4dbe3;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    padding-top: 6px;
    padding-bottom: 6px;
    padding-left: 6px;
    font-size: 12px;
    line-height: 18px;
    color: #4e4e4e;
    min-height: 18px;
    width: 95px;
}

 
.selectBox select:hover { cursor: pointer; }

.selectBox select:focus {  
    outline: none;
    border-color: darken(#d4dbe3, 10%);
    background-position: right -75px;
}

option { background: #fff!important; }

.deneme { width: 960px; margin: 0 auto; }
#helpbox { display: none; }
#forumtext { 
    width: 958px!important; 
	border: 1px solid #d1d1d1;
	border-top: none;
	max-width: 960px; 
    min-height: 150px; 
	padding: 5px 10px;
	font-size: 15px;
	box-sizing: border-box;
	color: #333;
}

#forumtext:focus { outline: none; }


.forumEntry {
    width: 958px;
    margin: -7px -13px;
}
.entrySmiley {
    float: left;
    line-height: 60px;
    padding: 10px;
    margin-top: -8px;
}
.entrySmiley a[href="#smileicon"] {
    padding: 0.1px;
}
.entryAbout {
    float: left;
	line-height: 40px;
}

.entryAbout input {
    border: 1px solid #d1d1d1;
    height: 24px!important;
    width: 350px!important;
    margin-top: -3px;
    position: absolute;
    padding: 5px 10px!important;
    font-size: 15px!important;
}

.entryAbout input:focus { outline: none; }

.entryPanel {
    border: 1px solid #d1d1d1;
	height:65px;
	background: #eee;
	padding: 8px 10px;
	box-sizing: border-box;
}

.entryFooter {
    border: 1px solid #d1d1d1;
	height: 48px;
	border-top: none;
	margin-top: -4px;
	background: #eee;
	padding: 4px 12px 0 0;
	box-sizing: border-box;
	border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
}

div[style="padding-left:130px;"] input[type="submit"] {
    display:none;
}
form[name="post"] {
    margin:58px 1px;
    padding: 10px;
    border-top: 2px solid #D1D1D1;
    border-radius: 2px;
    background: transparent;
    height: auto;
}
.panelL { 
    float: right;
    height: 30px;
	padding: 5px 5px;
	box-sizing: border-box;    
position: relative;

}

.yaziKarakteri.panelL {
    font-size: 17px;
    padding: 3px;
    margin-top: 2px;
}
.yaziKarakteri.panelL span {
    padding: 5px 9px 5px 9px;
}

.addBoxes span:first-child, .addDocument span:first-child { margin-right: -5px; border-top-left-radius: 5px; border-bottom-left-radius: 5px; }
.addBoxes span:last-child, .addDocument span:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; }
.addDocument span:nth-child(2) { margin-right: -5px; }

.yaziKarakteri span, .addBoxes span, .addDocument span { padding: 6px 11px 5px 11px; border: 1px solid #d1d1d1; background: #fff; color: #333; }
.yaziKarakteri span:hover, .addBoxes span:hover, .addDocument span:hover { cursor: pointer; }
.yaziKarakteri span:first-child { border-top-left-radius: 5px; border-bottom-left-radius: 5px; font-weight: bold; }
.yaziKarakteri span:last-child { border-top-right-radius: 5px; border-bottom-right-radius: 5px; text-decoration: underline;}
.yaziKarakteri span:nth-child(2) { margin: 0 -5px; font-style: italic; }

.addBoxes span, .addDocument span { padding-top: 8px;    font-family: roboto; }

.entrySend{ 
    background: #eee; 
	border: 1px solid #1976D2; 
	height: 46px; 
	width: 100px; 
	margin: -7px -18px 0 10px; 
	background: #1976D2;
	color: #fff;
	font-size: 14px;
	    width: 70px;
}

.entrySend:hover { cursor: pointer; }

.entrySmiley { float: left; line-height: 60px; padding: 10px; }
.entrySmiley img { margin-left: 4px; }



form[action*="cat-"] .yaziKarakteri.panelL {
    margin-top: 11px;}
form[action*="cat-"] .addBoxes.panelL ,
form[action*="cat-"] .addDocument.panelL {
    margin-top: 9px;
}



form[action*='edit'] div.aliq-textfield, form[action*="topic"] div.aliq-textfield {
    display: none;
}
form[action*="topic"] .entryAbout:before {
    content: url(http://img.webme.com/pic/g/gofrette/entryAbout.png);
    margin: -3px -5px;
    position: absolute;
}
form[action*='edit'] .forumEntry .entryPanel, form[action*="topic"] .forumEntry .entryPanel {
    height: 48px;
}

button.aliq-btn {
    width: 77px;
    padding: 1px;
    font-family: roboto;
    margin: -1.6px -5px;
    background: transparent;
}
div.aliq-textfield {
    position: absolute;
    width: 500px;
}
div.aliq-textfield--float-label > label {
    color:rgb(156, 156, 156);
    font-family: roboto;
}
div.aliq-textfield > input:focus, .aliq-textfield > textarea:focus {
    border-color: #59abe3;
}
</style>





<div class="forumEntry">


    <div class="entryPanel">
    <div class="entryAbout">
          <div class="aliq-textfield aliq-textfield--float-label">
    <input name="modulenter[titel]" maxlength="75" type="text">
    <label>Konu başlığı</label>
  </div></div>
	
        <div class="yaziKarakteri panelL">
            
            <span data-tooltip="Kalın Yazı" title="Bu taglar arasındaki kelimeler kalın gösterilir." name="addbbcode0" onclick="bbstyle(0)">B</span>
            <span data-tooltip="Yatay Yazı" title="Bu taglar arasındaki kelimeler yatay gösterilir." name="addbbcode2" onclick="bbstyle(2)">I</span>
            <span data-tooltip="Altı Çizgili Yazı" title="Bu taglar arasındaki kelimeler altı çizili gösterilir." name="addbbcode4" onclick="bbstyle(4)">U</span>
        </div>

        <div class="addBoxes panelL">
            <span data-tooltip="Alıntı Yap" name="addbbcode6" onclick="bbstyle(6)"><img src="http://img.webme.com/pic/a/aliq03/entry_quote.png" alt="Quote" width="16" height="12" /></span>
            <span data-tooltip="Kod ekle" name="addbbcode6" onclick="bbstyle(8)"><img src="http://img.webme.com/pic/a/aliq03/entry_code.png" alt="Code" width="16" height="16" />&nbsp;</span>
        </div>

        <div class="addDocument panelL">
           <span data-tooltip="Resim Ekle" id="vbcode_img" onclick="getvBcode(event, 'img');"><img src="http://img.webme.com/pic/a/aliq03/entry_image.png" alt="List" width="16" height="16" /></span>
            <span data-tooltip="Madde Ekle" title="Bu taglar arasına [*]madde1[*]madde2 şeklinde liste eklenmelidir." name="addbbcode6" onclick="bbstyle(10)"><img src="http://img.webme.com/pic/a/aliq03/entry_list.png" alt="List" width="16" height="16" /></span>
            <span data-tooltip="Bağlantı/URL Ekle" id="vbcode_urltag" onclick="getvBcode(event, 'urltag');"><img src="http://img.webme.com/pic/a/aliq03/entry_url.png" alt="URL" width="16" height="16" />&nbsp;</span>
        </div>

    </div>

    <div class="mesajAlani">
        <textarea name="modulenter[text]" id="forumtext"></textarea>
    </div>

    <div class="entryFooter">
        
		<div class="entrySmiley">
            <a href="#smileicon" onclick="javascript:addtext(':D ');"><img src="http://smilies.webme.com/smiles/icon_biggrin.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':) ');"><img src="http://smilies.webme.com/smiles/icon_smile.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':( ');"><img src="http://smilies.webme.com/smiles/icon_sad.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':o ');"><img src="http://smilies.webme.com/smiles/icon_surprised.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':shock: ');"><img src="http://smilies.webme.com/smiles/icon_eek.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':? ');"><img src="http://smilies.webme.com/smiles/icon_confused.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext('8) ');"><img src="http://smilies.webme.com/smiles/icon_cool.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':lol: ');"><img src="http://smilies.webme.com/smiles/icon_lol.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':x ');"><img src="http://smilies.webme.com/smiles/icon_mad.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':P ');"><img src="http://smilies.webme.com/smiles/icon_razz.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':cry: ');"><img src="http://smilies.webme.com/smiles/icon_cry.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':evil: ');"><img src="http://smilies.webme.com/smiles/icon_evil.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':twisted: ');"><img src="http://smilies.webme.com/smiles/icon_twisted.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':roll: ');"><img src="http://smilies.webme.com/smiles/icon_rolleyes.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':wink: ');"><img src="http://smilies.webme.com/smiles/icon_wink.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':!: ');"><img src="http://smilies.webme.com/smiles/icon_exclaim.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':?: ');"><img src="http://smilies.webme.com/smiles/icon_question.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':idea: ');"><img src="http://smilies.webme.com/smiles/icon_idea.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':arrow: ');"><img src="http://smilies.webme.com/smiles/icon_arrow.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':| ');"><img src="http://smilies.webme.com/smiles/icon_neutral.gif" width="20" height="20" border="0" alt=""></a><a href="#smileicon" onclick="javascript:addtext(':mrgreen: ');"><img src="http://smilies.webme.com/smiles/icon_mrgreen.gif" width="20" height="20" border="0" alt=""></a>
        </div>

        <div class="panelL">
            <button class="aliq-btn aliq-btn--flat">yolla</button>
        </div>

        <div class="selectBox panelL">
            <select name="addbbcode20" onchange="bbfontstyle('[size=' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + ']', '[/size]')" onmouseover="helpline('f')">
	            <option value="8">8px</option>
	            <option value="10">10px</option>
	            <option value="12">12px</option>
	            <option value="14">14px</option>
	            <option value="16" selected="">Normal</option>
	            <option value="18">18px</option>
	            <option value="20">20px</option>
	            <option value="22">22px</option>
	            <option value="20">24px</option>
            </select>
        </div>

        <div class="selectBox panelL">
            <select name="addbbcode18" onchange="bbfontstyle('[color=' + this.form.addbbcode18.options[this.form.addbbcode18.selectedIndex].value + ']', '[/color]');this.selectedIndex=0;" onmouseover="helpline('s')">
                <option style="color:black; background-color: #FAFAFA" value="#444444" selected="">Standart</option>
                <option style="color:darkred; background-color: #FAFAFA" value="darkred">Koyu kırmızı</option>
                <option style="color:red; background-color: #FAFAFA" value="red">kırmızı</option>
                <option style="color:orange; background-color: #FAFAFA" value="orange">Turuncu</option>
                <option style="color:brown; background-color: #FAFAFA" value="brown">Kahverengi</option>
                <option style="color:yellow; background-color: #FAFAFA" value="yellow">Sari</option>
                <option style="color:green; background-color: #FAFAFA" value="green">Yeşil</option>
                <option style="color:olive; background-color: #FAFAFA" value="olive">Zeytin</option>
                <option style="color:cyan; background-color: #FAFAFA" value="cyan">Cyan</option>
                <option style="color:blue; background-color: #FAFAFA" value="blue">Mavi</option>
                <option style="color:darkblue; background-color: #FAFAFA" value="darkblue">Koyu mavi</option>
                <option style="color:indigo; background-color: #FAFAFA" value="indigo">Indigo</option>
                <option style="color:violet; background-color: #FAFAFA" value="violet">Leylak</option>
                <option style="color:white; background-color: #FAFAFA" value="white">Beyaz</option>
                <option style="color:black; background-color: #FAFAFA" value="black">Siyah</option>
            </select>
        </div>

    </div>


</div>

 <!--sosyal ag paylas basla -->
<div class="sayfa-alt-sosyal-aglar forumEntry"><a class="gonderiyipaylas"> Gönderiyi Paylaş: </a>
                        <div style="padding:4px;"><!--facebook--><a data-tooltip="Facebook'ta Paylaş" target="_blank" onclick="window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href)+'&amp;t='+encodeURIComponent(document.title));return false;" href="http://www.facebook.com/" style="text-decoration:none;" rel="nofollow"><img src="https://img.webme.com/pic/a/aliq03/fb1.png" width="35" height="35" alt="facebookta paylaş" /></a>    <!--facebook-->     <!--twitter--><a data-tooltip="Twitter'da Paylaş" class="twitter-share-button" data-via="helperblogger" href="https://twitter.com/share" target="_blank"><img src="https://img.webme.com/pic/a/aliq03/tw1.png" width="35" height="35" alt="twitter'da paylaş" /></a>  <script> 
                ! 
                function (d, s, id) { 
                    var js, fjs = d.getElementsByTagName(s)[0]; 
                    if (!d.getElementById(id)) { 
                        js = d.createElement(s); 
                        js.id = id; 
                        js.src = &quot;//platform.twitter.com/widgets.js&quot;; 
                        fjs.parentNode.insertBefore(js, fjs); 
                    } 
                }(document, &quot;script&quot;, &quot;twitter-wjs&quot;); 
            
</script> <!--twitter-->    <!--gooogle--><a data-tooltip="Google+'da Paylaş" href="javascript:(&#10;                        function(){&#10;                        var w=480;var h=380;&#10;                        var x=Number((window.screen.width-w)/2);&#10;                        var y=Number((window.screen.height-h)/2);&#10;                        window.open('https://plus.google.com/share?url='+encodeURIComponent(location.href)+'&#10;                        &amp;title='+encodeURIComponent(document.title),'','width='+w+',height='+h+',left='+x+',top='+y    +',&#10;                        scrollbars=no');&#10;                        })();" style="background: url(/wp-content/themes/HTML5/images/googleplus.png) no-repeat  scroll left center transparent;"> <img src="https://img.webme.com/pic/a/aliq03/go1.png" width="35" height="35" alt="google'de paylaş" /></a><!--gooogle--></div>
                        <!--sosyal ag paylas bitis --></div>
                        </div>
                        <script>(function(){JSTR_AppToDiv()}())</script></div>
<style>
a.gonderiyipaylas { position: absolute; margin: 11px -139px; font-family: roboto; font-weight: 500; text-transform: uppercase; color: #58595a; }
.sayfa-alt-sosyal-aglar { position: absolute; margin: 25px 130px; }
.sayfa-alt-sosyal-aglar [data-tooltip]:before { margin-bottom: -58px; z-index: 2; background-color: hsl(0, 0%, 20%); width: 121px; }
.sayfa-alt-sosyal-aglar [data-tooltip]:after { margin-bottom: -28px; border-bottom: 5px solid hsla(0, 0%, 20%, 0.9); border-right: 5px solid transparent; border-left: 5px solid transparent; border-top: 0px; }
</style>
<!--sosyal ag paylas bitis-->