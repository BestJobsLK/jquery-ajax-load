<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jQuery AJAX load Method</title>
</head>
<body>
	<h1>jQuery AJAX load Method example</h1>
	<button>Load Content</button>
	<div class="content">
		
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>	

		$(document).ready(function(){
			$('button').click(function(){
				$('.content').load('content.php p.display');
			});
		});

	</script>
</body>
</html>