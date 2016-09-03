<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="/">
        <meta charset="utf-8"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>



 <div id="wrapper">

                <!-- login -->

                <a href="#" data-toggle="modal" data-target="#login-modal">Login/Register</a>

                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                          <div class="modal-dialog">
                                <div class="loginmodal-container">
                                    <h1>Login to Your Account</h1><br>
                                  <form method="post" action="/client-login/">
                                    <input type="text" name="user" placeholder="Username">
                                    <input type="password" name="pass" placeholder="Password">
                                    <input type="submit" name="login" class="login loginmodal-submit" value="Login">
                                  </form>

                                  <div class="login-help">
                                    <a href="#">Register</a> - <a href="#">Forgot Password</a>
                                  </div>
                                </div>
                            </div>
                          </div>

              
        
        <!-- Sidebar -->
        <div class="col-sm-2 sidenav">
            <ul class="sidebar-nav">
            {section name=kk loop=$CATEGORIES}
                <li>
                    <a href="category/{$CATEGORIES[kk].url}">{$CATEGORIES[kk].name|stripslashes}</a>
                </li>
            {/section}
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <div class="col-sm-10 content">
            {if isset($smarty.get.cat)}         {include file='catproducts.tpl'}        {/if}
            {if isset($smarty.get.product)}     {include file='product.tpl'}            {/if}
            {if isset($smarty.get.adminlogin)}     {include file='adminlogin.tpl'}            {/if}
        </div>

    </div>
    {*<!-- /#wrapper -->*}



    </body>
</html>
