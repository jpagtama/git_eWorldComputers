<div class="quick-access">
    <div class="login">
        <ul>
            <li>Welcome
                <?php if (!empty($_SESSION['userInfo'])): ?>
                <a href="<?php echo base_url(); ?>main/my-account"><?php echo $userInfo->fname . " " . $userInfo->lname ?></a>
                <?php else: ?>
                <a href="<?php echo base_url(); ?>main/my-account">My Account</a>
                <?php endif ?>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>main/wishlist">Wishlist</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>main/shopping-cart">Shopping Cart</a>
            </li>
        </ul>
    </div>