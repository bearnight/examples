Ext.define('usercontrol.view.actionEmp',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller','usercontrol.component.addAction','usercontrol.component.addResources'],
		alias:'widget.actionEmp',
		id:'actionEmp',
		
		items:
			[
			 	{
			 		xtype:'container',
//			 		autoFit:true,
			 		layout:'hbox',
			 		items:
			 		[

						{
							xtype:'gridpanel',
							id:'actionGrid',
							name:'actionGrid',
							store:'resourceEmp',
							title:'action',
							height:1000,
							width:1250,
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