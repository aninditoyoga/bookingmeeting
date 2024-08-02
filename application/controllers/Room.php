<?
// Room.php
class Room extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Room_model');
    }

    public function index() {
        $data['rooms'] = $this->Room_model->get_rooms();
        $this->load->view('rooms/index', $data);
    }

    public function create() {
        $this->load->view('rooms/create');
    }

    public function store() {
        $data = array(
            'name' => $this->input->post('name')
        );
        $this->Room_model->add_room($data);
        redirect('room');
    }

    public function delete($id) {
        $this->Room_model->delete_room($id);
        redirect('room');
    }
}
?>