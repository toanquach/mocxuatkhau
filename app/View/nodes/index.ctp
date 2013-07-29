<h2>View All Posts</h2>

<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Action</th>
    </tr>
    <?php foreach($nodes as $node): ?>
    <tr>
        <td><?php echo $this->Html->link($node['Node']['title'],array('action'=>'view',$node['Node']['id'])); ?></td>
        <td><?php echo $node['Node']['content']; ?></td>
        <td>
        	<?php echo $this->Html->link('Edit',array('action'=>'edit',$node['Node']['id']));?>
        	<?php echo $this->Html->link('Delete',array('action'=>'delete',$node['Node']['id']), NULL, 'Do you want to delete this Node?'); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<p>
	<?php
		echo $this->Html->link('Add a new node',array('action'=>'add'));
	?>
</p>
