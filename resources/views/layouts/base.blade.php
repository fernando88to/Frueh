<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Frueh - @yield("titulo")</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="/Frueh/bootstrap_layout/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Frueh/bootstrap_layout/css/bootstrap-responsive.min.css" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="/Frueh/bootstrap_layout/css/font-awesome.css" rel="stylesheet">

    <link href="/Frueh/bootstrap_layout/css/style.css" rel="stylesheet">

    <link href="/Frueh/bootstrap_layout/css/pages/reports.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="index.html">
                Bootstrap Admin Template
            </a>

            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog"></i>
                            Account
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Settings</a></li>
                            <li><a href="javascript:;">Help</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>
                            EGrappler.com
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Profile</a></li>
                            <li><a href="javascript:;">Logout</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>

            </div><!--/.nav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->





<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <ul class="mainnav">

                <li>
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>



                <li class="active">
                    <a href="reports.html">
                        <i class="icon-list-alt"></i>
                        <span>Reports</span>
                    </a>
                </li>

                <li>
                    <a href="guidely.html">
                        <i class="icon-facetime-video"></i>
                        <span>App Tour</span>
                    </a>
                </li>


                <li>
                    <a href="charts.html">
                        <i class="icon-bar-chart"></i>
                        <span>Charts</span>
                    </a>
                </li>


                <li>
                    <a href="shortcodes.html">
                        <i class="icon-code"></i>
                        <span>Shortcodes</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-long-arrow-down"></i>
                        <span>Drops</span>
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="pricing.html">Pricing Plans</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a href="error.html">404</a></li>
                    </ul>
                </li>

            </ul>

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->



<div class="main">

    <div class="main-inner">

        <div class="container">
            @yield('conteudo')


        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->



<div class="footer">

    <div class="footer-inner">

        <div class="container">

            <div class="row">

                <div class="span12">
                    &copy; 2013 <a href="http://www.egrappler.com/">Bootstrap Responsive Admin Template</a>.
                </div> <!-- /span12 -->

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /footer-inner -->

</div> <!-- /footer -->


<script src="/Frueh/bootstrap_layout/js/jquery-1.7.2.min.js"></script>
<script src="/Frueh/bootstrap_layout/js/excanvas.min.js"></script>
<script src="/Frueh/bootstrap_layout/js/chart.min.js" type="text/javascript"></script>
<script src="/Frueh/bootstrap_layout/js/bootstrap.js"></script>
<script src="/Frueh/bootstrap_layout/js/base.js"></script>



</body>

</html>