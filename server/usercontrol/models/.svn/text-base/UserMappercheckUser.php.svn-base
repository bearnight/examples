<?php 
	class Usercontrol_Model_UserMappercheckUser{
		public function checkUser(Usercontrol_Model_userlistgettersetter $user)
		{
			$db = new Whiteboard_Model_DB();
			
			$query = 'select CONCAT(WHITEBOARD.TBL_EMPLOYEE.FIRST_NAME, WHITEBOARD.TBL_EMPLOYEE.LAST_NAME) as name ,
					   WHITEBOARD.TBL_RESOURCE.RESOURCE_NAME, WHITEBOARD.TBL_ACTION.ACTION_NAME 
					   from WHITEBOARD.TBL_RESOURCE join WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE 
					   on WHITEBOARD.TBL_RESOURCE.RESOURCE_ID = WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.RESOURCE_ID 
					   join WHITEBOARD.TBL_EMPLOYEE on WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.EMPLOYEE_ID =  WHITEBOARD.TBL_EMPLOYEE.EMPLOYEE_ID 
					   join WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION on WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ROLE.RESOURCE_ID = WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.RESOURCE_ID 
					   join WHITEBOARD.TBL_ACTION on WHITEBOARD.TBL_EMPLOYEE_RESOURCE_ACTION.ACTION_ID = WHITEBOARD.TBL_ACTION.ACTION_ID 
					   where rtrim(ltrim(lower(WHITEBOARD.TBL_EMPLOYEE.FIRST_NAME))) =lower(:fname) 
					   AND rtrim(ltrim(lower(WHITEBOARD.TBL_EMPLOYEE.LAST_NAME)))=lower(:lname)';
			
			$newArray = array(':fname'=>$user->getFirstName(),
							  ':lname'=>$user->getLastName());
			
			return $resultes = $db->execute($query, $newArray);
		}
	}