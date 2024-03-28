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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/21633276/2023/1/20/695cbf9b-8301-4e73-a151-26b8d6610a0f1674210430180SwordShapeTrippleLayerChainBrooch1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Mahi - Buy Mahi Accessories</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/18465482/2022/5/27/73e8ffea-d362-4b9b-8854-6595d4d3b46f1653636856223MahiWomenRoseGoldNecklaceandChains1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Accessories Necklace with earings</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/14974972/2021/7/29/ec72b300-d0ec-4423-9328-2b1c5a9e5af41627567962349MahiWomenRoseGold1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Mahi Accessories band</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/6555178/2018/6/11/7b41b6c7-bd4f-4ec0-934f-56a1323be7e11528699541420-Mahi-Women-Pendant-7331528699541384-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Buy Mahi Accessories Necklace</h5>
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
                            <img src="https://assets.myntassets.com/fl_progressive/h_960,q_80,w_720/v1/assets/images/2211743/2022/4/26/2d0ab7cc-5881-4f62-b7fd-5cf7062c2ea51650951584582-Roadster-Men-Silver-Toned-Analogue-Watch-MFB-PN-WTH-9720G-39-7.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Roadster Men Silver-Toned Analogue Watch</h5>
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
                            <img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/2280538/2022/4/22/de33a1c2-2da0-46d9-877a-7dc277065df81650628248322-Roadster-Men-Black-Analogue-Watch-4351650628248224-7.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Roadster Men Black Analogue Watch</h5>
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
                            <img src="https://assets.myntassets.com/h_1440,q_100,w_1080/v1/assets/images/251023/2022/8/2/dc546878-8926-4201-94ee-60a54630469a1659437976605-CASIO-Men-Vintage-Silver-Dial-Men-Vintage-Watch-A-158WA-1Q---1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">CASIO VINTAGE Men Watch D011 A-158WA-1Q</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/19172902/2022/8/3/46e44cd4-e02b-417e-9941-51238d7a4c461659528538136-Timex-Men-Green-Dial--Black-Bracelet-Style-Straps-Analogue-W-1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Timex Green Watch</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/19062122/2022/7/11/ee531257-7839-46f2-8479-723981bdf91a1657553256629Sunglasses1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Black Sunglasses For Men</h5>
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
                            <img src="https://adn-static1.nykaa.com/nykdesignstudio-images/pub/media/catalog/product/8/6/tr:w-270,/8616664VC-202875_2.jpg?rnd=20200526195200" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Polarized Golden Full Rim Square Sunglasses</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/24401070/2023/8/8/04f17b78-19c9-4a7c-a2f6-e6542db774761691493831812MastHarbourMenBlueLensSilver-TonedSquareSunglasseswithUVProt1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Blue Sunglasses - Buy Blue Colour Sunglass</h5>
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
                            <img src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/25169896/2023/9/25/216e377e-0e6d-4f02-b61b-345b356713eb1695665765976HRXbyHrithikRoshanMenWhiteColourblockedSneakers1.jpg" />
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Men Sneaker Shoes - Buy Fancy Sneakers</h5>
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