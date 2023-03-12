<?php
/* Smarty version 4.0.0, created on 2023-03-12 21:51:42
  from 'C:\xampp\htdocs\Major-proj-2\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e3b5e9df235_47602187',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc61e6d8c09a9d61ec5b3b9e277a6c551a77dc4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\admin\\dashboard.tpl',
      1 => 1678634718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e3b5e9df235_47602187 (Smarty_Internal_Template $_smarty_tpl) {
?>            <div class="page-wrapper">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-7">
                              <div class="row">
                                  <div class="col-md-6 dashboard">
                                      <div class="card " style="background: #2BC155 ">
                                          <div class="media widget-ten">
                                              <div class="media-left meida media-middle">
                                                  <span><i class="ti-user f-s-40"></i></span>
                                              </div>
                                              <div class="media-body media-text-right">
                                                  <h2 class="color-white"> </h2>
                                                  <a href="food.php">
                                                      <p class="m-b-0">Total Customers</p>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>


                                  <div class="col-md-6 dashboard">
                                      <div class="card" style="background-color: #F94687 ">
                                          <div class="media widget-ten">
                                              <div class="media-left meida media-middle">
                                                  <span><i class="ti-files f-s-40"></i></span>
                                              </div>
                                              <div class="media-body media-text-right">

                                                  <h2 class="color-white"> </h2>
                                                  <a href="invoice.php">
                                                      <p class="m-b-0">Total Invoice</p>
                                                  </a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-md-6 dashboard">
                                      <div class="card" style="background-color:#ffc107;">
                                          <div class="media widget-ten">
                                              <div class="media-left meida media-middle">
                                                  <span><i class="ti-calendar  f-s-40"></i></span>
                                              </div>
                                              <div class="media-body media-text-right">

                                                  <h1 style="color:white;"> </h1>



                                                  <p style="color:white;"> </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6 dashboard">
                                      <div class="card" style="background-color:#009688;">
                                          <div class="media widget-ten">
                                              <div class="media-left meida media-middle">
                                                  <span><i class="fa fa-money f-s-40"></i></span>
                                              </div>
                                              <div class="media-body media-text-right">


                                                  <h1 style="color:white;"> </h1>



                                                  <p style="color:white;">Total Revenue</p>
                                              </div>
                                          </div>
                                      </div>

                                  </div>
                              </div>
                          </div>
                          <div class="col-md-5">
                              <!-- <div id="piechart" style="width:100%; max-width:600px; height:400px;">
                    </div> -->
                              <div id="donutchart" style="width:100%; max-width:600px; height:400px;"></div>

                          </div>
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">Invoices</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="myTable" class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>Invoice Date</th>
                                                  <th>Customer Name</th>
                                                  <th>Contact</th>
                                                  <th>Total Invoice Item</th>
                                                  <th>Payment Status</th>

                                              </tr>
                                          </thead>
                                          <tbody>

                                              <tr>
                                                  <td>
                                                      abc
                                                  </td>
                                                  <td>
                                                      ABC1
                                                  </td>
                                                  <td>
                                                      ABC2
                                                  </td>
                                                  <td>
                                                      ABC3
                                                  </td>
                                                  <td>
                                                      ABC4
                                                  </td>
                                                  <td>

                                                      <label class='label label-success'>
                                                          <h4>Full Payment</h4>
                                                      </label>



                                                      <label class='label label-danger'>
                                                          <h4>Advance Payment</h4>
                                                      </label>


                                                      <label class='label label-warning'>
                                                          <h4>No Payment</h4>
                                                      </label>

                                                  </td>
                                              </tr>

                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>

                      </div>


                  </div>
              </div>
</div><?php }
}
