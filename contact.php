<?php
    session_start();
    include("cafe_load.php");
    draw_header("UserDashboard");
    
 

if (!isset($_REQUEST['last_message'])) {
    $_REQUEST['last_message'] = '';
}


if (isset($_SESSION['uid'])) {
    // redirect to main page
    if (isset($_REQUEST['redirection'])) {
        redirect_visitor($_REQUEST['redirection']);
    } else {
        redirect_visitor('out.php');
    }
}
    
if (isset($_POST['name'])) {
    $Cont= new ContactUsPOJO();
    $Cont->setName($_POST['name']);
    $Cont->setEmail($_POST['email']);
    $Cont->setSubject($_POST['subject']);
    $Cont->setMessage($_POST['message']);
    $ContactDao = ContactDAO::addContactMSG($Cont);
    $ContactDao = true;
    
    if($ContactDao){
        $last_message = "Contact Message is saved !";
        Display_last_msg($last_message,"success");
        display_smarty_template("contact.tpl","user");

      // redirect to main page
      if (isset($_REQUEST['redirection'])) {
          redirect_visitor($_REQUEST['redirection']);
      } else {
          redirect_visitor('dashboard_A.php');
      }
    } else {
      echo "There is some error !!";
      // header('Location: error.php?ec=0');
    }

     
}
 
display_smarty_template("contact.tpl","user");
?>
