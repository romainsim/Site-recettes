<?php

namespace App\Controller;

use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Membre;
use App\Entity\Plat;
use App\Entity\Reservation;
use App\Form\CreerCompteType;
use App\Form\FormReservationType;
use App\Form\ReservationFormType;
use ContainerQ4xIxHD\getConsole_ErrorListenerService;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(): Response
    {
        $entrees = $this->getDoctrine()->getRepository(Entree::class)->findAll();
        $plats = $this->getDoctrine()->getRepository(Plat::class)->findAll();
        $desserts = $this->getDoctrine()->getRepository(Dessert::class)->findAll();
        // Va permettre d'avoir des recettes au hasard
        shuffle($entrees);
        shuffle($plats);
        shuffle($desserts);
        return $this->render('default/index.html.twig', [
            "entree" => $entrees,
            "plat" => $plats,
            "dessert" => $desserts
        ]);
    }

    /**
     * @Route("/entree", name="entree")
     */
    public function entree(): Response
    {
        $entrees = $this->getDoctrine()->getRepository(Entree::class)->findAll();
        return $this->render('default/entree.html.twig', [
            "entree" => $entrees
        ]);
    }

    /**
     * @Route("/plat", name="plat")
     */
    public function plat(): Response
    {
        $plats = $this->getDoctrine()->getRepository(Plat::class)->findAll();
        return $this->render('default/plat.html.twig', [
            "plat" => $plats
        ]);
    }

    /**
     * @Route("/dessert", name="dessert")
     */
    public function dessert(): Response
    {
        $desserts = $this->getDoctrine()->getRepository(Dessert::class)->findAll();
        return $this->render('default/dessert.html.twig', [
            "dessert" => $desserts
        ]);
    }

    /**
     * @Route("/reservation", name="reservation")
     */
    public function reservation() {

        return $this->render('default/reservation.html.twig', [

        ]);
    }

    /**
     * @Route("/entree/{id}", name="recetteE")
     */
    public function recetteEntree($id): Response {
        $entree = $this->getDoctrine()->getRepository(Entree::class)->find($id);

        return $this->render('default/recetteEntree.html.twig', [
            "entree" => $entree
        ]);
    }

    /**
     * @Route("/plat/{id}", name="recetteP")
     */
    public function recettePlat($id): Response {
        $plat = $this->getDoctrine()->getRepository(Plat::class)->find($id);

        return $this->render('default/recettePlat.html.twig', [
            "plat" => $plat
        ]);
    }

    /**
     * @Route("/dessert/{id}", name="recetteD")
     */
    public function recetteDessert($id): Response {
        $dessert = $this->getDoctrine()->getRepository(Dessert::class)->find($id);

        return $this->render('default/recetteDessert.html.twig', [
            "dessert" => $dessert
        ]);
    }

    /**
     * @Route("/creerCompte",name="compte")
     */
    public function creationCompte(Request $request, UserPasswordEncoderInterface $encoder) {
        $membre = new Membre();
        $form = $this->createForm(CreerCompteType::class, $membre);
        $membre->setAdmin(false);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $plainPassword = $form["password"]->getData();
            $password = $encoder->encodePassword($membre, $plainPassword);
            $membre->setPassword($password);
            $em = $this->getDoctrine()->getManager();
            $em->persist($membre);
            $em->flush();
            return $this->redirectToRoute('default');
        }

        return $this->render('default/creerCompte.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/recapitulatif/{id}/{prix}", name="recap")
     */
    public function recapResa($id,$prix): Response {
        $reservation = $this->getDoctrine()->getRepository(Reservation::class)->find($id);
        if ($reservation->getDate() instanceof \DateTime) {
            $date1 = $reservation->getDate()->format('Y-m-d');
            setlocale(LC_TIME,'fr_FR.utf8','fra');
            $date = strftime("%A %d %B %Y", strtotime($date1));
        }
        return $this->render('default/recapRes.html.twig', [
            "reservation" => $reservation,
            "date" => $date,
            "prix" => $prix
        ]);
    }

    /**
     * @Route("/reservation/{id}", name="reserver")
     */
    public function reserver(Request $request, $id) {
        if ($id == 1)
            $prix = 12;
        else if ($id == 2)
            $prix = 35;
        else if ($id == 3)
            $prix = 65;
        else
            $prix = 150;

        $reservation = new Reservation();
        $form = $this->createForm(ReservationFormType::class,$reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('recap', array('id' => $reservation->getID(), 'prix' => $prix));
        }
        return $this->render('default/reserver.html.twig', [
            'form' => $form->createView(),
            'number' => $id
        ]);
    }
}
