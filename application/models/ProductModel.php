<?php

class ProductModel extends CI_Model
{
    public function getProduct()
    {
        $products = $this->db->get('product');
        return $products->result();
    }

    public function insertProduct($data)
    {
        return $this->db->insert('product', $data);  
    }

    public function editProduct($id)
    {
        $products = $this->db->get_where('product', ['id' => $id]);
        return $products->row();
    }

    public function updateProduct($data, $id)
    {
        return $this->db->update('product', $data, array('id' => $id));
    }
    public function deleteProduct($id)
    {
        return $this->db->delete('product',['id' => $id]);
    }
}