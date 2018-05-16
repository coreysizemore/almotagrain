$(document).ready(function() {
	
	if($('#Field7_1').is(':checked')) { 
					
		$('#phone_text').hide();
		
	}
	
	
	$('#Field7_1').click(function() {
	
		if($('#Field7_1').is(':checked')) { 
			
			$('#phone_text').hide();
		
		}
	
	});
	
	$('#Field7_0').click(function() {
	
		if($('#Field7_0').is(':checked')) { 
			
			$('#phone_text').show();
		
		}
	
	});
	
	
	if($('#Field8_4').is(':checked')) { 
					
		$('#phone_text').show();
		
	} else {
		
		$('#Field8_other').hide();
		
	}
	
	
	$('#Field8_4').click(function() {
	
		if($('#Field8_4').is(':checked')) { 
			
			$('#Field8_other').show();
		
		}
	
	});
	
	$('#Field8_0, #Field8_1, #Field8_2, #Field8_3').click(function() {
	
		if($('#Field8_0, #Field8_1, #Field8_2, #Field8_3').is(':checked')) { 
			
			$('#Field8_other').hide();
		
		}
	
	});
	

	
		
});
