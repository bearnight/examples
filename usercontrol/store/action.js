Ext.define('usercontrol.store.action',
	{
		extend:'Ext.data.Store',
		model:'usercontrol.model.action',
		pageSize:100,
		autoLoad:true,
		proxy:
			{
				type:'ajax',
				url:'/usercontrol/data/getaction',
				reader:
					{
						type:'json',
						root:'data'
					},
			}
	});	