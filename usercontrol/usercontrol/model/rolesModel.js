Ext.define('usercontrol.model.rolesModel',
	{
		extend:'Ext.data.Model',
		fields:
			[
			 	{name:'id',type:'int',mapping:'role_id'},
			 	'role_name'
			 ],
//			 rendtoTo:Ext.getBody(),
	});