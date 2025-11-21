<?php

namespace App\Providers;

use App\Nova\Dashboards\Main;
use CodencoDev\NovaGridSystem\NovaGridSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::style('custom', resource_path('css/custom-admin.css'));

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::make('Бронирование')
                    ->path('/resources/orders')
                    ->icon('document-text'),

                MenuSection::make('О нас')
                    ->path('/resources/about-uses/1/edit')
                    ->icon('document-text'),

                MenuSection::make('Туры')
                    ->path('/resources/tours')
                    ->icon('document-text'),

                MenuSection::make('Страны')
                    ->path('/resources/locations')
                    ->icon('document-text'),

                MenuSection::make('Отзывы')
                    ->path('/resources/reviews')
                    ->icon('document-text'),

                MenuSection::make('Услуги')
                    ->path('/resources/services')
                    ->icon('document-text'),

                MenuSection::make('Вопросы и ответы')
                    ->path('/resources/question-answers')
                    ->icon('document-text'),

                MenuSection::make('Статьи')
                    ->path('/resources/articles')
                    ->icon('document-text'),

                MenuSection::make('Тур-группы')
                    ->path('/resources/tour-groups')
                    ->icon('document-text'),

                MenuSection::make('Партнеры')
                    ->path('/resources/partners')
                    ->icon('document-text'),

                MenuSection::make('Пользователи')
                    ->path('/resources/users')
                    ->icon('document-text'),

                MenuSection::make('Контакты', [
                    MenuItem::make('Контактные данные', '/resources/contacts'),
                    MenuItem::make('Адресные данные')->path('/resources/addresses'),
                ])->icon('document-text')
                    ->collapsable()
                    ->collapsedByDefault(),
            ];
        });

        Nova::footer(function (Request $request) {
            return Blade::render('Mahboob Tour');
        });

        Nova::withBreadcrumbs();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes(default: true)
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaGridSystem
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
