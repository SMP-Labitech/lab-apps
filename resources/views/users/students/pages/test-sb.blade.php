@extends('users.students.main-layout')
@section('students-section')
{{-- Start Profile / Header --}}
<div class="row row-cols-2 mt-4">
    <div class="col">
        <div class="bg-white rounded-5 shadow-lg p-4 text-center">
            <img src="{{ asset('my-assets/img/default-profile.png') }}" alt="" class="img-fluid rounded-circle w-50">
            <h4 class="h6 mt-3 fw-bold">Dymas Arya Nanda</h4>
            <h4 class="fs-7 fw-light">0895 1390 3248</h4>
        </div>
    </div>
    <div class="col">
        <div class="row row-cols-1">
            <div class="col mb-3">
                <div class="bg-white rounded-4 shadow p-3 px-5 text-center d-flex flex-column justify-center">
                    <div class="fw-light fs-8 min-mt-2">Jenjang</div>
                    <div class="biruSMP text-white h5 text-center p-1 rounded-pill mt-2">
                        SMP
                    </div>
                </div>
            </div>
            <div class="col mb-2">
                <div class="bg-white rounded-4 shadow p-3 px-5 text-center d-flex flex-column justify-center">
                    <div class="fw-light fs-8 min-mt-2">Kelas</div>
                    <div class="biruSMP text-white h5 text-center p-1 rounded-pill mt-2">
                        VII
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- End Profile / Header --}}

{{-- Start Menu Card --}}

{{-- End Menu Card --}}
@endsection
