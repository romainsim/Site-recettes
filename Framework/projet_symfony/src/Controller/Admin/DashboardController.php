<?php

namespace App\Controller\Admin;

use App\Entity\Dessert;
use App\Entity\Entree;
use App\Entity\Membre;
use App\Entity\Plat;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        // redirect to some CRUD controller
        $routeBuilder = $this->get(AdminUrlGenerator::class);
        return $this->redirect($routeBuilder->setController(EntreeCrudController::class)->generateUrl());

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Papilles');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Entree', 'fa fa-file-text', Entree::class);
        yield MenuItem::linkToCrud('Plat', 'fa fa-file-text', Plat::class);
        yield MenuItem::linkToCrud('Dessert', 'fa fa-file-text', Dessert::class);
        yield MenuItem::linkToCrud('Membre', 'fa fa-user', Membre::class);
        yield MenuItem::linkToLogout('Logout', 'fa fa-exit');
    }
}
