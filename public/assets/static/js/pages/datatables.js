let jquery_datatable = $("#table1").DataTable({
    fixedHeader: true,
    responsive: true,
      scrollY: 'calc(100vh - 425px)',
})
let customized_datatable = $("#table2").DataTable({
    fixedHeader: true,
    responsive: true,
      scrollY: 'calc(100vh - 425px)',
    pagingType: 'simple',
    dom:
		"<'row'<'col-3'l><'col-9'f>>" +
		"<'row dt-row'<'col-sm-12'tr>>" +
		"<'row'<'col-4'i><'col-8'p>>",
    "language": {
        "info": "Page _PAGE_ of _PAGES_",
        "lengthMenu": "_MENU_ ",
        "search": "",
        "searchPlaceholder": "Search.."
    }
})

const setTableColor = () => {
    document.querySelectorAll('.dataTables_paginate .pagination').forEach(dt => {
        dt.classList.add('pagination-primary')
    })
}
setTableColor()
jquery_datatable.on('draw', setTableColor)