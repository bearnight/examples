Ext.define('ssAdmin.store.ProductTypes', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.ProductType',
	autoLoad: true,
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/producttypes',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});