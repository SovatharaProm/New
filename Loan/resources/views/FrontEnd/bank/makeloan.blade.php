@extends ('Frontend.layout.app')
@section('head')
<title>Make Loan</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section ('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Making Loans</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group py-3">
                                <label for="schedule">Payment Schedule</label>
                                <select id="schedule" name="schedule" class="form-control" id="schedule" required>
                                    <option selected>Choose...</option>
                                    <option value="1">Personal Loan</option>
                                    <option value="2">Business Loan</option>
                                    <option value="3">Student Loan</option>
                                    <option value="4">Overseas Worker Loan</option>
                                    <option value="5">Pensioner Loan</option>
                                </select>
                            </div>
                            <div class="form-group py-3">
                                <label for="loanID">Loan#</label>
                                <input type="text" class="form-control" id="loanID" maxlength="8" placeholder="#1102030" name="loanID" required>
                            </div>

                            <!--Information Required for Loans-->
                            <div style="background-color: #D3D3D3; padding: 5px;">
                                <p>Loan Terms (required fields)</p>
                            </div>

                            <div class="form-group py-3">
                                <label for="amount">Principle Amount</label>
                                <input type="number" class="form-control" id="amount" min="0" step="0.01" placeholder="Principle Amount" name="amount" required>
                            </div>
                            <div class="form-group py-3">
                                <label for="date">Loan Release Date</label>
                                <input type="date" class="form-control" id="date" placeholder="mm/dd/yyyy" name="date" required>
                            </div>

                            <!--Interest Rate-->
                            <div class="red-text" style="border:10px;">
                                <strong style="color: red">Interest:</strong>
                            </div>
                            <div class="form-inline justify-content-center">
                                <div class="form-group col-md-4">
                                    <label for="interestRate" style="padding-right:30px;">Loan Interest% </label>
                                    <input type="text" class="form-control" id="interestRate" placeholder="%" required>
                                </div>
                                <div style="display:flex; justify-content: space-evenly">-</div>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <select style="width:150px;" id="schedule" name="schedule" class="form-control" id="schedule" required>
                                        <option selected>Choose..</option>
                                        <option value="1">Per Day</option>
                                        <option value="2">Per Week</option>
                                        <option value="3">Per Month</option>
                                        <option value="4">Per Year</option>
                                    </select>
                                </div>
                            </div>

                            <!--Loan Duration-->
                            <div class="red-text" style="border:10px;">
                                <strong style="color: red">Duration:</strong>
                            </div>
                            <div class="form-inline justify-content-center">
                                <div class="form-group col-md-4">
                                    <label for="duration" style="padding-right:30px;">Loan Duration </label>
                                    <select style="width:206px" id="duration" name="duration" class="form-control" required>
                                        <option selected>Choose..</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    </select>
                                </div>
                                <div style="display:flex; justify-content: space-evenly">-</div>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <select style="width:150px;" id="duration" name="duration" class="form-control" id="duration" required>
                                        <option selected>Choose..</option>
                                        <option value="1">Days</option>
                                        <option value="2">Weeks</option>
                                        <option value="3">Months</option>
                                        <option value="4">Years</option>
                                    </select>
                                </div>
                            </div>

                            <!--Repayments-->
                            <div class="red-text" style="border:10px;">
                                <strong style="color: red">Repayments:</strong>
                            </div>
                            <div class="form-row d-flex justify-content-center">
                                <label for="repayCycle">Repayment Cycle</label>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <select style="width:150px;" id="repayCycle" name="repayCycle" class="form-control" required>
                                        <option selected>Choose..</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Biweekly</option>
                                        <option value="4">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-row d-flex justify-content-center">
                                <label for="#">Number of Repayment</label>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <input type="number" min="1" max="100" id="numofRepayment" name="numofRepayment" required>
                                </div>
                            </div>

                            <!--Loan Fees Information-->
                            <div style="background-color: #D3D3D3; padding: 5px;">
                                <p>Loan Fees (optional)</p>
                            </div>
                            <div class="form-row d-flex justify-content-center">
                                <label for="fees">Processing Fee% </label>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <input type="text" id="fees" name="fees" placeholder="Percentage">
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-center">
                                <label for="insurance">Insurance Fees</label>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <input type="text" id="insurance" name="insurance" placeholder="Fixed Amount">
                                </div>
                            </div>

                            <!--Other-->
                            <div style="background-color: #D3D3D3; padding: 5px;">
                                <p>Other (optional)</p>
                            </div>
                            <div class="form-row d-flex justify-content-center">
                                <label for="description">Description</label>
                                <div class="form-group col-md-4" style="margin-left: 10px;">
                                    <textarea id="description" name="description" rows="5" cols="50" maxlength="250"></textarea>
                                </div>
                            </div>
                            <div class="form-row d-flex justify-content-center">
                                <label for="files">Loan Files (docs,pdf,image)</label>
                                <div class="mb-3" style="margin-left: 10px;">
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                            </div>
                        </div>
                </div>
                <br>
                <div class="card-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection