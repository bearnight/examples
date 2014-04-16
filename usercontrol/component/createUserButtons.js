Ext.define('usercontrol.component.createUserButtons',{
	extend:'Ext.container.Container',
	alias:'widget.createUserButtons',
	id:'createUserButtons',
	initComponent:function(){
		this.items=[{
			xtype:'button',
			text :'ADD/UPDATE',
			id   :'addUpdate',
		},
		{
			xtype:'button',
			text :'RESET',
			id   :'reset'
		},
		{
			xtype:'button',
			text :'DELETE',
			id   :'delete',
		}];
		this.ui='footer';
		this.callParent(arguments);
	}
});