<?php


echo '<html>';
echo '<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/public/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="/public/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="/public/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>';
enter();



echo '<div class="container">
<form method="POST" action="http://localhost:8000/src/reg.php">

<h2 class="form-signin-heading">Registration</h2>

<input name="login" type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">

<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

<input name="password2" type="password" id="inputPassword" class="form-control" placeholder="Repeat Password" required="">

<button class="btn btn-lg btn-primary btn-block" type="submit">Sign me up</button>
</div>
</form>';

echo '</html>';