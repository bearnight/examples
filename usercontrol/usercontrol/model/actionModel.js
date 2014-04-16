Ext.define('usercontrol.model.actionModel',
	{
		extend:'Ext.data.Model',
		fields:
			[
					'addaction',
					'resource_id',
					'resource_name',
					'action_id',
					'action_name',
				
					{name:'urls',mapping:'urls'}
				]
	});