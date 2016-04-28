<?php

class Mcn extends CI_Model
{
	function get_new_pages()
	{//获取URL为空的页面
		return $this->db->query("SELECT * FROM `ji_page` where page_url='' and page_status=1 and page_lm in(40,41,42,43,44,45) order by id desc limit 10")
		                ->result();
	}
	
	function get_it_files()
	{//获取最新的IT文件
		return $this->db->query("SELECT * FROM `ji_file` where file_status=1 and file_class in(40,41,42,43,44,45) order by id desc limit 10")
		                ->result();
	}
	
	function get_help()
	{//获取帮助页面
		return $this->db->query("SELECT * FROM `ji_page` where id=" . $this->uri->segment(3) . "")->row_array();
	}
	
}

?>