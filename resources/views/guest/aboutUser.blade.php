<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,th{
			border : solid 1px black;
			padding:5px;
			border-collapse: collapse:;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Name</th>
			<th>Lastname</th>
			<th>Address</th>
			<th>Biography</th>
			<th>Birthday</th>
		</tr>
		<tr>	
			@foreach ($newdata as $data)
				<td>{{$data}}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>