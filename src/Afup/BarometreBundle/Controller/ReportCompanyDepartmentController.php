<?php

namespace Afup\BarometreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ReportCompanyDepartmentController extends Controller
{
    public function indexAction()
    {
        $query = $this->get('afup.barometre.query_builder_factory')->getResponse();

        $results = $this->get('afup.barometre.reports.response')->getCompanyDepartmentReport($query);

        return $this->render('AfupBarometreBundle:Report:company_department.html.twig', array(
          'results' => $results,
        ));
    }
}
