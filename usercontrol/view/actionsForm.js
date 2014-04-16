Ext.define('usercontrol.view.actionsForm',
	{
		extend:'Ext.container.Container',
		requires:['usercontrol.component.actionsForm'],
		alias:'widget.actionsView',
		items:
			[
				{
					xtype:'container',
					autoFit:true,
					items:
						[
							{
								xtype:'actionForm',
								layout:'vbox',
								width:400,
							}
						]
				}
			],
	})