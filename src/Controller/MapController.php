<?php declare(strict_types=1);

namespace App\Controller;

use App\Entity\GameObject;
use App\Entity\GameRemoveBuilding;
use App\Entity\Map;
use Crp\ObjectTypes;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use EasyCorp\Bundle\EasyAdminBundle\Controller\EasyAdminController;
use EasyCorp\Bundle\EasyAdminBundle\Event\EasyAdminEvents;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MapController extends EasyAdminController
{
    protected function newAction()
    {
        $this->dispatch(EasyAdminEvents::PRE_NEW);

        $entity = $this->executeDynamicMethod('createNew<EntityName>Entity');

        $easyadmin = $this->request->attributes->get('easyadmin');
        $easyadmin['item'] = $entity;
        $this->request->attributes->set('easyadmin', $easyadmin);

        $fields = $this->entity['new']['fields'];

        /** @var Form $newForm */
        $newForm = $this->executeDynamicMethod('create<EntityName>NewForm', [$entity, $fields]);

        $newForm->handleRequest($this->request);
        if ($newForm->isSubmitted() && $newForm->isValid()) {
            /** @var UploadedFile $file */
            $file = $newForm->get('objectsFile')->getData();

            if( $file ) {
                if( !in_array($file->getClientOriginalExtension(), ['map', 'pwn']) ) {
                    $newForm->addError(new FormError('Przesłany plik ma błędny format ' . $file->getClientOriginalExtension()));
                } else {
                    $objects = $this->getObjectsFromFile($file);
                    $removeBuildings = $this->getRemoveBuildingsFromFile($file);
                    if( $objects->count() === 0 && $removeBuildings->count() === 0 ) {
                        $newForm->addError(new FormError('Przesłany plik zawiera błędne dane'));
                    } else {
                        /** @var Map $entity */
                        $entity->setObjects($objects);
                        $entity->setRemoveBuildings($removeBuildings);

                        $this->dispatch(EasyAdminEvents::PRE_PERSIST, ['entity' => $entity]);
                        $this->executeDynamicMethod('persist<EntityName>Entity', [$entity, $newForm]);
                        $this->dispatch(EasyAdminEvents::POST_PERSIST, ['entity' => $entity]);

                        return $this->redirectToReferrer();
                    }
                }
            } else {
                $newForm->addError(new FormError('Musisz przesłać plik z obiektami mapy'));
            }
        }

        $this->dispatch(EasyAdminEvents::POST_NEW, [
            'entity_fields' => $fields,
            'form' => $newForm,
            'entity' => $entity,
        ]);

        $parameters = [
            'form' => $newForm->createView(),
            'entity_fields' => $fields,
            'entity' => $entity,
        ];

        return $this->executeDynamicMethod('render<EntityName>Template', ['new', $this->entity['templates']['new'], $parameters]);
    }

    private function getRemoveBuildingsFromFile(UploadedFile $file): Collection
    {
        if( $file->getClientOriginalExtension() === 'map' ) {
            return $this->getRemoveBuildingsFromMapFile($file);
        } elseif( $file->getClientOriginalExtension() === 'pwn' ) {
            return $this->getRemoveBuildingsFromPwnFile($file);
        }

        return new ArrayCollection;
    }

    private function getRemoveBuildingsFromMapFile(UploadedFile $file): Collection
    {
        $removeBuildings = new ArrayCollection;
        try {
            $xml = @simplexml_load_file($file->getRealPath());

            if( false === $xml ) {
                return $removeBuildings;
            }

            if( ($xmlObjects = $xml->xpath('removeWorldObject')) && is_array($xmlObjects) ) {
                foreach($xmlObjects as $xmlObject) {
                    $data = (array)$xmlObject->attributes();
                    if( isset($data['@attributes']) ) {
                        $attr = $data['@attributes'];

                        $removeBuilding = new GameRemoveBuilding(
                            intval($attr['model']),
                            intval($attr['interior']),
                            floatval($attr['radius']),
                            floatval($attr['posX']),
                            floatval($attr['posY']),
                            floatval($attr['posZ'])
                        );

                        $removeBuildings->add($removeBuilding);

                        if( intval($attr['lodModel']) > 0 ) {
                            $lodRemoveBuilding = new GameRemoveBuilding(
                                intval($attr['lodModel']),
                                intval($attr['interior']),
                                floatval($attr['radius']),
                                floatval($attr['posX']),
                                floatval($attr['posY']),
                                floatval($attr['posZ'])
                            );

                            $removeBuildings->add($lodRemoveBuilding);
                        }
                    }
                }
            }

        } catch(\Exception $ex) {
            return $removeBuildings;
        }

        return $removeBuildings;
    }

    private function getRemoveBuildingsFromPwnFile(UploadedFile $file): Collection
    {
        $removeBuildings = new ArrayCollection;

        $fileContent = @file_get_contents($file->getRealPath());
        $fileContent = preg_replace('/ /', ' ', $fileContent);

        $matches = [];
        preg_match_all('/RemoveBuildingForPlayer\(.*?,(.*?),(.*?),(.*?),(.*?),(.*?)\)/', $fileContent, $matches, PREG_SET_ORDER);

        foreach($matches as $match) {
            $removeBuilding = new GameRemoveBuilding(
                intval($match[1]),
                0,
                floatval($match[5]),
                floatval($match[2]),
                floatval($match[3]),
                floatval($match[4])
            );

            $removeBuildings->add($removeBuilding);
        }

        return $removeBuildings;
    }

    private function getObjectsFromFile(UploadedFile $file): Collection
    {
        if( $file->getClientOriginalExtension() === 'map' ) {
            return $this->getObjectsFromMapFile($file);
        } elseif( $file->getClientOriginalExtension() === 'pwn' ) {
            return $this->getObjectsFromPwnFile($file);
        }

        return new ArrayCollection;
    }

    private function getObjectsFromPwnFile(UploadedFile $file): Collection
    {
        $objects = new ArrayCollection;

        $fileContent = @file_get_contents($file->getRealPath());
        $fileContent = preg_replace('/ /', ' ', $fileContent);

        $matches = [];
        preg_match_all('/CreateDynamicObject\((.*?),(.*?),(.*?),(.*?),(.*?),(.*?),(.*?)\)/', $fileContent, $matches, PREG_SET_ORDER);

        foreach($matches as $match) {
            $object = new GameObject();
            $object->setType(ObjectTypes::NORMAL);
            $object->setOwnerType(1);
            $object->setOwner(0);
            $object->setModel(intval($match[1]));
            $object->setPosX(floatval($match[2]));
            $object->setPosY(floatval($match[3]));
            $object->setPosZ(floatval($match[4]));
            $object->setRotX(floatval($match[5]));
            $object->setRotY(floatval($match[6]));
            $object->setRotZ(floatval($match[7]));

            $objects->add($object);
        }

        return $objects;
    }

    private function getObjectsFromMapFile(UploadedFile $file): Collection
    {
        $objects = new ArrayCollection;
        try {
            $xml = @simplexml_load_file($file->getRealPath());

            if( false === $xml ) {
                return $objects;
            }

            if( ($xmlObjects = $xml->xpath('object')) && is_array($xmlObjects) ) {
                foreach($xmlObjects as $xmlObject) {
                    $data = (array)$xmlObject->attributes();
                    if( isset($data['@attributes']) ) {
                        $attr = $data['@attributes'];

                        $object = new GameObject();
                        $object->setType(ObjectTypes::NORMAL);
                        $object->setOwnerType(1);
                        $object->setOwner(0);
                        $object->setModel(intval($attr['model']));
                        $object->setPosX(floatval($attr['posX']));
                        $object->setPosY(floatval($attr['posY']));
                        $object->setPosZ(floatval($attr['posZ']));
                        $object->setRotX(floatval($attr['rotX']));
                        $object->setRotY(floatval($attr['rotY']));
                        $object->setRotZ(floatval($attr['rotZ']));

                        $objects->add($object);
                    }
                }
            }

        } catch(\Exception $ex) {
            return $objects;
        }

        return $objects;
    }
}
