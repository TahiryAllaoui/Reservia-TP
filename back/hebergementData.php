<?php
class Hotel
{
   public $name;
   public $price;
   public $note;
   public $image;
   public $isPopular;

   public function
   __construct($name, $price, $note, $image, $isPopular)
   {
      $this->name = $name;
      $this->price = $price;
      $this->note = $note;
      $this->image = $image;
      $this->isPopular = $isPopular;
   }
}

$hotels = array();
$hotels[] = new Hotel('Auberge la Cannebiere', 25, 4, 'marcus-loke-WQJvWU_HZFo-unsplash.jpg', false);
$hotels[] = new Hotel('Hotel du port', 52, 5, 'fred-kleber-gTbaxaVLvsg-unsplash.jpg', false);
$hotels[] = new Hotel('Hotel Les mouettes', 76, 4, 'reisetopia-B8WIgxA_PFU-unsplash.jpg', false);
$hotels[] = new Hotel('Hotel de la mer', 46, 3, 'annie-spratt-Eg1qcIitAuA-unsplash.jpg', false);
$hotels[] = new Hotel('Auberge Le Panier', 23, 4, 'nicate-lee-kT-ZyaiwBe0-unsplash.jpg', false);
$hotels[] = new Hotel('Hotel chez Amina', 96, 5, 'febrian-zakaria-M6S1WvfW68A-unsplash.jpg', false);
$hotels[] = new Hotel('Hotel Le soleil du matin', 128, 5, 'emile-guillemot-Bj_rcSC5XfE-unsplash.jpg', true);
$hotels[] = new Hotel("Au coeur de l'eau Chambres d'hotel", 71, 4, 'aw-creative-VGs8z60yT2c-unsplash.jpg', true);
$hotels[] = new Hotel('Hotel Tout bleu et Blanc', 68, 4, 'febrian-zakaria-sjvU0THccQA-unsplash.jpg', true);
