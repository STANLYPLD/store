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
 {if isset($smarty.session.admin) && $smarty.session.admin == '555'}
    {include file='adminMenu.tpl'}
 {/if}

                <!-- login -->

   
    
        <div class="loginmodal-container">
            <h1>{if isset($ERR)}{$ERR}{else}Login to Your Account{/if}</h1>
            <form method="post" action="/client-login/">
                <input type="text" name="mail" placeholder="E-mail address">
                <input type="password" name="pass" placeholder="Password">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login">
            </form>
        <div class="register">
           
           <form metod='post' action="/register/">
           <input type="submit" name="register" class="register" value="Register">
            </form>
            
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
