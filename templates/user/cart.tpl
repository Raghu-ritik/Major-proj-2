<div class="content">
	<div class="container-fluid">		
		<div class='row'>		
		{if empty($cart)}
            <div class="container">
			<div class="jumbotron">
			<h3>Your cart is empty. Enjoy <a href="dashboard.php">food list</a> here.</h3>        
			</div>      
			</div> 
        {else}
            <h3>Your Cart</h3>    
			<table class="table table-striped">
			 <thead class="thead-dark">
			<tr>
			<th width="40%">Food Name</th>
			<th width="10%">Quantity</th>
			<th width="20%">Price Details</th>
			<th width="15%">Order Total</th>
			<th width="5%">Action</th>
			</tr>
			</thead>
            {assign var=foo value=0}        
            {foreach $cart as $cartItems}
                <tr>
                    <td> {{$cartItems.item_name}} </td>
                    <td> {{$cartItems.item_quantity}} </td>
                    <td> {{$cartItems.item_price}} </td>
                    <td> {{$cartItems.item_price * $cartItems.item_quantity}} </td>
                    <td><a href="cart.php?action=delete&id={$cartItems.food_id}"><span class="text-danger">Remove</span></a></td>
                    {{$foo = $foo + ($cartItems.item_price * $cartItems.item_quantity)}}
                </tr>
            {/foreach}  
            <tr>
                <td colspan="3" align="right">Total</td>
                <td align="right">$ {{$foo}}</td>
                <td></td>
			</tr>
			</table>
			<a href="cart.php?action=empty"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Empty Cart</button></a>&nbsp;
            <a href="dashboard.php"><button class="btn btn-warning">Add more items</button></a>&nbsp;
            <a href="checkout.php"><button class="btn btn-success pull-right"><span class="glyphicon glyphicon-share-alt"></span> Check Out</button></a>
        {/if}	
		</div>		   
	</div> 	
</div>