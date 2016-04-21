<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mta_site extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    /**
     * 获取所有的网站设置项
     * @return  关联数组
     */
    public function get_site_config()
    {
		// 获取全局设置
		$query = $this->db->get('ji_common_config');
        $settings = $query->result_array();
        foreach ($settings as $setting) {
            $data[$setting['obj']]=$setting['data'];
        }
		// 获取TA设置
        $query = $this->db->get('ji_ta_config');
        $settings = $query->result_array();
        foreach ($settings as $setting) {
            $data[$setting['obj']]=$setting['data'];
        }
		
        return $data;
    }

    /**
     * 更新网站设置
     * @param   $data 关联数组
     * @return        操作结果
     */
    public function update_site_config($data)
    {
        foreach ($data as $key => $value) {
            $updatedata[]=array(
                'obj' => $key,
                'data' => $value
                );
        }
        return $this->db->update_batch('ji_ta_config', $updatedata, 'obj');
    }
	
	public function html_purify($string)
	{
		return preg_replace("/<([a-zA-Z]+)[^>]*>/","<\\1>", $string);
	}
	
}