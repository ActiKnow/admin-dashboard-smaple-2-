<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'scripts/headScripts.php'; ?>
    <title>McCormick Financial Advisors</title>
    <meta name="description" content="We assist financially successful families and business owners in making smart financial decisions so they can enjoy the lifestyle of their dreams. Click here to learn more." />
</head>

<body data-theme="">
    <?php require_once 'includes/appHeader.php'; ?>
    <?php require_once 'includes/appSidebar.php'; ?>

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Complete Your Profile !</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="bi bi-house-door"></i> Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="signup-step-container">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="wizard">
                            <div class="wizard-inner">
                                <div class="connecting-line"></div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" aria-expanded="false"><span class="round-tab">3</span> <i>Step 3</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" aria-expanded="false"><span class="round-tab">4</span> <i>Step 4</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" aria-expanded="false"><span class="round-tab">5</span> <i>Step 5</i></a>
                                    </li>
                                    <li role="presentation" class="disabled">
                                        <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" aria-expanded="false"><span class="round-tab">6</span> <i>Step 6</i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <form role="form" action="" class="">
                                        <div class="tab-content" id="">
                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">About you</h1>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Primary Clients Name</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputDate" class="col-sm-3 col-form-label">Primary Client Date of Birth</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputEmail" class="col-sm-3 col-form-label">Email Address</label>
                                                    <div class="col-sm-6">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Telephone</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control" placeholder="Phone">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Loved Ones</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Many">
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                            <i class="bi bi-arrow-right-circle mr-2"></i><span>Continue to next step</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step2">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">Personal Values</h1>

                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0"></legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check ">                                                            
                                                            <label class="form-check-labe" for="gridRadios1">
                                                                Most Important
                                                            </label>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="gridRadios1">
                                                            Important
                                                            </label>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="gridRadios1">
                                                            Less Important
                                                            </label>
                                                        </div>                                                       
                                                    </div>
                                                </fieldset>

                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0 text-left fw-600">Avoiding risk</legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                         </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                       
                                                    </div><hr>
                                                </fieldset>                                              
                                                
                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0 text-left fw-600">Taking Care of Family</legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                         </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                       
                                                    </div><hr>
                                                </fieldset>

                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0 text-left fw-600">Not becoming a burden on loved ones</legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                         </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                       
                                                    </div><hr>
                                                </fieldset>

                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0 text-left fw-600">Enjoying the Independence and Freedom to live without financial worry</legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                         </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                       
                                                    </div><hr>
                                                </fieldset>  

                                                <fieldset class="row text-center">
                                                    <legend class="col-form-label col-sm-6 pt-0 text-left fw-600">Supporting a cause you care about</legend>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                         </div>                                                        
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                       
                                                    </div><hr>
                                                </fieldset>                                                 
                                                
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-secondary">
                                                            <i class="bi bi-arrow-left-circle mr-2"></i><span>Back</span>
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                        <i class="bi bi-arrow-right-circle mr-2"></i><span>Continue</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step3">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">Lifetime Income Goals</h1>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Desired Retirement Age</label>
                                                    <div class="col-sm-6">
                                                        <input type="number" class="form-control" placeholder="87">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputNumber" class="col-sm-3 col-form-label">Annual Income Desired in Retirement</label>
                                                    <div class="col-sm-6">
                                                        <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1">$</span>
                                                        <input type="text" class="form-control" placeholder="200000" aria-label="" aria-describedby="obasic-addn1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputPassword" class="col-sm-3 col-form-label">One-Time Goals</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" style="height: 60px" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, dignissimos."></textarea>
                                                    </div>
                                                </div>                                                
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-secondary">
                                                            <i class="bi bi-arrow-left-circle mr-2"></i><span>Back</span>
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                        <i class="bi bi-arrow-right-circle mr-2"></i><span>Continue</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step4">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title mb-2">What type of investor are you?</h1>
                                                
                                                <fieldset class="row offset-md-1 text-center">                                                    
                                                    <div class="col-sm-1 text-right">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <legend class="col-form-label col-sm-8 pt-0 text-left fw-600">Very Low - No fluctuations please!</legend>
                                                </fieldset>

                                                <fieldset class="row offset-md-1 text-center">                                                    
                                                    <div class="col-sm-1 text-right">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <legend class="col-form-label col-sm-8 pt-0 text-left fw-600">Conservative - I would like to protect what I have first, then let's try to beat inflation</legend>
                                                </fieldset>

                                                <fieldset class="row offset-md-1 text-center">                                                    
                                                    <div class="col-sm-1 text-right">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                        </div>                                                        
                                                    </div>
                                                    <legend class="col-form-label col-sm-8 pt-0 text-left fw-600">Moderate - some short term losses are OK if that means long term growth.</legend>
                                                </fieldset>

                                                <fieldset class="row offset-md-1 text-center">                                                    
                                                    <div class="col-sm-1 text-right">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <legend class="col-form-label col-sm-8 pt-0 text-left fw-600">High - Money is not made in a straight line, and I want normal stock market returns</legend>
                                                </fieldset> 
                                                
                                                <fieldset class="row offset-md-1 text-center">                                                    
                                                    <div class="col-sm-1 text-right">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="gridRadios" id="gridRadios1" value="option1">
                                                        </div>                                                        
                                                    </div>
                                                    <legend class="col-form-label col-sm-8 pt-0 text-left fw-600">Speculative - Thrill me!</legend>
                                                </fieldset>
                                                
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label text-right mt-2">Why do you feel this way about risk?</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" style="height: 60px" placeholder="I got my teeth kicked in during 2008"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-secondary">
                                                            <i class="bi bi-arrow-left-circle mr-2"></i><span>Back</span>
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                        <i class="bi bi-arrow-right-circle mr-2"></i><span>Continue</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step5">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">Business Advisors</h1>
                                                
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Accountant</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Dale Berger">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Insurance Professional</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Heather Schlaugh">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Banker</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Stockman">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1">
                                                    <label for="inputText" class="col-sm-3 col-form-label">Attorney</label>
                                                    <div class="col-sm-6">
                                                        <input type="text" class="form-control" placeholder="Rick Landers">
                                                    </div>
                                                </div>
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">Other Advisors</h1>
                                                
                                                <div class="row mb-3">
                                                    <label for="inputPassword" class="col-sm-4 col-form-label">Investment Experience - in their words</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" style="height: 60px" placeholder="I've made money not by being clever, but by time and timing."></textarea>
                                                    </div>
                                                </div>
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-secondary">
                                                            <i class="bi bi-arrow-left-circle mr-2"></i><span>Back</span>
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                        <i class="bi bi-arrow-right-circle mr-2"></i><span>Continue</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-pane" role="tabpanel" id="step6">
                                                <h1 class="display-4 ft-dark text-center mccormick-page-title">Version</h1>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputDate" class="col-sm-3 col-form-label">Date</label>
                                                    <div class="col-sm-6">
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row offset-md-1 mb-3">
                                                    <label for="inputDate" class="col-sm-3 col-form-label">Update Note</label>
                                                    <div class="col-sm-6">
                                                        <textarea class="form-control" placeholder="Some simple versioning system log and file maintenance?"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <ul class="list-inline pull-right">
                                                    <li>
                                                        <a href="#" class="btn btn-secondary">
                                                            <i class="bi bi-arrow-left-circle mr-2"></i><span>Back</span>
                                                        </a>
                                                    </li>                                                    
                                                    <li>
                                                        <a href="#" class="btn btn-success">
                                                        <i class="bi bi-box-arrow-right mr-2"></i><span>Submit</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
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


<!-- For Step Wizard -->
<script>
    // ------------step-wizard-------------
    $(document).ready(function() {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

            var target = $(e.target);

            if (target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            active.next().removeClass('disabled');
            nextTab(active);

        });
        $(".prev-step").click(function(e) {

            var active = $('.wizard .nav-tabs li.active');
            prevTab(active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }


    $('.nav-tabs').on('click', 'li', function() {
        $('.nav-tabs li.active').removeClass('active');
        $(this).addClass('active');
    });
</script>