<?php
	define('CSS_PATH', 'css/style.css');
	define('PHONE_NUM', '000-000-0000');
	define('OFFICE_ADDRESS', '0000 address city state 000000');
	define('EMAIL_ADDRESS', 'test@test.com');
	define('WEB_MAILER', 'webformmailer.php');
	define('WEB_MAIL_FORM_NAME', serialize (array ('First Name', 'Email', 'Last Name', 'Phone Number', 'Comment')));
	define('WEB_MAIL_FORM_VALUE', serialize (array ('firstName', 'email', 'lastName', 'phoneNumber', 'comment')));
	define('SPAM_CHECK', 'legalCheck');
	define('GOOGLE_MAP', "http://google.com");
	define('DESIGNER_EMAIL','test@test.com');
	define('CAPTCHA_SIZE', 6);
	
	define('BANNER_CARE_CREDIT_LINK', 'http://google.com');
	define('BANNER_CARE_CREDIT_IMG', 'sources/imgs/graphic_banner_careCredit.png');
	define('BANNER_CARE_CREDIT_TARGET', '_blank');
	define('BANNER_COUPON_LINK', "$_SERVER[PHP_SELF]?mainPage=newPatients");
	define('BANNER_COUPON_IMG', 'sources/imgs/graphic_banner_coupons.png');
	define('BANNER_COUPON_TARGET', '');
?>
