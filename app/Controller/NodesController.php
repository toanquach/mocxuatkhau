<?php

class NodesController extends AppController
{

	public $name = 'Nodes';
	
	public $layout = 'default';
	//
	//		default method
	//	
	public function index()
	{
		$nodesArr = $this->Node->find('all');
		$this->set('nodes',$nodesArr);
	}
	
	//
	//		view method
	//
	public function view($id = null)
	{
		$conditions = array("Node.id" => $id);
		// Example usage with a model:
		$nodeItem = $this->Node->find('first', array('conditions' => $conditions));	
		$this->set('node',$nodeItem);
		
		//debug($id);
	}
	
	//
	//		create new node
	//
	public function add()
	{
		if($this->request->is('post'))
		{
			//echo "aa";
			//echo $this->request->data['node']['title'];
			
			if($this->Node->save($this->request->data['node'])) 
			{
                $this->Session->setFlash('The post was successfully added!');
                $this->redirect(array('action'=>'index'));
            } 
            else 
            {
                $this->Session->setFlash('The post was not saved, please try again');
            }
			//debug($this->Node->validationErrors);
		}
		else
		{
			// Nothing here
		}
	}
	
	//
	//		edit a node with $id
	//
	public function edit($id = NULL)
	{
		$this->set('id',$id);
		if(empty($this->request->data))
		{
			$nodeItem = $this->Node->read(NULL,$id);
			$this->set('nodeValue',$nodeItem);
		}
		else
		{
			if($this->Node->save($this->request->data['node'])) 
			{
                $this->Session->setFlash('The post has been updated');
                $this->redirect(array('action'=>'view', $this->request->data['node']['id']));
            }
		}
		
		//debug($id);
	}
	
	//
	//			delete a node with $id
	//
	public function delete($id = NULL)
	{
		$this->Node->delete($id);
		$this->Session->setFlash('This node was deleted.');
		$this->redirect(array('action'=>'index'));
	}
}

?>