@extends('Frontend.layout.app')
@section('head')
    <title>Active Loans</title>
@endsection

@section('content')
<section>
    <div class="container mx-auto">
        <div class="table-responsive-sm">
            <h3>Loan Information</h3>
            <table class="table table-bordered table-hover">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Loan#</th>
                        <th>Bank</th>
                        <th>Remaining Amount ($)</th>
                        <th>Loan Plan</th>
                        <th>Interest Rate</th>
                        <th>Payment Schedule</th>
                        <th>Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>ABA Bank</td>
                        <td>50,000</td>
                        <td>Business Plan</td>
                        <td>7%</td>
                        <td>30/05/2023</td>
                    </tr>
                    <tr>
                        <td>002</td>
                        <td>ABA Bank</td>
                        <td>75,000</td>
                        <td>Business Plan</td>
                        <td>5%</td>
                        <td>30/06/2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection