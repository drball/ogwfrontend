

<div class="row sidebar__content">


    <a href="#" class="sidebar__game-img">
        <img src="images/game-image.jpg" class="img-responsive game-img" alt="game">
        <span class="edit-game"><span class="edit-game__text">Edit game</span> <i class="glyphicon glyphicon-cog"></i></span>
    </a>

    <h2 class="sidebar__game-title"><a href="#">JMC Blue Dwarf</a></h2>


    <div class="sidebar__optional-content collapse">

        <div class="col-xs-12 ">

            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">View Posts </a></li>
                <li><a href="#">Characters </a></li>
                <li><a href="#">Members </a></li>
                <li><a href="#">Game Information </a></li>
            </ul>

            <div class="user-game-relationship">

                <?php

                $isLoggedIn = true;

                if ($isLoggedIn == true): ?>

                    <div class="row">

                        <div class="col-sm-9 col-md-9">
                            <img src="images/member-image.jpeg" class="user-image pull-left" alt="David Ball">
                            <p class="user-game-relationship__user-status">You are a member of this game</p>

                        </div>

                        <div class="col-sm-3 col-md-3">


                            <button type="button" class="btn btn-default dropdown-toggle pull-right" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-cog"></i>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Your membership options</a></li>
                            </ul>
                        </div>
                    </div>


                    <ul class="nav nav-sidebar nav-sidebar--game-nav">
                        <li class="active"><a href="#">Create new post <i class="glyphicon glyphicon-edit"></i></a></li>
                        <li><a href="#">Add new character <i class="glyphicon glyphicon-user"></i></a></li>
                    </ul>


                <?php else: ?>

                <?php endif; ?>
            </div>

            <div class="sidebar__activity">
                <h3>Activity</h3>
                <div class="block ">

                    <p><a href="/members/748">Jaxx</a>  <a href="/games/270/posts/14721"> created a new post</a>
                        <br> 17 hrs ago</p>
                    <p><a href="/members/821">amoeba42</a>  <a href="/games/270/posts/14720"> created a new post</a>
                        <br> 19 hrs ago</p>
                    <p><a href="/members/836">Stitch</a>  <a href="/games/270/posts/14719"> created a new post</a>
                        <br> 1 day ago</p>

                </div>
            </div>


            <div class="sidebar__social row">
                <div class="col-sm-6 sidebar__fb">

                    <iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.ongoingworlds.com&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21&amp;appId=270298453071715" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
                </div>

                <div class="col-sm-6 sidebar__tw">

                    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.ongoingworlds.com" data-via="ongoingworlds" data-size="vertical">Tweet</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                </div>
            </div>

        </div>
    </div>




</div>