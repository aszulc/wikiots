<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OtsController extends Controller
{
    /**
     * @Route("/{ots}", name="ots_homepage")
     */
    public function indexAction($ots)
    {
        if ( ! $ots) {
            throw $this->createNotFoundException('OTS does not exist');
        }

        return $this->render('ots/index.html.twig', [
            'pages' => ['Home', 'Items', 'Quests', 'Monsters', 'Spells'],
            'ots' => $ots,
        ]);
    }
}
