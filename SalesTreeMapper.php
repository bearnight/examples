<?php
class YBKInvoicer_Model_SalesTreeMapper{

	public function areaMgr() {
		$query = "select distinct
				    scon.row_id area_mgr_row_id
				    ,scon.fst_name area_mgr_fst_name
				    ,scon.last_name area_mgr_last_name
				    from siebel.s_postn sp inner join siebel.s_contact scon
				     on sp.pr_emp_id=scon.row_id
				      where  sp.name like '%Manager%'
				      and sp.name like '%Yearbook%'
				      and sp.name not like '%Service%'
				      and sp.name not like '%Marketing%'";

    	$db = new Whiteboard_Model_DB();

     	$db->select($query);

      	$areaMgrs = array();

	    foreach($db->getResult() as $areaMgr) {
	  	    $node = new Whiteboard_Model_TreeNode();

	  	    $node->text     = $areaMgr->AREA_MGR_FST_NAME . ' ' . $areaMgr->AREA_MGR_LAST_NAME;
	  	    $node->id       = 'areaMgr/' . $areaMgr->AREA_MGR_ROW_ID;
	  	    $node->expanded = false;
	  	    $node->cls      = 'folder';

	  	    $areaMgrs[] = $node;
	    }

	    return $areaMgrs;
	}

	public function salesReps($areaMgrID) {
		$query = "select SP.NAME rep_position
    ,scon2.row_id rep_row_id
    ,scon2.fst_name rep_fst_name
    ,scon2.last_name rep_last_name
    from  (SELECT sp.*, spy.row_id spy_rid
                     FROM siebel.s_party spy, siebel.s_postn sp
                     WHERE spy.par_party_id = sp.row_id) sp2
       inner join siebel.s_postn sp
        on sp2.spy_rid=sp.row_id
       inner join siebel.s_contact scon2
        on SP.PR_EMP_ID=scon2.row_id
        where sp2.pr_emp_id=:a
		order by rep_last_name ASC";

		$db = new Whiteboard_Model_DB();

		$params = array(':a' => $areaMgrID);

		$db->select($query,$params);

		$salesReps = array();

		foreach($db->getResult() as $salesRep) {
			$node = new Whiteboard_Model_TreeNode();

			$node->text     = $salesRep->REP_FST_NAME . ' ' . $salesRep->REP_LAST_NAME;
			$node->id       = 'salesRep/' . $salesRep->REP_ROW_ID;
			$node->cls      = 'folder';
			$node->leaf     = false;

			$salesReps[] = $node;
		}

		return $salesReps;
	}

	public function accountsByRep($repID) {

		$query = "select soe.row_id  accnt_row_id
    				,soe.name accnt_name
    				,soe.ou_num accnt_num
    				from siebel.s_postn sp
       				inner join siebel.s_contact scon2
        			on SP.PR_EMP_ID=scon2.row_id
       				inner join WINTINKS.VP_S_ORG_EXT soe
        			on sp.row_id=soe.pr_postn_id
        			where scon2.row_id=:a
					order by accnt_name ASC";

		$db = new Whiteboard_Model_DB();
		$params =array(':a'=>$repID);

		$db->select($query,$params);

		$accounts = array();

		foreach ($db->getResult() as $account) {
			$node = new Whiteboard_Model_TreeNode();

			$node->text = $account->ACCNT_NAME;
			$node->id   = 'accounts/' . $account->ACCNT_NUM;
			$node->cls  = 'folder';
			$node->leaf = false;

			$accounts[] = $node;
		}



		return $accounts;
	}

	public function jobsByRep($accountNumber)
	{
		$query = "select * from v_account_job where accnt_num = :a";
	$db = new Whiteboard_Model_DB();

		$params = array(':a'=>$accountNumber);

		$db->select($query,$params);

		$jobs = array();

		foreach ($db->getResult() as $job) {
			$node = new Whiteboard_Model_TreeNode();

			$node->text = $job->JOB_NUMBER;
			$node->id   = 'invoice/'. $job->JOB_NUMBER;
			$node->cls  = 'folder';
			$node->leaf = false;

			$jobs[] = $node;
		}

		// Create No Job Number folder for invoices with no job number
		$node = new Whiteboard_Model_TreeNode();

		$node->text = 'No Job Number';
		$node->id   = 'nojob/' . $accountNumber;
		$node->cls  = 'folder';
		$node->leaf = false;

		$jobs[] = $node;

		return $jobs;
	}
	public function invoiceByRep($invoiceRep) {

		$query = "select invoice_id,invoice_type_id,job_number
				  from WINV.TBL_INVOICE i
				  where JOB_NUMBER = :a
				  and invoice_status_id not in (8,9)";

		$db = new Whiteboard_Model_DB();
		$params = array(':a' =>$invoiceRep);

		$db->select($query,$params);

		$invoiceReps = array();

		foreach ($db->getResult() as $invoicegrab) {
			$node = new Whiteboard_Model_TreeNode();

			$node->text = $invoicegrab->INVOICE_ID;
			$node->id   = 'invoiceid/'.$invoicegrab->INVOICE_ID;
			$node->leaf = true;
			$invoicesReps[] =$node;
		}
		return $invoicesReps;
	}
}
