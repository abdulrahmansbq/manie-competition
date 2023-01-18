<div class="add-to-queue">
    <h1>إضغط هنا</h1>
    @push('scripts')
        <script>
            $('body').on('click',() => {
                Livewire.emit('pushToQueue')
            });
        </script>
    @endpush
</div>
