<?php require_once 'restrict.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ESHOPY <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Products
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Apparel & Accessories</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                       <a class="collapse-item" href="men_clothing.php">Men's Clothing</a>
                        <a class="collapse-item" href="Women's_Clothing.php">Women's Clothing</a>
                        <a class="collapse-item" href="Kids_cloths.php">Kids' Clothing</a>
                        <a class="collapse-item" href="Shoes.php">Shoes</a>
                         <a class="collapse-item" href="Accessories.php">Accessories</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseElectronics"
                  aria-expanded="true" aria-controls="collapseElectronics">
                  <span>Electronics</span>
                </a>
                <div id="collapseElectronics" class="collapse" aria-labelledby="headingElectronics"
                  data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Categories:</h6>
                    <a class="collapse-item" href="Computers.php">Computers & Laptops</a>
                    <a class="collapse-item" href="Mobiles.php">Mobile Phones & Tablets</a>
                    <a class="collapse-item" href="TV.php">TVs & HomeEntertainment</a>
                    <a class="collapse-item" href="Camera.php">Cameras & Photography</a>
                    <a class="collapse-item" href="Headphones.php">Audio & Headphones</a>
                  </div>
                </div>
              </li>
              <!-- Home & Furniture Dropdown -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHomeFurniture"
                  aria-expanded="true" aria-controls="collapseHomeFurniture">
                  <span>Home & Furniture</span>
                </a>
                <div id="collapseHomeFurniture" class="collapse" aria-labelledby="headingHomeFurniture"
                  data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Categories:</h6>
                    <a class="collapse-item" href="Furniture.php">Furniture</a>
                    <a class="collapse-item" href="Home_Decor.php">Home Decor</a>
                    <a class="collapse-item" href="Kitchen.php">Kitchen & Dining</a>
                    <a class="collapse-item" href="Bedding.php">Bedding & Bath</a>
                    <a class="collapse-item" href="Lighting.php">Lighting & Fixtures</a>
                  </div>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBeautyPersonalCare"
                    aria-expanded="true" aria-controls="collapseBeautyPersonalCare">
                    <span>Beauty & Personal Care</span>
                </a>
                <div id="collapseBeautyPersonalCare" class="collapse" aria-labelledby="headingBeautyPersonalCare"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                               <a class="collapse-item" href="Skincare.php">Skincare</a>
                        <a class="collapse-item" href="Makeup.php">Makeup</a>
                        <a class="collapse-item" href="Haircare.php">Haircare</a>
                        <a class="collapse-item" href="Fragrances.php">Fragrances</a>
                        <a class="collapse-item" href="Personal_Care.php">Personal Care</a>
                    </div>
                </div>
            </li>
            <!-- Sports & Outdoors Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSportsOutdoors"
                    aria-expanded="true" aria-controls="collapseSportsOutdoors">
                    <span>Sports & Outdoors</span>
                </a>
                <div id="collapseSportsOutdoors" class="collapse" aria-labelledby="headingSportsOutdoors"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
    <a class="collapse-item" href="Exercise.php">Exercise & Fitness</a>
                        <a class="collapse-item" href="Outdoor.php">Outdoor Recreation</a>
                        <a class="collapse-item" href="Equipment.php">Sports Equipment</a>
                        <a class="collapse-item" href="Cycling.php">Cycling</a>
                        <a class="collapse-item" href="Water_sports.php">Water Sports</a>
                    </div>
                </div>
            </li>
            <!-- Books, Movies & Music Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBooksMoviesMusic"
                    aria-expanded="true" aria-controls="collapseBooksMoviesMusic">
                    <span>Books, Movies & Music</span>
                </a>
                <div id="collapseBooksMoviesMusic" class="collapse" aria-labelledby="headingBooksMoviesMusic"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                        <a class="collapse-item" href="Books.php">Books</a>
                        <a class="collapse-item" href="Movies.php">Movies & TV Shows</a>
                        <a class="collapse-item" href="Music.php">Music</a>
                        <a class="collapse-item" href="Audiobooks.php">Audiobooks</a>
                        <a class="collapse-item" href="Magazines.php">Magazines & Periodicals</a>
                    </div>
                </div>
            </li>
            <!-- Toys & Games Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseToysGames"
                    aria-expanded="true" aria-controls="collapseToysGames">
                    <span>Toys & Games</span>
                </a>
                <div id="collapseToysGames" class="collapse" aria-labelledby="headingToysGames"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                               <a class="collapse-item" href="Action.php">Action Figures</a>
                        <a class="collapse-item" href="Dolls.php">Dolls & Accessories</a>
                        <a class="collapse-item" href="Puzzles.php">Board Games & Puzzles</a>
                        <a class="collapse-item" href="Educational_Toys.php">Educational Toys</a>
                        <a class="collapse-item" href="Outdoor_play_equipments.php">Outdoor Play Equipment</a>
                    </div>
                </div>
            </li>
            <!-- Health & Wellness Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseHealthWellness"
                    aria-expanded="true" aria-controls="collapseHealthWellness">
                    <span>Health & Wellness</span>
                </a>
                <div id="collapseHealthWellness" class="collapse" aria-labelledby="headingHealthWellness"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                          <a class="collapse-item" href="Vitamins.php">Vitamins & Supplements</a>
                        <a class="collapse-item" href="Health_Monitors.php">Health Monitors & Devices</a>
                        <a class="collapse-item" href="Fitness_Acc.php">Fitness Accessories</a>
                        <a class="collapse-item" href="Personal_Care_Products.php">Personal Care Products</a>
                        <a class="collapse-item" href="Wellness_Books.php">Wellness Books</a>
                    </div>
                </div>
            </li>
            <!-- Food & Groceries Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFoodGroceries"
                    aria-expanded="true" aria-controls="collapseFoodGroceries">
                    <span>Food & Groceries</span>
                </a>
                <div id="collapseFoodGroceries" class="collapse" aria-labelledby="headingFoodGroceries"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                         <a class="collapse-item" href="Pantry.php">Pantry Staples</a>
                        <a class="collapse-item" href="Fresh.php">Fresh Produce</a>
                        <a class="collapse-item" href="Snacks.php">Snacks & Treats</a>
                        <a class="collapse-item" href="Beverages.php">Beverages</a>
                        <a class="collapse-item" href="Specialty_food.php">Specialty Foods</a>
                    </div>
                </div>
            </li>
            <!-- Automotive Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAutomotive"
                    aria-expanded="true" aria-controls="collapseAutomotive">
                    <span>Automotive</span>
                </a>
                <div id="collapseAutomotive" class="collapse" aria-labelledby="headingAutomotive"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
    <a class="collapse-item" href="Car_parts.php">Car Parts & Accessories</a>
                        <a class="collapse-item" href="Tools.php">Tools & Equipment</a>
                        <a class="collapse-item" href="Car_maintenance.php">Car Care & Maintenance</a>
                        <a class="collapse-item" href="Electronics.php">Electronics & Gadgets</a>
                        <a class="collapse-item" href="Motorcycle.php">Motorcycle & ATV</a>
                    </div>
                </div>
            </li>
            <!-- Pets Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePets"
                    aria-expanded="true" aria-controls="collapsePets">
                    <span>Pets</span>
                </a>
                <div id="collapsePets" class="collapse" aria-labelledby="headingPets"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                                <a class="collapse-item" href="pet_food.php">Pet Food</a>
                        <a class="collapse-item" href="pet_supply.php">Pet Supplies</a>
                        <a class="collapse-item" href="pet_health.php">Pet Health & Wellness</a>
                        <a class="collapse-item" href="pet_accessories.php">Pet Accessories</a>
                        <a class="collapse-item" href="pet_technology.php">Pet Technology</a>
                    </div>
                </div>
            </li>
            <!-- Art & Collectibles Dropdown -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArtCollectibles"
                    aria-expanded="true" aria-controls="collapseArtCollectibles">
                    <span>Art & Collectibles</span>
                </a>
                <div id="collapseArtCollectibles" class="collapse" aria-labelledby="headingArtCollectibles"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories:</h6>
                       <a class="collapse-item" href="Paint.php">Paintings & Prints</a>
                        <a class="collapse-item" href="Sculptures.php">Sculptures & Figurines</a>
                        <a class="collapse-item" href="Antiques.php">Antiques & Vintage Items</a>
                        <a class="collapse-item" href="Coins.php">Collectible Coins & Stamps</a>
                        <a class="collapse-item" href="Crafting.php">Art Supplies & Crafting</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Orders
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Orders.php">
                    <span>Recent Orders</span>
                </a>
            </li>
            <!-- Help Me Dropdown -->
            <li class="nav-item">
                <a class="nav-link" href="helpme.html">
                    <span>Help me</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item">
                            <a class="nav-link" href="Orders.php">Orders</a>
                          </li>
                          <!-- Cart Symbol -->
                          <li class="nav-item">
                            <a href="Orders.php" class="nav-link cart-symbol">&#128722;</a>
                          </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/16190386/2021/11/27/c32bacf9-b432-405f-9ffa-b367fb31bf911637988409925-The-Indian-Garage-Co-Men-Shirts-6861637988409202-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Men's Wear – Dressland</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/11780968/2022/11/21/57eb174b-cbf1-4d1e-906c-dd87fcfb059d1669021381999-HIGHLANDER-Men-Green--White-Slim-Fit-Printed-Casual-Shirt-27-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Highlander - Buy Highlander Apparels</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/10341699/2022/8/25/c23fd879-a9b3-4515-a181-558523a71b9b1661423122029-LOCOMOTIVE-Men-Black--Grey-Slim-Fit-Checked-Casual-Shirt-342-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Men's shirts</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/18106016/2022/4/30/c0776d01-6821-418d-bbf8-7ce3420b043b1651323685311TheSouledStoreMenWhiteFloralPrintedCasualShirt1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Shop Stylish White Shirts for Holi</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/17868156/2022/4/12/4084bedc-aa91-40c8-bed9-e8e74bbdd5f31649779743002VEIRDOMenWhiteCamouflagePrintedMonochromeLooseT-shirt1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Veirdo - Buy Veirdo Brand Clothing</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/24625536/2023/9/15/01c702c0-9275-4f1a-8352-dd5bdd4cd31b1694759361927-boohooMAN-Men-Lavender-Pullover-9721694759361472-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Men Synthetic T-shirts</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/productimage/2021/3/13/e25196e9-ed18-4932-a0fb-8ac4b02a4c221615636194895-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Style Quotient Men Navy Blue</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/27623412/2024/2/15/7ea9f928-4b2d-4471-91a4-0a42a4d6a28c1708008832863VASTRADOMenClassicSlimFitOpaqueCasualShirt1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Vastrado Shirts</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/13578564/2021/4/19/15edcc67-bb0e-479e-85d6-5bba333de3c01618812777679-Being-Human-Men-Tshirts-3621618812776802-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Black Printed Round Neck T-shirt</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/24132176/2023/8/16/66bfd128-bfe5-4a1f-ba39-05ddd9942ed11692165164741-United-Colors-of-Benetton-Men-Tshirts-2361692165164375-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Regular Fit Crew-Neck T-Shirt</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/13622286/2024/2/19/a0794667-e541-4526-958d-6c9536a0009b1708340067741RoadsterMenGreenWhiteColourblockedRoundNeckPureCottonT-shirt1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Men's T-shirts</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                        <div class="card w-100 my-2 shadow-2-strong">
                            <img src="https://assets.myntassets.com/fl_progressive/h_960,q_80,w_720/v1/assets/images/1460162/2018/8/3/4fba9182-99ba-4830-9e20-b2e33d85ef991533299010266-ether-Men-Grey-Melange--Blue-Colour-Blocked-Round-Neck-T-Shirt-8981533299009728-2.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Color Block T-Shirt</h5>
                                <p class="card-text">₹ 1400</p>
                                <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                                    <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                                    <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
      
              </section>
              <!-- Products -->
              
              <!-- Feature -->
              <section class="mt-5" style="background-color: #f5f5f5;">
                <div class="container text-dark pt-3">
                  <header class="pt-4 pb-3">
                    <h3>Why choose us</h3>
                  </header>
              
                  <div class="row mb-4">
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-camera-retro fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Reasonable prices</h6>
                          <p>We offer competitive pricing without compromising on quality.</p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-star fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Best quality</h6>
                          <p>Our commitment to excellence ensures that you receive top-notch products that meet your standards.</p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-plane fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Worldwide shipping</h6>
                          <p>Wherever you are, we'll deliver your items promptly and reliably.
                          </p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-users fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Customer satisfaction</h6>
                          <p>Your happiness is our priority. We strive to exceed your expectations at every turn.</p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-thumbs-up fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Happy customers</h6>
                          <p>Countless satisfied customers testify to our dedication to providing exceptional service.</p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                    <div class="col-lg-4 col-md-6">
                      <figure class="d-flex align-items-center mb-4">
                        <span class="rounded-circle bg-white p-3 d-flex me-2 mb-2">
                          <i class="fas fa-box fa-2x fa-fw text-primary floating"></i>
                        </span>
                        <figcaption class="info">
                          <h6 class="title">Thousand items</h6>
                          <p>Choose from a diverse range of over a thousand items, ensuring you find exactly what you need.</p>
                        </figcaption>
                      </figure>
                      <!-- itemside // -->
                    </div>
                    <!-- col // -->
                  </div>
                </div>
                
                <!-- /.container-fluid -->

     
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Eshopy@2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
      </div>
  </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>