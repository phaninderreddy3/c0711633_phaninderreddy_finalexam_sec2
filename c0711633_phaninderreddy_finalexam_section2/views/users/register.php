<?php require_once('views/navigation.php'); ?>
<section class="row col-md-6 col-md-offset-3">
   <h2>Create an Account</h2>
      <div class="panel panel-default">
        <div class="panel-heading">Register</div>
        <div class="panel-body">
          <div class="error bg-danger"> 
              <?php 
                echo isset($err_msg) ? $err_msg : ''; 
              ?> 
          </div>
          <form method="POST" action="" id="register">
            <div class="body bg-gray">
                <div class="form-group row">
                   <div class="col-sm-4">
                     <label for="username">Username:<span class="required"> * </span></label>
                   </div>
                   <div class="col-sm-8">
                     <input type="text" placeholder="Username" id="username" class="form-control" name="username" value="" required>
                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-4">
                     <label for="email">Email:<span class="required"> * </span></label>
                   </div>
                   <div class="col-sm-8">
                     <input type="email" placeholder="Email Address" id="email" class="form-control" name="email" value="" required>
                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-4">
                     <label for="telephone">Telephone:</label>
                   </div>
                   <div class="col-sm-8">
                     <input type="text" placeholder="Telephone" id="telephone" class="form-control" name="telephone" value="">
                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-4">
                     <label for="password">Password:<span class="required"> * </span></label>
                   </div>
                   <div class="col-sm-8">
                     <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                   </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-4">
                     <label for="passwordConfirm">Confirm Password:<span class="required"> * </span></label>
                   </div>
                   <div class="col-sm-8">
                     <input type="password" placeholder="Retype password" id="passwordConfirm" class="form-control" name="passwordConfirm" required>
                   </div>
                </div>
            </div>
            <div class="footer">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Create an Account</button>
            </div>
          </form>
        </div>
      </div>
   </section>