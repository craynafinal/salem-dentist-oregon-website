<?php
	include_once('googleAnalytics.php');
	
	$bannerPath = 'sources/imgs/graphic_mainBanner_newPatient.png';
	$bannerClass = 'miniBanner';

	$arrBanner = array (new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

   echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideTestimonial(), $arrBanner), sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'First Time Patient Information';
		
		$paragraphTop = 'It would be an honor to have you join our family of patients!<br/><br/>
						We are pleased to share that we have been serving the Southeast Portland area with family and pediatric dentistry for the past 13 years. We are proud to be your neighborhood dental care providers of quality with compassion. With the support of our patients we have been very blessed.<br/><br/>
						Please take a moment to print and fill out the following new patient forms, and bring them to your first visit:
						</br></br>';
		
		$pdfIcon = 'sources/imgs/icon_pdf.png';
		
		$arrForm_path = array (	'sources/pdfs/patientconsentform2013.pdf',
								'sources/pdfs/Medicalhistory.pdf');
		
		$arrForm_title = array ('Patient Consent Form',
								'Medical History Form');
		
		$arrForm_max = sizeof($arrForm_path);
		
		$paragraphTop .= "<div id='docBackground'>
							<table style='width: 100%'>";
		
		for($index = 0; $index < $arrForm_max; $index ++)
		{
			$indexCheck = $index % 2; 
			
			if($indexCheck == 0)
				$paragraphTop .= '<tr>';
			
			$paragraphTop .= "		<td style='width: 100px;'>
										<a href='$arrForm_path[$index]' target='_blank' class='docDownload'>
											<img src='$pdfIcon' style='margin-right: 10px;'>
										</a>
									</td>
									<td style='vertical-align: top;'>	
										$arrForm_title[$index]<br/>"
							.formBegins($arrForm_path[$index], 'POST', '_blank')
							.darkGreenBt('Download')
							.formEnds()
							.'
								</td>';
					
			if ($indexCheck != 0)
				$paragraphTop .= '</tr>';			
		}
		
		$paragraphTop .= '</table></div>';
		
		$arrSubTitles = array ('Coupons');
		
		$arrCoupon = couponContent().openPopup();
		
		$arrTxt = array ($arrCoupon);
		
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop($paragraphTop);
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubTitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(sizeof($arrSubTitles));
		$pageContent->setGoToTop(false);
		
		return $pageContent;
	}
?>