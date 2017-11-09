<div class="row-1">
    <?php $header_select = get_field("header_select","option");
    $header_select_text = get_field("header_select_text","option");
    if($header_select):?>
        <div class="col-1">
            <div class="select">
                <?php if($header_select_text):?>
                    <?php echo $header_select_text;?>
                <?php endif;?>
                <i class="fa fa-search"></i>
            </div><!--.select-->
            <div class="hidden">
                <?php foreach($header_select as $row):?>
                    <?php if($row['internal_external']&&($row['link_internal']||$row['link_external'])&&$row['text']):?>
                        <a href="<?php 
                            if(strcmp($row['internal_external'],'internal')===0):
                                echo $row['link_internal'];
                            else:
                                echo $row['link_external'];
                            endif;?>"><?php echo $row['text'];?></a>
                    <?php endif;?>
                <?php endforeach;?>
            </div><!--.hidden-->
        </div><!--.col-1-->
    <?php endif;?>
    <?php $telephone_number = get_field("telephone_number","option");
    $quote_text = get_field("quote_text","option");
    $quote_link = get_field("quote_link","option");
    $account_text = get_field("account_text","option");
    $account_link = get_field("account_link","option");
    if(($quote_link&&$quote_text)||$telephone_number||($account_link&&$account_text)):?>
        <div class="col-2">
            <?php if($telephone_number):?>
                <a class="telephone" href="<?php echo preg_replace("[^0-9]","",$telephone_number);?>"><?php echo $telephone_number;?></a>
            <?php endif;
            if($quote_link&&$quote_text):?>
                <a class="quote" href="<?php echo $quote_link;?>"><?php echo $quote_text;?></a>
            <?php endif;
            if($account_link&&$account_text):?>
                <a class="account" href="<?php echo $account_link;?>"><i class="fa fa-user"></i><?php echo $account_text;?></a>
            <?php endif;?>
        </div><!--.col-2-->
    <?php endif;?>
</div><!--.row-1-->