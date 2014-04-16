Ext.define('ssAdmin.view.Schools', {
	extend: 'Ext.container.Container',
	alias: 'widget.schools',
	requires: ['ssAdmin.component.SchoolSearchForm',
	           'ssAdmin.component.SchoolTree'],
    layout: {
        type: 'border'
    },
    items: [{
        xtype: 'panel',
        width: 235,
        collapsible: true,
        hideCollapseTool: true,
        preventHeader: true,
        region: 'west',
        items: [{
            xtype: 'panel',
            collapsible: true,
            border: 0,
            height: 105,
            title: 'School Search',
            id: 'schoolSearchPanel',
            header: {
            	titleAlign: 'center'
            },
            items: [{
            	xtype: 'schoolSearchForm'
            }]
        }, {
            xtype: 'panel',
            border: 0,
            collapsed: true,
            collapsible: true,
            id: 'schoolResultsPanel',
            title: 'School Results',
            header: {
            	titleAlign: 'center'
            },
            items: [{
            	xtype: 'schoolTree',
            	border: 0,
                height: 822,
            	width: 234
            }]
        }]
    }, {
        xtype: 'panel',
        collapsed: true,
        collapsible: true,
        hideCollapseTool: true,
        preventHeader: true,
        id: 'orderResultsPanel',
        region: 'west',
        split: true,
        width: 250
    }, {
        xtype: 'panel',
        width: 150,
        collapsible: true,
        hideCollapseTool: true,
        preventHeader: true,
        region: 'center',
        split: true
    }],
    initComponent: function() {
    	
        var me = this;

        me.callParent(arguments);
    }
});
