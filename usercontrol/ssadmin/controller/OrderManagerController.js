Ext.define('ssAdmin.controller.OrderManagerController', {
	extend: 'Ext.app.Controller',
	stores: ['Orders', 'OrderLineItems', 'OrderNotes', 'OrderShells', 'PaymentTypes', 'ProductTypes', 'SchoolYears', 'States', 'Statuses', 'Totals'],
	models: ['Ad', 'Address', 'Business', 'Customer', 'Option', 'Order', 'OrderLineItem', 'OrderNote', 'OrderShell', 'Package', 
	         'PaymentType', 'Person', 'ProductType', 'SchoolYear', 'Stamp', 'StampIcon', 'StampLine', 'State', 'Status', 'Total'],
    init: function() {    	
    	    	
    	var me = this;
    	
    	this.control({
    		'orderManagerFilterForm button[type="submit"]': {
    			click: this.search
    		},
    		'orderManagerFilterForm button[type="reset"]': {
    			click: this.resetFilter
    		},
    		'orderManagerGrid': {
    			selectionchange: this.showOrderDetails
    		},
    		'ordersTabMenu button:first': {
    			render: function(_this, eOpts) {
    				
    				_this.toggle(true)
    			}
    		},
    		'orderManagerTabMenu button': {    		
    			click: this.toggler    			
    		}		
        });
    },
    search: function(_this, e, eOpts) {
    	
    	var form = _this.up('form'),
    		formValues = form.getValues(),
    		store = this.getOrdersStore(),
    		filters = [];
    	
    	for (var key in formValues) {
    		
    		if (formValues[key] !== null && formValues[key] !== '') {
    	
    			if ((key === 'paymentType' && formValues[key] === 0) ||
    				(key === 'productType' && formValues[key] === 0) ||
    				(key === 'schoolYear'  && formValues[key] === 0) ||
    				(key === 'status' 	   && formValues[key] === 0)) {
    			
    				filters.push({property: key, value: null});
    			}
    			else {
    				
    				filters.push({property: key, value: formValues[key]});
    			}
    		}
    	}

    	store.filters.clear();
    	store.filter(filters);
    },
    showOrderDetails: function(_this, selected, eOpts) {
        
    	var cartId = selected[0].data.cartId,
    		data = selected[0].data;
    	
    	this.getOrderLineItemsStore().getProxy().extraParams.cartId = cartId;
    	this.getOrderShellsStore().getProxy().extraParams.cartId = cartId;
    	this.getOrderNotesStore().getProxy().extraParams.cartId = cartId;
    	
    	this.getOrderShellsStore().load({
    	    scope: this,
    	    callback: function(records, operation, success) {
    	            	    	
    	    	var order = { shell: records[0].data };
    	    	order.orderNumber = data.orderNumber;
    	    	
    	    	this.getOrderLineItemsStore().load({
    	    	    scope: this,
    	    	    callback: function(records, operation, success) {
    	        	    	    	
    	    	    	this.getOrderNotesStore().load({
    	    	    	    scope: this,
    	    	    	    callback: function(records, operation, success) {
    	    	    	            	    	    	    	    	    	    	
    	    	    	    	var window = Ext.create('ssAdmin.component.OrderDetailsWindow', {
    	    	    	    		title: 'Order Number '+ data.orderNumber,
    	        	    			items: [{
    	        	    	        	xtype: 'orderDetails',
    	        	    	        	data: order,
    	        	    	        	listore: this.getOrderLineItemsStore(),
    	        	    	        	notesstore: this.getOrderNotesStore()
    	        	    	        }] 		
    	    	    	    	});
    	    	    			
    	    	    			window.show();  
    	    	    	    }
    	    	    	});   
    	    	    }
    	    	});     	    	
    	    }
    	});	
    },
    resetFilter: function(_this, e, eOpts) {
		
    	var store = this.getOrdersStore();
    	store.clearFilter();
    	store.load();
    	
		Ext.ComponentQuery.query('orderManagerFilterForm')[0].getForm().reset();		
    },
    toggler: function(_this, e, eOpts) {
    	
    	Ext.ComponentQuery.query('orderManagerTabMenu > button').forEach(function(button) {
    		
    		button.toggle(false);
    	});    	
    	
    	_this.toggle(true);
    }
});