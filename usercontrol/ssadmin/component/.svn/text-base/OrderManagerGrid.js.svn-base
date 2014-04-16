Ext.define('ssAdmin.component.OrderManagerGrid', {
	extend: 'Ext.grid.Panel',
    alias: 'widget.orderManagerGrid',
    store: 'Orders',
    titleCollapse: false,
	columns: [{
		xtype: 'rownumberer',
		resizable: true,
		width: 50
	}, {
		dataIndex: 'orderNumber',
		header: 'Order #'
	}, {
		dataIndex: 'productType',
		header: 'Product Type'
	}, {
		dataIndex: 'paymentType',
		header: 'Payment Type'
	}, {
		xtype: 'gridcolumn',
		text: 'Sold To',
		renderer: function(p, value, record) {
			
			return record.data.customer.firstName + ' ' + record.data.customer.lastName;
		},
	}, {
		xtype: 'gridcolumn',
		text: 'School',		
		renderer: function(p, value, record) {
			
			return record.data.customer.school.name;
		},
	}, {
		xtype: 'gridcolumn',
		text: 'City',		
		renderer: function(p, value, record) {
			
			return record.data.customer.school.address.city;
		},
	}, {
		xtype: 'gridcolumn',
		text: 'State',		
		renderer: function(p, value, record) {
			
			return record.data.customer.school.address.state;
		},
	}, {
		xtype: 'gridcolumn',
		dataIndex: 'totalAmount',
		text: 'Total'
	}, {
		xtype: 'datecolumn',
		dataIndex: 'datePlaced',
		text: 'Date',
		format: 'M-d'
	}, {
		xtype: 'gridcolumn',
		text: 'School Year',		
		renderer: function(p, value, record) {
			
			return record.data.customer.school.year;
		},
	}, {
		xtype: 'gridcolumn',
		dataIndex: 'cartStatus',
		text: 'Status'
	}],
    dockedItems: [{
    	xtype: 'pagingtoolbar',
	    width: 360,
	    displayInfo: true,
	    dock: 'bottom',
	    store: 'Orders'
	}]
});