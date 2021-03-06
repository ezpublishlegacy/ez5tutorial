<?php
/**
 * File containing the PurgeClientSingleRequest class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\Cache\Http;

class PurgeClientSingleRequest extends PurgeClient
{
    /**
     * Effectively triggers the purge.
     * Sends one HTTP PURGE request for all location Ids.
     * Used request header is X-Group-Location-Id instead of X-Location-Id.
     *
     * @param string $server
     * @param array $locationIds
     */
    protected function doPurge( $server, array $locationIds )
    {
        $this->httpBrowser->call(
            $server,
            'PURGE',
            array(
                'X-Group-Location-Id' => implode( '; ', $locationIds )
            )
        );
    }
}
