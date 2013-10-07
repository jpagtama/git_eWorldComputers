<p class="pwd" ><a href="<?php echo base_url(); ?>">Home</a> / <strong><?php echo $_SESSION['current_view']; ?></strong></p>

<?php if(empty($product)): ?>
<article class="product twelve columns">
    <p>There are no <?php echo $_SESSION['current_view'] ?> available</p>    
</article>
<?php endif; ?>
<?php foreach ($product as $products): ?>
<article class="product four columns">
    <p><a href="<?php echo base_url(); ?>main/product-focus/<?php echo $products['id']; ?>"><img src ="<?php echo base_url(); ?>../assets/images/<?php echo $products['image'] ?>" alt="<?php echo $products['name']; ?>" title="<?php echo $products['name']; ?>" /></a></p>
    <p><a href="<?php echo base_url(); ?>main/product-focus/<?php echo $products['id']; ?>"><?php echo $products['name'] ?></a></p>
    <p><strong>$<?php echo $products['price'] ?></strong></p>
    <!--<p><?php /*echo $products['description']*/ ?></p>-->
</article>
<?php endforeach; ?>