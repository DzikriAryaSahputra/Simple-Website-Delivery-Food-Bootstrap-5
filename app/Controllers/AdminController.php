<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends Controller
{
    public function produk()
    {
        $productModel = model('ProductModel');
        $data['product'] = $productModel->findAll();
        return view('admin/produk', $data);
    }
    public function create_produk()
{
    $productModel = model('ProductModel');
    $data = $this->request->getPost();
    $file = $this->request->getFile('thumbnail_url');

    if (!$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(FCPATH . 'images', $newName);
        $data['thumbnail_url'] = 'images/' . $newName;
    }

    if ($productModel->insert($data, false)) {
        return redirect()->to('admin/produk')->with('sukses', 'Data berhasil disimpan!');
    } else {
        return redirect()->back()->with('gagal', 'Data gagal disimpan!');
    }
}

public function edit_produk($product_id)
{
    $productModel = model('ProductModel');
    $data['pro'] = $productModel->find($product_id);

    return view('admin/edit-produk', $data);
}
public function update_produk($product_id)
{
    $productModel = model('ProductModel');
    $data = $this->request->getPost();
    $file = $this->request->getFile('thumbnail_url');

    if (!$file->hasMoved()) {
        $newName = $file->getRandomName();
        $file->move(FCPATH . 'images', $newName);
        $data['thumbnail_url'] = 'images/' . $newName;
    }
    if ($productModel->update($product_id, $data)) {
        return redirect()->to('admin/produk')->with('sukses', 'Data berhasil diupdate!');
    } else {
        return redirect()->back()->with('gagal', 'Data gagal diupdate!');
    }
}
public function delete_produk()
{
    $product_id = $this->request->getPost('id');
    log_message('info', 'ID yang diterima untuk dihapus: ' . $product_id);
    
    $productModel = model('ProductModel');

    if ($product_id && $productModel->where('product_id', $product_id)->delete()) {
        return redirect()->to('admin/produk')->with('sukses', 'Data berhasil dihapus!');
    } else {
        log_message('error', 'Penghapusan gagal untuk ID: ' . $product_id);
        return redirect()->back()->with('gagal', 'Data gagal dihapus!');
    }
}





}
