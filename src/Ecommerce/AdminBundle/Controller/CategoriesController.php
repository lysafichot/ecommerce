<?php

namespace Ecommerce\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AdminBundle\Form\CategoryType;
use Ecommerce\ProductBundle\Entity\Category;
use Ecommerce\ProductBundle\Entity\Media;
use Symfony\Component\HttpFoundation\File\UploadedFile;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CategoriesController extends Controller
{
	public function getAction()
	{
	}
	/**
	 * @Route("/admin/add-category", name="add_category")
     	 */
	public function addAction(Request $request)
	{
		$serviceCategory = $this->get('ecommerce.services');
		$categories= $serviceCategory->rangeCategories();
		$category = new Category();
		$medias = new Media();

		$form   = $this->createForm(CategoryType::class, $category);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$category->setName($form['name']->getData());
			$category->setPreview($form['preview']->getData());

			$files = $form['medias']->getData()->toArray()['files']->files;
			$media_array = [];
			foreach($files as $file) {
				$media = $medias->save($file);
				$media->setCategory($category);
				$media_array[] = $media;
			}
			$category->setMedias($media_array);

			$em = $this->getDoctrine()->getManager();
			$em->persist($category);
			$em->flush();
			return $this->redirectToRoute('admin_categories');
		}
		return $this->render('AdminBundle:Category:categories.html.twig', array(
		                                                                        'form' => $form->createView(),
		                                                                        'categories' => $categories,
		                                                                        ));

	}

	public function allproductsAction($id) {
		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('ProductBundle:Product')->findByCategories($id);
		return $this->render('AdminBundle:Product:categorised.html.twig', array(
		                                                                        'products' => $products
		                                                                        ));
	}
	public function deleteAction($id) {
		$em = $this->getDoctrine()->getManager();
		$category = $em->getRepository('ProductBundle:Category')->find($id);
		$categoryEnfant = $em->getRepository('ProductBundle:Category')->findBy(['idParent' =>$id]);
		if (null === $category) {
			throw new NotFoundHttpException("La categorie ".$id." est introuvables");
		}
		$em->remove($category);
		foreach ($categoryEnfant as $enfant) {
			$em->remove($enfant);
		}
		$em->flush();
		return $this->redirectToRoute('admin_categories');
	}
}
