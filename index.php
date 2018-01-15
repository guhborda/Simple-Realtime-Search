<!DOCTYPE html>
<html>
<head>
	<title>search</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="POST"><input type="text" name="search" id="search"></form>
	<div class="result"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#search").keyup(function(){
			var txt = $(this).val();

			if(txt != ''){
				$(".result").html('');
				$.ajax({
					method:"POST",
					dataType:"text",
					url:"search.php",
					data:{search:txt},
					success:function(response){
						$(".result").html(response);
					}
				});
			}else{
				$(".result").html('');
			}
			return false;
		});
	});
</script>
</body>
</html>