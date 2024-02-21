<?php declare(strict_types=1);

namespace App\Controller;

use App\Form\Type\AdvancedSearchFormType;
use App\Service\LogBrowser\LogBrowser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class LogBrowserController extends AbstractController
{
    private $generator;

    public function __construct(UrlGeneratorInterface $generator)
    {
        $this->generator = $generator;
    }

    /**
     * @Route("/log-browser", name="logbrowser")
     *
     * @param Request $request
     * @return Response
     * @throws
     */
    public function indexAction(Request $request) : Response
    {
        $request->attributes->add(['crp' => true]);
        $parameters = [];

        $logBrowser = new LogBrowser();
        $logBrowser
            ->setLogsPath(getenv('LOGS_DIR'))
            ->setUrlGenerator($this->generator);

        $requestData = $request->request->all();
        $preservedData = $requestData['crp'] ?? [];
        $this->parsePreservedData($preservedData);

        $form = $this->createForm(AdvancedSearchFormType::class, $preservedData);


        $parameters['form'] = $form->createView();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $logBrowser->applyFilters($form->getData());
        }

        $parameters['logs'] = $logBrowser->getLogs();

        return $this->render('logbrowser/index.html.twig', $parameters);
    }

    private function parsePreservedData(array &$data) : void
    {
        if( empty($data['from']) ) unset($data['from']);
        else $data['from'] = new \DateTime($data['from']);

        if( empty($data['to']) ) unset($data['to']);
        else $data['to'] = new \DateTime($data['to']);

        if( empty($data['sort']) ) $data['sort'] = 'DESC';
    }

    public function getRootDir() : string
    {
        return dirname($this->getParameter('kernel.root_dir'), 1);
    }
}