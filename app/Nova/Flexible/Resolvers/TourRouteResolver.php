<?php

namespace App\Nova\Flexible\Resolvers;

use Whitecube\NovaFlexibleContent\Value\ResolverInterface;

class TourRouteResolver implements ResolverInterface
{
    public function get($resource, $attribute, $layouts)
    {
        // Tour modelidagi relation: routes()
        $routes = $resource->routes ?? collect();

        // Bizda bitta layout bor: 'tour_routes'
        $layout = $layouts->find('tour_routes');

        if (!$layout) {
            return collect();
        }

        return $routes->map(function ($route) use ($layout) {
            return $layout->duplicateAndHydrate($route->id, [
                'name_uz' => $route->name_uz,
                'name_ru' => $route->name_ru,
                'name_en' => $route->name_en,
                'add_price_adult' => $route->add_price_adult,
                'add_price_child' => $route->add_price_child,
                'description_tour_uz' => $route->description_tour_uz,
                'description_tour_ru' => $route->description_tour_ru,
                'description_tour_en' => $route->description_tour_en,
            ]);
        });
    }

    public function set($resource, $attribute, $groups): void
    {
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

        $resource->routes()->delete();
        $resource->routes()->createMany($routes->toArray());
    }
}
