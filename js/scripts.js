$(function(){
	$('dl dd').hide();
	$('dl').on('click', 'dt', function(evt){
		$('+ dd', this).slideToggle('fast');
		evt.preventDefault();
	});
});