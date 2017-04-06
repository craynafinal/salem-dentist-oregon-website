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
		$welcomeMsg = 'Cleaning & Prevention';
		
		$paragraphTop = 'Salem Dentist of Oregon takes your dental health seriously.
						We know that the care of your gums and teeth is a partnership between us.
						Neither of us can be successful without the work of the other.
						<br/><br/>
						Our responsibility is to do the best dentistry that is possible for you.
						Your responsibility is to keep your check up and cleaning appointments to
						make sure that your gums and teeth remain healthy after we finish your dental care.
						<br/><br/>
						Studies show that oral health is linked to many health conditions.
						Gum disease increases the risk of heart disease, diabetes and many other health problems.
						Regular check ups, cleanings, flossing daily and brushing twice a day are key factors in
						prevention and early detection.
						<br/><br/>
						<strong>The following is some information on preventative dental procedures and treatments:</strong>';

		$arrSubtitles = array (	'Exams',
								'X-rays',
								'Teeth Cleaning (Prophylaxis)',
								'Sealants',
								'Fluoride');
								
		$arrTxt = array (	'<strong>Comprehensive New Patient Exam:</strong> This exam is done at your fist appointment. Dr. Lee will look at all your teeth and check the x-rays. He will also check for gum disease, do an oral cancer screening, examine for tooth decay, cysts, tumors, bone loss and check your existing restorations.
							<br/><br/>
							<strong>Limited/Emergency Exam:</strong> This exam is done when you are seen for an emergency tooth ache. This is also called a problem focused exam. It involves looking at just the area that is bothering you and taking an x-ray of that area.
							<br/><br/>
							<strong>Periodic Exam:</strong> This exam is usually done every six months at your regular check up and cleaning appointments. It involves checking all your teeth and looking for changes.',
							
							'<strong>Full mouth X-rays:</strong> A series of 14 PA and 4 bite-wing x-rays. It&rsquo;s usually done once every three to five years along with a comprehensive exam. The amount of radiation exposure from a full mouth series of x-rays is equal to the amount a person receives in a single day from natural sources.
							<br/><br/>
							<strong>Bite-wing X-ray:</strong> A type of x-ray primarily used to check for cavities. It shows only the top portions of the teeth. Four bite-wing x-rays are usually done every year after your initial full mouth x-ray to help Dr. Lee check for new problems or cavities.
							<br/><br/>
							<strong>PA X-ray</strong>: A type of x-ray used to show the whole tooth from top to root and the surrounding bone structure.
							<br/><br/>
							<strong>Panoramic X-ray:</strong> An extra-oral x-ray taken to show all teeth and their supportive structures, such as the joint bone area. It&rsquo;s usually taken for orthodontic or oral surgery purposes.',
							
							'A prophylaxis is a regular teeth cleaning which is done by our hygienist when no periodontal (gum) disease is present. It involves removing plaque (a sticky bio film that forms on teeth, combines with foods and forms acids that cause tooth decay and gum disease), stain, any light calculus/tartar build up (hardened plaque which forms if plaque is not removed from the tooth for some time), and polishing your teeth.',
							
							'A sealant is a clear coating that is painted into the grooves on the chewing surfaces of a tooth and prevents decay from forming on that surface. It is usually done for children. It is put on molars and pre-molars that have never had a cavity, to protect the tooth from decay.',
							
							'Fluoride is a natural substance that helps guard teeth from decay. It is the active ingredient fighting tooth decay in many toothpastes and mouth rinses. At our office fluoride is applied through the use of a mouth tray. The tray is held in the mouth by biting. Afterwards the patients should not rinse, eat, or drink for at least 30 minutes. This is done once or twice a year, usually for children.'
						);
								
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop($paragraphTop);
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubtitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(sizeof($arrSubtitles));
		$pageContent->setGoToTop(true);
		
		return $pageContent;
	}
?>