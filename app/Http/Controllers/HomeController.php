<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Partner;
use App\Models\QuestionAnswer;
use App\Models\Review;
use App\Models\Services;
use App\Models\Tour;
use App\Models\TourGroup;

class HomeController extends Controller
{
    public function index()
    {
        $tour_groups = TourGroup::withWhereHas('tours', function ($query) {
            $query->active();
        })
            ->with('tours.location.parent', 'tours.firstMedia')
            ->orderBy('order')
            ->get();
        $services = Services::limit(2)->orderBy('id')->get();
        $partners = Partner::all();
        $reviews = Review::with('tour')->where('rating', '>=', 4)->limit(10)->get();
        $articles = Article::with('media')
            ->active()
            ->limit(4)
            ->orderByDesc('id')
            ->get();
        $faqs = QuestionAnswer::limit(10)->get();

        return view('index', compact('tour_groups', 'services', 'partners',
            'reviews', 'articles', 'faqs'));
    }

    public function tours()
    {
        $tours = Tour::with('location.parent', 'firstMedia')
            ->active()
            ->orderByDesc('id')
            ->paginate(12);

        $countries = Location::withWhereHas('children', function ($query) {
            $query->withWhereHas('tours', function ($query) {
                $query->active();
            });
        })->whereNull('parent_id')->get();

        return view('tours', compact('tours', 'countries'));
    }

    public function tour(Tour $tour)
    {
        $tour->load('location.parent', 'media', 'routes', 'reviews');
        return view('tour', compact('tour'));
    }

    public function articles()
    {
        $articles = Article::with('media')->active()->paginate(8);
        return view('articles', compact('articles'));
    }

    public function article(Article $article)
    {
        return view('article', compact('article'));
    }

    public function contacts()
    {
        $contacts = Contact::all();
        $addresses = Address::all();
        return view('contacts', compact('contacts', 'addresses'));
    }
}
