Ext.define('usercontrol.view.employeeList',
	{
		extend:'Ext.container.Container',
		requires:['usercontrol.component.employeeForm','Ext.grid.PagingScroller'],
		alias:'widget.emplist',
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
							id:'grided',
							name:'griddata',
							store:'userlists',
							title:'Employees',
							height:250,
							width:625,
							sortable:true,
					        viewConfig: {
					            trackOver: false
					        },
							columns:
								[
									{text:'Employee ID', dataIndex:'employee_id'},
									{text:'First Name', dataIndex:'first_name'},
									{text:'Last name', dataIndex:'last_name'},
									{text:'Role', dataIndex:'base_role'},
									{text:'Inks Contact ID', dataIndex:'contactid'},
									{text:'Location', dataIndex:'location_id'}
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