<?php
	require_once('consts.php');
	require_once('objects.php');
	
	// prints header attributes
	function htmlTop($title)
	{
		$cssPath = CSS_PATH;
		return "<!DOCTYPE html>
				<html>
					<head>
						<link rel='stylesheet' type='text/css' href='$cssPath'>
							<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>
							<title>$title</title>
						</head>";
	}
	
	function htmlBottom()
	{
		return '</html>';	
	}
	
	// prints top logo, phone number, and menu
	function veryTop()
	{
		$logo = 'sources/imgs/graphic_mainLogo2.png';
		$phoneIcon = 'sources/imgs/icon_phone.png';
		$phoneNum = PHONE_NUM;
		
		$ret = setPageLocation('top')
				."<div id='normalWrapper'>
					<!--logo-->
					<div id='veryTop_logo'>
						<a href='$_SERVER[PHP_SELF]?mainPage=main' border=0><img src='$logo'/></a>
					</div>
				
					<!--topLeftPhone-->
					<div id='veryTop_phoneBox'>
						<table class='phoneBox'>
							<tr>
								<td>
									<img src='$phoneIcon'/>
								</td>
								<td>
									$phoneNum
								</td>
							</tr>
						</table>
					</div>"
				.menu('menuBar_wrapper', 'menu', 'grayDivider', false)
				.'</div></div>';
		
		return $ret;
	}
	
	// prints menu, works on top and the bottom
	// $ssn variable decides if this prints ssn icons on the right
	function menu($wrapperId, $aClass, $dividerClass, $ssn)
	{
		// title		
		$arrTitle = array (	'Home',
							'New Patients',
							'Services',
							'About Us',
							'Contact Us',
							'FAQ',
							'Testimonials');
		// icon source			
		$arrLink = array (	'main',
							'newPatients',
							'services',
							'aboutUs',
							'contactUs',
							'faq',
							'testimonials');
		
		$arrMax = sizeof($arrTitle);
		
		$index = 0;
		$ret = "<div id='$wrapperId'>
					<table  style='float: left;'>
						<tr>
							<td>
								<a href='$_SERVER[PHP_SELF]?mainPage=$arrLink[$index]' alt='$arrTitle[$index]' class='$aClass'>
									$arrTitle[$index]
								</a>
							</td>";	
		
		$index ++;
		
		for(; $index < $arrMax ; $index ++)
		{
			$ret .= "<td class='$dividerClass'></td>
					<td>
						<a href='$_SERVER[PHP_SELF]?mainPage=$arrLink[$index]' alt='$arrTitle[$index]' class='$aClass'>
							$arrTitle[$index]
						</a>
					</td>";	
		}
		
		if($ssn == true)
		{	
			$arrSSN = 		array (	'sources/imgs/graphic_ssn_facebook.png',
									'sources/imgs/graphic_ssn_twitter.png');
			
			$arrSSN_link = 	array (	'https://www.facebook.com/RoseCityDentalCare',
									'https://twitter.com/RoseCityDental');
			
			$arrSSN_alt = 	array (	'Facebook',
									'Twitter');
			
			$arrMax = sizeof($arrSSN);	
			
			$ret .= "<table style='float: right; margin-top: -5px;'>
						<tr>
							<td>
								Stay Connected with Us: &nbsp;
							</td>";
			
			for($index = 0; $index < $arrMax; $index++)
			{
				$ret .= "<td>						
							<a href='$arrSSN_link[$index]' target='_blank' style='text-decoration:none;'>
								<img src='$arrSSN[$index]' alt='$arrSSN_alt[$index]'/>&nbsp;
							</a>
						</td>";
			}
			$ret .= '</tr></table>';
		}
		 
		$ret .= '</tr></table></div>';
		
		return $ret;
	}
	
	// prints the main banner right under the menu
	function mainBanner($bannerPath, $bannerClass)
	{
		return "<div id='$bannerClass'><img src='$bannerPath'/></div>";
	}
	
	// prints the information on the left
	function sideLeft($topMenu, $banners)
	{
		$ret = "<div id='mainArticleLeft_wrapper'>";
		$arrMax = sizeof($banners);
		
		if(!empty($topMenu))
			$ret .= $topMenu."<hr class='gray'>";
		
		for ($index = 0; $index < $arrMax; $index ++)
		{
			$img = $banners[$index]->getImg();
			$link = $banners[$index]->getLink();
			$target = $banners[$index]->getTarget();
			
			$ret .= "<a href='$link' target='$target'><img src='$img'/></a><br/><br/>";
		}
		$ret .='</div>';
		
		return $ret;
	}
	
	function squareIcon($txt, $class)
	{
		return "<div class='$class'>$txt</div>";
	}
	
	function darkGreenBt($button)
	{
		return "<input type='submit' value='$button' class='darkGreenBt'/>";		
	}
	
	function formBegins($action, $formMethod, $target)
	{
		return "<form action='$action' method='$formMethod' target='$target'>";
	}
	
	function formEnds()
	{
		return '</form>';
	}
	
	function dropShadow()
	{
		return "<div class='dropShadow'></div>";
	}
	
	// this is for the thick divider
	function divider($class)
	{
		return "<div class='$class'></div>";
	}
	
	function footer()
	{
		$footerLogo = 'sources/imgs/graphic_mainLogo2_gray.png';
		$footerLogoPath = "$_SERVER[PHP_SELF]?mainPage=main";
		$phoneNum = PHONE_NUM;
		
		$footerDesc = 	'Dr. John Lee is a professional dedicated to Excellence in General, Family, &
						Cosmetic Dentistry such as Dental Makeovers, Porcelain Veneers, Teeth Whitening, 
						Crowns/Caps & many other dental procedures. Please call us today and make an appointment 
						at <strong>'.$phoneNum.'</strong>';
						
		$designer = 'Web Design by Jong Seong Lee';
		$designerEmail = DESIGNER_EMAIL;
		
		$ret = 	"<div id='footerTop_wrapper'>"
				.menu('footerTop','footer', 'whiteDivider', true)
				.'</div>'
				."<div id='footerBottom_wrapper'>
					<div id='normalWrapper'>
						<table>
							<tr>
								<td style='padding-top: 10px;'>
									<a href='$footerLogoPath'><img src='$footerLogo'/></a>
								</td>
								<td style='padding: 10px 0px 0px 20px;'>
									$footerDesc<br/><br/>
									<a href='mailto:$designerEmail' class='designerEmail'>
										$designer
									</a>
								</td>
							</tr>
						</table>
					</div>
				</div>";
		
		return $ret;
	}
	
	// testimonial on the left side
	function sideTestimonial()
	{
		$testimonial = '&quot;Dr. John Lee is a &quot;lifetime&quot; dentist to our family. He has taken care of us for over 15 years. His lively, considerate, caring and proffesional attitude is mirrored by his marvelous staff. Thank you for what you do for us! Our family loves you!&quot;';
		
		return "<div class='green20'>Testimonials</div>
				<div id='testimonialExample'>
					$testimonial
				</div>"
		.formBegins("$_SERVER[PHP_SELF]?mainPage=testimonials", 'POST', '')
		.darkGreenBt('Read More Testimonials')
		.formEnds();
	}
	
	
	
	function sideGoogleMap()
	{
		$address = OFFICE_ADDRESS;
		$googleMap = GOOGLE_MAP;
		
		return "<div class='green20'>
					Salem Dentist of Oregon
				</div>
				<div class='ltGreen16'>
					Street Address
				</div>
				<div class='black14'>
					<strong>$address</strong><br/><br/>
				</div>		
				<iframe width='310' height='310' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://maps.google.com/maps?q=436+Lancaster+Dr+NE+Salem,+OR+97301&amp;ie=UTF8&amp;hq=&amp;hnear=436+Lancaster+Dr+NE,+Salem,+Oregon+97301&amp;gl=us&amp;t=m&amp;ll=44.934426,-122.983103&amp;spn=0.018836,0.026522&amp;z=14&amp;iwloc=A&amp;output=embed'></iframe>
				<br />
				<small>
					<a href='$googleMap' target='_blank'>
						View Larger Map
					</a>
				</small>";
	}
	
	//this is for easier wrapping of left and right side content
	function contentPageLayout($leftContent, $rightContent)
	{
		return "<div id='normalWrapper'>
				<table style='margin-top: 25px;'>
					<tr>
						<td style='vertical-align: top'>
						$leftContent
						</td>
						<td style='width: 1px; background-color: #808080;'>
						</td>
						<td style='vertical-align: top'>
						$rightContent
						</td>
					</tr>
				</table>	
			</div>";
	}
	
	// this sets page location for scrolling
	function setPageLocation($name)
	{
		return "<a name='$name'></a>";
	}
	
	// this goes to the location set by setPageLocation function
	function goToPageLocation($name, $text)
	{
		$iconPath = 'sources/imgs/icon_teeth_red.png';
		
		return "<div style='text-align: right; width: 100%; margin-top: 20px;'>
					<a href='#$name' class='normalLink'>
						<img src='$iconPath'/>
						&nbsp;$text
					</a>
				</div>";
	}
	
	// content page, takes object argument
	function sideRight($pageContent)
	{
		$welcomeMsg = $pageContent->getWelcomeMsg(); 
		$paragraphTop = $pageContent->getParagraphTop();
		$paragraphBottom = $pageContent->getParagraphBottom();
		$arrSubtitles = $pageContent->getArrSubtitle();
		$arrTxt = $pageContent->getArrTxt();
		$arrMax = $pageContent->getArrSize();
		$goToTop = $pageContent->getGoToTop();		
			
		
		$ret = "<div id='mainArticleRight_wrapper'>
				<div class='green20'>$welcomeMsg</div>";
		
		$divider = !empty($paragraphTop);
		
		if($divider == true)
			$ret .= $paragraphTop;
		
		if($arrMax > 0)
		{
			if($divider == true)
				$ret .= "<hr class='gray'>";
				
			$index = 0;
			
			$ret .= "<div class='ltGreen16'>$arrSubtitles[$index]</div>
					$arrTxt[$index]";
			
			$index ++;	
		
			for(; $index < $arrMax; $index ++)
			{
				$ret .= "<hr class='gray'>
						<div class='ltGreen16'>$arrSubtitles[$index]</div>
						$arrTxt[$index]";
			}	
		}
		
		if(!empty($paragraphBottom))
			$ret .= $paragraphBottom;
		
		if($goToTop == true)
			$ret .= goToPageLocation('top', 'Back to Top');
		
		$ret .= '</div>';
		
		return $ret;	
	}
	
	
	function sideServiceMenu()
	{
		$arrMenu = array (	'Cleaning & Prevention',
							'Cosmetic Procedures',
							'Peridontal Disease',
							'Restoration');
		
		$phpself = "$_SERVER[PHP_SELF]?mainPage=services_";
		
		$arrLink = array (	$phpself.'cleaning',
							$phpself.'cosmetic',
							$phpself.'peridontal',
							$phpself.'restoration'); 
		
		$arrMax = sizeof($arrMenu);
		
		$iconPath = 'sources/imgs/icon_teeth_red.png';
		
		$ret = "<div class='green20'>View Services</div>";
		
		for($index = 0; $index < $arrMax; $index ++)
		{
			$ret .= "<a href='$arrLink[$index]' class='serviceMenu'>					
							<img src='$iconPath'/>
							<strong>$arrMenu[$index]</strong>
					</a><br/>";
		}
			
		return $ret;
	}
	
	function couponContent()
	{
		$ret = 	"To welcome you to our office, we are happy to provide you with some discount coupons. Please bring them in for some great discounts on your treatment.
						<br/><br/>";
		
		$arrCouponImgs = array ('sources/imgs/graphic_coupon1.png',
								'sources/imgs/graphic_coupon2.png',
								'sources/imgs/graphic_coupon3.png',
								'sources/imgs/graphic_coupon4.png');
		
		$arrMax = sizeof($arrCouponImgs);
		for($index = 0; $index < $arrMax; $index ++)
			$ret .= "<img src='$arrCouponImgs[$index]' class='coupons'/>";
		
		return $ret;
	}

	function openPopup()
	{
		return "<script type='text/javascript'>
					function openPopup()
					{
						myWindow = window.open('popup_coupons.php', 'name', 'resizable=no scroll=no width=680 height=570');
						return false;
					}
				</script>
				<a href='#' onclick='openPopup()' class='normalLink' style='float: right;'>
					<img src='sources/imgs/icon_teeth_red.png'/>
					&nbsp;View Printer Friendly Popup
				</a>";
	}
?>