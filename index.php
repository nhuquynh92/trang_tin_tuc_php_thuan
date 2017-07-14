<?php
    include ('controller/c_tintuc.php');
    $c_tintuc = new c_tintuc();
    $noi_dung = $c_tintuc->index();

    $slide = $noi_dung['slide']; // trỏ vào trong bảng slide
    $menu = $noi_dung['menu'];  // trỏ tới con trỏ trong menu

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

</head>

<body>

    <!-- START header -->
    <?php include './layout/header.php';?>
    <!-- END header -->

<!-- Page Content -->
<div class="container">

    <!-- START slide -->
    <?php include './layout/slide.php'?>
    <!-- END slide -->

    <div class="space20"></div>

    <!-- START row -->
    <div class="row main-left">

        <!-- START sidebar -->
        <?php include './layout/sidebar.php'?>
        <!-- END sidebar -->

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;"> Tin Tức</h2>
                </div>

                <div class="panel-body">

                    <?php
                    foreach ($menu as $mn){
                        ?>
                        <!-- item -->
                        <div class="row-item row">
                            <h3>
                                <a href="#"><?=$mn->Ten?></a> |

                                <?php
                                $loaitin = explode(',', $mn->LoaiTin);
                                foreach ($loaitin as $loai) {
                                    list($id, $ten, $tenkhongdau) = explode(':', $loai);
                                    ?>

                                    <small><a href="loaitin.html"><i><?=$ten?></i></a>/</small>

                                    <?php
                                }
                                ?>

                            </h3>
                            <div class="col-md-12 border-right">
                                <div class="col-md-3">
                                    <a href="chitiet.html">
                                        <img class="img-responsive" src="public/image/tintuc/<?=$mn->HinhTin?>" alt="" ">
                                    </a>
                                </div>

                                <div class="col-md-9">
                                    <h3><?=$mn->TieuDeTin?></h3>
                                    <p><?=$mn->TomTatTin?></p>
                                    <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>

                            </div>

                            <div class="break"></div>
                        </div>
                        <!-- end item -->


                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- END row -->

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
