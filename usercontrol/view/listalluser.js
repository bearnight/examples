Ext.define('usercontrol.view.listalluser',{
	extend:'Ext.container.Container',
	requires:['Ext.grid.PagingScroller'],
	alias:'widget.listalluser',
	id:'listalluser',
	requires:['usercontrol.component.delete'],
	items:
		[
		 	{
		 		xtype:'container',
		 		autoFit:true,
		 		layout:'vbox',
		 		items:
		 		[
					{
						xtype:'gridpanel',
						id:'grideds',
						name:'griddata',
						store:'listallusers',
						title:'Employees Resources',
						height:250,
						width:625,
						sortable:true,
						forceFit:true,
				        viewConfig: {
				            trackOver: false
				        },
						columns:
							[
								{text:'Name', dataIndex:'full_name'},
								{text:'Resource Name',dataIndex:'resource_names'},
								{text:'Action Name',dataIndex:'action_names'},
								{text:'Action ID',dataIndex:'idaction',hidden:true},
								{text:'Resource ID',dataIndex:'idresources',hidden:true},
								{text:'Employee ID',dataIndex:'employee', hidden:true}
							],
//							dockedItems: [{
//								xtype:'toolbar',
//								dock :'bottom',
//								ui   :'footer',
//								items:[{
//									xtype:'deleteButtons'
//								}]
//							}],
					},

					
				]


		 	}
		],

		initComponet:function()
		{
			this.callParent(arguments);
		}
});