Ext.define('ssAdmin.store.States', {
	extend:'Ext.data.Store',
	autoLoad: true,
	model: 'ssAdmin.model.State',
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/states',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});