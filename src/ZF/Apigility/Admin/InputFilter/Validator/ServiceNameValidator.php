<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Admin\InputFilter\Validator;

class ServiceNameValidator extends AbstractValidator
{
    const SERVICE_NAME = 'service_name';

    protected $messageTemplates = array(
        self::SERVICE_NAME => "'%value%' is not a valid service name"
    );

    public function isValid($value)
    {
        $this->setValue($value);

        if (!$this->isValidWordInPhp($value)) {
            $this->error(self::SERVICE_NAME);
            return false;
        }

        return true;
    }
}