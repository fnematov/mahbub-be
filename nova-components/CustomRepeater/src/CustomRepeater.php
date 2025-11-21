<?php

namespace Fnematov\CustomRepeater;

use Fnematov\CustomRepeater\Presets\MorphMany;
use Laravel\Nova\Exceptions\NovaException;
use Laravel\Nova\Exceptions\ResourceMissingException;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\ResourceRelationshipGuesser;
use Laravel\Nova\Resource;

class CustomRepeater extends Repeater
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'custom-repeater';

    /**
     * @throws ResourceMissingException
     */
    public function asMorphMany($resourceClass = null): CustomRepeater
    {
        /** @var class-string<Resource>|null $resource */
        $resource = $resourceClass ?? ResourceRelationshipGuesser::guessResource($this->name);
        
        if ($resource) {
            $this->resourceClass = $resource;
            $this->resourceName = $resource::uriKey();

            return $this->preset(new MorphMany);
        }

        throw NovaException::missingResourceForRepeater($this->name);
    }
}
