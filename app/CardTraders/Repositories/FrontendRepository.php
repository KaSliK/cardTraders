<?php
namespace App\CardTraders\Repositories;
use App\Photo;
use App\CardTraders\Interfaces\FrontendRepositoryInterface;

class FrontendRepository implements FrontendRepositoryInterface{

    public function getPhotosForMainPage()
    {
        return Photo::all();
    }

}
