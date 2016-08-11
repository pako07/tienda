<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:27:58
         compiled from "C:\wamp\www\Mitienda\modules\leobootstrapmenu\views\templates\hook\megamenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2073657ab560e8e3ae9-60486214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c760ea50609ed4199712a0549fdc2aeb8059d255' => 
    array (
      0 => 'C:\\wamp\\www\\Mitienda\\modules\\leobootstrapmenu\\views\\templates\\hook\\megamenu.tpl',
      1 => 1470845902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2073657ab560e8e3ae9-60486214',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'boostrapmenu' => 0,
    'current_link' => 0,
    'show_cavas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab560e931d07_60398835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab560e931d07_60398835')) {function content_57ab560e931d07_60398835($_smarty_tpl) {?>

<nav id="cavas_menu" class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only"><?php echo smartyTranslate(array('s'=>'Toggle navigation','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="leo-top-menu" class="collapse navbar-collapse navbar-ex1-collapse">
            <?php echo $_smarty_tpl->tpl_vars['boostrapmenu']->value;?>

        </div>
</nav>
<script type="text/javascript">
// <![CDATA[
    var current_link = "<?php echo $_smarty_tpl->tpl_vars['current_link']->value;?>
";
    //alert(request);
    var currentURL = window.location;
    currentURL = String(currentURL);
    currentURL = currentURL.replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
    current_link = current_link.replace("https://","").replace("http://","").replace("www.","");
    isHomeMenu = 0;
    if($("body").attr("id")=="index") isHomeMenu = 1;
    $(".megamenu > li > a").each(function() {
        menuURL = $(this).attr("href").replace("https://","").replace("http://","").replace("www.","").replace( /#\w*/, "" );
        if( (currentURL == menuURL) || (currentURL.replace(current_link,"") == menuURL) || isHomeMenu){
            $(this).parent().addClass("active");
            return false;
        }
    });
// ]]>
</script>
<?php if ($_smarty_tpl->tpl_vars['show_cavas']->value&&$_smarty_tpl->tpl_vars['show_cavas']->value==1) {?>
<script type="text/javascript">
    (function($) {
        $.fn.OffCavasmenu = function(opts) {
            // default configuration
            var config = $.extend({}, {
                opt1: null,
                text_warning_select: "<?php echo smartyTranslate(array('s'=>'Please select One to remove?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
                text_confirm_remove: "<?php echo smartyTranslate(array('s'=>'Are you sure to remove footer row?','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
",
                JSON: null
            }, opts);
            // main function
            // initialize every element
            this.each(function() {
                var $btn = $('#cavas_menu .navbar-toggle');
                var $nav = null;
                if (!$btn.length)
                    return;
                var $nav = $('<section id="off-canvas-nav"><nav class="offcanvas-mainnav" ><div id="off-canvas-button"><span class="off-canvas-nav"></span><?php echo smartyTranslate(array('s'=>'Close','mod'=>'leobootstrapmenu'),$_smarty_tpl);?>
</div></nav></section>');
                var $menucontent = $($btn.data('target')).find('.megamenu').clone();
                $("body").append($nav);
                $("#off-canvas-nav .offcanvas-mainnav").append($menucontent);
                $("html").addClass ("off-canvas");
                $("#off-canvas-button").click( function(){
                        $btn.click();   
                } );
                $btn.toggle(function() {
                    $("body").removeClass("off-canvas-inactive").addClass("off-canvas-active");
                }, function() {
                    $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");
                });
            });
            return this;
        }
    })(jQuery);
    $(document).ready(function() {
        jQuery("#cavas_menu").OffCavasmenu();
        $('#cavas_menu .navbar-toggle').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 0);
            return false;
        });
        
        $(window).resize(function() {
            if( $(window).width() > 767 ){
                $("body").removeClass("off-canvas-active").addClass("off-canvas-inactive");
            }
        });
    });
    $(document.body).on('click', '[data-toggle="dropdown"]' ,function(){
        if(!$(this).parent().hasClass('open') && this.href && this.href != '#'){
            window.location.href = this.href;
        }
    });
</script>
<?php } else { ?>
<script type="text/javascript">
        $(document).ready(function() {
            $('#leo-top-menu .dropdown-toggle').removeAttr("disabled");
            $(".dropdown-toggle").click(function() {
                if($(window).width() <= 767){
                    if($(this).parent("li").find("div:first").hasClass("level2"))
                        return false;
                    else
                        return true;
                }
            });
        });
</script>
<?php }?>

<script>
function set_target_blank( show )
{
	if (show)
	{
		$("#leo-top-menu li a").each(function(){
		   if( $(this).hasClass('has-category') && (this).hasAttribute('data-toggle') && $(this).attr('target')== '_blank' ){
				var value = $(this).attr('data-toggle');
				$(this).removeAttr('data-toggle');
				$(this).attr('remove-data-toggle', value);
		   }
		})
	}else 
	{
		$("#leo-top-menu li a").each(function(){	
		   if( $(this).hasClass('has-category') && (this).hasAttribute('remove-data-toggle') && $(this).attr('target')== '_blank' ){
				var value = $(this).attr('remove-data-toggle');
				$(this).removeAttr('remove-data-toggle');
				$(this).attr('data-toggle', value);
		   }
		})
	}

}

$(document).ready(function() {
	if($(window).width() <= 767){
		set_target_blank(false);	// set cavas NO
	}else{
		set_target_blank(true);		// set cavas Yes
	}
});
$(window).resize(function() {
	if( $(window).width() <= 767 ){
		set_target_blank(false);	// set cavas NO
	}
	else {
		set_target_blank(true);		// set cavas Yes
	}
});
</script><?php }} ?>
