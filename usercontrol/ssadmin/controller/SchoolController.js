Ext.define('ssAdmin.controller.SchoolController', {
	extend: 'Ext.app.Controller',
	stores: ['AccountTreeStore', 'OrderTreeStore'],
    init: function() {    	
    	    	
    	var me = this;
    	
    	this.control({
    		'schoolSearchForm button[type="submit"]': {
    			click: this.search
    		},
    		'schoolSearchForm button[type="reset"]': {
    			click: this.resetSchoolSearchForm
    		},
    		'schoolTree': {
    			itemclick: this.selectJobItem
    		}
        });
    },
    resetSchoolSearchForm: function(_this, e, eOpts) {
		
    	var schoolSearchForm = Ext.getCmp('schoolSearchForm'),
    		schoolResultsPanel = Ext.getCmp('schoolResultsPanel');
    	
    	var store = this.getStore('AccountTreeStore');
    	store.clearFilter();
    	store.load();
    	
    	schoolResultsPanel.collapse(null, true);
    	schoolSearchForm.getForm().reset();		
    },
    search: function(_this, e, eOpts) {
    	    
    	var schoolSearchPanel = Ext.getCmp('schoolSearchPanel'),
    		schoolResultsPanel = Ext.getCmp('schoolResultsPanel');
    	
    	schoolSearchPanel.collapse(null, true);
    	
    	if (schoolResultsPanel.collapsed) {
    	
    		schoolResultsPanel.expand(true);
    	}
    	
    	var formValues = Ext.getCmp('schoolSearchForm').getValues(),
    		store = this.getStore('AccountTreeStore');
    	
    	for (var key in formValues) {
    		     
    		store.getProxy().extraParams[key] = formValues[key];
    	}
    	
    	store.load();
    },
    selectJobItem: function(_this, record, item, index, e, eOpts) {
    	
    	var id = record.data.id,
    		parentId = record.data.parentId;
    	
    	if (id === 'ads') {
    		
    		
    	}
    	else if (id === 'ccp') {
    		
    		
    	}
    	else if (id === 'orders') {
    		
    		var orderResultsPanel = Ext.getCmp('orderResultsPanel');
    		
    		orderResultsPanel.expand(true);
    		
    		var store = this.getStore('OrderTreeStore');    		
    		store.getProxy().extraParams['jobNum'] = parentId;
    		store.load();
    	}
    }   
});