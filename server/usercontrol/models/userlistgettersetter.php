<?php	
	class Usercontrol_Model_userlistgettersetter
	{
		public $employee_id;
		public $first_name;
		public $last_name;
		public $base_role;
		public $contactid;
		public $location_id;
		public $isDeleted;
		public $role_name;
		public $resource_id;
		public $resource_name;
		public $action_id;
		public $action_name;
		
		public function setEmployee($val)
		{
			if(strlen($val) >0)
			{
				$this->employee_id=(int)$val;
			}
			return $this;
		}
		public function getEmployee()
		{
			return $this->employee_id;
			
		}
		public function setFirstName($val)
		{
			if(strlen($val) > 0)
			{
				$this->first_name=$val;
			}
			return $this;
		}
		public function getFirstName()
		{
			return $this->first_name;
		}
		public function setLastName($val)
		{
			if(strlen($val) >0)
			{
				$this->last_name=$val;
			}
			return $this;
		}
		public function getLastName()
		{
			return $this->last_name;
		}
		public function setRole($val)
		{
				$this->base_role=$val;
			return $this;
		}
		public function getRole()
		{
			return $this->base_role;
		}
		public function setContactid($val)
		{
			if(strlen($val) >0)
			{
				$this->contactid=$val;
			}
			return $this;
		}
		public function getContactid()
		{
			return $this->contactid;
		}
		public function setLocation_id($val)
		{
			if(strlen($val)>0)
			{
				$this->location_id=(int)$val;
			}
			return $this;
		}
		public function getLocation_id()
		{
			return  $this->location_id;
		}
		public function setIsDeleted($val)
		{
			if(strlen($val)>0)
			{
				
				$this->isDeleted=$val;
			}

		
			return $this;
		}
		public function getIsDelted()
		{
			return $this->isDeleted;
		}
		public function setRoleName($val)
		{
			if(strlen($val)>0)
			{
				$this->role_name=$val;
			}
			return $this;
		}
		public function getRoleName()
		{
			return $this->role_name;
		}
		public function setResourceID($val)
		{
			if(strlen($val)>0)
			{
				$this->resource_id=$val;
			}
			return $this;
		}
		public function getResourceID()
		{
			return $this->resource_id;
		}
		public function setResouceName($val)
		{
			if(strlen($val)>0)
			{
				$this->resource_name=$val;
			}
			return $this;
		}
		public function getResouceName()
		{
			return $this->resource_name;
		}
		public function setActionID($val)
		{
			if(strlen($val)> 0)
			{
				$this->action_id=$val;
			}
			return $this;
		}
		public function getActionID()
		{
			return $this->action_id;
		}
		public function setActionName($val)
		{
			if(strlen($val)>0)
			{
				$this->action_name=$val;
			}
			return $this;
		}
		public function getActionName()
		{
			return $this->action_name;
		}
		
	}