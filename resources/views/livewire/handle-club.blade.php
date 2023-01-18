<div>
    <div class="row justify-content-center mt-4 text-center">
        <div class="col-lg-12">
            <div class="card mb-3 bg-light text-dark shadow p-3">
                <div class="row g-0">
                    <div class="col-md-12  align-self-center">
                        <img src="https://www.my.gov.sa/wps/wcm/connect/53287931-241c-4d61-9c28-cc89c2656ef3/logo.png?MOD=AJPERES&CACHEID=ROOTWORKSPACE-53287931-241c-4d61-9c28-cc89c2656ef3-oluwMpl" class="img-fluid w-25 rounded-start" alt="...">
                    </div>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">{{ $club->name }}</h5>
                            <p class="card-text">النقاط الحالية: {{ $club->points }}</p>
                            <p class="card-text">المركز: {{ $club->rank }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-12">
                        <div class="card-body">
                            <h5 class="card-title">القبول</h5>
                            <div>
                                <button class="btn btn-success mt-2" wire:click="accept(100)">100</button>
                                <button class="btn btn-success mt-2" wire:click="accept(150)">150</button>
                                <button class="btn btn-success mt-2" wire:click="accept(200)">200</button>
                                <button class="btn btn-success mt-2" wire:click="accept(250)">250</button>
                                <button class="btn btn-success mt-2" wire:click="accept(300)">300</button>
                                <button class="btn btn-success mt-2" wire:click="accept(350)">350</button>
                            </div>
                            <h5 class="card-title mt-4">الرفض</h5>
                            <button class="btn btn-danger" wire:click="reject(250)">250</button>
                            <h5 class="card-title mt-4">السماح</h5>
                            <button class="btn btn-warning" wire:click="forgive()">سماح</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
