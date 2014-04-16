Ext.define('ssAdmin.store.Totals', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.Total',
	autoLoad: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/totals',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});