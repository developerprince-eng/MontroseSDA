<div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>
                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="index">
                                    <img src="<?php echo base_url() ?>static/img/logo-white.png" alt="" class="logo-1">  
                                    <img src="img/logo-2.png" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <div id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="<?php echo base_url(); ?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>events">Events</a>
                                </li>
                                <li><a href="<?php echo base_url(); ?>sermons">Sermons</a></li>
                                <li><a href="<?php echo base_url(); ?>church-building">Church Building</a></li>
                                <li><a href="<?php echo base_url(); ?>ministries">Ministries</a></li>
                                <li><a href="<?php echo base_url(); ?>news">News</a></li>
                                <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                            </ul>
                        </div>
                        <!-- mainmenu close -->
                    </div>
                </div>
            </div>

        </header>
        <!-- header close -->

        <!-- subheader begin -->
        <section id="subheader" data-speed="2" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Sermons</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <?php if($sermons == null): ?>
                        <div class="jumbotron jumbotron-fluid" style="background: white;">
                            <div class="container">
                                <h1 class="display-4" style="text-align: center;">Currently There are no Sermons</h1>
                                <p class="lead" style="text-align: center;">Please Check Later for any Sermons</p>
                            </div>
                        </div>
                        <?php else: ?>
                        <?php foreach($sermons as $item): ?>
                        <?php if($item['approve'] == 1): ?>
                        <div class="custom-col-3">
                            <div class="left-col">
                                <!-- <img src="img/sermons/pic%20(1).jpg" alt="" class="img-responsive"> -->
                            </div>
                            <div class="mid-col">
                                <a href="#">
                                    <h3><?php echo $item['title']?></h3>
                                </a>
                                <div class="details"><span>By <a href="#"><?php echo $item['preacher'] ?></a>, <?php echo $item['date'] ?></div>
                            </div>
                            <div class="right-col">
                                <a href="<?php echo base_url(); ?>static/pdf/sermons/<?php echo $item['pdf_url'] ?>"><i class="fa fa-file-pdf-o"></i></a>
                            </div>
                        </div>
                        <?php endif ?>
                        <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- content close -->

        <!-- footer begin -->
        <footer>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyiright 2019 - MontroseSDA by DeveloperPrince
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="https://www.facebook.com/montrosesda/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>">About Us</a></li>
                                <li><a href="<?php echo base_url(); ?>events">Events</a></li>
                                <li><a href="<?php echo base_url(); ?>news">News</a></li>
                                <li><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </footer>
        <!-- footer close -->
    </div>