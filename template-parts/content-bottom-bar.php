<?php $header_icons = get_field("header_icons","option");
$header_icons_background = get_field("header_icons_background","option");
if($header_icons):?>
    <div class="row-3" <?php if($header_icons_background): 
        echo 'style="background-image: url('.$header_icons_background['url'].');"';
    endif;?>>
        <?php foreach($header_icons as $row):
            if($row['link'] && $row['image']):?>
                <div class="icon">
                    <a href="<?php echo $row['link'];?>">
                        <img src="<?php echo $row['image']['sizes']['thumbnail'];?>" alt="<?php echo $row['image']['alt'];?>">
                        <?php if($row['text']):?>
                            <div class="text">
                                <?php echo $row['text'];?>
                            </div><!--.text-->
                        <?php endif;?>
                    </a>
                </div><!--.icon-->
            <?php endif;
        endforeach;?>
    </div><!--.row-3-->
<?php endif;?>