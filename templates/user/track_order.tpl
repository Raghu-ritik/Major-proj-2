<div class="content">
	<div class="container-fluid">	
		<div class='row'>
				<div class="container">
					<div class="jumbotron">

          {if !empty($var)}
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Order ID</th>
                                <th scope="col">Food</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Payment Method</th>
                                <th scope="col">Status</th>
                              </tr>
                            </thead>
                            <tbody>
                                {foreach $allactive as $active}
                                    <tr>
                                        <td>{{$active.order_token}}</td>
                                        <td>{{$active.P_Name}}</td>
                                        <td>{{$active.Quantity}}</td>
                                        <td>{{$active.payment_type}}</td>
                                        <td>{{$active.current_status}}</td>
                                    </tr>
                                {/foreach}
                                </tbody>
                                </table>
                              {/if}

						<h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Working On Orders.</h1>
					</div>
				</div>
				<br>
                <div class="col-12 col-md-12"> 
                    <h3 class="text-center">Enjoy our <a href="dashboard.php">Food Zone!</a></h3>
                </div>
		</div>	  
    </div>