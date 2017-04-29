<?php function display_content_canvas() { ?>
	<!-- Canvas Application -->
	<canvas id="my_canvas"></canvas>

	<script type="text/javascript">
		var c = document.getElementById("my_canvas");
		var ctx = c.getContext("2d");
		ctx.font = "18px Yu Gothic UI";
		ctx.fillText("Hello World,",20,30);
		ctx.fillText("This is Canvas.",20,50);
	</script>
	<!-- End of Canvas Application -->
<?php } ?>
