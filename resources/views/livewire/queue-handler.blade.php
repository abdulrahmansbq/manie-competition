<div class="add-to-queue">
    <h1>إضغط هنا</h1>
    @push('scripts')
        <script>
            $('#main-container').on('click',() => {
                Livewire.emit('pushToQueue')
            });
        </script>
    @endpush
</div>
