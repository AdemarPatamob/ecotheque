<?php
/**
 * Created by PhpStorm.
 * User: raphael
 * Date: 20/12/18
 * Time: 18:18
 */

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class ProductFixtures extends Fixture
{
    const CATEGORY = [
        'Computer',
        'Phone',
        'Tv',
        'Tablet'
    ];
    const BRAND = [
        'Lenovo',
        'Asus',
        'Dell',
        'HP',
        'Apple',
        'Acer',
        'Samsung'
    ];
    const NEED = [
        'Gaming',
        'Video',
        'Office',
        'Design'
    ];

    const ENERGYCLASS = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F'
    ];

    const GES = [
        'A',
        'B',
        'C',
        'D',
        'E',
        'F'
    ];

    const BATTERYMOVABLE = [
        0,
        1,
    ];

    const SHUTDOWNAUTO = [
        0,
        1,
    ];

    const IMAGE = [
        'https://www.asus.com/media/global/products/ZmSE1Ym99hKS3cLp/P_setting_xxx_0_90_end_300.png',
        'https://pngimage.net/wp-content/uploads/2018/06/iphone-png-transparent-background-5.png',
        'https://chocobonplan.com/wp-content/uploads/2018/10/TV-Samsung-UE49MU6405-UHD-4K-300x300.png',
        'https://png.pngtree.com/element_origin_min_pic/16/11/16/14582bf78fbc6a9.jpg'

    ];

    const MODELE = [
        'ASUS TUF504GD-DM915T',
        'iPhone 5s',
        'TV LED SAMSUNG 50NU7025',
        'iPad 2'
    ];

    public function load(ObjectManager $manager)
    {

        for ($i = 0; $i < 30; $i++) {
                $product = new Product();
                $product->setCategory(self::CATEGORY[rand(0,3)]);
                $product->setBrand(self::BRAND[rand(0,6)]);
                $product->setNeed(self::NEED[rand(0,3)]);
                $product->setPrice(random_int(100, 2000));
                $product->setEnergyClass(self::ENERGYCLASS[rand(0,5)]);
                $product->setGes(self::GES[rand(0,5)]);
                $product->setBatteryMovable(self::BATTERYMOVABLE[rand(0,1)]);
                $product->setBatteryRecyclability(random_int(0, 100));
                $product->setScreenSize(random_int(10, 100));
                $product->setShutDownAuto(self::SHUTDOWNAUTO[rand(0,1)]);
                $product->setAutonomy(random_int(1,100));
                $product->setDescritption('Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.');
            if ('Computer' == $product->getCategory()){
                $product->setImage(self::IMAGE[0]);
                $product->setModel(self::MODELE[0]);
            }
            elseif ('Phone' == $product->getCategory()){
                $product->setImage(self::IMAGE[1]);
                $product->setModel(self::MODELE[1]);
            }
            elseif ('Tv' == $product->getCategory()){
                $product->setImage(self::IMAGE[2]);
                $product->setModel(self::MODELE[2]);
            }
            elseif ('Tablet' == $product->getCategory()){
                $product->setImage(self::IMAGE[3]);
                $product->setModel(self::MODELE[3]);
            }

                $manager->persist($product);

        }
        $manager->flush();
    }
}