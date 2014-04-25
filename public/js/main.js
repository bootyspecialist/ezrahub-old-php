document.addEventListener('DOMContentLoaded', function() {

	//Formatting buttons for threads and replies
	var formattingbuttons = document.querySelectorAll('.formatting-button');
	for(var i = 0; i < formattingbuttons.length; i++){
    	formattingbuttons[i].addEventListener('click', function() {
    		var action = this.getAttribute('data-action');
    		alert(action);
    		// switch (action) {
	     //        case "bold":
	     //            wrapText(textarea, "[b]", "[/b]", "", "bolded text");
	     //            break;
	     //        case "italic":
	     //            wrapText(textarea, "[i]", "[/i]", "", "italicized text");
	     //            break;
	     //        case 'link':
	     //            wrapText(textarea, "[url]", "[/url]", "", "link url");
	     //            break;
	     //        case 'image':
	     //            wrapText(textarea, "[img]", "[/img]", "", "image url");
	     //            break;
	     //        case 'youtube':
	     //            wrapText(textarea, "[youtube]", "[/youtube]", "", "unique video id");
	     //            break;
	     //        case 'quote':
	     //            wrapText(textarea, "[quote]", "[/quote]", "", "quoted text");
	     //            break;
	     //        case 'strikethrough':
	     //            wrapText(textarea, "[s]", "[/s]", "", "spoiler text");
	     //            break;
	     //    }
    	}, false);
    }
}, false);
