<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
    <link href="{{ asset('documentaion/images/favicon.png') }}" rel="icon" />
    <title>ITAJER | Documentation</title>
    <meta name="description" content="Your ThemeForest item Name and description">
    <meta name="author" content="itajer.com">

    <!-- Stylesheet
============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('documentaion/vendor/bootstrap/css/bootstrap.min.css') }}" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('documentaion/vendor/font-awesome/css/all.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('documentaion/vendor/magnific-popup/magnific-popup.min.css') }}" />
    <!-- Highlight Syntax -->
    <link rel="stylesheet" type="text/css" href="{{ asset('documentaion/vendor/highlight.js/styles/github.css') }}" />
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('documentaion/css/stylesheet.css') }}" />
</head>

<body data-spy="scroll" data-target=".idocs-navigation" data-offset="125">

    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader End -->
    @if(Config::get('app.locale') == 'en')
    <!-- Document Wrapper   
=============================== -->
    <div id="main-wrapper">

        <!-- Header
        ============================ -->
        <header id="header" class="sticky-top">
            <!-- Navbar -->
            <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
                <div class="container-fluid">
                    <!-- Sidebar Toggler -->
                    <button id="sidebarCollapse" class="navbar-toggler d-block d-md-none"
                        type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>

                    <!-- Logo -->
                    <a class="logo ml-md-3" href="index.html" title="iDocs Template"> <img
                            src="{{ asset('documentaion/images/logo.png') }}" alt="iDocs Template" /> </a>
                    <span class="text-2 ml-2">v1.0</span>
                    <!-- Logo End -->

                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#header-nav"><span></span><span></span><span></span></button>

                    <div id="header-nav" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="dropdown dropdown-language nav-item">
                                <a class="navbar-brand" href="{{ route('seller') }}"> Dashboard Seller</a>
                            </li>
                            <li class="dropdown dropdown-language nav-item">
                                <a class=" nav-link" href="{{ route('lang.switch','en') }}">English</a>
                            </li>
                            <li class="dropdown dropdown-language nav-item">
                                <a class=" nav-link" href="{{ route('lang.switch','ar') }}">Arabic</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>
        <!-- Header End -->

        <!-- Content
     -->
        <div id="content" role="main">

            <!-- Sidebar Navigation
	    ============================ -->
            <div class="idocs-navigation bg-light">
                <ul class="nav flex-column ">
                    <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_installation">Basic Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">Admin Panel
                                    Structure</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sass">Main Sections</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_layout">Products</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_header">View Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_addnewproduct">Add New Products</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_navbar">Edit Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sidebar">Add Attributs to Product</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_footer">Add Gallery to product</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_box_layout">Add Frequently Bought
                                    Together </a></li>

                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#idocs_changelog">Other Sittings</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#v1-2">Orders</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v1-1">Subscriptions</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v1-0">Seller Sittings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Docs Content
	    ============================ -->
            <div class="idocs-content">
                <div class="container">

                    <!-- Getting Started
		============================ -->
                    <section id="idocs_start">
                        <h1>Documentation</h1>
                        <h2>Below is how seller can control the admin panel</h2>
                        <p class="lead">Thank you so much for using our patform and wish you can get what you want with
                            us.</p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><strong>Version:</strong> 1.0</li>
                                    <li><strong>Author:</strong> <a href="https://9yards.ae" target="_blank">9Yards
                                            Team</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><strong class="font-weight-700">Created:</strong> 1 March, 2022</li>
                                    <li><strong>Update:</strong> 21 May, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <p class="alert alert-info">If you have any questions that are beyond the scope of this help
                            file, Please feel free to email via <a target="_blank"
                                href="mail:alomda.alslamt@gmail.com">Team Support Email</a>.</p>
                    </section>

                    <hr class="divider">

                    <!-- basic Info
		============================ -->
                    <section id="idocs_installation">
                        <h2>Basic Info</h2>
                        <p class="lead">Follow the steps below to view your site template:</p>
                        <p>
                            Itajer Seller admin panel is the place where the seller can control his section on the main
                            website
                            <br> <a href="{{ route('homepage') }}" target="_blank"> <i
                                    class="fas fa-external-link-alt"></i> Itajer Home Page</a> from now on the below
                            info will guid you
                            to be able to use your panel perfectly!!.
                        </p>
                        <p>
                            Now let's start with the first section which is <code>Panel Structure</code>.
                        </p>
                    </section>

                    <hr class="divider">

                    <!-- HTML Structure
		============================ -->
                    <section id="idocs_html_structure">
                        <h2>Panel Structure</h2>
                        <p>Itajer follows a simple and easy to customize and add the products. Here is the sample for
                            your
                            reference:<br>
                            The template is based on <b class="ml-1" "></i> Left side bar & Right side Panel</b></p>
                            <a class=" popup-img"
                                href="{{ asset('storage/documentaion/dashboard_without_content.png') }}"><img
                                    src="{{ asset('storage/documentaion/dashboard_without_content.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 600px"></a>
                                <p> The Above Image is the dashboard with out any information where the lest side <b>
                                        The black one </b> <br>
                                    is where the user can go through the dashborad and select the section that he wants.
                                    and it containes
                                    <code>
                                        <ul>
                                            <li>Dashboard </li>
                                            <li>documentaion </li>
                                            <li>Products </li>
                                            <li>Orders </li>
                                            <li>Subscribtion </li>
                                            <li>Sittings</li>
                                        </ul>
                                    </code>
                                </p>

                                <p> Once the seller start getting notification and add products <b>The Dashboard </b>
                                    will be filled with the Important info Such as the below image</p>
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}"><img
                                        src="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 600px"></a>
                    </section>

                    <hr class="divider">

                    <!-- Sass
		============================ -->
                    <section id="idocs_sass">
                        <h2>Main Sections</h2>
                        <p>As Above there are few sections that seller must focus on to get things done correctly!!</p>
                        <code>
                            <ol>
                                <li>Dashboard to view the statistic Informations</li>
                                <li>documentaion to view the guid book </li>
                                <li>Products to view the products and every thing related to products </li>
                                <li>Orders to view the Sold Products Invoices and every thing related to orders </li>
                                <li>Subscribtion to view the the seller package status and the Expired Date</li>
                                <li>Sittings to view the the seller details </li>
                            </ol>
                        </code>
                        <a class="popup-img" href="{{ asset('storage/documentaion/left_side_bar_products.png') }}"><img
                                src="{{ asset('storage/documentaion/left_side_bar_products.png') }}"
                                class="img-fluid img-thumbnail" alt="image" style="width: 200px;height:100%"></a>

                        <p>Below will go deep with each of the sections so lets start with <code>Products.</code></p>
                    </section>

                    <hr class="divider">

                    <!-- Layout
		============================ -->
                    <section id="idocs_layout">
                        <h2>Products Managments </h2>
                        <p class="lead mb-5">Products Section where the seller can View , Edit , Add Attributs , delete
                            products</p>

                    </section>

                    <!-- Header
		============================ -->
                    <section id="idocs_header">
                        <ul>
                            <code>
                                <li> View Produts </li>
                            </code>
                            <p>to view all the products click on the <strong>left side bar</strong> view products tab as
                                shown below</p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"><img
                                    src="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 200px;height:100%"></a>
                            <p>Then the right bar will show the detailes of the products like the below <b> (in the
                                    Empty case you will see nothing)</b> </p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/products_view_without_data.png') }}"><img
                                    src="{{ asset('storage/documentaion/products_view_without_data.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            <p>Once the seller add products <strong>(this what we will talk about next section)</strong>
                                the products will be inserted in view section then the seller will be able to do the
                                needed for the products (Edit,delete and add more features) as shown below</p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/view_prodcuts_with_data.png') }}"><img
                                    src="{{ asset('storage/documentaion/view_prodcuts_with_data.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                        </ul>
                    </section>

                    <hr class="divider">

                    <!-- Navbar
		============================ -->
                    <section id="idocs_addnewproduct">
                        <h2>Add New Products</h2>
                        <p>There are 2 ways to view the add products form</p>
                        <ol>
                            <li> Add product button on top right of the <code>view products page</code> </li>
                            <li> Create products on the <code> left side bar </code></li>

                        </ol>
                        <p> as shown below the place of buttons</p>

                        <div class="row">
                            <div class="col-6">
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/addproductbutton.png') }}"><img
                                        src="{{ asset('storage/documentaion/addproductbutton.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            </div>

                            <div class="col-6">
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"><img
                                        src="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            </div>

                        </div>
                        <p>Once the seller click one of the above buttons will be redirect to the add product from where
                            he will be able to fill the needed section to create a new product as shown below </p>
                        <a class="popup-img" href="{{ asset('storage/documentaion/add_new_product_table.png') }}"><img
                                src="{{ asset('storage/documentaion/add_new_product_table.png') }}"
                                class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                        <p>Click the video below to see more about how to view <code> add new product </code> form</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/add_product_video.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <h3 class="mt-2 mb-2">Show the forms of add new product </h3>
                        <p> Once the seller enter the add product page he can fill the required data of inupts then save
                            them as shown the below video </p>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Itajer is a multi
                            language website so there are 2 types of forms <b>(Arabic & English)</b> so do not miss any
                            of them becuase the once that the seller will fill it will be shown in the front side as it
                            is.</p>

                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/add_new_product_fill.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <h3 class="mt-2 mb-2">Add Real Product and Fill the form</h3>

                        <p>As we have seen that the form needs to be filled to add the new product so there are some
                            tricks can help to get the best options </p>

                        <b> * Required Forms * </b>
                        <code>
                            <ul>
                                <li><b>Title : </b> the product name (English Language)</li>
                                <li><b>Arabic Title : </b> the product name (Arabic Language)</li>
                                <li><b>Main Category : </b> the product category
                                    <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> If the Main
                                        Category has a sub category then there will be form will appear under it to
                                        select the sub category or you can keep it empty to append the product to main
                                        category ONLY</p>
                                </li>
                                <li><b>Sub Category : </b> Hidden Field appears when you select a Main Category has sub
                                    categories.</li>
                                <li><b>Summary : </b> Short description about the product (English Language)</li>
                                <li><b>Arabic Summary : </b> Short description about the product (Arabic Language)</li>
                                <li><b>Description: </b> Long Description about the product (English Language)</li>
                                <li><b>Arabic Description : </b> Long Description about the product (Arabic Language)
                                </li>

                                <li><b>Choose Image : </b> Product image that will appear for user</li>
                                <li><b>Price : </b> Product Price</li>
                            </ul>
                        </code>

                        <b> * Not Required Forms * </b>
                        <code>
                            <ul>
                                <li><b>Choose Size Guid : </b> Add size guid table as an image for the product (Clothes
                                    type) or you can add some other images with diffrenet colors or featuers </li>
                                <li><b>Additional Info : </b> Add some features or some other information for the
                                    product (English Language)</li>
                                <li><b>Arabic Additional Info : </b> Add some features or some other information for the
                                    product (Arabic Language)</li>
                                <li><b>Return Policy : </b> Add some Policy for the product (English Language)</li>
                                <li><b>Arabic Return Policy : </b> Add some Policy for the product (Arabic Language)
                                </li>
                                <li><b>Stock : </b> Add number of items in stock ( if you keep it empty then the product
                                    will be in stock )</li>
                                <li> <b> Offer Price : </b> Add a special price if you have then the system will count
                                    the <b>(discound)</b> automaticlly</li>
                                <li><b> Frequently Bought Together : </b> This option if the seller want to add a group
                                    of products to buy them togother. (below is a video to show how it looks.)</li>
                            </ul>
                        </code>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Frequently Bought
                            Together can select them from an existing products (the seller must add the products then he
                            can choose them from the dropdown menu)</p>

                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Enable button is to make
                            the product active or not</p>

                        <div class="row">
                            <div class="col-6">
                                <b>* Video below is to add other image so when user hover on the product image will see
                                    other one *</b>
                                <video width="100%" height="440" controls>
                                    <source src="{{ asset('storage/documentaion/videos/add_product_other_image.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-6">
                                <b>* Video below is to show the product after adding the offer price & hover image
                                    option*</b>
                                <video width="100%" height="440" controls>
                                    <source src="{{ asset('storage/documentaion/videos/tricks_products.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                        <div class="mt-4 mb-4">
                            <b class="mb-4">* Video below is to show the product after inserting along with Frequently
                                Bought Together *</b><br>
                            <video width="100%" height="440" controls>
                                <source src="{{ asset('storage/documentaion/videos/single_product.mp4') }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Sidebar
		============================ -->
                    <section id="idocs_navbar">
                        <h2>Edit Products</h2>
                        <p> Once the seller add the products he can edit on each of them as shown below.</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/edit_product.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                    <hr class="divider">

                    <!-- Box Layout Style
		============================ -->
                    <section id="idocs_sidebar">
                        <h2>Add Attributes To Products</h2>
                        <p>For now the seller can just add some images to be shown in the single product page</p>
                        <ol>
                            <li>Products Gallery</li>
                        </ol>

                    </section>

                    <hr class="divider">

                    <!-- Content
		============================ -->
                    <section id="idocs_footer">
                        <h2>Products Gallery</h2>
                        <p> below the video shows how to add a gallery to the product </p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/gallery_product.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                    </section>

                    <!-- Typography
		============================ -->
                    <section id="idocs_box_layout">
                        <h2> Frequently Bought Together</h2>

                        <p> * Video below is to show how to add new product with Frequently Bought Together * </p>

                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/full_add_product_.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                    <hr class="divider">

                    <section id="idocs_changelog">
                        <h2>Changelog</h2>
                        <p class="text-4">See what's new added, changed, fixed, improved or updated in the latest
                            versions. </p>
                        <p class="alert alert-info mb-5"> For Future Updates Follow Us <a target="_blank"
                                href="http://themeforest.net/user/harnishdesign?ref=HarnishDesign">@themeforest</a> / <a
                                target="_blank" href="http://facebook.com/harnishdesign">@facebook</a> / <a
                                target="_blank" href="http://twitter.com/harnishdesign">@twitter</a> / <a
                                target="_blank" href="https://dribbble.com/harnishdesign">@Dribbble</a></p>

                        <h3 id="v1-2">Orders</h3>
                        <p> There are two way(s) to view all orders </p>
                        <ol>
                            <li> <code> View All </code> button on the dashboard below the statistice boards </li>
                            <li> from the left bar under the <code> Order(s) Managments </code> </li>
                        </ol>
                        <p> The seller will be able to view the purchased product(s) beside view the invoices and
                            download the invoices as a PDF</p>
                        <p> below the video will show how to view the orders and download the invoices</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/order_video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                        <h3 id="v1-1">Subscriptions</h3>
                        <p> The subscribe is what the seller select from the begging then he will be able to upgarde the
                            package or view the current package </p>
                        <p> below is a video to show the subscription</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/subscription.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                        <h3 id="v1-0">Seller Sittings</h3>
                        <p> The final things are how the seller can edit the personal , company details </p>
                        <p> below is a video to show how to do the things </p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/seller_sittings.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                </div>
            </div>

        </div>
        <!-- Content end -->

        <!-- Footer
     ============================ -->
        <footer id="footer" class="section bg-danger footer-text-light">
            <div class="container">
                <p class="text-center text-white">Copyright &copy; 2022 <a href="{{ route('homepage') }}"
                        class="text-white">ITajer</a>. All
                    Rights Reserved.</p>
                <p class="text-2 text-center mb-0 text-white">Design &amp; Develop by <a class="btn-link text-white"
                        target="_blank" href="http://9yards.ae">9yards Team</a>.</p>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->
    @else

    <!-- Document Wrapper   
=============================== -->
    <div id="main-wrapper">

        <!-- Header
============================ -->
        <header id="header" class="sticky-top">
            <!-- Navbar -->
            <nav class="primary-menu navbar navbar-expand-lg navbar-dropdown-dark">
                <div class="container-fluid">
                    <!-- Sidebar Toggler -->
                    <button id="sidebarCollapse" class="navbar-toggler d-block d-md-none"
                        type="button"><span></span><span class="w-75"></span><span class="w-50"></span></button>

                    <!-- Logo -->
                    <a class="logo ml-md-3" href="index.html" title="iDocs Template"> <img
                            src="{{ asset('documentaion/images/logo.png') }}" alt="iDocs Template" /> </a>
                    <span class="text-2 ml-2">v1.0</span>
                    <!-- Logo End -->

                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#header-nav"><span></span><span></span><span></span></button>

                    <div id="header-nav" class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="dropdown dropdown-language nav-item">
                                <a class="navbar-brand" href="{{ route('seller') }}"> لوحة التحكم بالمستخدم</a>
                            </li>
                            <li class="dropdown dropdown-language nav-item">
                                <a class=" nav-link" href="{{ route('lang.switch','en') }}">English</a>
                            </li>
                            <li class="dropdown dropdown-language nav-item">
                                <a class=" nav-link" href="{{ route('lang.switch','ar') }}">Arabic</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        </header>
        <!-- Header End -->

        <!-- Content
============================ -->
        <div id="content" role="main">

            <!-- Sidebar Navigation
============================ -->
            <div class="idocs-navigation bg-light">
                <ul class="nav flex-column ">
                    <li class="nav-item"><a class="nav-link active" href="#idocs_start">ابدء</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_installation">معلومات أساسية</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">هيكل لوحة الإدارة</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sass">الأقسام الرئيسية</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_layout">منتجات</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_header">مشاهدة المنتجات</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_addnewproduct">أضف منتجات جديدة</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_navbar">تحرير المنتجات</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sidebar">Add Attributs to Product</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_footer">Add Gallery to product</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_box_layout">Add Frequently Bought
                                    Together </a></li>

                        </ul>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="#idocs_changelog">Other Sittings</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#v1-2">Orders</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v1-1">Subscriptions</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v1-0">Seller Sittings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- Docs Content
============================ -->
            <div class="idocs-content">
                <div class="container">

                    <!-- Getting Started
    ============================ -->
                    <section id="idocs_start">
                        <h1>Documentation</h1>
                        <h2>Below is how seller can control the admin panel</h2>
                        <p class="lead">Thank you so much for using our patform and wish you can get what you want with
                            us.</p>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><strong>Version:</strong> 1.0</li>
                                    <li><strong>Author:</strong> <a href="https://9yards.ae" target="_blank">9Yards
                                            Team</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <ul class="list-unstyled">
                                    <li><strong class="font-weight-700">Created:</strong> 1 March, 2022</li>
                                    <li><strong>Update:</strong> 21 May, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <p class="alert alert-info">If you have any questions that are beyond the scope of this help
                            file, Please feel free to email via <a target="_blank"
                                href="mail:alomda.alslamt@gmail.com">Team Support Email</a>.</p>
                    </section>

                    <hr class="divider">

                    <!-- basic Info
    ============================ -->
                    <section id="idocs_installation">
                        <h2>Basic Info</h2>
                        <p class="lead">Follow the steps below to view your site template:</p>
                        <p>
                            Itajer Seller admin panel is the place where the seller can control his section on the main
                            website
                            <br> <a href="{{ route('homepage') }}" target="_blank"> <i
                                    class="fas fa-external-link-alt"></i> Itajer Home Page</a> from now on the below
                            info will guid you
                            to be able to use your panel perfectly!!.
                        </p>
                        <p>
                            Now let's start with the first section which is <code>Panel Structure</code>.
                        </p>
                    </section>

                    <hr class="divider">

                    <!-- HTML Structure
    ============================ -->
                    <section id="idocs_html_structure">
                        <h2>Panel Structure</h2>
                        <p>Itajer follows a simple and easy to customize and add the products. Here is the sample for
                            your
                            reference:<br>
                            The template is based on <b class="ml-1" "></i> Left side bar & Right side Panel</b></p>
                        <a class=" popup-img"
                                href="{{ asset('storage/documentaion/dashboard_without_content.png') }}"><img
                                    src="{{ asset('storage/documentaion/dashboard_without_content.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 600px"></a>
                                <p> The Above Image is the dashboard with out any information where the lest side <b>
                                        The black one </b> <br>
                                    is where the user can go through the dashborad and select the section that he wants.
                                    and it containes
                                    <code>
                                        <ul>
                                            <li>Dashboard </li>
                                            <li>documentaion </li>
                                            <li>Products </li>
                                            <li>Orders </li>
                                            <li>Subscribtion </li>
                                            <li>Sittings</li>
                                        </ul>
                                    </code>
                                </p>

                                <p> Once the seller start getting notification and add products <b>The Dashboard </b>
                                    will be filled with the Important info Such as the below image</p>
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}"><img
                                        src="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 600px"></a>
                    </section>

                    <hr class="divider">

                    <!-- Sass
    ============================ -->
                    <section id="idocs_sass">
                        <h2>Main Sections</h2>
                        <p>As Above there are few sections that seller must focus on to get things done correctly!!</p>
                        <code>
                            <ol>
                                <li>Dashboard to view the statistic Informations</li>
                                <li>documentaion to view the guid book </li>
                                <li>Products to view the products and every thing related to products </li>
                                <li>Orders to view the Sold Products Invoices and every thing related to orders </li>
                                <li>Subscribtion to view the the seller package status and the Expired Date</li>
                                <li>Sittings to view the the seller details </li>
                            </ol>
                        </code>
                        <a class="popup-img" href="{{ asset('storage/documentaion/left_side_bar_products.png') }}"><img
                                src="{{ asset('storage/documentaion/left_side_bar_products.png') }}"
                                class="img-fluid img-thumbnail" alt="image" style="width: 200px;height:100%"></a>

                        <p>Below will go deep with each of the sections so lets start with <code>Products.</code></p>
                    </section>

                    <hr class="divider">

                    <!-- Layout
    ============================ -->
                    <section id="idocs_layout">
                        <h2>Products Managments </h2>
                        <p class="lead mb-5">Products Section where the seller can View , Edit , Add Attributs , delete
                            products</p>

                    </section>

                    <!-- Header
    ============================ -->
                    <section id="idocs_header">
                        <ul>
                            <code>
                                <li> View Produts </li>
                            </code>
                            <p>to view all the products click on the <strong>left side bar</strong> view products tab as
                                shown below</p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"><img
                                    src="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 200px;height:100%"></a>
                            <p>Then the right bar will show the detailes of the products like the below <b> (in the
                                    Empty case you will see nothing)</b> </p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/products_view_without_data.png') }}"><img
                                    src="{{ asset('storage/documentaion/products_view_without_data.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            <p>Once the seller add products <strong>(this what we will talk about next section)</strong>
                                the products will be inserted in view section then the seller will be able to do the
                                needed for the products (Edit,delete and add more features) as shown below</p>
                            <a class="popup-img"
                                href="{{ asset('storage/documentaion/view_prodcuts_with_data.png') }}"><img
                                    src="{{ asset('storage/documentaion/view_prodcuts_with_data.png') }}"
                                    class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                        </ul>
                    </section>

                    <hr class="divider">

                    <!-- Navbar
    ============================ -->
                    <section id="idocs_addnewproduct">
                        <h2>Add New Products</h2>
                        <p>There are 2 ways to view the add products form</p>
                        <ol>
                            <li> Add product button on top right of the <code>view products page</code> </li>
                            <li> Create products on the <code> left side bar </code></li>

                        </ol>
                        <p> as shown below the place of buttons</p>

                        <div class="row">
                            <div class="col-6">
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/addproductbutton.png') }}"><img
                                        src="{{ asset('storage/documentaion/addproductbutton.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            </div>

                            <div class="col-6">
                                <a class="popup-img"
                                    href="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"><img
                                        src="{{ asset('storage/documentaion/left_side_bar_products_view.png') }}"
                                        class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                            </div>

                        </div>
                        <p>Once the seller click one of the above buttons will be redirect to the add product from where
                            he will be able to fill the needed section to create a new product as shown below </p>
                        <a class="popup-img" href="{{ asset('storage/documentaion/add_new_product_table.png') }}"><img
                                src="{{ asset('storage/documentaion/add_new_product_table.png') }}"
                                class="img-fluid img-thumbnail" alt="image" style="width: 100%;"></a>
                        <p>Click the video below to see more about how to view <code> add new product </code> form</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/add_product_video.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <h3 class="mt-2 mb-2">Show the forms of add new product </h3>
                        <p> Once the seller enter the add product page he can fill the required data of inupts then save
                            them as shown the below video </p>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Itajer is a multi
                            language website so there are 2 types of forms <b>(Arabic & English)</b> so do not miss any
                            of them becuase the once that the seller will fill it will be shown in the front side as it
                            is.</p>

                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/add_new_product_fill.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>

                        <h3 class="mt-2 mb-2">Add Real Product and Fill the form</h3>

                        <p>As we have seen that the form needs to be filled to add the new product so there are some
                            tricks can help to get the best options </p>

                        <b> * Required Forms * </b>
                        <code>
                            <ul>
                                <li><b>Title : </b> the product name (English Language)</li>
                                <li><b>Arabic Title : </b> the product name (Arabic Language)</li>
                                <li><b>Main Category : </b> the product category
                                    <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> If the Main
                                        Category has a sub category then there will be form will appear under it to
                                        select the sub category or you can keep it empty to append the product to main
                                        category ONLY</p>
                                </li>
                                <li><b>Sub Category : </b> Hidden Field appears when you select a Main Category has sub
                                    categories.</li>
                                <li><b>Summary : </b> Short description about the product (English Language)</li>
                                <li><b>Arabic Summary : </b> Short description about the product (Arabic Language)</li>
                                <li><b>Description: </b> Long Description about the product (English Language)</li>
                                <li><b>Arabic Description : </b> Long Description about the product (Arabic Language)
                                </li>

                                <li><b>Choose Image : </b> Product image that will appear for user</li>
                                <li><b>Price : </b> Product Price</li>
                            </ul>
                        </code>

                        <b> * Not Required Forms * </b>
                        <code>
                            <ul>
                                <li><b>Choose Size Guid : </b> Add size guid table as an image for the product (Clothes
                                    type) or you can add some other images with diffrenet colors or featuers </li>
                                <li><b>Additional Info : </b> Add some features or some other information for the
                                    product (English Language)</li>
                                <li><b>Arabic Additional Info : </b> Add some features or some other information for the
                                    product (Arabic Language)</li>
                                <li><b>Return Policy : </b> Add some Policy for the product (English Language)</li>
                                <li><b>Arabic Return Policy : </b> Add some Policy for the product (Arabic Language)
                                </li>
                                <li><b>Stock : </b> Add number of items in stock ( if you keep it empty then the product
                                    will be in stock )</li>
                                <li> <b> Offer Price : </b> Add a special price if you have then the system will count
                                    the <b>(discound)</b> automaticlly</li>
                                <li><b> Frequently Bought Together : </b> This option if the seller want to add a group
                                    of products to buy them togother. (below is a video to show how it looks.)</li>
                            </ul>
                        </code>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Frequently Bought
                            Together can select them from an existing products (the seller must add the products then he
                            can choose them from the dropdown menu)</p>

                        <p><span class="badge badge-danger text-uppercase mr-2">Note ::</span> Enable button is to make
                            the product active or not</p>

                        <div class="row">
                            <div class="col-6">
                                <b>* Video below is to add other image so when user hover on the product image will see
                                    other one *</b>
                                <video width="100%" height="440" controls>
                                    <source src="{{ asset('storage/documentaion/videos/add_product_other_image.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="col-6">
                                <b>* Video below is to show the product after adding the offer price & hover image
                                    option*</b>
                                <video width="100%" height="440" controls>
                                    <source src="{{ asset('storage/documentaion/videos/tricks_products.mp4') }}"
                                        type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                        </div>
                        <div class="mt-4 mb-4">
                            <b class="mb-4">* Video below is to show the product after inserting along with Frequently
                                Bought Together *</b><br>
                            <video width="100%" height="440" controls>
                                <source src="{{ asset('storage/documentaion/videos/single_product.mp4') }}"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Sidebar
    ============================ -->
                    <section id="idocs_navbar">
                        <h2>Edit Products</h2>
                        <p> Once the seller add the products he can edit on each of them as shown below.</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/edit_product.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                    <hr class="divider">

                    <!-- Box Layout Style
    ============================ -->
                    <section id="idocs_sidebar">
                        <h2>Add Attributes To Products</h2>
                        <p>For now the seller can just add some images to be shown in the single product page</p>
                        <ol>
                            <li>Products Gallery</li>
                        </ol>

                    </section>

                    <hr class="divider">

                    <!-- Content
    ============================ -->
                    <section id="idocs_footer">
                        <h2>Products Gallery</h2>
                        <p> below the video shows how to add a gallery to the product </p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/gallery_product.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                    </section>

                    <!-- Typography
    ============================ -->
                    <section id="idocs_box_layout">
                        <h2> Frequently Bought Together</h2>

                        <p> * Video below is to show how to add new product with Frequently Bought Together * </p>

                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/full_add_product_.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                    <hr class="divider">

                    <section id="idocs_changelog">
                        <h2>Changelog</h2>
                        <p class="text-4">See what's new added, changed, fixed, improved or updated in the latest
                            versions. </p>
                        <p class="alert alert-info mb-5"> For Future Updates Follow Us <a target="_blank"
                                href="http://themeforest.net/user/harnishdesign?ref=HarnishDesign">@themeforest</a> / <a
                                target="_blank" href="http://facebook.com/harnishdesign">@facebook</a> / <a
                                target="_blank" href="http://twitter.com/harnishdesign">@twitter</a> / <a
                                target="_blank" href="https://dribbble.com/harnishdesign">@Dribbble</a></p>

                        <h3 id="v1-2">Orders</h3>
                        <p> There are two way(s) to view all orders </p>
                        <ol>
                            <li> <code> View All </code> button on the dashboard below the statistice boards </li>
                            <li> from the left bar under the <code> Order(s) Managments </code> </li>
                        </ol>
                        <p> The seller will be able to view the purchased product(s) beside view the invoices and
                            download the invoices as a PDF</p>
                        <p> below the video will show how to view the orders and download the invoices</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/order_video.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                        <h3 id="v1-1">Subscriptions</h3>
                        <p> The subscribe is what the seller select from the begging then he will be able to upgarde the
                            package or view the current package </p>
                        <p> below is a video to show the subscription</p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/subscription.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <hr class="divider">
                        <h3 id="v1-0">Seller Sittings</h3>
                        <p> The final things are how the seller can edit the personal , company details </p>
                        <p> below is a video to show how to do the things </p>
                        <video width="100%" height="440" controls>
                            <source src="{{ asset('storage/documentaion/videos/seller_sittings.mp4') }}"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </section>

                </div>
            </div>

        </div>
        <!-- Content end -->

        <!-- Footer
============================ -->
        <footer id="footer" class="section bg-danger footer-text-light">
            <div class="container">
                <p class="text-center text-white">Copyright &copy; 2022 <a href="{{ route('homepage') }}"
                        class="text-white">ITajer</a>. All
                    Rights Reserved.</p>
                <p class="text-2 text-center mb-0 text-white">Design &amp; Develop by <a class="btn-link text-white"
                        target="_blank" href="http://9yards.ae">9yards Team</a>.</p>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

    @endif
    <!-- Back To Top -->
    <a id="back-to-top" data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"><i
            class="fa fa-chevron-up"></i></a>

    <!-- JavaScript
============================ -->
    <script src="{{ asset('documentaion/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('documentaion/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Highlight JS -->
    <script src="{{ asset('documentaion/vendor/highlight.js') }}/highlight.min.js') }}"></script>
    <!-- Easing -->
    <script src="{{ asset('documentaion/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('documentaion/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom Script -->
    <script src="{{ asset('documentaion/js/theme.js') }}"></script>
</body>

</html>

@extends('Front.main-desgin')
@section('mytitle',' (CSR) Corporate Social Responsibility')

@section('content')

<div class="content-block">
    <div class="container-bg with-bg container-fluid"
        data-style="background-image: url(storage/csr/corporate-social-responsbility.jpg);">
        <div class="container-bg-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-item-title">
                            <h1 class="text-center texttransform-none">
                                Questioins
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs-container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
                            <!-- Breadcrumb NavXT 5.7.1 -->
                            <span property="itemListElement" typeof="ListItem">
                                <a property="item" typeof="WebPage" title="Go to Barrel." href="#" class="home"><span
                                        property="name">Home</span></a>
                                <meta property="position" content="1" />
                            </span>
                            &gt; <span property="itemListElement" typeof="ListItem"><span property="name">Questions</span>
                                <meta property="position" content="2" /></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class=" clearfix">
                    <div class="content-block  blog-post clearfix blog-post-style-rounded">
                        <article id="post-590"
                            class="post-590 post type-post status-publish format-standard has-post-thumbnail hentry category-clients category-company tag-clients tag-news">
                            <h2 class="entry-title post-header-title" style="margin-top:50px ;text-align:center">
                                <a rel="bookmark" style="color:orange">Inquiry of Internship</a>
                            </h2>
                            <div style="border:1px solid #ccc;margin-top:20px;">
                                <form id="demo-form_intrenShip" class="quform from-prevent-multiple-submits"
                                    action="{{route('csrform')}}" method="post" enctype="multipart/form-data"
                                    style="padding:25px">
                                    @csrf
                                    <input type="hidden" name="jobtitle" value="Intrenship Form">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Name *</label>
                                            <input required type="text" name="name" class="form-control" id="inputtext"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="national">Nationality *</label>
                                            <input type="text" name="national" class="form-control" id="national"
                                                placeholder="What is your Nationality ?">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Email *</label>
                                            <input required type="email" name="email" class="form-control"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">University Name * </label>
                                            <input required type="text" name="university" class="form-control"
                                                placeholder="What is your university name?">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">University Contact Details *</label>
                                            <input required type="text" name="univ_contact" class="form-control"
                                                placeholder=" Enter you university contact details">
                                            <small style="font-size:12px;color:red !important">THE CONTACT DETAILS COULD
                                                BE A <b>PHONE NUMBER </b> OR <b>EMAIL ADDRESS</b></small>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Phone Number *</label>
                                            <input type="number" name="phone" class="form-control" id="inputPassword4"
                                                placeholder="Add your phone number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Age *</label>
                                            <input type="number" name="age" class="form-control" id="age"
                                                placeholder="Add your Age">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Upload Resume *</label>
                                            <input type="file" required name="image" accept="application/pdf"
                                                class="form-control">
                                            <small style="font-size:12px;color:red !important">THE RESUME MUST BE PDF
                                                <b>ONLY</b> & LESS THAN <b>2MB</b></small>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Cover Letter </label>
                                            <textarea type="text" row="30" name="coverletter" class="form-control"
                                                placeholder="Say Something"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">I m Not A Bot </label>
                                            <input type="checkbox" name="faxonly" required />
                                        </div>
                                    </div>

                                    <button style=" width:100%;padding: 10px 30px;  border-radius: 20px;" id="submit"
                                        type="submit" class="btn-apply btn-warning submit">Apply Now</button>
                                </form>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection