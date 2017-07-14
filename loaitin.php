<?php
    include ('./controller/c_tintuc.php');
    $c_tintuc = new c_tintuc();
    $tintuc = $c_tintuc->loai_tin();

    $menu = $tintuc['menu'];
    $title = $tintuc['title'];
    $danhmuc = $tintuc['danhmuctin'];
    $thanh_phan_trang = $tintuc['thanh_phan_trang'];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Khoa Pham</title>

    <!-- Bootstrap Core CSS -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/css/shop-homepage.css" rel="stylesheet">
    <link href="public/css/my.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- START header -->
    <?php include './layout/header.php';?>
    <!-- END header -->

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- START sidebar -->
        <?php include './layout/sidebar.php'?>
        <!-- END sidebar -->

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b><?=$title->Ten?></b></h4>
                </div>

                <?php
                foreach ($danhmuc as $dm){
                    ?>
                    <div class="row-item row">
                        <div class="col-md-3">

                            <a href="detail.html">
                                <br>
                                <img width="200px" height="200px" class="img-responsive" src="public/image/tintuc/<?=$dm->Hinh?>" alt="">
                            </a>
                        </div>

                        <div class="col-md-9">
                            <h3><?=$dm->TieuDe?></h3>
                            <p><?=$dm->TomTat?></p>
                            <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>

                <?php
                }

                ?>


            </div>

            <div><?=$thanh_phan_trang?></div>
        </div>

    </div>

</div>
<!-- end Page Content -->

    <!-- START footer -->
    <?php include './layout/footer.php'?>
    <!-- END footer -->

<!-- jQuery -->
<script src="public/js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/my.js"></script>

</body>

</html>
