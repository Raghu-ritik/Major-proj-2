<?php
/* Smarty version 4.0.0, created on 2023-03-12 22:48:48
  from 'C:\xampp\htdocs\Major-proj-2\templates\user\layouts\dashboardSidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_640e48c0c3c273_72484561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a6aadefbcbd7a45d76c2a1583fd481dd78566e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Major-proj-2\\templates\\user\\layouts\\dashboardSidebar.tpl',
      1 => 1678657726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_640e48c0c3c273_72484561 (Smarty_Internal_Template $_smarty_tpl) {
?> 


       <div class="left-sidebar">
           
           <div class="scroll-sidebar">
               
               <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                       <li class="nav-devider"></li>
                       <li class="nav-label">Home</li>
                       <li>
                        <a href="" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                        
                       
                  
                    
                   
                       
 
                       <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Invoices</span></a>
                           <ul aria-expanded="false" class="collapse">
                          
                               <li><a href="add-invoice.php">Add Invoice</a></li>
                          
                               <li><a href="invoice.php">Manage Invoices</a></li>
                           </ul>
                       </li>
                        
                   
                                                                       <li><a href="contact.php" aria-expanded="false"><i class="fa fa-commenting-o"></i><span class="hide-menu">Contact us</span></a></li>
                        <li><a href="knowMore.php" aria-expanded="false"><i class="fa fa-info-circle"></i><span class="hide-menu">Know More</span></a></li>
                        <li><a href="logout.php" aria-expanded="false"><i class="fa fa-sign-out"></i><span class="hide-menu">logout</span></a></li>
                   </ul>    
               </nav>
               
           </div>
           
       </div>
       <?php }
}
