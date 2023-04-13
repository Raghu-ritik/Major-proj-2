<div class="container">


    <a href="Products_manage_A.php?action=AddProduct">
        <button type="button" class="btn btn-primary btn-lg btn-block">Add A Product</button>
     </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">food name</th>
                <th scope="col">price</th>
                <th scope="col">Status On Site</th>
                <th scope="col">images</th>
                <th scope="col" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>

            {foreach $AllProducts as $product}
                <tr>
                    <td scope="row">{$product.P_ID}</td>
                    <td>{$product.P_Name}</td>
                    <td>{$product.price}</td>
                    <td>{$product.status}</td>
                    <td><img style="height:100px;width:100px;"
                            src="{$g_base_url}\templates\assets/uploadImage/foodImgs/{$product.images}"></td>
                    <td> <a href="./Products_manage_A.php?action=editProduct&data={$product.P_ID}"> 
                    <button type="button" class="btn btn-outline-secondary">EDIT</button>
                     </a></td>
                    <td> <a href="./Products_manage_A.php?action=viewProduct&data={$product.P_ID}"> 
                    <button type="button" class="btn btn-outline-info">VIEW</button>
                     </a></td>
                    <td> <a href="./Products_manage_A.php?action=deleteProduct&data={$product.P_ID}">
                    <button type="button" class="btn btn-outline-danger">DELETE</button></a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>


</div>