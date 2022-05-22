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
  ============================ -->
        <div id="content" role="main">

            <!-- Sidebar Navigation
	============================ -->
            <div class="idocs-navigation bg-light">
                <ul class="nav flex-column ">
                    <li class="nav-item"><a class="nav-link active" href="#idocs_start">Getting Started</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_installation">Basic Info</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_html_structure">Admin Panel Structure</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sass">Main Sections</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_layout">Products</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_header">View Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_navbar">Edit Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_sidebar">Add Attributs to Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_footer">Add Gallery to product</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_box_layout">Add Size to Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_header1">Add New Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_navbar1">Add Frequently Bought Together </a></li>
                           
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_content">Content</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_typography">Typography</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_code">Code</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_table">Table</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_icons">Icons</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_image">Image</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_video">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_components">Components</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#idocs_accordion">Accordion</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_tabs">Tabs</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_social_icon">Social Icon</a></li>
                            <li class="nav-item"><a class="nav-link" href="#idocs_helper_classes">Helper Classes</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_faq">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_source_credits">Source & Credits</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_support">Support</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_templates">More Templates</a></li>
                    <li class="nav-item"><a class="nav-link" href="#idocs_changelog">Changelog</a>
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="#v1-1">v1.1</a></li>
                            <li class="nav-item"><a class="nav-link" href="#v1-0">v1.0</a></li>
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
                            Itajer Seller admin panel is the place where the seller can control his section on the main website 
                           <br> <a href="{{ route('homepage') }}" target="_blank"> <i
                                class="fas fa-external-link-alt"></i> Itajer Home Page</a> from now on the below info will guid you 
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
                        <p>Itajer follows a simple and easy to customize and add the products. Here is the sample for your
                            reference:<br>
                            The template is based on <b class="ml-1" "></i> Left side bar & Right side Panel</b></p>
                            <a class="popup-img" href="{{ asset('storage/documentaion/dashboard_without_content.png') }}"><img
                                src="{{ asset('storage/documentaion/dashboard_without_content.png') }}" class="img-fluid img-thumbnail"
                                alt="image" style="width: 600px"></a>
                                <p> The Above Image is the dashboard with out any information where the lest side <b> The black one </b> <br>
                                is where the user can go through the dashborad and select the section that he wants. and it containes
                                <code><ul>
                                        <li>Dashboard </li>
                                        <li>documentaion </li>
                                        <li>Products </li>
                                        <li>Orders </li>
                                        <li>Subscribtion </li>
                                        <li>Sittings</li>
                                    </ul></code>
                                </p>

                                <p> Once the seller start getting notification and add products <b>The Dashboard </b> will be filled with the Important info Such as the below image</p>
                                <a class="popup-img" href="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}"><img
                                    src="{{ asset('storage/documentaion/iTajer_dashboard_with_content.png') }}" class="img-fluid img-thumbnail"
                                    alt="image" style="width: 600px"></a>
                    </section>

                    <hr class="divider">

                    <!-- Sass
		============================ -->
                    <section id="idocs_sass">
                        <h2>Main Sections</h2>
                        <p>As Above there are few sections that seller must focus onn to get things done correctly!!</p>
                        <code><ol>
                            <li>Dashboard to view the statistic Informations</li>
                            <li>documentaion to view the guid book </li>
                            <li>Products to view the products and every thing related to products </li>
                            <li>Orders to view the Sold Products Invoices and every thing related to orders </li>
                            <li>Subscribtion to view the the seller package status and the Expired Date</li>
                            <li>Sittings to view the the seller details </li>
                        </ol></code>
                        <a class="popup-img" href="{{ asset('storage/documentaion/left_side_bar_products.png') }}"><img
                            src="{{ asset('storage/documentaion/left_side_bar_products.png') }}" class="img-fluid img-thumbnail"
                            alt="image" style="width: 200px;height:100%"></a>
                    </section>

                    <hr class="divider">

                    <!-- Color Schemes
		============================ -->
                    <section id="idocs_color_schemes">
                        <h2>Color Schemes</h2>
                        <p>You can change your Website's Color Scheme in an instant. We have build <strong>10
                                Color</strong> css file for change template primary color.</p>
                        <ul>
                            <li><code>color-blue.css</code> - Blue Color</li>
                            <li><code>color-brown.css</code> - Brown Color</li>
                            <li><code>color-cyan.css</code> - Cyan Color</li>
                            <li><code>color-green.css</code> - Green Color</li>
                            <li><code>color-orange.css</code> - Orange Color</li>
                            <li><code>color-indigo.css</code> - Indigo Color</li>
                            <li><code>color-purple.css</code> - Purple Color</li>
                            <li><code>color-red.css</code> - Red Color</li>
                            <li><code>color-teal.css</code> - Teal Color</li>
                            <li><code>color-yellow.css</code> - Yellow Color</li>
                        </ul>
                        <p>Simply add Color CSS file link it in the Document <code>&lt;head&gt;</code>.<br>
                            Make sure you add the <code>css/color-blue.css</code> stylesheet in your head after the
                            <code>css/stylesheet.css</code> file linking from above mentioned 10 color css file.</p>
                        <p><strong>For Example:</strong></p>
                        <pre><code class="html">&lt;head&gt;
&lt;!-- Stylesheet
============================== --&gt;
&lt;!-- Bootstrap --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/bootstrap/css/bootstrap.min.css&quot; /&gt;
&lt;!-- Font Awesome Icon --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/font-awesome/css/all.min.css&quot; /&gt;
&lt;!-- Magnific Popup --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/magnific-popup/magnific-popup.min.css&quot; /&gt;
&lt;!-- Highlight Syntax --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/highlight.js/styles/github.css&quot; /&gt;
&lt;!-- Custom Stylesheet --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/stylesheet.css&quot; /&gt;

&lt;!-- Here goes your Colors Css --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/color-orange.css&quot; /&gt;
&lt;/head&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Customization
		============================ -->
                    <section id="idocs_theme_customization">
                        <h2>Theme Customization</h2>
                        <p>We have include a Custom CSS File in the <code>css</code> Folder so that you can better
                            handle your Customizations for New Styles or
                            Overwriting Default Theme Styles. Simply add all your Custom CSS Codes in the
                            <code>css/custom.css</code> File and link it in the Document <code>&lt;head&gt;</code> after
                            the <code>css/stylesheet.css</code> Linking. Also make sure that this is the Last Linked CSS
                            File in the Document <code>&lt;head&gt;</code> so that your Custom CSS Styles are
                            Overwritten properly.</p>
                        <pre><code class="html">&lt;head&gt;
&lt;!-- Stylesheet
============================== --&gt;
&lt;!-- Bootstrap --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/bootstrap/css/bootstrap.min.css&quot; /&gt;
&lt;!-- Font Awesome Icon --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/font-awesome/css/all.min.css&quot; /&gt;
&lt;!-- Magnific Popup --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/magnific-popup/magnific-popup.min.css&quot; /&gt;
&lt;!-- Highlight Syntax --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/vendor/highlight.js/styles/github.css&quot; /&gt;
&lt;!-- Custom Stylesheet --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/stylesheet.css&quot; /&gt;

&lt;!-- Here goes your custom.css
============================================= --&gt;
&lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;assets/css/custom.css&quot; /&gt;
&lt;/head&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Logo Settings
		============================ -->
                    <section id="idocs_logo_settings">
                        <h2>Logo Settings</h2>
                        <p>The Logo Container can be found in the Header Container - <code>&lt;header&gt;</code></p>
                        <pre><code class="html">&lt;!-- Logo --&gt; 
&lt;a class=&quot;logo ml-3 ml-md-0&quot; href=&quot;index.html&quot; title=&quot;iDocs&quot;&gt;
   &lt;img src=&quot;images/logo-light.png&quot; alt=&quot;iDocs&quot;/&gt;
&lt;/a&gt;
&lt;!-- Logo End --&gt;
</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Layout
		============================ -->
                    <section id="idocs_layout">
                        <h2>Layout</h2>
                        <p class="lead mb-5">Documentation and examples for header, navbar, sidebar, footer</p>
                    </section>

                    <!-- Header
		============================ -->
                    <section id="idocs_header">
                        <h2>Header</h2>
                        <p>The list of various header types & its descriptions are provided below for your reference:
                        </p>

                        <h4>Light</h4>
                        <p>Header with white background Color & Dark text. <span class="text-info">See below image and
                                code for more inforamtion.</span></p>
                        <p><a class="popup-img" href="assets/images/header-light.jpg"><img class="img-fluid border"
                                    src="assets/images/header-light.jpg" alt=""></a></p>
                        <pre><code class="html">&lt;!-- Header
============================ --&gt;
&lt;header id=&quot;header&quot; class=&quot;sticky-top&quot;&gt; 
  &lt;!-- Navbar --&gt;
  &lt;nav class=&quot;primary-menu navbar navbar-expand-lg&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt; 
      .....
    &lt;/div&gt;
  &lt;/nav&gt;
  &lt;!-- Navbar End --&gt; 
&lt;/header&gt;
&lt;!-- Header End --&gt;
</code></pre>

                        <h4>Dark</h4>
                        <p>Header with dark background & Light text. <span class="text-info">See below image and code
                                for more inforamtion.</span></p>
                        <p><a class="popup-img" href="assets/images/header-dark.jpg"><img class="img-fluid border"
                                    src="assets/images/header-dark.jpg" alt=""></a></p>
                        <p>Add the <code>.bg-dark</code> and <code>.navbar-text-light</code> Class to the
                            <code>&lt;nav&gt;</code> Tag to display a Dark Header.</p>
                        <pre><code class="html">&lt;!-- Header
============================ --&gt;
&lt;header id=&quot;header&quot; class=&quot;sticky-top&quot;&gt; 
  &lt;!-- Navbar --&gt;
  &lt;nav class=&quot;primary-menu navbar navbar-expand-lg bg-dark navbar-text-light&quot;&gt;
    &lt;div class=&quot;container-fluid&quot;&gt; 
      .....
    &lt;/div&gt;
  &lt;/nav&gt;
  &lt;!-- Navbar End --&gt; 
&lt;/header&gt;
&lt;!-- Header End --&gt;
</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Navbar
		============================ -->
                    <section id="idocs_navbar">
                        <h2>Navbar</h2>
                        <p class="lead">Documentation and examples for powerful responsive navigation header</p>
                        <h4 class="mt-5">Left align</h4>
                        <p>Header with Navigation alligned Left. <span class="text-info">See below image and code for
                                more inforamtion.</span></p>
                        <p><a class="popup-img" href="assets/images/navbar-left.jpg"><img class="img-fluid border"
                                    src="assets/images/navbar-left.jpg" alt=""></a></p>
                        <p>Add the <code>.justify-content-left</code> class to the element of collapse to display a
                            align left navbar.</p>
                        <pre><code class="html">&lt;div id=&quot;header-nav&quot; class=&quot;collapse navbar-collapse justify-content-start&quot;&gt;
  &lt;ul class=&quot;navbar-nav&quot;&gt;
    .......
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>

                        <h4 class="mt-5">Right align</h4>
                        <p>Header with Navigation alligned Right. <span class="text-info">See below image and code for
                                more inforamtion.</span></p>
                        <p><a class="popup-img" href="assets/images/navbar-right.jpg"><img class="img-fluid border"
                                    src="assets/images/navbar-left.jpg" alt=""></a></p>
                        <p>Add the <code>.justify-content-end</code> class to the element of collapse to display a align
                            right navbar.</p>
                        <pre><code class="html">&lt;div id=&quot;header-nav&quot; class=&quot;collapse navbar-collapse justify-content-end&quot;&gt;
  &lt;ul class=&quot;navbar-nav&quot;&gt;
    .......
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>

                        <h4 class="mt-5">Center Align</h4>
                        <p>Header with Navigation alligned Center. <span class="text-info">See below image and code for
                                more inforamtion.</span></p>
                        <p><img class="img-fluid border" src="assets/images/navbar-center.jpg" alt=""></p>
                        <p>Add the <code>.justify-content-center</code> class to the element of collapse to display a
                            align center navbar.</p>
                        <pre><code class="html">&lt;div id=&quot;header-nav&quot; class=&quot;collapse navbar-collapse justify-content-center&quot;&gt;
  &lt;ul class=&quot;navbar-nav&quot;&gt;
    .......
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Sidebar
		============================ -->
                    <section id="idocs_sidebar">
                        <h2>Sidebar</h2>
                        <p class="lead">We have built fixed sidebar navigation with <a target="_blank"
                                href="https://getbootstrap.com/docs/4.4/components/scrollspy/">bootstrap scrollspy</a>
                            function for docs layout. which is automatically update navigation based on scroll position
                            to indicate which link is currently active in the viewport.</p>
                        <p>The example below sidebar vertical navigation with bootstrap <a target="_blank"
                                href="https://getbootstrap.com/docs/4.4/components/navs/">navs</a> and <a
                                target="_blank"
                                href="https://getbootstrap.com/docs/4.4/components/scrollspy/">scrollspy</a> components
                            and section of docs content.</p>
                        <pre class="pre-scrollable"><code class="html">&lt;!-- Sidebar Navigation
============================ --&gt;
&lt;div class=&quot;idocs-navigation bg-light&quot;&gt;
  &lt;ul class=&quot;nav flex-column &quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; href=&quot;#item_1&quot;&gt;Item 1&lt;/a&gt;
      &lt;ul class=&quot;nav flex-column&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_1_1&quot;&gt;Sub Item 1.1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_1_2&quot;&gt;Sub Item 1.2&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_2&quot;&gt;Item 2&lt;/a&gt;
      &lt;ul class=&quot;nav flex-column&quot;&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_2_1&quot;&gt;Sub Item 2.1&lt;/a&gt;&lt;/li&gt;
        &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_2_2&quot;&gt;Sub Item 2.2&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_3&quot;&gt;Item 3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; href=&quot;#item_4&quot;&gt;Item 4&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;

&lt;!-- Docs Content
============================ --&gt;
&lt;div class=&quot;idocs-content&quot;&gt;
  &lt;div class=&quot;container&quot;&gt; 
    
    &lt;!-- Item 1 --&gt;
    &lt;section id=&quot;item_1&quot;&gt;
      &lt;h2&gt;Item 1&lt;/h2&gt;
      &lt;p&gt;...&lt;/p&gt;
    &lt;/section&gt;
    &lt;hr class=&quot;divider&quot;&gt;
    
        &lt;!-- Item 1.1 --&gt;
        &lt;section id=&quot;item_1_1&quot;&gt;
          &lt;h2&gt;Item 1.1&lt;/h2&gt;
          &lt;p&gt;...&lt;/p&gt;
        &lt;/section&gt;
        &lt;hr class=&quot;divider&quot;&gt;
        
        &lt;!-- Item 1.2 --&gt;
        &lt;section id=&quot;item_1_2&quot;&gt;
          &lt;h2&gt;Item 1.2&lt;/h2&gt;
          &lt;p&gt;...&lt;/p&gt;
        &lt;/section&gt;
        &lt;hr class=&quot;divider&quot;&gt;
    
    &lt;!-- Item 2 --&gt;
    &lt;section id=&quot;item_2&quot;&gt;
      &lt;h2&gt;Item 2&lt;/h2&gt;
      &lt;p&gt;...&lt;/p&gt;
    &lt;/section&gt;
    &lt;hr class=&quot;divider&quot;&gt;
    
        &lt;!-- Item 2.1 --&gt;
        &lt;section id=&quot;item_2_1&quot;&gt;
          &lt;h2&gt;Item 2.1&lt;/h2&gt;
          &lt;p&gt;...&lt;/p&gt;
        &lt;/section&gt;
        &lt;hr class=&quot;divider&quot;&gt;
        
        &lt;!-- Item 2.2 --&gt;
        &lt;section id=&quot;item_2_2&quot;&gt;
          &lt;h2&gt;Item 2.2&lt;/h2&gt;
          &lt;p&gt;...&lt;/p&gt;
        &lt;/section&gt;
        &lt;hr class=&quot;divider&quot;&gt;
    
    &lt;!-- Item 3 --&gt;
    &lt;section id=&quot;item_3&quot;&gt;
      &lt;h2&gt;Item 3&lt;/h2&gt;
      &lt;p&gt;...&lt;/p&gt;
    &lt;/section&gt;
    &lt;hr class=&quot;divider&quot;&gt;
    
    &lt;!-- Item 4 --&gt;
    &lt;section id=&quot;item_4&quot;&gt;
      &lt;h2&gt;Item 4&lt;/h2&gt;
      &lt;p&gt;...&lt;/p&gt;
    &lt;/section&gt;
    
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>

                        <h4>Light Sidebar:</h4>
                        <p>Light background Color & Dark text for light sidebar. See below image and code for more
                            inforamtion.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <p><a class="popup-img" href="assets/images/sidebar-light.jpg"><img
                                            class="img-fluid border" src="assets/images/sidebar-light.jpg" alt=""></a>
                                </p>
                            </div>
                        </div>

                        <p>Add the <code>.bg-light</code> class to the main sidebar navigation div element to display a
                            light sidebar.</p>
                        <pre><code>&lt;!-- Sidebar Navigation
============================ --&gt;
&lt;div class=&quot;idocs-navigation bg-light&quot;&gt;
  ....
&lt;/div&gt;</code></pre>

                        <h4>Dark Sidebar:</h4>
                        <p>Dark background Color & Light text for dark sidebar. See below image and code for more
                            inforamtion.</p>

                        <div class="row">
                            <div class="col-lg-6">
                                <p><a class="popup-img" href="assets/images/sidebar-dark.jpg"><img
                                            class="img-fluid border" src="assets/images/sidebar-dark.jpg" alt=""></a>
                                </p>
                            </div>
                        </div>

                        <p>Add the <code>.bg-dark</code> and <code>.docs-navigation-dark</code> class to the main
                            sidebar navigation div element to display a dark sidebar.</p>
                        <pre><code>&lt;!-- Sidebar Navigation
============================ --&gt;
&lt;div class=&quot;idocs-navigation bg-dark docs-navigation-dark&quot;&gt;
  ....
&lt;/div&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Footer
		============================ -->
                    <section id="idocs_footer">
                        <h2>Footer</h2>
                        <p>The list of various footer types & its descriptions are provided below for your reference:
                        </p>
                        <h4>Light Footer</h4>
                        <p>Footer with white background Color & Dark text. See below code for more inforamtion.</p>
                        <pre><code class="html">&lt;!-- Footer
============================================= --&gt;
  &lt;footer id=&quot;footer&quot; class=&quot;section bg-light&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
    	..........
    &lt;/div&gt;
  &lt;/footer&gt;
&lt;!-- Footer end --&gt;</code></pre>
                        <h4>Dark Footer</h4>
                        <p>Footer with dark background color & Light text. See below code for more inforamtion.</p>
                        <p>Add the <code>.bg-dark</code> and <code>.footer-text-light</code> Class to the
                            <code>footer</code> Tag to display a Dark footer.</p>
                        <pre><code class="html">&lt;!-- Footer
============================================= --&gt;
&lt;footer id=&quot;footer&quot; class=&quot;section bg-dark footer-text-light&quot;&gt;
    &lt;div class=&quot;container&quot;&gt;
    	..........
    &lt;/div&gt;
&lt;/footer&gt;
&lt;!-- Footer end --&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Box Layout Style
		============================ -->
                    <section id="idocs_box_layout">
                        <h2>Box Layout Style</h2>
                        <div>
                            <p>Default Layout Style is wide. Please add the <code>.box</code> class to the
                                <code>&lt;body&gt;</code> Tag for box layout.</p>
                            <pre><code class="html">&lt;body class="box" data-spy="scroll" data-target=".idocs-navigation" data-offset="125"&gt;</code></pre>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Content
		============================ -->
                    <section id="idocs_content">
                        <h2>Content</h2>
                        <p class="lead mb-5">Documentation and examples for displaying typography, code, table, image
                            and video and more..</p>
                    </section>

                    <!-- Typography
		============================ -->
                    <section id="idocs_typography">
                        <h2>Typography</h2>
                        <p class="text-4">Documentation and examples for typography, headings, body text, lists, and
                            more.</p>
                        <h3>Headings</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Heading</th>
                                    <th>Example</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><code>&lt;h1&gt;&lt;/h1&gt;</code></td>
                                    <td>
                                        <h1>h1. Heading</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>&lt;h2&gt;&lt;/h2&gt;</code></td>
                                    <td>
                                        <h2>h2. Heading</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>&lt;h3&gt;&lt;/h3&gt;</code></td>
                                    <td>
                                        <h3>h3. Heading</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>&lt;h4&gt;&lt;/h4&gt;</code></td>
                                    <td>
                                        <h4>h4. Heading</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>&lt;h5&gt;&lt;/h5&gt;</code></td>
                                    <td>
                                        <h5>h5. Heading</h5>
                                    </td>
                                </tr>
                                <tr>
                                    <td><code>&lt;h6&gt;&lt;/h6&gt;</code></td>
                                    <td>
                                        <h6>h6. Heading</h6>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <h3 class="mt-5">Lead</h3>
                        <p>Make a paragraph stand out by adding <code>.lead</code></p>
                        <p class="lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Anim
                            pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        </p>
                        <pre><code class="html">&lt;p class=&quot;lead&quot;&gt;
   Lorem Ipsum is simply dummy text of the printing and typesetting industry. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
&lt;/p&gt;</code></pre>

                        <h3 class="mt-5">Inline Text elements</h3>
                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                        <p><u>This line of text will render as underlined</u></p>
                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                        <p><strong>This line rendered as bold text.</strong></p>
                        <p><em>This line rendered as italicized text.</em></p>

                        <pre><code class="html">&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Code
		============================ -->
                    <section id="idocs_code">
                        <h2>Code</h2>
                        <p class="text-4">Documentation and examples for displaying inline and multiline blocks of code
                        </p>

                        <h3 class="mt-5">Inline code</h3>
                        <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>. <span class="text-info">Be sure
                                to escape HTML angle brackets</span>.</p>

                        <p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                        <pre><code class="html">For example, &lt;code&gt;&amp;lt;section&amp;gt;&lt;/code&gt; should be wrapped as inline.</code></pre>

                        <h3 class="mt-5">Code blocks</h3>
                        <p>Use <code>&lt;pre&gt;</code>s for multiple lines of code. <span class="text-info">Once again,
                                be sure to escape any angle brackets in the code for proper rendering</span>. You may
                            optionally add the <code>.pre-scrollable</code> class, which will set a max-height of 340px
                            and provide a y-axis scrollbar.</p>
                        <p><strong>For example:</strong></p>
                        <pre><code class="html">&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
                        <p><strong>Have to use something like:</strong></p>
                        <pre><code class="html">&lt;pre&gt;&lt;code&gt;&amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&amp;lt;p&amp;gt;And another line of sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;&lt;/code&gt;
</code></pre>

                        <h3 class="mt-5">Syntax highlighter</h3>
                        <p>We use <strong><a target="_blank" href="https://highlightjs.org/">Highlight Js</a></strong>
                            for syntax highlight code snippet.</p>
                        <p>You can refer more information here: <a class="btn btn-primary" target="_blank"
                                href="https://highlightjs.org/usage/"><i class="fas fa-external-link-alt mr-1"></i> How
                                to use highlight.js</a></p>
                    </section>

                    <hr class="divider">

                    <!-- Table
		============================ -->
                    <section id="idocs_table">
                        <h2>Table</h2>
                        <p class="text-4">Documentation and examples for opt-in styling of tables.</p>
                        <p>iDocs is based on Bootstrap 4, so you can easily use Bootstrap's table classes to style your
                            table. <a class="ml-1" target="_blank"
                                href="https://getbootstrap.com/docs/4.4/content/tables/"><i
                                    class="fas fa-external-link-alt"></i> Bootstrap Documentation</a></p>

                        <h3 class="mt-5">Bordered</h3>
                        <pre><code class="html">&lt;table class=&quot;table table-bordered&quot;&gt;
   .......
&lt;/table&gt;</code></pre>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>

                        <h3 class="mt-5">Striped</h3>
                        <pre><code class="html">&lt;table class=&quot;table table-bordered table-striped&quot;&gt;
   .......
&lt;/table&gt;</code></pre>

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note</span>You can refer more
                            information in Bootstrap Documentation here: <a class="btn btn-primary" target="_blank"
                                href="https://getbootstrap.com/docs/4.4/content/tables/"><i
                                    class="fas fa-external-link-alt mr-1"></i> Bootstrap Documentation</a></p>
                    </section>

                    <hr class="divider">

                    <!-- Icons
		============================ -->
                    <section id="idocs_icons">
                        <h2>Icons</h2>
                        <p><strong>Font Awesome</strong> icon sets are used in iDocs.</p>

                        <pre><code class="html">&lt;i class=&quot;fas fa-mobile-alt&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;fas fa-credit-card&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;
</code></pre>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note</span>Please go to their official
                            documentation pages for a full list of icons: <a class="btn btn-primary" target="_blank"
                                href="https://fontawesome.com/icons"><i class="fas fa-external-link-alt mr-1"></i> Font
                                Awesome</a></p>
                    </section>

                    <hr class="divider">

                    <!-- Image
		============================ -->
                    <section id="idocs_image">
                        <h2>Image</h2>
                        <p class="text-4">Documentation and examples for opting images into responsive behavior and add
                            lightweight styles to them—all via classes.</p>

                        <h3 class="mt-5">Responsive Images</h3>
                        <p>Images in Bootstrap are made responsive with <code>.img-fluid.</code> <code>max-width:
                                100%;</code> and <code>height: auto;</code> are applied to the image so that it scales
                            with the parent element.</p>
                        <p><img src="assets/images/screenshot.jpg" class="img-fluid" alt="Responsive image"></p>
                        <pre><code class="html">&lt;img src=&quot;assets/images/screenshot.jpg&quot; class=&quot;img-fluid&quot; alt=&quot;Responsive image&quot;&gt;</code></pre>

                        <h3 class="mt-5">Image lightbox</h3>
                        <p>Show image popup when click on image:</p>
                        <p><a class="popup-img" href="assets/images/screenshot.jpg"><img
                                    src="assets/images/screenshot-thumb.jpg" class="img-fluid img-thumbnail"
                                    alt="image"></a></p>
                        <pre><code class="html">&lt;a class=&quot;popup-img&quot; href=&quot;assets/images/screenshot.jpg&quot;&gt;
  &lt;img src=&quot;assets/images/screenshot-thumb.jpg&quot; class=&quot;img-fluid img-thumbnail&quot; alt=&quot;image&quot;&gt;
&lt;/a&gt;</code></pre>

                        <h3 class="mt-5">Image Lightbox with Link</h3>
                        <p>Show image popup when click on link: <a class="popup-img"
                                href="assets/images/screenshot.jpg">Click Here for Popup Image</a></p>
                        <pre><code class="html">&lt;a class=&quot;popup-img&quot; href=&quot;assets/images/screenshot.jpg&quot;&gt;Click Here for Popup Image&lt;/a&gt;</code></pre>

                        <h3 class="mt-5">Image lightbox with Button</h3>
                        <p>Show image popup when click on button: <a class="btn btn-primary popup-img"
                                href="assets/images/screenshot.jpg">Click Here for Popup Image</a></p>
                        <pre><code class="html">&lt;a class=&quot;btn btn-primary popup-img&quot; href=&quot;assets/images/screenshot.jpg&quot;&gt;Click Here for Popup Image&lt;/a&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Video
		============================ -->
                    <section id="idocs_video">
                        <h2>Video</h2>
                        <p class="text-4">Create responsive video embeds based on the width of the parent by creating an
                            intrinsic ratio that scales on any device.</p>

                        <h3 class="mt-5">Embedded Video</h3>
                        <p>Wrap any embed like an <code>&lt;iframe&gt;</code> in a parent element with
                            <code>.embed-responsive</code> and an aspect ratio. The <code>.embed-responsive-item</code>
                            isn’t strictly required, but we encourage it.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7e90gBu4pas"
                                allowfullscreen></iframe>
                        </div>
                        <pre><code class="html">&lt;div class=&quot;embed-responsive embed-responsive-16by9&quot;&gt;
  &lt;iframe class=&quot;embed-responsive-item&quot; src=&quot;https://www.youtube.com/embed/7e90gBu4pas&quot; allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;</code></pre>
                        <p><span class="badge badge-danger text-uppercase mr-2">Note</span>Please go to official
                            bootstrap documentation for a full information of embed video: <a class="btn btn-primary"
                                target="_blank" href="https://getbootstrap.com/docs/4.4/utilities/embed/"><i
                                    class="fas fa-external-link-alt mr-1"></i> Bootstrap Documentation</a></p>

                        <h3 class="mt-5">Popup with Video</h3>
                        <p>Show <strong>Youtube</strong> and <strong>Vimeo</strong> video popup when click on link:</p>
                        <p><a class="popup-youtube" href="http://www.youtube.com/watch?v=7e90gBu4pas">Open Popup YouTube
                                Video </a></p>
                        <pre><code class="html">&lt;a class=&quot;popup-youtube&quot; href=&quot;http://www.youtube.com/watch?v=7e90gBu4pas&quot;&gt;Open Popup YouTube Video &lt;/a&gt;</code></pre>

                        <p><a class="popup-vimeo" href="https://vimeo.com/45830194">Open Popup Vimeo video</a></p>
                        <pre><code class="html">&lt;a class=&quot;popup-vimeo&quot; href=&quot;https://vimeo.com/45830194&quot;&gt;Open Popup Vimeo video&lt;/a&gt;</code></pre>
                    </section>

                    <hr class="divider">

                    <!-- Components
		============================ -->
                    <section id="idocs_components">
                        <h2>Components</h2>
                        <p class="mb-5">Setting up components is very easy. Here is the Some of shortcodes describe.
                            also, <strong>iDocs</strong> is based on Bootstrap 4, so you can easily use Bootstrap's
                            components: <a class="ml-1" target="_blank"
                                href="https://getbootstrap.com/docs/4.4/components/"><i
                                    class="fas fa-external-link-alt"></i> Bootstrap Documentation</a></p>
                    </section>

                    <!-- Accordion
		  ============================ -->
                    <section id="idocs_accordion">
                        <h2>Accordion</h2>
                        <p>You can extend the default collapse behavior to create an accordion. To properly achieve the
                            accordion style, be sure to use <code>.accordion</code> as a wrapper.</p>
                        <p>See below image and code for more inforamtion.</p>
                        <p><a class="popup-img" href="assets/images/accordion.jpg"><img class="img-fluid border"
                                    src="assets/images/accordion.jpg" alt=""></a></p>
                        <pre><code class="html">&lt;div class=&quot;accordion&quot; id=&quot;accordionDefault&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot; id=&quot;headingOne&quot;&gt;
      &lt;h5 class=&quot;mb-0&quot;&gt; &lt;a href=&quot;#&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseOne&quot; aria-expanded=&quot;true&quot; aria-controls=&quot;collapseOne&quot;&gt;Accordion Title&lt;/a&gt; &lt;/h5&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseOne&quot; class=&quot;collapse show&quot; aria-labelledby=&quot;headingOne&quot; data-parent=&quot;#accordionDefault&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;This is Accordion Content&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot; id=&quot;headingTwo&quot;&gt;
      &lt;h5 class=&quot;mb-0&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;collapsed&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseTwo&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseTwo&quot;&gt;Accordion Title&lt;/a&gt; &lt;/h5&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseTwo&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingTwo&quot; data-parent=&quot;#accordionDefault&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;This is Accordion Content&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;div class=&quot;card-header&quot; id=&quot;headingThree&quot;&gt;
      &lt;h5 class=&quot;mb-0&quot;&gt; &lt;a href=&quot;#&quot; class=&quot;collapsed&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseThree&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseThree&quot;&gt;Accordion Title&lt;/a&gt; &lt;/h5&gt;
    &lt;/div&gt;
    &lt;div id=&quot;collapseThree&quot; class=&quot;collapse&quot; aria-labelledby=&quot;headingThree&quot; data-parent=&quot;#accordionDefault&quot;&gt;
      &lt;div class=&quot;card-body&quot;&gt;This is Accordion Content&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                        <h4>Options:</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type Class</th>
                                        <th>Features</th>
                                        <th>Code Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.accordion-alternate</code></td>
                                        <td>Alternate Minimal Style for the accordions.</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;div class=&quot;accordion accordion-alternate&quot; id=&quot;accordionDefault&quot;&gt;
  .......
&lt;/div&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.arrow-right</code></td>
                                        <td>For set arrow in right side in accordions</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;div class=&quot;accordion arrow-right&quot; id=&quot;accordionDefault&quot;&gt;
  .......
&lt;/div&gt;</code></pre>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Tabs
		  ============================ -->
                    <section id="idocs_tabs">
                        <h2>Tabs</h2>
                        <p class="text-4">Default <a
                                href="https://getbootstrap.com/docs/4.4/components/navs/#javascript-behavior">Bootstrap
                                Nav</a> component combined with iDocs for unique tabs.</p>
                        <p>See below image and code for more inforamtion.</p>
                        <p><a class="popup-img" href="assets/images/tabs.jpg"><img class="img-fluid border"
                                    src="assets/images/tabs.jpg" alt=""></a></p>

                        <pre><code class="html">&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#home&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#profile&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot; role=&quot;presentation&quot;&gt;
    &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#contact&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content my-3&quot; id=&quot;myTabContent&quot;&gt;
  &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;This is Tab Content Home&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;This is Tab Content Profile&lt;/div&gt;
  &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;This is Tab Content Contact&lt;/div&gt;
&lt;/div&gt;</code></pre>

                        <h4>Options:</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type Class</th>
                                        <th>Features</th>
                                        <th>Code Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>Basic Navs</code></td>
                                        <td>Basic Navs Style for the Tabs</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;nav &quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-separator</code></td>
                                        <td>Basic Navs Style with Separator for the Tabs</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;nav &quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-tabs</code></td>
                                        <td>Tabs Navs Style for the Tabs. For example - above Preview Example.</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.nav-pills</code></td>
                                        <td>Pills Navs Style for the Tabs</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;nav nav-pills&quot; id=&quot;myTab&quot; role=&quot;tablist&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Social Icon
		  ============================ -->
                    <section id="idocs_social_icon">
                        <h3>Social Icon</h3>
                        <p>Social links with different styles. See below code for more information.</p>
                        <pre><code class="html">&lt;div class=&quot;d-flex flex-column&quot;&gt;
  &lt;ul class=&quot;social-icons&quot;&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.facebook.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Facebook&quot;&gt;&lt;i class=&quot;fab fa-facebook-f&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.twitter.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Twitter&quot;&gt;&lt;i class=&quot;fab fa-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.google.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Google&quot;&gt;&lt;i class=&quot;fab fa-google&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.linkedin.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Linkedin&quot;&gt;&lt;i class=&quot;fab fa-linkedin-in&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.youtube.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Youtube&quot;&gt;&lt;i class=&quot;fab fa-youtube&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li&gt;&lt;a data-toggle=&quot;tooltip&quot; href=&quot;http://www.instagram.com/&quot; target=&quot;_blank&quot; title=&quot;&quot; data-original-title=&quot;Instagram&quot;&gt;&lt;i class=&quot;fab fa-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/div&gt;
</code></pre>
                        <h4>Options:</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type Class</th>
                                        <th>Features</th>
                                        <th>Code Example</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Default (Dark)</td>
                                        <td>Default Social Icon with Dark Color</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;social-icons&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.social-icons-light</code></td>
                                        <td>Social Icon with Light Color</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;social-icons social-icons-light&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.social-icons-muted</code></td>
                                        <td>Social Icon with Muted Color</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;social-icons social-icons-muted&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.social-icons-sm</code></td>
                                        <td>Social Icon with Small Icon Size</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;social-icons social-icons-sm&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><code>.social-icons-lg</code></td>
                                        <td>Social Icon with Large Icon Size</td>
                                        <td>
                                            <pre class="mb-0"><code>&lt;ul class=&quot;social-icons social-icons-lg&quot;&gt;
  .......
&lt;/ul&gt;</code></pre>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- Helper Classes
		  ============================ -->
                    <section id="idocs_helper_classes">
                        <h3>Helper Classes</h3>
                        <p>We have created some really useful helper classes for you. Here are a few of them. also, You
                            can refer other default bootstrap helper classes here: <a class="ml-1" target="_blank"
                                href="https://getbootstrap.com/docs/4.4/utilities/"><i
                                    class="fas fa-external-link-alt"></i> Bootstrap Documentation</a> </p>

                        <h5>Text Size:</h5>
                        <ul>
                            <li><code>.text-0</code> - Changes the Font size to 11px.</li>
                            <li><code>.text-1</code> - Changes the Font size to 12px.</li>
                            <li><code>.text-2</code> - Changes the Font size to 14px.</li>
                            <li><code>.text-3</code> - Changes the Font size to 16px.</li>
                            <li><code>.text-4</code> - Changes the Font size to 18px.</li>
                            <li><code>.text-5</code> - Changes the Font size to 21px.</li>
                            <li><code>.text-6</code> - Changes the Font size to 24px.</li>
                            <li><code>.text-7</code> - Changes the Font size to 28px.</li>
                            <li><code>.text-8</code> - Changes the Font size to 32px.</li>
                            <li><code>.text-9</code> - Changes the Font size to 36px.</li>
                            <li><code>.text-10</code> - Changes the Font size to 40px.</li>
                            <li><code>.text-11</code> - Changes the Font size to 44px.</li>
                            <li><code>.text-12</code> - Changes the Font size to 48px.</li>
                            <li><code>.text-13</code> - Changes the Font size to 52px.</li>
                            <li><code>.text-14</code> - Changes the Font size to 56px.</li>
                            <li><code>.text-15</code> - Changes the Font size to 60px.</li>
                            <li><code>.text-16</code> - Changes the Font size to 64px.</li>
                            <li><code>.text-17</code> - Changes the Font size to 72px.</li>
                            <li><code>.text-18</code> - Changes the Font size to 80px.</li>
                            <li><code>.text-19</code> - Changes the Font size to 84px.</li>
                            <li><code>.text-20</code> - Changes the Font size to 92px.</li>
                        </ul>
                        <h5>Font Weight:</h5>
                        <ul>
                            <li><code>.font-weight-100</code> - For font weight of 100.</li>
                            <li><code>.font-weight-200</code> - For font weight of 200.</li>
                            <li><code>.font-weight-300</code> - For font weight of 300.</li>
                            <li><code>.font-weight-400</code> - For font weight of 400.</li>
                            <li><code>.font-weight-500</code> - For font weight of 500.</li>
                            <li><code>.font-weight-600</code> - For font weight of 600.</li>
                            <li><code>.font-weight-700</code> - For font weight of 700.</li>
                            <li><code>.font-weight-800</code> - For font weight of 800.</li>
                            <li><code>.font-weight-900</code> - For font weight of 900.</li>
                        </ul>
                        <h5>Background Color:</h5>
                        <ul>
                            <li><code>.bg-transparent</code> - For background color of transparent</li>
                            <li><code>.bg-light</code> - For background color of light gray</li>
                            <li><code>.bg-light-1</code> - For background color of more light gray</li>
                            <li><code>.bg-light-2</code> - For background color of more light gray</li>
                            <li><code>.bg-light-3</code> - For background color of more light gray</li>
                            <li><code>.bg-light-4</code> - For background color of more light gray</li>
                            <li><code>.bg-dark</code> - For background color of dark</li>
                            <li><code>.bg-dark-1</code> - For background color of dark gray</li>
                            <li><code>.bg-dark-2</code> - For background color of more dark gray</li>
                            <li><code>.bg-dark-3</code> - For background color of more dark gray</li>
                            <li><code>.bg-dark-4</code> - For background color of more dark gray</li>
                        </ul>
                        <h5>Box Shadow</h5>
                        <ul>
                            <li><code>.shadow-none</code> - For No shadow to elements with box-shadow utilities.</li>
                            <li><code>.shadow-sm</code> - For Small shadow to elements with box-shadow utilities.</li>
                            <li><code>.shadow</code> - For Regular shadow to elements with box-shadow utilities.</li>
                            <li><code>.shadow-md</code> - For medium light shadows to elements with box-shadow
                                utilities.</li>
                            <li><code>.shadow-lg</code> - For Larger shadows to elements with box-shadow utilities.</li>
                        </ul>
                        <h5>Opacity</h5>
                        <ul>
                            <li><code>.opacity-1</code> - For 10% opacity.</li>
                            <li><code>.opacity-2</code> - For 20% opacity.</li>
                            <li><code>.opacity-3</code> - For 30% opacity.</li>
                            <li><code>.opacity-4</code> - For 40% opacity.</li>
                            <li><code>.opacity-5</code> - For 50% opacity.</li>
                            <li><code>.opacity-6</code> - For 60% opacity.</li>
                            <li><code>.opacity-7</code> - For 70% opacity.</li>
                            <li><code>.opacity-8</code> - For 80% opacity.</li>
                            <li><code>.opacity-9</code> - For 90% opacity.</li>
                        </ul>
                        <h5>Border Radius</h5>
                        <ul>
                            <li><code>.rounded-top-0</code> - No Border Radius for top.</li>
                            <li><code>.rounded-bottom-0</code> - No Border Radius for bottom.</li>
                            <li><code>.rounded-left-0</code> - No Border Radius for left.</li>
                            <li><code>.rounded-right-0</code> - No Border Radius for right.</li>
                        </ul>
                        <h5>Borders, Sizing, Spacing (margin & padding) and also much more....</h5>
                        <div class="alert alert-info">You can refer for use other default bootstrap helper classes here
                            - <a
                                href="https://getbootstrap.com/docs/4.4/utilities/">https://getbootstrap.com/docs/4.4/utilities/</a>
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- FAQ
		============================ -->
                    <section id="idocs_faq">
                        <h2>FAQ</h2>
                        <p class="text-4">A FAQ is a list of frequently asked questions (FAQs) and answers on a
                            particular topic.</p>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="accordion accordion-alterate arrow-right" id="popularTopics">
                                    <div class="card">
                                        <div class="card-header" id="heading1">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse1" aria-expanded="false"
                                                    aria-controls="collapse1">What does royalty free mean?</a> </h5>
                                        </div>
                                        <div id="collapse1" class="collapse" aria-labelledby="heading1"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                text ever since the 1500s, when an unknown printer took a galley of type
                                                and scrambled it to make a type specimen book. It has survived not only
                                                five centuries, but also the leap into electronic typesetting, remaining
                                                essentially unchanged. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse2" aria-expanded="false"
                                                    aria-controls="collapse2">What is a single application?</a> </h5>
                                        </div>
                                        <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Iisque Anim pariatur cliche reprehenderit, enim
                                                eiusmod high life accusamus terry richardson ad squid. Food truck quinoa
                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                                bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse3" aria-expanded="false"
                                                    aria-controls="collapse3">What are some examples of permitted end
                                                    products?</a> </h5>
                                        </div>
                                        <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Iisque persius interesset his et, in quot quidam
                                                persequeris vim, ad mea essent possim iriure. Mutat tacimates id sit.
                                                Ridens mediocritatem ius an, eu nec magna imperdiet. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse4" aria-expanded="false"
                                                    aria-controls="collapse4">I'm not sure if my use is covered. What
                                                    should I do?</a> </h5>
                                        </div>
                                        <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Anim pariatur cliche reprehenderit, enim eiusmod
                                                high life accusamus terry richardson ad squid. Food truck quinoa
                                                nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                                bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                                Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                                                nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse5" aria-expanded="false"
                                                    aria-controls="collapse5">What is a single application?</a> </h5>
                                        </div>
                                        <div id="collapse5" class="collapse" aria-labelledby="heading5"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                                                craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad
                                                vegan excepteur butcher vice lomo. </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading6">
                                            <h5 class="mb-0"> <a href="#" class="collapsed" data-toggle="collapse"
                                                    data-target="#collapse6" aria-expanded="false"
                                                    aria-controls="collapse6">Am I allowed to modify the item that I
                                                    purchased?</a> </h5>
                                        </div>
                                        <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                            data-parent="#popularTopics">
                                            <div class="card-body"> Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Food truck quinoa nesciunt laborum eiusmod. Brunch
                                                3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                                coffee nulla assumenda shoreditch et. Ad vegan excepteur butcher vice
                                                lomo. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>

                    <hr class="divider">

                    <!-- Source & Credits
		============================ -->
                    <section id="idocs_source_credits">
                        <h2>Source & Credits</h2>
                        <h4>Images:</h4>
                        <ul>
                            <li>Unsplash - <a target="_blank" href="https://unsplash.com/">https://unsplash.com/</a>
                            </li>
                        </ul>
                        <h4>Fonts:</h4>
                        <ul>
                            <li>Icons Font Face - <a target="_blank"
                                    href="https://fontawesome.com/">https://fontawesome.com/</a></li>
                        </ul>
                        <h4>Scripts:</h4>
                        <ul>
                            <li>jQuery - <a target="_blank" href="http://www.jquery.com/">http://www.jquery.com/</a>
                            </li>
                            <li>Bootstrap 4 - <a target="_blank"
                                    href="http://getbootstrap.com/">http://getbootstrap.com/</a></li>
                            <li>Highlight Js - <a target="_blank"
                                    href="https://highlightjs.org/">https://highlightjs.org/</a></li>
                            <li>jQuery easing - <a target="_blank"
                                    href="http://gsgd.co.uk/sandbox/jquery/easing/">http://gsgd.co.uk/sandbox/jquery/easing/</a>
                            </li>
                            <li>Magnific Popup - <a target="_blank"
                                    href="http://dimsemenov.com/plugins/magnific-popup/">http://dimsemenov.com/plugins/magnific-popup/</a>
                            </li>
                        </ul>
                    </section>

                    <hr class="divider">

                    <!-- Support
		============================ -->
                    <section id="idocs_support">
                        <h2>Support</h2>
                        <p>If this documentation doesn't answer your questions, So, Please send us Email via <a
                                class="btn btn-primary" target="_blank"
                                href="https://themeforest.net/user/harnishdesign#contact">Item Support Page</a></p>
                        <p> We are located in GMT +5:30 time zone and we answer all questions within 12-24 hours in
                            weekdays. In some rare cases the waiting time can be to 48 hours. (except holiday seasons
                            which might take longer).</p>
                        <div class="alert alert-warning mb-4"><span
                                class="badge badge-danger text-uppercase">Note:</span> While we aim to provide the best
                            support possible, please keep in mind that it only extends to verified buyers and only to
                            issues related to our template like bugs and errors. Custom modifications or third party
                            module implementations are not included.</div>
                        <h4>Don’t forget to Rate this template
                            <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                                class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i
                                class="fas fa-star text-warning"></i>
                        </h4>
                        <div class="alert alert-success">
                            Please Add your Review (Opinion) for Our template. It would be a great support for us.<br>
                            Go to your <strong>Themeforest Profile</strong> > <strong>Downloads Tab</strong> > & then
                            You can Rate & Review for our template.<br>
                            Thank You.
                        </div>
                    </section>

                    <hr class="divider">

                    <!-- More Templates
		============================ -->
                    <section id="idocs_templates">
                        <h2>More Templates</h2>
                        <p class="lead">Checkout Our Below Premium Templates</p>

                        <div class="row">
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/28476751?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/simone.jpg" alt="">
                                    <h6 class="pt-2">Simone - Personal Portfolio Template</h6>
                                </a>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/26454458?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/kenil.jpg" alt="">
                                    <h6 class="pt-2">Kenil - Responsive Bootstrap 4 One Page Portfolio Template</h6>
                                </a>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/26313677?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/doon.jpg" alt="">
                                    <h6 class="pt-2">Doon - One Page Parallax HTML Template</h6>
                                </a>
                            </div>

                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/27172933?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/domainx.jpg" alt="">
                                    <h6 class="pt-2">DomainX- Domain for Sale HTML Template</h6>
                                </a>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/28848609?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/oxyy.jpg" alt="">
                                    <h6 class="pt-2">Oxyy - Login and Register Form HTML Templates</h6>
                                </a>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/27034971?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/koice.jpg" alt="">
                                    <h6 class="pt-2">Koice - Invoice HTML Template</h6>
                                </a>
                            </div>

                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/24017808?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/payyed.jpg" alt="">
                                    <h6 class="pt-2">Payyed - Money Transfer and Online Payments HTML Template</h6>
                                </a>
                            </div>
                            <div class="col-4 my-3 text-center">
                                <a target="_blank" href="https://themeforest.net/item/x/22375065?ref=HarnishDesign"><img
                                        class="img-fluid border" src="assets/images/templates/quickai.jpg" alt="">
                                    <h6 class="pt-2">Quickai - Recharge & Bill Payment, Booking HTML5 Template</h6>
                                </a>
                            </div>
                        </div>

                        <p class="text-center"><a class="btn btn-lg btn-primary my-4" target="_blank"
                                href="https://themeforest.net/user/harnishdesign/portfolio?ref=HarnishDesign">Our
                                Portfolio</a></p>

                    </section>

                    <hr class="divider">

                    <!-- Changelog
		============================ -->

                    <section id="idocs_changelog">
                        <h2>Changelog</h2>
                        <p class="text-4">See what's new added, changed, fixed, improved or updated in the latest
                            versions. </p>
                        <p class="alert alert-info mb-5"> For Future Updates Follow Us <a target="_blank"
                                href="http://themeforest.net/user/harnishdesign?ref=HarnishDesign">@themeforest</a> / <a
                                target="_blank" href="http://facebook.com/harnishdesign">@facebook</a> / <a
                                target="_blank" href="http://twitter.com/harnishdesign">@twitter</a> / <a
                                target="_blank" href="https://dribbble.com/harnishdesign">@Dribbble</a></p>

                        <h3 id="v1-1">Version 1.1 <small class="text-muted">(12 Oct, 2020)</small></h3>
                        <ul class="changelog">
                            <li><span class="badge badge-success">Added</span> Your information here for added new
                                feature</li>
                            <li><span class="badge badge-danger">Fixed</span> Some minor bugs for browser compatibility
                            </li>
                            <li><span class="badge badge-danger">Fixed</span> Some minor bugs for responsive</li>
                            <li><span class="badge badge-info">Updated</span> FontAwesome to Latest Version</li>
                            <li><span class="badge badge-info">Updated</span> Bootstrap to Latest Version</li>
                            <li><span class="badge badge-info">Updated</span> Improvements in CSS and JS</li>
                        </ul>

                        <hr class="divider">

                        <h3 id="v1-0">Version 1.0 <small class="text-muted">(8 April, 2020)</small></h3>
                        <p>Initial Release</p>
                    </section>

                </div>
            </div>

        </div>
        <!-- Content end -->

        <!-- Footer
  ============================ -->
        <footer id="footer" class="section bg-dark footer-text-light">
            <div class="container">
                <ul class="social-icons social-icons-lg social-icons-muted justify-content-center mb-3">
                    <li><a data-toggle="tooltip" href="https://twitter.com/harnishdesign/" target="_blank" title=""
                            data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                    <li><a data-toggle="tooltip" href="http://www.facebook.com/harnishdesign/" target="_blank" title=""
                            data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a data-toggle="tooltip" href="http://www.dribbble.com/harnishdesign/" target="_blank" title=""
                            data-original-title="Dribbble"><i class="fab fa-dribbble"></i></a></li>
                    <li><a data-toggle="tooltip" href="http://www.github.com/" target="_blank" title=""
                            data-original-title="GitHub"><i class="fab fa-github"></i></a></li>
                </ul>
                <p class="text-center">Copyright &copy; 2020 <a
                        href="http://www.harnishdesign.net/idocs-one-page-documentation-html-template/">iDocs</a>. All
                    Rights Reserved.</p>
                <p class="text-2 text-center mb-0">Design &amp; Develop by <a class="btn-link" target="_blank"
                        href="http://www.harnishdesign.net/">HarnishDesign</a>.</p>
            </div>
        </footer>
        <!-- Footer end -->

    </div>
    <!-- Document Wrapper end -->

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