$('#register').on('submit', funtion(e) {
	e.preventDefault();
	var details = $('#register').serialize();
	 $.post('register.php', details, function(data) {
		  $('#register').html(data);
	 });	  
});