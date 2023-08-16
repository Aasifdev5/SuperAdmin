$(document).ready(function () {
    // Set up DataTable
    $("#data-table").DataTable();

    // Search box filter
    $("#search-input").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#table-body tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
        });
    });

    // Show entries
    $("#show-entries select").on("change", function () {
        var entries = $(this).val();
        $("#data-table").DataTable().page.len(entries).draw();
    });

    // Pagination
    $("#pagination").on("click", "a.page-link", function (e) {
        e.preventDefault();
        var page = $(this).text();
        $("#data-table")
            .DataTable()
            .page(parseInt(page) - 1)
            .draw("page");
    });
});
