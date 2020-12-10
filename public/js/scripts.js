$('.list-hours li').eq(new Date().getDay()).addClass('current-day');

if (new Date().getDay() == 0) { //Sunday
	$('.status').text('We\'re close');
}
else {
	$('.status').text('We\'re open today');
}

$('#contactForm').submit(function(e){
	e.preventDefault();
	var form = $(this);

	var form_control = form.find('.form-control');

	for (var i=0; i<form_control.length;i++) {
		var ctrl = $('#'+form_control[i].id);
		if (ctrl.val().trim() == '') {
			$('#error-'+form_control[i].id).text(ctrl.data('validation-required-message'));
			$('#error-'+form_control[i].id).css({'visibility': 'visible', 'opacity': '1', 'transition': 'visibility 0.8s linear,opacity 0.8s linear'});
			$('#error-'+form_control[i].id).css({'height': '20px', 'transition': '0.8s'});
		}
		else {
			$('#error-'+form_control[i].id).css({'visibility': 'hidden', 'opacity': '0', 'transition': 'visibility 0.8s linear,opacity 0.8s linear'});
			$('#error-'+form_control[i].id).css({'height': '0px', 'transition': '0.8s'});
		}
	}
});