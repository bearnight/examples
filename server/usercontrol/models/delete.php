<?php
	class Usercontrol_Model_delete
	{
		public $resourceid;
		public $employee_id;
		public $action_id;
		
		public function setEmployeeid($val)
		{
			if(strlen($val) > 0)
			{
				$this->employee_id = $val;
			}
			return $this;
		}
		public function getEmplyeeid()
		{
			return $this->employee_id;
		}
		public function setResources($val)
		{
			if(strlen($val) > 0)
			{
				$this->resourceid = $val;
			}
			return $this;
		}
		public function getResources()
		{
			return $this->resourceid;
		}
		public function setAction($val)
		{
			if(strlen($val) > 0)
			{
				$this->action_id =$val;
			}
			return $this;
		}
		public function getAction()
		{
			return $this->action_id;
		}
	}