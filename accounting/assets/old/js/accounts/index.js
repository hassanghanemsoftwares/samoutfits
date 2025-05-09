jQuery(document).ready(function () {
	window.accountsDT = null;
	let dtActionsHTML = '<a href="' + getAppURL('accounts/edit/') + '%d" class="btn bt-link btn-xs" title="Edit"><i style="color:#282828;" class="glyphicon glyphicon-pencil"></i></a>' +
		'<a href="javascript:void(0);" onclick="confirmDelete(\'' + getAppURL('accounts/delete/') + '%d\')"class="btn bt-link btn-xs" title="Delete">' +
		'<i class="glyphicon glyphicon-trash text-danger"></i></a>' + '<a href="' + getAppURL('accounts/activity/') + '%d" class="btn bt-link btn-xs" title="Activity"><i class="glyphicon glyphicon-info-sign text-danger"></i></a>';
	'<i class="glyphicon glyphicon-trash text-danger"></i></a>';
	/***************************************************/
	var $dtTbl = $('#accountsTbl');
	BuildDataTableColumnSearch($dtTbl, 'accountsDT');
	var table = $dtTbl.DataTable({
		fixedHeader: true, orderCellsTop: true, searchDelay: _GST, lengthMenu: _dtLengthMenu,
		serverSide: true, processing: true, scrollX: true, scrollY: "400px", deferLoading: $dtTbl.attr('data-num-rows'),
		order: [[0, 'asc']], ajax: { url: getAppURL('accounts/index'), type: 'GET', searchDelay: _GST },
		columns: [{ data: 'account_number' }, { data: 'account_name' }, { data: 'account_type' }, { data: 'currency' },
		{ data: 'opening_date' }, { data: 'phone' }, { data: 'email' }, { data: 'country' }, { data: 'debit' },
		{ data: 'credit' }, { data: 'balance' }, { data: 'open_balance' }, { data: 'id' }],
		columnDefs: [
			{ targets: 12, orderable: false, createdCell: (td, accId) => $(td).addClass('text-right').html(dtActionsHTML.replace(/%d/g, parseInt(accId))) }
		],
		stateSave: true,
		stateSaveCallback: function (settings, data) {
			localStorage.setItem('DataTables_' + settings.sInstance, JSON.stringify(data))
		},
		stateLoadCallback: function (settings) {
			return JSON.parse(localStorage.getItem('DataTables_' + settings.sInstance))
		},
		"stateSaveParams": function (settings, data) {
			var temp = {};
			$('#accountsTbl thead').find("tr:eq(1)").find('input').each(function (n) {
				temp[$(this).attr('placeholder')] = document.getElementById($(this).attr('id')).value;
			});
			data.colsFilter = temp;
			console.log(temp);
		},
		"stateLoadParams": function (settings, data) {
			$.each(data.colsFilter, function (key, val) {
				$('#accountsTbl thead input[placeholder="' + key + '"]').val(val);
			});
		},
		"stateLoaded": function (settings, data) {
			$dtTbl.DataTable().ajax.reload();
		}
	})
	EnhanceDataTableSearch(window.accountsDT = table, 2048);

	// // Setup - add a text input to each footer cell
	// $('#accountsTbl thead tr').clone(true).appendTo( '#accountsTbl thead' );
	// $('#accountsTbl thead tr:eq(1) th').each( function (i) {
	//     var title = $(this).text();
	//     $(this).html( '<input type="text" placeholder="Search '+title+'" />' );

	//     $( 'input', this ).on( 'keyup change', function () {
	//         if ( table.column(i).search() !== this.value ) {
	//             table
	//                 .column(i)
	//                 .search( this.value )
	//                 .draw();
	//         }
	//     } );
	// } );

	// var table = $('#accountsTbl').DataTable( {
	//     orderCellsTop: true,
	//     fixedHeader: true
	// } );
	$('#reset_filters').on('click', function (e) {
		$('#accountsTbl thead').find("tr:eq(1)").find('input').each(function (n) {
			document.getElementById($(this).attr('id')).value = "";
		});
		var table = $('#accountsTbl').DataTable();
		table
			.search('')
			.columns().search('')
			.draw();
	});
});