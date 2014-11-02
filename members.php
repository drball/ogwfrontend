<?php include("_top.php") ?>

<?php include("_navbar.php") ?>

<?php include("_stripe-game.php") ?>


<div class="main-content-wrapper game-layout">


    <div class="container-fluid main-container">

        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-3 sidebar sidebar--game-info-col">

               <?php include("_game-info-col.php") ?>

            </div>

            <div class="col-xs-12 col-sm-9 col-md-7 content-block infinite-height">



                <div class="content-block__content">

                    <h1 class="main-title">Members</h1>
                    <div class="border-box member">
                        <div class="row">
                            <div class="col-md-6">

                                <form name="membership_status_" method="post" action="/games/392/members/update-membership-details">


                                    <h2 class="member__title">
                                        <a href="/members/10" class="member__link">
                                            <div class="pull-left">
                                                <div class="gravatar">
                                                    <img src="http://www.ongoingworlds.com/images/user_images/0/user10-image.jpg?r=16066" width="30" height="30" alt="">
                                                </div>
                                            </div>
                                            mrblobby
                                        </a>
                                    </h2>


                                    <p><strong>This user has 3 Characters: </strong></p>


                                    <a href="/games/392/characters/1569" class="character-inline"><img src="http://localhost/images/character_images/character1569-image.jpg" alt="">James Bond 007</a>


                                    <a href="/games/392/characters/1570" class="character-inline"><img src="http://localhost/images/character_images/character1570-image.jpg" alt="">Rassilon 'M'</a>


                                    <a href="/games/392/characters/1596" class="character-inline"><img src="http://localhost/images/character_images/character1596-image.jpg" alt="">sdfsdfsdfsdf</a>


                                    <p class="member__item"><strong>Join date: </strong>Sep 26, 2014</p>


                                    <label for="status_member10">Status</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <select id="status_member10" name="member[10]" class="memberstatus form-control">
                                                <option value="0">Pending</option>
                                                <option value="2">Member</option>
                                                <option value="3" selected="selected">Moderator</option>
                                            </select>

                                            <input type="submit" value="Save" class="btn save form-control" disabled="">
                                        </div>
                                    </div>



                                </form>



                            </div>

                            <div class="col-md-6">
                                <h3>7 awards</h3>



                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy-special2.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip" >
                                <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="member__see-awards">See all awards</a>

                                <div class="member__item">
                                    <a href="/games/392/members/10/give-award" class="give-award-btn btn btn-lg"><i class="give-award-btn__icon"></i> Give award</a>

                                </div>

                                <p class="member__item"><a href="http://www.ongoingworlds.com/blog/2011/05/award-your-members/" title="Explaining awards">What are awards? <i class="glyphicon glyphicon-question-sign"></i></a></p>
                            </div>
                        </div><!-- .row -->

                        <form name="unsubscribe_form_member_" method="post" action="/games/392/members/remove-members-confirm" class="member__unsubscribe-form">

                            <a href="/games/392/membership-options" class="btn">Unsubscribe <span class="glyphicon glyphicon-remove"></span></a>

                        </form>

                    </div>

                    <div class="border-box member">
                        <div class="row">
                            <div class="col-md-6">

                                <form name="membership_status_" method="post" action="/games/392/members/update-membership-details">


                                    <h2 class="member__title">
                                        <a href="/members/10" class="member__link">
                                            <div class="pull-left">
                                                <div class="gravatar">
                                                    <img src="http://www.ongoingworlds.com/images/user_images/0/user10-image.jpg?r=16066" width="30" height="30" alt="">
                                                </div>
                                            </div>
                                            mrblobby
                                        </a>
                                    </h2>


                                    <p><strong>This user has 3 Characters: </strong></p>


                                    <a href="/games/392/characters/1569" class="character-inline"><img src="http://localhost/images/character_images/character1569-image.jpg" alt="">James Bond 007</a>


                                    <a href="/games/392/characters/1570" class="character-inline"><img src="http://localhost/images/character_images/character1570-image.jpg" alt="">Rassilon 'M'</a>


                                    <a href="/games/392/characters/1596" class="character-inline"><img src="http://localhost/images/character_images/character1596-image.jpg" alt="">sdfsdfsdfsdf</a>


                                    <p class="member__item"><strong>Join date: </strong>Sep 26, 2014</p>


                                    <label for="status_member10">Status</label>
                                    <div class="form-inline">
                                        <div class="form-group">
                                            <select id="status_member10" name="member[10]" class="memberstatus form-control">
                                                <option value="0">Pending</option>
                                                <option value="2">Member</option>
                                                <option value="3" selected="selected">Moderator</option>
                                            </select>

                                            <input type="submit" value="Save" class="btn save form-control" disabled="">
                                        </div>
                                    </div>



                                </form>



                            </div>

                            <div class="col-md-6">
                                <h3>7 awards</h3>



                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy-special2.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip" >
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="add_tooltip">
                                    <img src="http://localhost/images/template/trophy.png" width="30" height="30" alt="Award icon" class="award-icon">
                                </a>


                                <a href="/members/10/awards" class="member__see-awards">See all awards</a>

                                <div class="member__item">
                                    <a href="/games/392/members/10/give-award" class="give-award-btn btn btn-lg"><i class="give-award-btn__icon"></i> Give award</a>

                                </div>

                                <p class="member__item"><a href="http://www.ongoingworlds.com/blog/2011/05/award-your-members/" title="Explaining awards">What are awards? <i class="glyphicon glyphicon-question-sign"></i></a></p>
                            </div>
                        </div><!-- .row -->

                        <form name="unsubscribe_form_member_" method="post" action="/games/392/members/remove-members-confirm" class="member__unsubscribe-form">

                            <a href="/games/392/membership-options" class="btn">Unsubscribe <span class="glyphicon glyphicon-remove"></span></a>

                        </form>

                    </div>


                    <ul class="pagination pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>



                </div>

            </div>

            <aside class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-2 col-md-offset-0 secondary">
                <?php include("_secondary.php") ?>
            </aside>

        </div>

    </div><!-- /.container -->

</div>

<?php include("_bottom.php") ?>