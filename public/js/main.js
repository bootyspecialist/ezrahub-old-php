document.addEventListener('DOMContentLoaded', function() {

	//Formatting buttons for threads and replies
	var formattingbuttons = document.getElementsByClassName('formatting-button');
	function insertTextAtCursor(el, text) {
	    var val = el.value, endIndex, range, doc = el.ownerDocument;
	    if (typeof el.selectionStart == "number"
	            && typeof el.selectionEnd == "number") {
	        endIndex = el.selectionEnd;
	        el.value = val.slice(0, endIndex) + text + val.slice(endIndex);
	        el.selectionStart = el.selectionEnd = endIndex + text.length;
	    } else if (doc.selection != "undefined" && doc.selection.createRange) {
	        el.focus();
	        range = doc.selection.createRange();
	        range.collapse(false);
	        range.text = text;
	        range.select();
	    }
	}
	for(var i = 0; i < formattingbuttons.length; i++){
    	formattingbuttons[i].addEventListener('click', function() {
    		var action = this.getAttribute('data-action');
    		var textarea = document.querySelector('.bbcode-textarea');
    		switch (action) {
	            case "bold":
	                insertTextAtCursor(textarea, '[b]bolded text[/b]');
	                break;
	            case "italic":
	                insertTextAtCursor(textarea, '[i]italicized text[/i]');
	                break;
	            case 'link':
	                insertTextAtCursor(textarea, '[url]http://google.com[/url]');
	                break;
	            case 'image':
	                insertTextAtCursor(textarea, '[img]catpicture.jpg[/img]');
	                break;
	            case 'youtube':
	                insertTextAtCursor(textarea, '[youtube]fI_xuFA18m4[/youtube]');
	                break;
	            case 'quote':
	                insertTextAtCursor(textarea, '[quote]quoted text[/quote]');
	                break;
	            case 'strikethrough':
	                insertTextAtCursor(textarea, '[s]spoiler text[/s]');
	                break;
	        }
    	}, false);
    }

    //Nope button
    if (document.querySelector('#nope')) {
    	var nopebutton = document.querySelector('#nope');
	    nopebutton.addEventListener('click', function() {
	    	if (this.classList.contains('selected')) {
	    		this.className = '';
	    	} else {
	    		this.className += 'selected';
	    	}
	    }, false);
    }

}, false);
