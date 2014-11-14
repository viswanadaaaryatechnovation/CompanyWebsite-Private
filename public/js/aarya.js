function sendsubsciber(){
	$.ajax({
				type: 'post',
				cache: false,
				url: 'http://aaryatechnovation.com/public/subsribe',
				dataType: 'html',
				data: $('form#subscribers').serialize(),
				beforeSend: function() { 
					//$("#validation-errors").hide().empty(); 
				},
				success: function(data) {
					if(data == 'success')
					{
						
						//alert('You are scribe successfully');
						$('div.subscribe').html('<span>Thank You</span>');

					} else {
					}
				},
				error: function(xhr, textStatus, thrownError) {
					alert('Something went to wrong.Please Try again later...');
				}
			});
}