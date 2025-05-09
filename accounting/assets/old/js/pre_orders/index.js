jQuery(document).ready(function () {
    window.preordersDT = null;
    let dtActionsHTML = '<a href="' + getAppURL('pre_orders/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
        '<a href="' + getAppURL('pre_orders/to_invoice/') + '%d" class="btn bt-link btn-xs" title="To invoice"><i style="color:#282828;" class="glyphicon glyphicon-check"></i></a>' +
        '<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('pre_orders/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
        '<i class="glyphicon glyphicon-trash text-danger"></i></a>' +
        '<input type="text" value="%d" hidden>';
    let statusHTML = '<p>%s</p>';
    /***************************************************/
    // console.log($('#preordersTbl').find("td:last-child"))
    var $dtTbl = $('#preordersTbl');
    BuildDataTableColumnSearch($dtTbl, 'preordersDT');
    EnhanceDataTableSearch(window.preordersDT = $dtTbl.DataTable({
        orderCellsTop: true, fixedHeader: { headerOffset: 0 }, searchDelay: _GST, lengthMenu: _dtLengthMenu,
        serverSide: true, processing: true, scrollX: true, scrollY: "350px", deferLoading: $dtTbl.attr('data-num-rows'),
        order: [[0, 'asc']], ajax: {
            url: getAppURL('pre_orders/index'), type: 'GET', searchDelay: _GST,
            data: function (params) {
                let formData = jQuery('#dtAdvFltrs').serializeArray();
                for (i in formData) {
                    params[formData[i].name] = formData[i].value;
                }
                var tags = $('#select_tracking_nb1').data('tags');
				var t = [];
				params['multi_auto_nos'] = '';
				if (tags !== undefined) {
					for (let i = 0; i < tags.length; i++) {
						t.push(tags[i].text);
					}
					params['multi_auto_nos'] = t.toString();
				}
            },
            complete: function () {
                // calculate_total();
            }
        },
        columns: [{ data: 'account_nb1' }, { data: 'trans_date' }, { data: 'trans_type' }, { data: 'auto_no' }, { data: 'account1' }, { data: 'subtotal' },
        { data: 'delivery_charge' }, { data: 'total' }, { data: 'trans_qty' }, { data: 'status2' }, { data: 'value_date' }, { data: 'driver' }, { data: 'user' }, { data: 'id' }],
        columnDefs: [
            { targets: 13, orderable: false, createdCell: (td, Id, row) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(Id))) },
            // { targets: 3, orderable: false, createdCell: (td, status, row) => $(td).addClass('text-right').html(statusHTML.replace(/%s/g, get_status(row.trans_type, status))) },
            {
                targets: 1, render: function (data, type, row, meta) {
                    // console.log(type);
                    if (type == 'display' && data !== null && data !== '0000-00-00 00:00:00') {
                        return moment(data).format('DD-MM-YYYY');
                    } else if (type == 'filter') {
                        return moment(data).format('DD-MM-YYYY');
                    } else {
                        return "-";
                    }
                }
            },
        ],
        stateSave: true,
        stateSaveCallback: function (settings, data) {
            localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
        },
        stateLoadCallback: function (settings) {
            return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
        },
        "stateSaveParams": function (settings, data) {
            temp = {};
            $('#preordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
                temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
            });
            // $('reset_filters').on('click', function(){
            // 	$('#preordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            // 		temp[$(this).attr('placeholder')] = '';
            // 	});	
            // });	
            data.colsFilter = temp;
            // console.log(temp);
        },
        "stateLoadParams": function (settings, data) {
            $.each(data.colsFilter, function (key, val) {
                $('#preordersTbl thead input[placeholder="' + key + '"]').val(val);
            });
        },
        "stateLoaded": function (settings, data) {
            $dtTbl.DataTable().ajax.reload();
        }
    }), 2048);
    $('#reset_filters1').on('click', function (e) {
        $('#preordersTbl thead').find("tr:eq(1)").find('input').each(function (n) {
            document.getElementById($(this).attr('id')).value = "";
        });
        $('#select_tracking_nb1').clearAllTags();
        var table = $('#preordersTbl').DataTable();
        table
            .search('')
            .columns().search('')
            .draw();
    });
    $('#bulk').on('click', function (e) {
		let table = document.getElementById("table_bulk");
		table.deleteTHead();
		for (var i = 1; i < table.rows.length;) {
			table.deleteRow(i);
		}
		let table1 = document.getElementById("table_bulk_ids");
		table1.deleteTHead();
		for (var i = 1; i < table1.rows.length;) {
			table1.deleteRow(i);
		}
		var rows = [];
		var ids = [];
		var all_ids = [];
		var count = 0;
		$("table > tbody#table_body > tr").each(function () {
			rows[count] =
			{
				'account nb': $(this).find('td').eq(0).text(),
				'trans date': $(this).find('td').eq(1).text(),
				'auto nb': $(this).find('td').eq(3).text(),
				'account name': $(this).find('td').eq(4).text(),
				'subtotal': $(this).find('td').eq(5).text(),
				'delivery charge': $(this).find('td').eq(6).text(),
				'total': $(this).find('td').eq(7).text(),
				'qty': $(this).find('td').eq(8).text(),
				'status': $(this).find('td').eq(9).text(),
				'dispatch date': $(this).find('td').eq(10).text(),
				'delivery': $(this).find('td').eq(11).text(),
				'User': $(this).find('td').eq(12).text(),

			};
			ids[count] = { 'id': $(this).find("td").eq(13).find("input").val() };
			all_ids[count] = ids[count].id;
			count++;
		});
		$('#all_ids').val(all_ids);
		let data = Object.keys(rows[0]);
		generateTableHead(table, data);
		generateTable(table, rows);
		let data1 = Object.keys(ids[0]);
		generateTableHead(table1, data1);
		generateTable(table1, ids);
		$('#bulk_modal').modal('show');
		// $('#all_ids').val(ids.toString());
	});
    $('#select_tracking_nb1').tagThis({
		noDuplicates: true
	});
    jQuery('#dtAdvFltrs').attr('onsubmit', '').on('submit', triggerDTFiltersSearch);
});

function triggerDTFiltersSearch(e) {
	window.preordersDT.ajax.reload();
	e.preventDefault();
	e.stopPropagation();
	return false;
}

function generateTableHead(table, data) {
	let thead = table.createTHead();
	let row = thead.insertRow();
	for (let key of data) {
		let th = document.createElement("th");
		let text = document.createTextNode(key);
		th.appendChild(text);
		row.appendChild(th);
	}
}

function generateTable(table, data) {
	for (let element of data) {
		let row = table.insertRow();
		for (key in element) {
			let cell = row.insertCell();
			let text = document.createTextNode(element[key]);
			cell.appendChild(text);
		}
	}
}

function change_date_format(date) {
	var datearray = date.split("-");
	var new_date_format = datearray[2] + "-" + datearray[1] + "-" + datearray[0];
	return new_date_format;
}

function get_status(trans_type, status) {
    if (trans_type === "SA") {
        return "";
    } else {
        if (status === "0") {
            return "No";
        } else {
            return "Yes";
        }
    }
}