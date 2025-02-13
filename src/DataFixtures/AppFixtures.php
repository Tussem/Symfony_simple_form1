<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName("Product 1");
        $product->setDescription("This is description for product one");
        $product->setSize(100);

        $manager->persist($product);


        $product = new Product();
        $product->setName("Product 2");
        $product->setDescription("Some description of second product");
        $product->setSize(250);

        $manager->persist($product);
        
        $manager->flush();
    }
}
