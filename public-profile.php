<?php include("_top.php") ?>

<?php include("_navbar.php") ?>


    <div class="stripe stripe--tall">

        <div class="container-fluid">

            <button type="button" class="sidecol-toggle collapsed" data-toggle="collapse" data-target=".sidebar__optional-content">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <h1 class="main-title user-profile__title">Onion</h1>
        </div>



    </div>

    <div class="main-content-wrapper user-profile-layout">
        <div class="container-fluid main-container">

            <div class="row">

                <div class="col-xs-12 col-sm-10 content-block user-profile user-profile--public">

                    <div class="row">
                        <div class="col-xs-8">

                            <div class="row profile__details-wrapper">
                                <div class="col-md-6 user-profile__details">
                                    <p class="detail-label">Full Name: <strong>Sirius</strong></p>
                                    <p class="detail-label">Location: <strong>UK</strong></p>
                                    <p class="detail-label">Joined: <strong>Feb 15, 2014</strong></p>
                                    <p class="detail-label">Description: <strong>Creator of OngoingWorlds.com</strong></p>
                                    <p class="detail-label">Email: <strong>david@ongoingworlds.com</strong></p>
                                </div>

                                <div class="col-md-6 user-profile__gameactivity">

                                    <p><strong>Recent game activity:</strong></p>

                                    <ul>
                                        <li><a href="/members/10">mrblobby</a>  updated the <a href="/games/392">game information</a> 2 days ago</li>
                                        <li><a href="/members/10">mrblobby</a>  created <span class="italic"><a href="/games/392/characters/1596">sdfsdfsdfsdf</a></span> 4 days ago</li>
                                        <li><a href="/members/8">onion</a>  created <span class="italic"><a href="/games/392/characters/1571">sdasd</a></span> 25 days ago</li>
                                        <li><a href="/members/10">mrblobby</a>  updated <span class="italic"><a href="/games/392/characters/1570">Rassilon 'M'</a></span> 32 days ago</li>
                                        <li><a href="/members/10">mrblobby</a>  created <span class="italic"><a href="/games/392/characters/1570">Rassilon 'M'</a></span> 32 days ago</li>
                                    </ul>


                                </div>

                            </div>
                        </div>

                        <div class="col-xs-4 user-profile__img-wrapper">
                            <div class="user-profile__user-img user-image">
                                <img src="http://www.ongoingworlds.com/images/user_images/0/user8-image.jpg?r=1263554683">
                            </div>
                            <p class="user-image__status">Hero membership <i class="glyphicon glyphicon-star icon-hero"></i> <a href=""><span class="sr-only">sss</span><i class="glyphicon glyphicon-question-sign"></i></a></p>

                            <div class="row user-profile__social-icons">
                                <div class="col-xs-4 col-sm-12 col-md-4 btn">Twitter</div>
                                <div class="col-xs-4 col-sm-12 col-md-4 btn">Facebook</div>
                                <div class="col-xs-4 col-sm-12 col-md-4 btn">Google+</div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-8">
                            <h3>Trophies</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="award-summary">
                                        <i class="award-summary__icon"></i>First Person Fortnight
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="award-summary">
                                        <i class="award-summary__icon"></i>First Person Fortnight
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="award-summary">
                                        <i class="award-summary__icon--special"></i>First Person Fortnight
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="award-summary">
                                        <i class="award-summary__icon"></i>First Person Fortnight
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">
                            <h2>Progress</h2>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                    <span class="sr-only">60% Complete</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <aside class="col-xs-12 col-sm-2 secondary">
                    <?php include("_secondary.php") ?>
                </aside>

            </div>

        </div><!-- /.container -->
    </div>



<?php include("_bottom.php") ?>