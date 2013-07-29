<?php

class Node extends AppModel
{
	public $name = 'Node';
	
	public $validate = array(
		'title'=>array(
			'title_must_be_not_blank'=>array(
				'rule'=>'notEmpty',
				'message'=>'Title is not empty'
			),
			'title_is_exist'=>array(
				'rule'=>'isUnique',
				'message'=>'Title is exist'
			)
		),
		'content'=>array(
			'content_must_be_not_blank'=>array(
				'rule'=>'notEmpty',
				'message'=>'Content is not empty'
			)
		)
	);
}
?>