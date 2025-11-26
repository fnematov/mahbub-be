<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Order;
use App\Models\Partner;
use App\Models\QuestionAnswer;
use App\Models\Review;
use App\Models\Services;
use App\Models\Tour;
use App\Models\TourGroup;
use Illuminate\Http\Request;

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

        $countries = Location::withWhereHas('children', function ($query) {
            $query->withWhereHas('tours', function ($query) {
                $query->active();
            });
        })->whereNull('parent_id')->get();
        $faqs = QuestionAnswer::limit(10)->get();

        return view('index', compact('tour_groups', 'services', 'partners',
            'reviews', 'articles', 'faqs', 'countries'));
    }

    public function tours()
    {
        $tours = Tour::with('location.parent', 'firstMedia')
            ->active()
            ->filter()
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

    public function submitOrder(Request $request)
    {
        $data = $request->validate([
            'tour_id' => 'nullable|exists:tours,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:19',
            'month' => 'required|int|min:0|max:11',
            'adult_count' => 'required|int|min:0',
            'child_count' => 'required|int|min:0',
        ]);

        $existing = Order::where('tour_id', $data['tour_id'])
            ->where('phone', $data['phone'])
            ->where('month', $data['month'])
            ->first();

        if ($existing) {
            return back()
                ->withErrors(['error' => __('messages.you_have_order_already')]);
        }

        Order::query()->create($data);

        return redirect()
            ->back()
            ->with('success', __('messages.order_created'));
    }
}
