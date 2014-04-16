Ext.define('usercontrol.store.userlist',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.userlist',
	autoLoad:true,
	proxy:
		{
			type:'adjax',
			url:'/usercontrol/data/getusers',
			reader:
				{
					type:'json',
					root:'data'
				}
		}
})