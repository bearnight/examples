Ext.define('ssAdmin.model.Customer', {
	extend: 'Ext.data.Model',
	fields: [
	   'id',
	   'firstName',
	   'lastName',
	   'email',
	   'phone',
	   { model: 'Address', name: 'address' },
	   { model: 'School', name: 'school' },
    ]
});