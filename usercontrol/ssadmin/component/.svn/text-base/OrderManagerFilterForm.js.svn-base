Ext.define('ssAdmin.component.OrderManagerFilterForm', {
    extend: 'Ext.form.Panel',
    alias: 'widget.orderManagerFilterForm',
    title: 'Filter Form',
    margin: '0 0 -1 0',
    items: [{
    	xtype: 'fieldset',
		border: 0,
		items: [{
			xtype: 'container',
            layout: {
                type: 'column'
            },
            items: [{
            	xtype: 'combobox',
                displayField: 'name',
                fieldLabel: 'Status',                
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'status',
                store: 'Statuses',                
                valueField: 'id' ,
                width: 180,
            }, {
                xtype: 'combobox',
                displayField: 'name',
                fieldLabel: 'School Year',
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'schoolYear',
                store: 'SchoolYears',
                valueField: 'id',
                width: 125
            }, {
                xtype: 'combobox',
                displayField: 'name',                
                fieldLabel: 'Product Type',                
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'productType',
                store: 'ProductTypes',
                valueField: 'id',
                width: 275
            }, {
                xtype: 'combobox',
                displayField: 'name',
                fieldLabel: 'Payment Type',
                labelAlign: 'top',
                name: 'paymentType',
                store: 'PaymentTypes',                
                valueField: 'id',
            }]
		}, {			
			xtype: 'container',
            layout: {
                type: 'column'
            },
            margin: '10 0 0 0',
            items: [{
                xtype: 'textfield',
                fieldLabel: 'Sold To (Name)',
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'soldToName'                
            }, {
                xtype: 'textfield',
                fieldLabel: 'Sold To (Email)',
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'soldToEmail'                
            },{
                xtype: 'textfield',
                fieldLabel: 'For Student',
                labelAlign: 'top',
                name: 'forStudent'                
            }]
		}, {
			xtype: 'container',
            layout: {
                type: 'column'
            },
            margin: '10 0 0 0',
            items: [{
            	xtype: 'textfield',
            	fieldLabel: 'School',
                labelAlign: 'top',
            	margin: '0 10 0 0',
                name: 'schoolName'               
            }, {
               xtype: 'textfield',
               fieldLabel: 'City',
               labelAlign: 'top',
               margin: '0 10 0 0',
               name: 'city'               
            }, {
                xtype: 'combobox',
                displayField: 'abbr',
                fieldLabel: 'State',
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'state',                
                store: 'States',
                valueField: 'id',
                width: 70
            }, {
                xtype: 'combobox',
                displayField: 'name',
                fieldLabel: 'Total',
                labelAlign: 'top',
                margin: '0 10 0 0',                
                name: 'total',                
                store: 'Totals',               
                valueField: 'id',
                width: 125
            }, {
                xtype: 'datefield',
                fieldLabel: 'Order Date',
                labelAlign: 'top',
                margin: '0 10 0 0',
                name: 'orderDate',                
                showToday: true
            }, {
                xtype: 'textfield',
                fieldLabel: 'Order #',
                labelAlign: 'top',
                name: 'orderNumber'                
            }]
		}, {
			xtype: 'container',
            layout: {
                type: 'column'
            },
            margin: '10 0 0 0',
            items: [{
                xtype: 'checkboxfield',
                boxLabel: 'Include shopping carts?',
                labelAlign: 'right',
                labelSeparator: ' ',
                margin: '0 10 0 0',
                name: 'includeCarts'
            }, {
                xtype: 'checkboxfield',
                boxLabel: 'Show orders with cancelled line items ONLY',
                labelAlign: 'right',
                labelSeparator: ' ',                
               	margin: '0 10',
                name: 'cancelledLineItems'
            }, {
                xtype: 'container',
                margin: '0 0 0 200',
                items: [{
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
    }]
});