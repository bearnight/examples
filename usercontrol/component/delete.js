Ext.define('usercontrol.component.delete',{
	extend:'Ext.container.Container',
	alias:'widget.deleteButtons',
	id:'deleteButtons',
	initComponent:function(){
		this.items=[
//		{
//			xtype:'button',
//			text :'RESET',
//			id   :'resets'
//		},
		{
			xtype:'button',
			text :'DELETE',
			id   :'deletes',
		}];
		this.ui='footer';
		this.callParent(arguments);
	}
});