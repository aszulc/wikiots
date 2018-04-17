<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ServerController extends Controller
{
    /**
     * Shows
     *
     * @param $server
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/{server}", name="server_homepage", requirements={"server"="^[a-z0-9-/]+$"})
     */
    public function indexAction($server)
    {
        $server = $this->getDoctrine()->getRepository('AppBundle:Server')->findOneBy(['link' => $server]);

        if ( ! $server) {
            throw $this->createNotFoundException('Server does not exist');
        }

//        $pages = $this->getDoctrine()->

        return $this->render('server/index.html.twig', [
            'pages'  => [
                'Items' => ['Axe', 'Sword', 'Club'],
                'Quests',
                'Monsters',
                'Spells',
            ],
            'server' => $server,
        ]);
    }
}
