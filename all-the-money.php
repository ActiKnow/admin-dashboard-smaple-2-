<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php';?>
    <title>McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">        
    <?php require_once 'includes/appHeader.php';?>
    <?php require_once 'includes/appSidebar.php';?>

    <main id="main" class="main">

        <div class="row">
            <div class="col-6">
                <div class="pagetitle">
                    <h1>All The Money</h1>
                    <nav>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">All the Money</li>
                        </ol>
                    </nav>
                </div>
            </div>            
            <div class="col-6 text-right">
                <a href="add-scenario.php" class="btn btn-success mt-1">
                    <i class="bi bi-plus-lg mr-2"></i><span>Add Scenario</span>
                </a>               
            </div>
        </div>

        <!-- Recent Sales -->
        <div class="card recent-sales overflow-auto">               

                <div class="card-body">
                <h5 class="card-title">Scenario Name <span>| 2022-4-27 ATM</span></h5>

                <div class="row">
                    <div class="col-md-12">
                        <div class="content px-0">
                            <table id="example" class="table nowrap table-bordered table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Asset Name</th>
                                    <th>Asset Title</th>
                                    <th>Asset Type</th>
                                    <th>Amount</th>
                                    <th>Date of Valuation</th>
                                    <th>Risk level 0-11</th>
                                    <th>Time Horizon</th>
                                    <th>Future Income Source?</th>
                                    <th>Annual Growth Rate</th>
                                    <th>Cash Flow Amount</th>
                                    <th>Beneficiaries</th>
                                    <th>Basis</th>
                                    <th>Comment</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>#001</td>
                                    <td><a href="#" class="ft-secondary fw-600">Personal Home</a></td>
                                    <td>2277 Powder Park Ct</td>
                                    <td>Real Estate</td>
                                    <td>$ 1,200,000.00</td>
                                    <td>4/18/2022</td>
                                    <td>4</td>                         
                                    <td>25</td>
                                    <td>No</td>
                                    <td>4.00%</td>
                                    <td>$  -</td>
                                    <td>JTEN</td>                           
                                    <td>$350,000</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a href="edit-scenario.php" class="icon icon-sm icon-secondary"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Edit"></i></a>
                                        <a href="#" class="icon icon-sm icon-primary"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>                                  
                                <tr>
                                    <td>#002</td>
                                    <td><a href="#" class="ft-secondary fw-600">Brokerage TOD</a></td>
                                    <td>MJM TOD</td>
                                    <td>Marketable Securities</td>
                                    <td>$ 40000</td>
                                    <td>4/18/2022</td>
                                    <td>2</td>                         
                                    <td>1</td>
                                    <td>Yes</td>
                                    <td>2.00%</td>
                                    <td>$  -</td>
                                    <td>JTEN</td>                           
                                    <td>$350,000</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a href="edit-scenario.php" class="icon icon-sm icon-secondary"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Edit"></i></a>
                                        <a href="#" class="icon icon-sm icon-primary"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>                                   
                                <tr>
                                    <td>#003</td>
                                    <td><a href="#" class="ft-secondary fw-600">Brokerage TOD</a></td>
                                    <td>MJM TOD</td>
                                    <td>Marketable Securities</td>
                                    <td>$ 40000</td>
                                    <td>4/18/2022</td>
                                    <td>2</td>                         
                                    <td>1</td>
                                    <td>Yes</td>
                                    <td>2.00%</td>
                                    <td>$  -</td>
                                    <td>JTEN</td>                           
                                    <td>$350,000</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a href="edit-scenario.php" class="icon icon-sm icon-secondary"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Edit"></i></a>
                                        <a href="#" class="icon icon-sm icon-primary"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>                                   
                                <tr>
                                    <td>#004</td>
                                    <td><a href="#" class="ft-secondary fw-600">Brokerage TOD</a></td>
                                    <td>MJM TOD</td>
                                    <td>Marketable Securities</td>
                                    <td>$ 40000</td>
                                    <td>4/18/2022</td>
                                    <td>2</td>                         
                                    <td>1</td>
                                    <td>Yes</td>
                                    <td>2.00%</td>
                                    <td>$  -</td>
                                    <td>JTEN</td>                           
                                    <td>$350,000</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a href="edit-scenario.php" class="icon icon-sm icon-secondary"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Edit"></i></a>
                                        <a href="#" class="icon icon-sm icon-primary"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>                                   
                                <tr>
                                    <td>#005</td>
                                    <td><a href="#" class="ft-secondary fw-600">Brokerage TOD</a></td>
                                    <td>MJM TOD</td>
                                    <td>Marketable Securities</td>
                                    <td>$ 40000</td>
                                    <td>4/18/2022</td>
                                    <td>2</td>                         
                                    <td>1</td>
                                    <td>Yes</td>
                                    <td>2.00%</td>
                                    <td>$  -</td>
                                    <td>JTEN</td>                           
                                    <td>$350,000</td>
                                    <td>Lorem Ipsum</td>
                                    <td>
                                        <a href="edit-scenario.php" class="icon icon-sm icon-secondary"><i class="bi bi-pencil-fill" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Edit"></i></a>
                                        <a href="#" class="icon icon-sm icon-primary"><i class="bi bi-trash" data-bs-toggle="tooltip" data-bs-placement="right" title="" data-original-title="Delete"></i></a>
                                    </td>
                                </tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                </div>

            </div>      

    </main><!-- End #main -->


    <?php require_once 'includes/footer.php';?>
    <?php require_once 'scripts/bodyScripts.php';?>
</body>
<script>
    // $(document).ready(function () {
    //     $("#example").DataTable({
    //         scrollX: true,
    //     });
    // });
</script>

</html>