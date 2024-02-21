<?php declare(strict_types=1);

namespace App\EventListener;

use App\Entity\CarshopVehicle;
use App\Entity\LiveTask;
use Crp\LiveTaskTypes;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

class SalonVehicleListener implements EventSubscriber
{
    private $manager;

    public function getSubscribedEvents()
    {
        return [
          Events::postPersist,
          Events::postRemove,
          Events::postUpdate
        ];
    }

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function postPersist(LifecycleEventArgs $args): void
    {
        $this->addLiveTask($args);
    }

    public function postUpdate(LifecycleEventArgs $args): void
    {
        $this->addLiveTask($args);
    }

    public function postRemove(LifecycleEventArgs $args): void
    {
        $this->addLiveTask($args);
    }

    private function addLiveTask(LifecycleEventArgs $args): void
    {
        if( !($args->getObject() instanceof CarshopVehicle)) {
            return;
        }

        $repository = $this->manager->getRepository(LiveTask::class);

        if( null === $repository->findOneBy(['type' => LiveTaskTypes::TYPE_RELOAD_SALON_VEHICLES]) ) {
            $task = new LiveTask(LiveTaskTypes::TYPE_RELOAD_SALON_VEHICLES, '');

            $this->manager->persist($task);
            $this->manager->flush();
        }
    }
}