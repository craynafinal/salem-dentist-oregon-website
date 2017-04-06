<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_aboutUs.png';
	$bannerClass = 'miniBanner';
	
	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideTestimonial(), $arrBanner), sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'Why Salem Dentist of Oregon?';
		
		$paragraphTop = 'At Salem Dentist of Oregon, Dr. John Lee and Dr. Tae Lee
						are always here to take care of your immediate concerns, such as:
						toothaches, infections, root canals, extractions, etc.
						But we care about your overall oral health as well.
						Our goal is to first treat your emergency dental needs
						and second to have a long term plan for dental treatment
						which will last through your lifetime.
						<br/><br/>
						For your convenience, we are open Monday through Saturday with
						both Dr. John and Dr. Tae available on-call 24 hours a day,
						seven days a week. Whether your dental needs are minimal or require careful
						planning and a full smile makeover, we will design a treatment
						plan that meets your goals and stays within your budget.
						<br/>';
		
		$arrSubtitles = array (	'Meet the Doctors',
								'Meet the Staff');							
		
		$arrDoctorName = array ('John J. Lee, DDS',
								'Tae W. Lee, DDS');
		
		$arrDoctorPics = array ('sources/imgs/graphic_portrait_drJLee.png',
								'sources/imgs/graphic_portrait_drTLee.png');
		
		$arrDoctorTxt = array ('Dr. John Lee is a graduate of the University of Texas
								Health Science Center at San Antonio, class of 1998.
								He has been practicing dentistry here in his Salem,
								Oregon private dental office since then.<br/><br/>
								Dr. John Lee and his wife, Han, enjoy going to movies,
								traveling, and spending time with their two sons.
								Dr. John Lee takes great pride in his practice and
								truly considers his team members at Salem Dentist of Oregon
								and his patients a part of his family.<br/>',
								
								'Dr. Tae Lee is a graduate of the University of California
								School of Dentistry in San Francisco, class of 2006. He is
								the brother of Dr. John Lee and co-owner of Salem Dentist of Oregon.
								<br/><br/>
								Dr. Tae Lee and his wife, Junko, enjoy traveling the world,
								and spending time with their pets. Dr. Tae also enjoys wine
								and riding his Harley. He is hardworking and truly cares
								about his patients and staff.');
		
		$arrDoctorMax = sizeof($arrDoctorName);
		
		$doctorSection = '<table>';
		
		for ($index = 0; $index < $arrDoctorMax; $index ++)
		{
			$doctorSection .= "<tr>
									<td class='alignTop'>
										<img src='$arrDoctorPics[$index]'/>
									</td>			
									<td class='alignTop' style='padding-left: 10px;'>
										<strong>$arrDoctorName[$index]</strong>
										<br/>
										<div class='black12'>$arrDoctorTxt[$index]<br/><br/></div>						
									</td>
								</tr>";
		}
		
		$doctorSection .= '</table>';
		
		$arrTxt = array ($doctorSection,
						"The staff at Salem Dentist of Oregon consists of
						the front office staff, dental assistants, and
						hygienists. We are a multi-language practice speaking
						English, Spanish, Russian, and Korean.
						We love our patients, doctors and work environment.
						Both Dr. John and Dr. Tae are caring, kind, and compassionate
						dentists, which shines through in the way they treat their
						patients and staff, and the quality of work they do.");
		
							
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop($paragraphTop);
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubtitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(sizeof($arrSubtitles));
		$pageContent->setGoToTop(false);
		
		return $pageContent;
	}
?>