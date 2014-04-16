Ext.define('ssAdmin.store.OrderLineItems', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.OrderLineItem',
	autoLoad: false,
	remoteFilter: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/orderlineitems',
		reader: {
			type: 'json',
			root: 'data'
		}
	}	
});