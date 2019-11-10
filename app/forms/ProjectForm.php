<?php
use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;
use Phalcon\Forms\Element\File;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Email;
class ProjectForm extends Form
{
  public function initialize($entity = null, $options = null)
  {
    $this->add(new Hidden('id_Project'));


    // Nom de la personne
    $titre = new Text('titre');
    $titre->setLabel('Titre');
    $titre->setFilters(['striptags', 'string']);
    $this->add($titre);
    //var_dump($name);


    // Prénom de la personne
    $description = new Text('description');
    $description->setLabel('Description');
    $description->setFilters(['striptags', 'string']);
    $description->addValidators([
      new PresenceOf([
        'message' => 'Description du projet'
      ])
    ]);
    $this->add($description);






    // Image du produit
    // File
    $file = new File(
      "file",
      [
        "placeholder" => ""
      ]
    );
    $file->setLabel("Image du projet");

    $this->add($file);


  }
}
