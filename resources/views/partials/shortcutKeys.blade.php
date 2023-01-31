<script>
    $(function () {
        $.hotkeys.options.filterInputAcceptingElements = false;
        $.hotkeys.options.filterContentEditable = false;
        $.hotkeys.options.filterTextInputs = false;

        $(document).bind('keydown', 'alt+u', function (e) {
            e.preventDefault();
            e.stopPropagation();
            document.location.href = '{{route('users.index')}}';
        });
        $(document).bind('keydown', 'alt+shift+u', function (e) {
            e.preventDefault();
            e.stopPropagation();
            document.location.href = '{{route('users.create')}}';
        });
    });
</script>
