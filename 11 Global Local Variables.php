<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<script type="text/javascript">
			var global_variable = "abc";

			function disp(){
				var local_variable = "xyz";
				document.write(global_variable + "<br/>");//will print
				document.write(local_variable + "<br/>");/will print
			}
			disp();
			
			document.write(global_variable + "<br/>");//will print
			document.write(local_variable + "<br/>");//will not print
//output
//abc
//xyz
//abc
		</script>
	</body>
</html>