<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title_for_layout; ?> | <?php echo Configure::read('Site.title'); ?></title>
    <?php
        echo $this->Layout->meta();
        echo $this->Layout->feed();
		echo $this->Html->script(array('jquery/jquery.min'));
        echo $this->Layout->js();
        echo $this->Html->css(array('reset', 'default'));
        echo $scripts_for_layout;
    ?>
</head>
<body>
	<div id="bg_star">
		
	</div>
	<div id="container">
		<h1 id="logo" class="left"><?php echo $this->Html->link(Configure::read('Site.title'), '/'); ?></h1>
		<div id="tagline" class="left"><?=Configure::read('Site.tagline')?></div>
		<div class="breaker"></div>
		<div id="search">
			<form id="search_form" method="post" action="javascript: document.location.href=''+Croogo.basePath+'search/q:'+encodeURI($('#search_form #search_field').val());">
				<?php
				$qValue = null;
				if (isset($this->params['named']['q'])) {
					$qValue = $this->params['named']['q'];
				}
				echo $this->Form->input('q', array(
					'label' => false,
					'name' => 'q',
					'value' => $qValue,
					'id' => 'search_field'
					));
				?>
	        </form>
		</div>
		<div id="main">
			<div id="nav">
				<?php echo $this->Layout->menu('main', array('dropdown' => true)); ?>
			</div>
			<div id="content">
				<?php
				$this->Layout->sessionFlash();
				echo $content_for_layout;
				?>
			</div>
			<div id="sidebar">
				<?php echo $this->Layout->blocks('right'); ?>
			</div>
			<div class="breaker"></div>
		</div>
		<div id="footer">
			<div class="left">Copyright &copy; <?=date('Y')?> <?=Configure::read('Site.title')?>, All Rights Reserved.</div>
			<div class="right">Powered by <a href="http://croogo.org/">Croogo</a>, Built with <a href="http://cakephp.org/">CakePHP</a>, Theme by <a href="http://andrw.net/">andrw.net</a>.</div>
			<div class="breaker"></div>
		</div>
	</div>
	<script type="text/javascript" charset="utf-8">
		// Hide default search form
		$('#searchform').parent().parent().hide();
		$('.block-about div.block-body').css({'padding': '10px', 'border': '1px solid #ABE3E4', 'border-top': 'none'});
	</script>
</body>
</html>