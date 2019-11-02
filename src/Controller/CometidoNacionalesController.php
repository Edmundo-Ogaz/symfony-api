<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

class CometidoNacionalesController
{
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


public function getAll()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://host.docker.internal:3080/cometidonacionales/11');
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $token = "eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCJ9.eyJlbnZpcm9ubWVudCI6IkRFVkVMT1BNRU5UIiwiYXBwbGljYXRpb25fbmFtZSI6InBtYy1iYXNlLWFwaSIsImlhdCI6MTU1MTgwODc2MCwiZXhwIjoxNjE0ODgwNzYwfQ.RXT_ngFVzqYQ9MHB8TTKV0IH7joFyk9HOv5liWBxOkK30gH5diB443QlctxhMEZ1OrSIEW3d_p0khV16yP6rwNWFcy6SRA5865OFQ0Dh-nmE4cHOZMbv_Gx16LAChHtmYu5IhCPHqXjiLXu1QJCdSwtc0_oUfCEXNgWG01sS3jxoFACUrFyz2wkSxcZ6uTeEHNS0UL84SOWZE-Sld8GuO9aA3wH63qqfu5pRBi1Pf4bRNLBNj-T6bSbIjBwFbcwZc1irhfHsymDfgowPG03BO-jWE4QtqZGDNe4ZYUxIVIUKlcAcSjPVl-9D1L6-fQhLEv1UzyhIFIcDA8LrUP4KKdL5bpBQr2YbRUXF70lWdvizYCoGWnFGPULmkd4xkWrdcwMOFajQtG2OzIqee-RiTchxeUfr-NySOsIcvcdYuEKn9sEnZ5RzlJBqnfP_i0lxj51TTs3KGuq78y-CFoPcjm2M1F1FQo8h8QFi-1TSBdZuzToSyyeNh-8bkjI8ud2PpRXUdE-KbmNvifsxr9fApwSSanFW1RJN97wNa2lJjWhwdK8XA7Pd3FtWGnqwSL1DiJkhSWF7KfekdD9w3DNuFmYmiBIlIdiDy9EwRXKoAeFMR-1OIR5E_AxxwPa1rPhNQKyfLbMxES1lWWzPIgkJPbwL897ZUBEV-rwKo36CpAo";
        $authorization = "Authorization: Bearer ".$token; // Prepare the authorisation token
        curl_setopt($ch, CURLOPT_HTTPHEADER, array( $authorization )); // Inject the token into the header

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $dataResultConeccion = curl_exec($ch);
        if (!curl_errno($ch)) {
            $codigoReturn= curl_getinfo($ch, CURLINFO_HTTP_CODE);
        }else{
            $codigoReturn="2001";
        }

        $this->logger->info('LuckyController cometidonacionales code: ' . $codigoReturn);
        $this->logger->info('LuckyController cometidonacionales dataResultConeccion: ' . $dataResultConeccion);

        curl_close($ch);
        return new Response(
            '<html><body>doce: '.$codigoReturn.'</body></html>'
        );
    }
}