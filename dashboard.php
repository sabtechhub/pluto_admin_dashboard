<?php

require_once('include/header.php');

require_once('include/sidebar.php');
?>    

            <!-- right content -->
            <div id="content">
               <!-- topbar -->
    <?php require_once('include/topbar.php');?>
               <!-- end topbar -->



               <?php
            
               if(isset($_GET['page'])){



                  $page = $_GET['page'];

                  switch ($page) {

                     case 'setup_cards':
                        include('pages/setupCardsView.php');
                        break;


                     case 'upload_cards':
                        include('pages/uploadCardsView.php');
                           break;


                     case 'manage_cards':
                        include('pages/manageCardsView.php');
                        break;
                    
                        
                     case 'view_cards':
                        include('pages/viewCardsView.php');
                        break;
                       
                     
                     case 'view_transactions':
                        include('pages/transactionView.php');
                        break;

                     case 'resend_cards':
                        include('pages/resendCardsView.php');
                        break;
   
                        case 'profile':
                           include('pages/profileView.php');
                           break;

                     default:
                     include('pages/admincontent.php');
                        break;

                        
                  }


               }else{

                  include('pages/admincontent.php');

               }
            
               
               ?>


           
            </div>

      <?php
require_once('include/footer.php');

?>