<?php
class Usercontrol_IndexController extends Zend_Controller_Action {
	
	public function init(){
		$layout = $this->_helper->layout();
		
		$layout->setLayout('layout_odtools');
	}
	
	public function indexAction(){}
	
	public function viewAction(){
		Zend_Layout::getMvcInstance()->disableLayout();
    	$this->_helper->viewRenderer->setNoRender();
		$request   = $this->getRequest();
		$params   	=$request->getParams();
		$userdata = new Usercontrol_Model_UserMapper();
		
		$tableBuilder = $this->_helper->getHelper('Tablebuilder');

		echo $this->_helper->json($tableBuilder->buildJson($userdata->getUsers(),$params));
		

		
	}
}