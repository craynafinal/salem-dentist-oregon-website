<?php
	require_once('methods.php');
		
	echo htmlTop('Salem Dentist of Oregon - New Patient Coupon');
			
	include_once('googleAnalytics.php');
	
	echo content()
		.htmlBottom();

	function content()
	{
		$welcomeMsg = 'Coupons';
		$arrCoupon = couponContent();
		
		$ret = "<body style='overflow-x:hidden; overflow-y:hidden;'>
					<div id='popupWrapper'>
						<div class='green20'>$welcomeMsg</div>
						$arrCoupon
						<div style='float: left;'>
							<a href='#' onclick='printWindow()' class='normalLink'><img src='sources/imgs/icon_printer.png'/>&nbsp; Print This Page</a>
						</div>
						<div style='float: right; margin-right: 20px;'>
							<a href='#' onclick='closeWindow()' class='normalLink'><img src='sources/imgs/icon_teeth_red.png'/>&nbsp; Close</a>
						</div>
					</div>
				</body>";
			
		return $ret;		
	}

?>

<script type='text/javascript'>
	function closeWindow()
	{
		myWindow = window.close();
		return false;
	}
	
	function printWindow()
	{
		myWindow = window.print();
		return false;				
	}
</script>