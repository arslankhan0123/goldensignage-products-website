<?php

namespace App\View\Composers;

use App\Models\ProductCategory;
use Illuminate\View\View;

class FooterComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $signageCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['signage'])
            ->orderBy('order', 'asc')
            ->get();

        $flagsCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['flags'])
            ->orderBy('order', 'asc')
            ->get();

        $printingCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['printing/marketing'])
            ->orderBy('order', 'asc')
            ->get();

        $officeStoreCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['officestore'])
            ->orderBy('order', 'asc')
            ->get();

        $backdropsExhibitionCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['backdropsexhibition'])
            ->orderBy('order', 'asc')
            ->get();

        $corporateGiftsBagsCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['corporategiftsbags'])
            ->orderBy('order', 'asc')
            ->get();

        $categories = ProductCategory::where('type', 'Signage')->get();

        $view->with([
            'footerSignageCategories' => $signageCategories,
            'footerFlagsCategories' => $flagsCategories,
            'footerPrintingCategories' => $printingCategories,
            'footerOfficeStoreCategories' => $officeStoreCategories,
            'footerBackdropsExhibitionCategories' => $backdropsExhibitionCategories,
            'footerCorporateGiftsBagsCategories' => $corporateGiftsBagsCategories,
            'categories' => $categories,
        ]);
    }
}
