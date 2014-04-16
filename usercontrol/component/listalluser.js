Ext.define('usercontrol.component.listalluser',{
	extend:'Ext.container.Container',
	alias :'widget.listalluser',
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
						id:'listallusers',
						name:'listallusers',
//						store:'listallusers',
						title:'Employees',
						height:250,
						width:625,
						sortable:true,
//				        viewConfig: {
//				            trackOver: false
//				        },
//						columns:
//							[
//								{text:'Employee ID', dataIndex:'employee_id'},
//								{text:'First Name', dataIndex:'first_name'},
//								{text:'Last name', dataIndex:'last_name'},
//								{text:'Role', dataIndex:'role_name'},
//								{text:'Inks Contact ID', dataIndex:'contactid'},
//								{text:'Location', dataIndex:'location_id'}
//							]
					},
				]
		 	}
		],
		initComponet:function()
		{
			this.callParent(arguments);
		}
});