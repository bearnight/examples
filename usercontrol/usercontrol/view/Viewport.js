Ext.define('usercontrol.view.Viewport',
	{
		extend:'Ext.tab.Panel',
		requires:['usercontrol.view.employeeList','usercontrol.view.usersForm','usercontrol.view.resourceList','usercontrol.view.resourceForm','usercontrol.view.actionList',
		          'usercontrol.view.actionsView','usercontrol.view.assignEmp','usercontrol.view.assignAction','usercontrol.view.resourceEmp'],
		
		id:'viewport',
		activeTab:3,
		items:
			[
				{
					title:'Whiteboard Users',
					width:1000,
					layout:'column',	
						items:
							[
								{
									xtype:'emplist',
									padding:10,
								},
								{
									xtype:'forms',
									padding:10,
								}
							],
				},
				{
					title:'Resources',
					layout:'column',
					width:1000,
				
					items:
						[
							{
								xtype:'reslist',
								padding:10,
							},
							{
								xtype:'resforms',
								padding:10,
							}
						]
				},
				{
					title:'Actions',
					layout:'column',
					width:1000,
					items:
						[
							{
								xtype:'actionlist',
								padding:10,
							},
							{
								xtype:'actionsView',
								padding:10,
							}
						]
				},
				{
					title:'Assign Employees',
					layout:'column',
					width:1000,
					items:
						[
						 {
						 	xtype:'assign',
						 	padding:10,
						 },
//						 {
//							 xtype:'addresourceView'
//						 },
						 {
							 xtype:'assignAction',
								 padding:10,
						 },
						 {
							 xtype:'resourceEmp',
							 padding:10,
						 }

						]
			
				}
			],
			
		renderTo:'wb-content'
	}
);