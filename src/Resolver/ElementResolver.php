<?php declare(strict_types=1);

namespace App\Resolver;

use App\Enum\LogLinkTypeEnum;
use App\Service\ConfigManager;
use Doctrine\ORM\EntityManagerInterface;

class ElementResolver
{
    /**
     * @var EntityManagerInterface
     */
    private $manager;

    /**
     * @var ConfigManager
     */
    private $configManager;

    public function __construct(ConfigManager $configManager, EntityManagerInterface $manager)
    {
        $this->manager = $manager;
        $this->configManager = $configManager;

    }

    /**
     * @param string $type
     * @param int $id
     * @return null|object
     * @throws
     */
    public function byLogLink(string $type, int $id)
    {
        $elementDetailConfig = $this->configManager->getElementWithDetailsTag($type);

        if( !$elementDetailConfig ) throw new \Exception('Unsupported log link type.');
        if( !class_exists($elementDetailConfig['class']) ) throw new \Exception('Log link type class not found.');

        $elementRepository = $this->manager->getRepository($elementDetailConfig['class']);

        return $elementRepository->findOneBy(['id' => $id]);
    }
}