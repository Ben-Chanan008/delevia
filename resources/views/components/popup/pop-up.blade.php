
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="delete-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="d-flex w-100 justify-content-end p-3">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3 class="fw-bold modal-title site-text-primary" id="exampleModalLabel">{{$title ?? null}}</h3>
                {{$body ?? null}}
            </div>
            <div class="d-flex w-100 justify-content-end p-4">
                <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger me-2">Delete</button>
            </div>
        </div>
    </div>
</div>
