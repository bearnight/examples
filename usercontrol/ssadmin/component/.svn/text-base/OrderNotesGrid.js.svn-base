Ext.define('orderManager.components.OrderNotesGrid', {
    extend			: 'Ext.container.Container',
    alias 			: 'widget.orderNotesGrid',
    layout			: 'auto',
    initComponent	: function(){
    					_this = this;
    					_this.items = _this.BuildItems();
    					_this.callParent();
    },
    BuildItems		: function() {
    		return [
         			   {
	         			   xtype	: 'container',
	         			   border	: 1,
	         			   items	: [
	         			        	   {
	         			        		   xtype	: 'container',
			         					   tpl		: '<div>{title}</div>'
	         			        	   },
	         			        	  {
	         			        		   xtype	: 'gridpanel',
	         			        		   id		: 'orderNotesGrid',
	         			        		   cls		: 'orderNotesTable',
	         			        		   store	: _this.store,
	         			        		   columns	: [
	         			        		          	{
	         			        		          		xtype		: 'rownumberer'
	         			        		   			},
		         			        		   		{
		         			        		   			xtype: 'datecolumn',
		         			        		   			dataIndex: 'dateCreated',
		         			        		   			text: 'Note Date',
		         			        		   			format: 'M-d'
		         			        		   		},
	         			        		   			{
	         			        		   				xtype		: 'gridcolumn',
	         			        		   				dataIndex	: 'createdBy',
	         			        		   				text		: 'Created By',
	         			        		   			},
	         			        		   			{
	         			        		   				xtype		: 'gridcolumn',
	         			        		   				dataIndex	: 'note',
	         			        		   				text		: 'Notes',
	         			        		   				renderer	: function(value) {
	         			        		   					
	         			        		   					return '<div>'+ value + '</div>';
	         			        		   				}
	         			        		   			}]
	         			        	  }
	         			        	   ]
         			   }
         			   ];
    		}

});