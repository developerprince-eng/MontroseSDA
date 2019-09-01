
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
                                <a href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url() ?>static/img/logo-white.png" alt="" class="logo-1">  
                                    <img src="<?php echo base_url() ?>/static/img/logo-2.png" alt="" class="logo-2">
                                </a>
                            </div>
                        </div>
                        <!-- logo close -->
                    </div>
                    <div class="col-md-9">
                        <!-- mainmenu begin -->
                        <div id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="<?php echo base_url() ?>">Home</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>/events">Events</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>/sermons">Sermons</a></li>
                                <li><a href="<?php echo base_url() ?>/church-building">Church Building</a></li>
                                <li><a href="<?php echo base_url() ?>/ministries">Ministries</a></li>
                                <li><a href="<?php echo base_url() ?>/news">News</a></li>
                                <li><a href="<?php echo base_url() ?>/gallery">Gallery</a></li>
                                <li><a href="<?php echo base_url() ?>/contact">Contact</a></li>
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
                        <h1>News</h1>
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
                <?php if($news == null): ?>
                <div class="jumbotron jumbotron-fluid" style="background: white;">
                    <div class="container">
                        <h1 class="display-4" style="text-align: center;">Currently There is No News</h1>
                        <p class="lead" style="text-align: center;">Please Check Later for any News</p>
                    </div>
                </div>
                <?php else: ?>
                <?php foreach($news as $item) : ?>
                    <?php if($item['approve'] == 1): ?>
                    <!-- event item begin -->
                    <div class="col-md-6 event-item">
                        <div class="inner">
                            <div class="left-col">
                                <img src="<?php echo base_url() ?>/static/img/news/<?php echo $item['img_url'] ?>" alt="">
                            </div>
                            <div class="right-col">
                                <span class="date"><?php echo $item['date'] ?></span>
                                <span class="time"><?php echo $item['time'] ?></span>
                            </div>
                        </div>
                        <div class="desc">
                            <a href="#">
                                <h3><?php echo $item['title'] ?></h3>
                            </a>
                            <span class="text"><?php echo $item['brief'] ?>
                            </span>
                        </div>
                    </div>
                    <?php endif ?>
                    <!-- event item close -->
                <?php endforeach ?>
                <?php endif ?>
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
