<?php
	define('CSS_PATH', 'css/style.css');
	define('PHONE_NUM', '503-391-8920');
	define('OFFICE_ADDRESS', '436 Lancaster Dr NE Salem, OR 97301');
	define('EMAIL_ADDRESS', 'jlee101894@hotmail.com');
	define('WEB_MAILER', 'webformmailer.php');
	define('WEB_MAIL_FORM_NAME', serialize (array ('First Name', 'Email', 'Last Name', 'Phone Number', 'Comment')));
	define('WEB_MAIL_FORM_VALUE', serialize (array ('firstName', 'email', 'lastName', 'phoneNumber', 'comment')));
	define('SPAM_CHECK', 'legalCheck');
	define('GOOGLE_MAP', "https://maps.google.com/maps?q=436+Lancaster+Dr+NE+Salem,+OR+97301&amp;ie=UTF8&amp;hq=&amp;hnear=436+Lancaster+Dr+NE,+Salem,+Oregon+97301&amp;gl=us&amp;t=m&amp;ll=44.934426,-122.983103&amp;spn=0.018836,0.026522&amp;z=14&amp;iwloc=A&amp;source=embed' class='normalLink");
	define('DESIGNER_EMAIL','crayna@naver.com');
	define('CAPTCHA_SIZE', 6);
	
	define('BANNER_CARE_CREDIT_LINK', 'http://www.carecredit.com/apply/confirm.html?light=1&encm=B2YGP1w%2BUjdXa1A0VmIOZ1VvVjJXMFJsUj9VbQZiADA%3D');
	define('BANNER_CARE_CREDIT_IMG', 'sources/imgs/graphic_banner_careCredit.png');
	define('BANNER_CARE_CREDIT_TARGET', '_blank');
	define('BANNER_COUPON_LINK', "$_SERVER[PHP_SELF]?mainPage=newPatients");
	define('BANNER_COUPON_IMG', 'sources/imgs/graphic_banner_coupons.png');
	define('BANNER_COUPON_TARGET', '');
?>
