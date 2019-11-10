<?php
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\File;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
class MemberForm extends Form
{
  public function initialize($entity = null, $options = null)
  {
    $this->add(new Hidden('id_Member'));


    // Nom de la personne
    $name = new Text('nom');
    $name->setLabel('Nom');
    $name->setFilters(['striptags', 'string']);
    $this->add($name);
    //var_dump($name);


    // Prénom de la personne
    $prenom = new Text('prenom');
    $prenom->setLabel('Prenom');
    $prenom->setFilters(['striptags', 'string']);
    $prenom->addValidators([
      new PresenceOf([
        'message' => 'Prénom du produit'
      ])
    ]);
    $this->add($prenom);


    // Description de la personne
    $descri = new Text('description');
    $descri->setLabel('Description');
    $descri->setFilters('string');
    $this->add($descri);




    // Image du produit
    // File
    $file = new File(
      "file",
      [
        "placeholder" => ""
      ]
    );
    $file->setLabel("Photo de la personne");

    $this->add($file);


  }
}
