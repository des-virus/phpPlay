
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title> </title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap4/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap4/dashboard.css" rel="stylesheet">
        <!-- Font awesome-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="">Management</a>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng xuất</a>
                        </li>

                    </ul>
                    <form class="form-inline mt-2 mt-md-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Nhập nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </nav>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="product.php">Sản phẩm <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">Danh mục</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">Khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="provider.php">Nhà cung cấp</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="staff.php">Nhân viên</a>
                        </li>
                    </ul>
                </nav>

                <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                    <h1>Dashboard</h1>

                    <section class="row text-center placeholders">

                        <div class="col-6 col-sm-3 placeholder">
                            <a href="product.php">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                                <h4>Sản phẩm</h4>
                                <div class="text-muted">Quản lý sản phẩm</div>
                            </a>
                        </div>

                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                            <h4>Danh mục</h4>
                            <span class="text-muted">Quản lý danh mục</span>
                        </div>
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                            <h4>Khách hàng</h4>
                            <span class="text-muted">Quản lý khách hàng</span>
                        </div>
                        <div class="col-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
                            <h4>Nhà cung cấp</h4>
                            <span class="text-muted">Quản lý nhà cung cấp</span>
                        </div>
                    </section>

                    <h2>Bảng dữ liệu</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Ghi chú</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Quần tây</td>
                                    <td>120.000 đ</td>
                                    <td>Quần âu lịch lãm</td>
                                    <td>
                                        <button class="btn btn-outline-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                        <button class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="bootstrap4/popper.min.js"></script>
        <script src="bootstrap4/bootstrap.min.js"></script>


    </body>
</html>
