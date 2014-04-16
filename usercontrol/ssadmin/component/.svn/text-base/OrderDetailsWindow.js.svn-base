var infoWindow = new Ext.XTemplate('<div><b>{order_number}</b></div>');
infoWindow.compile();

Ext.define('ssAdmin.component.OrderDetailsWindow', {
	extend: 'Ext.window.Window',
	requires: ['ssAdmin.view.OrderDetails'],
    alias : 'widget.orderDetailsWindow',
    title: 'Order ######',
    //height: 800,
    width: 900,
    layout: 'fit',
    modal: true,
    tpl: infoWindow
});