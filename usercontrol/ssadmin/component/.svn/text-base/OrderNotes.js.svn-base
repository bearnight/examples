Ext.define('ssAdmin.component.OrderNotes', {
    extend			: 'Ext.container.Container',
    alias 			: 'widget.orderNotes',
    layout			: 'fit',

    initComponent	: function(){
    					_this = this;
    					_this.callParent();
    },
    items			: [
         			   {
         				   xtype	: 'form',
         				   border	: 0,
         				   url		: 'bbbb',
         				   items	: [
         				        	   {
			         					   xtype	: 'container',
			         					   data		: {title: 'Add a Note'},
			         					   tpl		: '<h3>{title}</h3>'			         					
         				        	   },
         				        	   {
         				        		   xtype		: 'textareafield',
         				        		   name			: 'order_notes',
         				        		   width		: 400,
         				        		   allowBlank	: false
         				        		   
         				        	   },
         				        	   {
         				        		   xtype		: 'datefield',
         				        		   value		: new Date(),
         				        		   name			: 'note_date',
         				        		   hidden		: true         				        		   
         				        	   },
         				        	   {
         				        		   xtype		: 'textfield',
         				        		   name			: 'cart_id',
         				        		   value		: '123',
         				        		   hidden		: true
         				        	   },
         				        	   {
         				        		   xtype		: 'textfield',
         				        		   name			: 'internal_user_id',
         				        		   value		: '4082',
         				        		   hidden		: true
         				        	   },
         				        	   {
         				        		   xtype		: 'textfield',
         				        		   name			: 'internal_user_name',
         				        		   value		: 'Brian Cryderman',
         				        		   hidden		: true
         				        	   },
         				        	   {
         				        		   xtype	: 'button',
         				        		   text		: 'Add Note',
         				        		   id		: 'orderNotesButton',
         				        		   formBind	: true,
         				        		   disabled	: true,
         				        		   handler	: function(){
         				        			   var form = this.up('form').getForm();
         				        			   console.log(form.getValues());
         				        			   form.submit();
         				        		   }
         				        	   }
         				        	   
         				        	   ]
         			   }
         			   ]

});