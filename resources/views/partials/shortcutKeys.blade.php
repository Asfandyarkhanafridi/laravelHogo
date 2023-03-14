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

        $(document).bind('keydown', 'alt+Backspace', function (e) {
            e.preventDefault();
            e.stopPropagation();
            document.location.href = '{{ url()->previous() }}';
        });

        $(document).bind('keydown', 'ctrl+s', function (e) {
            e.preventDefault();
            e.stopPropagation();
            if ($("button[type='submit']").length > 0) {
                var btn = $("button[type='submit']").first();
                $(btn).trigger('click');
            }
        });
    });
</script>
