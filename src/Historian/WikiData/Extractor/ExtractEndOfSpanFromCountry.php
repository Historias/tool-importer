<?php
namespace Historian\Importer\WikiData\Extractor;

use Historian\Importer\WikiData\Claim;
use Historian\Importer\WikiData\Property;
use Symfony\Component\PropertyAccess\PropertyPath;

class ExtractEndOfSpanFromCountry extends StatementQualifierValueExtractor
{
    public function getPath() : PropertyPath
    {
        return new PropertyPath('[span][end]');
    }

    protected function getProperty() : Property
    {
        return Property::INSTANCE_OF();
    }

    protected function getClaim() : Claim
    {
        return Claim::COUNTRY();
    }

    protected function getQualifierProperty() : Property
    {
        return Property::END_TIME();
    }
}
