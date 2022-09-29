<?php
$nav_items = array(
    array("parent" => "Migrate", "child" => [
        array("parent" => "Canada", "child" => [
            ["Express Entry Points Calculator", "check-eligibility.php"],
            ["Provincial Nominee Programs", "provincial-nominee-programs.php"],
            ["Occupation in Demand List", "occupation-in-demand-list.php"],
            ["Express Entry Programs", "express-entry-programs.php"],
            ["Spouse Visa From India", "spouse-visa-From-india.php"],
            ["Federal Skilled Worker Program", "federal-skilled-worker-program.php"],
            ["Family Sponsorship Program", "Canada-family-sponsorship-program.php"],
            ["Latest Express Entry Draw", "latest-express-entry-draw.php"],
            ["Canada Business Visa", "canada-business-visa.php"],
            ["Work Visa On LMIA Basis", "work-visa-on-lmia-basis.php"]
        ]),
        array("parent" => "Australia", "child" => [
            ["Australia PR Visa From India", "australia-pr-visa-from-india.php"],
            ["Invitation To Apply", "invitation-to-apply.php"],
            ["Australia Skilled Occupation List", "australia-skilled-occupation-list.php"],
            ["Australia 65 Points Calculator", "australia-65-points-calculator.php"],
            ["Employer Nomination Subclass 186", "employer-nomination-subclass-186.php"],
            ["Skilled Independent Subclass 189", "skilled-indpendent-subclass-189.php"],
            ["Skilled Nominated Subclass 190", "skilled-nominated-subclass-190.php"],
            ["Australia Spouse Visa", "australia-spouse-visa.php"]
        ]),
        array("parent" => "UK", "child" => [["UK Visitor Visa", "uk-tourist-visa.php"], ["UK Student Visa", "study-in-uk.php"]]),
        array("parent" => "USA", "child" => [["USA Student Visa", "usa-student-visa.php"], ["USA Visitor Visa", "usa-visitor-visa.php"]])
    ], "url" => "#"),
    array("parent" => "Visa Types", "child" => [
        [
            "parent" => "Study Visa", "child" => [
                ["Canada", "study-in-canada.php"],
                ["UK", "check-eligibility.php"],
                ["Australia", "study-in-australia.php"],
                ["USA", "usa-study-visa.php"],
                ["Germany", "germany-study-visa.php"],
                ["Singapore", "study-in-singapore.php"],
                ["New Zealand", "study-in-newzealand.php"],
                ["Poland", "study-in-poland.php"],
                ["Malaysia", "study-in-malaysia.php"]
            ]
        ],
        [
            "parent" => "Permenant Residency Visa", "child" => [
                ["Canada", "canada-pr-visa.php"],
                ["Australia", "australia-pr-visa-from-india.php"]
            ]
        ],
        [
            "parent" => "Work Visa", "child" => [
                ["Canada", "work-visa-on-lmia-basis.php"],
            ]
        ],
        [
            "parent" => "Tourist Visa", "child" => [
                ["Canada", "canada-tourist-visa.php"],
                ["UK", "uk-tourist-visa.php"],
                ["Australia", "australia-visitor-visa.php"],
                ["USA", "usa-visitor-visa.php"]
            ]
        ],
        [
            "parent" => "Business Visa", "child" => [
                ["Canada", "canada-business-visa.php"],
                ["UK", "uk-innovator-visa.php"]
            ]
        ],
        [
            "parent" => "Other Visa", "child" => [
                ["USA H-1B Visa", "usa-h1b-visa.php"],
                ["Canada Super Visa", "canada-super-visa.php"],
                ["USA O-1 Visa", "usa-o1-visa.php"],
                ["UK Innovator Visa", "uk-innovator-visa.php"],
                ["USA EB-5 Visa", "usa-eb5-visa.php"],
            ]
        ],
        [
            "parent" => "Business Visa", "child" => [
                ["Canada", "canada-business-visa.php"],
                ["UK", "uk-innovator-visa.php"]
            ]
        ],
        [
            "parent" => "How Can We Help You?", "child" => [
                ["Resume Writing", "resume-writing.php"],
                ["Profile Eveluation", "profile-eveluation.php"],
                ["Post Landing Services", "postlanding-services.php"]
            ]
        ]
    ], "url" => "#")
);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- fontawesome -->
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/manual/fonts-black.css">
    <link rel="stylesheet" type="text/css" href="assets/manual/fonts.css">
    <link id="pagestyle" href="./assets/css/material-kit.css?v=3.0.3" rel="stylesheet" />
    <link href="assets/manual/service-card-design.css" rel="stylesheet" />
    <link href="assets/manual/flag-gif-design.css" rel="stylesheet" />
    <link href="assets/manual/index.css" rel="stylesheet" />
    <!-- animation text -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.css" integrity="sha512-gFn7XRm5v3GlgOwAQ80SXDT8pyg6uaV9JbW2OkNx5Im2jR8zx2X/3DbHymcZnUraU+klZjRJqNfNkFN7SyR3fg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <!-- Modal -->
    <div class="modal fade" id="contactform" tabindex="-1" aria-labelledby="contactform" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <img src="logo.png" style="height: 50px; margin: 0px auto;">
                </div>
                <div class="modal-body">
                    <section>
                        <div class="container py-4">
                            <div class="row">
                                <div class="col-lg-12 mx-auto d-flex justify-content-center flex-column">
                                    <h3 class="text-center">Contact us</h3>
                                    <form role="form" id="contact-form" method="post" autocomplete="off">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="input-group input-group-dynamic mb-4">
                                                        <label class="form-label">First Name</label>
                                                        <input class="form-control" aria-label="First Name..." type="text" name="fname">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 ps-2">
                                                    <div class="input-group input-group-dynamic">
                                                        <label class="form-label">Phone Nomber</label>
                                                        <input type="text" class="form-control" placeholder="" aria-label="Phone Number..." name="phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <div class="input-group input-group-dynamic mt-4">
                                                    <label class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                            </div>
                                            <div class="input-group input-group-dynamic ">
                                                <select class="form-select text-center" aria-label="Visa Type" name="visa">
                                                    <option selected disabled>Visa Type</option>
                                                    <option value="Student Visa">Student Visa</option>
                                                    <option value="Permenant Residency Visa">Permenant Residency Visa</option>
                                                    <option value="Work Visa">Work Visa</option>
                                                    <option value="Tourist Visa">Tourist Visa</option>
                                                    <option value="Business Visa">Business Visa</option>
                                                    <option value="Dependent Visa">Dependent Visa</option>
                                                    <option value="USA H-1B Visa">USA H-1B Visa</option>
                                                    <option value="Canada Super Visa">Canada Super Visa</option>
                                                    <option value="USA O-1 Visa">USA O-1 Visa</option>
                                                    <option value="UK Innovator Visa">UK Innovator Visa</option>
                                                    <option value="USA EB-5 Visa">USA EB-5 Visa</option>
                                                </select>
                                            </div>
                                            <div class="input-group input-group-dynamic mt-4 ">
                                                <select class="form-select text-center" aria-label="Country" name="country">
                                                    <option selected disabled>Select Country</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="UK">UK</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="USA">USA</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Europe">Europe</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Schengen">Schengen</option>
                                                    <option value="Malesia">Malesia</option>
                                                </select>
                                            </div>
                                            <input type="hidden" name="addenq">
                                            <div class="row mt-6">
                                                <div class="col-md-12">
                                                    <button type="button" class="btn bg-gradient-primary w-100" id="btnAddenq">
                                                        <span class="fa fa-spinner fa-spin d-none"></span>
                                                        <span class="fa fa-check d-none"></span>
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                            <span class="alert alert-success mt-1 p-2 d-block text-white d-none" id="msgalert">Thank you for sending enquiry ;)</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="modal-footer ">
                    <button type="button" class="btn bg-gradient-dark" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
                            <img src="logo.png" alt="" style="width:170px;">
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="home.php" target="_blank">
                                        <span class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Home">Home</span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown dropdown-hover mx-2">
                                    <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="font-weight-bold">About</span>
                                        <img src="./assets/img/down-arrow-dark.svg" alt="down-arrow" class="arrow ms-auto ms-md-2">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
                                        <div class="d -none d-lg-block">

                                            <a href="about.php" class="dropdown-item border-radius-md">
                                                <span>About RD Group</span>
                                            </a>
                                            <a href="home.php" class="dropdown-item border-radius-md">
                                                <span>Vision & Mission</span>
                                            </a>
                                        </div>

                                    </div>
                                </li>
                                <?php
                                foreach ($nav_items as $nav) {
                                    $name = $nav["parent"];
                                    $url = $nav['url'];
                                    echo "<li class='nav-item dropdown dropdown-hover mx-2'>
                                                    <a class='nav-link ps-2 d-flex cursor-pointer align-items-center' id='dropdownMenuBlocks' data-bs-toggle='dropdown' aria-expanded='false'>
                                                        <div class='w-200 d-flex align-items-center justify-content-between'>
                                                            <span class='font-weight-bold'>$name</span>
                                                            <img src='./assets/img/down-arrow-dark.svg' alt='down-arrow' class='arrow ms-auto ms-md-2'>
                                                        </div>    
                                                    </a>
                                                    <ul class='dropdown-menu dropdown-menu-end dropdown-menu-animation dropdown-md dropdown-md-responsive p-3 border-radius-lg mt-0 mt-lg-3' aria-labelledby='dropdownMenuBlocks'>
                                                    <div class='d-none d-lg-block'>";
                                    foreach ($nav["child"] as $child) {
                                        if (!is_array($child)) {
                                            echo "<li class='dropdown-item border-radius-md cursor-pointer'>
                                                            <a class='nav-link nav-link-icon me-2' href='$url'>
                                                                <span>$child</span>
                                                            </a>
                                                        </li>";
                                        } else {
                                            $chname = $child['parent'];
                                            echo "<li class='nav-item dropdown dropdown-hover dropdown-subitem'>
                                                            <a class='dropdown-item py-2 ps-3 border-radius-md'>
                                                                <div class='w-200 d-flex align-items-center justify-content-between'>
                                                                    <div><span class='text-sm'>$chname</span></div>
                                                                    <img src='./assets/img/down-arrow.svg' class='arrow'>
                                                                </div>
                                                            </a>
                                                            <div class='dropdown-menu mt-0 py-2 px-2 mt-2'>";
                                            foreach ($child['child'] as $subchild) {
                                                echo "<a class='dropdown-item ps-3 border-radius-md mb-1' href='$subchild[1]'>
                                                                    <span class='text-sm text-wrap'>$subchild[0]</span>
                                                                </a>";
                                            }
                                            echo "</div></li>";
                                        }
                                    }
                                    echo "</div>
                                            <div class='row d-lg-none'>
                                                <div class='col-md-12'>";
                                    foreach ($nav["child"] as $child) {
                                        if (is_array($child)) {
                                            $chname = $child['parent'];
                                            echo "<div class='d-flex mb-2'>
                                                                    <div class='icon h-10 me-3 d-flex mt-1'>
                                                                        <i class='fa fa-check-square-o text-gradient text-primary'></i>
                                                                    </div>
                                                                    <div class='w-100 d-flex align-items-center justify-content-between'>
                                                                        <div>
                                                                            <h6 class='dropdown-header text-dark font-weight-bolder d-flex justify-content-cente align-items-center p-0'>
                                                                                $chname</h6>
                                                                        </div>
                                                                    </div>
                                                                </div>";
                                            foreach ($child['child'] as $subchild) {
                                                echo "<a class='dropdown-item ps-3 border-radius-md mb-1' href='$subchild[1]'>
                                                                            <span class='text-sm text-wrap'>$subchild[0]</span>
                                                                        </a>";
                                            }
                                        }
                                    }
                                    echo "</div>
                                            </div>";
                                    echo "</ul>
                                            </li>";
                                }
                                ?>
                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="blog.php">
                                        <span class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Blog">Blog</span>
                                    </a>
                                </li>

                                <li class="nav-item ms-lg-auto">
                                    <a class="nav-link nav-link-icon me-2" href="contact.php">
                                        <span class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Contact">Contact</span>
                                    </a>
                                </li>
                                <button type="button" id="glow-btn" class="btn bg-gradient-primary btn-sm mb-5 mb-sm-0 " data-bs-toggle="modal" data-bs-target="#contactform">
                                    Enquiry Now
                                </button>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>