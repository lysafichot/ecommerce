<?php
namespace Ecommerce\AdminBundle\Services;
use Ecommerce\ProductBundle\Entity\Category;
use Ecommerce\AccountBundle\Entity\Adresse;

use Ecommerce\ProductBundle\Entity\Product;
use Ecommerce\ProductBundle\Entity\ProductDerived;
class Services
{
	private $em = null;

	public function __construct(\Doctrine\ORM\EntityManager $em)
	{
		$this->em = $em;
	}


	public function rangeCategories()
	{
		$repository = $this->em->getRepository('ProductBundle:Category');
		$categories = $repository->findAll();
		$allCategories = [];

		$repo = $this->em->getRepository('ProductBundle:Media');
		foreach ($categories as $category) {

			$medias = $repo->findBy(array('category' => $category->getId()));

			$allCategories[$category->getId()] = $category;
			$allCategories[$category->getId()]->setMedias($medias);

		}
		foreach ($categories as $key => $category) {
			if($category->getIdParent() != NULL) {
				$allCategories[$category->getIdParent()]->children[] = $category;
				unset($categories[$key]);
			}
		}
		return $categories;
	}


	public function findProductSous($enfants, $products) {

		if(!empty($enfants)) {
			foreach ($enfants as $enfant) {
				$this->findProductSous( $this->em->getRepository('ProductBundle:Category')->findBy(['idParent' => $enfant->getId()]), $products);

				$products1 = $this->em->getRepository('ProductBundle:Product')->findByCategories($enfant->getId());
				$products = array_merge($products, $products1);
			}
		}
		return $products;

	}
	public function panier($products_panier, $session) {

		$total = 0;
		$price = 0;
		if(!empty($products_panier)) {
			foreach ($products_panier as $product) {

				$total += $product->count;
				$price += $product->count * $product->derived->getPrice();
			}
		} else {
			$products_panier = [];
		}
		$session->set('total',$total);
		$session->set('price',$price);
		$session->set('products',$products_panier);
	}



}