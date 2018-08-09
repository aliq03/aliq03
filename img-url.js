
    /**
 * @fileoverview The power behind Quick Quote. Mostly C&Ped from old quick quote for testing
 *               and demonstration purposes.
 */

// Insert BBcode tags into our message box, maintaining cursor/selection position in a variery of situations
// Params: (string) tag to insert, (bool) maintain selection after insertion,
//			(string) text to insert tags around, (string) tag option string (i.e. [url=(OPTION)])
function insertTags(tag, saveSel, inner, tagEquals)
{
	var msgBox = document.getElementById("forumtext");
	if (msgBox && tag)
	{
		var tagOpen;
		var tagClose;
		if (tagEquals)
		{
			tagOpen = "[" + tag + "=" + tagEquals + "]";
		}
		else
		{
			tagOpen = "[" + tag + "]";
		}
		tagClose = "[/" + tag + "]";
		
		var selStart = msgBox.selectionStart;
		var selEnd = msgBox.selectionEnd;

		if (tag === "*") { // special case for [*] tags which should to be inside a [list]
			if (msgBox.value.indexOf("[list]") === -1 || msgBox.value.indexOf("[list]") > selStart)
			{
				tagOpen = "[list]\n" + tagOpen;
			}
			if (msgBox.value.indexOf("[/list]") < selEnd)
			{
				tagClose = "\n[/list]";
			} else {
				tagClose = '';
			}
		}

		msgBox.focus();
		if (inner)
		{
			let insert = tagOpen + inner + tagClose;
			msgBox.value = msgBox.value.substring(0, selStart) + insert + msgBox.value.substring(selEnd);
			if (saveSel)
			{
				msgBox.setSelectionRange(selStart + tagOpen.length, selStart + tagOpen.length + inner.length);
			}
			else
			{
				msgBox.setSelectionRange(selStart + insert.length, selStart + insert.length);
			}
		}
		else
		{
			msgBox.value = msgBox.value.substring(0, selStart) + tagOpen + tagClose + msgBox.value.substring(selEnd);
			msgBox.setSelectionRange(selStart + tagOpen.length, selStart + tagOpen.length);
		}
		//doPreview();
	}
}

function getvBcode(event, command) {
	var str = null;
	
	var theBox = document.getElementById("forumtext");
	var oPosition = theBox.scrollTop;
	var oHeight = theBox.scrollHeight;

	var startPos = theBox.selectionStart;
	var endPos = theBox.selectionEnd;
	str = theBox.value.substring(startPos, endPos);

	var nHeight = theBox.scrollHeight - oHeight;
	theBox.scrollTop = oPosition + nHeight;

	var saveSel = event.ctrlKey;
	
	switch(command) {
		case "img":
			if (str.match(/^(http:\/\/)|(https:\/\/)/i))
			{
				insertTags("img", saveSel, str);
			} else {
				var imageurl = prompt('Resim URL sini buraya giriniz.', '');
				if (imageurl)
				{
					insertTags("img", saveSel, imageurl);
				}
			}
			break;
		
		case "urltag":
			if (str.match(/^(http:\/\/)|(https:\/\/)/i))
			{
				insertTags("url", saveSel, str);
			} else {
				var url = prompt('Baglanti adresini buraya giriniz.', '');
				if (url)
				{
					insertTags("url", saveSel, url);
				}
			}
			break;

		case "video":
			insertTags("video", saveSel, str);
			break;

		case "bold":
			insertTags("b", saveSel, str);
			break;

		case "code":
			insertTags("code", saveSel, str);
			break;

		case "quote":
			insertTags("quote", saveSel, str);
			break;

		case "italic":
			insertTags("i", saveSel, str);
			break;

		case "underline":
			insertTags("u", saveSel, str);
			break;

		case "strike":
			insertTags("s", saveSel, str);
			break;

		case "sub":
			insertTags("sub", saveSel, str);
			break;

		case "super":
			insertTags("super", saveSel, str);
			break;

		case "spoiler":
			insertTags("spoiler", saveSel, str);
			break;

		case "fixed":
			insertTags("fixed", saveSel, str);
			break;

		case "listitem":
			insertTags("*", saveSel, str);
			break;

		default : alert("vBcode error! No menu option selected.");
	}
}

function togglePreview(doupdatepreview)
{
	if (document.getElementById("preview").checked)
		document.getElementById("quickReplyPreview").removeAttribute('hidden');
	else
		document.getElementById("quickReplyPreview").setAttribute('hidden', 'true');

	//Prefs.setPref('quickQuoteLivePreview', document.getElementById("preview").checked);

	window.sizeToContent();
	if (doupdatepreview === true)
		doPreview();
}
