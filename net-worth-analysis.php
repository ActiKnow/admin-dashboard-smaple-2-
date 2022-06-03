<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Net Worth Analysis : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">
    <?php require_once 'includes/appHeader.php'; ?>
    <?php require_once 'includes/appSidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Net Worth Analysis</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item active">Net Worth Analysis</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <div class="col-lg-5">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <table class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Asset Type</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Business</td>
                                        <td><input type="number" class="form-control" placeholder="$1000000.00"></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>Cash</td>
                                        <td><input type="number" class="form-control" placeholder="$140000.00"></td>
                                        <td><span class="badge bg-warning">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>Insurance</td>
                                        <td><input type="number" class="form-control" placeholder="$1.00"></td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                        <td>Marketable Securities</td>
                                        <td><input type="number" class="form-control" placeholder="$410,325.00"></td>
                                        <td><span class="badge bg-success">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td><input type="number" class="form-control" placeholder="$30,000.00"></td>
                                        <td><span class="badge bg-danger">Rejected</span></td>
                                    </tr>
                                    <tr>
                                        <td>Real Estate</td>
                                        <td><input type="number" class="form-control" placeholder="$1,000,000.00"></td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>

                <div class="col-lg-7 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Net Worth ~ $ 2.6MM</h5>
                            <div id="chartdiv"></div>
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