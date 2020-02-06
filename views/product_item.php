<div class="product_item">
    <a href="">
        <div class="product_tags">
            <div class="product_tag product_tag_red">SALE</div>
            <div class="product_tag product_tag_green">BESTSELLER</div>
            <div class="product_tag product_tag_blue">NEW</div>
        </div>
        
    <div class="product_image">
        <img src="Media/Products/<?php echo $images[0]['url'];?>" width="100%"/>
    </div>
    
    <div class="product_name">
        <?php echo $name;?>
    </div>
    
    <div class="product_brand">
        <?php echo $brand_name;?> 
    </div>
    
    <div class="product_price_from">
        <?php
            if($price_from != '0')
            {
                echo 'R$'.number_format($price_from, 2, ',','.');
            }
        ?>
    </div>
    
    <div class="product_price">
        <?php echo 'R$'.number_format($price,2,',','.')?>
    </div>
        
        <div style="clear:both;"></div>
    </a>
</div>
