Ext.define('usercontrol.view.resourceEmp',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller','usercontrol.component.addAction'],
		alias:'widget.resourceEmp',
		items:
			[
			 	{
			 		xtype:'container',
			 		autoFit:true,
			 		layout:'hbox',
			 		items:
			 		[

						{
							xtype:'gridpanel',
							id:'resourceGrid',
							name:'resourceGrid',
							store:'resourceEmp',
							title:'Resources',
							height:250,
							width:625,
							sortable:true,
							viewConfig:
							{
								trackOver: false
							},
							hidden:true,
							columns:
								[
								 	{text:'Employee ID', dataIndex:'emp_id'},
								 	{text:'First Name',dataIndex:'FIRST_NAME'},
								 	{text:'Last Name',dataIndex:'LAST_NAME'},
									{text:'Resource Name', dataIndex:'RESOURCE_ID'},
									{text:'Role ID', dataIndex:'roless'},
									
								]
						},
					]
			 	}
			],
			initComponet:function()
			{
				this.callParent(arguments);
			}
	});