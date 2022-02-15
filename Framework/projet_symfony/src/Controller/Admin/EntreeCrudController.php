<?php

namespace App\Controller\Admin;

use App\Entity\Entree;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Form\Type\VichImageType;

class EntreeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Entree::class;
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
