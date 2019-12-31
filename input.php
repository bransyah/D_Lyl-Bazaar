<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa
                                    fa-paw"></i> <span>Input</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">

                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>John Doe</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side
                            hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span
                                                class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="index2.html">Dashboard2</a></li>
                                        <li><a href="index3.html">Dashboard3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">

                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class="navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile
                                        dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                        John Doe
                                    </a>
                                <div class="dropdown-menu dropdown-usermenu
                                        pull-right" aria-labelledby="navbarDropdown">


                                    <a class="dropdown-item" href="login.html"><i class="fa
                                                fa-sign-out pull-right"></i> Log
                                            Out</a>
                                </div>
                            </li>


                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Form Elements</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 form-group
                                    pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                            <button class="btn btn-default"
                                                type="button">Go!</button>
                                        </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Form Design <small>different form
                                                elements</small></h2>
                                    <ul class="nav navbar-right
                                            panel_toolbox">
                                        <li><a class="collapse-link"><i
                                                        class="fa
                                                        fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                                                        class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i
                                                        class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="demo-form2" data-parsley-validate class="form-horizontal
                                            form-label-left">

                                        <div class="item form-group">
                                            <label class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align" for="jam">Jam
                                                    <span
                                                        class="required">*</span>
                                                </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="time" id="jam" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align" for="jumlah_pelanggan">Jumlah
                                                    Pelanggan <span
                                                        class="required">*</span>
                                                </label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="number" id="jumlah_pelanggan" name="jumlah_pelanggan" required="required" class="form-control">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="pemasukan" class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align">Pemasukan</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="pemasukan" class="form-control" type="number" name="pemasukan">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="pemasukan" class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align">Pemasukan</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input id="pemasukan" class="form-control" type="number" name="pemasukan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align">Lokasi</label>
                                            <div class="col-md-6 col-sm-6">
                                                <select class="select2_group
                                                        form-control">
                                                        <optgroup label="Syiah
                                                            Kuala">
                                                            <option
                                                                value="Rukoh">Rukoh</option>
                                                            <option
                                                                value="Jeulingke">Jeulingke</option>
                                                            <option
                                                                value="Lamgugob">Lamgugob</option>
                                                            <option
                                                                value="Darussalam">Darussalam</option>
                                                        </optgroup>
                                                        <optgroup label="Ulee
                                                            Kareng">
                                                            <option
                                                                value="Lamglumpang">Lamglumpang</option>
                                                            <option
                                                                value="Lamteh">Lamteh</option>
                                                            <option
                                                                value="Ilie">Ilie</option>
                                                            <option
                                                                value="Ceurih">Ceurih</option>
                                                        </optgroup>
                                                    </select>
                                            </div>
                                        </div>



                                        <div class="item form-group">
                                            <label class="col-form-label
                                                    col-md-3 col-sm-3
                                                    label-align">
                                                    <div class="ln_solid"></div>
                                                    <div class="item
                                                        form-group">
                                                        <div class="col-md-6
                                                            col-sm-6
                                                            offset-md-3">
                                                            <button
                                                                type="submit"
                                                                class="btn
                                                                btn-success">Submit</button>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- batas -->



                                <!-- footer content -->
                                <footer>
                                    <div class="pull-right">
                                        Gentelella - Bootstrap Admin Template by
                                        <a href="https://colorlib.com">Colorlib</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </footer>
                                <!-- /footer content -->
                            </div>
                        </div>

                        <!-- jQuery -->
                        <script src="vendors/jquery/dist/jquery.min.js"></script>
                        <!-- Bootstrap -->
                        <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                        <!-- FastClick -->
                        <script src="vendors/fastclick/lib/fastclick.js"></script>
                        <!-- NProgress -->
                        <script src="vendors/nprogress/nprogress.js"></script>
                        <!-- bootstrap-progressbar -->
                        <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
                        <!-- iCheck -->
                        <script src="vendors/iCheck/icheck.min.js"></script>
                        <!-- bootstrap-daterangepicker -->
                        <script src="vendors/moment/min/moment.min.js"></script>
                        <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
                        <!-- bootstrap-wysiwyg -->
                        <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
                        <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
                        <script src="vendors/google-code-prettify/src/prettify.js"></script>
                        <!-- jQuery Tags Input -->
                        <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
                        <!-- Switchery -->
                        <script src="vendors/switchery/dist/switchery.min.js"></script>
                        <!-- Select2 -->
                        <script src="vendors/select2/dist/js/select2.full.min.js"></script>
                        <!-- Parsley -->
                        <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
                        <!-- Autosize -->
                        <script src="vendors/autosize/dist/autosize.min.js"></script>
                        <!-- jQuery autocomplete -->
                        <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
                        <!-- starrr -->
                        <script src="vendors/starrr/dist/starrr.js"></script>
                        <!-- Custom Theme Scripts -->
                        <script src="build/js/custom.min.js"></script>

                    </body>

                </html>