<?php
	require_once('methods.php');
	
	$welcomeMsg = 'Frequently Asked Questions';
		
	$arrQuestion = array (	'Are you accepting new patients?',
							'What are your office hours?',
							'What dental insurance do you accept?',
							'What forms of payment do you accept?',
							'Does your office offer payment plans?',
							'Does your office see dental emergencies?',
							'Does your office offer sedation?',
							'Does your office see children?');
							
	$arrAnswer = array (	'Yes! We are always happy to welcome new patients.',
							'Our office hours are: Monday-Friday 8:00 AM-5:30 PM. Weekend appointment is available. Call us at 503-391-8920 today.',
							'We accept most dental insurances and are participating providers (PPO) with many insurance networks. The following is a list of the most common dental insurances we accept: Aetna, Aflac, Ameritas, Assurant, Blue Cross Blue Shield, Cigna, Delta Dental, Guardian, Met Life, ODS, Standard, United Concordia, United Health Care, and many more.',
							'We accept cash, Visa and MasterCard debit and credit cards, Care Credit,  and personal checks. We can also take payment over the phone.',
							'Yes. We offer payment plans through Care Credit. They are a financing company who offers interest free payment options.',
							'Yes. We will usually see you the same day if you have a dental emergency.',
							'Yes. For dental anxiety we offer oral sedation, which is prescribed and taken before your dental appointment.',
							'Yes. We see children as young as 3 years old.');
							
	$arrMax = sizeof($arrQuestion);
	
	echo htmlTop('Salem Dentist of Oregon - Frequently Asked Questions');
?> 

<script type="text/javascript"> 

	var layerCount = <?=$arrMax;?>; 
	
	function show(id)
	{ 
		for (var i=0; i< layerCount; i++)
		{ 
			document.getElementById("faq"+i).style.display = 'none'; 
		} 
		document.getElementById(id).style.display = 'block'; 
	} 
 
</script> 

<div id="mainArticleRight_wrapper" style='width: 620px; min-height: 800px'>
	<div class="green20"><?=$welcomeMsg?></div>
	<table style="width: 100%;">

<?php	for($index = 0; $index < $arrMax; $index ++)
		{
			$faqId = 'faq'.$index; 
			$buttonId = 'button'.$index;
?> 

		<tr style="height: 50px; display: block; width: 100%;">
			<td style="padding-bottom: 10px; width: 30px;">
				<?=squareIcon('Q', 'greenIcon');?>
			</td>
			<td style="vertical-align: middle;">
					<input type="button" id="<?=$buttonId;?>" class="faq" value="<?=$arrQuestion[$index];?>" onclick="show('<?=$faqId;?>');">
			</td>
		</tr>
		<tr id="<?=$faqId;?>" style="display: none; min-height: 50px; width: 100%;">
			<td style="padding-bottom: 10px; width: 30px;">
				<?=squareIcon('A', 'redIcon');?>
			</td>
			<td style="background-color: #e7eae7; width: 100%; vertical-align: middle;">
				<div style="padding: 10px;">	
					<?=$arrAnswer[$index];?>
				</div>	
			</td>
		</tr>
<?php	}?> 
	</table>
	<?//=goToPageLocation('top', 'Back to Top');?>
</div>

<?=htmlBottom();?>	