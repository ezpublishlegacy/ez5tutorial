<?php
/**
 * File containing the EMailAddress Value class
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://ez.no/licenses/gnu_gpl GNU General Public License v2.0
 * @version 
 */

namespace eZ\Publish\Core\FieldType\EmailAddress;

use eZ\Publish\Core\FieldType\Value as BaseValue;

/**
 * Value for EMailAddress field type
 */
class Value extends BaseValue
{
    /**
     * Email addreas
     *
     * @var string
     */
    public $email;

    /**
     * Construct a new Value object and initialize its $email
     *
     * @param string $text
     */
    public function __construct( $email = '' )
    {
        $this->email = $email;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString()
    {
        return (string)$this->email;
    }
}
