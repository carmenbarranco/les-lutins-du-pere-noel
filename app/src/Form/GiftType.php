<?php

namespace App\Form;

use App\Entity\FactoryGifts;
use App\Entity\Gift;
use App\Entity\GiftCode;
use App\Entity\TrainingOrganisation;
use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GiftType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom',
            ])
            ->add('description', TextType::class, [
                'label' => "Description"
            ])
            ->add('factoryGifts', EntityType::class, [
                'class' => FactoryGifts::class,
                'label' => 'Usine',
            ])
            ->add('code', EntityType::class, [
                'required' => false,
                'class' => GiftCode::class,
                'label' => 'Code',
            ])
            ->add('price', IntegerType::class, [
                'label' => "Prix"
            ])
            ->add('receiver', EntityType::class, [
                'label' => 'Destinataire',
                'class' => User::class,
                'query_builder' => function (EntityRepository $u) {
                $role = "ROLE_RECEIVER";
                    return $u->createQueryBuilder('u')
                        ->andWhere('u.roles LIKE :role')
                        ->setParameter('role', '%' . $role . '%')
                        ->orderBy('u.firstName', 'ASC');
                },
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Gift::class,
        ]);
    }
}
