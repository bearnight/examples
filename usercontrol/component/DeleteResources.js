Ext.define('usercontrol.component.DeleteResources',
	{
		extend:'Ext.form.Panel',
		alias:'widget.DeleteResources',
		title:'Add users to Resources',
		url:'/usercontrol/data/addresourcesemp',
		id:'addResources',
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
						 		id:'emp_id',
						 		readOnly:true
						 	},
							{
								xtype:'combobox',
								fieldLabel:'Resource Name:',
								name:'resource_idss',
								id:'resource_idss',
								valueField:'resource_id',
								displayField:'resource_name',
								store:'res',
							},
							{
								xtype:'combobox',
								fieldLabel:'Role',
								store:'roles',
								id:'roless',
								valueField:'id',
								displayField:'role_name',
								name:'base_roless'
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