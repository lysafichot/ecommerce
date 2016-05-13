var BG =
{
	canvas: undefined,
	ctx: undefined,
	window_w: undefined,
	window_h: undefined,
	cursor_x: undefined,
	cursor_y: undefined,

	init: function()
	{
		this.canvas = document.getElementById("bg_canvas");
		this.ctx = this.canvas.getContext("2d");
		this.update();
		this.draw(this.window_w / 2, this.window_h / 2);
	},

	// Met a jour la taille du canvas en fonction de la taille de la fenetre
	// Fonction appelee a l'initialisation et au resize
	update: function()
	{
		this.window_w = window.innerWidth - 1;
		this.window_h = window.innerHeight - 1;
		this.canvas.width = this.window_w;
		this.canvas.height = this.window_h;
	},

	// Dessine un nouveau rendu
	// x : la position du curseur en x
	// y : la position du curseur en y
	// Fonction appelee au mousemove
	draw: function(x, y)
	{
		this.cursor_x = x;
		this.cursor_y = y;
		this.ctx.strokeStyle = "#33ff55";
		this.ctx.clearRect(0, 0, this.window_w, this.window_h);
		this.ctx.beginPath();

		this.line_to_cursor(0, 0);
		this.line_to_cursor(0, this.window_h);
		this.line_to_cursor(this.window_w, 0);
		this.line_to_cursor(this.window_w, this.window_h);

		this.line_to_cursor(this.window_w / 2, 0);
		this.line_to_cursor(0, this.window_h / 2);
		this.line_to_cursor(this.window_w, this.window_h / 2);
		this.line_to_cursor(this.window_w / 2, this.window_h);

		this.ctx.stroke();
	},

	// Dessine un trait de (start_x : start_y) a la position du curseur
	line_to_cursor: function(start_x, start_y)
	{
		this.ctx.moveTo(start_x, start_y);
		this.ctx.lineTo(this.cursor_x, this.cursor_y);
	}
}

window.onload = function()
{
	BG.init();
}

window.onresize = function()
{
	BG.update();
}

window.onmousemove = function(e)
{
	BG.draw(e.clientX, e.clientY);
}
