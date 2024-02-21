<?php declare(strict_types=1);

namespace App\Validator;


use App\Entity\Product;
use App\Validator\Constraints\ProductHasAnyOwner;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class ProductHasAnyOwnerValidator extends ConstraintValidator
{
    public function validate($product, Constraint $constraint)
    {
        if( !($product instanceof Product) ) {
            throw new \UnexpectedValueException(sprintf("Expected %s class", Product::class));
        }

        /** @var ProductHasAnyOwner $constraint */
        /** @var Product $product */
        if( (!$product->getGroupType() || !count($product->getGroupType())) && !$product->getGroups()->count() ) {
            $this->context->buildViolation($constraint->message)
                ->addViolation();
        }
    }
}