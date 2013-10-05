<nav class="main-nav">
    <ul>
            <li><a href="<?php echo base_url(); ?>main/about-us">About Us</a></li>
            <li><a href="<?php echo base_url(); ?>main/how-can-we-help">How Can We Help?</a></li>
            <li><a href="<?php echo base_url(); ?>main/our-location">Our Location</a></li>
            <li><a href="<?php echo base_url(); ?>main/contact-us">Contact Us</a></li>
            <li>        
                <form id="search_mini_form" action="http://localhost/magento/index.php/catalogsearch/result/" method="get">
                    
                <input id="search" type="search" name="q" value="" class="input-text" maxlength="128" placeholder="Search entire store here..."/>
                <button type="submit" title="Search" class="button"><span><span>Search</span></span></button>
                <div id="search_autocomplete" class="search-autocomplete"></div>
                    <script type="text/javascript">
                        //<![CDATA[
                        var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store...');
                        searchForm.initAutocomplete('http://localhost/magento/index.php/catalogsearch/ajax/suggest/', 'search_autocomplete');
                        //]]>
                    </script>
                
        </form>
</li>
    </ul>
</nav>
