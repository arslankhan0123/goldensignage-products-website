<?php

namespace App\View\Composers;

use App\Models\ProductCategory;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class NavbarComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        // Cache categories with eager-loaded products for 1 hour
        $categories = Cache::remember('navbar_categories', 3600, function () {
            return ProductCategory::orderBy('order', 'asc')
                ->with(['products' => function ($query) {
                    $query->orderBy('id');
                }])
                ->get();
        });

        // Filter collections in-memory (highly performant, zero extra queries)
        $signageCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'signage';
        });

        $flagsCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'flags';
        });

        $printingCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'printing/marketing';
        });

        $officeStoreCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'officestore';
        });

        $backdropsExhibitionCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'backdropsexhibition';
        });

        $corporateGiftsBagsCategories = $categories->filter(function ($category) {
            return strtolower($category->type) === 'corporategiftsbags';
        });

        $view->with([
            'signageCategories' => $signageCategories,
            'flagsCategories'   => $flagsCategories,
            'printingCategories'   => $printingCategories,
            'officeStoreCategories'   => $officeStoreCategories,
            'backdropsExhibitionCategories'   => $backdropsExhibitionCategories,
            'corporateGiftsBagsCategories'   => $corporateGiftsBagsCategories,
        ]);
    }
}
