Ext.define('usercontrol.store.location',{
	extend:'Ext.data.Store',
	model:'usercontrol.model.locations',
	autoLoad:false,
				data:[
				      		{'id':'1','name':'Missouri'},
				      		{'id':'2','name':'Michigan'},
				      ]
});