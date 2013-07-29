<p>
	<?php 
		echo $this->Form->create('node',array('action'=>'edit'));
		echo $this->Form->input('title',array('value'=>$nodeValue['Node']['title']));
		echo $this->Form->input('content',array('value'=>$nodeValue['Node']['content']));
		echo $this->Form->input('id', array('type'=>'hidden','value'=>$nodeValue['Node']['id']));
		echo $this->Form->end('Update node');
	?>
</p>