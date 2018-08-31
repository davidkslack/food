<div class="container">
    <div class="row">
        <div class="col">
            <h1>Users</h1>
            <p>All users on the system, please click one to manage</p>

            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $user->title ?></td>
                        <td><?php echo $user->first_name ?> <?php echo $user->last_name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><a class="btn btn-primary" href="/admin/user/<?php echo $user->user_id ?>" role="button">Edit</a></td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>