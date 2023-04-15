            <div class="page-wrapper">
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
                                                  <h2 class="color-white"> 3 </h2>
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

                                                  <h2 class="color-white"> 9 </h2>
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
                                                  <h1 style="color:white;"> 2 </h1>
                                                  <p style="color:white;"> Months of service</p>
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
                                                  <h1 style="color:white;"> 999 </h1>
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
                          {if !empty($orderObj)}
                         
                              <div class="card">
                                  <div class="card-header">
                                      <strong class="card-title">All Orders</strong>
                                  </div>
                                  <div class="card-body">
                                      <table id="myTable" class="table table-bordered table-striped">
                                          <thead>
                                              <tr>
                                                  <th>Order ID</th>
                                                  <th>Product name</th>
                                                  <th>Order Quantity</th>
                                                  <th>Customer Name</th>
                                                  <th>payment Type</th>
                                                  <th>Payment Status</th>
                                                  <th>Action</th>

                                              </tr>
                                          </thead>
                                          <tbody>
                                          {foreach $orderObj as $odrObj}
                                            <tr>
                                                <td>{{$odrObj.O_ID}}</td>
                                                <td>{{$odrObj.P_Name}}</td>
                                                <td>{{$odrObj.Quantity}}</td>
                                                <td>{{$odrObj.customer}}</td>
                                                <td>{{$odrObj.payment_type}}</td>
                                                <td>{{$odrObj.current_status}}</td>
                                                <td><a href="#" class="btn btn-outline-primary"> Change Status </a></td>
                                            </tr>
                                        {/foreach}
                                            </tbody>
                                      </table>
                                  </div>
                              </div>
                          </div>
                          {/if}
                      </div>


                  </div>
              </div>
</div>