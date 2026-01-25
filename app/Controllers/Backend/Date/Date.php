<?php
namespace App\Controllers\Backend\Date;
use App\Controllers\BaseController;

class Date extends BaseController{
	protected $data;

    public function __construct(){
		$this->data = [];
        $this->data['module'] = 'audit_date';
	}

	public function index($page = 1){
        $session = session();
        $flag = $this->authentication->check_permission([
			'routes' => 'backend/date/index'
		]);
		if($flag == false){
 			$session->setFlashdata('message-danger', 'Bạn không có quyền truy cập vào chức năng này!');
 			return redirect()->to(BASE_URL.'backend/dashboard/dashboard/index');
		}
        helper(['mypagination']);
        $page = (int)$page;
        $perpage = ($this->request->getGet('perpage')) ? $this->request->getGet('perpage') : 20;
        $config['total_rows'] = $this->AutoloadModel->_get_where([
            'select' => 'id',
            'table' => $this->data['module'].' as tb1',
            'join' =>  [
                [
                    'user as tb2','tb1.user_id = tb2.id','inner'
                ],
            ],
            'count' => TRUE
        ], false);
        if($config['total_rows'] > 0){
            $config = pagination_config_bt(['url' => 'backend/log/log/index','perpage' => $perpage], $config, $page);
            $this->pagination->initialize($config);
            $this->data['pagination'] = $this->pagination->create_links();
            $totalPage = ceil($config['total_rows']/$config['per_page']);
            $page = ($page <= 0)?1:$page;
            $page = ($page > $totalPage)?$totalPage:$page;
            $page = $page - 1;
            $this->data['logList'] = $this->AutoloadModel->_get_where([
                'select' => 'tb1.id,
                    max(tb2.fullname) as fullname, 
                    max(tb1.event_type) as event_type,
                    max(tb1.description) as description,
                    max(tb1.ip_address) as ip_address,
                    max(tb1.user_agent) as user_agent,
                    max(tb1.created_at) as created_at',
                'table' => 'audit_date as tb1',
                'join' => [
                    [
                        'user as tb2','tb1.user_id = tb2.id','inner'
                    ],
                
                ],
                'limit' => $config['per_page'],
				'start' => $page * $config['per_page'],
                'order_by'=> ' tb1.id desc',
                'group_by' => 'tb1.id'
            ], TRUE);
        }
		$this->data['template'] = 'backend/log/index';
		return view('backend/dashboard/layout/home', $this->data);
    }

}
