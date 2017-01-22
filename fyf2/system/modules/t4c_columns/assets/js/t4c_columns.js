(function ($) {
	$(document).ready(function(){
		$('.t4c_column_stop').closest('li').addClass('t4c_column_stop_settings');
		$('.t4c_column_start').closest('li').addClass('t4c_column_start_settings');
		$('.t4c_wrapper_stop').closest('li').addClass('t4c_wrapper_stop_settings');
		$('.t4c_wrapper_start').closest('li').addClass('t4c_wrapper_start_settings');
		$('.t4c_column_start_settings').nextUntil('.t4c_column_stop_settings').addClass('t4c_column_child');
	});
})(jQuery);

