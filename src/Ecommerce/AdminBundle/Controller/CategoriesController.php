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

		$categories = $this->getCategories();
		$category = new Category();
		$medias = new Media();

		$form   = $this->createForm(CategoryType::class, $category);



		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {
			$category->setName($form['name']->getData());
			$em = $this->getDoctrine()->getManager();
			$category->setPreview($form['preview']->getData());

			$files = $form['medias']->getData()->toArray()['files']->files;
			$media_array = [];
			foreach($files as $file) {
				$media = $medias->save($file);
				$media->setCategory($category);

				$media_array[] = $media;
			}
			$category->setMedias($media_array);
			$em->persist($category);
			$em->flush();



			return $this->redirectToRoute('admin_categories');
		}


		return $this->render('AdminBundle:Category:categories.html.twig', array(
		                                                                        'form' => $form->createView(),
		                                                                        'categories' => $categories,
		                                                                        ));

	}


	public  function getCategories() {
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
