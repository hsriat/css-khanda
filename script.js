window.onload = function() {

	/*view animated*/
	var elements = Array();
	var divs = document.getElementsByTagName('div')
	for (var i = 0; i < divs.length; i++) {
		if (divs[i].className == 'graphic' || divs[i].className == 'eraser') {
			var innerDivs = divs[i].getElementsByTagName('div');
			if (innerDivs.length > 0)
			for (var j = 0; j < innerDivs.length; j++)
			elements.push(innerDivs[j].id);
			else
			elements.push(divs[i].id);
		}
	}
	$('view_animated').onclick = function() {
		for (var i = 0; i < elements.length; i++) {
			$(elements[i]).style.display = 'none';
			window.setTimeout("highlightDiv('" + elements[i] + "')", 300 * (i + 1));
		}
		
	}
}
function highlightDiv(id) {
	$(id).style.display = 'block';
}
function $(id) {
	if (document.getElementById(id))
	return document.getElementById(id);
	return false;
}
