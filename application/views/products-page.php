<p><a href="<?php echo base_url(); ?>">Home</a> / <?php echo $_SESSION['current_view']; ?></p>

<?php if(empty($product)): ?>
<article class="product twelve columns">
    <p>There are no <?php echo $_SESSION['current_view'] ?> available</p>    
</article>
<?php endif; ?>
<?php foreach ($product as $products): ?>
<article class="product four columns">
    <p><a href="<?php echo base_url(); ?>main/<?php echo $products['name']; ?>"><img src ="<?php echo base_url(); ?>../assets/images/<?php echo $products['image'] ?>" alt="<?php echo $products['name']; ?>" title="<?php echo $products['name']; ?>" /></a></p>
    <p><a href="<?php echo base_url(); ?>main/<?php echo $products['name']; ?>"><?php echo $products['name'] ?></a></p>
    <p><strong>$<?php echo $products['price'] ?></strong></p>
    <!--<p><?php /*echo $products['description']*/ ?></p>-->
</article>
<?php endforeach; ?>