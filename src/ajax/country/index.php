<html>

<head>
<title>Country Ajax</title>
<script src="../../../js/jquery-1.11.3.min.js"></script>
<script>
	$(document).ready(function(){
				
		$("#selectCountry").change(function(){
			var id = $(this).val();
			$.ajax({
				type:"POST",
				url:"retrieve.php",
				data:{id:id},
				success: function(data){
					var output = "";
					var state = JSON.parse(data);
					output+="<select id='selectState'>";
					$.each(state,function(i,row){
						output+="<option value='"+row.state_id+"'>"+row.state+"</option>";
					});
					output+="</select>";
					$("#stateWrapper").html(output);
					
				},
				error: function(e){
					alert(e);
				}
			});		
		});
		
	});
</script>
</head>

<body>
<div>
	<select id="selectCountry">
		<option value="1">Indonesia</option>
		<option value="2">Malaysia</option>
		<option value="3">Singapore</option>
	</select>
</div>
<div id="stateWrapper">
	
</div>
</body>
</html>