Ext.define('ssAdmin.store.OrderShells', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.OrderShell',
	autoLoad: false,
	remoteFilter: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/ordershell',
		reader: {
			type: 'json',
			root: 'data'
		}
	}	
});