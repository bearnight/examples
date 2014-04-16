Ext.define('ssAdmin.model.OrderShell', {
	extend: 'Ext.data.Model',
	fields: [
	   'cartId',
	   'cartStatus',
	   'dateCreated',
	   'datePlaced',
	   'taxAmount',
	   'totalAmount',
	   { model: 'Customer', name: 'customer' }
    ]
});