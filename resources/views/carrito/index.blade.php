@extends ('layouts.master')

@section ('title', 'Radiko')

@section ('content')



// Add some items in your Controller.
//Cart::add('2', 'Naranja', 1, 45.00);
//Cart::add('17', 'Tofu', 3, 138.90);


// tambien se puede hacer como array:

// Cart::add([
//   ['id' => '18', 'name' => 'Colita de cuadril', 'qty' => 1, 'price' => 595.50],
//   ['id' => '44', 'name' => 'Pera', 'qty' => 1, 'price' => 150.00]
// ]);



// Display the content in a View.
<table style="margin-top: 200px">
   	<thead>
       	<tr>
           	<th>Product</th>
           	<th>Qty</th>
           	<th>Price</th>
           	<th>Subtotal</th>
       	</tr>
   	</thead>

   	<tbody>

   		<?php foreach(Cart::content() as $row) :?>

       		<tr>
           		<td>
               		<p><strong><?php echo $row->name; ?></strong></p>
               		<p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
           		</td>
           		<td><input type="text" value="<?php echo $row->qty; ?>"></td>
           		<td>$<?php echo $row->price; ?></td>
           		<td>$<?php echo $row->total; ?></td>
       		</tr>

	   	<?php endforeach;?>

   	</tbody>
   	
   	<tfoot>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Subtotal</td>
   			<td><?php echo Cart::subtotal(); ?></td>
   		</tr>
   		<tr>
   			<td colspan="2">&nbsp;</td>
   			<td>Total</td>
   			<td><?php echo Cart::total(); ?></td>
   		</tr>
   	</tfoot>
</table>


@endsection