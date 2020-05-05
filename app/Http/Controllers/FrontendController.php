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

    public function aLLCards()
    {
        $photos = $this->fR->getPhotosForMainPage();

        return view('frontend.allCards', ['photos'=>$photos]);
    }
    public function myCards()
    {
        $photos = $this->fR->getPhotosForMainPage();

        return view('frontend.myCards', ['photos'=>$photos]);
    }
    public function forSaleCards()
    {
        $photos = $this->fR->getPhotosForMainPage();

        return view('frontend.forSaleCards', ['photos'=>$photos]);
    }
    public function forChangeCards()
    {
        $photos = $this->fR->getPhotosForMainPage();

        return view('frontend.forChangeCards', ['photos'=>$photos]);
    }
}
