Ext.define('usercontrol.store.checkuserStore',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.checkuserModel',
	autoLoad:true,
	proxy:
		{
			type:'adjax',
			url:'/usercontrol/data/checkuser',
			reader:
				{
					type:'json',
					root:'data',
				}

		}
})