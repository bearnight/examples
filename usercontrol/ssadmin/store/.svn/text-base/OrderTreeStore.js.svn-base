Ext.define('ssAdmin.store.OrderTreeStore', {
	extend:'Ext.data.TreeStore',
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/orderstree',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});