<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends Controller{
    
    /**
    *@Route("/")
    */
    
    public function dashboard()
    {
        return $this->render('dashboard/dashboard.html');
    }
    
    
}

?>