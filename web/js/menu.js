var display = {


	eachClass: document.querySelectorAll(".name_category"),
	eachClassSC: document.querySelectorAll(".medias_category"),

	init: function() {
		this.myToggle();
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
	},

	myToggle: function() {
		for(var i = 0; i < this.eachClass.length; i++)
		{
			this.eachClass[i].setAttribute("id", "parent" + i);
			this.eachClass[i].setAttribute("data-id", i);
		}
		for(var i = 0; i < this.eachClassSC.length; i++)
		{
			this.eachClassSC[i].setAttribute("id", "children" + i);
		}
		$("h4[id^=parent]").click(function(){
			var id = $(this).attr('data-id');
			$('#children' + id).toggle("slow");
		});
	}
}

document.addEventListener('DOMContentLoaded', function(){
	display.init();
}, false)