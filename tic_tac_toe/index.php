<?php
include 'oop/class.game.php';
include 'oop/class.tictactoe.php';

//this will store their information as they refresh the page
session_start();

//if they haven't started a game yet let's load one
if (!isset($_SESSION['game']['tictactoe']))
	$_SESSION['game']['tictactoe'] = new tictactoe();

?>
<html>
	<head>
		<title>Tic Tac Toe</title>
		<link rel="stylesheet" type="text/css" href="inc/style.css" />
	</head>
	<body>
		<div id="content">
                    <form action="" method="POST" name="tictac">
		<h2>Let's Play Tic Tac Toe!</h2>
		<?php
			$_SESSION['game']['tictactoe']->playGame($_POST);
		?>
		</form>
		</div>
            <footer>
                <h4 style="text-align: center;">Programed By Basic PHP</h4>
            </footer>
	</body>
</html>