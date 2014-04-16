//Ext.require([
//    'Ext.grid.*',
//    'Ext.data.*',
//    'Ext.dd.*',
//
//]);
//
///*Setup Data Model*/
//Ext.define('UserObj',{
//	extend:'Ext.data.Model',
//	fields:['employee_id',{name:'fname',mapping:'first_name'},'last_name','base_role','base_role_name']
//})
//
//	 var columns = [
//		 { xtype: 'rownumberer',sortable: true},
//		 {text: 'Employee Id',sortable:true,dataIndex:'employee_id'},
//		 {text: 'First Name',sortable:true,dataIndex:'fname'},
//		 {text: 'Last Name',sortable:true,dataIndex:'last_name'}
//	 ];
//
//Ext.define('Writer.Form', {
//    extend: 'Ext.form.Panel',
//    alias: 'widget.glForm',
//
//    requires: ['Ext.form.field.Text'],
//
//    initComponent: function(){
//        this.addEvents('create');
//        Ext.apply(this, {
//            activeRecord: null,
//            iconCls: 'icon-user',
//            frame: true,
//            defaultType: 'textfield',
//            bodyPadding: 5,
//            fieldDefaults: {
//                anchor: '100%',
//                labelAlign: 'right'
//            },
//            defaults:{
//            	enforceMaxLength:true,
//            	allowBlank: false
//            },
//            items: [
//					{
//					    xtype: 'container',
//					    width: 250,
//					    height: 100,
//					    layout: {
//					       
//					        type: 'auto'
//					    },
//					    items: [
//					        {
//					            xtype: 'numberfield',
//					            fieldLabel: 'Employee id',
//					            name: 'employee_id'
//					        },
//					        {
//					            xtype: 'textfield',
//					            fieldLabel: 'First Name',
//					            name: 'fname'
//
//					        },
//					        {
//					            xtype: 'textfield',
//					            fieldLabel: 'Last Name',
//					            name: 'last_name'
//
//					        }
//					    ]
//					}
//					
//                ],
//            dockedItems: [{
//                xtype: 'toolbar',
//                dock: 'bottom',
//                ui: 'footer',
//                items: ['->', {
//                    itemId: 'save',
//                    text: 'Save',
//                    disabled: true,
//                    scope: this,
//                    handler: this.onSave
//                }, {
//                    text: 'Create',
//                    scope: this,
//                    handler: this.onCreate
//                }, {
//                    text: 'Reset',
//                    scope: this,
//                    handler: this.onReset
//                }]
//            }]
//        });
//        this.callParent();
//    },
//
//    setActiveRecord: function(record){
//        this.activeRecord = record;
//        if (record) {
//            this.down('#save').enable();
//            this.getForm().loadRecord(record);
//        } else {
//            this.down('#save').disable();
//            this.getForm().reset();
//        }
//    },
//
//    onSave: function(){
//        var active = this.activeRecord,
//            form = this.getForm();
//
//        if (!active) {
//            return;
//        }
//        if (form.isValid()) {
//            form.updateRecord(active);
//            this.onReset();
//        }
//    },
//
//    onCreate: function(){
//        var form = this.getForm();
//        if (form.isValid()) {
//            this.fireEvent('create', this, form.getValues());
//            form.reset();
//        }
//    },
//
//    onReset: function(){
//        this.setActiveRecord(null);
//        this.getForm().reset();
//    }
//});
//
//
//
//
//
//	 Ext.define('Writer.Grid', {
//		    extend: 'Ext.grid.Panel',
//		    alias: 'widget.writergrid',
//
//		    requires: [
//		        'Ext.grid.plugin.CellEditing',
//		        'Ext.form.field.Text',
//		        'Ext.toolbar.TextItem'
//		    ],
//
//		    initComponent: function(){
//
//		        this.editing = Ext.create('Ext.grid.plugin.CellEditing');
//
//		        Ext.apply(this, {
//		            iconCls: 'icon-grid',
//		            frame: true,
//		            autoScroll: true,
//		            width:'100%',height:'100%',
//		            plugins: [this.editing],
//		            dockedItems: [],
//		            columns: columns
//		        });
//		        this.callParent();
//		        this.getSelectionModel().on('selectionchange', this.onSelectChange, this);
//		    },
//		    
//		    onSelectChange: function(selModel, selections){
//		        this.down().setDisabled(selections.length === 0);
//		    },
//
//		    onAddClick: function(){
//		        var rec = new Writer.Person({
//		            first: '',
//		            last: '',
//		            email: ''
//		        }), edit = this.editing;
//		        edit.cancelEdit();
//		        this.user_store.insert(0, rec);
//		        edit.startEditByPosition({
//		            row: 0,
//		            column: 1
//		        });
//		    }
//		});
//
//
//
//
//
//
//
//
//
//
//
//
//
//Ext.onReady(function(){
//	 var user_store = Ext.create('Ext.data.Store', {
//	        model: 'UserObj',
//	        autoLoad: true,
//	        autoSync: true,
//	        pageSize: 10,
//	        proxy: {
//	            type: 'ajax',
//	            api: {
//	                read: '/usercontrol/data/getusers',
//	                create: '/usercontrol/data/saveusers',
//	                update: '/usercontrol/data/saveusers',
//	                destroy: ''
//	            },
//	            reader: {
//	                type: 'json',
//	                successProperty: 'success',
//	                root: 'results',
//	                messageProperty: 'message',
//	                
//	            },
//	            writer: {
//	                type: 'json',
//	                writeAllFields: true,
//	                root: 'data'
//	            },
//	            listeners: {
//	                exception: function(proxy, response, operation){
//	                    Ext.MessageBox.show({
//	                        title: 'REMOTE EXCEPTION',
//	                        msg: operation.getError(),
//	                        icon: Ext.MessageBox.ERROR,
//	                        buttons: Ext.Msg.OK
//	                    });
//	                }
//	            }
//	      },
//	        listeners: {
//	            write: function(proxy, operation){
//	                if (operation.action == 'destroy') {
//	                	invoicer_glPanel.child('#form').setActiveRecord(null);
//	                }
//	               // Ext.example.msg(operation.action, operation.resultSet.message);
//	            }
//	        },
//	        sorters:[{
//	        	property:'last_name',
//	        	direction:'ASC'
//	        }]	
//	    });
//
//	 
//	var user_Panel = Ext.create('Ext.Panel',{
//			renderTo:'user_data',
//			title:'White Board Users',
//			width: 500,
//			height: 600,
//			layout: {
//			        align: 'stretch',
//			        type: 'vbox'
//			    },
//			items:[{
//            itemId: 'form',
//            xtype: 'glForm',
//            height: 175,
//            margins: '0 0 10 0',
//            padding: '10 50',
//            listeners: {
//                create: function(form, data){
//					
//					invoicer_glStore.insert(0, data);
//                }
//            }
//        }, {
//            itemId: 'grid',
//            xtype: 'writergrid',
//            flex: 1,
//            store: user_store,
//            listeners: {
//                selectionchange: function(selModel, selected) {
//        		user_Panel.child('#form').setActiveRecord(selected[0] || null);
//                }
//            }
//        }]
//	});
//	 
//	 
//	 
//});