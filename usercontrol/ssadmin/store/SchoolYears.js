Ext.define('ssAdmin.store.SchoolYears', {
	extend:'Ext.data.Store',
	model: 'ssAdmin.model.SchoolYear',
	autoLoad: true,
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/schoolyears',
		reader: {
			type: 'json',
			root: 'data'
		}
	}
});