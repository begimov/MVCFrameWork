<?php

namespace App\Controllers;

use App\Views\View;
use App\Models\User;

class HomeController
{
    protected $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index($request, $response)
    {
        $users = User::with('topics', 'topics.posts', 'topics.posts.user')->get();

        return $this->view->render($response, 'home.twig', compact('users'));
    }
}