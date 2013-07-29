<p>
	<?php 
		echo $this->Form->create('node',array('action'=>'add'));
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->end('Tạo node mới');
	?>
</p>