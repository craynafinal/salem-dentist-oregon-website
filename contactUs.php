<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_contactUs.png';
	$bannerClass = 'miniBanner';
	
	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideGoogleMap(), $arrBanner), sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'Contact Us';
				
		$arrSubtitles = array (	'Give Us a Call Today',
								'Questions? Send Us Messages');
		
		// make a variable for input fields
		$inputFields = 	formBegins('contactUs_ok.php', 'POST', '');
		
		$arrInputName = unserialize(WEB_MAIL_FORM_NAME);
		$arrInputValue = unserialize(WEB_MAIL_FORM_VALUE);
		
		$arrMax = sizeof($arrInputName) - 1;
		
		$commentName = $arrInputName[$arrMax];
		$commentValue = $arrInputValue[$arrMax];
		
		for ($index = 0; $index < $arrMax; $index ++)
		{
			$inputFields .= "<label for='$arrInputValue[$index]'>$arrInputName[$index]:&nbsp;</label>
			 				<input type='text' name='$arrInputValue[$index]' maxlength='30' class='txtfield'>";
								
			if(($index % 2) != 0)
				$inputFields .= '</br>';
		}
		
		$redirect = "$_SERVER[PHP_SELF]?mainPage=contactUs_thankyou";
		$captchaSize = CAPTCHA_SIZE;
		
		$inputFields .= "<label for='$commentValue'>$commentName:&nbsp;</label>
						<textarea name='$commentValue' maxlength='3000' class='emailComment'></textarea>
						<input type='hidden' name='subject' value='Form Submission'/>
						<input type='hidden' name='redirect' value='$redirect' />
						<br/>
						<label for'captchaimg'>Validation:&nbsp</label>
						<img src='captcha.php?rand=".rand()."' id='captchaimg' style='margin-bottom: -20px;'>
						<input type='text' name='captcha' size='$captchaSize' maxlength='$captchaSize' class='captcha'>
						<a href='javascript: refreshCaptcha();' class='normalLink'>Refresh Captcha</a>
						<div style='float: right;'>"
						.darkGreenBt('Submit Your Message')
						.'</div>'
						.formEnds();
					
		$arrTxt = array (	"<div class='black22'><strong>".PHONE_NUM."</strong></div><div class='black12'>Monday-Friday 8:00 AM-5:30 PM and Saturday 8:30 AM-3:00 PM.<br/>*Evening appointments available upon request</div>",
							$inputFields);
							
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop('');
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubtitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(sizeof($arrSubtitles));
		$pageContent->setGoToTop(false);
		
		return $pageContent;
	}
?>
<script type='text/javascript'>
function refreshCaptcha()
{
var img = document.images['captchaimg'];
img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>