<?php




function setPagination($dataCount, $perPage = PAGINATION_PER_PAGE){


	//setup
	$paginate = array();
	
	$paginate['uri_segment'] = 3;
	$paginate['use_page_numbers'] = TRUE;
	$paginate['total_rows']  = count($dataCount);
    //$choice = $config['total_rows'] / $config['per_page'];
	$paginate['num_links'] = 3;
	//styling
  	$paginate['num_tag_open'] = '<li>';
    $paginate['num_tag_close'] = '</li>';
    $paginate['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
    $paginate['cur_tag_close'] = '</a></li>';
	$paginate['next_link'] = '<i class="fa fa-chevron-right"></i>';
	$paginate['prev_link'] = '<i class="fa fa-chevron-left"></i>';
    $paginate['next_tag_open'] = '<li class="pg-next">';
    $paginate['next_tag_close'] = '</li>';
    $paginate['prev_tag_open'] = '<li class="pg-prev">';
    $paginate['prev_tag_close'] = '</li>';
    $paginate['first_tag_open'] = '<li>';
    $paginate['first_tag_close'] = '</li>';
    $paginate['last_tag_open'] = '<li>';
    $paginate['last_tag_close'] = '</li>';


    return $paginate;
}






?>