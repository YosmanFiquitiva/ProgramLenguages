<?php

namespace App\Controller\Admin;

use App\Entity\Lenguajes;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class LenguajesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Lenguajes::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('titulo'),
            TextEditorField::new('descripcion'),
            ImageField::new('imagen')
                ->setBasePath('uploads/images/')
                ->setUploadDir('public/uploads/images/'),
            UrlField::new('urlDoc'),
            ColorField::new('color')
        ];
    }
}
