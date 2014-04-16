Ext.define('usercontrol.view.assignAction',
	{
		extend:'Ext.container.Container',
		requires:['Ext.grid.PagingScroller'],
		alias:'widget.assignAction',
		items:
			[
			 	{
			 		xtype:'container',
			 		autoFit:true,
			 		layout:'vbox',
			 		items:
			 		[
			 		 {

			 		 },
						{
							xtype:'gridpanel',
							id:'assignAction',
							name:'assignAction',
							store:'assingactionEmp',
							title:'Actions',
							height:250,
							width:450,
							sortable:true,
							viewConfig:
							{
								trackOver: false
							},
							hidden:true,
							columns:
								[
									{text:'First Name', dataIndex:'fname'},
									{text:'Last name', dataIndex:'lname'},
									{text:'Resource Name', dataIndex:'resource_action'},
									{text:'Action Name', dataIndex:'addactions'},
									
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