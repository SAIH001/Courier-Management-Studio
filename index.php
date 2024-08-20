<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

    

    <?php require 'Navbar.php'?>



        
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Order Completed</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                  
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Order Pending</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 8541</h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Order Total Sale </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Customer Satisfaction</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                              
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>


                

        
                
           

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customers</th>
                                                    <th>Product</th>
                                                    <th>Country</th>
                                                    <th>Status</th>
                                                    <th>Payment Method</th>
                                                    <th>Activity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td>
                                                    <td>iPhone X</td>
                                                    <td>
                                                        <span>United States</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/2.jpg" class=" rounded-circle mr-3" alt="">Walter R.</td>
                                                    <td>Pixel 2</td>
                                                    <td><span>Canada</span></td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">50 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/3.jpg" class=" rounded-circle mr-3" alt="">Andrew D.</td>
                                                    <td>OnePlus</td>
                                                    <td><span>Germany</span></td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/6.jpg" class=" rounded-circle mr-3" alt=""> Megan S.</td>
                                                    <td>Galaxy</td>
                                                    <td><span>Japan</span></td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/4.jpg" class=" rounded-circle mr-3" alt=""> Doris R.</td>
                                                    <td>Moto Z2</td>
                                                    <td><span>England</span></td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/5.jpg" class=" rounded-circle mr-3" alt="">Elizabeth W.</td>
                                                    <td>Notebook Asus</td>
                                                    <td><span>China</span></td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-warning" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-warning  mr-2"></i> Pending</td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>

                

            
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="https://themeforest.net/user/quixlab">Quixlab</a> 2018</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
