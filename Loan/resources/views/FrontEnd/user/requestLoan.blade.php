@extends('Frontend.layout.app')
@section('head')
<title>Loan App</title>
<style>
    body {
        font-family: 'poppin', 'Hanuman', "fontawesome", sans-serif;
    }

    .form-heading-line {
        color: red;
        padding-left: 5px;
    }

    .form-heading-line::after {
        content: '';
        width: 100%;
        height: 1px;
        display: block;
        background: #a7a7a7;
    }
</style>
@endsection

@section('content')

<body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registration Loan Online</h3>
                            <p>Please fill in all information below, which will help us better understand and support your request.</p>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST">
                            @csrf
                            <div class="card-body">
                                <h3 class="form-heading-line">CUSTOMER INFORMATION</h3>
                                <div class="form-group py-3">
                                    <label for="email">Name</label>
                                    <input type="email" class="form-control" id="email" placeholder="Joe" name="email">
                                </div>
                                <div class="form-group py-3">
                                    <label for="phone">Mobile Phone</label>
                                    <input type="tel" class="form-control" id="phone" placeholder="0123456789" name="phone">
                                </div>
                                <div class="form-group py-3">
                                    <label for="email">Email Address</label>
                                    <input type="email" readonly class="form-control" id="email" value="exmaple@mail.com" name="email">
                                </div>


                                <!--Registration Loan Information-->
                                <h3 class="form-heading-line">REGISTRATION LOAN INFORMATION</h3>
                                <div class="form-group py-3">
                                    <label for="email">Loan#</label>
                                    <input type="email" readonly class="form-control" id="email" placeholder="123122" name="email">
                                </div>
                                <div class="form-group py-3">
                                    <label for="amount">Loan Amount</label>
                                    <select id="amount" name="amount" class="form-control">
                                        <option selected> Select Loan Amount </option>
                                        <option value="1">$5,000<< /option>
                                        <option value="2">$5,000-$20,000</option>
                                        <option value="3">$2,000-$50,000</option>
                                        <option value="4">>$50,000</option>
                                    </select>
                                </div>
                                <div class="form-group py-3">
                                    <label for="income">Source Income</label>
                                    <select id="income" name="income" class="form-control">
                                        <option selected>Select Source Income</option>
                                        <option value="1">Salary</option>
                                        <option value="2">Home Business</option>
                                        <option value="3">Business Owner</option>
                                        <option value="4">Rental Income</option>
                                        <option value="5">Other Income</option>
                                    </select>
                                </div>
                                <div class="form-group py-3">
                                    <label for="schedule">Payment Schedule</label>
                                    <select id="schedule" name="schedule" class="form-control" id="schedule">
                                        <option selected>Choose...</option>
                                        <option value="1">Weekly</option>
                                        <option value="2">Biweekly</option>
                                        <option value="3">Monthly</option>
                                    </select>
                                </div>
                                <div class="form-group py-3">
                                    <label for="pin">Verification Pin</label>
                                    <input type="password" class="form-control" name="pin" id="pin" minlength="6" maxlength="6">
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

@endsection