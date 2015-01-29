<?php global $qode_options_subway; ?>

</div>
</div>
<footer>
    <?php
        $display_footer_top = true;
        if (isset($qode_options_subway['show_footer_top'])) {
            if ($qode_options_subway['show_footer_top'] == "no") $display_footer_top = false;
        }
        if($display_footer_top) { ?>
        <div class="footer_top_holder">
            <div class="footer_top">
                <div class="container">
                    <div class="container_inner">
                        <div class="four_columns clearfix">
                            <div class="column1">
                                <div class="column_inner">
                                    <?php dynamic_sidebar( 'footer_column_1' ); ?>
                                </div>
                            </div>
                            <div class="column2">
                                <div class="column_inner">
                                    <?php dynamic_sidebar( 'footer_column_2' ); ?>
                                </div>
                            </div>
                            <div class="column3">
                                <div class="column_inner">
                                    <?php dynamic_sidebar( 'footer_column_3' ); ?>
                                </div>
                            </div>
                            <div class="column4">
                                <div class="column_inner">
                                    <?php dynamic_sidebar( 'footer_column_4' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    <?php
        $display_footer_text = false;
        if (isset($qode_options_subway['footer_text'])) {
            if ($qode_options_subway['footer_text'] == "yes") $display_footer_text = true;
        }
        if($display_footer_text): ?>
        <div class="footer_bottom_holder">
            <div class="footer_bottom">
                <?php dynamic_sidebar( 'footer_text' ); ?>
            </div>
        </div>
        <?php endif; ?>
</footer>
<div style="display:none">
    <div id="modalform" class="modal_form">
        <a href="javascript:;" onclick="$j.fancybox.close();remAlert();" class="close">Закрыть</a>
        <p>Оставьте заявку и мы вам перезвоним</p>
        <form name="MyForm" action="#" method="post">
            <input type="hidden" name="title" value="<?php if($seo_title) { ?><?php bloginfo('name'); ?> | <?php echo $seo_title; ?><?php } else {?><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?><?php } ?>">    
            <input type="hidden" name="c_url" value="http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] ?>">
            <input class="input" name="name" type="text" style="width:35%" placeholder="Ваше имя" />
            <input class="input" name="phone" type="text" style="width:35%" placeholder="Номер телефона" />
            <input value="Отправить" type="submit" />
        </form>
    </div>
</div>

</div>
</div>
<?php
    global $qode_toolbar;
    if(isset($qode_toolbar)) include("toolbar.php")
?>
<?php wp_footer(); ?>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/subway/fancybox/jquery.fancybox.css?v=2.1.4" media="screen" />
<script type="text/javascript" src="/wp-content/themes/subway/fancybox/jquery.fancybox.js?v=2.1.4"></script>
<script type="text/javascript">

    $j(document).ready(function() {
        $j("[href='#modalform']").fancybox({
            'modal' : true,
            'padding' : 0,
            closeBtn   : true,
            'openEffect' : 'elastic',
            'closeEffect' : 'elastic'
        });
        $j('#modalform form').submit(function(){
            $j.ajax({
                type: "POST", //Тип запроса
                dataType: "html", //Тип данных
                data: $j('#modalform form').serialize(),
                url: "/wp-content/themes/subway/mail.php",
                success: function (msg) {
                    $j('<div class="alert">'+msg+'</div>').appendTo("#modalform");
                    $j('#modalform form :input').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
                }
            })
            return false;
        }) 
    })

    function remAlert(){
        $j('.alert').remove();
    }                                        

</script>

</body>
</html>