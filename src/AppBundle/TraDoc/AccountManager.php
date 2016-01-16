<?php

namespace Tra\TraDoc;

use Doctrine\Common\Persistence\ObjectManager;

class AccountManager
{
    private $om;

    function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    function create()
    {

    }

    function update()
    {

    }

    function delete()
    {

    }
}
