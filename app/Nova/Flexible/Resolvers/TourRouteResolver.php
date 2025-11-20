<?php

namespace App\Nova\Flexible\Resolvers;

use App\Models\Tour;
use Whitecube\NovaFlexibleContent\Value\ResolverInterface;

class TourRouteResolver implements ResolverInterface
{
    public function get($resource, $attribute, $layouts)
    {
        $routes = $resource->routes;

        return $routes->map(function ($route) use ($layouts) {
            $layout = $layouts->find($route->id);

            return $layout?->duplicateAndHydrate($route->id, ['value' => $route->value]);

        })->filter();
    }

    public function set($resource, $attribute, $groups): void
    {
        /** @var Tour $class */
        $class = get_class($resource);

        $class::saved(function (Tour $model) use ($groups) {
            $routes = $groups->map(function ($group) {
                return [
                    'name_uz' => $group->name_uz,
                    'name_ru' => $group->name_ru,
                    'name_en' => $group->name_en,
                    'add_price_adult' => $group->add_price_adult,
                    'add_price_child' => $group->add_price_child,
                    'description_tour_uz' => $group->description_tour_uz,
                    'description_tour_ru' => $group->description_tour_ru,
                    'description_tour_en' => $group->description_tour_en,
                ];
            });

            // This is a quick & dirty example, syncing the models is probably a better idea.
            $model->routes()->delete();
            $model->routes()->createMany($routes);
        });
    }
}
