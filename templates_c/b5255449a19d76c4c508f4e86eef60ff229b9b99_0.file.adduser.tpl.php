<?php
/* Smarty version 4.0.0, created on 2023-03-15 19:17:33
  from 'C:\xampp\htdocs\Major-proj-2\templates\admin\adduser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_64120bbde6f396_90363492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5255449a19d76c4c508f4e86eef60ff229b9b99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\admin\\adduser.tpl',
      1 => 1678904251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64120bbde6f396_90363492 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Add Manager</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Manager</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" id="submitProductForm"
                                action="" method="POST">

                                <input type="hidden" name="currnt_date" class="form-control">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"> Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" placeholder=" Name"
                                                name="FullName" autocomplete="off" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Mobile No</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" placeholder="" name="PhoneNums"
                                                autocomplete="off" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" placeholder=""
                                                name="Emails" autocomplete="off" required="" />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">password</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" id="" placeholder=""
                                             name="ConfPasswd" autocomplete="off" required="" />

                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="register_manager" id="createProductBtn"
                                    class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

</div><?php }
}
