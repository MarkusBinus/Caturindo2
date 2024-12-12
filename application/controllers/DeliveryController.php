<?php
class DeliveryController extends CI_Controller {
    public function getDeliveryData() {
        // Load the model to access the database
        $this->load->model('Delivery_model');

        // Get the delivery slip number from the URL
        $delivery_slip = $this->input->get('delivery_slip');

        // Fetch data from the database using the model
        $data = $this->Delivery_model->getDeliveryDetails($delivery_slip);

        // Send JSON response
        echo json_encode($data);
    }
}
?>