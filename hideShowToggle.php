<?php include 'inc/header.php' ;?>





<script>
	$().ready(function(){
		$("#hide").click(function(){
			$(".para").hide('show');
		});
		
		$("#show").click(function(){
			$(".para").show("3000");
		});
		
		$("#toggle").click(function(){
			$("p").toggle('5000');
		});
		
	
	});
	


</script>

<button id="hide">Hide</button>
<button id="show">show</button>
<button id="toggle">Toggle</button>
<div class="para">
	<h3>Jquery Js Tutorial</h3>
	<p >Jquery</p>
</div>

<?php include 'inc/footer.php' ;?>










