Ext.define('ssAdmin.model.Stamp', {
	extend: 'Ext.data.Model',
	fields: [
	   'layout',
	   { model: 'StampIcon', name: 'icons' },
	   { model: 'StampLine', name: 'lines' }
    ]
});