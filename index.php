<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic template</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="css/myStyle_mobile.css">
</head>
<body>
<!-- header -->

<section id="header" class="pad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-xs-2 boxGroup" id="logoHeader">
                <p>Logo</p>
            </div>
            <div class="col-md-5 col-xs-7 hDescription">
                <p class="mar-0 fw-p">Functional Note:</p>
                <span>Logo links to homepages</span>
            </div>
            <div class="col-md-4 col-xs-12 hSearch pad-0">
                <div class="pull-right">
                    <i class="glyphicon glyphicon-search"></i>
                    <input type="text" placeholder="SEARCH"/>
                    <span>LOGIN|HELP</span>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- end header -->
<!-- banner -->
<section id="banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 pad">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://via.placeholder.com/1429x400" alt="">
                            <div class="carousel-caption">
                                <h1>Title 1</h1>
                                <p>This is a first slide to test Bootstrap Carousel.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://via.placeholder.com/1429x400" alt="">
                            <div class="carousel-caption">
                                <h1>Title 2</h1>
                                <p>This is a second slide to test Bootstrap Carousel.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://via.placeholder.com/1429x400" alt="">
                            <div class="carousel-caption">
                                <h1>Title 3</h1>
                                <p>This is a third slide to test Bootstrap Carousel.</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://via.placeholder.com/1429x400" alt="">
                            <div class="carousel-caption">
                                <h1>Title 4</h1>
                                <p>This is a fourth slide to test Bootstrap Carousel.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button"
                       data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button"
                       data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<section id="content">
    <div class="container-fluid">
        <div class="row">
            <!-- content left -->
            <div class="col-md-2 content-left">
                <div class="nav col-md-12 col-xs-6">
                    <ul>
                        <li><h4>Navigation 1</h4></li>
                        <li>
                            SubNav 1
                        </li>
                        <li>
                            SubNav 2
                        </li>
                        <li>
                            SubNav 3
                        </li>
                        <li>
                            SubNav 4
                        </li>
                        <li>
                            SubNav 5
                        </li>
                        <li>
                            SubNav 6
                        </li>
                    </ul>
                </div>
                <div class="nav col-md-12 col-xs-6">
                    <ul>
                        <li><h4>Navigation 2</h4></li>
                        <li>
                            SubNav 1
                        </li>
                        <li>
                            SubNav 2
                        </li>
                        <li>
                            SubNav 3
                        </li>
                        <li>
                            SubNav 4
                        </li>
                        <li>
                            SubNav 5
                        </li>
                        <li>
                            SubNav 6aaa
                        </li>
                    </ul>
                </div>
                <div class="nav col-md-12 col-xs-6">
                    <ul>
                        <li><h4>Navigation 3</h4></li>
                        <li>
                            SubNav 1
                        </li>
                        <li>
                            SubNav 2
                        </li>
                        <li>
                            SubNav 3
                        </li>
                        <li>
                            SubNav 4
                        </li>
                        <li>
                            SubNav 5
                        </li>
                    </ul>
                </div>
                <div class="nav col-md-12 col-xs-6 ">
                    <ul>
                        <li><h4>Navigation 4</h4></li>
                        <li>
                            SubNav 1
                        </li>
                        <li>
                            SubNav 2
                        </li>
                        <li>
                            SubNav 3
                        </li>
                        <li>
                            SubNav 4
                        </li>
                        <li>
                            SubNav 5
                        </li>
                        <li>
                            SubNav 6
                        </li>
                    </ul>
                </div>
                <div class="nav col-md-12 col-xs-12">
                    <ul>
                        <li><h4>Navigation 5</h4></li>
                        <li>
                            SubNav 1
                        </li>
                        <li>
                            SubNav 2
                        </li>
                        <li>
                            SubNav 3
                        </li>
                        <li>
                            SubNav 4
                        </li>
                        <li>
                            SubNav 5
                        </li>
                        <li>
                            SubNav 6
                        </li>
                    </ul>
                </div>
                <div class="functional-note fw-p">
                    <h4>Functional-note:</h4>
                    <p>Left navigation would display links relevant to each individual based on login and personal
                        setting</p>
                </div>
                <div class="functional-note fw-p">
                    <h4>Functional-note:</h4>
                    <p>Scoll thourgh employees hover on employees will display contact info</p>
                </div>
            </div> <!-- end content-left -->
            <div class="col-md-6 content-middle">
                <div class="col-md-6 hContent-m">
                    <div class="title-image boxGroup box-image">
                        <p>EXCLUSIVE</p>
                    </div>
                </div>
                <div class="col-md-6 hContent-m">
                    <p>Monday 29,Septemper 2014</p>
                    <h2>Article Title</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid consequatur debitis
                        deserunt est eveniet illum libero magni minus natus nihil numquam, pariatur perferendis possimus
                        quae quaerat quam quas repellendus?
                    </p>
                    <a><br>Read More >></a>
                </div>
                <!-- Latest news -->
                <div class="col-md-12 latest-news">
                    <h3 class="boxGroup">LATEST NEWS</h3>
                </div>
                <div class="col-md-6 ">
                    <div class="cContent-m">
                        <p>Monday 29,Septemper 2014</p>
                        <h2>New Article Title</h2>
                        <p class="boxGroup box-image "></p>
                        <p class="text-image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error esse
                            fuga
                            labore laborum,
                            magnam necessitatibus nisi nobis </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cContent-m">
                        <p>Monday 29,Septemper 2014</p>
                        <h2>New Article Title</h2>
                        <p class="boxGroup box-image "></p>
                        <p class="text-image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error esse
                            fuga
                            labore laborum,
                            magnam necessitatibus nisi nobis </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cContent-m">
                        <p>Monday 29,Septemper 2014</p>
                        <h2>New Article Title</h2>
                        <p class="boxGroup box-image "></p>
                        <p class="text-image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error esse
                            fuga
                            labore laborum,
                            magnam necessitatibus nisi nobis </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cContent-m">
                        <p>Monday 29,Septemper 2014</p>
                        <h2>New Article Title</h2>
                        <p class="boxGroup box-image "></p>
                        <p class="text-image">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea error esse
                            fuga
                            labore laborum,
                            magnam necessitatibus nisi nobis </p>
                    </div>
                </div>
                <!-- end Latest news -->
                <!-- tab employess -->
                <div class="col-md-12 col-xs-12 fContent-m">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="tab" href="#eFollow">EMPLOYESS YOU FOLLOW</a></li>
                        <li><a data-toggle="tab" href="#aEmployess">ALL EMPLOYESS</a></li>
                        <li><a data-toggle="tab" href="#sEmployess">SEARCH EMPLOYESS</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="eFollow" class="tab-pane fade in active ">
                            <div class="row">
                                <div class="col-md-12   ">
                                    <div id="carousel-example-generic-1" class="carousel slide" data-ride="carousel"
                                         data-interval="false">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                                <div class="row" style="width: 730px;height: 120px">
                                                    <img src="img/man-1.png">
                                                    <img src="img/man-2.png">
                                                    <img src="img/man-3.png">
                                                    <img src="img/man-4.png">
                                                    <img src="img/man-5.png">
                                                    <img src="img/man-6.png">
                                                    <img src="img/man-7.png" >
                                                </div> <!-- end row item-active -->
                                            </div>
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-2">
                                                        <img src="img/man-1.png">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img src="img/man-2.png">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img src="img/man-4.png">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img src="img/man-1.png">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img src="img/man-1.png">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <img src="img/man-1.png">
                                                    </div>
                                                </div> <!-- end row item-active -->
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic-1"
                                           role="button"
                                           data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic-1"
                                           role="button"
                                           data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end tab employess -->
            </div><!-- end content-middle -->
            <!-- content right -->

            <div class="col-md-4 col-xs-12 content-right">
                <div class="col-md-12 col-xs-12 fVideo">
                    <h3 class="boxGroup">FEATURED VIDEO<a href="#">VIEW ALL</a></h3>
                </div>
                <div class="lp-jcarousel-wrapper  list-project">
                    <div class="lp-jcarousel">
                        <ul>
                            <li>
                                <div class="col-md-5">
                                    <p class="boxGroup"></p>
                                </div>
                                <div class="col-md-7">
                                    <h4>Project Name 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                        architecto assumenda culpa
                                        distinctio dolorem ducimus ea esse est hic id</p>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-5">
                                    <p class="boxGroup"></p>
                                </div>
                                <div class="col-md-7">
                                    <h4>Project Name 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                        architecto assumenda culpa
                                        distinctio dolorem ducimus ea esse est hic id</p>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-5">
                                    <p class="boxGroup"></p>
                                </div>
                                <div class="col-md-7">
                                    <h4>Project Name 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                        architecto assumenda culpa
                                        distinctio dolorem ducimus ea esse est hic id</p>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-5">
                                    <p class="boxGroup"></p>
                                </div>
                                <div class="col-md-7">
                                    <h4>Project Name 4</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                        architecto assumenda culpa
                                        distinctio dolorem ducimus ea esse est hic id</p>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-5">
                                    <p class="boxGroup"></p>
                                </div>
                                <div class="col-md-7">
                                    <h4>Project Name 5</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                        architecto assumenda culpa
                                        distinctio dolorem ducimus ea esse est hic id</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="lp-jcarousel-pagination"></p>
                </div>
                <div class="col-md-12 nDocument">
                    <h3 class="boxGroup">NEWSEST DOCUMENTS<a href="#">VIEW ALL</a></h3>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-3 col-xs-6 list-document">
                    <p class="boxGroup"></p>
                    <p>Document Name</p>
                </div>
                <div class="col-md-12 col-xs-12 fVideo">
                    <h3 class="boxGroup">FEATURED VIDEO<a href="#">VIEW ALL</a></h3>
                    <img src="img/video.png">
                    <p class="lp-jcarousel-pagination"></p>
                </div>
                <!-- end content right -->
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <p>Thuộc Bộ Khoa học Công nghệ. © Copyright 1997 VnExpress, All rights reserved</p>
</section>
<script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>