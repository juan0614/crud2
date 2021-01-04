<?php

namespace App\Controller\Admin;

use App\Entity\Company;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field;

class CompanyCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Company::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            Field\TextField::new("name"),
            Field\NumberField::new("identification"),
            Field\TextField::new("address"),
            Field\TelephoneField::new("telephone"),
            Field\EmailField::new("email"),
            Field\DateField::new("birthDate"),
            Field\DateTimeField::new("create_at")->onlyOnIndex(),
            Field\DateTimeField::new("update_at")->onlyOnIndex()
        ];
    }
}
