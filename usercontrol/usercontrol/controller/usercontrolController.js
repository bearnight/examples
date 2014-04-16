Ext.define('usercontrol.controller.usercontrolController',
	{ 
		extend:'Ext.app.Controller',
		stores:['userlists','roles','location','res','actions','reslist','assingEmp','assingactionEmp','resourceEmp'],
		models:['userlist','rolesModel','locations','resModel','actionModel','reslistModel','assignModel','assignactionModel','resourceModel'],
		init: function()
		{
			this.control(
					{
						'employee button[type="submit"]':
							{
								click: this.add,
							},
							'employee button[type="reset"]':
								{
									click:this.reset
								},
							'resources button[type="submit"]':
								{
									click:this.update,
								},
							'resources button[type="reset"]':
								{
									click:this.reset
								},
							'actionForm button[type="submit"]':
								{
									click:this.addactions,
								},
							'actionForm button[type="reset"]':
								{
									click:this.reset,
								},
							'addResources button[type="reset"]':
								{
									click:this.reset,
								},
							'addAction button[type="reset"]':
								{
									click:this.reset,
								},
							'addAction button[type="submit"]':
								{
									click:this.loaderactionadd,
								},
								'assign button[type="reset"]':
									{
										click:this.reset,
									},
							'addResources button[type="submit"]':
								{
									click:this.addResources,
								},
							'#grided':
								{
									selectionchange: this.loadForm,
//									afterrender:this.loadStore,
								},
							'#resgrid':
									{
										selectionchange:this.loadresourcesForm,

									},
							'#actiongrid':
								{
									selectionchange:this.loadactionForm
								},
							'#assignGrid':
								{
									selectionchange:this.loadEmp,
								},
							'#assignAction':
								{
									selectionchange:this.loaderaction,
								},
							'#resourceGrid':
								{
									selectionchange:this.loaderaction,
								},
							'assign button[type="submit"]':
								{
									click:this.search,
								},
					})
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
							grid.store.load({params:{fname:formValues.fname,lname:formValues.lname}});
							Ext.getCmp('search').hide();
							Ext.getCmp('addResources').show();
							Ext.getCmp('assignGrid').show();
					
							form=_this.up('form').getForm();
						},
//						failure:function(form,response)
//						{
//							console.log('failed')
//							Ext.getCmp('boxlbl').true,
//							form=_this.up('form').getForm();
//							form.reset()
//						}
						
					})
		},
		addResources:function(_this,e,eOpts)
		{
			var formValues=_this.up('form').getValues(),
			form=_this.up('form').getForm(),
			grid=Ext.getCmp('resourceGrid');
			form.submit(
					{
						success:function(form,response)
						{
							Ext.getCmp('addResources').hide();
							Ext.getCmp('assignGrid').hide();
							Ext.getCmp('addAction').show();
							Ext.getCmp('resourceGrid').show();
							var store = this.getStore('loadresourceAction');
							store.filter('resource_idss',value);
							grid.store.load({params:{resource_idss:formValues.resource_idss}});
							form=_this.up('form').getForm();
						
						}
					})
		},
		reset: function(_this,e,eOpts)
		{
			form=_this.up('form').getForm();
			form.reset()
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
									grid.store.load();
									form=_this.up('form').getForm();
									form.reset();
									
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
									grid.getStore('userlists').load();
									form=_this.up('form').getForm();
									form.reset();
								}
							}
						);
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
							grid.store.load();
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
		loadStore:function()
		{
			var rolebox=Ext.getCmp('roles');
			rolebox.getStore().load()
//			this.getStore('location').load(),
//			this.getStore('roles').load()
		}
		
	}
);