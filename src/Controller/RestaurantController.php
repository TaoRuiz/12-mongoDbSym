<?php

namespace App\Controller;

use App\Document\Restaurant;
use App\Form\TestFormType;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant/list", name="restaurant_index")
     */
    public function index(DocumentManager $dm, AdapterInterface $cache)
    {
        $item = $cache->getItem("all_restaurants");
        if (!$item->isHit()) { //Si j'ai rien en cache
            $restaurants = $dm->getRepository(Restaurant::class)->findAll();
            $item->set($restaurants);
            $cache->save($item);
        }

        return $this->render('restaurant/index.html.twig', [
            'restaurants' => $item->get()
        ]);
    }

    /**
     * @Route("/restaurant/new", name="restaurant_create")
     */
    public function create(DocumentManager $dm)
    {
        $restaurant = new Restaurant();

        //$form = $this->createForm(TestFormType::class, $restaurant);


        $restaurant->setName('McDonalds')
            ->setAddress("23, Boulevard Inconnu")
            ->setCity("Dreamland")
            ->setPhone("0699999999")
            ->setZipCode("99999");

        $dm->persist($restaurant);
        $dm->flush();
        dd("c'est ok");
        //return $this->render('home/index.html.twig', []);
    }
}
