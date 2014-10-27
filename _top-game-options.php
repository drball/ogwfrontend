<?php

$isLoggedIn = true;

if ($isLoggedIn == true): ?>

    <div class="top-game-options top-game-options--member">
        <p class="top-game-options__title">Status in game:</p>
        <div class="btn-group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                Member <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>

    </div>

<?php else: ?>
    <div class="top-game-options">
        <p class="top-game-options__title">You are not a member of this game</p>
        <a href="" class="btn btn-primary top-game-options__join">Join now</a> <a href="" class="top-game-options__read-start">or read from the beginning</a>
    </div>
<?php endif; ?>