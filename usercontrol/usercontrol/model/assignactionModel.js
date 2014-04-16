	Ext.define('usercontrol.model.assignactionModel',
	{
		extend:'Ext.data.Model',
		fields:
			[
			 	{name:'emp_id',mapping:'EMPLOYEE_ID'},
			 	{name:'fname',mapping:'FIRST_NAME'},
			 	{name:'lname' , mapping:'LAST_NAME'},
			 	{name:'BASE_ROLE',type:'int'},
			 	{name:'ids',type:'int',mapping:'ROLE_ID'},
			 	'RESOURCE_ID',
			 	{name:'resource_action',mapping:'RESOURCE_NAME'},
			 	{name:'addactions',mapping:'ACTION_NAME'},
			 	'ACTION_ID',
			],

		
			
	});