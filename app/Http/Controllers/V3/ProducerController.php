<?php

namespace App\Http\Controllers\V3;

use Jikan\Request\Producer\ProducerRequest;

class ProducerController extends Controller
{
    public function main(int $id, int $page = 1)
    {
        $producer = $this->jikan->getProducer(new ProducerRequest($id, $page));
        return response($this->serializer->serialize($producer, 'json'));
    }
}
