<?php

namespace BookStack\Forms;

use Kris\LaravelFormBuilder\Form;
use Kris\LaravelFormBuilder\Field;

class ContactForm extends Form
{
    public function buildForm()
    {
        $this
        ->add('prenom', Field::TEXT, [
            'rules' => 'required|min:5','attr' => ['class' => 'input-group-text']
        ])
        ->add('nom', Field::TEXT, [
            'rules' => 'required|min:5','attr' => ['class' => 'input-group-text']
        ])
        ->add('mail', Field::EMAIL, [
            'rules' => 'required|min:5','attr' => ['class' => 'input-group-text']
        ])
        ->add('message', Field::TEXTAREA, [
            'rules' => 'max:5000','attr' => ['class' => 'contact']
        ])
        ->add('Envoyer', 'submit', ['attr' => ['class' => 'button is-info']]);


        $formOptions = [
            'id' => 'contact'
        ]; 


        }  
}
