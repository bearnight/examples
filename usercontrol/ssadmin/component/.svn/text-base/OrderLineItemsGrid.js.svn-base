Ext.define('ssAdmin.component.OrderLineItemsGrid', {
	extend	: 'Ext.grid.Panel',
    alias	: 'widget.orderLineItemsGrid',
    //store: 'Orders',
    titleCollapse: false,
    selModel: Ext.create('Ext.selection.CheckboxModel'),
    initComponent: function(){
    			_this = this;
    			_this.columns = _this.buildColumns;
    			_this.callParent();
    },
    buildItemss	: function(p, value, record) {
    	console.log(record);
    	ret = '<div class="orderItemColum">';
    	ret += 	  '<div>'+record.data.productName+'</div>';
    	ret +=    '<div class="left itemlabel">Student:</div><div class="right">'+record.data.student.firstName + ' ' + record.data.student.lastName+'</div>' ;
    	ret +=    '<div class="left itemlabel">Package:</div><div class="right">'+record.data.package.name+'</div>' ;
    	ret +=    '<div class="left itemlabel">Base Price:</div><div class="right">'+Ext.util.Format.usMoney(record.data.basePrice)+'</div>' ;
    	ret +=    '<div class="left itemlabel">Package Price:</div><div class="right">'+Ext.util.Format.usMoney(record.data.package.price)+'</div>' ;
    	//NameStamp
    	if(record.data.namestamp.quantity > 0)
    		{
    		ret += '<div>NameStamp('+record.data.namestamp.layout+')</div>';
    		ret += '<div class="left itemlabelInset">Line 1: <span class="itemNSLine">'+record.data.namestamp.lines[0].line+'</span></div>';
    		ret += '<div class="right">'+(record.data.namestamp.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.namestamp.lines[0].price)+'</div>';
    		if(record.data.namestamp.lines[1].line.length > 0)
    			{
    			ret += '<div class="left itemlabelInset">Line 1: <span class="itemNSLine">'+record.data.namestamp.lines[1].line+'</span></div>';
    			ret += '<div class="right">'+(record.data.namestamp.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.namestamp.lines[1].price)+'</div>';
    			}
    		}
    	Ext.Array.each(record.data.namestamp.icons,function(item,index,allItems){
    		if(item.id > 0){
    			ret += '<div class="left">Icon - '+item.id+' - '+item.name+'</div>';
    			ret += '<div class="right">'+(item.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(item.price) + '</div>';
    		}
    	});
    	//Plastic cover
    	if(record.data.plasticCover.quantity > 0)
    		{
    			ret += '<div class="left">Plastic Cover:</div>';
    			ret += '<div class="right">'+(record.data.plasticCover.partOfPackage)?Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.plasticCover.price)+'</div>';
    		}
    	//Itag
    	if(record.data.itag.quantity > 0)
		{
		ret += '<div>itag('+record.data.itag.layout+')</div>';
		ret += '<div class="left itemlabelInset">Line 1: <span class="itemNSLine">'+record.data.itag.lines[0].line+'</span></div>';
		ret += '<div class="right">'+(record.data.itag.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.itag.lines[0].price)+'</div>';
		if(record.data.itag.lines[1].line.length > 0)
			{
			ret += '<div class="left itemlabelInset">Line 1: <span class="itemNSLine">'+record.data.itag.lines[1].line+'</span></div>';
			ret += '<div class="right">'+(record.data.itag.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.itag.lines[1].price)+'</div>';
			}
		}
		Ext.Array.each(record.data.itag.icons,function(item,index,allItems){
			if(item.id > 0){
				ret += '<div class="left">Icon - '+item.id+' - '+item.name+'</div>';
				ret += '<div class="right">'+(item.partOfPackage)? Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(item.price) + '</div>';
			}
		});
		//CeBuzz
		if(record.data.cebuzz.quantity > 0)
		{
			ret += '<div class="left">CeBuzz:</div>';
			ret += '<div class="right">'+(record.data.cebuzz.partOfPackage)?Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.cebuzz.price)+'</div>';
		}
		//YearInReview
		if(record.data.yearInReview.quantity > 0)
		{
			ret += '<div class="left">Plastic Cover:</div>';
			ret += '<div class="right">'+(record.data.yearInReview.partOfPackage)?Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.yearInReview.price)+'</div>';
		}
		//AutoGraphSupplement
		if(record.data.autoSupp.quantity > 0)
		{
			ret += '<div class="left">Plastic Cover:</div>';
			ret += '<div class="right">'+(record.data.autoSupp.partOfPackage)?Ext.util.Format.usMoney(0) : Ext.util.Format.usMoney(record.data.autoSupp.price)+'</div>';
		}
		
		
    	ret += '</div>';
    	
		return ret;
	},
    buildColumns	: [
				{
					dataIndex	: 'id',
					header		: 'Line ID',
					width		: 50
				},
				{
					dataIndex	: 'jobNum',
					header		: 'Job#',
					width		: 70
				},
				{
					dataIndex	: 'item',
					header		: 'Item',
					renderer	: function(p,value,record){
						x = this.buildItemss(p, value, record);
						return x;
						}
				},
				{
					dataIndex	: 'quantity',
					header		: 'QTY',
					width		: 40
				},
				{
					dataIndex	: 'basePrice',
					header		: 'Price',
					renderer	: 'usMoney',
					width		: 70
				},
				{
					dataIndex	: 'subtotal',
					header		: 'Sub Total',
					renderer	: 'usMoney',
					width		: 70
				},
				{
					dataIndex	: 'serviceFee',
					header		: 'Service Fee',
					renderer	: 'usMoney',
					width		: 70
				},
				{
					dataIndex	: 'tax',
					header		: 'Tax',
					renderer	: 'usMoney',
					width		: 50
				},
				{
					dataIndex	: 'total',
					header		: 'Line Total',
					renderer	: 'usMoney',
					width		: 70
				}
           	  ]

});