<?php
	class Usercontrol_Model_actionsettergetter
	{
		public $resource_id;
		public $action_id;
		public $action_name;
		public $addaction;
		public $urls;
		public $resource_name;
		public $employee_id;
		public $order;
		
		
		public function setEmployeeId($val)
		{
			if(strlen($val) >0)
			{
				$this->employee_id=(int)$val;
			}
			return $this;
		}
		public function getEmployeeId()
		{
			return $this->employee_id;
		}
		public function setResourceName($val)
		{
				
			if(strlen($val) > 0)
			{
				$this->resource_name=$val;
			}
			return $this;
		}
		public function getResourceName()
		{
			return $this->resource_name;
		}

		public function setResourceid($val)
		{
			if(strlen($val) > 0)
			{
				$this->resource_id=(int)$val;
			}
			return $this;
		}
		public function getResourceid()
		{
			return $this->resource_id;
		}
		public function setActionid($val)
		{
			if(strlen($val) > 0)
			{
				$this->action_id=(int)$val;
			}
			return $this;
		}
		public function getActionid()
		{
			return $this->action_id;
		}
		public function setActionname($val)
		{
			if(strlen($val) > 0)
			{
				$this->action_name=$val;
			}
			return $this;
		}
		public function getActionname()
		{
			return $this->action_name;
		}
		public function setActions($val)
		{
		
			if(strlen($val) > 0)
			{
				
				$this->addaction=$val;
			}
			return $this;
		}
		public function getActions()
		{
			return $this->addaction;
		}
		public function setUrl($val)
		{
			if(strlen($val) > 0)
			{
				
				$this->urls=$val;
			}
			return $this;
		}
		public function getUrl()
		{
			return $this->urls;
		}
		public function setOrder()
		{
			$this->order=0;
		}
		public function getOrder()
		{
			return $this->order;
		}
	}