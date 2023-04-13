<div class="container">

    <h2> Edit Food Item </h2>

    <form method="POST" action="Products_manage_A.php?action=addprod" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Food Name</label>
            <input type="text" class="form-control" id="foodName" value="{$Product.P_Name}" name="Food_Name"
                placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Food Price</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value="{$Product.price}"
                name="Food_Price" placeholder="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Food Description</label>
            <textarea class="form-control" id="" rows="6" value="" name="Food_Desc">{{$Product.description}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Initial Stock:</label>
            <input type="number" class="form-control" id="" value="{$Product.Quantity}" name="Food_Stock" />
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Food Item Image : </label>
            <input type="file" name="foodImage" />
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Food Listing : </label>
            <input type="radio" name="status" value="ENABLE" id="show" /> <label for="show"> Show In List</label>
            <input type="radio" name="status" value="DISABLE" id="showDoNot" /> <label for="showDoNot"> Do not Show in
                List</label>
        </div>
        <div class="form-group">
            <input type="submit" name="foodEDITSubmit" value="EDIT Product" />
        </div>

    </form>

</div>