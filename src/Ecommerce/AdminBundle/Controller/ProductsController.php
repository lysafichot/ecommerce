<?php

namespace Ecommerce\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Ecommerce\AdminBundle\Form\ProductType;
use Ecommerce\AdminBundle\Form\ProductDerivedType;
use Ecommerce\ProductBundle\Entity\Media;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Ecommerce\ProductBundle\Entity\Product;
use Ecommerce\ProductBundle\Entity\ProductDerived;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductsController extends Controller
{

	public function addAction(Request $request)
	{
		$product = new Product();
		$medias = new Media();
		$form   = $this->createForm(ProductType::class, $product);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) {

			$product->setName($form['name']->getData());
			$product->setDescription($form['description']->getData());
			$product->setSummary($form['summary']->getData());
			$product->setStatus(1);
			$files = $product->getProductsDerived()->toArray()['derived']->getMedias()->toArray()[0]->files;
			$media_array = [];
			foreach($files as $file) {
				$media = $medias->save($file);
				$medias->setProductDerived($product->getProductsDerived()->toArray()['derived']);
				$media_array[] = $media;
			}
			$product->getProductsDerived()->toArray()['derived']->setProduct($product);
			$product->getProductsDerived()->toArray()['derived']->setMedias($media_array);

			$em = $this->getDoctrine()->getManager();
			$em->persist($product);

			$em->flush();
			return $this->redirectToRoute('admin_add_product');
		}
		return $this->render('AdminBundle:Product:add.html.twig', array(
		                                                                'form' => $form->createView(),
		                                                                ));
	}
	public function allAction(Request $request)
	{

		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('ProductBundle:Product')->findAll();

		$deleteForms = array();
		foreach($products as $product) {
			$deriveds = $em->getRepository('ProductBundle:ProductDerived')->findBy(['product' =>$product->getId()]);
			foreach ($deriveds as $derived) {
				$medias = $em->getRepository('ProductBundle:Media')->findBy(['productDerived' => $derived->getId()]);
				$product->medias = $medias;
				$deleteForms[$product->getId()] = $this->createDeleteForm($product->getId())->createView();
			}
		}
		return $this->render('AdminBundle:Product:all.html.twig', array(
		                                                                'products' => $products,
		                                                                'deleteForms' => $deleteForms,
		                                                                ));
	}
	private function createDeleteForm($id)
	{
		return $this->createFormBuilder(array('id' => $id))->add('id', 'hidden')->getForm();
	}
	public function viewAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$medias = new Media();

		$product = $em->getRepository('ProductBundle:Product')->find($id);
		$productDerived = new ProductDerived();
		$form   = $this->createForm(ProductDerivedType::class, $productDerived);
		$form->handleRequest($request);
		if ($form->isSubmitted()) {
			$productDerived->setNameDerived($form['name_derived']->getData());
			$productDerived->setPrice($form['price']->getData());
			$productDerived->setWeight($form['weight']->getData());
			$productDerived->setStatus($form['status']->getData());
			$productDerived->setProduct($product);
	$files = $productDerived->getMedias()->toArray()['files']->files;
			$media_array = [];
			foreach($files as $file) {
				$media = $medias->save($file);
				$medias->setProductDerived($productDerived);
				$media_array[] = $media;
			}
			$productDerived->setMedias($media_array);
			$em->persist($productDerived);

			$em->flush();

		}
		$derived = $em->getRepository('ProductBundle:ProductDerived')->findByProduct($id);
		$product->setProductsDerived($derived);
		if (null === $product) {
			throw new NotFoundHttpException("Le produit ".$id." est introuvables");
		}
		return $this->render('AdminBundle:Product:view.html.twig', array(
		                                                                 'product' => $product,
		                                                                 'form' => $form->createView(),

		                                                                 ));
	}
	public function deleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$product = $em->getRepository('ProductBundle:Product')->find($id);
		if (null === $product) {
			throw new NotFoundHttpException("Le produit ".$id." est introuvables");
		}
		$em->remove($product);
		$em->flush();

		return $this->redirectToRoute('admin_all_products');

	}
}
