<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Dashboard</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3 class="text-center">Library Management System</h3>
                    <strong><b>DC</b>L</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#bookSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Books
                        </a>
                        <ul class="collapse list-unstyled" id="bookSubmenu">
                            <li>
                              <a href="addBooks">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Book
                              </a>
                            </li>
                            <li>
                              <a href="booksList">
                                <i class="glyphicon glyphicon-list"></i>
                                Books List
                              </a>
                            </li>
                            <li>
                              <a href="categoriesList">
                                <i class="glyphicon glyphicon-tags"></i>
                                Category Wise books
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#catSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-tags"></i>
                            Categories
                        </a>
                        <ul class="collapse list-unstyled" id="catSubmenu">
                            <li>
                              <a href="addCategories">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Category
                              </a>
                            </li>
                            <li>
                              <a href="categoriesList">
                                <i class="glyphicon glyphicon-list"></i>
                                Categories List
                              </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#authorSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-pencil"></i>
                            Authors
                        </a>
                        <ul class="collapse list-unstyled" id="authorSubmenu">
                            <li>
                              <a href="addAuthors">
                                <i class="glyphicon glyphicon-plus"></i>
                                Add New Author
                              </a>
                            </li>
                            <li>
                              <a href="authorsList">
                                <i class="glyphicon glyphicon-list"></i>
                                Author List
                              </a>
                            </li>
                        </ul>
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
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="mainContentArea">
                @yield('content')
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
