<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>Portfolio Longevity : McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">
    <?php require_once 'includes/appHeader.php'; ?>
    <?php require_once 'includes/appSidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Portfolio Longevity - How long will your assets Last?</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item active">Portfolio Longevity</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <div class="col-md-5">
                    <div class="col-lg-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <table class="table table-borderless datatable">
                                    <h5 class="bg-project">How much do you need for how long?</h5>
                                    <thead>
                                        <!-- <tr>
                                        <th scope="col">Asset Type</th>
                                        <th scope="col">Amount</th>                                        
                                    </tr> -->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Age Now:</td>
                                            <td><input type="number" class="form-control" placeholder="51"></td>
                                        </tr>
                                        <tr>
                                            <td>Desired Retirement Age:</td>
                                            <td><input type="number" class="form-control" placeholder="70"></td>
                                        </tr>
                                        <tr>
                                            <td>End of Plan</td>
                                            <td><input type="number" class="form-control" placeholder="86"></td>
                                        </tr>
                                        <tr>
                                            <td>Years spent in Retirement</td>
                                            <td><input type="number" class="form-control" placeholder="16"></td>
                                        </tr>
                                        <tr>
                                            <td>Annual Income Goal in Retirement</td>
                                            <td><input type="number" class="form-control" placeholder="$2,000,000"></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <table class="table table-borderless datatable">
                                    <h5 class="bg-project">How much do you have and how will it grow?</h5>
                                    <thead>
                                        <!-- <tr>
                                        <th scope="col">Asset Type</th>
                                        <th scope="col">Amount</th>                                        
                                    </tr> -->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Net Worth:</td>
                                            <td><input type="number" class="form-control" placeholder="$3,397,001"></td>
                                        </tr>
                                        <tr>
                                            <td>Total Assets available to use for future income:</td>
                                            <td><input type="number" class="form-control" placeholder="$2,180,001"></td>
                                        </tr>
                                        <tr>
                                            <td>Estimate of Nominal Return of Assets Used in Plan (calculated from All the Money as blended average)</td>
                                            <td><input type="number" class="form-control" placeholder="6.43%"></td>
                                        </tr>
                                        <tr>
                                            <td>Assumed Inflation Rate</td>
                                            <td><input type="number" class="form-control" placeholder="3.50%"></td>
                                        </tr>
                                        <tr>
                                            <td>Total Annual amount from Passive Income Sources</td>
                                            <td><input type="number" class="form-control" placeholder="$30,000"></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <table class="table table-borderless datatable">
                                    <h5 class="bg-project">Annual Change to Your Portfolio</h5>
                                    <thead>
                                        <!-- <tr>
                                        <th scope="col">Asset Type</th>
                                        <th scope="col">Amount</th>                                        
                                    </tr> -->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Initial Annual Withdrawal on your Portfolio</td>
                                            <td><input type="number" class="form-control" placeholder="-$170,000"></td>
                                        </tr>
                                        <tr>
                                            <td>Net Annual Portfolio Withdrawals</td>
                                            <td><input type="number" class="form-control" placeholder="7.80%"></td>
                                        </tr>
                                        <tr>
                                            <td>How Much Money Will Be Left at the end of your plan?</td>
                                            <td><input type="number" class="form-control" placeholder="$52,928"></td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="col-lg-12 text-center">
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                                <table class="table table-bordered table-bordered-white">
                                    <h5 class="bg-project">How Long WIll It Last</h5>
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Rate of <br> Withdrawal</th>
                                            <th colspan="7">Real Rate of Return</th>

                                        </tr>
                                        <tr>
                                            <th>0%</th>
                                            <th>1%</th>
                                            <th>2%</th>
                                            <th>3%</th>
                                            <th>4%</th>
                                            <th>5%</th>
                                            <th>6%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-active fw-bold">1%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">2%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">3%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">4%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">5%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">6%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">7%</td>
                                            <td class="table-active-blue"></td>
                                            <td class="table-active-blue"></td>
                                            <td class="table-active-fill fw-bold">86</td>
                                            <td class="table-active-blue"></td>
                                            <td class="table-active-blue"></td>
                                            <td class="table-active-blue"></td>
                                            <td class="table-active-blue"></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">8%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">9%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">10%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">11%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">12%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">13%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">14%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="table-active fw-bold">15%</td>
                                            <td></td>
                                            <td></td>
                                            <td class="table-active-blue"></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12 mb-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="bg-project">How Long WIll It Last</h5>
                                <div id="chartdiv3"></div>
                            </div>
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