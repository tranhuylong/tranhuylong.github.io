<link rel="stylesheet" href="style/desktop.css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="windows">
	<div class="taskbar">
		<div id="start" class="start">S</div>
	</div>
	<div class="desktop">
		<div id="start-side" class="start-side">
			
		</div>		
	</div>
</div>

<script type="text/javascript">
	$(document).on("click", function(e){
		if($(e.target).is("#start")){
			$("#start-side").show();
		}else{
			$("#start-side").hide();
		}
	});	
</script>
