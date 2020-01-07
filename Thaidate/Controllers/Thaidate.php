<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thaidate extends MX_Controller {
/**
 * @package Checkin
 * 
 * User = Staff Mode
 *
 * @return void
 */

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('security');
        $this->load->library('session');
        $this->load->helper('cookie');
        $this->load->library('encryption');
        
    }

	public function DateThai($strDate)
	{
        
        $strYear = date("Y",strtotime($strDate))+543;

        $strMonth= date("n",strtotime($strDate));

        $strDay= date("j",strtotime($strDate));

        // $strHour= date("H",strtotime($strDate));

        // $strMinute= date("i",strtotime($strDate));

        $strSeconds= date("s",strtotime($strDate));

        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        // retur วว/ดด/ปปป,H:i
        // return "$strDay $strMonthThai $strYear, $strHour:$strMinute"; 
        return "$strDay $strMonthThai $strYear";


        // $strDate = "2008-08-14 13:42:44";
        // echo "Date : ".DateThai($strDate);
	
	}
	
}
