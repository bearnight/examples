Ext.define('ssAdmin.store.PaymentTypes', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.PaymentType',
	autoLoad: true,
	proxy: {
		type: 'ajax',
		url	: '/ssadmin/data/paymenttypes',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});