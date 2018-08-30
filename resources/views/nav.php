<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/">Elk Menu</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item<?php if($name == 'order') echo ' active' ?>">
				<a class="nav-link" href="/admin/order">Orders<?php if($name == 'order') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
			<li class="nav-item<?php if($name == 'menu') echo ' active' ?>">
				<a class="nav-link" href="/admin/menu">Manage menu<?php if($name == 'menu') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
			<li class="nav-item<?php if($name == 'user') echo ' active' ?>">
				<a class="nav-link" href="/admin/user">Manage users<?php if($name == 'user') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
			<li class="nav-item<?php if($name == 'completed') echo ' active' ?>">
				<a class="nav-link" href="/admin/completed">Completed orders<?php if($name == 'completed') echo ' <span class="sr-only">(current)</span>' ?></a>
			</li>
		</ul>
	</div>
</nav>