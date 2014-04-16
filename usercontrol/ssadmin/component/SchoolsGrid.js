Ext.define('ssAdmin.component.SchoolsGrid', {
	extend: 'Ext.grid.Panel',
    alias: 'widget.schoolsGrid',
    store: 'Schools',
    titleCollapse: false,
	columns: [{
		xtype: 'rownumberer',
		resizable: true,
		width: 50
	}, {
		dataIndex: 'name',
		header: 'School Name'
	}, {
		xtype: 'gridcolumn',
		text: 'Location',
		renderer: function(p, value, record) {
			
			return record.data.address.city + ', ' + record.data.address.state;
		}
	}, {
		dataIndex: 'rowId',
		text: 'Row ID'
	}],
    dockedItems: [{
    	xtype: 'pagingtoolbar',
	    width: 360,
	    displayInfo: true,
	    dock: 'bottom',
	    store: 'Schools'
	}]
});