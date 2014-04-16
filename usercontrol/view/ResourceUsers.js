Ext.define('usercontrol.view.ResourceUsers',{
	extend:'Ext.container.Container',
	requires:['Ext.grid.PagingScroller'],
	alias:'widget.ResourceUsers',
	id:'ResourceUsers',
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
						id:'userResource',
						name:'userResource',
						store:'userResourceStore',
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
								{text:'Name', dataIndex:'full_names'},
								{text:'Resource Name',dataIndex:'nameresource'},
								{text:'Resource ID',dataIndex:'idresourcess',hidden:true},
								{text:'Employee ID',dataIndex:'idemployee', hidden:true}
							],

					},

					
				]


		 	}
		],

		initComponet:function()
		{
			this.callParent(arguments);
		}
});