<div class="container">
	<div class="row">
        <div class="col">
            <h1>Completed Orders</h1>
            <p>Orders that have been completed</p>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Order Number</th>
                    <th scope="col">Items</th>
                    <th scope="col">Time in</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($completed as $order): ?>
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
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
	</div>
</div>