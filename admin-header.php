<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard | UrFon IFix USA</title>


    <link href="./admin-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />

    <link href="./admin-assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="./admin-assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


</head>

<body id="page-top">


    <div id="wrapper">


        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <a class="sidebar-brand d-flex align-items-center" href="admin-index.php">
                <div class="sidebar-brand-icon">
                    <img class="img-fluid" width="120" src="./assets/img/logo-main-white.png" alt="" />
                </div>
            </a>


            <hr class="sidebar-divider my-0">


            <li class="nav-item <?php if ($currentPage == 'dashboard') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link" href="admin-index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <hr class="sidebar-divider">


            <div class="sidebar-heading">
                Components
            </div>

            <!-- <li class="nav-item <?php if ($currentPage == 'service') {
                                            echo 'active';
                                        } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                    aria-expanded="true" aria-controls="collapseServices">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Services</span>
                </a>
                <div id="collapseServices" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'add-service') {
                                                    echo 'active';
                                                } ?>" href="add-service.php">Add Service</a>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-service') {
                                                    echo 'active';
                                                } ?>" href="view-service.php">View Services</a>
                    </div>
                </div>
            </li>


            <li class="nav-item <?php if ($currentPage == 'devices') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Devices</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'add-device') {
                                                    echo 'active';
                                                } ?>" href="add-devices.php">Add Devices</a>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-device') {
                                                    echo 'active';
                                                } ?>" href="view-devices.php">View Devices</a>
                    </div>
                </div>
            </li> -->


            <li class="nav-item <?php if ($currentPage == 'stores') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Stores</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'add-stores') {
                                                    echo 'active';
                                                } ?>" href="stores.php">Add Stores</a>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-stores') {
                                                    echo 'active';
                                                } ?>" href="view-stores.php">View Stores</a>
                    </div>
                </div>
            </li>

            <li class="nav-item <?php if ($currentPage == 'products') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
                    aria-expanded="true" aria-controls="collapseUtilities1">
                    <i class="fa fa-fw fa-product-hunt"></i>
                    <span>Products</span>
                </a>
                <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'add-products') {
                                                    echo 'active';
                                                } ?>" href="add-products.php">Add Products</a>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-products') {
                                                    echo 'active';
                                                } ?>" href="view-products.php">View Products</a>
                    </div>
                </div>
            </li>


            <li class="nav-item <?php if ($currentPage == 'brands') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsebrands"
                    aria-expanded="true" aria-controls="collapsebrands">
                    <i class="fas fa-fw fa-mobile-alt"></i>
                    <span>Brands</span>
                </a>
                <div id="collapsebrands" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'add-brands') {
                                                    echo 'active';
                                                } ?>" href="add-brands.php">Add Brands</a>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-brands') {
                                                    echo 'active';
                                                } ?>" href="view-brands.php">View Brands</a>
                    </div>
                </div>
            </li>



            <!-- <li class="nav-item <?php if ($currentPage == 'reviews') {
                                            echo 'active';
                                        } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReviews"
                    aria-expanded="true" aria-controls="collapseReviews">
                    <i class="fas fa-fw fa-comment-alt"></i>
                    <span>Reviews</span>
                </a>
                <div id="collapseReviews" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-reviews') {
                                                    echo 'active';
                                                } ?>" href="view-reviews.php">View Reviews</a>
                    </div>
                </div>
            </li> -->


            <li class="nav-item <?php if ($currentPage == 'orders') {
                                    echo 'active';
                                } ?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders"
                    aria-expanded="true" aria-controls="collapseOrders">
                    <i class="fas fa-fw fa-box-open"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseOrders" class="collapse" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Options</h6>
                        <a class="collapse-item <?php if ($currentPage2 == 'view-orders') {
                                                    echo 'active';
                                                } ?>" href="order.php">View Orders</a>
                    </div>
                </div>
            </li>


            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>