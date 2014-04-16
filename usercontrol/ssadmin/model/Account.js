Ext.define('ssAdmin.model.Account', {
	extend: 'Ext.data.Model',
	fields: [
	   'id',
	   'accntNum',
	   'name',
	   { model: 'Address', name: 'address' },
	   'rowId',
	   'jobNum'
    ]
});