<link href="{$g_base_url}\templates/assets/css/user/profile.css" rel="stylesheet">
<div class="container">
    <div class="row ">
        <div class="col-md-4 profile-hide"> </div>
        <div class="col-md-4 profile-row">
            <div class="card user-card">
                <div class="card-header">
                    <h5>Customer Profile</h5>
                </div>
                <div class="card-block">
                    <div class="user-image">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-radius" alt="User-Profile-Image">
                    </div>
                    <h6 class="f-w-600 m-t-25 m-b-10"> {{$user.username}}</h6>
                    <p class="text-muted">{{$user.email}} | {{$user.usertype}} |  {{$user.created_on}}</p>
                    <hr>
                    <p class="text-muted m-t-15">Total Orders : {{$allactivecount}} </p>
                    <ul class="list-unstyled activity-leval">
                        <li class="active"></li>
                        <li class="active"></li>
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="bg-c-blue counter-block m-t-10 p-20">
                        <div class="row d-none">
                            <div class="col-4">
                                <i class="fa fa-comment"></i>
                                <p>1256</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-user"></i>
                                <p>8562</p>
                            </div>
                            <div class="col-4">
                                <i class="fa fa-suitcase"></i>
                                <p>189</p>
                            </div>
                        </div>
                    </div>
                    <p class="m-t-15 text-muted">You are an valuable Customer to us.</p>
                    <hr>
                    <div class="row justify-content-center user-social-link d-none" >
                        <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                        <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 profile-hide"> </div>
	</div>
</div>