Ext.define('ssAdmin.store.AccountTreeStore', {
	extend:'Ext.data.TreeStore',
	proxy: {
		type: 'ajax',
		url: '/ssadmin/data/accounts',
		reader: {
			type: 'json',
			root: 'data'
		}
	},
	listeners: {
        
        append: function(_this, node, index, eOpts) {
        	
        	if (node.data.depth === 1) {
        		
        		node.data.text = Ext.util.Format.ellipsis(node.data.text, 40);
        	}
        	else if (node.data.depth === 2) {
        		
        		node.appendChild({
        			'text': 'Ads',
        			'id': 'ads',
        			'leaf': true
        		});
        		
        		node.appendChild({
        			'text': 'CCP',
        			'id': 'ccp',
        			'leaf': true
        		});
        		
        		node.appendChild({
        			'text': 'Orders',
        			'id': 'orders',
        			'leaf': true
        		});
        	}
        }
    }
});