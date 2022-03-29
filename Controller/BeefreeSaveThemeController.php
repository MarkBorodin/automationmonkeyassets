<?php

namespace MauticPlugin\MauticBeefreeBundle\Controller;

use MauticPlugin\MauticBeefreeBundle\Entity\BeefreeTheme;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Mautic\CoreBundle\Controller\CommonController;
use Symfony\Component\HttpFoundation\Response;


class BeefreeSaveThemeController extends CommonController
{
    public function saveThemeAction(Request $request)
    {
        // set header
        header('Access-Control-Allow-Origin: *');

        // get data
        $data = json_decode($request->getContent());
        $content = $data->content;
        $html = $data->html;
        $template = $data->template;
        $t = $data->t;

        // get bfrepo
        $bfrepo = $this->getDoctrine()->getRepository(BeefreeTheme::class);

        // new data
        $id = null;
        $name = $template . ' - ' . date('d/m/Y H:i:s');
        $title = $template . ' - ' . date('d/m/Y H:i:s');
        $preview = $html;
        
        // create new theme
        $bfrepo->saveBeefreeTheme($id, $name, $title, $preview, $content);

        // create response
        $response = new JsonResponse([
            'success' => true,
        ]);

        // set header
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}