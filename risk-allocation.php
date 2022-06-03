<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Risk Allocation : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">
    <?php require_once 'includes/appHeader.php'; ?>
    <?php require_once 'includes/appSidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Risk Allocation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item active">Risk Allocation</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title">Term on Mikey</h5>
                            <table class="table nowrap table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col">Asset Name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Risk Level</th>
                                        <th scope="col">Time Horizon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Totals</td>
                                        <td><input type="number" class="form-control" placeholder="$2,530,001"></td>
                                        <td><input type="text" class="form-control"></td>
                                        <td><input type="text" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td>Cash</td>
                                        <td><input type="number" class="form-control" placeholder="$0"></td>
                                        <td><span class="badge d-block bg-success">2</span></td>
                                        <td><span class="badge d-block bg-primary">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Social Security</td>
                                        <td><input type="number" class="form-control" placeholder="$1"></td>
                                        <td><span class="badge d-block bg-success">2</span></td>
                                        <td><span class="badge d-block bg-primary">40</span></td>
                                    </tr>
                                    <tr>
                                        <td>cash</td>
                                        <td><input type="number" class="form-control" placeholder="$40,000"></td>
                                        <td><span class="badge d-block bg-success">2</span></td>
                                        <td><span class="badge d-block bg-primary">1</span></td>
                                    </tr>
                                    <tr>
                                        <td>Personal Home</td>
                                        <td><input type="number" class="form-control" placeholder="$1,000,000"></td>
                                        <td><span class="badge d-block bg-warning">4</span></td>
                                        <td><span class="badge d-block bg-primary">25</span></td>
                                    </tr>
                                    <tr>
                                        <td>IRA's</td>
                                        <td><input type="number" class="form-control" placeholder="$1,000,000"></td>
                                        <td><span class="badge d-block bg-warning">7</span></td>
                                        <td><span class="badge d-block bg-primary">20</span></td>
                                    </tr>
                                    <tr>
                                        <td>Business</td>
                                        <td><input type="number" class="form-control" placeholder="$1,000,000"></td>
                                        <td><span class="badge d-block bg-danger">7</span></td>
                                        <td><span class="badge d-block bg-primary">10</span></td>
                                    </tr>
                                    <tr>
                                        <td>Bitcoin</td>
                                        <td><input type="number" class="form-control" placeholder="$1,000,000"></td>
                                        <td><span class="badge d-block bg-danger">11</span></td>
                                        <td><span class="badge d-block bg-primary">5</span></td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
                <div class="col-lg-7 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Relative Reward/Risk</h5>
                            <div id="chartdiv2"></div>
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