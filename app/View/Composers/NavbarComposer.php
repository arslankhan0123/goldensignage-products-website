<?php

namespace App\View\Composers;

use App\Models\ProductCategory;
use Illuminate\View\View;

class NavbarComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        // Get Signage categories (type = Signage) with their products
        // Eager load products for each category - case insensitive type match
        $signageCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['signage'])
            ->orderBy('order', 'asc')
            ->with(['products' => function ($query) {
                $query->orderBy('id');
            }])
            ->get();


        $flagsCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['flags'])
            ->orderBy('order', 'asc')
            ->with(['products' => function ($query) {
                $query->orderBy('id');
            }])
            ->get();

        $printingCategories = ProductCategory::whereRaw('LOWER(type) = ?', ['Printing/Marketing'])
            ->orderBy('order', 'asc')
            ->with(['products' => function ($query) {
                $query->orderBy('id');
            }])
            ->get();
            
        $view->with([
            'signageCategories' => $signageCategories,
            'flagsCategories'   => $flagsCategories,
            'printingCategories'   => $printingCategories,
        ]);
    }
}
