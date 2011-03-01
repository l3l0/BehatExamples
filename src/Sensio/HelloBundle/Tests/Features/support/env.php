<?php
/*
 * (c) 2011 Leszek Prabucki
 *
 * @author      Leszek Prabucki <leszek.prabucki@gmail.com>
 */

$dm = $world->getClient()->getContainer()->get('doctrine.odm.mongodb.document_manager');
$dm->createQueryBuilder('Sensio\HelloBundle\Document\User')->remove()->getQuery()->execute();
