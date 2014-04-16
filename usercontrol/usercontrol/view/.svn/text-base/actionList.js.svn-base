Ext.define('usercontrol.view.actionList',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller','usercontrol.component.actionsForm'],
		alias:'widget.actionlist',
		items:
			[
			 	{
			 		xtype:'container',
//			 		autoFit:true,
			 		layout:'vbox',
			 		items:
			 		[
						{
							xtype:'gridpanel',
							id:'actiongrid',
							name:'actiongrid',
							store:'actions',
							title:'Actions',
							height:250,
							width:535,
							sortable:true,
							viewConfig:
							{
								trackOver: false
							},
							columns:
								[
									{text:'Resource ID', dataIndex:'resource_name' },
									{text:' Action ID',  dataIndex:'action_id' },
									{text:'Action Name', dataIndex:'action_name'  },
									{text:'Action',      dataIndex:'addaction' },
									{text:'URL',         dataIndex:'urls'}
								]
						},
					]
				}
			],
		initComponet:function()
		{
			this.callParent(arguments);
		},
	}
);