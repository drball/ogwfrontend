<div class="row sidebar__content">

    <div class="col-xs-3 col-sm-12">
        <a href="#">
            <img src="images/game-image.jpg" class="img-responsive game-image" alt="game">
        </a>
    </div>

    <div class="col-xs-9 col-sm-12">


        <h2 class="game-title text-center"><a href="#">JMC Blue Dwarf</a></h2>

<!--        <div class="game-description">-->
<!--            <h3>Description:</h3>-->
<!--            <p>Adventures based in the many worlds possible in Dungeons & Dragons where players... <a href="#">More</a> </p>-->
<!--        </div>-->


        <ul class="nav nav-sidebar nav-sidebar--game-nav">
            <li class="active"><a href="#">View Posts </a></li>
            <li><a href="#">Characters </a></li>
            <li><a href="#">Members </a></li>
            <li><a href="#">Game Information </a></li>
        </ul>

        <div class="user-game-relationship">

            <?php

            $isLoggedIn = false;

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
                <p>You are not a member of this game</p>
                <a href="#" class="btn btn-primary btn-lg center-block">Join this game</a>
            <?php endif; ?>
        </div>

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

</div>