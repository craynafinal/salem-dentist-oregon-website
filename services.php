<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_services.png';
	$bannerClass = 'miniBanner';
	
	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));
	
	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideServiceMenu(), $arrBanner),sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'Procedures and Servicies';
		
		$paragraphTop = 'Rose City Dental offers an array of services, please choose from the menu below or on the left.
						<br/><br/>';
						
		$paragraphBottom = 'Call or visit Salem Dentist of Oregon today to learn more about our services.
							We&rsquo;re happy to help you set appointments and decide which procedures are
							right for you! Our office is suitable for the whole family&minus;from children
							as young as 3 to older adults. Our office hours complement your busy schedule,
							and we accommodate Saturday appointments. We also offer same-day emergency dental
							in Salem for those unexpected situations that can take you by surprise.
							New patients are welcome, so call us today!';
		
		$arrLandingBanner = array(	'sources/imgs/graphic_landing_cleaning.png',
									'sources/imgs/graphic_landing_cosmetic.png',
									'sources/imgs/graphic_landing_peridontal.png',
									'sources/imgs/graphic_landing_restoration.png');
									
		$arrLandingBannerLink = array(	"$_SERVER[PHP_SELF]?mainPage=services_cleaning",
										"$_SERVER[PHP_SELF]?mainPage=services_cosmetic",
										"$_SERVER[PHP_SELF]?mainPage=services_peridontal",
										"$_SERVER[PHP_SELF]?mainPage=services_restoration");
		
		$arrLandingTitle = array(	'Cleaning & Prevention',
									'Cosmetic Procedures',
									'Peridontal Disease',
									'Restoration');
				
		$arrMax = sizeof($arrLandingBanner);
		
		$paragraphTop .= "<table style='width: 100%;'>";
		
		for($index = 0; $index < $arrMax; $index ++)
		{
			$check = $index % 4;
			
			if($check == 0)
				$paragraphTop .= '<tr>';
			
			$paragraphTop .=	"<td style='font-size: 14px; font-family: Arial; font-weight: bold; text-align: center;'>
									<a href='$arrLandingBannerLink[$index]' class='serviceMenu'><img src='$arrLandingBanner[$index]' style='margin-bottom: 5px;'/>
									<br/>
									$arrLandingTitle[$index]</a>
								</td>";
								
			if($check == 3)
				$paragraphTop .= '<tr/>';
		}
		
		$paragraphTop .= '</table>';
		
		$arrServices = array (	'Cleanings',
								'Routine Exams',
								'Flouride Treatment',
								'Sealants',
								'Nightguards',
								'Mouthguards',
								'X-rays',
								'Fillings',
								'Porcelain Crowns',
								'Bonding',
								'Bridges',
								'Partial Dentures',
								'Dentures',
								'Root Canals',
								'Implants');
								
		$arrMax = sizeof($arrServices);
		
		$paragraphTop .= 	"<hr class='gray'>
							<strong>Some of our services and procedures include:</strong>
							<br/><br/>
							<table style='width: 100%;'>";
		
		for($index = 0; $index < $arrMax; $index ++)
		{
			$count = $index % 4;
			
			if(($count) == 0)
				$paragraphTop .= "<tr style='height: 50px;'>";
			
			$paragraphTop .= "<td style='width: 27px; padding-bottom: 10px;'>"
							.squareIcon($index + 1, 'greenIcon')
							."</td>
							<td style='width: 135px;'>
								<div class='black14'>
									$arrServices[$index]
								</div>
							</td>";
			if(($count) == 3)
				$paragraphTop .= '</tr>';	
		}	
		
		$paragraphTop .= '	</table>'
							.$paragraphBottom;
		
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop($paragraphTop);
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle('');
		$pageContent->setArrTxt('');
		$pageContent->setArrSize(0);
		$pageContent->setGoToTop(false);
		
		return $pageContent;
	}
?>