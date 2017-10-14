

<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="row">  
            <div class="col-md-4">
                <a href='/mvc_login_reg_app'>Home</a>
            </div>               
            <?php 
            if(isset($_SESSION['user_session'])){ ?>
                <div class="col-md-1 col-md-offset-7">
                    <a href='?controller=users&action=logout'>Logout</a>
                </div>
            <?php }else{ ?>
                <div class="col-md-1 col-md-offset-6">
                <a href='?controller=users&action=login'>Login</a>
                </div>
                <div class="col-md-1">
                    <a href='?controller=users&action=register'>Register</a>
                </div>
            <?php } ?>  
        </div>
    </div>
</nav>