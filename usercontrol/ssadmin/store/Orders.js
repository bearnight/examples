Ext.define('ssAdmin.store.Orders', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.Order',
	autoLoad: true,
	remoteFilter: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/orders',
		reader: {
			type: 'json',
			root: 'data',
			totalProperty: 'total'
		}
	}	
});