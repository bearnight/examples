Ext.define('ssAdmin.view.OrdersTab', {
	extend: 'Ext.panel.Panel',
    alias: 'widget.ordersTab',
    requires: ['ssAdmin.component.OrdersTabMenu',
               'ssAdmin.component.OrderManagerFilterForm',
               'ssAdmin.component.OrderManagerGrid'],   
    items: [{
    	xtype: 'container',
    	padding: 10,
    	items: [{
    		xtype: 'container',
	    	layout: 'card',
	    	items: [{
	    		xtype: 'container',
      		  	layout: 'fit',
      		  	items: [{
      		  		xtype: 'orderManagerFilterForm'
      		  	}, {
      		  		xtype: 'container',
      		  		items: [{
      		  			xtype: 'orderManagerGrid',
      		  		}]      		  		
      		  	}]      		  	
	    	}]
    	}]
    }],
    dockedItems: [{
		xtype: 'toolbar',
    	dock: 'top',
    	items: [{
    		xtype: 'ordersTabMenu'
    	}]
    }]
});