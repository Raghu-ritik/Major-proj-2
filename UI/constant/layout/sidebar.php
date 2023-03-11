 <?php  
  

 ?>

 
        <div class="left-sidebar">
            
            <div class="scroll-sidebar">
                
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li> 
                 
                                               <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                             <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customer</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add_customer.php">Add Customer</a></li>
                           
                                <li><a href="customer.php">Manage Customer</a></li>
                            </ul>
                        </li>
                        
                    <?php }?>
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Food Category </span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-category.php">Add Category</a></li>
                           
                                <li><a href="categories.php">Manage Categories</a></li>
                            </ul>
                        </li>
                    <?php }?>
                    <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cutlery"></i><span class="hide-menu">Food</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-food.php">Add Food</a></li>
                           
                                <li><a href="food.php">Manage Food</a></li>
                            </ul>
                        </li>
                    <?php }?>
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Invoices</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                                <li><a href="add-invoice.php">Add Invoice</a></li>
                           
                                <li><a href="invoice.php">Manage Invoices</a></li>
                            </ul>
                        </li>
                         
                        <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Reports</span></a></li>
                        
<?php }?>
<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cog"></i><span class="hide-menu">Setting</span></a>
                            <ul aria-expanded="false" class="collapse">
                               
                               <li><a href="manage_website.php">Web Management</a></li>
                           
                              <li><a href="email_config.php">Email Management</a></li>
                               
                            </ul>
                        </li> 
                  <?php }?>

                  <?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="about.php" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Know More</span></a></li>
                        
<?php }?>

<?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
                         <li><a href="https://www.youtube.com/c/MayuriK/videos" aria-expanded="false"><i class="fa fa-download"></i><span class="hide-menu">Other Projects</span></a></li>
                        
<?php }?>



                  


    
                    </ul>   
                </nav>
                
            </div>
            
        </div>
        