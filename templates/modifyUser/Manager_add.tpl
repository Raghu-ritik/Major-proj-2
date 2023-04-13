<div class="container py-3 px-3 ">

<h2> Add Canteen Manager </h2>


<form method="POST" action="User_manage_A.php?action=addManager" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1"> Name</label>
        <input type="text" class="form-control" id="foodName" name="User_Name" placeholder="User Name">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Phone Number</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="Phone_Number" placeholder="Phone number">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="UserEmail" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Password</label>
        <input type="text" class="form-control" id="" name="UserPassword" />
    </div>
    <div class="form-group">
        <input type="submit"  class="btn btn-lg btn-primary" name="foodAddSubmit" value="Add Products" />
    </div>

</form>

</div>