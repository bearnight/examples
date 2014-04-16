Ext.define('usercontrol.component.getcheckuser',
		{
			extend:'Ext.form.Panel',
			alias:'widget.getcheckuser',
			title:'Check User',
			url:'/usercontrol/data/checkUser',
			id:'getcheckuser',
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
								fieldLabel:'First Name',
								name:'getcheckuserFname',
								id:'getcheckuserFname',
								allowBlank:false,
							},
							{
								xtype:'textfield',
								fieldLabel:'Last Name',
								name:'getcheckuserLname',
								id:'getcheckuserLname',
								allowBlank:false,
							}
						],
						buttons:
							[
							 	{
							 		type:'submit',
							 		text:'Check',
							 	},
							 	{
							 		type:'Rest',
							 		text:'Reset',
							 	}
							]
				 
				 }]

		})