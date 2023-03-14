<style>
{literal}
    div.container{
        background-image: url('{$g_base_url}/templates/assets/myimages/contactBG.jpg');
        background-size: cover;
    }
    hr{
        background: white;
    }
    .contact-form{
        background: rgba(0,0,0, .6);
        color: white;
        margin-top: 100px;
        padding: 20px;
        box-shadow: 0px 0px 10px 3px grey;
    }
    .form-cotrol{
        width: 80%;
        padding: 0.4rem;
        opacity: 50%;
        margin-top: 5px;
        border-radius: 5px;
    }
{/literal}
</style>
<div class="container contact-form">
<h1>Contact Form</h1>
<hr>

<div class="row">

<div class="col-md-6">
<address>Gandhinagar, Bhopal</address>
<p>Email:- cafeteen@gmail.com</p>
<p>Phone:- 6264721665</p>
</div>

<div class="col-md-6">

<form>
<div class="row">
<div class="col-md-2"><label for="name">Name     </label></div>
<div class="col-md-10"><input type="text" id="name" class="form-cotrol"></div>

<div class="col-md-2"><label for="email">Email     </label></div>
<div class="col-md-10"><input type="text" name="" id="email" class="form-cotrol"></div>

<div class="col-md-2"><label>Message</label></div>
<div class="col-md-10"><textarea class="form-cotrol" cols="25" rows="5"></textarea></div>
</div>

<div class="form-group">
<button class="btn btn-primary btn-block">Send</button>
</div>
</form>
</div>

</div>

</div>