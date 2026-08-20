<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/website-development', [PageController::class, 'websiteDevelopment'])->name('website-development');
Route::get('/wordpress-development', [PageController::class, 'wordpressDevelopment'])->name('wordpress-development');
Route::get('/ecommerce-development', [PageController::class, 'ecommerceDevelopment'])->name('ecommerce-development');
Route::get('/website-redesign', [PageController::class, 'websiteRedesign'])->name('website-redesign');
Route::get('/cms-development', [PageController::class, 'cmsDevelopment'])->name('cms-development');
Route::get('/seo', [PageController::class, 'seo'])->name('seo');
Route::get('/digital-marketing', [PageController::class, 'digitalMarketing'])->name('digital-marketing');
Route::get('/social-media-marketing', [PageController::class, 'socialMediaMarketing'])->name('social-media-marketing');
Route::get('/advertising', [PageController::class, 'advertising'])->name('advertising');
Route::get('/branding-creative', [PageController::class, 'brandingCreative'])->name('branding-creative');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/hire', [PageController::class, 'hire'])->name('hire');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

// AJAX form submissions
Route::post('/contact/submit', [FormController::class, 'contactSubmit'])->name('contact.submit');
Route::post('/hire/submit', [FormController::class, 'hireSubmit'])->name('hire.submit');
Route::post('/newsletter/subscribe', [FormController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin Auth routes
Route::get('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout')->middleware('auth');

// Admin routes (protected)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    // Services
    Route::resource('services', \App\Http\Controllers\Admin\ServiceController::class);

    // Portfolios
    Route::resource('portfolios', \App\Http\Controllers\Admin\PortfolioController::class);

    // Team Members
    Route::resource('team', \App\Http\Controllers\Admin\TeamController::class);

    // Testimonials
    Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);

    // FAQs
    Route::resource('faqs', \App\Http\Controllers\Admin\FaqController::class);

    // Blog Categories
    Route::resource('blog/categories', \App\Http\Controllers\Admin\BlogCategoryController::class)->except(['show'])->names(['index' => 'blog-categories.index', 'create' => 'blog-categories.create', 'store' => 'blog-categories.store', 'edit' => 'blog-categories.edit', 'update' => 'blog-categories.update', 'destroy' => 'blog-categories.destroy']);

    // Blog Posts
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);

    // Inquiries
    Route::get('inquiries', [\App\Http\Controllers\Admin\InquiryController::class, 'index'])->name('inquiries.index');
    Route::get('inquiries/{id}', [\App\Http\Controllers\Admin\InquiryController::class, 'show'])->name('inquiries.show');
    Route::patch('inquiries/{id}/read', [\App\Http\Controllers\Admin\InquiryController::class, 'markRead'])->name('inquiries.read');
    Route::delete('inquiries/{id}', [\App\Http\Controllers\Admin\InquiryController::class, 'destroy'])->name('inquiries.destroy');

    // Subscribers
    Route::get('subscribers', [\App\Http\Controllers\Admin\SubscriberController::class, 'index'])->name('subscribers.index');
    Route::delete('subscribers/{id}', [\App\Http\Controllers\Admin\SubscriberController::class, 'destroy'])->name('subscribers.destroy');

    // Settings
    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::patch('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
});
