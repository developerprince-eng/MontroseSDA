<?php
class Event_model extends CI_Model{
	public function __construct(){
		$this->load->database();
	}
	
	public function insert($event){
		$this->db->insert('events', $event);
	}

	public function get_events($eid = FALSE, $limit = FALSE, $offset = FALSE){
		if($limit){
			$this->db->limit($limit, $offset);
		}
		if ($eid === FALSE) {
			$this->db->order_by('eid', 'DESC');
			$query = $this->db->get('events');
			return $query->result_array();
		}
		$query = $this->db->get_where('events', array('eid' => $eid));
		return $query->row_array();
	}

	public function create_event(){
		$eid = md5(url_title($this->input->post('name')));
		$data = array(
            'eid' => $eid,
			'name' => $this->input->post('name'),
			'description' => $this->input->post('description'),
            'brief' => $this->input->post('brief'),
            'time' => $this->input->post('time'),
            'date' => $this->input->post('date')
		);
		return $this->db->insert('events', $data);
	}

	public function get_events_num(){
		return $this->db->count_all('events');
	}

	public function delete($id){
		$this->db->where('eid', $id);
		$this->db->delete('events');
		return true;
	}
	public function approve($id){
		$this->db->where('eid', $id);
		$this->db->update('events', array('approve' => 1));
		return true;
	}
	public function suspend($id){
		$this->db->where('eid', $id);
		$this->db->update('events', array('approve' => 0));
		return true;
	}
}
?>