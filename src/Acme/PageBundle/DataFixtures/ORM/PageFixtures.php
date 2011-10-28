<?php

namespace Acme\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Acme\PageBundle\Entity\Blog;

class PageFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        $page1 = new Page();
        $page1->setTitle('A day with Symfony2');
        $page1->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut velocity magna. Etiam vehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras el mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis, justo mauris lacinia libero, non facilisis purus ipsum non mi. Aliquam sollicitudin, augue id vestibulum iaculis, sem lectus convallis nunc, vel scelerisque lorem tortor ac nunc. Donec pharetra eleifend enim vel porta.');
        $page1->setImage('beach.jpg');
        $page1->setAuthor('dsyph3r');
        $page1->setTags('symfony2, php, paradise, symblog');
        $page1->setCreated(new \DateTime());
        $page1->setUpdated($page1->getCreated());
        $manager->persist($page1);

        $page2 = new Page();
        $page2->setTitle('The pool on the roof must have a leak');
        $page2->setBlog('Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Na. Cras elementum molestie vestibulum. Morbi id quam nisl. Praesent hendrerit, orci sed elementum lobortis.');
        $page2->setImage('pool_leak.jpg');
        $page2->setAuthor('Zero Cool');
        $page2->setTags('pool, leaky, hacked, movie, hacking, symblog');
        $page2->setCreated(new \DateTime("2011-07-23 06:12:33"));
        $page2->setUpdated($page2->getCreated());
        $manager->persist($page2);

        $page3 = new Page();
        $page3->setTitle('Misdirection. What the eyes see and the ears hear, the mind believes');
        $page3->setBlog('Lorem ipsumvehicula nunc non leo hendrerit commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $page3->setImage('misdirection.jpg');
        $page3->setAuthor('Gabriel');
        $page3->setTags('misdirection, magic, movie, hacking, symblog');
        $page3->setCreated(new \DateTime("2011-07-16 16:14:06"));
        $page3->setUpdated($page3->getCreated());
        $manager->persist($page3);

        $page4 = new Page();
        $page4->setTitle('The grid - A digital frontier');
        $page4->setBlog('Lorem commodo. Vestibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque. Nulla consectetur tempus nisl vitae viverra.');
        $page4->setImage('the_grid.jpg');
        $page4->setAuthor('Kevin Flynn');
        $page4->setTags('grid, daftpunk, movie, symblog');
        $page4->setCreated(new \DateTime("2011-06-02 18:54:12"));
        $page4->setUpdated($page4->getCreated());
        $manager->persist($page4);

        $page5 = new Page();
        $page5->setTitle('You\'re either a one or a zero. Alive or dead');
        $page5->setBlog('Lorem ipsum dolor sit amet, consectetur adipiscing elittibulum vulputate mauris eget erat congue dapibus imperdiet justo scelerisque.');
        $page5->setImage('one_or_zero.jpg');
        $page5->setAuthor('Gary Winston');
        $page5->setTags('binary, one, zero, alive, dead, !trusting, movie, symblog');
        $page5->setCreated(new \DateTime("2011-04-25 15:34:18"));
        $page5->setUpdated($page5->getCreated());
        $manager->persist($page5);

        $manager->flush();
        
        $this->addReference('blog-1', $page1);
        $this->addReference('blog-2', $page2);
        $this->addReference('blog-3', $page3);
        $this->addReference('blog-4', $page4);
        $this->addReference('blog-5', $page5);
    }
    
    public function getOrder()
    {
        return 1;
    }
}