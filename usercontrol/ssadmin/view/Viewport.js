Ext.define('ssAdmin.view.Viewport', {
	extend: 'Ext.container.Container',    
	requires: ['ssAdmin.view.OrdersTab',
               'ssAdmin.view.Schools'],   
    layout: 'fit',
    renderTo: 'yield',
    items: [{
    	xtype: 'tabpanel',
    	activeTab: 0,
    	height: 900,
    	items: [{
        	xtype: 'ordersTab',
        	title: 'Orders'
        }, {
        	xtype: 'schools',
        	title: 'Schools'
        }]
    }]    
});