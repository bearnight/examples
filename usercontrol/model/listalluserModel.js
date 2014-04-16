Ext.define('usercontrol.model.listalluserModel',
		{
			extend:'Ext.data.Model',
			fields:
					[
						{	name:'namef',mapping:'first_name'},
						{	name:'namel',mapping:'last_name'},
						{	name:'idresources',mapping:'resource_id'},
						{	name:'resource_names',mapping:'resource_name'},
						{	name:'idaction',mapping:'action_id'},
						{	name:'action_names',mapping:'action_name'},
						{
							name:'full_name',convert:function(value,record)
							{
								return record.get('namef')+' '+record.get('namel');
							}
						},
						{name:'employee',mapping:'employee_id'}
					],
		}
);
	