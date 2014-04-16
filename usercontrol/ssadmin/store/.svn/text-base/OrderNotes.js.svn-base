Ext.define('ssAdmin.store.OrderNotes', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.OrderNote',
	autoLoad: false,
	remoteFilter: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/ordernotes',
		reader: {
			type: 'json',
			root: 'data'
		}
	}	
});