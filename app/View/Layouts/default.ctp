<?php echo $this->Html->docType('xhtml-trans'); ?>
<html>
<head>
    <title><?php echo $title_for_layout; ?></title>
    <?php echo $this->Html->css('styles'); ?>
</head>
<body>
<div id="header">
    <h1>Our Blog</h1>
</div>
<div id="container">
    <?php echo $this->Session->flash(); ?>
    <?php echo $content_for_layout; ?>
</div>
</body>
</html>