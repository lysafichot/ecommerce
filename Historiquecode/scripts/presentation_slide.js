function beginSlide(mode)
{
	if (mode == 0)
	{
		$("#pst_slides img").each(function(index)
		{
			 $(this).css({left:index * 960});
			 $(this).css({top:0});
			 activatedSlide = 0;
		});
	}
	if (mode == 1)
	{
		$("#pst_slides img").each(function(index)
		{
			 $(this).css({left:0});
			 $(this).css({top:index * 150});
			 activatedSlide = 0;
		});
	}
}

var BulletActivated = 0;
function beginBullets()
{
	var i = 0;

	while (i < $("#pst_slides img").length)
	{
		if (i == 0)
			$("#points").append("<span class='point BulletActivated' id='point" + i + "'></span>");
		else
			$("#points").append("<span class='point' id='point" + i + "'></span>");
		++i;
	}
}

function SliderLoaded()
{
	beginSlide(0);
	beginBullets();
}
SliderLoaded();

var sliderMode = 0;
$("#sliderMode").change(function()
{
	var mode = $(this).find("option:selected").val();
	beginSlide(mode);
	sliderMode = mode;
});

function setPoint()
{
	document.getElementsByClassName("point BulletActivated")[0].className = "point";
	document.getElementsByClassName("point")[activatedSlide].className = "point BulletActivated";
}

$(function()
{
	setInterval(secondSlide, 5000);
});

var activatedSlide = 0;
function secondSlide(pos)
{
	if (!pos)
	{
		if (activatedSlide == $("#pst_slides img").length - 1)
			activatedSlide = 0;
		else
			++activatedSlide;
	}
	if (sliderMode == 0)
	{
		$("#pst_slides img").each(function(index)
		{
			var pst_slide = $("#pst_slides img")[index];
			pst_slide.style.left = ((index - activatedSlide) * 960) + "px";
		});
	}
	else if (sliderMode == 1)
	{
		$("#pst_slides img").each(function(index)
		{
			var pst_slide = $("#pst_slides img")[index];
			pst_slide.style.top = ((index - activatedSlide) * 150) + "px";
		});
	}
	else if (sliderMode == 2)
	{
		
	}
	if (activatedSlide == $("#pst_slides img").length)
		activatedSlide = 0;
	setPoint();
}

$(function click()
{
	$("#gaucheArrow").click(function()
	{
		if (activatedSlide == 0)
			activatedSlide = $("#pst_slides img").length - 1;
		else
			--activatedSlide;
		secondSlide(1);
	});

	$("#droiteArrow").click(function()
	{
		if (activatedSlide == $("#pst_slides img").length - 1)
			activatedSlide = 0;
		else
			++activatedSlide;
		secondSlide(1);
	});

	$(".point").click(function()
	{
		activatedSlide = $(this).index();
 		secondSlide(1);
	});

});