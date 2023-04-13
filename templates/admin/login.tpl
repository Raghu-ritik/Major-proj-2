
{literal}
<style>
    .registration-form{
      /* background: #f7f7f7; */
      padding: 20px;
     
      margin: 100px 0px;
      background: inherit;
      backdrop-filter: blur(10px);
    }
  .Admin-Back{
       
      background-color: #ffffff;
      background-size:cover;
      min-height:100vh
  }
</style>
{/literal}
<div class="container-fluid Admin-Back" style="background-image: url('{$g_base_url}/templates/assets/myimages/back.jpg');">
 <div class="row">
   <div class="col-sm-4">
   </div>
   <div class="col-sm-4">
    
    <!--====registration form====-->
    <div class="registration-form">
      <h4 class="text-center">Admin Panel</h4>
      <p class="text-success text-center"></p>

      <form action="" method="post">
       
        
        <!--// Email//-->
        <div class="form-group">
            <label>Email:</label>
            <input type="text" class="form-control"  placeholder="Enter Email" name="MAuser" value="">
            <p class="err-msg">
                
            </p>
        </div>
        
        <!--//Password//-->
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control"  placeholder="Enter Password" name="MApass">
            <p class="err-msg">
                 
            </p>
        </div>

        
        <button type="submit" class="btn btn-secondary" name="login">Login</button>
      </form>
    </div>
   </div>
   <div class="col-sm-4">
   </div>
 </div>
  
</div>

 