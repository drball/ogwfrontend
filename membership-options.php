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

                    <h1 class="main-title">Membership options</h1>

                    <h3>Email Notification</h3>

                    <form name="details_form" method="post" action="/games/392/membership-options/update">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="formdata[email_all_posts]" value="1" class="checkbox" checked="true"> Email me when there is a new post
                            </label>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="formdata[email_character_posts]" value="1" class="checkbox" checked="true">Email me when there is a post using my character
                            </label>
                        </div>

                        <input type="submit" value="Save Changes" class="button btn btn-lg">
                    </form>

                    <br>

                    <div class="border-box">
                        <h3>Unsubscribe from this game</h3>
                        <p>Unsubscribing from this game means that you will not be able to post. Your characters and posts will remain.</p>
                        <form name="details_form" method="post" action="/games/392/membership-options/unsubscribe">

                            <input type="hidden" name="formdata[remove_members]" value="">

                            <input type="submit" value="Unsubscribe from this game" class="button-deny btn btn-danger" style="width:310px;">

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