<?php
/*
 * (c) 2010 Leszek Prabucki
 *
 * @author      Leszek Prabucki <leszek.prabucki@gmail.com>
 */

namespace Sensio\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\HelloBundle\Document\User;
use Sensio\HelloBundle\User\UserEditForm;

class UserController extends Controller
{
    public function profileEditFormAction($slug)
    {
        $dm   = $this->get('doctrine.odm.mongodb.document_manager');
        $user = $dm->getRepository('Sensio\HelloBundle\Document\User')->findOneBy(array('slug' => $slug));
        
        if (!$user)
        {
          $user = new User();
        }

        $form = UserEditForm::create($this->get('form.context'), 'userProfile', array('data_class' => $user));
        $form->bind($this->get('request'), $user);
        $info = '';
        if ($form->isValid())
        {
           $dm->persist($user);
           $dm->flush();
           $info = 'Your details is saved.';
        }
        elseif ($this->get('request')->getMethod() === 'POST')
        {
           $info = 'You should fill all required fields.';
        }

        return $this->render('HelloBundle:User:profileEditForm.html.twig', array('form' => $form, 'info' => $info));
    }
}
