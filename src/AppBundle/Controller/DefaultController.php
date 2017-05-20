<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\headers;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function showAction(Request $request)
    {
      $ip = $request->getClientIp();
      $agent = $request->headers->get('User-Agent');
return new Response('<html><body> <h1>##!!Privet 4uvak!!##</h1><br>
<p><b>Your USER AGENT :</b> '.$agent.'</p>
<b>Your IP ADRESS : </b> '.$ip .'
</body></html>');
 }

}
