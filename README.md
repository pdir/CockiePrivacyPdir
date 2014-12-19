# Cockie Privacy pdir

## An Cookie Privacy Frontend Module for Contao Open Source CMS

- 4 themes available
- support for en and de

The module use the jQuery CookieBar Plugin http://www.primebox.co.uk/projects/jquery-cookiebar/

The Cookie Bar plugin creates a small bar at the top or bottom of the website with a short message about cookies and accept, decline, and privacy policy buttons.

## Disabling other Scripts
If a user chooses to disable cookies (If you give them that option), you need to make sure that scripts such as Google Analytics need to be disabled.
This can be done by wrapping the code in a simple if statement.

	if(jQuery.cookieBar('cookies')){
		//Google Analytics or other code here
	}