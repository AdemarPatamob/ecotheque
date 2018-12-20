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
        'ASUS R540LA-XX1034T',
        'ASUS S430UA-EB265T',
        'LENOVO IDEAPAD 320-15AST',
        'LENOVO X1 CARBON 4G LTE',
        'Dell Vostro 15 3568',
        'Dell Inspiron 15-3567',
        'Dell G3 3579',
        'HP 15-db0026nf',
        'HP Pavilion 15-cs0016nf',
        'HP 17-ca0008nf',
        'MacBook Air',
        'MacBook Pro',
        'Acer Aspire A515-52-32TD',
        'Acer Swift SF315-52G-54WS',
        'Acer Aspire A315-32-P1ZH',
        'Samsung Chromebook Plus 513C24I',
        'Apple iPhone XS',
        'Apple iPhone 5s',
        'Apple iPhone 8',
        'Apple iPhone 7',
        'Asus ROG PHONE',
        'ASUS ZenFone Max',
        'Samsung S9',
        'Samsung A6',
        'Samsung J6',
        'Samsung J3',
        'TV LED SAMSUNG 50NU7025',
        'iPad 2'
    ];

    public function load(ObjectManager $manager)
    {

        foreach (self::MODELE as $modeleName) {
            $product = new Product();
            $product->setNeed(self::NEED[rand(0, 3)]);
            $product->setEnergyClass(self::ENERGYCLASS[rand(0, 5)]);
            $product->setGes(self::GES[rand(0, 5)]);
            $product->setBatteryRecyclability(random_int(0, 100));
            $product->setShutDownAuto(self::SHUTDOWNAUTO[rand(0, 1)]);
            $product->setAutonomy(random_int(1, 100));
            $product->setDescription('Avec le MacBook Pro, l’ordinateur portable atteint des sommets inédits en matière de performances et de portabilité. Quelles que soient les contrées où vous mènera votre imagination, vous parviendrez plus vite que jamais à vos objectifs grâce, entre autres, à des processeurs et à une mémoire hautes performances, à des graphismes avancés et à un système de stockage d’une rapidité fulgurante.');
            if ('F' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Pas bien du tout');
            } elseif ('E' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Pas bien');
            } elseif ('D' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Moyen moins');
            } elseif ('C' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Moyen plus');
            } elseif ('B' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Bien');
            } elseif ('A' == $product->getEnergyClass()) {
                $product->setEcologyNotice('Tres bien');
            }
            $product->setModel($modeleName);
            if (in_array($product->getModel(), ['ASUS TUF504GD-DM915T',
                'ASUS R540LA-XX1034T',
                'ASUS S430UA-EB265T',
                'LENOVO IDEAPAD 320-15AST',
                'LENOVO X1 CARBON 4G LTE',
                'Dell Vostro 15 3568',
                'Dell Inspiron 15-3567',
                'Dell G3 3579',
                'HP 15-db0026nf',
                'HP Pavilion 15-cs0016nf',
                'HP 17-ca0008nf',
                'MacBook Air',
                'MacBook Pro',
                'Acer Aspire A515-52-32TD',
                'Acer Swift SF315-52G-54WS',
                'Acer Aspire A315-32-P1ZH',
                'Samsung Chromebook Plus 513C24I'])) {
                $product->setCategory(self::CATEGORY[0]);
            } elseif (in_array($product->getModel(), ['Apple iPhone XS',
                'Apple iPhone 5s',
                'Apple iPhone 8',
                'Apple iPhone 7',
                'Asus ROG PHONE',
                'ASUS ZenFone Max',
                'Samsung S9',
                'Samsung A6',
                'Samsung J6',
                'Samsung J3'])) {
                $product->setCategory(self::CATEGORY[1]);
            } elseif ('TV LED SAMSUNG 50NU7025' == $product->getModel()) {
                $product->setCategory(self::CATEGORY[2]);
            } elseif ('iPad 2' == $product->getModel()) {
                $product->setCategory(self::CATEGORY[3]);
            }
            if ('Computer' == $product->getCategory()) {
                $product->setImage(self::IMAGE[0]);
                $product->setPrice(random_int(400, 2000));
                $product->setBatteryMovable(self::BATTERYMOVABLE[rand(0, 1)]);
                $product->setScreenSize(random_int(11, 17));
            } elseif ('Phone' == $product->getCategory()) {
                $product->setImage(self::IMAGE[1]);
                $product->setPrice(random_int(100, 1300));
                $product->setBatteryMovable(self::BATTERYMOVABLE[rand(0, 1)]);
                $product->setScreenSize(random_int(4, 6));

            } elseif ('Tv' == $product->getCategory()) {
                $product->setImage(self::IMAGE[2]);
                $product->setPrice(random_int(200, 2000));
                $product->setBatteryMovable(self::BATTERYMOVABLE[0]);
                $product->setScreenSize(random_int(21, 40));

            } elseif ('Tablet' == $product->getCategory()) {
                $product->setImage(self::IMAGE[3]);
                $product->setPrice(random_int(80, 500));
                $product->setBatteryMovable(self::BATTERYMOVABLE[0]);
                $product->setScreenSize(random_int(8, 12));

            }

            $manager->persist($product);

        }
        $manager->flush();
    }
}