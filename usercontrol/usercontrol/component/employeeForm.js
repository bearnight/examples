Ext.define('usercontrol.component.employeeForm',
	{
		extend:'Ext.form.Panel',
		alias:'widget.employee',
		url:'/usercontrol/data/addedituser',
		title:'Employee',
		
		items:
			[
				{
					xtype:'panel',
					columnWidth:.4,
					padding:'0 0 0 5',
					bodyPadding:10,
					bodyPadding:10,
					items:
						[
							{
								xtype:'textfield',
								fieldLabel:'Employee ID',
								name:'employee_id',
								id:'employee_id',
								
							},
							{
								xtype:'textfield',
								fieldLabel:'First Name',
								name:'first_name',
								id:'first_name'
							},
							{
								xtype:'textfield',
								fieldLabel:'Last Name',
								name:'last_name',
								id:'last_name'
							},
							{
								xtype:'combobox',
								fieldLabel:'Location',
								store:'location',
								id:'location_id',
								valueField:'id',
								displayField:'name',
								name:'location_id',
								queryMode:'local'
							},
							{
								xtype:'combobox',
								fieldLabel:'Role',
								store:'roles',
								id:'roles',
								valueField:'id',
								displayField:'role_name',
								name:'base_role'
							},
							{
								xtype:'textfield',
								fieldLabel:'inks Contact ID',
								name:'contactid',
								id:'contactid'
							}
						],
						buttons:
							[
							 	{
							 		type:'submit',
							 		text:'Add/Update'
							 	},
							 	{
							 		type:'reset',
							 		text:'Reset'
							 	}
							 ],
				}
			]
	})