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
            <form action="salary.php" method="post" class="form-control">
                <div class=" container">
                    <div class="container">
                        <div class="row mt-5">
                            <div class="col-1">
                                <p>IDR</p>

                            </div>
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
                            <input type="number" placeholder="in hours" class="form-control" name="hour">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Days per Week</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="in days" class="form-control" name="days">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Holidays per Year</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="" class="form-control" name="holidays">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="container mt-2">
                                <p>Vacation Days per Year</p>

                            </div>

                        </div>

                        <div class="col">
                            <input type="number" placeholder="" class="form-control" name="vacations">

                        </div>

                    </div>

                    <div class="text-center mt-5 mb-5">
                        <input type="submit" class="btn btn-success" value="Calculate >" name="submit">

                    </div>

                </div>
            </form>

        </div>
        <div class="col">

        </div>

    </div>
    <?php
    if (isset($_POST['submit'])) {
        include('process_salary.php');
        echo '<div class="container mt-5 mb-5">
        <div class="text-center">
            <h1>Result</h1>
        </div>
        <div class="text-center">
            <table class="table table-bordered">
                <thead>
                    <tr>

                        <th>-----</th>
                        <th>Unadjusted</th>
                        <th>Holidays & Vacation Days Adjusted</th>
                    </tr>
                </thead>
                <tbody class="table-group-devider">
                    <tr>

                        <td>Hourly: </td>
                        <td>$';
        echo $hourly;
        echo '</td>
                    </tr>
                    <tr>
                        <td>Daily: </td>
                        <td>$';
        echo $daily;
        echo  '</td>
                    </tr>
                    <tr>
                        <td>Weekly: </td>
                        <td>$';
        echo $weekly;
        echo '</td>
                    </tr>
                    <tr>
                        <td>Bi - Weekly: </td>
                        <td>$';
        echo $bi_weekly;
        echo '</td>
                    </tr>
                </tbody>

            </table>
        </div>


    </div>';
    }

    ?>


</div>
<?php include('footer.php');
?>