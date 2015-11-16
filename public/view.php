<?php

echo '<html>';
echo '<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="public/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="public/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="public/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>';
enter();


echo '<form method="POST" action="http://localhost:8000">
<div class="form-group">
    <label for="exampleInputLogin">Login:</label>
    <input type="text"  class="form-control" id="exampleInputLogin" name="login"/><br/>'.validateLogin($_REQUEST['login']).'
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text"  class="form-control" id="exampleInputPassword" name="password"/></br>'.validatePassword($_REQUEST['password']).'
</div>
<input type="submit" class="btn btn-default" value="Send"/>
</form>';


echo '</html>';


/* http://getbootstrap.com/getting-started/#template - Sign-in page    http://getbootstrap.com/examples/signin/ */
/*сделать форму регистрации*/