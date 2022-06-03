<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Passive Income Sources : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">
    <?php require_once 'includes/appHeader.php'; ?>
    <?php require_once 'includes/appSidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Passive Income Sources</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item active">Passive Income Sources</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">2022-04-18 ATM</h5>
                            <p>The purpose of this page is to illustrate how some assets produce passive income that will reduce the portfolio withdrawals.</p>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Asset Type</th>
                                        <th scope="col">Current Scenario</th>
                                        <th scope="col">What if Scenario</th>
                                        <th scope="col">Comment</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Social Security</td>
                                        <td><input type="number" class="form-control" placeholder="$30,000"></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                    </tr>
                                    <tr>
                                        <td>Pretend Rental Property</td>
                                        <td><input type="number" class="form-control" placeholder="$25,000"></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Total</td>
                                        <td><input type="number" class="form-control" placeholder="$30,000"></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">Total Income to Offset Portfolio Withdrawals in Retirement</td>
                                        <td><input type="number" class="form-control" placeholder="$30,000"></td>
                                        <td><input type="number" class="form-control" placeholder="$0"></td>
                                        <td><textarea name="" id="" cols="30" rows="1" class="form-control" placeholder="type here.."></textarea></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-lg-6 offset-md-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> </h5>
                            <div id="chartdiv1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main><!-- End #main -->

    <?php require_once 'includes/footer.php'; ?>
    <?php require_once 'scripts/bodyScripts.php'; ?>
</body>

</html>