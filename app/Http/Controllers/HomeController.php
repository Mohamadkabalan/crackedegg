<?php

namespace App\Http\Controllers;

use App\Repositories\HeroBannerRepository;
use App\Repositories\ServiceRepository;
use App\Repositories\TestimonialRepository;
use App\Repositories\ClientRepository;
use App\Repositories\ProjectRepository;


class HomeController extends Controller
{
    public function index(
      HeroBannerRepository $heroBanners,
      ServiceRepository $services,
      TestimonialRepository $testimonials,
      ClientRepository $clients,
      ProjectRepository $projects
    ) {

        return view('home', [
          'hero'         => $heroBanners->first(),
          'services'     => $services->active(),
          'projects' =>  $projects->featured(10),
          'testimonials' => $testimonials->active(),
          'clients'      => $clients->active(),
          'projects_'        => $projects->published(3),
        ]);

    }
}
