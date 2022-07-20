<?php

namespace App\Controllers;

class ReviewController extends BaseController
{

    protected $modelReview;
    // Constructor
    public function __construct()
    {
        $this->modelReview = new \App\Models\reviewModel();
    }
    // 3. Manage atraction
    public function atraction()
    {
        //untuk ajax
        if ($this->request->isAJAX()) {
            $data = $this->request->getPOST();
            $like = $this->modelReview->addLikes($data);
            return json_encode($like);
        }
    }
}