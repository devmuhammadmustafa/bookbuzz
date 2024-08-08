<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends BaseController
{
    public function index() {
        $tags = Tag::all();
        return $this->sendResponse($tags, 'Tags retrieved successfully.');

    }
}
