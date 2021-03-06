Ext.define('usercontrol.store.resourceEmp',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.resourceModel',
	autoLoad:true,
	pageSize:100,
	proxy:
		{
			type:'ajax',
			url:'/usercontrol/data/getaddresourcesemp',
			reader:
				{
					type:'json',
					root:'data'
				},
				simpleSortMode:true
		},
		
		sorters:[{
			property:'LAST_NAME',
			direction:'ASC'
		}]
});