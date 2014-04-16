<?php
	class  Usercontrol_Model_deleteuser{
		public function removeuser(Usercontrol_Model_delete $user)
		{
			$db = new Whiteboard_Model_DB();
			$query='Select *
					from WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION
					where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.EMPLOYEE_ID =:a';
			$params=array(':a'=>$user->getEmplyeeid());
			$db->select($query,$params);
			$result= $db->getResult();
			
			if(count($result) > 0)
			{
				
				$db = new Whiteboard_Model_DB();
				$query='DELETE FROM WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION
					   where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.EMPLOYEE_ID =:a';
				$params = array(':a'=>$user->getEmplyeeid());
				$db->select($query,$params);
				$result =$db->getResult();
			}
			$db= new Whiteboard_Model_DB();
			$query='Select *
					from WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE
					where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID = :a';
			$params=array(':a'=>$user->getEmplyeeid());
			$db->select($query,$params);
			$result = $db->getResult();
			if(count($result)>0)
			{
				$db = new Whiteboard_Model_DB();
				$query='DELETE FROM WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE
						where  WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID=:b ';
				$params = array(':b'=>$user->getEmplyeeid());
				$db->select($query,$params);
				$result =$db->getResult();
			}
			
			$db= new Whiteboard_Model_DB();
			$query = 'Select *
				      from WHITEBOARD.TBL_EMPLOYEE
					  where WHITEBOARD.TBL_EMPLOYEE.EMPLOYEE_ID = :a';
			$params=array(':a'=>$user->getEmplyeeid());
			$db->select($query,$params);
			$result = $db->getResult();
			if(count($result)>0)
			{
				$db = new Whiteboard_Model_DB();
				$query='DELETE FROM WHITEBOARD.TBL_EMPLOYEE
						where WHITEBOARD.TBL_EMPLOYEE.EMPLOYEE_ID=:c';
				$params = array(':c'=>$user->getEmplyeeid());
				$db->select($query,$params);
				$result =$db->getResult();
			}
			return $result;
		}
		public function removeuseraction(Usercontrol_Model_delete $user)
		{
			$db = new Whiteboard_Model_DB();
			$query ='delete from WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION
					where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.EMPLOYEE_ID =:a 
					AND WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.ACTION_ID =:b 
					AND WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.RESOURCE_ID   =:c';
			$params=array(':a'=>$user->getEmplyeeid(),
						  ':b'=>$user->getAction(),
						  ':c'=>$user->getResources());
			$db->execute($query,$params);
// 			var_dump($query,$params);
			$result= $db->getResult();
// 			var_dump($db->getResult());
			if(count($result) > 0)
			{
				var_dump($result);
			}
			else {
				var_dump($result);
			}
		}
		public function deleteuserResource($resourceid, $employeeid)
		{
			$db = new Whiteboard_Model_DB();
			$query = 'select *
                      from WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE
                             inner join WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION
                             on WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.RESOURCE_ID = WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.RESOURCE_ID
                       where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.RESOURCE_ID = :a and WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID = :b
                       order by WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID';
			$params = array(':a'=>$resourceid,':b'=>$employeeid);
			$db->select($query,$params);
			$result = $db->getResult();
			
			if(count($result)<=0)
			{
				$db = new Whiteboard_Model_DB();
				$query ='delete WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE
						 where WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.RESOURCE_ID =:a AND WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID =:b';
				$params = array(':a'=>$resourceid,':b'=>$employeeid);
				$result= $db->execute($query, $params);
				$result = $db->getResult();
			}
			
		}
	}