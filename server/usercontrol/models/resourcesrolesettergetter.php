<?php
	class Usercontrol_Model_resourcesrolesettergetter
	{
		public $employee_id;
		public $resources_id;
		public $roles;
		
		public function setEmployeeid($val)
		{
			if(strlen($val) > 0 )
			{
				$this->employee_id=$val;
			}
			return $this;
		}
		public function getEmployeeid()
		{
			return $this->employee_id;
		}
		public function setResourcesid($val)
		{
			if(strlen($val) > 0)
			{
				$this->resources_id=$val;
			}
			return $this;
		}
		public function getResourcesid()
		{
			return $this->resources_id;
		}
		public function setRoles($val)
		{
			if(strlen($val))
			{
				$this->roles=$val;
			}
			return $this;
		}
		public function getRoles()
		{
			return $this->roles;
		}
	}