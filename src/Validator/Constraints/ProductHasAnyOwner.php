<?php declare(strict_types=1);

namespace App\Validator\Constraints;

use App\Validator\ProductHasAnyOwnerValidator;
use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ProductHasAnyOwner extends Constraint
{
    public $message = 'app.product.has_no_owner';

    public function getTargets()
    {
        return self::CLASS_CONSTRAINT;
    }

    public function validatedBy()
    {
        return ProductHasAnyOwnerValidator::class;
    }
}