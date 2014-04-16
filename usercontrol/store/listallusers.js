Ext.define('usercontrol.store.listallusers',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.listalluserModel',
	autoLoad:true,

	proxy:
		{
			type:'ajax',
			url:'/usercontrol/data/listalluser',
			reader:
				{
					type:'json',
					root:'data'
				},
		}
});