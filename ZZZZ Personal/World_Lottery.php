<?php

function pageController

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Practice Lotto Raffles</title>
		<link rel="stylesheet" href="css/worldlottery.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta charset="utf-8">
	</head>
	<body background="imgs/world2.jpg" id="entirebody">
		<div id='centeringbox'>
			<main id='main'>
				<div id="border1">
					<h1><p class="whitetext">The <a id="top" class="world">World</a> Lottery</p></h1>
				</div>
				<div id="border2">
					<h2>
						<a class="eee" id="l1">ALL of Earth,</a><br>
						<a class="eee" id="l2">ALL major currencies,</a><br>
						<a class="eee" id="l3">The BIGGEST prizes ever awarded!</a>
					</h2>
					<p id="bitcoin">(Bitcoin<sup>TM</sup> capability coming soon!!!)</p>
						<a id="l4">-------------------------------------------------------------------------</a>
					<form id="form1" method="POST" action="http://requestb.in/168h09t1">
						<p>
							<label for="username"><input type="text" id="username" placeholder="              E-Mail" name="username"><p>------- Username -------</p></label>
						</p>
						<p>
							<label for="password"><input type="password" id="password" placeholder="                PW" name="password"><p>------- Password -------</p></label>
						</p>
						<p>
							<button id="createacct" type="submit">Creat account / Sign In</button>
							<button><a href="http://www.google.com" target=_"blank">View the games without an acct</a></button>
						</p>
						<p id="personalinfo">*Your personal info will only ever be viewable/editable by you
						</p>
						<p>
							<label id="rememberusername" for="remember"><input type="checkbox" id="remember" name="Remember UN" value="Y" checked>Remember my username</label>
							<label id="emaillist" for="email"><input type="checkbox" id="email" name="Remember UN" value="Y" checked>Join email list</label>
						</p>
					</form>
					<summary>
						<p>
							<a class="linkage" href="http://www.google.com" target=_blank><em>World Lottery Information</em></a>
						</p>
						<p>
							<a class="linkage" href="#top"><em>Top of page</em></a>
						</p>
						<p>
							<a id="l5">Proceeds go to selected Charities and Human Interest Projects</a>
						</p>
					</summary>
				</div>
			</main>
		</div>
	</body>
</html>