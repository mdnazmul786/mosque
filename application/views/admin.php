<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php if(isset($page_title)){ echo $page_title; } ?></title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Bootstrap Time Picker -->
        <link href="<?php echo base_url(); ?>include/admin/vendors/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>include/admin/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url(); ?>admin-panel" class="site_title"><i class="fa fa-paw"></i> <span>Musallah</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile">
                            <div class="profile_pic">
                                <img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>John Doe</h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <h3>General</h3>
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo base_url(); ?>admin-panel" ><i class="fa fa-home"></i> Dashboard </a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/prayer-setting" ><i class="fa fa-home"></i> Prayers Setting </a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/imams-profile" ><i class="fa fa-home"></i> Imams Profile </a></li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-edit"></i> Content Setting <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/headers">Headers</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/sliders">Sliders</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/footers">Footers</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/welcome-messages">Welcome Messages</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/testimonials">Testimonial</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/address">Address</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-desktop"></i> Community <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/about-us">About-Us</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/contact-us">Contact-Us</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/comity">Comity</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/teams">Team</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-table"></i> Media <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/image-gallery">Image Gallery</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/audio-gallery">Audio Gallery</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/video-gallery">Video Gallery</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/pdf-gallery">PDF Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-bar-chart-o"></i> Programs <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/events">Events</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/blogs">Blog</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/news">News</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-clone"></i>Utilities <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/projects">Projects</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/shops">Shop</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="menu_section">
                                <h3>Live On</h3>
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo base_url(); ?>admin/activities" ><i class="fa fa-bug"></i> Activities</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/service-lists" ><i class="fa fa-bug"></i> Service Lists</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/donations" ><i class="fa fa-bug"></i> Donation</a></li>
                                    <li><a href="<?php echo base_url(); ?>admin/jobs" ><i class="fa fa-bug"></i> Jobs</a></li>
                                    <li><a href="javascript:void(0)" ><i class="fa fa-windows"></i> Settings <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu">
                                            <li><a href="<?php echo base_url(); ?>admin/users">Users</a></li>
                                            <li><a href="<?php echo base_url(); ?>admin/admins">Admins</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                                </ul>
                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:void(0)">Help</a></li>
                                        <li><a href="<?php echo base_url(); ?>Admin/admin-logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="<?php echo base_url(); ?>include/admin/images/img.jpg" alt="Profile Image" /></span>
                                                <span>
                                                    <span>John Smith</span>
                                                    <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                                                    Film festivals used to be do-or-die moments for movie makers. They were where...
                                                </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                
                <!-- page content -->
                <?php if (isset($admin_content)) { echo $admin_content; } ?>
                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Copyright © Time and Date AS 2015–<?php echo date('Y'); ?>. All rights reserved by <a target="_blank" href="https://cloudnextbd.com">Cloudnextbd</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/nprogress/nprogress.js"></script>
        <!-- validator -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/validator/validator.js"></script>
        <!-- Datatables -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
        <!-- Chart.js -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- jQuery Sparklines -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <!-- Flot -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/Flot/jquery.flot.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/Flot/jquery.flot.time.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/DateJS/build/date.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>include/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Bootstrap Time Picker -->
        <script src="<?php echo base_url(); ?>include/admin/vendors/timepicker/bootstrap-timepicker.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>include/admin/build/js/custom.min.js"></script>
        
        <!-- bootstrap-daterangepicker -->
        <script type="text/javascript">
            $('#memberModal').modal('show');
        </script>
        <script>
          $(document).ready(function() {
            $('#timepicker1').timepicker();
            $('#timepicker2').timepicker();
            $('#timepicker3').timepicker();
            $('#timepicker4').timepicker();
            $('#birthday').daterangepicker({
              singleDatePicker: true,
              calender_style: "picker_4"
            }, function(start, end, label) {
              console.log(start.toISOString(), end.toISOString(), label);
            });
          });
        </script>
        <!-- /bootstrap-daterangepicker -->

        <!-- validator -->
        <script>
            // initialize the validator function
            validator.message.date = 'not a real date';

            // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
            $('form')
                    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
                    .on('change', 'select.required', validator.checkField)
                    .on('keypress', 'input[required][pattern]', validator.keypress);

            $('.multi.required').on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

            $('form').submit(function (e) {
                e.preventDefault();
                var submit = true;

                // evaluate the form using generic validaing
                if (!validator.checkAll($(this))) {
                    submit = false;
                }

                if (submit)
                    this.submit();

                return false;
            });
        </script>
        <!-- /validator -->

        <!-- Datatables -->
        <script>
            $(document).ready(function () {
                var handleDataTableButtons = function () {
                    if ($("#datatable-buttons").length) {
                        $("#datatable-buttons").DataTable({
                            dom: "Bfrtip",
                            buttons: [
                                {
                                    extend: "copy",
                                    className: "btn-sm"
                                },
                                {
                                    extend: "csv",
                                    className: "btn-sm"
                                },
                                {
                                    extend: "excel",
                                    className: "btn-sm"
                                },
                                {
                                    extend: "pdfHtml5",
                                    className: "btn-sm"
                                },
                                {
                                    extend: "print",
                                    className: "btn-sm"
                                },
                            ],
                            responsive: true
                        });
                    }
                };

                TableManageButtons = function () {
                    "use strict";
                    return {
                        init: function () {
                            handleDataTableButtons();
                        }
                    };
                }();

                $('#datatable').dataTable();

                $('#datatable-keytable').DataTable({
                    keys: true
                });

                $('#datatable-responsive').DataTable();

                $('#datatable-scroller').DataTable({
                    ajax: "js/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });

                $('#datatable-fixed-header').DataTable({
                    fixedHeader: true
                });

                var $datatable = $('#datatable-checkbox');

                $datatable.dataTable({
                    'order': [[1, 'asc']],
                    'columnDefs': [
                        {orderable: false, targets: [0]}
                    ]
                });
                $datatable.on('draw.dt', function () {
                    $('input').iCheck({
                        checkboxClass: 'icheckbox_flat-green'
                    });
                });

                TableManageButtons.init();
            });
        </script>
        <!-- /Datatables -->

        <!-- Flot -->
        <script>
            $(document).ready(function () {
                //define chart clolors ( you maybe add more colors if you want or flot will add it automatic )
                var chartColours = ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'];

                //generate random number for charts
                randNum = function () {
                    return (Math.floor(Math.random() * (1 + 40 - 20))) + 20;
                };

                var d1 = [];
                //var d2 = [];

                //here we generate data for chart
                for (var i = 0; i < 30; i++) {
                    d1.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
                    //    d2.push([new Date(Date.today().add(i).days()).getTime(), randNum()]);
                }

                var chartMinDate = d1[0][0]; //first day
                var chartMaxDate = d1[20][0]; //last day

                var tickSize = [1, "day"];
                var tformat = "%d/%m/%y";

                //graph options
                var options = {
                    grid: {
                        show: true,
                        aboveData: true,
                        color: "#3f3f3f",
                        labelMargin: 10,
                        axisMargin: 0,
                        borderWidth: 0,
                        borderColor: null,
                        minBorderMargin: 5,
                        clickable: true,
                        hoverable: true,
                        autoHighlight: true,
                        mouseActiveRadius: 100
                    },
                    series: {
                        lines: {
                            show: true,
                            fill: true,
                            lineWidth: 2,
                            steps: false
                        },
                        points: {
                            show: true,
                            radius: 4.5,
                            symbol: "circle",
                            lineWidth: 3.0
                        }
                    },
                    legend: {
                        position: "ne",
                        margin: [0, -25],
                        noColumns: 0,
                        labelBoxBorderColor: null,
                        labelFormatter: function (label, series) {
                            // just add some space to labes
                            return label + '&nbsp;&nbsp;';
                        },
                        width: 40,
                        height: 1
                    },
                    colors: chartColours,
                    shadowSize: 0,
                    tooltip: true, //activate tooltip
                    tooltipOpts: {
                        content: "%s: %y.0",
                        xDateFormat: "%d/%m",
                        shifts: {
                            x: -30,
                            y: -50
                        },
                        defaultTheme: false
                    },
                    yaxis: {
                        min: 0
                    },
                    xaxis: {
                        mode: "time",
                        minTickSize: tickSize,
                        timeformat: tformat,
                        min: chartMinDate,
                        max: chartMaxDate
                    }
                };
                var plot = $.plot($("#placeholder33x"), [{
                        label: "Email Sent",
                        data: d1,
                        lines: {
                            fillColor: "rgba(150, 202, 89, 0.12)"
                        }, //#96CA59 rgba(150, 202, 89, 0.42)
                        points: {
                            fillColor: "#fff"
                        }
                    }], options);
            });
        </script>
        <!-- /Flot -->

        <!-- jQuery Sparklines -->
        <script>
            $(document).ready(function () {
                $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
                    type: 'bar',
                    height: '125',
                    barWidth: 13,
                    colorMap: {
                        '7': '#a1a1a1'
                    },
                    barSpacing: 2,
                    barColor: '#26B99A'
                });

                $(".sparkline11").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3], {
                    type: 'bar',
                    height: '40',
                    barWidth: 8,
                    colorMap: {
                        '7': '#a1a1a1'
                    },
                    barSpacing: 2,
                    barColor: '#26B99A'
                });

                $(".sparkline22").sparkline([2, 4, 3, 4, 7, 5, 4, 3, 5, 6, 2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 6], {
                    type: 'line',
                    height: '40',
                    width: '200',
                    lineColor: '#26B99A',
                    fillColor: '#ffffff',
                    lineWidth: 3,
                    spotColor: '#34495E',
                    minSpotColor: '#34495E'
                });
            });
        </script>
        <!-- /jQuery Sparklines -->

        <!-- Doughnut Chart -->
        <script>
            $(document).ready(function () {
                var canvasDoughnut,
                        options = {
                            legend: false,
                            responsive: false
                        };

                new Chart(document.getElementById("canvas1i"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]

                            }]
                    },
                    options: options
                });

                new Chart(document.getElementById("canvas1i2"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]

                            }]
                    },
                    options: options
                });

                new Chart(document.getElementById("canvas1i3"), {
                    type: 'doughnut',
                    tooltipFillColor: "rgba(51, 51, 51, 0.55)",
                    data: {
                        labels: [
                            "Symbian",
                            "Blackberry",
                            "Other",
                            "Android",
                            "IOS"
                        ],
                        datasets: [{
                                data: [15, 20, 30, 10, 30],
                                backgroundColor: [
                                    "#BDC3C7",
                                    "#9B59B6",
                                    "#E74C3C",
                                    "#26B99A",
                                    "#3498DB"
                                ],
                                hoverBackgroundColor: [
                                    "#CFD4D8",
                                    "#B370CF",
                                    "#E95E4F",
                                    "#36CAAB",
                                    "#49A9EA"
                                ]

                            }]
                    },
                    options: options
                });
            });
        </script>
        <!-- /Doughnut Chart -->

        <!-- bootstrap-daterangepicker -->
        <script type="text/javascript">
            $(document).ready(function () {

                var cb = function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                };

                var optionSet1 = {
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment(),
                    minDate: '01/01/2012',
                    maxDate: '12/31/2015',
                    dateLimit: {
                        days: 60
                    },
                    showDropdowns: true,
                    showWeekNumbers: true,
                    timePicker: false,
                    timePickerIncrement: 1,
                    timePicker12Hour: true,
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    opens: 'left',
                    buttonClasses: ['btn btn-default'],
                    applyClass: 'btn-small btn-primary',
                    cancelClass: 'btn-small',
                    format: 'MM/DD/YYYY',
                    separator: ' to ',
                    locale: {
                        applyLabel: 'Submit',
                        cancelLabel: 'Clear',
                        fromLabel: 'From',
                        toLabel: 'To',
                        customRangeLabel: 'Custom',
                        daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                        monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                        firstDay: 1
                    }
                };
                $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
                $('#reportrange').daterangepicker(optionSet1, cb);
                $('#reportrange').on('show.daterangepicker', function () {
                    console.log("show event fired");
                });
                $('#reportrange').on('hide.daterangepicker', function () {
                    console.log("hide event fired");
                });
                $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
                    console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
                });
                $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
                    console.log("cancel event fired");
                });
                $('#options1').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
                });
                $('#options2').click(function () {
                    $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
                });
                $('#destroy').click(function () {
                    $('#reportrange').data('daterangepicker').remove();
                });
            });
        </script>
        <!-- /bootstrap-daterangepicker -->
    </body>
</html>