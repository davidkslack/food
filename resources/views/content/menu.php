<div class="container">
    <div class="row">
        <div class="col">
            <h1>Menu</h1>
            <p>All food is shown and can be deited from this page.</p>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Cost</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($food as $item): ?>
                    <tr>
                        <td>£<?php echo number_format($item->cost, 2) ?></td>
                        <td><?php echo $item->title ?></td>
                        <td><?php echo $item->description ?></td>
                        <td><a class="btn btn-primary" href="/admin/menu/<?php echo $item->food_id ?>" role="button">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>