Ext.define('usercontrol.view.resourceList',
	{
		extend:'Ext.container.Container',
		requires:['usercontrol.component.resourceForm','Ext.grid.PagingScroller'],
		alias:'widget.reslist',
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
							id:'resgrid',
							name:'resgrids',
							store:'res',
							title:'Resources',
							height:250,
							width:420,
							forceFit:true,
							sortable:true,
							viewConfig:
							{
								trackOver: false
							},
							columns:
								[
									{text:'Resource ID', dataIndex:'resource_id' },
									{text:' Name', dataIndex:'resource_name' },
									{text:'URL', dataIndex:'url' },
									{text:'Controller',dataIndex:'controller'}
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