Ext.Loader.setConfig({enabled:true})

Ext.application
(
	{
		name:'usercontrol',
		appFolder:'/usercontrol',
		autoCreateViewport:true,
		controllers:['usercontrolController'],
		loadController: function(ctrlrName)
		{
			var ctrlr = this.getController(ctrlrName);
			ctrlr.init();
			
		},
		launch: function()
		{
			
		},
		whoAmI: function()
		{
			
		}
	}
)