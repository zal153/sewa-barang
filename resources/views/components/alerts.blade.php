 <div class="page-title-head d-flex align-items-md-end flex-sm-row flex-column gap-2">
     <div class="alert alert-{{ $type }} alert-dismissible d-flex align-items-center border-2 border border-{{ $type }} rounded-3"
         role="alert">
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         <iconify-icon icon="{{ $icon }}" class="fs-20 me-1"></iconify-icon>
         <div class="lh-1"><strong>{{ ucFirst($type) }} - </strong> {{ $message }}</div>
     </div>
 </div>
