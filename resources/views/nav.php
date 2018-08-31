<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="/"><img src="/images/logo224x224.jpg" width="auto" height="40"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

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

        <span class="align-right">
            <a class="nav-link" href="/admin/logout" style="padding-left: 0">Logout</a>
        </span>
	</div>
</nav>