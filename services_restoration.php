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
		$welcomeMsg = 'Restoration';
		
		$paragraphTop = 'There are many different types of dental treatments used to prevent and treat dental disease. Infection control, tooth restoration, and returning chewing/eating functions are some of the most important parts of dentistry.
						<br/><br/>
						<strong>The following information explains some common dental procedures:</strong>';

		$arrSubtitles = array (	'Root Canals',
								'Crowns',
								'Bridges',
								'Fillings',
								'Full and Partial Dentures',
								'Extraction');
								
		$arrTxt = array (	"<img src='sources/imgs/graphic_rootCanal.png' class='serviceThumb'>"
							.'A root canal is not as scary or painful as it sounds. Root canals have become common dental procedures, with over 14 million done every year. This quick, simple and relatively painless procedure can save your natural teeth and prevent the need for costly missing tooth restorations in the future. A root canal is the removal of the pulp or nerve tissue from the center of your tooth due to disease or infection caused by:
							<br/><br/>
							<ol>
							<li>Deep tooth decay</li>
							<li>Tooth fractures, cracks or chips</li>
							<li>Trauma or injury to the tooth</li>
							<li>Infection/Abscess</li>
							</ol>
							<br/>
							Symptoms that indicate the need for a possible root canal include: pain with hot or cold, pain when chewing or biting, severe toothache, an abscess or swelling in the gums and/or face, and sometimes there are no symptoms present-if the nerve of the tooth is dead.
							<br/><br/>
							At Salem Dentist of Oregon root canals are usually done in two visits. At the first appointment, Dr. Lee will access the pulp chamber through the top of the tooth and remove the damaged or infected pulp/nerve tissue with the use of root canal files. The canals are then thoroughly cleaned with an antibiotic medication to get rid of any possible infection, and a temporary filling is placed in the opening. In some cases antibiotics will be prescribed to make sure all infection is gone. About a week or two later, the canals of the tooth are re-cleaned, sealed with special dental materials, and a permanent filling is placed.
							<br/><br/>
							After the root canal, the tooth will need a crown to protect it and prevent it from breaking. It is fairly normal to feel some soreness and sensitive after the root canal is started and finished, but this will subside as the tooth heals.',
							
							'A crown is an artificial (fake) tooth-shaped cap, or cover placed over your natural tooth. A crown can be made from gold, porcelain coated w/metals on the inside, or all porcelain. A gold crown, or porcelain coated w/metals is usually stronger than an all porcelain crown, and is recommended for back teeth. A crown can be done to: restore decayed or cracked teeth, to protect a tooth with a large filling from breaking, and to restore a tooth after root canal treatment. Crown can be done for cosmetic reasons also.
							<br/><br/>
							It takes two visits to make a crown. First the tooth is &rsquo;prepped&rsquo;, which involves grinding around the tooth so the crown would fit over it and an impression is taken to make the custom crown. A temporary crown is cemented over your tooth for about 10 days until the laboratory fabricates the permanent crown. At the second visit the temporary crown is removed and the crown is cemented with permanent cement.',
							
							'When dental implants cannot be used to replace one or more missing teeth, then a permanently cemented bridge is the next best solution. A bridge can be made from gold, porcelain coated w/metals on the inside, and all porcelain. A bridge can be done for the following reasons:
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
							A bridge involves connecting a fake tooth to the support teeth on either side of the missing tooth. At the first visit, the teeth on either side of the missing one are &rsquo;prepped&rsquo;, just like when having a crown done, to fit the bridge and hold the fake replacement tooth in place, and an impression is sent to the laboratory. A temporary bridge is cemented for about 10 days while the permanent bridge is fabricated by the laboratory. Once the permanent bridge is ready, the temporary bridge is removed and the bridge is seated with permanent cement. With proper care, regular dental checkups, and good oral health, bridges can last decades.',
							
							'A filling is used to repair teeth. Fillings can be done with composite (white) or amalgam (silver) materials. Sometimes, depending on the place and size of the filling, amalgam is used instead of composite to restore the tooth. Fillings can be used to repair chips, decayed or cracked teeth, to improve the appearance of discolored teeth, close spaces between teeth and to change the shape of teeth. It is fairly normal to experience some mild sensitivity to hot, cold, and biting after a filling is placed, but it subsides shortly.',
							
							'A denture is a removable tooth replacement device worn over the gums to replace one or more teeth. A denture is done to restore chewing/eating and speaking functions, to preserve facial shape and to restore your smile. 
							<br/><br/>'
							."<img src='sources/imgs/graphic_dentures.png' class='serviceThumb'>".'<strong>Removable full mouth dentures:</strong> This denture is made to replace all the teeth in the mouth, whether top, bottom, or both. It is usually made from high quality acrylic resins and looks just like your natural teeth. Sometimes implants are used to hold the dentures in place better.   
							<br/><br/>'
							."<img src='sources/imgs/graphic_partialdentures.png' class='serviceThumb'>".'<strong>Removable partial denture:</strong> This denture is made to replace multiple missing teeth. Partial dentures can be made with acrylic or metal and are kept in place with clasps that attach to the remaining teeth.   
							<br/><br/>
							<strong>Flipper:</strong> A flipper is a temporary partial denture which is worn just for appearance. It is usually used to replace one or more missing teeth until a more permanent restoration is done, such as a partial denture, a bridge or an implant.
							<br/><br/>'
							."<img src='sources/imgs/graphic_flipper.png' class='serviceThumb' style='margin-top: -80px;'>".'Dentures can take anywhere from one week to four weeks to complete from start to finish, depending on the type and design of the denture. Dentures are made to last many years, but they may need to be repaired and adjusted occasionally due to normal wear.',
							
							'A tooth extraction is when the whole tooth is removed from its socket in the bone. The reason for needing a tooth extraction could be:
							<br/><br/>
							<ol>
							<li>Badly decayed/infected teeth, which cannot be saved with root canal treatment</li>
							<li>Painful wisdom teeth</li>
							<li>Loose teeth due to periodontal disease</li>
							<li>Broken teeth</li>
							<li>Extra teeth, usually removed for orthodontic work</li>
							<li>Late baby teeth</li>
							</ol>
							<br/>
							At Salem Dentist of Oregon, simple and surgical extractions are the most common. A simple extraction is done when there are no complications and the tooth is easily removed. A surgical extraction is done when the tooth is broken, has deep/curved roots, or has not come into the mouth yet. You will receive a shot of local anesthetic to numb the area and you may feel pressure, but should not feel pain during the extraction. Some soreness after the extraction is normal.'
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