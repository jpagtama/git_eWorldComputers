    <div class="block block-subscribe four columns">
        <div class="block-title">
            <strong><span>Sign Up for our Newsletter</span></strong>
        </div>
        <form action="http://localhost/magento/index.php/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
            <div class="block-content">
                <div class="form-subscribe-header">
                    <label for="newsletter">Join us for the latest promotions we have to offer.  Get access to exclusive discounts!</label>
                </div>
                <div class="input-box two columns">
                    <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" />
                </div>
                <div class="actions">
                    <button type="submit" title="Subscribe" class="button"><span><span>Subscribe</span></span></button>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            //<![CDATA[
            var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
            //]]>
        </script>
    </div>