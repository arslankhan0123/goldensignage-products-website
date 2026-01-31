@extends('layouts.backend.main')
@section('title', 'Edit Product')
@section('meta')
<meta name="description" content="Quick News Global AI - Stay informed with AI-powered news summaries in under 9 seconds. Get verified, concise news updates without the noise." />
<meta name="robots" content="index, follow" />
@endsection

@section('content')
<div class="dashboard-main-body">
    <div
        class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Edit Product</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a
                    href="{{route('dashboard')}}"
                    class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon
                        icon="solar:home-smile-angle-outline"
                        class="icon text-lg"></iconify-icon>
                    Dashboard
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium">Edit</li>
        </ul>
    </div>

    <div class="row gy-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Edit Product</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{route('products.update', $product->id)}}"
                        method="POST"
                        enctype="multipart/form-data"
                        class="row gy-3 needs-validation"
                        novalidate>
                        @csrf
                        <div class="col-md-12">
                            <label class="form-label">Product Name <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:box-bold"></iconify-icon>
                                </span>
                                <input
                                    type="text"
                                    name="name"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Enter Product Name"
                                    value="{{old('name', $product->name)}}"
                                    required />
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @else
                                    <div class="invalid-feedback">
                                        Please provide product name
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Product Image</label>
                            @if($product->image)
                                <div class="mb-2" id="currentImage">
                                    <img src="{{asset($product->image)}}" alt="{{$product->name}}" style="max-width: 200px; height: auto; border-radius: 8px; border: 1px solid #e0e0e0;">
                                </div>
                            @endif
                            <div id="newImagePreview" class="mb-2" style="display: none;">
                                <img id="previewImg" src="" alt="Preview" style="max-width: 200px; height: auto; border-radius: 8px; border: 1px solid #e0e0e0;">
                                <p class="text-muted small mt-1">New image preview</p>
                            </div>
                            <div class="has-validation">
                                <input
                                    type="file"
                                    name="image"
                                    id="imageInput"
                                    class="form-control @error('image') is-invalid @enderror"
                                    accept="image/*" />
                                <small class="text-muted">Leave empty to keep current image</small>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <label class="form-label">Type</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:tag-bold"></iconify-icon>
                                </span>
                                <select
                                    name="type"
                                    class="form-control @error('type') is-invalid @enderror">
                                    <option value="">Select Type</option>
                                    <option value="Main Product" {{old('type', $product->type) == 'Main Product' ? 'selected' : ''}}>Main Product</option>
                                    <option value="Child Product" {{old('type', $product->type) == 'Child Product' ? 'selected' : ''}}>Child Product</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <label class="form-label">Category <span class="text-danger">*</span></label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:tag-bold"></iconify-icon>
                                </span>
                                <select
                                    name="category_id"
                                    id="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror"
                                    required>
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{old('category_id', $product->category_id) == $category->id ? 'selected' : ''}}>
                                            {{$category->name}}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @else
                                    <div class="invalid-feedback">
                                        Please select a category
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <label class="form-label">Parent Product (Optional)</label>
                            <div class="icon-field has-validation">
                                <span class="icon">
                                    <iconify-icon
                                        icon="solar:box-bold"></iconify-icon>
                                </span>
                                <select
                                    name="parent_id"
                                    id="parent_id"
                                    class="form-control @error('parent_id') is-invalid @enderror">
                                    <option value="">Select Parent Product (Optional)</option>
                                    @if($product->category_id)
                                        @foreach(\App\Models\Product::where('category_id', $product->category_id)->where('id', '!=', $product->id)->get() as $parentProduct)
                                            <option value="{{$parentProduct->id}}" {{old('parent_id', $product->parent_id) == $parentProduct->id ? 'selected' : ''}}>
                                                {{$parentProduct->name}}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                                <small class="form-text text-muted">Select a parent product if this is a child product</small>
                                @error('parent_id')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <label class="form-label">Short Description</label>
                            <div class="has-validation">
                                <textarea
                                    name="short_description"
                                    class="form-control @error('short_description') is-invalid @enderror"
                                    rows="3"
                                    placeholder="Enter short description">{{old('short_description', $product->short_description)}}</textarea>
                                @error('short_description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <!-- Gallery Section -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Product Gallery <span class="text-danger">*</span></label>
                            <small class="d-block text-muted mb-3">Add multiple images with titles for your product</small>
                            
                            <div id="gallery-container">
                                @php
                                    $existingGallery = [];
                                    if ($product->gallery) {
                                        $existingGallery = json_decode($product->gallery, true) ?? [];
                                    }
                                @endphp

                                @if(!empty($existingGallery))
                                    @foreach($existingGallery as $index => $galleryItem)
                                        <div class="gallery-item card mb-3 p-3" data-index="existing_{{ $index }}">
                                            <div class="d-flex justify-content-between align-items-center mb-2">
                                                <h6 class="mb-0 text-primary">Gallery Item #<span class="item-number">{{ $index + 1 }}</span></h6>
                                                <button type="button" class="btn btn-danger btn-sm remove-existing-gallery-item" data-index="{{ $index }}">
                                                    <iconify-icon icon="solar:trash-bin-minimalistic-bold" class="icon"></iconify-icon>
                                                    Remove
                                                </button>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Current Image</label>
                                                    <div class="mb-2">
                                                        <img src="{{ asset($galleryItem['image']) }}" alt="{{ $galleryItem['title'] }}" style="max-width: 150px; height: auto; border-radius: 8px; border: 1px solid #e0e0e0;">
                                                    </div>
                                                    <input type="hidden" name="existing_gallery_images[]" value="{{ $galleryItem['image'] }}">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                                    <input 
                                                        type="text" 
                                                        name="existing_gallery_titles[]" 
                                                        class="form-control" 
                                                        value="{{ $galleryItem['title'] }}"
                                                        placeholder="Enter image title"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    <!-- Initial Gallery Item if no existing gallery -->
                                    <div class="gallery-item card mb-3 p-3" data-index="0">
                                        <div class="d-flex justify-content-between align-items-center mb-2">
                                            <h6 class="mb-0 text-primary">Gallery Item #<span class="item-number">1</span></h6>
                                            <button type="button" class="btn btn-danger btn-sm remove-gallery-item" style="display: none;">
                                                <iconify-icon icon="solar:trash-bin-minimalistic-bold" class="icon"></iconify-icon>
                                                Remove
                                            </button>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Image <span class="text-danger">*</span></label>
                                                <input 
                                                    type="file" 
                                                    name="gallery_images[]" 
                                                    class="form-control gallery-image-input" 
                                                    accept="image/*"
                                                    required>
                                                <div class="gallery-preview mt-2" style="display: none;">
                                                    <img src="" alt="Preview" style="max-width: 150px; height: auto; border-radius: 8px; border: 1px solid #e0e0e0;">
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="form-label">Title <span class="text-danger">*</span></label>
                                                <input 
                                                    type="text" 
                                                    name="gallery_titles[]" 
                                                    class="form-control" 
                                                    placeholder="Enter image title"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <button type="button" id="add-more-gallery" class="btn btn-success btn-sm">
                                <iconify-icon icon="solar:add-circle-bold" class="icon"></iconify-icon>
                                Add More Image
                            </button>

                            <input type="hidden" name="existing_gallery" id="existing_gallery" value="">

                            @error('gallery_images')
                                <div class="invalid-feedback d-block">
                                    {{$message}}
                                </div>
                            @enderror
                            @error('gallery_titles')
                                <div class="invalid-feedback d-block">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label class="form-label fw-bold text-neutral-900">Description <span class="text-muted">(Rich Text)</span></label>
                            <div class="border border-neutral-200 radius-8 overflow-hidden">
                                <div class="height-200">
                                    <!-- Editor Toolbar Start -->
                                    <div id="toolbar-container-long_description">
                                        <span class="ql-formats">
                                            <select class="ql-font"></select>
                                            <select class="ql-size"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-strike"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <select class="ql-color"></select>
                                            <select class="ql-background"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-script" value="sub"></button>
                                            <button class="ql-script" value="super"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-header" value="1"></button>
                                            <button class="ql-header" value="2"></button>
                                            <button class="ql-blockquote"></button>
                                            <button class="ql-code-block"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-list" value="ordered"></button>
                                            <button class="ql-list" value="bullet"></button>
                                            <button class="ql-indent" value="-1"></button>
                                            <button class="ql-indent" value="+1"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-direction" value="rtl"></button>
                                            <select class="ql-align"></select>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-link"></button>
                                            <button class="ql-image"></button>
                                            <button class="ql-video"></button>
                                        </span>
                                        <span class="ql-formats">
                                            <button class="ql-clean"></button>
                                        </span>
                                    </div>
                                    <!-- Editor Toolbar End -->
                                    <!-- Editor Container Start -->
                                    <div id="editor-long_description"></div>
                                    <!-- Editor Container End -->
                                </div>
                            </div>
                            <textarea name="long_description" id="long_description" style="display: none;"></textarea>
                            @error('long_description')
                                <div class="invalid-feedback d-block">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <!-- <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <div class="has-validation">
                                <textarea
                                    name="description"
                                    class="form-control @error('description') is-invalid @enderror"
                                    rows="4"
                                    placeholder="Enter product description">{{old('description', $product->description)}}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <button
                                class="btn btn-primary-600 d-inline-flex align-items-center"
                                type="submit">
                                <iconify-icon icon="solar:diskette-bold" class="icon me-2"></iconify-icon>
                                Update Product
                            </button>
                            <a href="{{route('products.index')}}" class="btn btn-secondary ms-2">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quill Editor Scripts -->
<script src="{{asset('backend/assets/js/editor.highlighted.min.js')}}"></script>
<script src="{{asset('backend/assets/js/editor.quill.js')}}"></script>
<script src="{{asset('backend/assets/js/editor.katex.min.js')}}"></script>

<script>
    (function() {
        // Wait for Quill to be available
        function initQuill() {
            if (typeof Quill === 'undefined') {
                setTimeout(initQuill, 100);
                return;
            }

            // Initialize Quill Editor for Long Description
            const quillLongDescription = new Quill('#editor-long_description', {
                modules: {
                    syntax: true,
                    toolbar: '#toolbar-container-long_description',
                },
                placeholder: 'Enter detailed description...',
                theme: 'snow',
            });

            // Set initial content from product or old input
            @if(old('long_description', $product->long_description))
                const oldContent = {!! json_encode(old('long_description', $product->long_description)) !!};
                if (oldContent) {
                    quillLongDescription.root.innerHTML = oldContent;
                    document.getElementById('long_description').value = oldContent;
                }
            @endif

            // Update hidden textarea on content change
            quillLongDescription.on('text-change', function() {
                const content = quillLongDescription.root.innerHTML;
                document.getElementById('long_description').value = content;
            });

            // Update hidden textarea before form submit (multiple methods for reliability)
            const form = document.querySelector('form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const longDescriptionContent = quillLongDescription.root.innerHTML;
                    document.getElementById('long_description').value = longDescriptionContent;
                }, false);
                
                // Also update on button click as backup
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) {
                    submitBtn.addEventListener('click', function() {
                        setTimeout(function() {
                            const longDescriptionContent = quillLongDescription.root.innerHTML;
                            document.getElementById('long_description').value = longDescriptionContent;
                        }, 10);
                    });
                }
            }
        }

        // Start initialization
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initQuill);
        } else {
            initQuill();
        }
    })();

    // Image preview for edit form
    document.getElementById('imageInput')?.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('previewImg').src = e.target.result;
                document.getElementById('newImagePreview').style.display = 'block';
            }
            reader.readAsDataURL(file);
        } else {
            document.getElementById('newImagePreview').style.display = 'none';
        }
    });

    // Gallery Management for Edit Form
    let galleryIndex = {{ count($existingGallery ?? []) }};
    let existingGalleryData = @json($existingGallery ?? []);

    // Add More Gallery Item
    document.getElementById('add-more-gallery').addEventListener('click', function() {
        const container = document.getElementById('gallery-container');
        const newItem = createGalleryItem(galleryIndex);
        container.insertAdjacentHTML('beforeend', newItem);
        galleryIndex++;
        updateGalleryNumbers();
        attachGalleryEvents();
    });

    // Create Gallery Item HTML
    function createGalleryItem(index) {
        return `
            <div class="gallery-item card mb-3 p-3" data-index="${index}">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <h6 class="mb-0 text-primary">Gallery Item #<span class="item-number">${index + 1}</span></h6>
                    <button type="button" class="btn btn-danger btn-sm remove-gallery-item">
                        <iconify-icon icon="solar:trash-bin-minimalistic-bold" class="icon"></iconify-icon>
                        Remove
                    </button>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Image <span class="text-danger">*</span></label>
                        <input 
                            type="file" 
                            name="gallery_images[]" 
                            class="form-control gallery-image-input" 
                            accept="image/*"
                            required>
                        <div class="gallery-preview mt-2" style="display: none;">
                            <img src="" alt="Preview" style="max-width: 150px; height: auto; border-radius: 8px; border: 1px solid #e0e0e0;">
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Title <span class="text-danger">*</span></label>
                        <input 
                            type="text" 
                            name="gallery_titles[]" 
                            class="form-control" 
                            placeholder="Enter image title"
                            required>
                    </div>
                </div>
            </div>
        `;
    }

    // Remove existing gallery item
    document.querySelectorAll('.remove-existing-gallery-item').forEach(btn => {
        btn.addEventListener('click', function() {
            const indexToRemove = parseInt(this.getAttribute('data-index'));
            existingGalleryData.splice(indexToRemove, 1);
            this.closest('.gallery-item').remove();
            updateGalleryNumbers();
            updateExistingGalleryInput();
            
            // Re-attach event listeners for remaining items
            document.querySelectorAll('.remove-existing-gallery-item').forEach((btn, newIndex) => {
                btn.setAttribute('data-index', newIndex);
            });
        });
    });

    // Attach events to new gallery items
    function attachGalleryEvents() {
        // Remove gallery item
        document.querySelectorAll('.remove-gallery-item').forEach(btn => {
            btn.onclick = function() {
                this.closest('.gallery-item').remove();
                updateGalleryNumbers();
            };
        });

        // Gallery image preview
        document.querySelectorAll('.gallery-image-input').forEach(input => {
            input.onchange = function(e) {
                const file = e.target.files[0];
                const preview = this.parentElement.querySelector('.gallery-preview');
                const previewImg = preview.querySelector('img');
                
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImg.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.style.display = 'none';
                }
            };
        });
    }

    // Update gallery item numbers
    function updateGalleryNumbers() {
        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            item.querySelector('.item-number').textContent = index + 1;
        });
    }

    // Build existing_gallery JSON from DOM: jo items abhi form mein hain (remove kiye hue exclude). Backend ko yahi value milegi.
    function updateExistingGalleryInput() {
        const existingItems = [];
        const imageInputs = document.querySelectorAll('[name="existing_gallery_images[]"]');
        const titleInputs = document.querySelectorAll('[name="existing_gallery_titles[]"]');
        
        imageInputs.forEach((input, index) => {
            const titleInput = titleInputs[index];
            if (input && titleInput && input.value) {
                existingItems.push({
                    image: input.value.trim(),
                    title: (titleInput.value || '').trim()
                });
            }
        });
        
        const hiddenInput = document.getElementById('existing_gallery');
        if (hiddenInput) {
            hiddenInput.value = JSON.stringify(existingItems);
        }
    }

    // Update existing gallery on form submit (so backend gets current state: kept items + edited titles, deleted items excluded)
    document.querySelector('form').addEventListener('submit', function(e) {
        updateExistingGalleryInput();
    });

    // On page load: set existing_gallery hidden input so backend receives current gallery (remaining items after any remove)
    document.addEventListener('DOMContentLoaded', function() {
        updateExistingGalleryInput();
    });

    // Initialize gallery events
    attachGalleryEvents();

    // Load products by category
    document.getElementById('category_id')?.addEventListener('change', function() {
        const categoryId = this.value;
        const parentProductSelect = document.getElementById('parent_id');
        const currentProductId = {{$product->id}};
        const currentParentId = {{$product->parent_id ?? 'null'}};
        
        // Clear existing options except the first one
        parentProductSelect.innerHTML = '<option value="">Select Parent Product (Optional)</option>';
        
        if (!categoryId) {
            return;
        }

        // Show loading state
        parentProductSelect.disabled = true;
        parentProductSelect.innerHTML = '<option value="">Loading products...</option>';

        // Fetch products for selected category
        fetch(`{{route('api.products-by-category')}}?category_id=${categoryId}`, {
            method: 'GET',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            parentProductSelect.innerHTML = '<option value="">Select Parent Product (Optional)</option>';
            
            if (data.products && data.products.length > 0) {
                data.products.forEach(product => {
                    // Don't show current product as parent option
                    if (product.id != currentProductId) {
                        const option = document.createElement('option');
                        option.value = product.id;
                        option.textContent = product.name;
                        if (currentParentId && product.id == currentParentId) {
                            option.selected = true;
                        }
                        parentProductSelect.appendChild(option);
                    }
                });
            } else {
                const option = document.createElement('option');
                option.value = '';
                option.textContent = 'No products found in this category';
                parentProductSelect.appendChild(option);
            }
            
            parentProductSelect.disabled = false;
        })
        .catch(error => {
            console.error('Error fetching products:', error);
            parentProductSelect.innerHTML = '<option value="">Error loading products</option>';
            parentProductSelect.disabled = false;
        });
    });
</script>
@endsection
