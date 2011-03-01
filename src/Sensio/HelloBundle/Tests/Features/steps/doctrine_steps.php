<?php
/*
 * (c) 2011 Leszek Prabucki
 *
 * @author Leszek Prabucki <leszek.prabucki@gmail.com>
 */

$steps->Given('/^User "([^"]*)" is in database/', function ($world, $login){
    $dm   = $world->getClient()->getContainer()->get('doctrine.odm.mongodb.document_manager');
    $user = new \Sensio\HelloBundle\Document\User();
    $user->setLogin($login);
    $dm->persist($user);
    $dm->flush();
});

$steps->Then('/^User "([^"]*)" "([^"]*)" with "([^"]*)" email was created$/', function($world, $firstname, $lastname, $email) {
    $dm   = $world->getClient()->getContainer()->get('doctrine.odm.mongodb.document_manager');
    $user = $dm->getRepository('Sensio\HelloBundle\Document\User')->findOneBy(array('email' => $email, 'firstname' => $firstname, 'lastname' => $lastname));
    PHPUnit_Framework_Assert::assertTrue($user !== NULL);
});

//Polish translation
$steps->Zakładając('/^że użytkownik jest "([^"]*)" w bazie$/', function ($world, $login){
    $dm   = $world->getClient()->getContainer()->get('doctrine.odm.mongodb.document_manager');
    $user = new \Sensio\HelloBundle\Document\User();
    $user->setLogin($login);
    $dm->persist($user);
    $dm->flush();
});


$steps->I('/^użytkownik "([^"]*)" "([^"]*)" z mailiem "([^"]*)" powinnen zostać utworzony$/', function($world, $firstname, $lastname, $email) {;
    $dm   = $world->getClient()->getContainer()->get('doctrine.odm.mongodb.document_manager');
    $user = $dm->getRepository('Sensio\HelloBundle\Document\User')->findOneBy(array('email' => $email, 'firstname' => $firstname, 'lastname' => $lastname));
    PHPUnit_Framework_Assert::assertTrue($user !== NULL);
});


$steps->I('/^jestem na podstronie (.*)$/', function($world, $page) {
    $world->crawler = $world->getClient()->request('GET', $world->pathTo($page));
});

$steps->Zakładając('/^że wypełniam pole formularza "([^"]*)" wartością "([^"]*)"$/', function($world, $field, $value) {;
    $world->inputFields[$field] = $value;
});

$steps->I('/^wypełniam pole formularza "([^"]*)" wartością "([^"]*)"$/', function($world, $field, $value) {;
    $world->inputFields[$field] = $value;
});

$steps->Jeżeli('/^naciskam guzik "([^"]*)" z formularza (.*)$/', function($world, $button, $formName) {
    $form = $world->crawler->selectButton($button)->form();
    $world->crawler = $world->getClient()->submit($form, $world->inputFields);
    $world->inputFields = array();
});

$steps->Jeżeli('/^powinien pokazać się tekst "([^"]*)"$/', function($world, $text) {;
   PHPUnit_Framework_Assert::assertRegExp('/' . $text . '/', $world->getClient()->getResponse()->getContent());
});
