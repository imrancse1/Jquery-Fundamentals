<?php include "inc/header.php";?>
<?php echo"Ajax Post Method";?><hr/>

<script>
$(document).ready(function(){
//single value
	<!---var personJson= {
		//"name":"imran",
		//"skill":"laravel",
		//"email":"p@gmail.com"
	//};
	//var result = "";
	//result+= "Name: "+personJson.name+"<br/>";
	//result+= "Skill :"+personJson.skill+"<br/>";
	//result+= "Email :"+personJson.email;
	//$("#state").html(result);
//});-->

// Multiple value
//var personJson= [{
		//"name":"imran",
		//"skill":"laravel",
		//"email":"p@gmail.com"
	//},
	//{
		//"name":"imran",
		//"skill":"laravel",
		//"email":"p@gmail.com"
	//}
	//];
	
	//$("#state").html(personJson[0].skill);
//});

var personJson= {
	
	"imran" : {
		"name":"imran",
		"skill":"laravel",
		"email":"p@gmail.com"
	},
	"prince": {
		"name":"prince",
		"skill":"laravel",
		"email":"prince@gmail.com"
	}
	};
	
	$("#state").html(personJson.prince.name);
});

<!--custom function-->


</script>

<div class="paras">
<div id="state"></div>
	
</div>



<?php include "inc/footer.php";?>