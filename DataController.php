<?php
class YBKInvoicer_DataController extends Zend_Controller_Data {
	protected $_employeeSession;
	public function init(){

		$session =  new Zend_Session_Namespace( Zend_Auth::getInstance()->getStorage()->getNamespace() );
		$this->_employeeSession = $session->_accountDetails;
	}
	public function helloworldAction() {
    	echo json_encode('hello world');
    }

    public function salestreeAction() {
		$invoiceNum=$this->getRequest()->getParam('salesrep');
		$loop = $this->getRequest()->getParam('searchloop');
		$request = $this->getRequest();
		$params  = $request->getParams();
		$mapper  = new YBKInvoicer_Model_SalesTreeMapper();
		$mappers = new YBKInvoicer_Model_SearchMapper();
		$invmapper = new YBKInvoicer_Model_invoiceMapper();
		$accMapper = new YBKInvoicer_Model_accountMapper();
		$jobMapper = new YBKInvoicer_Model_jobnumMapper();
		$statusMapper = new YBKInvoicer_Model_invoicestatusMapper();
		$salesRepBox = $this->getRequest()->getParam('salesRepbox');
// 		var_dump(count($params));
// 		$node = explode('/', $params['node']);
// 		count($node);

// 		var_dump($salesRepBox);

		if ($salesRepBox=='true' || $salesRepBox==='Y')
		{
			$salesMock= new YBKInvoicer_Model_salesMock();
// 			if ( $params['node'] === 'data' ) {
// 				$salesMockid='1-BLZ';
// 				echo json_encode( array('data' => $salesMock->accountsByRep($salesMockid)) );
// 				return;
// 			}
			$node = explode('/', $params['node']);

			if($loop ==='invoicenum')
			{
				echo json_encode(array('data'=>$invmapper->invoiceByRep($invoiceNum)));
				return;

			}
			elseif($loop ==='accountNumber' || $node[0] === 'account'||$node[0]==='accinvoice')
					{
					if($params['node'] ==='data')
					{

						echo json_encode(array('data'=>$accMapper->getAccounts($invoiceNum)));
						return;

					}
					$node = explode('/', $params['node']);
					if($node[0] === 'account')
					{

						$accinv = $node[1];
						echo json_encode(array('data'=>$accMapper->getAccounts($accinv)));
						return;
					}
					if($node[0]==='accinvoice')
					{
						$accinv = $node[1];
						echo json_encode(array('data'=>$accMapper->invoiceByRep($accinv)));
						return;
					}
					}elseif ($loop ==='jobNumer' || $node[0] ==='jobinvoice'||$node[0]==='jobacc')
				{
					if($params['node'] ==='data')
					{
						echo json_encode(array('data'=>$jobMapper->getinvoicename($invoiceNum)));
						return;
					}
					if($node[0] ==='jobacc')
					{
						$jobacct = $node[1];
						echo json_encode(array('data'=>$jobMapper->getAccounts($jobacct)));
						return;
					}
					if($node[0] ==='jobinvoice')
					{
						$jobinv =$node[1];

						echo json_encode(array('data'=>$jobMapper->invoiceByRep($jobinv)));
					}
				}
			else {
					$salesMockid='1-BLZ';
					echo json_encode( array('data' => $salesMock->accountsByRep($salesMockid)) );
					return;

					if ($node[0] === 'salesRep') {
						$accountrep = $node[1];

						echo json_encode( array('data' => $salesMock->accountsByRep($accountrep)) );
						return;
					} else if($node[0] ==='accounts')
					{
						$jobsrep = $node[1];
						echo json_encode(array('data'=>$salesMock->jobsByRep($jobsrep)));
						return;
					}else if($node[0] ==='invoice')
					{
						$invoiceReps =$node[1];
						echo json_encode(array('data'=> $salesMock->invoiceByRep($invoiceReps)));
						return;
					}
			}
// 			if ($node[0] === 'areaMgr') {

// 				$areaMgrID = $node[1];

// 				echo json_encode( array('data' => $salesMock->salesReps($areaMgrID)) );
// 				return;
// 			}
// 		 if ($node[0] === 'salesRep') {
// 				$accountrep = $node[1];

// 				echo json_encode( array('data' => $salesMock->accountsByRep($accountrep)) );
// 				return;
// 			} else if($node[0] ==='accounts')
// 			{
// 				$jobsrep = $node[1];
// 				echo json_encode(array('data'=>$salesMock->jobsByRep($jobsrep)));
// 				return;
// 			}else if($node[0] ==='invoice')
// 			{
// 				$invoiceReps =$node[1];
// 				echo json_encode(array('data'=> $salesMock->invoiceByRep($invoiceReps)));
// 				return;
// 			}
		}
		else
		{
				$node = explode('/', $params['node']);

				if ($loop === 'salesrep' || $node[0] ==='Salesrep' || $node[0] ==='ACCNTNUM'|| $node[0]==='InvoiceNum')
				{
					//search by sales rep

						if($params['node'] === 'data' )
						{

							echo json_encode( array('data' => $mappers->getSalemen($invoiceNum)));
							return;
						}
						$node = explode('/', $params['node']);

						if($node[0] === 'Salesrep')
						{
				// 			var_dump($node);
							$jobname= $node[1];

							echo json_encode(array('data'=>$mappers->getSchoolName($jobname)));
							return;
						}
						if($node[0] === 'ACCNTNUM')
						{

							$jobNum = $node[1];
							echo json_encode(array('data'=>$mappers->getAccounts($jobNum)));
							return;
						}
						if($node[0] ==='InvoiceNum')
						{
							$invNum = $node[1];
							echo json_encode(array('data'=>$mappers->invoiceByRep($invNum)));
							return;
						}

				}
				elseif ($loop ==='invoicenum')
				{
					if($params['node'] === 'data')
					{
						echo json_encode(array('data'=>$invmapper->invoiceByRep($invoiceNum)));
						return;
					}
				}elseif ($loop ==='accountNumber' || $node[0] === 'account'||$node[0]==='accinvoice')
				{

					if($params['node'] ==='data')
					{

						echo json_encode(array('data'=>$accMapper->getinvoicename($invoiceNum)));
						return;

					}
					$node = explode('/', $params['node']);
					if($node[0] === 'account')
					{

						$accinv = $node[1];
						echo json_encode(array('data'=>$accMapper->getAccounts($accinv)));
						return;
					}
					if($node[0]==='accinvoice')
					{
						$accinv = $node[1];
						echo json_encode(array('data'=>$accMapper->invoiceByRep($accinv)));
						return;
					}
				}elseif ($loop ==='jobNumer' || $node[0] ==='jobinvoice'||$node[0]==='jobacc')
				{
					if($params['node'] ==='data')
					{
						echo json_encode(array('data'=>$jobMapper->getinvoicename($invoiceNum)));
						return;
					}
					if($node[0] ==='jobacc')
					{
						$jobacct = $node[1];
						echo json_encode(array('data'=>$jobMapper->getAccounts($jobacct)));
						return;
					}
					if($node[0] ==='jobinvoice')
					{
						$jobinv =$node[1];

						echo json_encode(array('data'=>$jobMapper->invoiceByRep($jobinv)));
					}
				}elseif ($loop ==='invStatus')
				{
				if($params['node'] === 'data')
					{
						echo json_encode(array('data'=>$statusMapper->statussearch($invoiceNum)));
						return;
					}
				}
				else
				{
				        if ( $params['node'] === 'data' ) {
				            echo json_encode( array('data' => $mapper->areaMgr()) );
				            return;
				        }

				        $node = explode('/', $params['node']);

				        if ($node[0] === 'areaMgr') {

				            $areaMgrID = $node[1];

				            echo json_encode( array('data' => $mapper->salesReps($areaMgrID)) );
				            return;
				        } else if ($node[0] === 'salesRep') {
				        	$accountrep = $node[1];

				            echo json_encode( array('data' => $mapper->accountsByRep($accountrep)) );
				            return;
				        } else if($node[0] ==='accounts')
				        {
				        	$jobsrep = $node[1];
				        	echo json_encode(array('data'=>$mapper->jobsByRep($jobsrep)));
				        	return;
				        }else if($node[0] ==='invoice')
				        {

				        	$invoiceReps =$node[1];
				        	echo json_encode(array('data'=> $mapper->invoiceByRep($invoiceReps)));
				        	return;
				        }
				}
		}
    }

    public function searchAction() {
    }

    public function invoiceAction() {

        $request = $this->getRequest();
        $id      = $request->getParam('invoiceID', null);
        $repID   = $request->getParam('repID', null);

        $mapper = new YBKInvoicer_Model_InvoiceMapper();
        $mapper->getInvoices( $id, $repID );
    }
    public function finalizeAction()
    {
    	$request = $this->getRequest();
    	$params  = $request->getParams();

    	$start = (int) $params['start'];
    	$limit  = (int) $params['limit'];

    	$mapper = new YBKInvoicer_Model_finalizeMapper();
    	$invoices = $mapper->getInv();

    	echo json_encode(array('data'=> $this->paginate($start, $limit, $invoices), 'count'=>count($invoices)));
    }
    public function setfinalizeAction()
    {
    	$foo = json_decode($this->getRequest()->getParam('data'));

    	 $fool= (json_decode($this->getRequest()->getParam('gl_date')));

    	$mapper= new YBKInvoicer_Model_finalizeMapper();

    	$data =array();

    	foreach($foo as $row)
    	{
    		$invoices = new YBKInvoicer_Model_finalizesettergetters();
    		$invoices->setInv($row->invoice_num)
    		->setJob($row->job_number)
    		->setAcc($row->accnt_number)
    		->setAccName($row->accnt_names)
    		->setFname($row->first_name)
    		->setLname($row->last_name)
    		->setCreatedby($this->_employeeSession->employeenumber);
    		$data[]=$invoices;

    	}

//     	var_dump($fool);

    	$invoices->setGl($fool);

    	$result = $mapper->gofinalize($data);

    	if($result[0] =='1')
    	{
    		echo json_encode(array('success'=>true,'message'=>'Been Finalized'));
    	}
    	else
    	{
    		echo json_encode(array('failure'=>true,'message'=>'Not Finalized'));
    	}



    }
    public function lineitemAction() {
        $request = $this->getRequest();
        $params  = $request->getParams();

        /*Loads the GlList object*/
        // $glarr = array();
        // $jobTypes = Invoicer_Model_JobTypeMapper::getActiveJobTypes();
        // foreach($jobTypes as $row)
        // {
        //     if(strlen($params['data'][strtolower($row->JOB_TYPE_NAME)]) >= 1)
        //     {
        //         $glList = new Invoicer_Model_GlList();
        //         $glList->setJob_type($row->JOB_TYPE);
        //         $glList->setGl_id($params['data'][strtolower($row->JOB_TYPE_NAME)]);
        //         $glarr[]=$glList;
        //     }
        // }

        /*Loads the Line Item object*/
        $lineItem = new YBKInvoicer_Model_LineItem();
        $mapper   = new YBKInvoicer_Model_LineItemMapper();
        $glArray  = array();

        $glArray['1'] = $params['yearbook'];
        $glArray['2'] = $params['commercial'];
        $glArray['3'] = $params['donning'];
        $glArray['4'] = $params['military'];
        $glArray['5'] = $params['history'];
        $glArray['6'] = $params['other'];

        $lineItem->setItem_id($params['id'])
                 ->setItem_display_number($params['item_display_number'])
                 ->setItem_name($params['item_name'])
                 ->setItem_description($params['item_description'])
                 ->setLine_item_type_id($params['line_item_type_id'])
                 ->setUnit_type_id(1)
                 ->setYear(2012)
                 ->setUnit_price($params['unit_price'])
                 ->setCommissionable($params['commissionable'])
                 ->setConcessionable($params['concessionable'])
                 ->setPrint_on_preliminary($params['print_on_preliminary'])
                 ->setPrint_on_invoice($params['print_on_invoice'])
                 ->setPrint_units($params['print_units'])
                 ->setTaxable($params['taxable'])
                 ->setLast_updated_by(0)
                 ->setProgram_id(NULL)
                 ->setGLArray($glArray)
                 ->setSize_id(NULL);

        $save = $mapper->saveLineItems( $lineItem );

        if( $save[1] == 1 ) {
            $resultarray = array();
            $json        = array('success'=>true,'message'=>'Created New Line Item');
        }

        echo json_encode($json);
    }

    public function lineitemcmsAction() {
        $request = $this->getRequest();
        $params  = $request->getParams();
        $mapper  = new YBKInvoicer_Model_LineItemMapper();

        // Create
        if ( $request->isPost() ) {

        }

        // Update
        if ( $request-> isPut() ) {

        }

        // Read
        if ( $request->isGet() ) {
            $lineItems = $mapper->getLineItemsCMS();

            echo json_encode( $lineItems );
        }
    }

    public function speccodeAction() {
    	$request = $this->getRequest();
    	$params  = $request->getParams();
    	$mapper  = new Invoicer_Model_SpecializedCodeMapper();


    	// Create
    	if ( $request-> isPost() ) {
    		$special_code = new Invoicer_Model_SpecializedCode();

    		$special_code->setSpecialized_id($params['id'])
    					 ->setSpecialized_code($params['specialized_code'])
    					 ->setLast_updated_name( $this->_employeeSession->cn )
    					 ->setLast_updated_by( $this->_employeeSession->employeeid )
    					 ->setActive($params['active']);

    		if ( $params['created_by'] == '' ) {
    			$special_code->setCreated_by( $this->_employeeSession->employeeid )
    						 ->setCreated_by_name( $this->_employeeSession->cn );
    		}

    		$save = $mapper->saveSpecialCodes($special_code);

    		if($save[1]==1) {
    			$resultarray = array('id'=>$save[0],'special_code'=>$params['specialized_code'],'active'=>$params['active']);
    			$returnjson  = array('success'=>true,'message'=>'Created new Special Code');//,'results'=>$resultarray);
    		}

    		echo json_encode($returnjson);
    	}

    	// Read
    	if ( $request->isGet() ) {
    		$lineItems = $mapper->getLineItemsCMS();

    		echo json_encode( $lineItems );
    	}
    }

    public function reasoncodesAction() {
    	$request = $this->getRequest();
    	$params  = $request->getParams();

    	if ( $request->isPost() ) {

	    	$reason_code = new Invoicer_Model_ReasonCode();
	    	$mapper      = new Invoicer_Model_ReasonCodeMapper();


	    	$reason_code->setReason_code_id($params['reason_code_id'])
	    				->setReason_code($params['reason_code'])
	    				->setLast_updated_by($this->_employeeSession->employeeid)
	    				->setActive($params['active']);

	    	$save = $mapper->saveReasonCodes($reason_code);

	    	if($save[1]==1) {
	    		$returnjson = array('success'=>true,'message'=>'Created new Reason Code');//,'results'=>$resultarray);
	    	}

	    	echo json_encode($returnjson);
	    }

    	if ( $request->isGet() ) {
    		$mapper = new Invoicer_Model_ReasonCodeMapper();

    		echo json_encode( array('data' => $mapper->fetchReasonCodes()) );
    	}
    }

    public function glAction() {
        $request = $this->getRequest();
        $params  = $request->getParams();
        $mapper  = new YBKInvoicer_Model_GLMapper();

        // Create
        if ( $request->isPost() ) {
            $gl = new YBKInvoicer_Model_GL();

            $state = $this->_getParam('state',null);

            $gl->setGL_id( $params['id'] )
               ->setSegment1( $params['segment1'])
               ->setSegment2( $params['segment2'])
               ->setSegment3( $params['segment3'])
               ->setSegment4( $params['segment4'])
               ->setSegment5( $params['segment5'])
               ->setSegment6( $params['segment6'])
               ->setDescription( $params['description'])
               ->setLine_item_type_id($params['line_item_type_id'])
               ->setActive($params['active'])
               ->setLast_updated_by($this->_employeeSession->employeeid)
               ->setState($state);

            $result = $mapper->saveGL( $gl );

            if ( $result[1] == 1 ) {

                if ( !empty($params['id']) ) {
                    $message = "Saved GL";
                } else {
                    $message = "Created GL";
                }

                $returnjson = array('success'=>true, 'message'=>$message);

                echo json_encode($returnjson);
            } else {
                echo json_encode($result);
            }
        }

        // Update
        if ( $request-> isPut() ) {

        }

        // Read
        if ( $request->isGet() ) {
            $gls = $mapper->getGLs();

            echo json_encode( $gls );
        }
    }
    public function getrepAction()
    {
    	$mapper = new YBKInvoicer_Model_SalesRepListMapper();

    	$result = $mapper->getReps();


    		echo json_encode(array('results'=>$result));

    }
    public function getinvoicestatusAction()
    {
    	$mapper= new YBKInvoicer_Model_invoiceStatus();
    	$result = $mapper->getStatus();

    	echo json_encode($result);
    }

    public function lockedinvoicesAction() {
    	$mapper = new Invoicer_Model_InvoiceMapper();

    	$locked = $mapper->getLockedInvoices();

    	echo json_encode( array('data' => $locked) );
    }

    public function unlockinvoiceAction() {
    	$invoices = json_decode($this->getRequest()->getParam('data'));
    	$mapper   = new Invoicer_Model_InvoiceMapper();

    	if (is_array($invoices) ) {
    		foreach( $invoices as $invoice ) {
    			$mapper->unlockInvoice( $invoice->invoice_id );
    		}
    	} else {
    		$mapper->unlockInvoice($invoices->invoice_id);
    	}

    	echo json_encode(array('success' => true, 'msg' => 'unlocked invoices'));
    }
    public function getcomponentAction()
    {
    	$mapper = new YBKInvoicer_Model_componentidMapper();
    	$result = $mapper->getComponent();

    	echo json_encode($result);
    }
    public function getrevertAction()
    {
    	$mapper = new YBKInvoicer_Model_revertInvoice();
    	$result = $mapper->getInvoices();

    	echo json_encode(array('data'=>$result));
    }
    public function setrevertAction()
    {
    	$request = $this->getRequest();
    	$param  = $request->getParams();

    	$mapper= new YBKInvoicer_Model_revertInvoice();
    	$params = new YBKInvoicer_Model_revertInvoicegetters();

    	$params->setInvoiceid($param['invoice_id']);


    	$result = $mapper->setInvoices($params);

    	echo json_encode(array('success'=>true,'msg'=>$result));
    }
    public function getuserinvoiceAction()
    {
    	$mapper = new YBKInvoicer_Model_invoiceruserlist();

    	$result = $mapper->getinvoicerusers();
//     	var_dump($result);
    	echo json_encode(array('data'=>$result));
    }
    public function getusercomponentsAction()
    {
    	$mapper = new YBKInvoicer_Model_invoiceruserlist();
    	$result = $mapper->getusercomponents();

    	echo json_encode(array('data'=>$result));
    }
    public function deleteusercomponentAction()
    {

    	$params = new YBKInvoicer_Model_allusers();
    	$mapper = new YBKInvoicer_Model_componentidMapper();

    	$params->setComponentID($this->getRequest()->getParam('COMPONENT_ID'))
    		   ->setEmployeeid($this->getRequest()->getParam('EMPLOYEE_ID'));

    	$result=$mapper->deleteuser($params);
    }
    public function addusercomponentAction()
    {

    	$params = new YBKInvoicer_Model_allusers();
    	$mapper = new YBKInvoicer_Model_componentidMapper();

    	$params->setComponentID($this->getRequest()->getParam('COMPONENT_ID'))
    	->setEmployeeid($this->getRequest()->getParam('employee_id'));

    	$result = $mapper->adduser($params);
    }
    public function usercomponenttreeAction()
    {
    	$request = $this->getRequest();
    	$params  = $request->getParams();
    	$mapper  = new YBKInvoicer_Model_componentidMapper();

    	if($params['node'] ==='data')
    	{

    		echo json_encode(array('data'=>$mapper->getallusers()));
    		return;
    	}
    	$node = explode('/',$params['node']);
    	 if($node[0] ==='employee')
    	 {
    	 	$employee = $node[1];
    	 	echo json_encode(array('data'=>$mapper->employeeTree($employee)));
    	 	return;
    	 }
    }
    public function customerAction()
    {
    	$params = new Whiteboard_Model_Job();
    	$mapper = new YBKInvoicer_Model_JobMapper();


    	$result = $mapper->searchJobs($this->getRequest()->getParam('JOBNUMBER'), $this->getRequest()->getParam('ACCTNUMBER'), $this->getRequest()->getParam('ACCTNAME'),
    																 $this->getRequest()->getParam('JOBYEAR'),$this->getRequest()->getParam('INVOICEID'));


    	echo json_encode(array('data'=>$result));

    }
   public function getlineitemAction() {
        $request = $this->getRequest();
    	$params  = $request->getParams();

        $mapper  = new YBKInvoicer_Model_LineItemMapper();

        echo json_encode((array('data'=>$mapper->getvInvoices($params['invoiceID']))));
   }
	public function resetitemsAction()
	{
		$request = $this->getRequest();
		$params = $request->getParams();
// 		var_dump($params);
		$mapper = new YBKInvoicer_Model_LineItemMapper();
// 		var_dump($mapper->getvInvoicereset($params['invoices'],$params['lineitemid']));
		echo json_encode((array('data'=>$mapper->getvInvoicereset($params['invoices'],$params['lineitemid']))));
	}
   public function getlineitemprodAction()
   {
   	$mapper = new YBKInvoicer_Model_LineItemPod();
   	$invoiceid=739;
   	$result = $mapper->getlineitems($invoiceid);

   	echo json_encode(array('data'=>$result));
   }
	public function createlineitemAction()
	{
		$date = new Zend_Date();
		$params = new YBKInvoicer_Model_LineItem();
		$mapper = new YBKInvoicer_Model_LineItemMapper();

		$db      = new Whiteboard_Model_DB();
		$newID = 'select winv.SEQ_LINE_ITEM_ID.nextval from dual';
		$db->select($newID,array());

		$line= $db->getResult();

		$line1 = (int) $line[0]->NEXTVAL;


		if($this->getRequest()->getParam('PARENT_LINE_ITEM_ID') == null)
		{
			$display_order=1;
			$params->setInvoice_id($this->getRequest()->getParam('INVOICE_ID'))
			->setInvoice_line_item_id($line1)
			->setInvoice_group_id($display_order)
			->setItem_description($this->getRequest()->getParam('DESCRIPTION'))
			->setLast_updated_by($this->_employeeSession->employeeid)
			->setDisplay_order($display_order)
			->setLine_item_notes($this->getRequest()->getParam('LINE_ITEM_NOTES'))
// 			->setParent_line_item_id($line1)
			->setLine_item_type_id($display_order)
			->setUnit_type_id($this->getRequest()->getParam('UNIT_TYPE_ID'))
			->setBase_price($this->getRequest()->getParam('BASE_PRICE'))
			->setUnit_price($this->getRequest()->getParam('UNIT_PRICE'))
			->setInclude_in_program($this->getRequest()->getParam('INCLUDE_IN_PROGRAM'))
			->setCommissionable($this->getRequest()->getParam('COMMISSION'))
			->setConcessionable($this->getRequest()->getParam('CONCESSIONABLE'))
			->setPrint_on_preliminary($this->getRequest()->getParam('PRINT_ON_PRELIMINARY'))
			->setPrint_on_invoice($this->getRequest()->getParam('PRINT_ON_INVOICE'))
			->setPrint_units($this->getRequest()->getParam('PRINT_UNITS'))
			->setTaxable(0)
			->setDebit_gl_id(105)
			->setCredit_gl_id(105)
			->setQuantity($this->getRequest()->getParam('QUANTITY'))
			->setItem_display_number(15)
			->setItem_id(511)
			->setJob_number($this->getRequest()->getParam('JOB_NUMBER'))
			->setShipping_address(13754474);
			$result =$mapper->save(array($params));
		}
		else
		{
// 			var_dump(params);
			$display_order=2;
			$params->setInvoice_id($this->getRequest()->getParam('INVOICE_ID'))
				->setInvoice_line_item_id($this->getRequest()->getParam('LINE_ITEM_ID'))
			   ->setInvoice_group_id($this->getRequest()->getParam('DISPLAY_ORDER'))
			   ->setItem_description($this->getRequest()->getParam('DESCRIPTION'))
			   ->setLast_updated_by($this->_employeeSession->employeeid)
			   ->setDisplay_order($display_order)
			   ->setLine_item_notes($this->getRequest()->getParam('LINE_ITEM_NOTES'))
			   ->setParent_line_item_id($this->getRequest()->getParam('PARENT_LINE_ITEM_ID'))
			   ->setLine_item_type_id(1)
			   ->setUnit_type_id($this->getRequest()->getParam('UNIT_TYPE_ID'))
			   ->setBase_price($this->getRequest()->getParam('BASE_PRICE'))
			   ->setUnit_price($this->getRequest()->getParam('UNIT_PRICE'))
			   ->setInclude_in_program($this->getRequest()->getParam('INCLUDE_IN_PROGRAM'))
			   ->setCommissionable($this->getRequest()->getParam('COMMISSION'))
			   ->setConcessionable($this->getRequest()->getParam('CONCESSIONABLE'))
		 	   ->setPrint_on_preliminary($this->getRequest()->getParam('PRINT_ON_PRELIMINARY'))
			   ->setPrint_on_invoice($this->getRequest()->getParam('PRINT_ON_INVOICE'))
			   ->setPrint_units($this->getRequest()->getParam('PRINT_UNITS'))
			   ->setTaxable(0)
			   ->setDebit_gl_id(105)
			   ->setCredit_gl_id(105)
			   ->setQuantity($this->getRequest()->getParam('QUANTITY'))
			   ->setItem_display_number(15)
			   ->setItem_id(511)
			   ->setJob_number($this->getRequest()->getParam('JOB_NUMBER'))
			   ->setShipping_address(13754474);
			$result =$mapper->save(array($params));
		}
		echo json_encode(array('success'=>true,'message'=>'ok'));

	}
	public function itemsnumberAction()
	{
		$mapper = new YBKInvoicer_Model_Lineitemtypes();
		 $results = $mapper->itemstypes();
		 echo json_encode(array('data'=>$results));
	}
	public function lineitemtypesAction()
	{
		$mapper = new YBKInvoicer_Model_Lineitemtypes();

		$results = $mapper->LineItemType();

		echo json_encode(array('data'=>$results));
	}
	public function groupingAction()
	{
		$mapper = new YBKInvoicer_Model_Lineitemtypes();
		$result = $mapper->grouping();
		echo json_encode(array('data'=>$result));
	}
	public function displayitemsAction()
	{

		$mapper = new YBKInvoicer_Model_Lineitemtypes();

		$result = $mapper->displayitems();

		echo json_encode(array('data'=>$result));
	}
	public function nextValue()
	{
		$db      = new Whiteboard_Model_DB();
		$newID = 'select winv.SEQ_LINE_ITEM_ID.nextval from dual';
		$db->select($newID,array());

		return $db->getResult();
	}

	public function lineitemsetAction() {
        $request = $this->getRequest();
    	$params  = $request->getParams();

        $mapper  = new YBKInvoicer_Model_LineItemMapper();

        $lineItems = $mapper->getLineItemSet( $params['invoice_id'], $params['line_item_id'] );

        echo json_encode( array('data' => $lineItems) );
	}

	public function deletelineitemAction() {
		$request   = $this->getRequest();
		$params    = $request->getParams();
		$lineItems = json_decode( $params['data'] );
		$invoiceID = $params['invoice_id'];
		$liArray   = array();

		var_dump($lineItems);
		foreach ( $lineItems as $lineItem ) {
			//setup object
			$li = new YBKInvoicer_Model_LineItem();
			$li	->setInvoice_line_item_id($lineItem->invoice_line_item_id)
				->setItem_description($lineItem['item_description'])
				->setLine_item_notes($lineItem['line_item_notes'])
				->setParent_line_item_id($lineItem['parent_line_item_id'])
				->setLine_item_type_id($lineItem['line_item_type_id'])
				->setUnit_type_id($lineItem['unit_type_id'])
				->setBase_price($lineItem['base_price'])
				->setUnit_price($lineItem['unit_price'])
				->setLast_updated_by($this->_employeeSession->employeeid)
				->setInvoice_group_id($lineItem['invoice_group_id'])
				->setInclude_in_program($lineItem['include_in_program'])
				->setCommissionable($lineItem['commissionable'])
				->setConcessionable($lineItem['concessionable'])
				->setPrint_on_preliminary($lineItem['print_on_preliminary'])
				->setPrint_on_invoice($lineItem['print_on_invoice'])
				->setPrint_units($lineItem['print_units'])
				->setTaxable($lineItem['taxable'])
				->setDebit_gl_id($lineItem['debit_gl_id'])
				->setCredit_gl_id($lineItem['credit_gl_id'])
				->setQuantity($lineItem['quantity'])
				->setItem_display_number($lineItem['item_display_number'])
				->setItem_id($lineItem['item_id'])
				->setInvoice_id($invoiceID)
				->setDelete_me($lineItem['delete_me'])
				->setJob_number($lineItem['li_job_number'])
				->setShipping_address( $lineItem['shipping_address'] );
			if ( $lineItem['quantity']=='null' || $lineItem['quantity']==null ) {
				$li->setQuantity(0);
			}
			$liArray[] = $li;
		}

		var_dump($liArray);

		$mapper = new YBKInvoicer_Model_LineItemMapper();

		//$mapper->save( $liArray );

		// $mapper->deleteLineItem( $params['line_item_id'], $this->_employeeSession->employeeID );
	}

	public function displayorderAction() {
		$request      = $this->getRequest();
		$params       = $request->getParams();
		$dispOrdArray = json_decode( $params['data'] );
		$mapper       = new YBKInvoicer_Model_LineItemMapper();

		$mapper->setDisplayOrder( $params['invoiceID'],$dispOrdArray );

		echo json_encode( array('success' => true));
	}
}