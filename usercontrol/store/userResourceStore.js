Ext.define('usercontrol.store.userResourceStore',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.userResourceModel',
	autoLoad:true,

	proxy:
		{
			type:'ajax',
			url:'/usercontrol/data/getuserresources',
			reader:
				{
					type:'json',
					root:'data'
				},
		}
});