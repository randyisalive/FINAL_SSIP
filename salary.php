<?php
include('head.php');
include('db.php');
?>

<?php include('navbar.php'); ?>
<div class="conainer mt-5 mb-5">
    <div class="text-center mb-4">
        <h1>Salary Calculator</h1>

    </div>
    <div class="row">
        <div class="col">

        </div>
        <div class="col-5">
            <form action="" method="post" class="form-control">
                <div class=" container">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col">
                                <input type="number" name="salary_amount" class="form-control">

                            </div>
                            PER
                            <div class="col">
                                <select name="time_pay" id="" class="form-control">
                                    <option value="hour">Hour</option>
                                    <option value="day">Day</option>
                                    <option value="week">Week</option>
                                </select>


                            </div>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Hours per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in hours" class="form-control">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Days per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in hours" class="form-control">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Hours per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in hours" class="form-control">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Hours per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in hours" class="form-control">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Hours per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in hours" class="form-control">

                        </div>

                    </div>
                    <div class="text-center mt-5 mb-5">
                        <input type="submit" class="btn btn-success" value="Calculate >">

                    </div>

                </div>
            </form>

        </div>
        <div class="col">

        </div>

    </div>


</div>
<?php include('footer.php');
?>