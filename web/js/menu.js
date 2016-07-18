var display = {

	init: function() {
		this.showMyDiv();
	},

	showMyDiv: function() {

		$("a[id^=listDiv]").mouseover(function(){
			var id = $(this).data('id');
			$('#div' + id).show();
		});

		$("a[id^=listDiv]").mouseout(function(){
			var id = $(this).attr('data-id');
			$('#div' + id).hide();
		});

		$("div[id^=div]").mouseover(function(){
			var id = $(this).data('id');
			$('#div' + id).show();
		});

		$("div[id^=div]").mouseout(function(){
			var id = $(this).attr('data-id');
			$('#div' + id).hide();
		});
	}
}

document.addEventListener('DOMContentLoaded', function(){
	display.init();
}, false)