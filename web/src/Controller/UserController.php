<?php

namespace App\Controller;

use App\Entity\City;
use App\Entity\House;
use App\Entity\User;
use App\Entity\Village;
use App\Form\AddressFormType;
use App\Repository\CityRepository;
use App\Repository\HouseRepository;
use App\Repository\UserRepository;
use App\Repository\VillageRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use layout\spacelab;

class UserController extends BaseController
{
    /**
     * @return Response
     * @Route("/xhavlikvojtech_new", name="xhavlikvojtech_new")
     */
    public function new(): Response
    {

        // preda data do sablony
        return $this->render("User/new.html.twig");
    }

    /**
     * @return Response
     * @Route("/xhavlikvojtech_delete", name="xhavlikvojtech_delete")
     */
    public function delete(): Response
    {

        // preda data do sablony
        return $this->render("User/delete.html.twig");
    }

    /**
     * @return Response
     * @Route("/xhavlikvojtech_edit", name="xhavlikvojtech_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("User/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("/xhavlikvojtech_detail", name="xhavlikvojtech_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("User/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("/xhavlikvojtech_default", name="xhavlikvojtech_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("User/default.html.twig");
    }
}