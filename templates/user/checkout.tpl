<style>
    {literal}
        .paymentdiv{
            padding:2rem 10rem;
        }
        .payemntMethod{
            height:17rem;
            width: 15rem;
        }
    {/literal}
</style>

<div class="container-fluid">		

    
 
 
<div class='row my-5'>
    <div class="col-md-6 paymentdiv">
        <img class="payemntMethod" src="{$g_base_url}\templates\assets/paymentMethod/AmazonQR.png" />			
    </div>
    <div class="col-md-6">
        <h3>Order Summery</h3>
        <p><strong>Items</strong>: ${{$totalOrder}}</p>
        <p><strong>Site fee</strong>: $7.50</p>
        <p><strong>Total</strong>: ${{$totalOrder+7.50}}</p>
        <p><strong>Order Total</strong>: ${{$totalOrder+7.50}} </p>
        <form action="process_order.php" method="POST">
            <input type="radio" name="PaymentType" value="CASH" id="PaymentTypeCASH" />  <label for="PaymentTypeCASH" > Cash </label>
            <input type="radio" name="PaymentType" value="ONLINE" id="PaymentTypeOnline" />  <label for="PaymentTypeOnline" > Online </label>
            <input type="hidden" name="orderNumber" value="{$orderNumber}" />
            <input type="hidden" name="Amount" value="{$totalOrder+7.50}" />
            <p><input type="submit" class="btn btn-warning" name="placeorder"  value="Place Order" /></p>
        </form>
    </div>
</div>
   
</div>  