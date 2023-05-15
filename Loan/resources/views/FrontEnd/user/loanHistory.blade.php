@extends('Frontend.layout.app')
@section('head')
    <title>History</title>
	<style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 10px;
            
		}
        {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Poppins', sans-serif;
	  }
	  body{
		
		background: #88ABFF;
		padding: 1rem;
	  }
	</style>
@endsection

@section('content')

	<h1>History</h1>
	<table>
		<tr>
			<th>Name</th>
			<th>Bank Name</th>
			<th>Amount</th>
			<th>Payemnt Schedule</th>
			<th>Loan Plan</th>
			<th>Interest Rate</th>			
			<th>Payment</th>
		</tr>
		<tr>
			<td>John Doe</td>
			<td>Maybank</td>
			<td>2000$</td>
			<td>04/15/2023</td>
			<td>Personal Loan</td>
			<td>5%</td>
			<td>Payemnt=3000$</td>
		</tr>
		<tr>
			<td>Jane Doe</td>
			<td>Maybank</td>
			<td>2000$</td>
			<td>04/15/2023</td>
			<td>Personal Loan</td>
			<td>5%</td>
			<td>Payment=3000$</td>
		</tr>
		<tr>
			<td>Bob Smith</td>
			<td>Maybank</td>
			<td>2000$</td>
			<td>04/15/2023</td>
			<td>Personal Loan</td>
			<td>5%</td>
			<td>Payemnt=3000$</td>
		</tr>
	</table>
</body>
</html>
@endsection
