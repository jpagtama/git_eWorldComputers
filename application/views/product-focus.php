<p><a href="<?php echo base_url(); ?>">Home</a> / <?php echo $_SESSION['current_view']; ?></p>

<?php if(empty($product)): ?>
<article class="product twelve columns">
    <p><?php echo $_SESSION['current_view'] ?>is not available</p>    
</article>
<?php endif; ?>
<?php foreach ($product as $product): ?>
<article class="product four columns">
    <p><img src ="<?php echo base_url(); ?>../assets/images/<?php echo $product['image'] ?>" alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" /></a></p>
    <p><?php echo $product['name'] ?></p>
    <p><strong>$<?php echo $product['price'] ?></strong></p>
    <p><strong>$<?php echo $product['description'] ?></strong></p>
    <!--<p><?php /*echo $products['description']*/ ?></p>-->
</article>
<?php endforeach; ?>