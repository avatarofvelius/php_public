<?php function display_content_vue() { ?>
	<!-- Vue 2 Application -->
	<div id="app" v-text="message"></div>

	<script src="_library/vue.js"></script>
	<script type="text/javascript">
		var app = new Vue({
		  el: '#app',
		  data: {
		    message: 'Hello from the Vue Component.'
		  }
		})
	</script>
	<!-- End of Vue Application -->
<?php } ?>
