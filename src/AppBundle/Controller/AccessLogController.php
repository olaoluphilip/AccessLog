<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;
use AppBundle\Entity\AccessLog;

/**
 * AccessLog controller.
 *
 */
class AccessLogController extends Controller
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    /**
     * Lists all AccessLog entities.
     *
     */
    public function outputAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accessLogs = $em->getRepository('AppBundle:AccessLog')->findAll();

        return $accessLogs;
    }

    public function insertAction(\stdClass $entry)
    {
        //$em = $this->getDoctrine()->getManager();

        $entityAccessLog = new AccessLog(); 
        $entityAccessLog->setHostname($entry->host);
        $entityAccessLog->setLogname($entry->logname);
        $entityAccessLog->setUser($entry->user);
        $entityAccessLog->setStamp($entry->stamp);
        $entityAccessLog->setTime($entry->time);
        $entityAccessLog->setRequest($entry->request);
        $entityAccessLog->setStatus($entry->status);
        $entityAccessLog->setResponseBytes($entry->responseBytes);
        $entityAccessLog->setHeaderReferal($entry->HeaderReferer);
        $entityAccessLog->setHeaderUserAgent($entry->HeaderUserAgent);
    
        $this->em->persist($entityAccessLog);
        $this->em->flush();
    }
}
