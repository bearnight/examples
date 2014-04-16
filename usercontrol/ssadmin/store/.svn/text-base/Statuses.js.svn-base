Ext.define('ssAdmin.store.Statuses', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.Status',
	autoLoad: true,
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/statuses',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});