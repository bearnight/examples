Ext.define('ssAdmin.component.SchoolSearchForm', {
    extend: 'Ext.form.Panel',
    alias: 'widget.schoolSearchForm',
    id: 'schoolSearchForm',
    header: false,
    border: 0,
    items: [{
    	xtype: 'fieldset',
		border: 0,
		items: [{
			xtype: 'container',
            margin: '0 0 10 0',
            items: [{
                xtype: 'textfield',
                emptyText: 'School Name',
                name: 'name',
                width: 210
            }]
		}, {
   	        xtype: 'container',
	   	    layout : {
	   	    	type : 'hbox',
	   	    	pack : 'start'
	   	    },
            items: [{
                xtype: 'numberfield',
                emptyText: 'Job Number',
                name: 'jobNum',
                width: 100,
                margin: '0 10 0 0'
            }, {
            	xtype: 'button',
                margin: '0 10 0 0',
                text: 'Search',
                type: 'submit'
            }, {
                xtype: 'button',
                text: 'Reset',
                type: 'reset'               
        	}]
        }]		
    }]
});