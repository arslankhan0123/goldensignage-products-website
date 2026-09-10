<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($pages as $page)
    <url>
        <loc>{{ $page }}</loc>
    </url>
@endforeach
@foreach ($products as $product)
    <url>
        <loc>{{ route('frontend.product-details', $product->id) }}</loc>
        <lastmod>{{ optional($product->updated_at)->toAtomString() }}</lastmod>
    </url>
@endforeach
</urlset>
