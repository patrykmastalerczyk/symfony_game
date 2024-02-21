<?php
/**
 * Created by PhpStorm.
 * User: Tomek
 * Date: 12.01.2019
 * Time: 02:10
 */

namespace App\Twig\Extension;


use App\Entity\Group;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CrpGroupNameExtension extends AbstractExtension
{
    /** @var EntityRepository  */
    private $groupRepo;

    public function __construct(EntityManager $em)
    {
        $this->groupRepo = $em->getRepository('App\Entity\Group');
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('crpGroupName', [$this, 'getGroupName'])
        ];
    }

    public function getGroupName(int $groupUid) : string
    {
        /** @var Group $group */
        $group = $this->groupRepo->findOneBy(['id' => $groupUid]);

        if( !$group ) return "undefined";
        return $group->getName();
    }
}