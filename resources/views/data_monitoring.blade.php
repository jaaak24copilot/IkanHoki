<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Koi Hoki">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Koi Hoki - Dashboard User</title>
    <link rel="icon" href="assets/images/logo/koi hoki.png" type="image/x-icon">

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
    <link href="assets/plugins/uniform/css/default.css" rel="stylesheet" />
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
    <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
    <link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" />

    <!-- Theme Styles -->
    <link href="assets/css/space.min.css" rel="stylesheet">
    <link href="assets/css/themes/admin3.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Sidebar -->
        <div class="page-sidebar">
            <a class="logo-box" href="{{route('home')}}">
                <span>Ikan Hoki</span>
            </a>
            <div class="page-sidebar-inner">
                <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                        @if(Route::currentRouteName() == 'home')
                        <li class="active-page">
                        @else
                        <li>
                        @endif
                            <a href="{{route('home')}}">
                                <i class="menu-icon fa fa-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>
                        @if(Route::currentRouteName() == 'device-monitoring')
                        <li class="active-page">
                        @else
                        <li>
                        @endif
                            <a href="{{route('device-monitoring')}}">
                                <i class="menu-icon fa fa-laptop"></i><span>Device Monitoring</span>
                            </a>
                        </li>
                        @if(Route::currentRouteName() == 'data-monitoring')
                        <li class="active-page">
                        @else
                        <li>
                        @endif
                            <a href="{{route('data-monitoring')}}">
                                <i class="menu-icon fa fa-bar-chart"></i><span>Data Monitoring</span>
                            </a>
                        </li>

                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title" id="exampleModalLabel">Complaint Form</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="recipient-name" class="control-label">Recipient:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="form-group">
                                                <label for="message-text" class="control-label">Message:</label>
                                                <textarea class="form-control" id="message-text"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </ul>
                </div>
            </div>
        </div><!-- /Page Sidebar -->

        <!-- Page Content -->
        <div class="page-content">
            <!-- Page Header -->
            <div class="page-header">
                <div class="search-form">
                    <form action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control search-input"
                                placeholder="Type something...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" id="close-search" type="button"><i
                                        class="icon-close"></i></button>
                            </span>
                        </div>
                    </form>
                </div>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <div class="logo-sm">
                                <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                <a class="logo-box" href="{{route('home')}}"><span>Ikan Hoki</span></a>
                            </div>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="fa fa-angle-down"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i
                                            class="fa fa-bars"></i></a></li>
                                <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a>
                                </li>
                                <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                        role="button" aria-haspopup="true" aria-expanded="false"><i
                                            class="fa fa-bell"></i></a>
                                    <ul class="dropdown-menu dropdown-lg dropdown-content">
                                        <li class="drop-title">Notifications</li>
                                        <li class="slimscroll dropdown-notifications">
                                            <ul class="list-unstyled dropdown-oc">
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-success"><i
                                                                class="fa fa-rss"></i></span>
                                                        <span class="notification-info"><b>Bot</b> Suhu Air Kolam Sudah
                                                            Ideal
                                                            <small class="notification-date">20:00</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-primary"><i
                                                                class="fa fa-rss"></i></span>
                                                        <span class="notification-info"><b>Bot</b> Air Kolam Bersifat
                                                            basa dan jernih
                                                            <small class="notification-date">06:07</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i
                                                                class="fa fa-warning"></i></span>
                                                        <span class="notification-info">TDS Dari Air Kolam Sudah
                                                            Melebihi Batas, Waktunya Ganti Air
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><span class="notification-badge bg-danger"><i
                                                                class="fa fa-warning"></i></span>
                                                        <span class="notification-info">pH Dari Air Kolam Sudah Melebihi
                                                            Batas, Waktunya Ganti Air
                                                            <small class="notification-date">Yesterday</small>
                                                        </span></a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                        aria-haspopup="true" aria-expanded="false"><img
                                            src="assets/images/profil/pradika.jpg" alt="" class="img-circle"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('profile')}}">Profile</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- /Page Header -->
            <!-- Page Inner -->
            <div class="page-inner">
                <div class="page-title">
                    <h3 class="breadcrumb-header">Data Monitoring</h3>
                </div>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Realtime Data</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th>No. Device</th>
                                                    <th>Temperature In</th>
                                                    <th>Temperature Out</th>
                                                    <th>pH</th>
                                                    <th>TDS</th>
                                                    <th>Timestamps</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>No. Device</th>
                                                    <th>Temperature In</th>
                                                    <th>Temperature Out</th>
                                                    <th>pH</th>
                                                    <th>TDS</th>
                                                    <th>Timestamps</th>
                                                </tr>
                                            </tfoot>
                                            @php
                                            $timestamos = date('Y-m-d');
                                            $no = 0;
                                            @endphp
                                            <tbody>
                                                {{-- for 1-30 --}}
                                                @foreach($forecast as $d)
                                                <tr>
                                                    <td>00000</td>
                                                    <td>{{$tempInForecast[$no]}}</td>
                                                    <td>{{$tempOutForecast[$no]}}</td>
                                                    <td>{{$d}}</td>
                                                    <td>{{$tdsForecast[$no]}}</td>
                                                    <td>{{$timestamos}}</td>
                                                </tr>
                                                @php
                                                $no+=1;
                                                $timestamos = date('Y-m-d', strtotime($timestamos . ' +1 day'));
                                                @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
                <div class="page-footer">
                    <p>Copyright <i class="fa fa-copyright"></i> Ikan Hoki</p>
                </div>
            </div><!-- /Page Inner -->
        </div><!-- /Page Content -->
    </div><!-- /Page Container -->

    <!-- Javascripts -->
    <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>
    <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/space.min.js"></script>
    <script src="assets/js/pages/table-data.js"></script>
</body>

</html>