<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->model('ProductModel');
        // $data['product'] = $this->ProductModel->getProduct();
        // $this->load->view('frontend/viewproduct', $data);

        $product = $this->ProductModel->getProduct();
        $this->load->view('frontend/viewproduct', ['product' => $product]);
        $this->load->view('template/footer'); 
    }
    public function addProduct()
    {
        $this->load->view('template/header');
        $this->load->view('frontend/addproduct');
        $this->load->view('template/footer'); 
    }
    public function store()
    {
        $this->form_validation->set_rules('prod_name', 'Product Name', 'required');

        if($this->form_validation->run()){
            $data = [
                'prod_name' => $this->input->post('prod_name'),
                'prod_price' => $this->input->post('prod_price'),
            ];

            $this->load->model('ProductModel', 'pmodel');
            $this->pmodel->insertProduct($data);
            $this->index();
        }
        else {
            $this->addProduct();
            // redirect(base_url('product/add'));
        }
    }

    public function editProduct($id)
    {
        $this->load->view('template/header');
        $this->load->model('ProductModel', 'pmodel');
        $product = $this->pmodel->editProduct($id);
        $this->load->view('frontend/editproduct', ['product' => $product]);
        $this->load->view('template/footer'); 
    }

    public function updateProduct($id)
    {
        $data = [
            'prod_name' => $this->input->post('prod_name'),
            'prod_price' => $this->input->post('prod_price'),
        ];
        $this->load->model('ProductModel', 'pmodel');
        $this->pmodel->updateProduct($data, $id);
        $this->index();
    }

    public function deleteProduct($id)
    {
        $this->load->model('ProductModel', 'pmodel');
        $product = $this->pmodel->deleteProduct($id);
        $this->index();
    }
 
    
}

/* End of file Controllername.php */
