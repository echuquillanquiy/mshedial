<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('theme/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('theme/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('theme/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('theme/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>

<script src="{{ asset('theme/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('theme/plugins/notification/snackbar/snackbar.min.js') }}"></script>
<script src="{{ asset('theme/assets/js/components/ui-accordions.js') }}"></script>
<script>
    function noty(msg, option = 1)
    {
        Snackbar.show({
            text: msg.toUpperCase(),
            actionText: 'X',
            actionTextColor: '#fff',
            backgroundColor: option === 1 ? '#2ECC71' : '#EC7063',
            pos: 'top-center',
            duration: 4000
        });
    }
</script>

@livewireScripts
