<?php

namespace App\Http\Controllers;

use App\Enums\ReviewStatusEnum;
use App\Models\AboutUs;
use App\Models\Address;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Order;
use App\Models\Partner;
use App\Models\QuestionAnswer;
use App\Models\Review;
use App\Models\Services;
use App\Models\Settings;
use App\Models\Tour;
use App\Models\TourGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $settings = Settings::first();
        $tour_groups = TourGroup::withWhereHas('tours', function ($query) {
            $query->active();
        })
            ->with('tours.location.parent', 'tours.firstMedia')
            ->orderBy('order')
            ->get();
        $services = Services::limit(2)->orderBy('id')->get();
        $partners = Partner::all();
        $reviews = Review::with('tour')
            ->whereStatus(ReviewStatusEnum::ACTIVE)
            ->where('rating', '>=', 4)
            ->limit(10)
            ->get();
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

        return view('index', compact(
            'tour_groups',
            'services',
            'partners',
            'reviews',
            'articles',
            'faqs',
            'countries',
            'settings'
        ));
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
        $settings = Settings::first();
        return view('contacts', compact('contacts', 'addresses', 'settings'));
    }

    public function submitOrder(Request $request)
    {
        $data = $request->validateWithBag('order', [
            'tour_id' => 'nullable|exists:tours,id',
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:19',
            'month' => 'required|int|min:0|max:11',
            'adult_count' => 'required|int|min:0',
            'child_count' => 'required|int|min:0',
        ]);

        $existing = Order::when($data['tour_id'] ?? null, function ($query) use ($data) {
            return $query->where('tour_id', $data['tour_id']);
        })->where('phone', $data['phone'])
            ->where('month', $data['month'])
            ->first();

        if ($existing) {
            return back()
                ->withErrors(['error' => __('messages.you_have_order_already')]);
        }

        Order::query()->create($data);

        return back()
            ->with('success', __('messages.order_created'));
    }


    public function submitReview(Request $request)
    {
        $data = $request->validateWithBag('review', [
            'tour_id' => 'nullable|exists:tours,id',
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:19',
            'rating' => 'required|int|min:1|max:5',
            'comment_ru' => 'nullable|string|max:255',
        ], []);

        Review::query()->updateOrCreate([
            'tour_id' => $data['tour_id'],
            'phone' => $data['phone'],
        ], $data);

        return back()
            ->with('success', __('messages.review_created'));
    }

    public function about()
    {
        $about = AboutUs::with('media')->first();
        return view('about', compact('about'));
    }
}
