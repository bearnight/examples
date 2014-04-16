Ext.define('ssAdmin.store.Schools', {
	extend:'Ext.data.Store',
	autoLoad: false,
	remoteFilter: true,
	model: 'ssAdmin.model.School',
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/schools',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});