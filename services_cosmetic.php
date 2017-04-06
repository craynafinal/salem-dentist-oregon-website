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
		$welcomeMsg = 'Cosmetic Procedures';
		
		$paragraphTop = 'Cosmetic dental procedures have been practiced for thousands of years.
						Shell-like dental implants were found by archeologists in a human jaw bone,
						dating back to 600AD, while excavating a Mayan burial site.
						Also, Ancient Egyptians created a tooth whitening paste using ground pumice stone and vinegar.
						Cosmetic dental procedures have seen much advancement in the last 100 years and continue to progress today.
						<br/><br/>
						Dr. John Lee and Dr. Tae Lee are pleased to be your cosmetic dentist in Salem Oregon,
						who always seek to advance their knowledge and skill.
						<br/><br/>
						<strong>The following is some information on cosmetic dental procedures performed
						at Salem Dentist of Oregon:</strong>';

		$arrSubtitles = array (	'Tooth Whitening',
								'Porcelain Crowns',
								'Porcelain Bridges',
								'Composite Fillings and Bonding',
								'Implants');
								
		$arrTxt = array (	'Tooth whitening (or bleaching) has become one of the most popular cosmetic procedures. Although tooth whitening is not permanent, it lightens the color of the natural tooth enamel and is an ideal way to make your smile stand out. A touch-up maybe needed every couple of years, and more often if your drink coffee, tea, wine, or smoke.
							<br/><br/>
							At Salem Dentist of Oregon tooth whitening involves two visits. First, we will take an impression of your teeth to make custom plastic trays. At the next visit, usually a few days later, we try in the trays for proper fit and send you home with your at-home whitening kit, trays and instructions. It is normal to experience some sensitivity while whitening your teeth, but is should subside after you have stopped bleaching. Using a desensitizing tooth paste, such as Sensodyne, for a few weeks before and during whitening usually helps with the sensitivity.',
							
							"<img src='sources/imgs/graphic_porcelaincrown.png' class='serviceThumb'>".'A porcelain crown is an artificial, opaque, tooth-colored and shaped cover placed over your natural tooth. A crown can be done for more extensive cosmetic changes such as: to repair large chips, decayed or fractured teeth, to improve the look of yellowed teeth, eliminate gaps between teeth and to transform the shape of teeth.
							<br/><br/>
							It takes two visits to make a crown. First the tooth is &rsquo;prepped&rsquo;, which involves grinding around the tooth so the crown would fit over it and an impression is taken to make the custom crown. A temporary crown is cemented over your tooth for about 10 days until the laboratory fabricates the permanent porcelain crown. At the second visit the temporary crown is removed and the porcelain crown is cemented with permanent cement. The result is a natural looking tooth and no darkening of the gums around the crown.',
							
							"<img src='sources/imgs/graphic_bridge.png' class='serviceThumb'>".'When dental implants cannot be used to replace one or more missing teeth, then a permanently cemented all-porcelain bridge is the next best solution. Because there is no metal in the all-porcelain bridge there is no darkening of the gums around the bridge. The porcelain bridge is custom matched to the shade of your teeth which makes it impossible to tell apart from real teeth. A bridge can be done for the following reasons:
							<br/><br/>
							<ol>
							<li>Fill space of missing teeth</li>
							<li>Preserve facial shape</li>
							<li>Restore your smile</li>
							<li>Repair chewing and speaking</li>
							<li>Upgrade from a removable partial denture to a permanent dental bridge</li>
							<li>Stop remaining teeth from drifting out of place</li>
							</ol>
							<br/>
							A bridge involves connecting a fake tooth to the support teeth on either side of the missing tooth. At the first visit, the teeth on either side of the missing one are &rsquo;prepped&rsquo;, just like when having a crown done, to fit the bridge and hold the fake replacement tooth in place, and an impression is sent to the laboratory. A temporary bridge is cemented for about 10 days while the permanent porcelain bridge is fabricated by the laboratory. Once the permanent bridge is ready, the temporary bridge is removed and the all-porcelain bridge seated with permanent cement. With proper care, regular dental checkups, and good oral health, bridges can last decades.',
							
							'A composite filling or bonding is a tooth colored material that is used to repair teeth. Composite fillings can be done to repair chips, decayed or cracked teeth, to improve the appearance of discolored teeth, close spaces between teeth and to change the shape of teeth. It is fairly normal to experience some mild sensitivity to hot, cold, and biting after a filling is placed, but it subsides shortly. A composite bonding is best for small cosmetic changes, fillings and repairs. Dr. Lee will discuss with you the best option for your particular need.',
							
							"<img src='sources/imgs/graphic_implants.png' class='serviceThumb'>".'A dental implant is an artificial (fake) tooth root that is placed directly into your jaw bone and replaces your natural tooth. Single teeth or a full arch of teeth can be replaced with implants through crowns, bridges and dentures. Dental implants are a less intrusive way of replacing missing teeth and have the best long term success. They look, feel and work just like natural teeth and can last a lifetime if they are well cared for.
							<br/><br/>
							A dental implant has three parts; a titanium screw that is surgically placed inside the bone, an attachment (abutment) that connects to the screw and a crown that sits on top of the connector. Once Dr. Lee determines that you are a good candidate for implants (good overall and oral health and a good, strong bone level) we proceed with the following steps (for a single tooth restoration):
							<br/><br/>
							<ol>
							<li>The titanium dental implant screw is surgically placed in the missing tooth area. In some cases bone grafting may be needed. About 3-6 months is recommended for the healing time after this surgery, to allow the implant to join together with the jaw bone. During this time, a temporary tooth can be worn over the area</li>
							<li>After the healing process, the implant attachment (abutment) is placed and an impression for the implant crown is taken</li>
							<li>Finally the implant crown is attached to the abutment and the tooth is fully restored</li>
							</ol>
							<br/>
							After your implant treatment is finished, care for your implants just like you would your regular teeth. Brush and floss daily and come to our office regularly to have your implants checked and professionally cleaned by our dentist and hygienist.
							<br/><br/>
							Salem Dentist of Oregon offers the best of cosmetic dentistry in Portland. When you come to our offices you can be assured your smile is in great hands!'
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