<?php

namespace App\Controller;

use App\Entity\AvisDepot;
use App\Repository\AvisDepotRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class AvisDepotController extends AbstractController
{
    #[Route('/api/urbanisme-requests', name: 'app_avis_depot')]
    public function index(Request $request,AvisDepotRepository $avisRepo): JsonResponse
    {
        /** // Example DATA to get from the DB
         * reference: 'DP06426024B0156',
         * dateDeposited: '10/06/2024',
         * requester: 'Maitena immobilier CENTURY 21 MAITENA IMMOBILIER - Lamothe - Soulier Maitena',
         * surface: 0,
         * workNature: 'Nous voulons rajouter des fenêtres dans les parties communes + Mise en place de fenêtre en partie commune',
         * landAddress: '73 RUE ELISSACILLO',
         * cadastralRef: 'AT0020'
         */
        $urbanismeRequests = $avisRepo->findOneByFilter($request);
        $dateFrom = $request->query->get('date_from', '');
        $data = [];

        if (!empty($dateFrom)) {
            $dateFrom = \DateTime::createFromFormat('Y-m-d', $dateFrom);
        }

        foreach ($urbanismeRequests as $key => $avisEntity) {
            $dateDepot = \DateTime::createFromFormat('d/m/Y', $avisEntity->getDateDepot());
            if (empty($dateFrom) || ($dateDepot && $dateDepot >= $dateFrom)) {
                $data[] = [
                    "reference" => $avisEntity->getReference(),
                    "dateDeposited" => $avisEntity->getDateDepot(),
                    "requester" => $avisEntity->getDosDnmT(),
                    "surface" => $avisEntity->getSurfEx(),
                    "workNature" => $avisEntity->getNature(),
                    "landAddress" => $avisEntity->getBieAdresse(),
                    "cadastralRef" => $avisEntity->getBieCadT(),
                ];
            }
        }

        return new JsonResponse($data);
    }
}
