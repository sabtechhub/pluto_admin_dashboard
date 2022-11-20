<?php require_once('include/header.php');?>
   <body class="inner_page login">
      <div class="full_container bg-secondary">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                     </div>
                  </div>
                  <div class="login_form">
                     <form>
                        <fieldset>
                           <div class="field">
                              <label class="label_field">User Email</label>
                              <input type="email" name="email" placeholder="E-mail" />
                           </div>
                           <div class="field">
                              <label class="label_field">Password</label>
                              <input type="password" name="password" placeholder="Password" />
                           </div>
                 
                           <div class="field margin_0">
                              <label class="label_field hidden">hidden label</label>
                              <button class="main_bt btn-block">Sing In</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
   <?php require_once('include/footer.php');?>