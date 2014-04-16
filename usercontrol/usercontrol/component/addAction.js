Ext.define('usercontrol.component.addAction',
	{
		extend:'Ext.form.Panel',
		alias:'widget.addAction',
		id:'addAction',
		title:'Add users to Action',
		url:'/usercontrol/data/loadresourceAction',
		hidden:true,
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
						 		xtype:'textfield',
						 		fieldLabel:'Search for user',
						 		name:'emp_id',
						 		readOnly:true,
						 	},
							{
								xtype:'textfield',
								fieldLabel:'Resource Name:',
								name:'RESOURCE_ID',
								id:'RESOURCE_ID',
//								valueField:'resource_id',
//								displayField:'resource_name',
//								store:'res',
								readOnly:true
							},
							{
								xtype:'combobox',
								fieldLabel:'Actions:',
								name:'addactions',
								id:'addactions',
								valueField:'action_id',
								displayField:'action_name',
								store:'actions',
							},
						],
						buttons:
							[
								{
									type:'submit',
									text:'Add New Resources',
								},
								{
									type:'reset',
									text:'Reset',
								}
								
							]
			 	}
			]
	})