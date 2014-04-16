Ext.define('usercontrol.view.checkuser',
		{
			extends:'Ext.container.Container',
			requires:['usercontrol.component.getcheckuser'],
			alias:'widget.checkuser',
			items:
				[
				{
					xtype:'container',
					autoFit:true,
					items:
						[
							{
								xtype:'getcheckuser',
								layout:'vbox',
								width: 400,
								
							}]
				 }]
		})