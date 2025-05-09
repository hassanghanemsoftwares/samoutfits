function ExportToExcel(type, fn, dl) {
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();
    today = dd + '-' + mm + '-' + yyyy;
    // $('#wakilniTbl thead tr:eq(1)').hide();
    var elt = document.getElementById('salesExcelTbl');
    var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1", raw: true });
    return dl ?
        XLSX.write(wb, { bookType: type, bookSST: false, type: 'base64' }) :
        XLSX.writeFile(wb, fn || ('invoices_'.concat(today).concat(".") + (type || 'xlsx')));
}