<script>
    /**
     * Add check for new row in the DB by taking the latest order ID and passing to an endpoint
     * Will return all the new rows which we can add in to the table
     *
     * Add the complete method which will change status in the DB and remove the row from the table
     */
</script>

<div class="container">
	<div class="row">
        <div class="col">
            <h1>Orders</h1>
            <p>Orders as they come in, once its ready hit complete to tell the customer it's ready, for info click on an order.</p>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Order Number</th>
                    <th scope="col">Items</th>
                    <th scope="col">Time in</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach ($orders as $order): ?>
                    <tr>
                        <th scope="row"><?php echo $order->order_id ?></th>
                        <td>
                            <table class="table table-sm">
                                <tbody>
								<?php
								$total = 0;
								$count = 0;
								foreach ($order->food as $food){
									$count++;
									echo '<tr><td>' .$count .'</td><td>' .$food->title .'<td><td>£' .number_format($food->cost, 2) .'<td></tr>';
									$total += $food->cost;
								}
								echo '<tr><td></td><td><td><span class="align-right">Total</span><td>£' .number_format($total, 2) .'<td></tr>'
								?>
                                </tbody>
                            </table>
                        </td>
                        <td><?php echo date( 'H:i jS M', strtotime( $order->ordered_at )) ?></td>
                        <td><button type="button" class="btn btn-success">Complete</button></td>
                    </tr>
				<?php endforeach; ?>
                </tbody>
            </table>
        </div>
        </div>
	</div>
</div>