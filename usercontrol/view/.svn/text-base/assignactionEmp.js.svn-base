Ext.define('usercontrol.view.assignactionEmp',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller','usercontrol.component.addAction'],
		alias:'widget.assignaction',
		items:
			[
			 	{
			 		xtype:'container',
			 		autoFit:true,
			 		layout:'vbox',
			 		items:
			 		[
//			 		 {
//			 			xtype:'search',
//			 			
//			 		 },


						{
							xtype:'gridpanel',
							id:'assignGridss',
							name:'assignGrid',
//							store:'assingEmp',
							title:'Employees',
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
									{text:'First Name', dataIndex:'first_name'},
									{text:'Last name', dataIndex:'last_name'},
									{text:'Resource Name', dataIndex:'resource_idss'},
									{text:'Role Name', dataIndex:'roless'},
									
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