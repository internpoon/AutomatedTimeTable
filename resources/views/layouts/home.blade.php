<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Automated Time Table</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('custom_css')


</head>
<body>
<div id="app">


<div class="wrapper">
    <!-- Sidebar Holder -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Automated Timetable</h3>
            <strong>ATT</strong>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-home"></i>
                    Home
                </a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">Home 1</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('student.profile')}}"><i class="glyphicon glyphicon-user"></i>Profile</a>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                    <i class="glyphicon glyphicon-book"></i>
                    Subjects
                </a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="{{route('student.subjects')}}">Subjects List</a></li>
                    <li><a href="#">Enroll Subjects</a></li>
                    <li><a href="#">View Timetable</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('student.setting')}}">
                    <i class="glyphicon glyphicon-wrench"></i>
                    Setting
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="glyphicon glyphicon-off"></i>
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>

    </nav>

    <!-- Page Content Holder -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                        <i class="glyphicon glyphicon-align-left"></i>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <p class="nav navbar-nav navbar-right" style="margin-top: 10px; font-size: 20px">@yield('page_name')</p>
                </div>
            </div>
        </nav>

        <nav class="navbar">
            <div class="container-fluid">
                @yield('content')
            </div>
        </nav>
    </div>
</div>
</div>

<style>

    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";

    body {
        font-family: 'Poppins', sans-serif;
        background: #fafafa;
    }

    p {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1em;
        font-weight: 300;
        line-height: 1.7em;
        color: #999;
    }

    a, a:hover, a:focus {
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }

    .navbar {
        padding: 15px 10px;
        background: #fff;
        border: none;
        border-radius: 0;
        margin-bottom: 20px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
    }

    .navbar-btn {
        box-shadow: none;
        outline: none !important;
        border: none;
    }
    i, span {
        display: inline-block;
    }

    /* ---------------------------------------------------
        SIDEBAR STYLE
    ----------------------------------------------------- */
    .wrapper {
        display: flex;
        align-items: stretch;
    }

    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: #323942;
        color: #76838f ;
        transition: all 0.3s;
    }

    #sidebar.active {
        min-width: 80px;
        max-width: 80px;
        text-align: center;
    }

    #sidebar.active .sidebar-header h3, #sidebar.active .CTAs {
        display: none;
    }

    #sidebar.active .sidebar-header strong {
        display: block;
        color: #FFF;
    }

    #sidebar ul li a {
        text-align: left;
    }

    #sidebar.active ul li a {
        padding: 20px 10px;
        text-align: center;
        font-size: 0.85em;
    }

    #sidebar.active ul li a i {
        margin-right:  0;
        display: block;
        font-size: 1.8em;
        margin-bottom: 5px;
    }

    #sidebar.active ul ul a {
        padding: 10px !important;
    }

    #sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
        top: auto;
        bottom: 5px;
        right: 50%;
        -webkit-transform: translateX(50%);
        -ms-transform: translateX(50%);
        transform: translateX(50%);
    }

    #sidebar .sidebar-header {
        padding: 20px;
        background: #323942;
        border-bottom: 1px solid #FFF;
    }
    .sidebar-header h3 {
        color: #FFF;
    }

    #sidebar .sidebar-header strong {
        display: none;
        font-size: 1.8em;
    }

    #sidebar ul.components {
        padding: 20px 0;
    }

    #sidebar ul li a {
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }
    #sidebar ul li a:hover {
        color: #fff;
        background: #2A363B;
    }
    #sidebar ul li a i {
        margin-right: 10px;
    }

    #sidebar ul li.active > a, a[aria-expanded="true"] {
        color: #fff;
        background: #2A363B;
    }


    a[data-toggle="collapse"] {
        position: relative;
    }

    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
        content: '\e259';
        display: block;
        position: absolute;
        right: 20px;
        font-family: 'Glyphicons Halflings';
        font-size: 0.6em;
    }
    a[aria-expanded="true"]::before {
        content: '\e260';
    }


    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background: #323942;
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }

    a.download {
        background: #fff;
        color: #7386D5;
    }

    a.article, a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }



    /* ---------------------------------------------------
        CONTENT STYLE
    ----------------------------------------------------- */
    #content {
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
        width: 100%;
    }


    /* ---------------------------------------------------
        MEDIAQUERIES
    ----------------------------------------------------- */
    @media (max-width: 768px) {
        #sidebar {
            min-width: 80px;
            max-width: 80px;
            text-align: center;
            margin-left: -80px !important ;
        }
        a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
            top: auto;
            bottom: 5px;
            right: 50%;
            -webkit-transform: translateX(50%);
            -ms-transform: translateX(50%);
            transform: translateX(50%);
        }
        #sidebar.active {
            margin-left: 0 !important;
        }

        #sidebar .sidebar-header h3, #sidebar .CTAs {
            display: none;
        }

        #sidebar .sidebar-header strong {
            display: block;
        }

        #sidebar ul li a {
            padding: 20px 10px;
        }

        #sidebar ul li a span {
            font-size: 0.85em;
        }
        #sidebar ul li a i {
            margin-right:  0;
            display: block;
        }

        #sidebar ul ul a {
            padding: 10px !important;
        }

        #sidebar ul li a i {
            font-size: 1.3em;
        }
        #sidebar {
            margin-left: 0;
        }
        #sidebarCollapse span {
            display: none;
        }
    }

</style>
<!-- Scripts -->
{!! HTML::script('js/jquery-3.3.0.js') !!}
{!! HTML::script('js/bootstrap.min.js') !!}
{!! HTML::script('js/toastr.min.js') !!}
{!! HTML::script('js/app.js') !!}
<script>
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
@yield('custom_js')
</body>

</html>
