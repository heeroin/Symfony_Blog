<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i < 10; $i++) {
            $article = New Article();
            $article->setTitle("titre de l'article n$i")
                    ->setContent("ceci est un contenu de pur qualité ouaiiis")
                    ->setImage("http://placehold.it/350x150")
                    ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }

        $manager->flush();
    }
}
