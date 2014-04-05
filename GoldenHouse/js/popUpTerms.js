/**
 * JAVASCRIPT function to pop up window for terms and conditions. 
	It's called in onclick event handler in second element of the footer (Termas and Conditions)
	from: http://www.quirksmode.org/js/popup.html
 */

function popUpTerms(url) 
{
	newwindow = window.open(url,'Terms','height=450,width=700,screenX=500,screenY=250,scrollbars=yes,status=yes,resizable=yes');
	if (window.focus) 
		{newwindow.focus();}
	return false;
}
