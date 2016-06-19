<?php
namespace Ecommerce\ProductBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\ProductBundle\Entity\Product;

class LoadProduct extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $manager)
  {
      //product

    $product = new Product;
    $product->setName('ASUS G752VT-GC037T');
    $product->addCategory($this->getReference('category2'));

    $product->setDescription("L'ordinateur portable ASUS G501VW vous apporte immédiatement toute la puissance dont vous avez besoin au quotidien pour exercer vos talents de gamer. Cet ultraportable est marqué par l'esprit des pc ASUS ROG (Republic Of Gamers) avec son design ultra-mince et soigné. Sa configuration est éprouvée pour garantir un confort d'utilisation et une expérience de jeu optimisés. Son écran 15.6 Full HD délivre un affichage précis, des images extrêmement détaillées et surprenantes de réalisme. Cet ultraportable puissant et performant est prêt à vous offrir ce dont vous aurez besoin pour vivre une grande expérience de jeu grâce à ses innovations technologiques.");
    $product->setSummary("Design conçu pour les Gamers. Cet ultraportable ASUS G501VW est spécialement conçu pour les gamers. Il possède de nombreuses caractéristiques innovantes et son châssis en aluminium ultra-mince et léger (2 Kg) assure une grande mobilité. Avec 21 mm d'épaisseur, le ROG G501 est l'un des plus minces dans sa catégorie. Son appartenance à la famille Republic Of Gamers est évidente avec sa coque noire et le célèbre logo ROG placé sur une partie d'aluminium brossé et vous aurez plaisir à le transporter partout où que vous allez. Son design ergonomique est conçu intelligemment jusqu'au large clavier rétroéclairé très réactif qui isole parfaitement chaque touche d'un pavé numérique complet. En outre, les touches ZQSD sont spécialement marquées pour facilité leur utilisation pendant les cessions de jeux. Au cœur de cet ultraportable. Le ASUS G501VW assure des performances de pointe éprouvées pour un PC portable. Il est armé jusqu'aux dents avec un processeur Intel® Core™ i7 sur une architecture Skylake avec 4 cœurs. Ce processeur apporte une valeur sûre aux besoins spécifiques des gamers et vous place au centre de l'action. De plus, le processeur Core™ i7 optimise les économies d'énergie sans compromis sur les performances. La carte graphique NVIDIA® GeForce® GTX 960M vous assure des rendus époustouflants où vos jeux s'animent pour vous faire vivre une expérience de jeu inégalée. Cet ordinateur portable est doté d'un disque dur de 1 To pour stocker toutes vos données numériques et d'un SSD de 128 Go pour exécuter plus rapidement le système d'exploitation Windows 10 Home, vos applications et vos jeux. Il dispose d'une mémoire élevée DDR4 de 8 Go pour accéder rapidement à toutes les données de ce pc. Parfaitement ventilé. La technologie améliorée Hyper Cool du ROG G501VW, développé par Asus, vous garantit un refroidissement silencieux et intelligent. Cet ultraportable gamer embarque deux ventilateurs indépendants et un dissipateur de chaleur en cuivre pour une gestion thermique efficace. Cette innovation technologique assur des performances stables, mêmes dans des conditions extrêmes. Le ROG G501VW entre dans la catégorie des portables gamers les plus silencieux du marché malgré son système de refroidissement ultra performant. Il vous assure de rester au frais durant la bataille ! ");
    $product->setStatus(1);
    $manager->persist($product);

    $product2 = new product;
    $product2->setName( 'ASUS ZenBook Pro UX501JW-CN484T');
    $product2->addCategory($this->getReference('category2'));

    $product2->setDescription( "La tradition ZENBOOK continue avec cette nouvelle génération. Utilisant un processeur Intel core de dernière génération, ce ZENBOOK UX501JW se pare en plus d’une robe faite d’aluminium. Plus fin et plus léger que ses prédécesseurs, il redéfini encore le concept de finesse à un nouveau niveau. D’une élégance inégalée, ce ZENBOOK UX501JW possède un écran Full HD et une carte graphique NVIDIA dédiée. Couplé à Windows 10, cela en fait l’outil parfait de divertissement, de mobilité mais aussi de travail. Sa connectivité et sa finesse en font un outil polyvalent extrêmement mobile. Enfin, son autonomie de 6 heures* procure une liberté sans faille à son utilisateur.");
    $product2->setSummary("Derrière le nom de code Zenbook UX501JW-CN484T, Asus a conçu un ordinateur polyvalent, compact et rapide. Mais au premier regard, c'est d'abord son look qui marque les esprits. Ultra-fin et très léger (2,13 cm d'épaisseur max. pour 2,06 kg seulement), il est également très moderne avec son capot type 'aluminium brossé'. Les yeux s'attardent ensuite sur son écran Full HD de 15.6 au traitement anti-reflets très pratique pour une utilisation en extérieur. Le roi du multimédia. A l'aise pour le travail, ce Zenbook UX501JW-CN484T d'Asus l'est encore plus avec le divertissement numérique. Son écran à LED rétroéclairé y est pour beaucoup ainsi que sa carte graphique NVIDIA GeForce GTX 960M pour des visuels extraordinaires.
                          Le son n'est pas en reste puisque ce PC intègre 2 haut-parleurs stéréo Bang & Olufsen ICEpower avec la technologie ASUS SonicMaster, soit le top en matière de qualité audio. Les amateurs de photo pourront transférer leurs oeuvres sur l'ordinateur directement à partir de son lecteur de cartes mémoire. ");
    $product2->setStatus(1);
    $manager->persist($product2);

    $product3 = new product;
    $product3->setName( 'LG 49UF685V');
    $product3->addCategory($this->getReference('category3'));

    $product3->setDescription( "Profitez de tous vos divertissements favoris sur ce téléviseur en Ultra HD 4K ! Pour la télévision ou la navigation sur internet ne rognez pas sur la qualité ! L’Ultra Haute Définition associée à l'élégance du design Cinéma Screen vous plonge au cœur d'une expérience visuelle totalement immersive ! ");
    $product3->setSummary("Les téléviseurs LG ULTRA HD 4K donnent vie à chacune des couleurs. Chaque scène se transforme en un paysage à admirer : l'exceptionnelle performance de l'ULTRA Haute Définition résidant dans la dalle IPS 4K permet de délivrer des couleurs réalistes quel que soit l'angle de vision et ce, avec une définition 4 fois supérieure à celle du Full HD.Allumez votre téléviseur LG ULTRA HD et revisitez de chez vous les merveilles de ce monde. Laissez-vous immerger dans un monde d'images incroyablement précises et saisissantes. Autour de la norme 4K
                          Emissions, sport, films…même si les contenus que vous visionnez ne sont pas en résolution 4K, bénéficiez de l'éxeptionnelle qualité d'affichage des téléviseurs LG ULTRA HD. L'upscaler 4K développé par LG transforme en effet une qualité d'image conventionnelle en un résultat extraordinaire. En outre, l'HEVC est le format destiné à devenir le standard en matière de compression vidéo ULTRA HD. Grâce à l'HEVC, bénéficiez de contenus ULTRA HD provenant du web ou d'un périphérique de stockage (tel qu'une clé USB) sans avoir recours à un quelconque appareil supplémentaire
                          Avec un téléviseur SMART TV, un monde nouveau de divertissements s'ouvre à vous. Ce téléviseur vous permet d'ouvrir une interface qui vous donne accès à tout ce vous aimez en un seul clic. Sélectionnez une application, un programme TV, un service de VOD ou un périphérique externe connecté à votre téléviseur, Votre barre de lancement personnalisable devient le point d'accès à l'ensemble de votre divertissement. Un son puissant Ultra Surround.La technologie ULTRA Surround produit un son comme s'il provenait de 7 directions différentes. Le son multi-canal ainsi obtenu immerge le spectateur. Des connectiques pour accroître les capacités de lecture. Une connectique HDMI est essentielle pour profiter au mieux des contenus issus d'appareils externes. Le HDMI est capable de véhiculer un important flux de données vidéo et audio, sans perte de qualité. Et grâce à la fonction SmartShare, naviguez rapidement et facilement à travers les fichiers de vos périphériques compatibles DLNA, ou de vos disques durs externes connectés. ");
    $product3->setStatus(1);
    $manager->persist($product3);
    $manager->flush();


    $product4 = new product;
    $product4->addCategory($this->getReference('category2'));

    $product4->setName("SAMSUNG Galaxy S6 Edge");
    $product4->setDescription( "Samsung presente le Galaxy S6 Edge ! Le smartphone qui repousse les limites de vitesse, de puissance et de performances, tout en offrant un design ultra soigné et incurvé !");
    $product4->setSummary("Un design de rêve
                          Le Samsung Galaxy S6 Edge possède des lignes fluides et galbés pour offrir un design soigné. Ses courbes sont sertis avec un effet métal pour lui offrir un aspect chic et sa finesse en font un objet agréable à utiliser et à prendre en main !
                          Samsung Galaxy S6 Edge - Design de reveUne interface qui vous ressemble
                          La nouvelle interface du Galaxy S6 Edge est d'une fluidité à toute épreuve ! Personnalisez le très facilement dans ses moindres détails et profitez de fonctions ergonomiques et intelligentes. Découvrez également un accès innivant à vos contacts et applications favoris grâce à etiquedge et à l'écran latéral !
                          Écran haute définition
                          Le Galaxy S6 Edge est un smartphone pensé pour vous accompagner n'importe où, n'importe quand. Son écran Super Amoled HD 3.6 M de pixels est ultra résistant grâce à son verre deux fois plus résistant Gorilla Glass 4 et vous assure une lisibilité parfaite même en plein soleil !
                          Galaxy S6 Edge - Chargement inductionDeux objectifs 16 Mpx et 5 Mpx
                          Avec son jeu d'objectif 16 Mpx (arrière) et 5 Mpx (avant) le Galaxy S6 Edge immortalisera toutes vos émotions instantanément ! Photos ultra nettes, en plein jour ou dans des conditions très sombres, mais aussi des selfie en panorama, vous permettront de laisser libre court à toute votre imagination.");
    $product4->setStatus(1);
    $manager->persist($product4);

    $product5 = new product;
    $product5->setName( 'NIKON D3300 18-55 DX VR');
    $product5->addCategory($this->getReference('category4'));

    $product5->setDescription( "Le réflex NIKON D3300 est un appareil photo muni d'un zoom de qualité pour des clichés d'une exceptionnelle justesse.");
    $product5->setSummary("Profitez d'un kit avec zoom de grande qualité, idéal pour la photographie classique incluant l'appareil photo D3300 et le zoom ultra-compact 3x AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR. L'objectif fourni  avec cet appareil photo reflex est doté du système de réduction de vibration qui vous permettra de réduire les flous de bougé et d'un mécanisme d'objectif rétractable pour une portabilité encore plus importante.
                          24,2 millions de pixels exploités au maximum
                          Délibérément dépourvu de filtre passe-bas optique, le capteur d'image du Nikon D3300 tirera le meilleur parti de ses 24,2 millions de pixels pour saisir avec une netteté impressionnante les textures les plus détaillées.
                          Des effets spéciaux artistiques
                          Doté de 13 effets spéciaux différents, le D3300 vous permettra d'apporter en toute simplicité une touche artistique à vos photos et vidéos. Il  vous suffira pour cela de sélectionner Effets spéciaux et de choisir l'option que vous souhaitez appliquer avant de prendre votre cliché. Sélectionnez Pop pour éclaircir les couleurs, prenez tout un paysage avec le Panoramique simplifié ou apportez une touche rétro avec l'Effet appareil photo jouet.
                          Un système AF 11 points ultraprécis
                          Même si votre sujet se déplace rapidement ou de manière totalement imprévisible, le D3300 assurera toujours une mise au point appropriée. Le système AF 11 points ultraprécis du Nikon D3300, doté d'un capteur en croix en son centre, verrouille rapidement votre sujet et conserve la mise au point, que celui-ci soit décentré, qu'il se déplace rapidement ou qu'il se comporte de manière totalement imprévisible.
                          Une expérience Full HD
                          Utilisez la fonction D-Movie de l'appareil photo pour réaliser des vidéos dont vous serez fier. Vous pouvez enregistrer des séquences vidéo Full HD extrêmement nettes (1080p), quelle que soit la luminosité, à des cadences allant jusqu'à 50p/60p avec autofocus continu, ce qui vous garantit des scènes d'action fluides, aussi rapides soient-elles.
                          Un grand écran ACL
                          Vous pourrez tout à fait utiliser le D3300 à la manière d'un compact ou d'un smartphone pour photographier ou filmer des scènes à l'aide du grand écran ACL de 7,5 cm (3 pouces). Composez ou visualisez des images et appliquez des effets spéciaux avec une excellente visibilité grâce au grand angle de vue et à la définition de 921 000 pixels.
                          Une prise en main simple et intuitive
                          Accédez aux modes D-Movie et visée écran via des boutons dédiés. Utilisez la commande i, située à l'arrière de l'appareil photo, pour passer outre le menu principal et régler rapidement les paramètres tout en photographiant votre sujet. Lorsque vous vous servez du viseur, vous pouvez choisir entre une interface classique et une interface graphique qui anime les réglages. Vous constatez ainsi plus simplement les modifications apportées.
                          Un viseur optique large et lumineux
                          Le viseur optique lumineux et large du Nikon D3300, vous permettra de prendre aisément les photos au bon moment, lorsqu'il s'agit notamment de sujets distants en mouvement rapide.
                          Un appareil photo compact
                          Pesant seulement 410 g (boîtier uniquement) et muni d'un petit objectif rétractable, le D3300 simplifie plus que jamais le transport d'un reflex numérique. Malgré ses dimensions compactes, sa grande poignée confortable permet de stabiliser l'appareil lorsque vous immortalisez les moments importants, où que ce soit.
                          Un objectif Nikkor
                          Tirez parti des légendaires objectifs NIKKOR au format DX de Nikon, conçus pour exploiter au mieux le nombre élevé de pixels du Nikon D3300. Réalisez des photos et des vidéos aux couleurs vives, aux contrastes saisissants et aux détails nets : utilisez des objectifs à focale fixe lumineux pour des portraits époustouflants, des objectifs micro pour des gros plans en taille réelle ou des téléobjectifs pour obtenir des images parfaitement nettes de sujets distants.");
$product5->setStatus(1);
$manager->persist($product5);

$manager->flush();


$this->addReference('product', $product);
$this->addReference('product2', $product2);
$this->addReference('product3', $product3);
$this->addReference('product4', $product4);
$this->addReference('product5', $product5);


}

public function getOrder() {
  return 2;
}
}