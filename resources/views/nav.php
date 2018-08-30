<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Elk Menu</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item<?php if($name == 'orders') echo ' active' ?>">
				<a class="nav-link" href="/orders">Orders<?php if($name == 'orders') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
			<li class="nav-item<?php if($name == 'menu') echo ' active' ?>">
				<a class="nav-link" href="/menu">Manage menu<?php if($name == 'orders') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
			<li class="nav-item<?php if($name == 'users') echo ' active' ?>">
				<a class="nav-link" href="/users">Manage users<?php if($name == 'orders') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
		</ul>
	</div>
</nav>