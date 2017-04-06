<?php
	include_once('googleAnalytics.php');
	$bannerPath = 'sources/imgs/graphic_mainBanner_testimonials.png';
	$bannerClass = 'miniBanner';

	$arrBanner = array (new sideBanner(BANNER_COUPON_IMG, BANNER_COUPON_LINK, BANNER_COUPON_TARGET),
						new sideBanner(BANNER_CARE_CREDIT_IMG, BANNER_CARE_CREDIT_LINK, BANNER_CARE_CREDIT_TARGET));

	echo mainBanner($bannerPath, $bannerClass)
		.contentPageLayout(sideLeft(sideTestimonial(), $arrBanner), sideRight(content()));
		
	function content()
	{
		$welcomeMsg = 'Testimonials';
		
		$arrSubtitles = array (	'Eugene (Google)',
								'Olivia B. (Google)',
								'Jackie (Google)',
								'Kirsten C. (Yelp)',
								'Mike H. (Yelp)',
								'Benny J. (Yelp)',
								'Megan F. (City Search)',
								'KimH276 (City Search)',
								'Sheila C393 (City Search)',
								'E. B. (Yelp)',
								'Kristie B. (Yelp)',
								'Kaye V. (Yelp)',
								'Sabine S. (Yelp)',
								'jeddakedda30 (Google)',
								'Simonbsays (Google)',
								'Steve M. (Yelp)',
								'Mindy C. (Yelp)',
								'Dennis D. (Judy&rsquo;s Book)',
								'Happy Salem Dentist of Oregon Customer (Google)',
								'Cheryl T. (Yelp)',
								'Ericka L. (Yelp)');
		
		$arrDate = array (	'Feb. 2012',
							'Feb. 2012',
							'Mar. 2012',
							'Jan. 2012',
							'Oct. 2011',
							'Dec. 2011',
							'Dec. 2011',
							'Feb. 2012',
							'Mar. 2012',
							'Sep. 2011',
							'Aug. 2011',
							'Sep. 2011',
							'Jul. 2011',
							'Jul. 2011',
							'Sep. 2011',
							'Aug. 2010',
							'Feb. 2011',
							'Apr. 2011',
							'Apr. 2010',
							'Apr. 2011',
							'Apr. 2009');
		
		$arrTxt = array (	'My mother who is elderly, just completed a round of work with Dr. John Lee. We are very happy with the results of his work. Also, I really appreciate the time that he took to be very caring and answer our questions. I have never seen a more caring dentist than Dr. Lee. I was also very suprised that when my mom hugged him, he didnt seem to be uncomfortable with that at all. It was really refreshing to see him really care about her. We see alot of health professionals for my mom and he unmistakeabley has her best interest at heart.',
							'New Patient of the Lee Brothers. A friend of mine located their website after I had searched hopelessly at five different dentists offices to have an emergency tooth extraction. Salem Dentist of Oregon was the only place that would take me in on the same day. Dr. Lee and his staff were very customer service oriented and explained everything to me. They made my options clear and addressed different forms of interest free payment options. It was the best dental experience that I have had in a long time. Thank you Salem Dentist of Oregon.',
							'The best dentists I have ever been to. Very kind and professional. I have always hated going to the dentist so my teeth were not in the best of shape. He explained his plan for success, and I had to have a tooth extracted. It was so quick and easy I couldn not believe it. Healed beautifully with no complications. I trust them enough that I now have my granddaughters going there too.',
							'I had some cavities showing their ugly faces and needed to find a new dentist as mine moved farther away than I&rsquo;m willing to travel. After reading yelp reviews I chose Salem Dentist of Oregon. I agree with everyone else&rsquo;s reviews (except Marc) about the friendly easy way this practice operates.<br/><br/>Today I had my first set of fillings done. Holy cow. Worlds fastest and least painful fillings ever!! I was in and out in about an hour , barely numb as he used some fancy fast acting stuff, and all 4 of my front teeth are now cavity free and beautiful.<br/><br/>I will recommend them to everyone!!',
							'APPETIZER: Yesterday I went to see Dr. Tae Lee as Salem Dentist of Oregon. This decision was based on my fellow Yelpers as I needed a dentist that was under my providers coverage list, had weekend hours, had personable staff, exercised professionalism, and had weekends hours. Well, I can say they met all my requirements and thank you to everyone who Yelped them!<br/><br/>DRINK: Now for the meat of the review. :) I came in for a cleaning and review as a new patient, I expected the worst, as my dental care can&rsquo;t quite compensate for my bad genetics resulting in common dental problems.<br/><br/>ENTREE: The office was very clean, all the staff I encountered were professional, and after filling out a few forms I was seen. The dentist sat me in the chair, chatted me up a bit, had the assistant take x-rays, and came back to review the results with me. Dr. Lee showed me the exact area where I had 6 (yes, 6) cavities that needed to be filled. I new this to be true as my Dad is a dentist and I have read x-rays many times. On top of that he said one of the areas had a large black area, in the very back of my mouth where the cavity is great it may require a root canal. He said that one of the 6 fillings was from previous dental work that hadn&rsquo;t held up.  So, then I went for my cleaning where I had a comprehensive and gentle cleaning, was shown the proper technique to get at the gums, and was even offered a prescription (which I am the best candidate for) prescription toothpaste contain 1.1% fluoride for only $7.<br/><br/>DESSERT: My cleaning, x-ray, and exams were completely covered. So, I paid nothing, except $7 for my Rx toothpaste. Fillings are approx. $156 and root canals are approx. $956. My next appt is on the 29th and I need two fillings and possibly one root canal. I inquired with the receptionist on those cost and so was nice enough to do so. With 80% coverage my actual cost would be approx $62 for two fillings and approx $191 for the root canal. So, my total will be either $62 (two filings) or $253 (two fillings and a root canal). A great deal, friendly service by everyone, clean, and professional.',
							'I love Salem Dentist of Oregon. I have been there for cleanings and severe dental work many times. They&rsquo;re gentle, polite, and unlike some other reviewers here, I seldom have had an experience that was below awesome. I would give more stars, but because my teeth are so bad (genetics, and braces when I was 6), I have some issues in there that make it really spendy. But when I needed a filling, but it bordered on root canal, the dentist said he would credit the cost of the filling on the root canal if it failed&ndash;so that was cool.<br/><br/>I would recommend these guys to any of my friends or family (I have actually&ndash;my Dad had a filling fall out, so he went in, they patched him up and sent him on his way &mdash; $40)! Dr Tae is a great guy.',
							'I mainly was excited to come to this office because they had online coupons for new patients and I knew I needed work done. I was sweetly surprised by the warmth of the office. I was brought into a room where the dentist John Lee came in within five minutes and looked over my xrays and mouth. He asked what was priority to me and then gave his recommendations. As he prepped things for my fillings I was brought a magazine and a blanket. He was friendly, straight forward and precise. It was the most pain free filling I have ever had. His assistant worked well and watched intently for any cues from me for needing suction. I didn&rsquo;g gag even once! All in all this place is fantastic. I have been to some real bummer dental clinics, but this place is just great. I would highly recommend them!',
							'Dr. John Lee is a &rsquo;lifetime&rsquo; dentist to our family. He had taken care of us for over 15 years. He had us at our first visit. He is very sensitive to the comfort of his patients. I have always been a nervous wreck and dreaded going to the dentist. And if that continued, it would have cost me my teeth! All that changed with Dr. Lee. Every visit is pleasant. Any work to be done with my teeth is always thoroughly explained. Technically and financially. And during any procedure, he never fails to ask how I was doing or if I feel any pain. His lively, considerate, caring, and professional attitude is mirrored by his marvelous staff that I nor my family never hesitate to call if we had questions. Bravo to the doctors and staff of Salem Dentist of Oregon. Thank you for what you do for us! Our family love you!',
							'Fabulous office staff, Amazing Doctor! Dr. John Lee has along with his staff, completed several treatments on myself, my husband, and my son. After having gone to a, shall we say a &rsquo;less than quality provider&rsquo;, we have been extremely pleased with the quality of work and warm atmosphere provided by this office. All of us have had a pleasant experience and our teeth DO NOT HURT anymore! I cant say enough about the relief Dr. Lee has provided. Dr John is truly a Doctor that cares! On many occassions he has gone above and beyond the call of duty. Thanks so much!',
							'Salem Dentist of Oregon is an amazing place. I had put off major dental work for over 5 years due to multiple bad encounters with other dentists. I have been very ashamed of the condition of my teeth, and my other dental experiences ranged from impersonal and ultra expensive to downright rude and condescending. I came into Salem Dentist of Oregon in terrible pain this morning and Dr. Lee not only treated me kindly and professionally, he did it lightening fast! Within minutes of my exam I was numbed to relieve the pain, and they proceeded to do my first root canal on the spot.  Dr. Lee had me come back this afternoon to have another tooth extracted, and a root canal done on a third tooth. I recently lost my job, and was taking advantage of what poor dental coverage I had while I still could, and Salem Dentist of Oregon did what they could to accommodate my limited means. I am amazed and will be forever grateful that I found this gem of a place. Thank you Salem Dentist of Oregon!',
							'I have been going to Salem Dentist of Oregon for the past 7 or so years. Due to my crazy work schedule I was pleased they had Saturday appointments so I went to try them out. I had braces as a child and my experience with the dentist previously was horrid. Dr. Lee and Dr. Tae are amazing. They are informative, gentle and efficient. I have had several fillings and one crown and all my experiences have been positive. They truly do care about their patients and want to be sure they are comfortable and satisfied. They are also great about communicating with the insurance companies so there is no confusion about cost.My insurance changed at one point and I ended up going to another dentist in the area. The dentist was a much older man who had been in the field for years. He asked who had done all the work in my mouth (referring to the crown and fillings) I told him and he said the previous dentist did excellent work and complimented me on my teeth. That definately sold me. Now after about seven years going to Dr. Lee I&rsquo;m feeling like I want a little comestic stuff done and Dr. Lee set me up with a bleaching kit and is going to do some bonding on my front teeth. I can&rsquo;t wait to see the outcome. Salem Dentist of Oregon does amazing work and I would highly recommend them.',
							'I was visiting Portland for a wedding.  On the plane from St. Louis to Portland, one of my teeth started experiencing severe pain.  The staff at Salem Dentist of Oregon were able to squeeze me into their busy schedule so that I could enjoy the wedding pain free.Dr. Tae W. Lee was very thorough and was able to detect the problem and remedy the pain.  It was an odd problem, and I think that most dentists would have jumped in and just done a root canal.  He was able to diagnose a nerve problem that was related to the gums and not the actual tooth.  The only bad thing about this dental visit was that I couldn&rsquo;t make Dr. Tae W. Lee my family dentist!  The office staff was just as wonderful as Dr. Tae W. Lee.  I couldn&rsquo;t have had a better experience.',
							'I have been a patient @ Salem Dentist of Oregon 7 years and I must say I think they are the BEST.  Why?  well that is easy, they always go above and beyond when helping me deal with insurance benefits and my Benny card.  Dr. Lee always tells me what he is doing and is very careful not to hurt me.  In short I feel like a person not a number.  I always get a reminder call for my appointment.  Appointments are easy made and I do not have to wait a month to get one.  I had an emergency once and he had me in his chair within 1/2 hour.  (  I live 5 min away.)  They also have Sat appointments.  If you are looking for a great friendly knowledgeable staff and a caring, professional dentist.I recommend Salem Dentist of Oregon. P.S. The work he does looks Great smiles.',
							'Found Rose Ciy Dental through google. I was in a lot of pain, and needed an emergency root canal. From the moment I called to make an appointment, I was treated with the best customer service I have ever experienced at a dental office. They were fast, and efficient. The hygenist who took my x-rays was gentle and keep asking if I was okay. And Dr. John Lee. I am in love with this man. I mean that in the most professional, appropriate way possible. I have anxiety about going to the dentist. He was very calming, and reassuring. He used a medicine that did not cause my heart to race. He explained the procedure to me. And we developed a long term plan for my dental needs. I HIGHLY recommend Salem Dentist of Oregon. Also, if you go to their website they have new patient coupons that you can print out. I personally am using the one for $200 credit for the crown I will be getting in a couple weeks. Thank you to Dr. John Lee and all the staff at Salem Dentist of Oregon.',
							'I&rsquo;ve been a patient of Dr. Lee for the last 10 years. Great dentist and staff who cares about my teeth and comfort during my visits. While I haven&rsquo;t had any major procedures done, I can tell that they try their best to keep me comfortable. For example, injecting Novocaine is done veerrryy slowly because he knows it hurts when done fast (like at my previous dentist). I go in regularly (every 6 months) for cleanings, and they do a great job with those too. All questions I ever have are thoroughly answered/explained to me. They listen really well too, because they seem to remember what I tell them about my family. The place was remodeled about a year ago so it&rsquo;s really nice inside too. Overall, both my family and I have had a great experience over the years. I recommend checking them out if you&rsquo;re looking for a dentist!',
							'I don&rsquo;t usually eat candy. But I&rsquo;d been on a big hike the day before, I knew there was a frozen 100 grand bar left in the freezer from Halloween, and I figured &rsquo;Oh, why not.&rsquo; Apparently a good reason not to do so is that the 100 grand bar cracked one of my teeth in half LENGTHWISE. So maybe I was a little panicked, this happened on a Sunday (which apparently is the faux pas day to have a dental emergency, who knew?) Dr. Tae Lee was the only dentist who had an emergency number on his VM. I talked to him and he agreed that yep, this was indeed a dental emergency, asked if I was in pain (surprisingly I wasn&rsquo;t), and set me up with an early morning appointment Monday morning! Once there? Dr. Lee is a really gentle, thorough, and gifted dentist. His staff was friendly and efficient, and I can&rsquo;t say enough good things about the experience (including the fact that yay!! He saved my tooth!!) Being a stellar dentist who really came through for me in an emergency gets you five stars (and a new patient) Dr. Lee. The fact that a scary dental emergency was turned into a five star event? Makes me wish I could award Dr. Lee the Nobel Prize for Dentistry.',
							'I&rsquo;m not a fan of dentists. But when my erupted wisdom tooth became infected in mid-January I needed someone to alleviate the pain&ndash;stat. And this was the place. I chose them mostly because I liked the name &rsquo;Salem Dentist of Oregon.&rsquo; It just smacks of comfort and soft, delightful smelling things. The outside of their office is newish and clean as is the interior. The decorations are pleasant and I felt more like I was inside a house (equipped with rooms full of torture instruments) than a dental office. But it felt sterile &mdash; like it should. They got me in for an appointment the next day. And my insurance would cover nearly everything. SOLD! The visit was short and sweet and I was sent on my way with two prescriptions and an appointment for extraction the following week when my swollen and infected jaw was in better shape. Within the next two days the infection and swelling was down. The extraction procedure itself was quick, free from complications and from my expert opinion on experiencing pain&ndash;relatively pain free. Plus &mdash; more drugs! Went home with gauze and after-care info but the bleeding stopped quickly and the healing was much faster than anticipated. They booked me for a follow-up appointment for the next week (free of charge) and did a thorough cleaning and spotted only one cavity. I like the efficiency and friendliness of the staff. I like that it&rsquo;s close and convenient and they clear everything through my insurance before they proceed with the next steps so I know what will be covered and what won&rsquo;t. I will definitely stick with these folks!',
							'One of the best dental experiences I&rsquo;ve ever had! It&rsquo;s been a year or two since I&rsquo;d seen a dentist and I had to find a new one since the dental office I was once covered with no longer is an option through my insurance plan. Dr. John Lee and the staff were extremely nice, consistent with their message and very clear of what I was to expect price-wise and in making sure I wanted the service offered. My out of pocket was as expected according to my insurance and there was absolutely no pain during the procedure. I highly recommend this dental office.',
							'Top-of-the-line dentistry I found Dr. Lee through via a friend. Dr. Lee has done major high quality work installing two bridges, three crowns, and performing other general dental procedures. He is as good as the best around town.',
							'I have been going to Dr. John Lee for 10 yrs now. I have gone through many dentists through the years looking for one who would listen to my concerns and work with me instead of shoving me through to the next appointment as if I were a time slot. Dr. John not only listens to me but is gentle when giving shots too. I am sure you and your kids will like him as much as we do.',
							'I first visited Salem Dentist of Oregon for an emergency procedure. I had been in pain for hours during the night, and I called the emergency line at 6:30am. They scheduled me at 8:00am that day. If you need a gentle, skilled and thorough dentist, Dr. Tae Lee is your man! He is reasonably priced, and the front desk staff can offer good advice about dental insurance plans.');
								
		$arrMax = sizeof($arrDate);						
		
		for($index = 0; $index < $arrMax; $index ++)
			$arrTxt[$index] = "	<div style='float: right; margin-top: -28px;'>
									<strong>$arrDate[$index]</strong>
								</div>
								$arrTxt[$index]";
		
		$pageContent = new pageContent();
		$pageContent->setWelcomeMsg($welcomeMsg);
		$pageContent->setParagraphTop('');
		$pageContent->setParagraphBottom('');
		$pageContent->setArrSubtitle($arrSubtitles);
		$pageContent->setArrTxt($arrTxt);
		$pageContent->setArrSize(sizeof($arrSubtitles));
		$pageContent->setGoToTop(true);
		
		return $pageContent;
	}
?>