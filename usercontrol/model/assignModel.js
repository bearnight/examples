	Ext.define('usercontrol.model.assignModel',
	{
		extend:'Ext.data.Model',
		fields:
			[
			 	{name:'emp_id',mapping:'employee_id'},
			 	'first_name',
			 	'last_name',
			 	{name:'BASE_ROLE',type:'int'},
			 	{name:'ids',type:'int',mapping:'ROLE_ID'},
			 	{name:'roless',mapping:'ROLE_NAME'},
			 	'RESOURCE_ID',
			 	{name:'resource_idss',mapping:'RESOURCE_NAME'},
			 	'ACTION_NAME',
			 	'action_id',
			],

		
			
	});