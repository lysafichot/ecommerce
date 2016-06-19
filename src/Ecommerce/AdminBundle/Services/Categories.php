<?php
namespace Ecommerce\AdminBundle\Services;
use Ecommerce\ProductBundle\Entity\Category;

class Categories
{
	public function range() {
$repository = $this->getDoctrine()->getRepository('ProductBundle:Category');
		$categories = $repository->findAll();
		$allCategories = [];

		$repo = $this->getDoctrine()->getRepository('ProductBundle:Media');

		foreach ($categories as $category) {

			$medias = $repo->findBy(array('category' => $category->getId()));

			$allCategories[$category->getId()] = $category;
			$allCategories[$category->getId()]->setMedias($medias);

		}
		/*var_dump( $repository->findSousCategorie());*/

		foreach ($categories as $key => $category) {
			if($category->getIdParent() != NULL) {
				$allCategories[$category->getIdParent()]->children[] = $category;
				unset($categories[$key]);
			}
		}
		return $categories;
	}
}