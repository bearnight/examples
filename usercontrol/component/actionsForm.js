Ext.define('usercontrol.component.actionsForm',
	{
		extend:'Ext.form.Panel',
		alias:'widget.actionForm',
		url:'/usercontrol/data/addaction',
		title:'Action',
		requires:'usercontrol.component.createUserButtons',
		items:
			[
				{
					xtype:'panel',
					columnWidth:.4,
					padding:'0 0 0 5',
					bodyPadding:10,
					items:
						[
							{
								xtype:'combobox',
								fieldLabel:'Resource Name:',
								name:'resource_id',
								id:'resource_ids',
								valueField:'resource_id',
								displayField:'resource_name',
								store:'res',
							},
							{
								xtype:'textfield',
								fieldLabel:'Action ID:',
								name:'action_id',
								id:'action_id',
								readOnly:true,
							},
							{
								xtype:'textfield',
								fieldLabel:'Action Name:',
								name:'action_name',
								id:'action_name'
							},
							{
								xtype:'textfield',
								fieldLabel:'Action:',
								name:'addaction',
								id:'addaction'
							},
							{
								xtype:'textfield',
								fieldLabel:'URL:',
								name:'urls',
								id:'urls'
							}
						],
						dockedItems:[{
							xtype:'toolbar',
							dock:'bottom',
							ui:'footer',
							items:[{
								xtype:'createUserButtons'
							}]
			}]	
				}
			]
	})