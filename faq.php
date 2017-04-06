<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_faq.png';
	$bannerClass = 'miniBanner';

	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideTestimonial(), $arrBanner), content());
		
	function content()
	{
		return "<iframe src='faqContent.php' class='faq' frameborder='0' scrolling='no' width='649px' height='100%'></iframe>";
	}
?>