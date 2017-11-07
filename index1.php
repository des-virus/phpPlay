<!DOCTYPE html>
<html ng-app="app">
    <head>
        <meta charset="UTF-8">
        <title>Material</title>

        <link href="css/lib/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/lib/angular.min.js" type="text/javascript"></script>
        <script src="js/lib/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/lib/bootstrap.min.js" type="text/javascript"></script>

        <script src="js/module/app.js" type="text/javascript"></script>
        <script src="js/service/RoomService.js" type="text/javascript"></script>
        <script src="js/controller/RoomController.js" type="text/javascript"></script>
        <link href="css/lib/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <script src="js/lib/perfect-scrollbar.js" type="text/javascript"></script>

        <script>
            $(document).ready(function () {
                $("li a[href='" + window.location.pathname.split('/')[2] + "']").parent().addClass('active');
            });</script>

    </head>
    <body ng-controller="RoomCtrl">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Minh Phong 306</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="index.php">Trang chủ</a></li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Đăng xuất</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-3" >
            <div class="panel panel-success">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item">First item</li>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-9">
                <div class="panel panel-primary">
                    <div class="panel-heading">Nội dung</div>
                    <div class="panel-body"  id="col-perfect" style="height: 500px">
                        <ul class="list-group">
                            <li class="list-group-item">First item</li>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        

    </body>

</html>