Ext.define('usercontrol.component.addAction',
	{
		extend:'Ext.form.Panel',
		alias:'widget.addAction',
		id:'addAction',
		title:'Add users to Action',
		url:'/usercontrol/data/placeaction',
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
						 		fieldLabel:'user',
						 		name:'emp_id',
						 		id:'Demp_ids',
						 		readOnly:true,
						 		hidden:true,
						 	},
							{
								xtype:'textfield',
								fieldLabel:'Resource Name:',
								name:'resource_idsss',
								id:'resource_idsss',
								readOnly:true,
								hidden:true,
							},
							{
								xtype:'combobox',
								fieldLabel:'Actions:',
								name:'addactions',
								id:'addactions',
								valueField:'action_id',
								displayField:'action_name',
								store:'actionlist',
							},
						],
						buttons:
							[
								{
									type:'submit',
									text:'assign Action',
								},
								{
									type:'reset',
									text:'Reset',
								},
								{
									type:'cancel',
									text:'cancel',
								}
							]
			 	}
			]
	})