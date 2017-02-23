<html lang="en">
<head>
	<title>Import - Export Laravel 5</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
 <style type="text/css">
	table td, table th{
		border:1px solid black;
	}
</style>
</head>
<body>
<div class="container">

	<br/>
	<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>

	<table>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Name</th>
		</tr>
		@foreach ($items as $key => $item)
		<tr>
			<td>{{ ++$key }}</td>
			<td>{{ $item->id }}</td>
			<td>{{ $item->name }}</td>
		</tr>
		@endforeach
	</table>
</div>
</body>
</html>


