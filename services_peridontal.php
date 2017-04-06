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
		$welcomeMsg = 'Peridontal Disease';
		
		$paragraphTop = 'Periodontal (or gum) disease is an infection that attacks the gum tissue and bone that support your teeth, causing you to lose your teeth. It is the number one cause of tooth loss in adults, and because it is usually painless, millions of people don&rsquo;t know they have this serious infection.';

		$arrSubtitles = array (	'Causes',
								'Diagnosis, Treatment and Maintenance',
								'Prevention');
								
		$arrTxt = array (	"<img src='sources/imgs/graphic_periodontal.png' class='serviceThumb'>"
							.'The main cause of periodontal disease is plaque. Plaque is a sticky bio film of food debris, mucus, and bacteria that always forms on teeth. When plaque combines with food and saliva it forms acids and toxins that cause tooth decay and gum disease. Plaque that is not removed with daily brushing and flossing, remains on your teeth and can harden after just 24-26 hours! Once plaque has hardened or mineralized, it forms the rough, crusty deposit called tartar or calculus. Calculus is too hard to remove with a toothbrush, and can only be professionally removed by a registered dental hygienist through the use of ultrasonic and special instruments.
							<br/><br/>
							The constant build up of plaque and calculus begins to destroy your gums and bone causing periodontal disease. Recent studies have shown that periodontal disease is linked to other diseases such as diabetes, heart disease, heart attack, and stroke. The following factors can also affect the health of your gums:
							<br/><br/>
							<ol>
							<li>Genetics</li>
							<li>Poor diet</li>
							<li>Diabetes</li>
							<li>Grinding or clenching your teeth</li>
							<li>Prescription drugs</li>
							<li>Illegal drugs</li>
							<li>Stress</li>
							<li>Puberty, pregnancy and menopause in women</li>
							<li>Smoking/tobacco use</li>
							<li>Other systemic diseases</li>
							</ol>
							<br/>
							<strong>Periodontal disease can be categorized into the following three stages:</strong>
							<br/><br/>
							<strong>Stage 1: Gingivitis</strong><br/>
							The bacteria, acids, and toxins in plaque irritate and inflame the gums, making them red, tender, swollen and prone to bleeding. Gingivitis is usually reversible with daily brushing and flossing, and regular cleanings by the hygienist.
							<br/><br/>
							<strong>Stage 2: Periodontitis</strong><br/>
							The irritated gums began separating or receding from the teeth forming spaces called pockets. Bacteria, plaque and calculus move into the pockets and continue to build and irritate. The toxins and the body&rsquo;s natural response to the infection begin to destroy the gums and dissolve the bone that holds the teeth firmly in place.
							<br/><br/>
							<strong>Stage 3: Advanced Periodontitis</strong><br/>
							As the bone continues to dissolve due to the bacteria and infection in the gums, the teeth become loose. The affected loose teeth may fall out or need to be removed by the dentist.',
							
							'Periodontal disease is diagnosed by the dentist and hygienist. At your first comprehensive appointment they will do an exam to look for: moderate to severe plaque and tartar build ups, red, swollen, or receding gums that bleed easily, loose teeth, bone loss, and persistent bad breath. They will also do the following procedures to help diagnose periodontal disease:
							<br/><br/>							
							<strong>X-rays:</strong> Looking at x-rays shows if any bone loss is present.
							<br/><br/>
							<strong>Periodontal Probing:</strong> The hygienist will do a periodontal probing which is done by using a mirror and a small, thin probe which measures, in millimeters, the depth of the unattached gum tissue (or gum pockets) around your teeth. A healthy pocket depth is 2-3mm. Pockets that measure 4mm are a sign of gum tissue inflammation and 5-6mm or greater, indicate bone loss. The deeper the gum tissue pockets in millimeters, the more severe your periodontal disease.
							<br/><br/>
							<strong>Testing Tooth Movement:</strong> Tooth mobility is determined by gently pushing each tooth back and forth to check for movement. Mobility is an unmistakable sign of bone loss.
							<br/><br/>
							Once the diagnosis for periodontal disease is made, the dentist and hygienist will make a recommendation for treatment based on their findings.
							<br/><br/>
							The most common treatment for periodontal disease is a deep cleaning called scaling and root planning (or SRP). The hygienist will clean above and below the gum line with an ultrasonic scaler to remove the plaque and hard buildup of calculus in the pockets and to smooth the tooth root. It is typically done with local anesthetic to numb your gums and teeth. SRP is divided into quadrants: the upper right, lower right, upper left and lower left. Usually 1-2 quadrants are cleaned per appointment. This procedure helps the gums tissue to heal and the pockets to shrink.
							<br/><br/>
							Some tooth sensitivity and gum soreness is normal after the deep cleaning, while your gums heal. Swishing with warm saltwater helps to reduce the soreness and using a desensitizing toothpaste, such as Sensodyne, helps with the sensitivity.
							<br/><br/>
							Once the SRP cleaning is completed, the hygienist may want to see you back in 4-6 weeks for a re-evaluation, to check for improvement, and re-clean any areas that may have become visible after the gum inflammation decreased. After this, you will need to be seen for periodontal maintenance cleanings usually every 3-4 months to clean the plaque and calculus in the deep pockets which regular brushing and flossing does not clean.
							<br/><br/>
							Once an SRP deep cleaning is done, it never needs to be done again, as long as you have your perio maintenance cleanings done regularly and keep your teeth and gums healthy.
							<br/><br/>
							If your gum disease is very severe, a referral to a Periodontist (gum specialist) may be needed for possible gum surgery and/or antibiotic injections.
							<br/><br/>
							If you think you may have a form of gum disease call our office at <strong>".PHONE_NUM.",</strong> to get it treated and under control before it gets worse.',
							
							'The best way to prevent periodontal disease is to take care of your teeth, gums, and overall health. Good oral hygiene starts with:
							<br/><br/>
							<ol>
							<li>Brushing your teeth twice daily with fluoride toothpaste; once in the morning and before bedtime</li>
							<li>Flossing your teeth once daily, preferably before bedtime</li>
							<li>Eating a balanced diet; limiting candy, sweets, sugary drinks and fruit juice</li>
							<li>Abstaining from tobacco products</li>
							<li>Getting regular checkups and cleanings at our office</li>
							</ol>
							<br/>
							It is more important than ever to take good care of your mouth, teeth and gums. We care about your overall health and especially your oral health.'
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