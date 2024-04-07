<?php
class Activities
{
    public $name;
    public $image;

    public function
    __construct($name, $image)
    {
        $this->name = $name;
        $this->image = $image;
    }
}
$activites = array();
$activites[] = new Activities('Vieux Port', 'reno-laithienne-QUgJhdY5Fyk-unsplash.jpg');
$activites[] = new Activities('Fort de Pomegues', 'paul-hermann-QFTrLdQIRhI-unsplash.jpg');
$activites[] = new Activities('Iles du Frioul', 'kevin-hikari-rV_Qd1l-VXg-unsplash.jpg');
$activites[] = new Activities('Parc National des Calanques', 'kilyan-sockalingum-NR8-cBCN3aI-unsplash.jpg');
$activites[] = new Activities('Notre-Dame-de-la-Garde', 'florian-wehde-xW9e8gdotxI-unsplash.jpg');
$activites[] = new Activities('Parc Longchamp', 'lena-paulin-wH2-EJoDcV0-unsplash.jpg');
