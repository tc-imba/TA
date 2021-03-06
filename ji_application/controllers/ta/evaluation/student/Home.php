<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Home
 *
 * Controller ta/evaluation/student
 *
 * @category   ta
 * @package    ta/evaluation/student
 * @author     tc-imba
 * @copyright  2016 umji-sjtu
 */
class Home extends TA_Controller 
{
	
	/**
	 * Home constructor.
	 */
	public function __construct()
	{
		parent::__construct();
		$this->data['type'] = 'student';
		$this->data['page_name'] = 'TA Evaluation System: Student Homepage';
		$this->data['banner_id'] = 1;
		$this->Mta_site->redirect_login($this->data['type']);
	}
	
	/**
	 * Index page
	 */
	public function index()
	{
		$data = $this->data;
		$this->load->view('ta/evaluation/homepage/student', $data);
	}
}
