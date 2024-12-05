<div id="photos-list" class="container pb-3 pb-sm-5">
    <div class="row d-flex justify-content-center">
        @foreach ($list as $p)
        <div class="col-6 col-sm-4">
            <div class="gallery-box">
                <a href="{{ asset('/uploads/gallery/images/'.$p->file) }}"
                   class="glightbox"
                   data-gallery="gallery"
                   title=""
                >
                    <picture>
                        <source srcset="{{ asset('/uploads/gallery/images/thumbs/webp/'.$p->file_webp) }}" type="image/webp">
                        <source srcset="{{ asset('/uploads/gallery/images/thumbs/'.$p->file) }}" type="image/jpeg">
                        <img src="{{ asset('/uploads/gallery/images/thumbs/'.$p->file) }}" alt="{{ $p->name }}" loading="lazy" width="676" height="507" class="w-100 h-auto">
                    </picture>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
