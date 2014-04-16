Ext.define('usercontrol.controller.usercontrolController',
	{
		extend:'Ext.app.Controller',
		stores:['userlists','roles','location','res','actions','reslist','assingEmp','assingactionEmp','resourceEmp','assignactions','actionlist','listallusers','userResourceStore'],
		models:['userlist','rolesModel','locations','resModel','actionModel','reslistModel','assignModel','assignactionModel','resourceModel','listalluserModel','userResourceModel'],
		init: function()
		{
			this.control(
					{
						//Employee Tab
						'employee button[id="addUpdate"]':
							{
								click: this.add
							},
							'employee button[id="reset"]':
								{
									click:this.reset
								},
								'employee button[id="delete"]':
									{
										click:this.remove
									},
								'#grided':
								{
									selectionchange: this.loadForm

								},
								//Resource Tab

								'#resgrid':
								{
									selectionchange:this.loadresourcesForm

								},
							'resources button[id="addUpdate"]':
								{
									click:this.update
								},
							'resources button[id="reset"]':
								{
									click:this.reset
								},
							'resources button[id="delete"]':
								{
									click:this.deleteresources
								},
								//Action Tab
							'actionForm button[id="addUpdate"]':
								{
									click:this.addactions
								},
							'actionForm button[id="reset"]':
								{
									click:this.reset
								},
							'actionForm button[id="delete"]':
								{
									click:this.deleteaction
								},

							'#actiongrid':
								{
									selectionchange:this.loadactionForm
								},
							//Assign user to resource
							'assign button[type="reset"]':
								{
									click:this.reset
								},
							'assign button[type="submit"]':
								{
									click:this.search
								},
							'addResources button[type="reset"]':
								{
									click:this.reset
								},
							'addAction button[type="reset"]':
								{
									click:this.reset
								},
							'addAction button[type="submit"]':
								{
									click:this.loaderactionadd
								},
							'addAction button[type="cancel"]':
								{
									click:this.cancel
								},
							'addResources button[type="submit"]':
								{
									click:this.addResources
								},
							'#assignGrid':
								{
									selectionchange:this.loadEmp
								},
							'#assignAction':
								{
									selectionchange:this.loaderaction
								},
							'#resourceGrid':
								{
									selectionchange:this.loaderaction
								},
							'#grideds':
								{
								celldblclick:this.getEverything
								},
							'#userResource':
								{
									celldblclick:this.deleteuserResource
								}
					});
		},
		search:function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('assignGrid');
			form.submit(
					{
						success:function(form,response)
						{

							Ext.getCmp('search').hide();
							Ext.getCmp('addResources').show();
							Ext.getCmp('addresourceView').show();
							Ext.getCmp('assignGrid').show();
							grid.store.load({params:{fname:formValues.fname,lname:formValues.lname}});
							form=_this.up('form').getForm();
							form.reset();
						},
					})
		},
		addResources:function(_this,e,eOpts)
		{
//			var controller=this;

			// var formValues=_this.up('form').getValues(),

			form=_this.up('form').getForm(),
			grid=Ext.getCmp('addactions');
			var eid= Ext.getCmp('emp_id').getValue();
			var rid=Ext.getCmp('resource_idss').getValue();
			form.submit(
					{
						success:function(form,response)
						{
							var resp = Ext.decode(response.response.responseText);
							Ext.getCmp('addResources').hide();
							Ext.getCmp('assignGrid').hide();
							Ext.getCmp('addactionView').show();
							Ext.getCmp('addAction').show();
//							Ext.getCmp('actionGrid').show();
							
							Ext.getCmp('emp_ids').setValue(eid);
							Ext.getCmp('resource_idsss').setValue(rid);
							grid.getStore().load(
								{
									params : 
									{
										resource_id : resp.data[0].RESOURCE_ID
									}
								}
							);
							form = _this.up('form').getForm();
							Ext.getCmp('grideds').getStore().load();
							form.reset();
							
						}
					})
		},
		reset: function(_this,e,eOpts)
		{
	
					form=_this.up('form').getForm();
					form.reset();

			
		},
		cancel:function(_this,e,eOpts)
		{
			form=_this.up('form').getForm();
			form.reset();
			Ext.getCmp('addactionView').hide();
			Ext.getCmp('addAction').hide(); 
			Ext.getCmp('search').show();
		},
		addactions:function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('actiongrid');
			form.submit(
							{
								success:function(form,response)
								{
									Ext.getCmp('grideds').getStore().load();
								
									grid.store.load();
									form=_this.up('form').getForm();
									
									form.reset()
								}

							}
						)
		},
		update:function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('resgrid');
			form.submit(
							{
								success:function(form,response)
								{
//									console.log('resgrid');
									grid.store.load();
									form=_this.up('form').getForm();
									form.reset();
									Ext.getCmp('grideds').getStore().load();
//									Ext.getCmp('resgrid').getStore().load();

								}
							}
						);
		},
		add: function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('grided');
			form.submit(
							{
								success:function(form,response)
								{
									grid.store.load();
									Ext.getCmp('grideds').getStore().load();
									form=_this.up('form').getForm();
									form.reset();
								}
							}
						);
		},
		remove:function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('grided');	
			Ext.Msg.show({
							title:'Are you sure?',
							msg:'Are you sure you want to delete?',
							buttons:Ext.Msg.YESNO,
							icon:Ext.Msg.QUESTION,
							fn:function(btn)
							{
								if(btn=='yes')
									{
										Ext.Ajax.request({
															url:'/usercontrol/data/removeuser',
															params:{employee_id: Ext.getCmp('employee_id').value},
															success:function(form,response)
															{
																grid.store.load();
																form=_this.up('form').getForm();
																form.reset();
															}
														});
									}
								else
									{
										grid.store.load();
										form.reset();
										window.location.reload();
									}
							}
			});

			
		},
		loaderactionadd:function(_this,eOpts)
		{
			var formValues =_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('assignAction');
			form.submit(
					{
						success:function(form,response)
						{
							Ext.getCmp('grideds').getStore().load();
							Ext.getCmp('addactionView').hide();
							Ext.getCmp('addAction').hide();
							Ext.getCmp('search').show();
							form=_this.up('form').getForm();
							form.reset();
						}
					})
		},
		loadresourcesForm:function(model,records)
		{
			if(records.length > 0)
			{
				Ext.ComponentQuery.query('resources')[0].getForm().loadRecord(records[0]);
			}
		},
		loadForm:function(model,records)
		{
			if(records.length > 0)
			{
				Ext.ComponentQuery.query('employee')[0].getForm().loadRecord(records[0]);
			}
		},
		loadactionForm:function(model,records)
		{
			if(records.length > 0)
				{
					Ext.ComponentQuery.query('actionForm')[0].getForm().loadRecord(records[0]);
				}
		},
		loadEmp:function(model,records)
		{
			if(records.length >0)
				{
					Ext.ComponentQuery.query('addResources')[0].getForm().loadRecord(records[0]);
				}
		},
		loaderaction:function(model,records)
		{

			if(records.length >0)
				{
					Ext.ComponentQuery.query('addAction')[0].getForm().loadRecord(records[0]);
				}
		},
		getEverything:function(tbl, td, cellIdx, record, tr, rowIdx, e, eOpts)
		{
			Ext.Msg.show({
							title:'Are you sure?',
							msg:'Are you sure you want to delete?',
							buttons:Ext.Msg.YESNO,
							icon:Ext.Msg.QUESTION,
								fn:function(btn)
								{
									if(btn=='yes')
										{
											Ext.Ajax.request({
																url:'/usercontrol/data/removeuseraction',
																params:{employee_id:record.data.employee,resource_id:record.data.idresources,action_id:record.data.idaction},
																success:function(response)
																{
																	Ext.getCmp('grideds').getStore().load();
																}
															});
										}
									else{
										Ext.getCmp('grideds').getStore().load();
										window.location.reload();
									}
								}
						});	
		},
		deleteuserResource:function(tbl,td,cellIdx,record,tr,rowIdx,e,eOpts)
		{	
		
			Ext.Msg.show({
				title:'Are you sure?',
				msg:'Are you sure you want to delete',
				buttons:Ext.Msg.YESNO,
				icon:Ext.Msg.QUESTION,
				fn:function(btn,text){
					if(btn=='yes')
						{
							Ext.Ajax.request({
												url:'/usercontrol/data/deleteuserresource',
												params:{employee_id:record.data.idemployee,resource_id:record.data.idresourcess},
												success:function(response)
												{
													Ext.getCmp('userResource').getStore().load()
												}
											});
						}
					else{
						Ext.getCmp('userResource').getStore().load()
						window.location.reload();
					}
				}
			});

		},
		deleteaction:function(_this,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm();
			Ext.Msg.show({
							title:'Are you sure?',
							msg:'Are you sure you want to delete',
							buttons:Ext.Msg.YESNO,
							icon:Ext.Msg.QUESTION,
							fn:function(btn){
								if(btn=='yes')
									{
										Ext.Ajax.request({
															url:'/usercontrol/data/deleteaction',
															params:{action_id:formValues.action_id,resource_id:formValues.resource_id},
															success:function(response)
															{
																Ext.getCmp('actiongrid').getStore().load();
																form.reset();
															}
														});
									}
								else
									{
									Ext.getCmp('actiongrid').getStore().load();
									form.reset();
									window.location.reload();
									}

							}
			});	

		},
		
		deleteresources:function(_this,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm();
			Ext.Msg.show({
							title:'Are you sure?',
							msg:'Are you sure you want to delete',
							buttons:Ext.Msg.YESNO,
							icon:Ext.Msg.QUESTION,
							fn:function(btn){
												if(btn=='yes')
													{
														Ext.Ajax.request({
															url:'/usercontrol/data/resourcesdelete',
															params:{resource_id:formValues.resource_id},
															success:function(response)
															{
																Ext.getCmp('resgrid').getStore().load();
																form.reset();
															}
														});
													}
												else
													{
														Ext.getCmp('resgrid').getStore().load();
														form.reset();
														window.location.reload();
													}
											}		
						});
		}
		
	}
);