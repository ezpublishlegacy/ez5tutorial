<?php
/**
 * File containing the LogicalAnd compound siteaccess matcher class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Compound;

use eZ\Publish\Core\MVC\Symfony\SiteAccess\Matcher\Compound;

/**
 * Siteaccess matcher that allows a combination of matchers, with a logical AND
 */
class LogicalAnd extends Compound
{
    const NAME = 'logicalAnd';

    /**
     * @inheritDoc
     */
    public function match()
    {
        foreach ( $this->matchersMap as $subMatcher )
        {
            // All submatchers must match, so if only one doesn't, return false.
            if ( $subMatcher->match() === false )
            {
                return false;
            }
        }

        return $this->siteaccessName;
    }
}
