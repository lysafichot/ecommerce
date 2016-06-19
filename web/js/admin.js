var domAdmin = {


	init:function() {
		this.toggles();
		$('.hidden').hide();


	},

	toggles: function() {
		$('.name_category').click(function() {

			$(this).parent().next('.childrens_category').toggle();
		});
	}
}

$( document ).ready(function() {
	domAdmin.init();

});
