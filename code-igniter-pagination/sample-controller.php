<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {


	public function __construct(){
		parent::__construct();
		//load all your models and config here
		$this->load->model('Dashboard_model', 'dashboard');
		$this->load->helper('pagination_helper');
	}


	public index(){


		/**Pagination Initial Setup**/
		$this->load->library('pagination');
		$config['per_page'] = PAGINATION_PER_PAGE; //constant
		$offset = ($this->uri->segment(3))? ($this->uri->segment(3) - 1): 0;
		/**Pagination Initial Setup End**/

		//get all data for total_rows
		$dataCount = $this->import->get_all($surnameStarts, $surnameEnds, $brgy, $purok,$search, NULL, NULL);

		$data['citizensData'] = $this->import->get_all($config['per_page'], $offset * $config['per_page']);

		/** Pagination Settngs **/
		$config['base_url'] = base_url()."Import/index";
		//use helper function to load other settings in pagination sample-pagination-helper.php
		$config = array_merge($config, setPagination($dataCount,$config['per_page']));
    	$this->pagination->initialize($config);
		/*** Pagination End ***/
	}