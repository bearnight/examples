Ext.define('usercontrol.view.resourceForm',
	{
		extend:'Ext.container.Container',
		requires:['usercontrol.component.resourceForm'],
		alias:'widget.resforms',
		items:
			[
				{
					xtype:'container',
					autoFit:true,
					items:
						[
							{
								xtype:'resources',
								layout:'vbox',
								width:400,
							}
						]
				}
			],
	})