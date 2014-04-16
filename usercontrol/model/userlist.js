		Ext.define('usercontrol.model.userlist',
	{
		extend:'Ext.data.Model',
		fields:
			[
			 	'employee_id',
			 	'first_name',
			 	'last_name',
			 	{name:'base_role',type:'int'},
			 	'contactid',
			 	'location_id',
			 	'role_name'
			],

		
			
	});