<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_contactUs.png';
	$bannerClass = 'miniBanner';

	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));
						
	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideGoogleMap(), $arrBanner), content());
		
	function content()
	{
		$welcomeMsg = 'Contact Us';
		$iconPath = 'sources/imgs/icon_check_60.png';
		$subtitle = 'Thank you for contacting us!';
		
		$txt = 'Our customer representative will get back to you within 24 hours.
				<br/>
				If you have any questions, please feel free to call us at 503-391-8920.';
		
		$ret = 	"<div id='mainArticleRight_wrapper'>
					<div class='green20'>$welcomeMsg</div>
					<table style='margin: 0px auto 0px auto; margin-top: 50px;'>
						<tr>
							<td style='width: 80px;'>
								<img src='$iconPath'/>
							</td>
							<td>
								<div class='ltGreen16'>
									$subtitle
								</div>
								$txt<br/>"
				.formBegins("$_SERVER[PHP_SELF]?mainPage=main", 'POST', '')
				.darkGreenBt('Go to Main Page')
				.formEnds()
					.'		</td>
						</tr>
					</table>
				</div>';
		
		return $ret;
	}
?>