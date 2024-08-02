<?
// Room_model.php
class Room_model extends CI_Model {
    public function get_rooms() {
        $query = $this->db->get('rooms');
        return $query->result();
    }

    public function add_room($data) {
        return $this->db->insert('rooms', $data);
    }

    public function delete_room($id) {
        $this->db->where('id', $id);
        return $this->db->delete('rooms');
    }
}
?>