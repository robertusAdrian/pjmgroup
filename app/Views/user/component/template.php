<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard User</title>


    <link href="/asset-crud/css/bootstrap.css" rel="stylesheet">
    <link href="/asset-crud/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/asset-crud/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/asset-crud/css/animate.css" rel="stylesheet">
    <link href="/asset-crud/css/style.css" rel="stylesheet">

    <link href="/asset-crud/css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="favicon.ico">

</head>

<body>

    <div id="wrapper">
        <?= $this->include('user/component/sidebar'); ?>

        <div id="page-wrapper" class="gray-bg">
            <!-- headerbar -->
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to User.</span>
                        </li>

                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary"></span>
                            </a>
                        </li>
                        <li>
                            <a href="logout.php">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>
                </nav>

                <!--##===================================== CONTENT ITEMS ========================================##-->
                <?= $this->renderSection('content'); ?>
                <!-- ##=============================Content Articles =============================================## -->

            </div>
        </div>

    </div>


    <!-- Footer -->

    <!-- Mainly scripts -->
    <script src="/asset-crud/js/jquery-3.1.1.min.js"></script>
    <script src="/asset-crud/js/bootstrap.min.js"></script>
    <script src="/asset-crud/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/asset-crud/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/asset-crud/js/inspinia.js"></script>
    <script src="/asset-crud/js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="/asset-crud/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function() {
            //     load_data();
            //     function load_data(page){
            //         $.ajax({
            //                 //url:"index.php",
            //                 method:"POST",
            //                 data:{page:page},
            //                 success:function(data){
            //                     $('#data').html(data);
            //      coba                  load_data(page);
            //                 }
            //         })
            //     }
            $(document).on('click', '.halaman', function() {
                var page = $(this).attr("id");
                load_data(page);
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>