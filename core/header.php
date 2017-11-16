<header>
		<div class="container">
			<div class="avatar-container">
				<div class="logo">
					<img src="/cogumelos/img/user-icon.png">
				</div>
				<div class='avatar-text'>
				<?php echo $_SESSION['Nome']," ",$_SESSION['Sobrenome']; ?>
				</div>
			</div>
			<nav>
				<ul>
					<li><a href="/cogumelos/Subpaginas/Lotes.php">Lotes</a></li>
					<li><a href="/cogumelos/Subpaginas/Admin.php">Admin Zone</a></li>
					<li><a href="/cogumelos/Subpaginas/Utilizadores.php">Utilizadores</a></li>
					<li><a href="/cogumelos/Subpaginas/Frutificacao.php">Frutificação</a></li>
					<li><a href="/cogumelos/core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>