<div class="container">

<h2> Add Food Item </h2>


<form method="POST" action="Products_manage_A.php?action=addprod" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Food Name</label>
        <input type="text" class="form-control" id="foodName" name="Food_Name" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Food Price</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Food_Price" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Food Description</label>
        <textarea class="form-control" id="" rows="3" name="Food_Desc"></textarea>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Initial Stock:</label>
        <input type="number" class="form-control" id="" name="Food_Stock" />
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Food Item Image : </label>
        <input type="file" name="foodImage" />
    </div>

    <div class="form-group">
        <input type="submit" name="foodAddSubmit" value="Add Products" />
    </div>

</form>

</div>