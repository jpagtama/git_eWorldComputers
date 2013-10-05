<div id="loginarea">
        <form id="login-form" method="get" action="<?php echo base_url(); ?>main/login-validation">
            <ul>
                <li><input type="email" name="login-email" id="login-email" placeholder="Email" required="required" /></li>
                <li><input type="password" name="login-password" id="login-password" placeholder="Password" required="required" /></li>
                <li><input type="submit" name="submit" id="submit" value="Login" /></li>
            </ul>
        </form>

        <ul>
            <li><input type="button" id="create" value="Create An Account" action="<?php echo base_url(); ?>main/create-account" /></li>
        </ul>
</div>






<!--
<section class="customer-login">

<h3>Login or Create an Account</h3>

<form id="login-form" method="post" action="">
    <div class="content">
        <h4>New Customers</h4>
        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
    </div>
    <div class="content">
        <h4>Registered Customers</h4>
        <p>If you have an account with us, please log in.</p>
        <ul>
            <li>
                <label for="email" class="required">Email Address<em>*</em>
                    <input type="email" name="login" value="" id="email" class="" title="Email Address" />
                </label>
            </li>
            <li>
                <label for="pass" class="required">Password<em>*</em>
                    <input type="password" name="password" class="" id="" title="Password" />
                </label>
            </li>
        </ul>
        
        <p class="required">* Required Fields</p>
    </div>
    <div class="buttons-set">
        <button type="button" title="Create an Account" class="button" onclick="">Create an Account</button>
    </div>
        <div class="buttons-set">
            <a href="*" class="f-left">Forgot Your Password?</a>
            <button type="submit" class="button" title="Login" name="send" id="send2">Login</button>
        </div>
</form>
</section>
-->