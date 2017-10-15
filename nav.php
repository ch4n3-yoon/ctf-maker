<?php

@session_start();

/* 로그인 되어 있는 경우 */
if (isset($_SESSION['id']))
{
	$logincheck = 1;
}

/* 로그인 되어 있지 않은 경우 */
else
{
	$logincheck = 0;
}

?>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Power of XX</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="../challenge">Challenge</a>
				</li>
				<li>
					<a href="../rank/">Rank</a>
				</li>
				<?php

				if($logincheck)
				{
				?>
					<li>
						<a href="../account/">Account</a>
					</li>
					<li>
						<a href="../login/logout.php">Logout</a>
					</li>
				<?php
				}
				else
				{
				?>
					<li>
						<a href="../login/">Login</a>
					</li>

					<li>
						<a href="../login/join.php">Join</a>
					</li>
				<?php
				}

				?>

			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>