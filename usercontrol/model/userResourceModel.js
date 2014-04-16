Ext.define('usercontrol.model.userResourceModel',
		{
			extend:'Ext.data.Model',
			fields:
					[
						{	name:'namefirst',mapping:'first_name'},
						{	name:'namelast',mapping:'last_name'},
						{	name:'idresourcess',mapping:'resource_id'},
						{	name:'nameresource',mapping:'resource_name'},
						{
							name:'full_names',convert:function(value,record)
							{
								return record.get('namefirst')+' '+record.get('namelast');
							}
						},
						{name:'idemployee',mapping:'employee_id'}
					],
		}
);
	