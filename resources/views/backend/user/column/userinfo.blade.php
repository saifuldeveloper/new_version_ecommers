<!--begin:: Avatar -->
<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
    <a>
        <div class="symbol-label">
            <img src="{{ !empty($query->image) ? asset('storage/' . $query->image) : url('assets/backend/images/no_image.png') }}"
                alt="image" class="w-100" />
        </div>
    </a>
</div>
<!--end::Avatar-->
<!--begin::User details-->
<div class="d-flex flex-column">
    <a class="text-gray-800 text-hover-primary mb-1">{{ $query->name }}</a>
    <span>{{ $query->email }}</span>
</div>
<!--begin::User details-->
