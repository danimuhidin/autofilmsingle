<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Hero;
use App\Models\Jumbotron;
use App\Models\Mission;
use App\Models\Outlet;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Product;
use App\Models\Testimonial;
use App\Models\Vision;
use App\Models\Youtube;

class HomeController extends Controller
{
    public function index()
    {
        $jumbotrons = Jumbotron::all();
        $outlets = Outlet::all();
        $products = Product::all();
        $keunggulans = Post::all();
        $galleries = Gallery::all();
        $youtubes = Youtube::all();
        $testimonials = Testimonial::all();

        return view('home', compact(
            'jumbotrons', 'outlets', 'products', 'keunggulans', 'galleries', 'youtubes', 'testimonials'
        ));
    }

    public function about()
    {
        $hero = Hero::where('id', 3)->first();
        $vision = Vision::first();
        $mission = Mission::all();
        $keunggulans = Post::all();
        return view('about', compact('hero', 'vision', 'mission', 'keunggulans'));
    }

    public function contact()
    {
        $hero = Hero::where('id', 4)->first();
        $outlets = Outlet::all();
        return view('contact', compact('hero', 'outlets'));
    }

    public function produk()
    {
        $hero = Hero::where('id', 1)->first();
        $products = Product::all();
        return view('produk', compact('hero', 'products'));
    }

    public function detail_produk($id)
    {
        $hero = Hero::where('id', 1)->first();
        $product = Product::findOrFail($id);
        $otherProducts = Product::where('id', '!=', $id)->get();

        return view('detail-produk', compact('hero', 'product', 'otherProducts'));
    }

    public function kategori_produk()
    {
        return view('kategori-produk');
    }

    public function galeri()
    {
        $hero = Hero::where('id', 2)->first();
        $galleries = Gallery::all();
        return view('galeri', compact('hero', 'galleries'));
    }

    public function outlet()
    {
        $hero = Hero::where('id', 5)->first();
        $outlets = Outlet::all();
        return view('outlet', compact('hero', 'outlets'));
    }

    public function partner()
    {
        $hero = Hero::where('id', 6)->first();
        $partners = Partner::all();
        $products = Product::all();
        return view('partner', compact('hero', 'partners', 'products'));
    }
}
