var siteaddrass = location.protocol+'/'+'/'+location.host+'/';

var SendOrder = function(e) {
	e.preventDefault();
	var form = $(this);
	$.ajax({
		url: siteaddrass+'sendorder',
		dataType: 'html',
		type: 'POST',
		async: true,
		data: form.serialize(),
		success: function(response) {
			alert(response);
			var result = $.parseJSON(response);
			if (result.error) {
				alert(result.errorcode);
			} else {
				alert('Заказ успешно отправлен');
				location.reload();
			}
		}
	});
}

var ShowOrderForm = function() {
	$('#OrderPopUp').css({'display':'block'});
}

$(document).ready(function() {
	$('#GameBuy').bind('click', ShowOrderForm);
	$('#OrderForm').bind('submit', SendOrder);
});