<div class="container">

<div class="jumbotron">
    <div class="row">
        <div class="col-md-12 align-center"> <h1 class="display-4"> {{$Product.P_Name}}</h1> </div>
        <div class="col-6"> 
            <div class="row" >
                <div class="col-12">  <p class="lead">  {{$Product.description}} </p>       </div>
                <div class="col-12">   <h1> Item Price :  {{$Product.price}} </h1>    </div>
                <div class="col-12">   <h2> Item Quantity In Inventory :&nbsp;&nbsp;{{$Product.Quantity}} </h2>   <h1> Available On Site : &nbsp;&nbsp;&nbsp;&nbsp;{{$Product.status}} </h1>   </div>
                <div class="col-12">   <h2> Item Added In Site : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Product.created_on}} </h2>    </div>
                <div class="col-12">    <h2> Item Updated In Site :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$Product.updated_on}} </h2>    </div>

            </div>
        </div>
        <div class="col-6 p-4"> 
            <img style="height:80%;width:80%;" src="{$g_base_url}\templates\assets/uploadImage/foodImgs/{$Product.images}">
        </div>
    </div>
</div>

</div>