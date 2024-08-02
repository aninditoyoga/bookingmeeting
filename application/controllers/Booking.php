<?
// Booking.php
class Booking extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Booking_model');
        $this->load->model('Room_model');
    }

    public function index() {
        $data['bookings'] = $this->Booking_model->get_bookings();
        $this->load->view('bookings/index', $data);
    }

    public function create() {
        $data['rooms'] = $this->Room_model->get_rooms();
        $this->load->view('bookings/create', $data);
    }

    public function store() {
        $data = array(
            'room_id' => $this->input->post('room_id'),
            'date' => $this->input->post('date'),
            'start_time' => $this->input->post('start_time'),
            'end_time' => $this->input->post('end_time')
        );
        $this->Booking_model->add_booking($data);
        redirect('booking');
    }

    public function delete($id) {
        $this->Booking_model->delete_booking($id);
        redirect('booking');
    }
}
?>