Ext.define('usercontrol.component.searchBox',
	{
			extend:'Ext.form.Panel',
			alias:'widget.search',
			title:'Action',
			id:'search',
			autoFit:true,
			hidden:false,
			url:'/usercontrol/data/getdempassigns',
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
							 		id:'fname',
							 		name:'fname',
							 	},
							 	{
							 		xtype:'textfield',
							 		fieldLabel:' Serch by Last Name',
							 		id:'lname',
							 		name:'lname',
							 	},
							 	{
							 		xtype:'label',
							 		id:'boxlbl',
							 		hidden:true,
							 		text:'Invaild user',
							 		style:{
							 			  	color:'red',
							 			   }
							 	}
							 	
							],
							buttons:
								[
									{
										type:'submit',
										text:'Search',
									},
									{
										type:'reset',
										text:'Reset',
									}
									
								]
					}
				]
	}

);