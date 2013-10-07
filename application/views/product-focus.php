<p class="pwd" ><a href="<?php echo base_url(); ?>">Home</a> / <a href="<?php echo base_url(); ?>main/product-path/<?php echo strtolower($_SESSION['base_category']); ?>/<?php echo strtolower($_SESSION['current_view']); ?>"><?php echo $_SESSION['current_view']; ?></a> / <strong><?php echo $product['name']; ?></strong></p>
<?php if(empty($product)): ?>
<article class="product twelve columns">
    <p><?php echo $_SESSION['current_view'] ?> is not available</p>    
</article>
<?php endif; ?>
<article class="product four columns">
    <p><img src ="<?php echo base_url(); ?>../assets/images/<?php echo $product['image'] ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a></p>
    <p><?php echo $product['name'] ?></p>
    <p><strong>$<?php echo $product['price'] ?></strong></p>
    <p><strong>$<?php echo $product['description'] ?></strong></p>
    <!--<p><?php /*echo $products['description']*/ ?></p>-->
</article>