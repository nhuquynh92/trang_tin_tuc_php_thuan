<?php
include ('./controller/c_tintuc.php');
$c_tintuc = new c_tintuc();
$chitiet_tin = $c_tintuc->chi_tiet_tin();

$chitiet = $chitiet_tin['chitiettin'];
$comment = $chitiet_tin['comment'];
$relativeNew = $chitiet_tin['relativeNew'];
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

<!-- start header -->
    <?php include 'layout/header.php';?>
<!-- end header -->

<!-- Page Content -->
<div class="container">
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h1><?=$chitiet->TieuDe?></h1>

            <!-- Author -->
            <p class="lead">
                by <a href="#">Admin</a>
            </p>

            <!-- Preview Image -->
            <img class="img-responsive" src="public/image/tintuc/<?=$chitiet->Hinh?>" alt="">

            <!-- Date/Time -->
            <p style="margin-top: 10px;"><span class="glyphicon glyphicon-time"> Đăng lúc: <?=$chitiet->created_at?></span> </p>
            <hr>

            <!-- Post Content -->
            <p class="lead"><?=$chitiet->TomTat?></p>
            <p><?=$chitiet->NoiDung?></p>
            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
                <form role="form">
                    <div class="form-group">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Gửi</button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->
            <?php
            foreach ($comment as $cm){
                ?>
                <!-- Comment -->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">Admin
                            <small><?=$cm->created_at?></small>
                        </h4>
                        <?=$cm->NoiDung?>
                    </div>
                </div>

            <?php
            }
            ?>


        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin liên quan</b></div>
                <div class="panel-body">

                    <?php
                    foreach ($relativeNew as $rel){
                        ?>
                        <!-- item -->
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-5">
                                <a href="chitiet.php?id_chitiet=<?=$rel->id?>&alias=<?=$rel->TenKhongDau?>">
                                    <img class="img-responsive" src="public/image/tintuc/<?=$rel->Hinh?>" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="chitiet.php?id_chitiet=<?=$rel->id?>&alias=<?=$rel->TenKhongDau?>"><b><?=$rel->TieuDe?></b></a>
                            </div>
                      <!--      <p>< ?=$rel->TomTat?></p>    -->
                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                    <?php
                    }
                    ?>


                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Tin nổi bật</b></div>
                <div class="panel-body">

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="public/image/tintuc/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->

                    <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="image/320x150.png" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#"><b>Project Five</b></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->
</div>
<!-- end Page Content -->

<!-- start Footer -->
    <?php include 'layout/footer.php'?>
<!-- end Footer -->

<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/my.js"></script>

</body>

</html>
