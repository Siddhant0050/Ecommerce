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
                        <img src="https://m.media-amazon.com/images/I/61U13uXMCrL._AC_UF350,350_QL80_.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://m.media-amazon.com/images/I/61U13uXMCrL._AC_UF350,350_QL80_.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://m.media-amazon.com/images/I/61U13uXMCrL._AC_UF350,350_QL80_.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://m.media-amazon.com/images/I/61U13uXMCrL._AC_UF350,350_QL80_.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://m.media-amazon.com/images/I/61U13uXMCrL._AC_UF350,350_QL80_.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="data:image/jpeg;base64,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tl33ia/iDyu+/rlEXjBypbSXsWvKlpZkXklY7998trLo77ZRar0tYd+5lqlUy1W7/wBfnMzV3zHqUwScrQKxVBAD3sPRcZlRwI9Zebdul25UXNtU7GGanr3dBmAXK7e37yulXKm6MRx4HpG/rjTGcbEbARwMmF8HEawStSa/ByuXEgNlnlbbIBcWnrpY8UOr/Kbr2SsYmkfXdfxID+VvpKNhbwTZWQFkGu1MXLPZQ4JBa9ttiABt5pC1aAR2UauRI1l2GxtcHaRLT4hN9VjzBG6PWYShsVT3K7fiOqOxc/jAuhix1VBZuA4ceYc5jWCHc9TcNqoeN/Xb4CYtTGMRq3Cr7Kiw6+PWZiviNy9/vGjNeva+d2O08egyhWsOeYqNx2ysNIMhGmTTaYSGZCNKJbDNkZ0XxJrysYeeiP8AqTmmHeymdR8SVE+SxVS2TVUUHjqISbe/FI6jERMqREQEREC3UQEEEXBBBB3g7pxHwjwT6NrOKtJ6mHYk06oZ7ap9RyDyWGzPbkeadylt6YYEEAg7QRcHpBjR5h0pp1HPIBX+NjvB3nmEhfPCTmcumeoz4LYEm5wWGuf+TT/7Y/8ASuB/9lhv/pp/9sujy1Wqgn0vjLJfPbeesE8H8IuzC4cdFKmP9syl0fSGylTHQi/aQeSFrjuZcGJHcz1r5nT9hPdX7T75onsL7o+0DyT52O5n3zsT1r5qn+mnuj7T55onsL7q/aB5JaspllmG4z155nT9hPdX7R5nT9hPdX7QPIWvzifdcc3bPXnmdP2E91ftHmdP2E91ftA8h+UHcz4anRPXvmiewnur9p981T/TT3R9oHj4tzwCJ7B81T/TT3R9o82T2F90QPIAefRVnsDyCeyvYJ98ivsjsEDyEjk7AT0AzIo06jGy03Y8ArH5CetvJj2R2CNQcBA86eDvgNjsWwHk2o099SourYfsobMx5tnOJ3rwf0NTweGShSHJQZk7WY5sx5yc5KRAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQEREBERAREQERED//Z" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
                          <p class="card-text">$320.00</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://d2xamzlzrdbdbn.cloudfront.net/products/d53d8d38-ddcd-433a-b579-5498bf182d6e23121151.jpg" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">OnePlus Nord 3 5G (8 GB RAM, 128 GB ROM, Misty Green)</h5>
                          <p class="card-text">$120.00</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
                          <p class="card-text">$120.00</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYVFRgVFhUYGRgZGBkYGRwaGBoYGRgcGBoZHBwZHBgcIS4lHB4rHxwaJzgmKy8xNTU1GiQ7QDszPy40NTEBDAwMEA8PHhISHjErJCs/PzYxPT8xNT02MzU/ODE2Pzg0NT80NTQ/MTQxNDExPzQ0PTY0NDQ/NDg/NDE0PTQ0Mf/AABEIAPIA0AMBIgACEQEDEQH/xAAcAAABBAMBAAAAAAAAAAAAAAAAAgUGBwEDBAj/xABKEAACAQIDBQQGBQgIBAcAAAABAgADEQQSIQUGMUFRByJhcRMygZGhsSMzQlJiFHJzorPB0fAkNENTdIKSsheDk/EVFqPCw9Lh/8QAGQEBAAMBAQAAAAAAAAAAAAAAAAEEBQMC/8QAJhEBAAICAQMDBAMAAAAAAAAAAAECAxEEITFREiJBBRMUYXGR0f/aAAwDAQACEQMRAD8AuKEIQCEIQCEIQCEwBA/z0gFpm8jO3N+cFhSVepnf7lMZ29ttB75BNqdqmJfTD0qdMdXu7DysQPhAuITmxGOpUxd6qIPxOq/Mzz5j94sbWJL4qqb8kf0ajwAS0a2TNqxZj1Zix+JgegcRvjgE0bGUR/nB+U5KvaHs5eGJD/mI7fJZRS0gOAA8tIsU4F0/8Tdnf3lT/o1P4RSdpezybekcedKoB78splcPfjMnIvEwL0w2++z6mi4qnfoxKn4iPOGx1KoL06iOPwsrfIzzXUxadAfYDCnj1U3TMp6qSvygem/DnMyith7/AOKoWGc1l+7VJaw6hwQR7bjWWbu5vrh8YcgOSrb1GI735rcD84EohMWmYBCEIBCEIBCEIBCEIBExUYt6t5aeBpZ371RrinTBGao37h1MDq23tqjhKZqVnsPsjizHooGv7pT282/OJxZZUZqNHgFRrM46u9rjyEZdr7TrYqqa1dsza5QPVpg/ZUfv6zkCQEKluAH8878zM2iwIrLA1hYoCLVJtRIGtKZPKbDZeNuF5sdwqk9OP8POSjYfZ3UxWHarWc0WqKDQXTh6ys91uAbjQawIHicbyE4WcnnOja2zquGqNRrqUdTqORHJlPMGcmUwM5oZoejmRTgYE6qWJYEEE3GoN7EHwPKc3o/GBRhra8C3dxe0IsVw2LbXRUrH7V9ArgDQ+PDrLQnlem9x8xLR7Pd+smTC4pu7otKqx4E8Kbk8uh8bcrwLZhExUAhCEAhCEAhCcuPx1OhTerUYKiAlmPhy8TA5N4Ns08JRatUIsBZVvZna/dVfEyidq7RqYqq1eqbu3Bfsoo4Ks796NvPjqxc3WmulNDyF9CR96NAtAwEmQszmhmEDGWZAmcwilIgZRJuAsLxAiMdVyoT0F/O2toEj3B3eGNr+lqLehQa5Frio4sQp6gcbS67crSO7hbJGGwNGn9plzubWuz94/O0kQgVn224QHD4eqEUstbKWsMwVkay342LBdOtpTx5+2elN7djjGYWrh/tMpKH7rrqp9883VEZWKsCrKSrA8Qy6H4gwNWsyDM2haAZvCbEea7QtA6fRq2o7re4e2JVyDlfifcfKIR5vZQ65TxGo84Fqdmu+GbLgsQ3eAtQc/aUAfRtf7Qtp1AlnTyzhqjX4kMp4g2II5iXn2fb2jF0vRVD/AEimve5ekXgKiDnyuOVx1gTOEIQMCZtAmV/vJvYGrfk4cpRFw7AgPVIJBRGv3U0sW4nUWHEhKNobyYegcr1AW10UFiLcjl0B5Sr98dqYnHOFChKCm6IWF2PJ28eg5Xjgm3MGnq0aXtv/ABg29GGH9lS/0g/OBDTsSv1X3wGxa3NkHtkuO+OGXXJRFvwUyfiIlu0CgOC0v+mn/wBYESOx351EHtEE2ST/AGyf6h/GSk9pdIcMg8kUW8rDSYPaqo+0T7T/AAgR1diE/wBqvstN9DYGY2FUE9AVJ90dj2r/AIn9xMbto9pecFWVnHRhcfrQFHdx+TgnxjLtnBuqsrDWxItzy629tre2PO6u93p6pouuW9zTNwbEW7pPyjjt+mHUgi37jy+NoFp7uY1K+Go1EIs1NRoeBUWI8wY6SkNy95nwNUUX71B3AdSLejLWHpF8CeIl3DXUcDAyRKY7Wt3vRVxi0XuVbK9gbJUH2ieQYADzlzWkT7TwP/Da9x9zL551sYFBWhaC8uszAwRExcwRATN1F5pmUNjAXiRZg48jHDZu0HpOlak2V0N1PAEc1P4ToCJyABgR1mjCPYlTy4QPSO7W3ExlBaqmx4Ot9UYHVT4dDzjzKN7Otu/k2KVXa1Ouy026B29Rj0F9L+MvKA27w4k08PUZTZiuVT0LnKD7L39kojar5nPQaDwtp7/GXVviR+TgdaiW+J+QlI4499vMwG9xOZxOqpOZ4HK4HQTncTqcznc9IHI81MZvqTOHpBrk8Br5wOWYvH7aWyWprTzrkNRM6j7WXqRyvGGA8bJOWzjirBvHTjLIxbZlB6gH3yt9lcLeEn7P9Ch/AvyEBeBwVOoO+isV1BI106nmJau6WKNTC0yTcqCh/wAnd/dKp2JUvmPgZYfZ0b4Z/DEVB+qsCWSvu2HFlcLTp3+srKD5J3vmBLBlWds/r4Tzq/JIFWVUIN4gzrxq9w+Gs5iCCVIsRxBgJhMzBgYtMGKiSYC6bztwGyzXd8jfSJTNRE/vVTV1U/eC94dbGN6nWdeCxzUKiVk9dGzL7iCD4EEiBmnUIGYHUAEEcdO8DPSOxcX6ahSq3vnpo/tK6/Geb6XAm1tCbdPCegNx1I2fhL/3FP4qIGrfT6mn+lH7OpKUxZ7zecurff6qn+mH7OpKUxfrHzgcVSalpFr2BsLXPIXNpvCZjYRdXElAUTiRlYwmI25KlFEHfOv88Iiu9EqoA172blz7vwg+H6n3mPeG2Ph2RdMzFQbhrH3CRM6WePxL5pmI0i9XDK1yh9kTh6BVyj3U90kgXIGlyB1tHvH7vlbvQYnLqVPrLbX2jzjNVc1Scx79yel+lpO3jPxcuCdZI0fN5tvflGQDOEo0/RqXIu4GgJQaAyG3m6q7XIJ4G3ummHA8bK5ycVQ7UaSJbO9NSL8FVQM7N4cAPEiQjZPOTXD4hhqDwo0094Y/wgNGC2e4fuu5IPJiB7hJxupt2pgmyVLNRd8z6EujsAoYG9sthqLXvzjRu6oKM3n852Gnc68zb3mBcStfUWIIBB6g85WnbPROTC1PsrUdD/mW4+KyaboVi2DoluIUof8AIzLx9kTvbsYYvC1aNu8VzIdNHXVfLUD3wKDxFPMtgbXGnmeE07exq1KiVFUqWpUw4tbK6AoT4hst/bNdKuVupB0LKQeKlDY/GKdwYDf6YQ9KJ1FR0EMnhA5PSQ9JOnJ4TBTwgc5qRSXa2mnObgnhNyCBtAOU248B0vyno3YWF9DhqNIE9yki68dFHSUZuhso4nGUaWuUOKtTxSm2fL7TZfbPQIH8/wA9IEc33+qp/ph+zqSlcd6xl1b7/VU/0w/Z1JS2MW728YCfR5KYqaHOcotxUjqJxqlhc8TOjFC7KvQTt2Js78prpSzqge6hm4AgXFvHlPNp1DpWNR6ja2H0JaxPHjYDzJ5yydi/+Hvh6aAUblALNYMW1vZuvkZA9ubMq4eo1LEDKwuV17rj748+PhJVsTefB1KdOiWVGyhcrrZCRpYHhcmccvD/ACK6m0xPwzuXysuL3Y6zPnTs21u96JTUo3KrqUYl2Qc2Rjqw52MY9nbnUsQ5xVZjTwqKWqNcqXIH2TyEnuysI3eDNbD20zE5lY8URj6yH4cBI5vnXao3oLCnQyXRFFg2YcWA00PL8U48b7mGZw5rbn48zDZ4fLyc3BGKf569418Ko29hqauWpuGQuwQXuwS5yFj5WjNHIoQroeKk/Axul5UmvpnUnjZPOSPHVPR+jvfLUopY8syj+BMjeyecm+Pwa1MNTB0yohUgXKm19Ol+fnCCN1sUMhUnqI7vWCXdvVGvn0tITsvB4kHuIDbicwAPvlh7jbrHEn8oxLXSnUKiiLOrMANXbmut8vAQLB3UwzU8JSVhZspYjoWYtb4x3Mx5eXuheBQ3abscYbHOyiyYgCovQMtlce0m8igMtztowObDUa1henVClrfZqC3Hpex8xKjgKhCEAmCJmEDFopeMAJsprrAsTsdAOIxJPFadMDwDEk/KW1Kk7Fta2Kb8NMX98tu8CNb8fVU/0w/Z1JTNYXqDxNuVpcu/H1VP9MP2dSU07lagINiDcEaEe2AmjhHq1GVFuwFz4aXiGQhSp0YMQRfgQfncR63ZqXxNS51ZFN+uo1jbtJLO4/Gx954yLRHRYyUiMEWhIsDvBh8WgwO0iBZfosQxClSBZczdeGvAxn2ZupTpVFfHHJh6bMzvcBa2t6WSxNwRe4HhIztZOBPj4+zX5TZtbaVR8Nh6bNdUapl017rBVBPOwiYnarjtEws9dvLjKD1aalEotakvAj0QzBj1vbh0it9Vu2HqAcc6nyIVwP1TGPdDDFNntfjVzsOpz9xdPOP2+pt+ToLcXf2KgQfEyhy51ysMx36/05/Q7Wtz7anpE6VHtGllxVVRcjU6Dy5e2MTC2kkO0cUy4uqyMy8RdSQeXMeUjzG5vNBd5OvvW15k7bK5yw7f0dPzE/2yvNlc5YlicOluOSnb3Q4ObYotm8jLF7Nf6tU/xD/7ElYbFxLu7ZFTJqM7lu8RxyAcvGWh2bD+j1R0xL+Nu5T5wJfCEIEQ7VaGfZmI/D6N/PLUU2lEIbz0Lv8AIG2diweHoXPtGo+InnqnA2WhaZhAxaFpmEAE2Ac4kCLq6IT4QLG7FV/rL/o1t7+ctaVl2LUvosS1v7RB7kv++WbAjO/H1VP9MP2dSUviT3z5iXRvx9VS/Tf/AB1JS+L9YwOnAYj0eJRybBrqf8y2H61o/vsT8oxa0y2RHVixHG6Ad0X0u17jyMirkPTygd5TfNfjr8Lfukq2HtL0yKwbLUpkdLgrwYjiVPOeclbTSYr3+F/j6y45wz37wYN5dhPhnNJ7spuab29deRJGmbqIz4nBrkp3v3TVPvcHnLkpbQoYpfRYhUDG10cd1j96k3Q++al3PwKm5pAqveAao2QFu8xsTbjMqv1OccenNWdx+u6jfjWraYjojvZ3hsRUVS5/o1Nr0xYXdjyHVQdb9ZnefHq9dnU3SmhRTy7urW/zWHsjztjb6BfRYYqfss62yovNUA4t8pWu9OPCIMOvrNYN4KL8fxE2JnriUyZ835OWNeI/1pcHj14tLZrRrx+5lGjUzekqH7RNvaY2GOmOdAiKqkMB3uYPQxrmrrTNtMzO5PGyucsGu5GEDDiKAI88tx8pX2yecsDE/wBT/wCQP9hhDGFoqlQIosFRPiikn4yw+zf6iv8A4qp+zpyAD69vzU/ZpJ92cfUYj/FVP9lOBL4QhAjXaPWybMxR60iv+shf3ygKcvHtYq5dm1B956SnxDVFuPdKPpjrAXaFpsSmWIVQSTwAnfhtju4bMwQrxFi1vbAbAJmdL4Jwpcd5FNi3S+g+M5xAUBDFep5kD3xYERilvkHVvlAt3sfpEYSo33q7fqIi/MSfyH9l1HLs9CeLvVf/ANRlHwAkwgRnfk/Q0v0w/Z1JS+L9Yy6d+R9DT/TD9nUEpbFesYHKtTKQffNil6b+lok3AubdL6g+E56kxTxTICPsta/XTpCa2mtotCS4feTD1VyVbIx4qyhkPkSs312wwUMWpWBNr6i6mxsoFpD6q038D0vx8IYvBoKdK76Xqcx9/wAJExuWjX6jbXurEydtq7zKvdo3duAa1gvQDrIw9wTUqHvm+h4gzL1KaXy8eo4gzjxuKao5ZrXNr20GgtfjJVuRyr55909PDnqsSbnnEQMIVjxsrnLBxI/of/JH+wyvtlc5YdZb4QDrSA/UsPnAwD9OfzU/ZpLA7OfqK/8Ain/2U5Xq/XA8mSkw9tNP4Sw+zofQV/8AEv8A7KUCW3heEwIFc9tGIAw+Hp/fr39lNST8bSpF5Sw+2msTXwqclp1H9pZB8hK+piA47Mq+ibOeB0PkY71FK+kVdSxULbgc3D+fAxoIz2AVjysBcnwAjj6N0UIzZWU5CRqyZge6TwzD98BWKxYRBRp6jg5HO/GMLU8pK9DJPh8AqjT/ALxix5Bqvbhmt7oGhRNWLPfXwDH9X/vOikus52BeowHQKPbofnA9A7m0CmBwy8D6JCfbrHuacJSyIifdRV/0qBN0CO78L9Ah6VVJ/wBLj5mUpiVu5HjLw3ypk4ViNcrqx8s2vzlI48EO3gTA34TZa1HyZspADagkNdgOXnFtuyMtxVBI7ugI7xBZV16qDrwFrHWNwxzqbg6/9v4QG3sQoFqjd1So1HqkhiOH4R7oG7/ynULKrjIGcpmJUgMM9+B/A/u8RNTbpHOEeoqFqbVEBRiSoYKGIUd0FjztOZ9vV7qS98puubWxAIub8TqePWc7bfraXcmwYC5PBiCR4DQe6B21Ny6l7ZwRmC5vVGYqra34DvDUzTV3MrKFZigDNlJLgBbjNmPd9Xjrw4dZztvVibZfSG2TJbkQL2vpqfHwgN8MSLd8GyZB3Qe73dD19WA343ZRpuyFgSLag3DBgGBB8QQY1ER0x22Hq1GqOAWa3DQAAAAADwEayYDtsrnLJP8AV0/MX5CVpss6GWZiVy0EXoij4CA07JpVA91dWUcnvmQAcFI5eEtDs4/q9Q9cS5/USVxsVvWPgZZnZ5Sy4Qk/bq1G+Sj4LAlMwJmECmO2Mf02kTwNA29j6/MSEUtCp8Rfylh9tGFPpcLV5MtSmfAgow+F5XYgS7HYlMMncsXdbhugPynHsamXRgTcnvE9SecYGYkAEk2+UeMHtlaa2VCzWt0EDrr4k01JPHgo6mMK3PHjxJ6kxeJrs7l3NyeHRR0AgiwFZrKW6Tp3Pw/pMVhgR69cHzCK7fIH3RsxlS9kX2yddl2zw2LD8qNJm/zP3F+Gb3QLhaZiRFQNGNw4qIyNwZSvlfnKN2/s5kd1YEMhsw5+B8iLG8vgxi3m3cTFgHNkqqO64F+vdYXGZdeECg6lM9D7py1EPQyZ7Z3cx2HJL4f0i/epAuPMqDceWsjgxYNxZQeY1BB6ENqDAZqinpOZ1PSSI1L/AHYhmHRYEXqA+M0sD4yW6fdX3wCr9xffAiGvjMASZKi/cEXUWiws1EH2lfbpAYtgUi9VEtoWDP8Amg6j2yxdqVwVsPL2SK7PpJTJy2Fz1vbhpcztxe0FyZQ1yeJ+6Bq3wvAMHtBw6UqSZmdwgFrliTY28hrL52PgfQUKdIfZUA+LG+Y++Qvsx3ZVKYxlRfpXvkBGiJwBGupPG+ksK8AtMNM3mrE4laaO7myorOx6BRc/CBTHbHtTPi6dFGJFBDnF9Mz2Oo65RIbSYGK2niWxFariG41XZ+vdvZfgJw6qdIDhaZE4xi7fZ+P/AOTJxh5L/Pugd4E0YjFgaLqflONnduJmzD4fWB17Pwx9Y8TrfrLd7JsFahVxBGtWoFBt9mmLCx6Zi0rFFIWwF2JCAdSbAS+d3dn/AJPhqVHmiLfS3eOrfGA5QmDMwCEIQAfzykF3+3EXFqa1AKmIUE8O7VH3XAGp6HxMnULwPLNXDlWKMjI6khka4ZSOIIOtxEeilzdo+5orq2Jw6/TqAXUaemVf/euvnzlOq9/3+BGhHnAR6Hx+MyKZ6/GbIQEhD94wyH7zRYMzA1Cn1YxVRe44H3W9unCLikI59YHovdrELUwmHdLZTSTgbgWABGnQgx0lbdkW2w1N8Gx79Ml0HVGOoHiDLJgEr3ta256OguFQ9+ue/Yi60xxzdAeEnG0cclCm9WobIilmPlwHmZ5323th8XiHxD8W0ReSID3R52+cDiVbC3s90QyxV5m8DSKcUKc01MU32ROxTpASEnXhKet5zqLmOCAKpPQXgSPcnZv5RjUDL3KINR9DYnTIrHkdbgeEugfORfcDYn5NhgzLapWPpHv6wBAyqfIaSUGAGZhCAQhCAQhCAm0qvtI3GPexmGUnTNWpLx041EHC45iWtMAwPLKv/P8AHxiry3t9OzhazNiMJlSrqWQ+pU6n8LdPGVDiaD0nNOqjU3X1lYajx00I8oBeGaIvC8DaDC81hpm8DvwGNelUStTNnRgy8gbcVPUEcpfW7m8lLF4cVlYLlH0oJH0bAd4a/ZvexnndXtN6VTZgGYBwAwDEBgD9oXs0CWb/AO935a/oqZP5Mh8jVYW7xH3QRp5mQ8QK2mLwFTDC81tXHIXmUc21FoCqdMDgJuWawJvopA34ZOfPlJjuBu+cVWFZxehRYMPu1ai6hfFV4+caN193auOfKl0pKbVKnIHmi/eblpoL8ZeGz8ClCmtKmoVFFlA+JPjeB0XmYEwgEIQgEIQgEIQgEIQgEatubvYfFpkr0w/RuDL4husdYQKc232U1kJbC1BVS+iVDlcDp6QaG3lIHtHZ1bDHLXoVKZ6utlPkwup989PCJrUlcWZVYdGGYe6B5YBvwmby/todn2zqtycMqE8TTJQ+emnOR7GdkNE/V4qsvg2V19otrAqO8AZYuI7IcQPUxNJvz0ZT+rG2v2YbRXgKL/m1CvwZYEPV4rQyT/8ADfaf9wn/AF0/hF0uzPaROtOmviaqn32F4EV9H+KKFPxk9w3ZNiz9ZiaKD8Ku5/W0EfsB2TYdda1erVt9kEIvwgVRRXMwRAzseCopZj5AfOT/AHc7OalUq+L+jp3BFNdajeDMPVXqJZeyNh4fCrloUEp34lR3ifFjqT7Y5wNGDwiUkWnTUIiDKqqLBQOk3kwhAIQhAIQhAIQhAIQhAIQhAIQhAIQhAIQhADMiEIBCEIAZiEIBCEIBCEIBCEIBCEIH/9k=" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
                          <p class="card-text">$790.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_h7G5OhXtDwqcuCeErpbSHpno3cdQQcZ1Ww&usqp=CAU" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
                          <p class="card-text">$120.00</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcC1awB3Zu5EH7exoQzFg-nS-aUAEz2BVlzg&usqp=CAU" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
                          <p class="card-text">$99.50</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
                      <div class="card w-100 my-2 shadow-2-strong">
                        <img src="https://fdn2.gsmarena.com/vv/pics/xiaomi/xiaomi-redmi-8-2.jpg" class="card-img-top" style="aspect-ratio: 1 / 1" />
                        <div class="card-body d-flex flex-column">
                          <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
                          <p class="card-text">$120.00</p>
                          <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
                            <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
                          </div>
                        </div>
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