<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class PostAdmin extends BaseController
{
    public function index()
    {
        $post = new PostModel();
        $data['posts'] = $post->findAll();
        // Gunakan return view
        return view('admin/admin_post_list', $data);
    }

    public function preview($id)
    {
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }
        return view('post_detail', $data);
    }

    public function create()
    {
        $validation =  \Config\Services::validation();
        $validation->setRules(['title' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $post = new PostModel();
            $post->insert([
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status'),
                "slug"    => url_title($this->request->getPost('title'), '-', TRUE)
            ]);
            // Gunakan redirect ke full URL
            return redirect()->to(base_url('admin/post'));
        }

        return view('admin/admin_post_create');
    }

    public function edit($id)
    {
        $post = new PostModel();
        $data['post'] = $post->where('id', $id)->first();

        if (!$data['post']) {
            throw PageNotFoundException::forPageNotFound();
        }

        $validation =  \Config\Services::validation();
        $validation->setRules([
            'title' => 'required'
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid) {
            $post->update($id, [
                "title"   => $this->request->getPost('title'),
                "content" => $this->request->getPost('content'),
                "status"  => $this->request->getPost('status')
            ]);
            return redirect()->to(base_url('admin/post'));
        }

        return view('admin/admin_post_update', $data);
    }

    public function delete($id)
    {
        $post = new PostModel();
        $post->delete($id);
        return redirect()->to(base_url('admin/post'));
    }
}