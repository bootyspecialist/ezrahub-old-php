document.addEventListener('DOMContentLoaded', function() {
	var formattingbuttons = document.getElementsByClassName('formatting-button');
	for(var i = 0; i < formattingbuttons.length; i++){
    	formattingbuttons[i].addEventListener('click', function() {
    		var action = this.getAttribute('data-action');
    		alert(action);
    	}, false);
    }
}, false);
