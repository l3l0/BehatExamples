<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class SensioHelloBundleDocumentUserHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data)
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = (string) $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['login'])) {
            $value = $data['login'];
            $return = (string) $value;
            $this->class->reflFields['login']->setValue($document, $return);
            $hydratedData['login'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['slug'])) {
            $value = $data['slug'];
            $return = (string) $value;
            $this->class->reflFields['slug']->setValue($document, $return);
            $hydratedData['slug'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['firstname'])) {
            $value = $data['firstname'];
            $return = (string) $value;
            $this->class->reflFields['firstname']->setValue($document, $return);
            $hydratedData['firstname'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['lastname'])) {
            $value = $data['lastname'];
            $return = (string) $value;
            $this->class->reflFields['lastname']->setValue($document, $return);
            $hydratedData['lastname'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['email'])) {
            $value = $data['email'];
            $return = (string) $value;
            $this->class->reflFields['email']->setValue($document, $return);
            $hydratedData['email'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['age'])) {
            $value = $data['age'];
            $return = (string) $value;
            $this->class->reflFields['age']->setValue($document, $return);
            $hydratedData['age'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['job'])) {
            $value = $data['job'];
            $return = (string) $value;
            $this->class->reflFields['job']->setValue($document, $return);
            $hydratedData['job'] = $return;
        }
        return $hydratedData;
    }
}