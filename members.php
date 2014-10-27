<?php include("_top.php") ?>

<?php include("_navbar.php") ?>

<?php include("_stripe-game.php") ?>


<div class="main-content-wrapper game-layout">


    <div class="container-fluid main-container">

        <div class="row">

            <div class="col-xs-12 col-sm-3 col-md-3 sidebar sidebar--game-info-col">

               <?php include("_game-info-col.php") ?>

            </div>

            <div class="col-xs-12 col-sm-9 col-md-7 content-block infinite-height post">



                <div class="content-block__content">

                    <h1>Member</h1>
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

                                    <div class="body-txt">
                                        <strong>This user has 3 Characters: </strong><br>


                                        <a href="/games/392/characters/1569" class="character-inline"><img src="http://localhost/images/character_images/character1569-image.jpg" alt="">James Bond 007</a>


                                        <a href="/games/392/characters/1570" class="character-inline"><img src="http://localhost/images/character_images/character1570-image.jpg" alt="">Rassilon 'M'</a>


                                        <a href="/games/392/characters/1596" class="character-inline"><img src="http://localhost/images/character_images/character1596-image.jpg" alt="">sdfsdfsdfsdf</a>

                                    </div>


                                    <div class="username">
                                        <strong>Join date: </strong>Sep 26, 2014
                                    </div>


                                    <label for="status_member10">Status</label>
                                    <div class="btn-group">
                                        <select id="status_member10" name="member[10]" class="memberstatus form-control">
                                            <option value="0">Pending</option>
                                            <option value="2">Member</option>
                                            <option value="3" selected="selected">Moderator</option>
                                        </select>

                                        <input type="submit" value="Save" class="button save" disabled="">
                                    </div>


                                </form>



                            </div>

                            <div class="col-md-6">
                                <p>sdasd</p>
                            </div>
                        </div><!-- .row -->

                        <form name="unsubscribe_form_member_" method="post" action="/games/392/members/remove-members-confirm" class="member__unsubscribe-form">

                            <a href="/games/392/membership-options" class="btn">Unsubscribe <span class="glyphicon glyphicon-remove"></span></a>

                        </form>

                    </div>

                </div>

            </div>

            <aside class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-2 col-md-offset-0 secondary">
                <?php include("_secondary.php") ?>
            </aside>

        </div>

    </div><!-- /.container -->

</div>

<?php include("_bottom.php") ?>