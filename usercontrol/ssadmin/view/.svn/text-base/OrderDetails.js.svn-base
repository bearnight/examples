

//#####Need to create CSS file for styling page!#########


Ext.define('ssAdmin.view.OrderDetails', {
    extend			: 'Ext.container.Container',
    alias 			: 'widget.orderDetails',
    layout			: 'auto',
    cls				: 'ssOrderDetails',
    padding			: 5,
    requires		: ['ssAdmin.component.OrderLineItemsGrid','ssAdmin.component.OrderNotes','ssAdmin.component.OrderNotesGrid'],
    initComponent	: function() {
    			_this = this;

    			_this.items = [
    			               _this.buildHeader(),
    			               _this.buildOrderInfo(),
    			               _this.buildCustInfo(),
    			               _this.buildLineItems(),
    			               _this.buildNotesArea(),
    			               {xtype:'orderNotesGrid',store: _this.notesstore}
    			               ];
    			_this.callParent();
    			
    },
    buildHeader		: function(){
    	return {
    		xtype	: 'container',
    		data	: _this.data,
    		tpl		: '<div class="ssAdminHeader1">ORDER {orderNumber}</div>'
    	}
    },
    buildOrderInfo	: function(){
    	return {
    		xtype	: 'container',
    		layout	: 'column',
    		items	: [{
    			xtype	: 'container',
    			data	: _this.data,
    			tpl		: _this.orderInfoTmpl,
    			width	: 500
    		},{
    			xtype	: 'container',
    			layout	: 'auto',
    			items	: [
    			     	   {
    			     		   xtype	: 'container',
    			     		   items	: [_this.buildOrderInfBtns()]
    			     		
    			     	   },
    			     	   {
    			     		   xtype	: 'container',
    			     		   items	: [_this.buildOrderRcptBtn()]
    			     	   }
    			     	   
    			     	   ]
    		}]
    	}
    },
    buildLineItems	: function(){
    	return {
    		xtype	: 'container',
    		items	: [
    		     	   {
    		     		   xtype: 'orderLineItemsGrid',
    		     		   store: _this.listore
    		     	    }
    		     	   ]
    	}
    },
    buildOrderInfBtns: function(){
    	return {
    		xtype	: 'button',
    		text	: 'Cancel Checked Line Items',
    		handler	: function(){
    			alert('You need to build the handler function for this button :-)');
    		}    		
    	}
    },
    buildOrderRcptBtn: function(){
    	return{
    		xtype	: 'button',
    		text	: 'View Order Receipt',
    		handler	: function(){
    			alert('You need to build the handler function for this button :-)');
    		}
    	}
    },
    buildCustInfo	: function(){
    	return {
    		xtype	: 'container',
    		padding	: '0 0 20 0',
    		layout	: 'column',
    		items	: [{
    				xtype	: 'container',
    				width	: 300,
    				items	: [{
    					xtype	: 'container',
    					data	: _this.data,
        				tpl		: _this.custInfoTmpl
    				},
    				{
    					xtype	: 'button',
    					text	: 'Edit Billing Info',
    					handler	: function(){
    						alert('You need to build the handler functionf or this button :-)');
    					}
    				}]
    				
    				
    			},{
    				xtype	: 'container',
    				data	: _this.data,
    				tpl		: _this.schoolInfoTmpl,
    				listeners: {
    					render: function(c){
    						c.getEl().on('click', function(){

    							alert('You need to build the handler function for this button :-)');
    							
    						}, c);
    					}
    				}//end listeners
    				
    			},{
    				xtype	: 'container',
    				data	: _this.data
    			}
    				
    		     	   ]
    	}
    },
    buildNotesArea	: function(){
    	return {
    		xtype	: 'container',
    		padding	: '5 0 0 0',
    		items	: [
    		     	   {
    		     		   xtype	: 'orderNotes'
    		     	   }
    		     	   ]
    	}
    },

    ////XTEMPLATES////
    orderInfoTmpl	: new Ext.XTemplate(
    		'<div>Cart Id: {shell.cartId}</div>',
    		'<div>Status: {shell.cartStatus}</div>',
    		'<div>Date Created: {shell.dateCreated}</div>',
    		'<div>Date Placed: {shell.datePlaced}</div>'
    ),
   custInfoTmpl		: new Ext.XTemplate(
		   	'<h3>Customer Info</h3>',
		   	'<div>{shell.customer.firstName} {shell.customer.lastName}</div>',
		   	'<div>{shell.customer.address.line1}</div>',
		   	'<div>{shell.customer.address.line2}</div>',
		   	'<div>{shell.customer.address.line3}</div>',
		   	'<div>{shell.customer.address.city},{shell.customer.address.state} {shell.customer.address.zip}</div>'
   ),
   schoolInfoTmpl	: new Ext.XTemplate(
		    '<h3>School Info</h3>',
		   	'<div>{shell.customer.school.name}</div>',
		   	'<div>{shell.customer.school.address.line1}</div>',
		   	'<div>{shell.customer.school.address.line2}</div>',
		   	'<div>{shell.customer.school.address.line3}</div>',
		   	'<div>{shell.customer.school.address.city},{shell.customer.school.address.state} {shell.customer.school.address.zip}</div>'
   )
});