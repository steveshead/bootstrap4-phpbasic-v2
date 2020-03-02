# Bootstrap 4 - PHP Basic Template v2.0

This is a basic PHP template using Bootstrap 4 with a functional contact form and with the ability to change the SCSS defaults. View the [demo](https://devtestweb.com/phpbasic-v2/) site [here](https://devtestweb.com/phpbasic-v2/).

### Active Menu
The PHP code in the file 'includes/a_config.php' will highlight the menu link for the current page.  If you add more pages you will need to add an entry to that file.

```html
<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/about.php":
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "About Us";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Welcome to my homepage!";
	}
?>
```

### Contact form
The contact form will need some edits for it to work for you. Instead of using reCaptcha I have used a hidden field, though I'm not sure how much longer that will work as a workaround.

* Replace 'steve@steve-shead.com' on line 8 of assets/contact/contact.php and line 11 of assets/contact/sendmail.php with the email address you want the messages from the contact form sent to.
* You can change the 'subject' for the message on line 12 of assets/contact/contact.php and line 20 of assets/contact/sendmail.php.
* You can edit the messages pushed to the form after submission in assets/contact/sendmail.php.
* The javascript for the contact form is in the file assets/js/scripts.js - you should not need to change that.
* You can edit the styles in the file assets/css/contact.css. These styles will relate to the code in assets/js/scripts.js file.

### Replace the favicons
Create your custom favicon [here](https://www.favicon-generator.org/).  Then with the code generated replace the code below in your index.html, and replace the favicon images in assets/img/favicon with yours.

```html
<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
<link rel="manifest" href="assets/img/favicons/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
```

View the <a href="https://steveshead.github.io/bootstrap4-elements-v2/">demo</a> site <a href="https://steveshead.github.io/bootstrap4-element-v2/">here</a>.

---------------------------------------------------------
### Edit the SCSS Defaults
I have been searching the web for a 'kitchen sink' document of all Bootstrap 4 elements, but could never find one.  I found some UI kits out there and have borrowed the elements pages to create this.

When I create a UI kit from this, I create an SCSS folder inside the assets folder and create a file called custom.scss.  Using Atom I compile that file to the assets/css/custom.css and replace bootstrap.css in the head section of my index.html with custom.css.  Note that bootstrap.scss has to be imported at the bottom of the custom.scss file for this to work.

Here are some examples of overriding Bootstrap (using custom.scss).

```scss
// override bootstrap default theme colors
$theme-colors: (
  "primary": #375a7f,
  "secondary": #444,
  "success": #00bc8c,
  "info": #3498DB,
  "warning": #F39C12,
  "danger": #E74C3C,
);

// increase the default spacing
$spacer:1.25rem;

// adjust the default heading font weight
$headings-font-weight:300;

// adjust the default font weights
$font-weight-light:200;
$font-weight-normal:300;
$font-weight-bold:500;

// adjust the default font size
$font-size-base:1.2rem;

// add more spacers
$spacer: 1rem !default;
$spacers: (
    6: ($spacer * 4),
    7: ($spacer * 5),
    8: ($spacer * 7.50),
    9: ($spacer * 10)
  );

// set the button border radius
$btn-border-radius:2px;

// change the hyperlink color
$link-color: #00bc8c;

// remove underline from hyperlinks
$link-hover-decoration: none;


// Core bootstrap scss import - this should always be at the bottom of the custom.scss file
@import '../../bootstrap/scss/bootstrap';
```
You can view the current color scheme [here](https://devtestweb.com/phpbasic-v2/custom.php)

View the [demo](https://devtestweb.com/phpbasic-v2/) site [here](https://devtestweb.com/phpbasic-v2/).
