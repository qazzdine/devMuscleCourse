<?php

namespace App\DataFixtures;

use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Repository\IngredientRepository;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{

    /**
     * @var Generator
     */
    private Generator $faker;

    public  function __construct()
    {
        $this->faker=Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager ): void
    {
        // $product = new Product();
        // $manager->persist($product);
       /* $ingredient = new Ingredient();
        $ingredient->setName('Ingredient #1')
            ->setPrice(3.0);*/

        for($i = 0 ;  $i <= 50 ; $i ++)
        {

            $ingredient = new Ingredient();
            $ingredient->setName($this->faker->word)
                ->setPrice(mt_rand(0,100));
            $manager->persist($ingredient);
        }

        $manager->flush();
    }
}
