<h1><?php echo $node['Node']['title'];?></h1>

<p><?php echo $node['Node']['content'];?></p>

<p><?php echo $node['Node']['created_date'];?></p>
<p><?php echo $node['Node']['modify_date'];?></p>
</br>

<p><?php
	echo $this->Html->link('back',array('action'=>'index')).' | ';
	echo $this->Html->link('Edit',array('action'=>'edit',$node['Node']['id'])).' | ';
	echo $this->Html->link('Delete',array('action'=>'delete',$node['Node']['id']), NULL, 'Do you want to delete this Node?');
?>
</p>