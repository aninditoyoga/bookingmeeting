<?
// Booking_model.php
class Booking_model extends CI_Model {
    public function get_bookings() {
        $this->db->select('bookings.*, rooms.name as room_name');
        $this->db->from('bookings');
        $this->db->join('rooms', 'rooms.id = bookings.room_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function add_booking($data) {
        return $this->db->insert('bookings', $data);
    }

    public function delete_booking($id) {
        $this->db->where('id', $id);
        return $this->db->delete('bookings');
    }
}
?>