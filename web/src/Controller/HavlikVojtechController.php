<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\City;
use App\Entity\User;
use App\Entity\Users;
use App\Form\AddressFormType;
use App\Repository\AddressRepository;
use App\Repository\CityRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Asset\UrlPackage;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use layout\spacelab;

class HavlikVojtechController extends BaseController
{
    /**
     * @return Response
     * @Route("/", name="homepage_default")
     */
    public function default(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/default.html.twig", array("layoutName" => $this->getParameter("layout").".html.twig"));
    }

    /**
     * @return Response
     * @Route("/add", name="homepage_add")
     */
    public function add(ManagerRegistry $doctrine, UserRepository $user): Response
    {


        $entityManager = $doctrine->getManager();
        $data1 = new User();
        $data1->setJmeno("Vojtech");
        $data1->setPrijmeni("Havlik");
        $data1->setTelephone("606070968");
        $entityManager->persist($data1);
        $entityManager->flush();

        /**$address = $entityManager->getRepository(City::class);
        //$data2 = $address->find(2);

        //$address = $entityManager->getRepository(City::class)
        //$address->getCity()->setCity("Praha 16");
        //$address->setJmeno();
        //$entityManager->persist($address);
        //$entityManager->flush();

        //$data1 = $Jmeno->findAll();

        //$user = $entityManager->getRepository(City::class);
        $entityManager->remove($user);
        $entityManager->flush();

        $address1 = new UserRepository($doctrine);
        $data4 = $address1->getAllData();

        $sql = 'DELETE FROM users WHERE name = "HavlikVojtech"';
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->execute();

        $users = $entityManager->getRepository(City::class);
        $data3 = $users->findAll();

        $data4 = $users->findBy(array("name" => "Novak"), array ("name" => "DESC"), 1, 0);

        $data5 = $users->findBy(array("name" => "ASC"), 100, 0);

        $data = array("houska", "rohlik", "chleba");*/
        return $this->render("Homepage/add.html.twig");
    }

    /**
     * @return Response
     * @Route("/edit", name="homepage_edit")
     */
    public function edit(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/edit.html.twig");
    }

    /**
     * @return Response
     * @Route("/detail", name="homepage_detail")
     */
    public function detail(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/detail.html.twig");
    }

    /**
     * @return Response
     * @Route("/spacelab", name="homepage_detail")
     */
    public function spacelab(): Response
    {

        // preda data do sablony
        return $this->render("Homepage/spacelab.html.twig");
        return $this->setLayout("index.html");

    }


}

