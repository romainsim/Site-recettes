<?php

namespace App\Controller\Admin;

use App\Entity\Dessert;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DessertCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dessert::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('designation'),
            TextField::new('description'),
            TextareaField::new('ingredients'),
            TextareaField::new('recette'),
            IntegerField::new('tempspreparation'),
            IntegerField::new('tempscuisson'),
            $filename = ImageField::new('imgrecette','Image')
                ->setBasePath('images')
                ->setUploadDir('public/images/')
        ];
    }
}
