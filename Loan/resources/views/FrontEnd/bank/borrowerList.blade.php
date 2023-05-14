@extends('Frontend.layout.app')
@section('head')
    <title>Borrower</title>
@endsection

@section('content')
<section>
    <div class="container mx-auto">
        <div class="table-responsive-sm">
            <h3>Borrower Information</h3>
            <table class="table table-bordered table-hover">
                <thead class="bg-success text-white">
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Loan#</th>
                        <th>Loan Amount ($)</th>
                        <th>Loan Type</th>
                        <th>Interest Rate</th>
                        <th>Payment Schedule</th>
                        <th>Due Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>username</td>
                        <td>example@gmail.com</td>
                        <td>0123456789</td>
                        <td>123</td>
                        <td>1000</td>
                        <td>Business</td>
                        <td>7%</td>
                        <td>Weekly</td>
                        <td>12-01-2023</td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td>example@gmail.com</td>
                        <td>0123456789</td>
                        <td>123</td>
                        <td>1000</td>
                        <td>Business</td>
                        <td>7%</td>
                        <td>Weekly</td>
                        <td>12-01-2023</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection