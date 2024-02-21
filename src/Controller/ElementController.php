<?php declare(strict_types=1);

namespace App\Controller;

use App\Resolver\ElementResolver;
use App\Service\ConfigManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ElementController extends AbstractController
{
    /**
     * @var ElementResolver
     */
    private $elementResolver;

    private $configManager;

    public function __construct(ConfigManager $configManager, ElementResolver $elementResolver)
    {
        $this->elementResolver = $elementResolver;
        $this->configManager = $configManager;
    }

    /**
     * @Route("/ajax/element-details/{type}:{id<\d+>}", name="crp_ajax_element_details", methods={"GET"})
     *
     * @param Request $request
     * @return Response
     * @throws
     */
    public function indexAction(Request $request): Response
    {
        $element = $this->elementResolver->byLogLink($request->attributes->get('type'), (int)$request->attributes->get('id'));
        if( !$element ) throw new \Exception('Element not found');

        $elementConfig = $this->configManager->getElementByClass(get_class($element));

        return $this->render($elementConfig['details']['template'], ['data' => $element]);
    }
}