<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('The Dark Knight2');
        $movie->setReleaseYear(2008);
        $movie->setDescription('This is the description of the Dark Knight2.');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2023/03/14/21/53/sculpture-7853242_1280.jpg');
        $movie->addActor(($this->getReference('actor_1')));
        $movie->addActor(($this->getReference('actor_2')));
        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('Avengers');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('This is the description of the Avengers.');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2020/04/15/02/39/avengers-5044925_1280.jpg');
        $movie2->addActor(($this->getReference('actor_3')));
        $movie2->addActor(($this->getReference('actor_4')));
        $manager->persist($movie2);

        $manager->flush();
    }
}
