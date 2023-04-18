<div class="container py-3 px-3 ">
{if !empty($allusers)}
<table class="table table-hover">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Email</th>
    <th scope="col">UserName</th>
    <th scope="col">Phone Number</th>
    <th scope="col">Updated On</th>
    <th scope="col">Is Active</th>
    <th scope="col" colspan="2">Actions</th>
  </tr>
</thead>
<tbody>
  {foreach $allusers as $usrObj}
    <tr>
        
        <td>{{$usrObj.userid}}</td>
        <td>{{$usrObj.email}}</td>
        <td>{{$usrObj.username}}</td>
        <td>{{$usrObj.phone_no}}</td>
        <td>{{$usrObj.updated_on}}</td>
        <td> YES </td>
        <td><button type="button" class="btn btn-outline-secondary">EDIT</button></td>
        <td><button type="button" class="btn btn-outline-danger">DELETE</button></td>
    </tr>
  {/foreach}  
</tbody>
</table>
{else}
  <h1> No Customers Found !</h1>
{/if}


</div>