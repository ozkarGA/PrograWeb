
$(document).ready(function(){
	$('button').click(function(){
		
		if($(this).html() == '='){
			$('form').submit();
		}else{
			$('#valor1').val($('#valor1').val() + $(this).html());	
		}	
		
	});
});
