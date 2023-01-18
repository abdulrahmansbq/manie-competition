<div>
    <div class="row justify-content-center mt-4" wire:poll>
    @forelse($clubs as $club)
        <div class="col-lg-4">
            <a class="card mb-3 kfu-card shadow p-3" @hasrole('presenter') href="{{ route('club', [$club->id]) }}" @endhasrole>
                <div class="row g-0">
                    <div class="col-md-4 d-none d-md-block align-self-center">
                        <img src="https://www.my.gov.sa/wps/wcm/connect/53287931-241c-4d61-9c28-cc89c2656ef3/logo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE-53287931-241c-4d61-9c28-cc89c2656ef3-oluwMpl" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $club->name }}</h5>
                            <p class="card-text">النقاط الحالية: {{ $club->points }}</p>
                            <p class="card-text">المركز: {{ $loop->iteration }}</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <h1 class="text-center">لا يوجد مشاركين</h1>
    @endforelse
    </div>
    <div class="text-center d-grid mt-5">
        <button class="btn btn-warning" wire:click="zeros()">تصفير</button>
    </div>

</div>
