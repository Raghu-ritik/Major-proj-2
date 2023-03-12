<?php
/* Smarty version 4.0.0, created on 2023-03-12 22:26:29
  from 'C:\xampp\htdocs\Major-proj-2\templates\admin\layouts\dashboardSidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e43857b9de9_90206192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c38fff9705b2fd0856dc3084a7431bc65cc8766' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\admin\\layouts\\dashboardSidebar.tpl',
      1 => 1678656262,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e43857b9de9_90206192 (Smarty_Internal_Template $_smarty_tpl) {
?> 


       <div class="left-sidebar">
           
       <div class="scroll-sidebar">
           
           <nav class="sidebar-nav">
               <ul id="sidebarnav">
                   <li class="nav-devider"></li>
                   <li class="nav-label">Home</li>
                   <li>
                    <a href="" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                   </li> 
                        <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Customer</span></a>
                       <ul aria-expanded="false" class="collapse">
                      
                           <li><a href="add_customer.php">Add Customer</a></li>
                      
                           <li><a href="customer.php">Manage Customer</a></li>
                       </ul>
                   </li>
                   
              
                   <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Food Category </span></a>
                       <ul aria-expanded="false" class="collapse">
                      
                           <li><a href="add-category.php">Add Category</a></li>
                      
                           <li><a href="categories.php">Manage Categories</a></li>
                       </ul>
               
                   <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cutlery"></i><span class="hide-menu">Food</span></a>
                       <ul aria-expanded="false" class="collapse">
                      
                           <li><a href="add-food.php">Add Food</a></li>
                      
                           <li><a href="food.php">Manage Food</a></li>
                       </ul>
                   </li>

                   <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Invoices</span></a>
                       <ul aria-expanded="false" class="collapse">
                      
                           <li><a href="add-invoice.php">Add Invoice</a></li>
                      
                           <li><a href="invoice.php">Manage Invoices</a></li>
                       </ul>
                   </li>
                    
               
                                                  
                    <li><a href="knowMore.php" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Know More</span></a></li>
                    <li><a href="logout.php" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">logout</span></a></li>

               </ul>    
           </nav>
           
       </div>
       
   </div>
   <?php }
}
