<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $("#postponed-btn").click(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Postponed it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $("#form").submit();
            }
        })

    });
</script>