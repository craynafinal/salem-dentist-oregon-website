<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_intro2.png';
	$bannerClass = 'mainBanner';
	
	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

	$mainBannerLink = "$_SERVER[PHP_SELF]?mainPage=newPatients";

	echo "<a href='$mainBannerLink'>"
		.mainBanner($bannerPath, $bannerClass)
		.'</a>'
		.greenInfoBar()
		.contentPageLayout(sideLeft(sideTestimonial(), $arrBanner), sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'Welcome to Salem Dentist of Oregon!';
		
		$paragraphTop = 'Welcome to Salem Dentist of Oregon&minus;your high quality Salem dentist
						office here to serve your family. With our great customer service and expert
						dental work, you and your family won&rsquo;t ever have to dread going to
						see the dentist again! We are happy to offer the pediatric dentistry
						Salem families trust, putting brighter smiles on all our patients&rsquo;
						faces. Our full range of services includes:
						<br/><br/>';
		
		$paragraphBottom = 'Call or visit Salem Dentist of Oregon today to learn more about our services.
							We&rsquo;re happy to help you set appointments and decide which procedures are
							right for you! Our office is suitable for the whole family&minus;from children
							as young as 3 to older adults. Our office hours complement your busy schedule,
							and we accommodate Saturday appointments. We also offer same-day emergency dental
							in Salem for those unexpected situations that can take you by surprise.
							New patients are welcome, so call us today!';
		
		$arrServices = array (	'<strong>Routine cleanings</strong>, <strong>x-rays</strong> and <strong>oral exams</strong> to keep your teeth healthy. We recommend a visit at least once every six months!',
								'<strong>Sedation dentistry</strong>&minus;We offer oral sedation before appointments to ease dental anxiety, when prescribed.',
								'<strong>Fluoride treatment</strong> and <strong>sealants</strong> to prevent any problems from developing or worsening.',
								'<strong>Night-guards</strong> and <strong>mouth-guards</strong> to keep teeth safe during heavy activity (like sports) and nightly teeth grinding&minus;We make custom fitted guards to protect you better!',
								'<strong>Fillings</strong>, <strong>root canals</strong> and <strong>all-porcelain crowns</strong> to treat cavities and decay, all performed by our expert dentists.',
								'<strong>Bonding</strong>, <strong>bridges</strong>, <strong>implants</strong> and <strong>partial dentures</strong> to restore the look and functionality of your teeth after decay or an accident&minus;We bring back your happy, healthy smile!');
								
		$arrMax = sizeof($arrServices);
		
		$paragraphTop .= '<table>';
		
		for($index = 0; $index < $arrMax; $index ++)
			$paragraphTop .= "<tr style='height: 50px;'>
								<td style='padding-bottom: 10px;'>"
							.squareIcon($index + 1, 'greenIcon')
								."</td>
								<td>
									<div class='black14'>
										$arrServices[$index]
									</div>
								</td>
							</tr>";
			
		
		$paragraphTop .= '</table><br/>'.$paragraphBottom;
		
		$arrSubTitles = array ('Coupons');
		$arrCoupon = couponContent().openPopup();
		$arrTxt = array ($arrCoupon);
		
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop($paragraphTop);
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubTitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(1);
		$pageContent->setGoToTop(false);
		
		return $pageContent;
	}

	// prints some extra information bar right under the banner, this is only used in the main page 
	function greenInfoBar()
	{
		$doctorImg = 'sources/imgs/graphic_portrait_drJLee.png';
		$doctorTitle = 'Meet Dr.John Lee';
		$doctorDesc = 'Dr. Lee is a graduate of the University of Texas Health Science Center at SanAntonio Dental School, class of 1998. Here in Salem, he has managed his private practice since then.';
		$doctorButton = 'Read More About Him';
		
		$officeImg = 'sources/imgs/graphic_location.png';
		$officeTitle = 'Visit Our Office';
		$officeDesc = OFFICE_ADDRESS;
		$officeButton = 'Get Directions';
		$mapLink = GOOGLE_MAP;
		
		// align problem
		$ret = "<div id='greenInfoBar'>"
				.dropShadow()
				."	<div id='greenInfoBar_wrapper'>
						<table>
							<tr>
								<td style='width: 120px; vertical-align: top;'>
									<img src='$doctorImg'/>
								</td>
								<td style='vertical-align: top; width: 420px; padding: 0px 10px 0px 10px;'>
									<div class='white16'>$doctorTitle</div>
									<hr class='white'>
									<div class='white12'>$doctorDesc</div>
				"
				// remove form and make it a tag link
				.formBegins("$_SERVER[PHP_SELF]?mainPage=aboutUs", 'POST', '')
				.darkGreenBt('Read More About Him')
				.formEnds()
				."	
								</td>
								<td>
									<img src='$officeImg'/>
								</td>
								<td style='vertical-align: top; padding-left: 10px;'>
									<div class='white16'>
										$officeTitle
										<hr class='white'>
										$officeDesc
									</div>
				"
				.formBegins($mapLink, 'POST', '_blank')
				.darkGreenBt('Get Directions')
				.formEnds()
				.'
								</td>
							</tr>
						</table>
					</div>
				</div>';
		
		return $ret;
	}
?>