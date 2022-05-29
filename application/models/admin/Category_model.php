<?php
/**
 * 
 */
class Category_model extends CI_model
{
	public function insert_cate($data)
	{
		$result = $this->db->insert('category',$data);
		return $result;
	}
	public function all_cate()
	{
		$res = $this->db->get('category');
		return $res->result_array();
	}
	public function delete_category($id)
	{
		$this->db->where('cate_id',$id);
		$ress = $this->db->delete('category');
		return $ress;
	}
	public function edit_category($datas)
	{
		$this->db->where('cate_id',$datas);
		$edit_id = $this->db->get('category');
		return $edit_id->result_array();
	}
	public function updated_cate($cat,$cate_data)
	{
		$this->db->where('cate_id',$cat);
		$update_id = $this->db->update('category',$cate_data);
		return $update_id;
	}
	public function getCategory()
	{
		$result_category = $this->db->get("category");
		return $result_category->result_array();
	}
}

?>