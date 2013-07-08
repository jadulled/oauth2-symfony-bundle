<?php

/**
 * This file is part of the pantarei/oauth2-bundle package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PantaRei\Bundle\OAuth2Bundle\Entity;

use Doctrine\ORM\EntityRepository;
use PantaRei\OAuth2\Model\ClientInterface;
use PantaRei\OAuth2\Model\ClientManagerInterface;

/**
 * ClientManager
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientManager extends EntityRepository implements ClientManagerInterface
{
    public function getClass()
    {
        return $this->getClassName();
    }

    public function createClient()
    {
        $class = $this->getClass();
        return new $class();
    }

    public function deleteClient(ClientInterface $client)
    {
        $this->getEntityManager()->remove($client);
        $this->getEntityManager()->flush();
    }

    public function reloadClient(ClientInterface $client)
    {
        $this->getEntityManager()->refresh($client);
    }

    public function updateClient(ClientInterface $client)
    {
        $this->getEntityManager()->persist($client);
        $this->getEntityManager()->flush();
    }

    public function findClientByClientId($client_id)
    {
        return $this->findOneBy(array(
            'client_id' => $client_id,
        ));
    }
}
