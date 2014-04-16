Ext.define('usercontrol.view.assignEmp',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller','usercontrol.component.searchBox'],
		alias:'widget.assign',
		items:
			[
			 	{
			 		xtype:'container',
			 		autoFit:true,
			 		layout:'vbox',
			 		items:
			 		[
			 		 {
			 			xtype:'search',
			 			
			 		 },
			 		 {
			 			xtype:'addResources',
		 				padding:10,
			 		 },
						{
							xtype:'gridpanel',
							id:'assignGrid',
							name:'assignGrid',
							store:'assingEmp',
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
//									{text:'Resource Name', dataIndex:'resource_idss'},
//									{text:'Role Name', dataIndex:'roless'},
									
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