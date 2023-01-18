<div class="row justify-content-center" wire:poll>
    @forelse($clubs as $club)
        <div class="col-4">
            <div class="card mb-3 kfu-card shadow">
                <div class="row g-0">
                    <div class="col-md-4 align-self-center">
                        <img src="https://www.my.gov.sa/wps/wcm/connect/53287931-241c-4d61-9c28-cc89c2656ef3/logo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE-53287931-241c-4d61-9c28-cc89c2656ef3-oluwMpl" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $club['name'] }}</h5>
                            <p class="card-text">النقاط الحالية: {{ $club['points'] }}</p>
                            <p class="card-text">المركز: {{ $loop->iteration }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <h1 class="text-center">لا يوجد مشاركين</h1>
    @endforelse
</div>
