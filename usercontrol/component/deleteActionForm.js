Ext.define('usercontrol.component.deleteActionForm',{
	extend:'Ext.form.Panel',
	alias :'widget.deleteActionForm',
	id    :'deleteActionForm',
	initComponent:function(){
		this.items =[{
			xtype:'panel',
			columnWidth:.4,
			padding:'0 0 0 5',
			bodyPadding:10,
			bodyPadding:10,
			items:[
				{
					xtype:'textfield',
					fieldLabel:'Employee ID',
					name:'employee',
					id:'employee',
				},
				{
					xtype:'textfield',
					fieldLabel:'Resources ID',
					name:'idresources',
					id:'idresources'
				},
				{
					xtype:'textfield',
					fieldLabel:'Action ID',
					name:'idaction',
					id:'idaction'
				}
			]
		}];
		this.callParent(arguments);
	}
});