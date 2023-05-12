@extends ('Frontend.layout.app')
@section('head')
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Borrowed Loan</title>
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link href="{{ asset('assets/styles/bootstrap.min.css') }}" rel="stylesheet">
<script src="{{ asset('assets/scripts/bootstrap.min.js') }}" defer></script>
@endsection

@section('content')
<div class="container mx-auto">
    <div class="table-responsive-sm">
        <h3>Loan Information</h3>
        <table class="table table-bordered table-hover">
            <thead class="bg-success text-white">
                <tr>
                    <th>Loan#</th>
                    <th>From</th>
                    <th>Loan Amount ($)</th>
                    <th>Loan Type</th>
                    <th>Interest Rate</th>
                    <th>Due Date</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>ABA Bank</td>
                    <td>50,000</td>
                    <td>Cash</td>
                    <td>7%</td>
                    <td>30/05/2023</td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Sacombank</td>
                    <td>75,000</td>
                    <td>Cash</td>
                    <td>5%</td>
                    <td>30/06/2023</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection