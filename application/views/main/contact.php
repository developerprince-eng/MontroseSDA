<div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="<?php echo base_url() ?>">
                                    <img src="<?php echo base_url() ?>static/img/logo-white.png" alt="" class="logo-1">
                                    <img src="<?php echo base_url() ?>static/img/logo-2.png" alt="" class="logo-2">
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
                                <li><a href="<?php echo base_url() ?>events">Events</a>
                                </li>
                                <li><a href="<?php echo base_url() ?>sermons">Sermons</a></li>
                                <li><a href="<?php echo base_url() ?>church-building">Church Building</a></li>
                                <li><a href="<?php echo base_url() ?>ministries">Ministries</a></li>
                                <li><a href="<?php echo base_url() ?>news">News</a></li>
                                <li><a href="<?php echo base_url() ?>gallery">Gallery</a></li>
                                <li><a href="<?php echo base_url() ?>contact">Contact</a></li>
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

                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- subheader close -->

        <div id="map"></div>

        <!-- content begin -->
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="contact-form-wrapper">
                            <div class="contact_form_holder">
                                <form id="contact" class="row" name="form1" method="post" action="#">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />
                                    <div id="error_email" class="error">Please check your email</div>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />
                                    <div id="error_message" class="error">Please check your message</div>
                                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>
                                    <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                    <div id="mail_failed" class="error">Error, email not sent</div>
                                    <p id="btnsubmit">
                                        <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 text-center">
                        <div class="contact-info">

                            <div class="social-icons">
                                <a href="https://www.facebook.com/montrosesda/"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>

                            <div class="divider-line"></div>

                            <span class="title">Telephone:</span>
                            +263773738136
						
						<div class="divider-line"></div>

                            <span class="title">Church Time:</span>
                            Saturday 09:00 and 18:00<br>
                            Sabbath school 9:40 - 10:30<br>
                            MidWeek meeting: Wednesday 20:00<br>
                            Elders meeting: Friday 20:00<br>

                            <div class="divider-line"></div>

                            <span class="title">Address:</span>
                           Cnr Ullwater & Sulgrave, Montrose Bulawyo Zimbabwe
						
                        </div>


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
                                <li><a href="<?php echo base_url() ?>">Home</a></li>
                                <li><a href="<?php echo base_url() ?>">About Us</a></li>
                                <li><a href="<?php echo base_url() ?>events">Events</a></li>
                                <li><a href="<?php echo base_url() ?>news">News</a></li>
                                <li><a href="<?php echo base_url() ?>contact">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>