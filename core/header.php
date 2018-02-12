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
					<li><a href="/cogumelos/SubPaginas/Lotes.php">Lotes</a></li>
					<?php if ($_SESSION['Admin']== 1){?>
					<li><a href="/cogumelos/SubPaginas/Admin.php">Admin Zone</a></li>
					<li><a href="/cogumelos/SubPaginas/Utilizadores.php">Utilizadores</a></li>
					<?php }?>
					<li><a href="/cogumelos/SubPaginas/Frutificacao.php">Frutificação</a></li>
					<li><a href="/cogumelos/core/logout.php">Log Out</a></li>
				</ul>
			</nav>
		</div>
	</header>
