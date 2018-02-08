<?php
//Sample Pagination Script 

/**Controller**/

	$this->load->library('pagination');

	//How many items upon load
	$config['per_page'] = PAGINATION_PER_PAGE;

	// which uri part for page number
	$offset = ($this->uri->segment(3))? ($this->uri->segment(3) - 1): 0;

	// $dataCount to be use total_rows
	$dataCount = $this->import->get_all($surnameStarts, $surnameEnds, $brgy, $purok,$search, NULL, NULL);

	$data['citizensData'] = $this->import->get_all($surnameStarts, $surnameEnds, $brgy, $purok,$search, $config['per_page'], $offset*$config['per_page']);

    /** Pagination Settngs **/
    $config['base_url'] = base_url()."Import/index";
    $config['uri_segment'] = 3;
    $config['use_page_numbers'] = TRUE;
    $config['reuse_query_string'] = true;
    $config['total_rows']  = count($dataCount);
    $choice = $config['total_rows'] / $config['per_page'];
    //$config['num_links'] = round($choice);
    $paginate['num_links'] = 3;
    
    //styling
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
    $config['cur_tag_close'] = '</a></li>';
    $config['next_link'] = 'Next';
    $config['prev_link'] = 'Prev';
    $config['next_tag_open'] = '<li class="pg-next">';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li class="pg-prev">';
    $config['prev_tag_close'] = '</li>';
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $this->pagination->initialize($config);
/**Controller End**/

/**Model Setup**/
	//Add Limit to Query
	public function get_all_paginate($limit = NULL,$offset = NULL)
	{
		$whereId = $this->db->where('record_status !=', RECORD_STATUS_CODE_DELETED);
		if($limit){
			$this->db->limit($limit, $offset);
		}
		$query = $this->_pages_query($whereId);

		return $query;
	}
/**Model Setup End**/


/**View Setup**/
	<ul class="pagination pull-right">
		<?php echo $this->pagination->create_links(); ?>
	</ul>
/**View **/