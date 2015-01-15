<html>
	<head>
		<link rel="stylesheet" media="screen" type="text/css" href="vue/css/general.css"/>
	</head>
	<body>
		<header id="headnoco">
			<div id="image">
				<a id="Citymanag" href="/City-Manager/">
					<img src="/City-Manager/vue/images/fildariane.jpg"/>
				</a>
			</div>
			<div id="links">
				<a id="profil" href="/City-Manager/<?php echo $_SESSION['Player_pseudo']; ?>">
					Profil
				</a>
				
				<a id="inscription" href="controller/DestroySession.php">
					déconnexion
				</a>
				
			</div>
		</header>
	</body>
</html>