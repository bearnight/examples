<?php
class Usercontrol_DataController extends Zend_Controller_Data { 
	protected $_employeeSession;
	public function init(){

		$session =  new Zend_Session_Namespace( Zend_Auth::getInstance()->getStorage()->getNamespace() );
		$this->_employeeSession = $session->_accountDetails;
	}
	
	public function indexAction()
	{
		
	}
	
	public function getusersAction(){

		$request   = $this->getRequest();
		$params   	=$request->getParams();
		$userdata = new Usercontrol_Model_UserMapper();
		
		$tableBuilder = $this->_helper->getHelper('Tablebuilder');

		echo $this->_helper->json($tableBuilder->buildJson($userdata->getUsers(),$params));

	}
	public function getrolesAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$parms= new Usercontrol_Model_Usercontrolsettergetter();
		$mapper= new Usercontrol_Model_UserMapper();
		
		$parms->setRoleid($this->getRequest()->getParam('role_id'));
// 			 ->setRoleName($this->getRequest()->getParam('role_name'));
		
// 		$mapper->getRoles($params);
// 		var_dump($save);
		echo json_encode($mapper->getRoles());
		
	}
	public function getuserlistAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$parms= new Usercontrol_Model_userlistgettersetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
// 		var_dump($mapper->getuserlist());
		echo json_encode($mapper->getuserlist());
	}
	public function getresAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$parms= new Usercontrol_Model_resourcessettergetter();
		
		$mapper = new Usercontrol_Model_UserMapper();
		
		
		echo  json_encode($mapper->getresoures());
	}
	public function addresAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$parms= new Usercontrol_Model_resourcessettergetter();
// 		var_dump($this->getRequest()->getParam('controllers'));
		$mapper = new Usercontrol_Model_UserMapper();
		$parms->setResourceid($this->getRequest()->getParam('resource_id'))
			  ->setResourceName($this->getRequest()->getParam('name'))
			  ->setController($this->getRequest()->getParam('controllers'))
			  ->setUrl($this->getRequest()->getParam('url'));
		$result =$mapper->addresources($parms);
		
		if ($result == null)
		{
			echo json_encode(array('success'=>true,'message'=>'Created new whiteboard'));
		}
//   		echo  json_encode($mapper->addresources($parms));
	}
	public function addedituserAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$parms= new Usercontrol_Model_userlistgettersetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$parms->setEmployee($this->getRequest()->getParam('employee_id'))
		      ->setFirstName($this->getRequest()->getParam('first_name'))
		      ->setLastName($this->getRequest()->getParam('last_name'))
		      ->setRole($this->getRequest()->getParam('base_role'))
		      ->setContactid($this->getRequest()->getParam('contactid'))
			  ->setLocation_id($this->getRequest()->getParam('location_id'));
// 		var_dump($parms);
		
		$result = $mapper->mergeusers($parms);
// 		var_dump(count($result));
		if (count($result) ==1)
		{
		echo json_encode(array('success'=>true));
		}
		else
		{
			var_dump('failed');
		}
	}
	public function getactionAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$parms= new Usercontrol_Model_actionsettergetter();
		$mapper= new Usercontrol_Model_UserMapper();
		
		
		echo json_encode($mapper->getaction());
	}
	public function addactionAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$parms = new Usercontrol_Model_actionsettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
	
		$parms->setResourceid($this->getRequest()->getParam('resource_id'))
			  ->setActionid($this->getRequest()->getParam('action_id'))
		      ->setActionname($this->getRequest()->getParam('action_name'))
		      ->setActions($this->getRequest()->getParam('addaction'))
		      ->setUrl($this->getRequest()->getParam('urls'));
// 		var_dump($parms);
		$result = $mapper->addaction($parms);

		if ($result= null)
		{
			echo json_encode(array('success'=>true,'message'=>'Created new whiteboard'));
		}
	}
	public function getdempassignsAction()
	{
// 		var_dump($this->getRequest()->getParam('fname'));
		
		$params = new Usercontrol_Model_userlistgettersetter();
		$params->setFirstName($this->getRequest()->getParam('fname'))
			   ->setLastName($this->getRequest()->getParam('lname'));
		$mapper= new Usercontrol_Model_UserMapper();
		
		
		if(is_null($params->getFirstName()) || is_null($params->getLastName()))
		{
			echo json_encode(array('failure'=>true));
		}
		else
		{
				$result = $mapper->searchusers($params);
 				echo json_encode(array('success'=>true,'data'=>$result));
		}
	}
// 	public function getactionuserlistAction()
// 	{
// 		$this->_helper->layout->disableLayout();
// 		$this->_helper->viewRenderer->setNoRender();
		
// 		$mapper = new Usercontrol_Model_UserMapper();
		
// 		echo json_encode($mapper->getactionslister());
// 	}
	public function adduseractionsAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params = new Usercontrol_Model_actionsettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$params->setEmployeeId($this->getRequest()->getParam('emp_id'))
			  ->setResourceid($this->getRequest()->getParam('RESOURCE_ID'))
			  ->setActionid($this->getRequest()->getParam('addactions'));
		$result=$mapper->addnewaction($params);
		var_dump($result);
// 		if($result= null)
// 		{
// 			echo json_encode(array('success'=>true,'message'=>'Created new whiteboard'));
// 		}
	}
	public function addresourcesempAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params= new Usercontrol_Model_resourcesrolesettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$params->setEmployeeid($this->getRequest()->getParam('emp_id'))
			   ->setResourcesid($this->getRequest()->getParam('resource_idss'))
			   ->setRoles($this->getRequest()->getParam('base_roless'));

		$result= $mapper->addemplist($params);
		if($result == null)
		{
			$results=$mapper->getresourcelistadd($params);
			echo json_encode(array('success'=>true,'data'=>$results));
		}
		else 
		{
	
			echo json_encode(array('success'=>true,'data'=>$result));
		}
	}
	public function getaddresourcesempAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params= new Usercontrol_Model_resourcesrolesettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$params->setEmployeeid($this->getRequest()->getParam('emp_id'))
		->setResourcesid($this->getRequest()->getParam('resource_idss'))
		->setRoles($this->getRequest()->getParam('base_roless'));

		$result=$mapper->getresourcelistadd($params);
		
		echo json_encode($result);
		
	}
	public function loadresourceAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params = new Usercontrol_Model_actionlistsettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
	
			
			$params->setResourceid($this->getRequest()->getParam('resource_id'));

			
			echo json_encode($mapper->getactionslist($params));
		

		//echo json_encode($mapper->getactionslist($params));
// 		echo json_encode($mapper->changesAction($params));
	}
	public function getresourcelistsAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params= new Usercontrol_Model_resourcessettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$params->setResourceid($this->getRequest()->getParam('resource_id'));
		
		echo json_encode($mapper->onemoretimeResources($params));
	}
	public function placeactionAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		$params = new Usercontrol_Model_actionsettergetter();
		$mapper = new Usercontrol_Model_UserMapper();
		
		$params->setEmployeeId($this->getRequest()->getParam('emp_id'))
			   ->setResourceid($this->getRequest()->getParam('resource_idsss'))
			   ->setActionid($this->getRequest()->getParam('addactions'));

		$result= $mapper->assignactions($params);
		$acount = count($result);
		
		if($acount < 1)
		{
			echo json_encode(array('success'=>true,'data'=>$result));
		}
	}
	public function removeuserAction()
	{
		$this->_helper->layout->disableLayout();
		$this->_helper->viewRenderer->setNoRender();
		
		$params = new Usercontrol_Model_delete();
		$mapper = new Usercontrol_Model_deleteuser();
		
		$params->setEmployeeid($this->getRequest()->getParam('employee_id'));
		$result = $mapper->removeuser($params);
		
		echo json_encode(array('success'=>true,'data'=>$result));;
	}
	public function listalluserAction()
	{
		$mapper= new Usercontrol_Model_UserMapper();
		$result = $mapper->getuserlists();
		if(count($result) >1)
		{
			echo json_encode(array('data'=>$result));
		}
	}
	public function removeuseractionAction()
	{
		$params = new Usercontrol_Model_delete();
		$mapper = new Usercontrol_Model_deleteuser();
		
		$params->setEmployeeid($this->getRequest()->getParam('employee_id'))
			   ->setAction($this->getRequest()->getParam('action_id'))
			   ->setResources($this->getRequest()->getParam('resource_id'));
		$result=$mapper->removeuseraction($params);
		
		if($result>0)
		{
			echo json_encode(array('faliure'=>true,'data'=>$result));
		}
		else {
			echo json_encode(array('success'=>true,'data'=>$result));
		}
		
	}
	public function deleteactionAction()
	{
		$mapper= new Usercontrol_Model_UserMapper();
		
		$actionid = $this->getRequest()->getParam('action_id');
		$resourceid=$this->getRequest()->getParam('resource_id');
		$result = $mapper->actiondeletes($actionid, $resourceid);
	}
	public function resourcesdeleteAction()
	{
		$mapper = new Usercontrol_Model_UserMapper();
		$resourceid = $this->getRequest()->getParam('resource_id');
// 		var_dump($this->getRequest()->getParam('resource_id'));
		$result = $mapper->resourcedeletesAction($resourceid);
		echo json_encode(array('success'=>true,'data'=>$result));
	}
	public function getuserresourcesAction()
	{
		$mapper = new Usercontrol_Model_UserMapper();
		
		$result = $mapper->getuserResources();
		if(count($result)>0)
		{
			echo json_encode(array('success'=>true,'data'=>$result));
		}
	}
	public function  deleteuserresourceAction()
	{
		$mapper = new Usercontrol_Model_deleteuser();
		 $resourceid= $this->getRequest()->getParam('resource_id');
		 $employeeid =$this->getRequest()->getParam('employee_id');
		 
		 $result = $mapper->deleteuserResource($resourceid, $employeeid);
	}
}