<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardTraders\Interfaces\FrontendRepositoryInterface;

class FrontendController extends Controller
{

    public function __construct(FrontendRepositoryInterface $repository)
    {
        $this->fR = $repository;
    }

    public function index()
    {
       $photos = $this->fR->getPhotosForMainPage();

        return view('frontend.index', ['photos'=>$photos]);
    }
}
