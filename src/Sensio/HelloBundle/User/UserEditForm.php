<?php
/*
 * (c) 2011 Leszek Prabucki
 *
 * @author Leszek Prabucki <leszek.prabucki@gmail.com>
 */
namespace Sensio\HelloBundle\User;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\NumberField;
use Symfony\Component\Form\CheckboxField;
use Symfony\Component\Form\HiddenField;

class UserEditForm extends Form
{
    protected function configure()
    {
        $this->add(new TextField('firstname'));
        $this->add(new TextField('lastname'));
        $this->add(new TextField('email'));
        $this->add(new TextField('age'));
        $this->add(new TextField('job'));
    }
}
