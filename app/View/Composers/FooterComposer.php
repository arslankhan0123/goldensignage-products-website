<?php

namespace App\View\Composers;

use App\Models\AdminDetail;
use App\Models\ProductCategory;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;

class FooterComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        // Cache admin details for 1 hour
        $adminDetails = Cache::remember('admin_details', 3600, function () {
            return AdminDetail::first();
        });

        // Cache all categories for footer (cached for 1 hour)
        $categories = Cache::remember('footer_categories', 3600, function () {
            return ProductCategory::orderBy('order', 'asc')->get();
        });

        // Filter the cached categories collection in-memory
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

        // General Signage category lists
        $signageList = $categories->filter(function ($category) {
            return $category->type === 'Signage';
        });

        $view->with([
            'adminDetails' => $adminDetails,
            'footerSignageCategories' => $signageCategories,
            'footerFlagsCategories' => $flagsCategories,
            'footerPrintingCategories' => $printingCategories,
            'footerOfficeStoreCategories' => $officeStoreCategories,
            'footerBackdropsExhibitionCategories' => $backdropsExhibitionCategories,
            'footerCorporateGiftsBagsCategories' => $corporateGiftsBagsCategories,
            'categories' => $signageList,
        ]);
    }
}
