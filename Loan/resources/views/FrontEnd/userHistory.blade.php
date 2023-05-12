@extends('Frontend.layout.app')
@section('head')
    <title>History</title>
@endsection

@section('content')

<head>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1>History</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Lend Info</th>
			<th>Payment</th>
		</tr>
		<tr>
			<td>John Doe</td>
			<td>1000$</td>
			<td>555-1234</td>
		</tr>
		<tr>
			<td>Jane Doe</td>
			<td>2000$</td>
			<td>555-5678</td>
		</tr>
		<tr>
			<td>Bob Smith</td>
			<td>2000$</td>
			<td>555-9012</td>
		</tr>
	</table>
</body>
</html>

@endsection
