var TableManaged = function () {

    return {

        //main function to initiate the module
        init: function () {
            
            if (!jQuery().dataTable) {
                return;
            }

            // begin first table
            $('#sample_1').dataTable({
                "aoColumns": [
                  { "bSortable": true },
                  { "bSortable": false },
                  { "bSortable": false },
                  { "bSortable": false },
                  { "bSortable": true },
                  { "bSortable": false }
                ],
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ резултата",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [0] },
                    { "bSearchable": false, "aTargets": [ 0 ] }
                ]
            });

            jQuery('#sample_1_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
            jQuery('#sample_1_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown
            //jQuery('#sample_1_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

            // begin second table
            $('#sample_2').dataTable({
                "aoColumns": [
                  { "bSortable": true },
                  { "bSortable": true },
                  { "bSortable": true }
                ],
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ резултата",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
               "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [0] },
                    { "bSearchable": false, "aTargets": [ 0 ] }
                ]
            });

            jQuery('#sample_2_wrapper .dataTables_filter input').addClass("form-control input-small input-inline"); // modify table search input
            jQuery('#sample_2_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown
            //jQuery('#sample_2_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

            // begin: third table
            $('#sample_3').dataTable({
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [
                    { 'bSortable': false, 'aTargets': [0] },
                    { "bSearchable": false, "aTargets": [ 0 ] }
                ]
            });

            jQuery('#sample_3 .group-checkable').change(function () {
                var set = jQuery(this).attr("data-set");
                var checked = jQuery(this).is(":checked");
                jQuery(set).each(function () {
                    if (checked) {
                        $(this).attr("checked", true);
                    } else {
                        $(this).attr("checked", false);
                    }
                });
                jQuery.uniform.update(set);
            });

            jQuery('#sample_3_wrapper .dataTables_filter input').addClass("form-control input-small input-inline"); // modify table search input
            jQuery('#sample_3_wrapper .dataTables_length select').addClass("form-control input-xsmall"); // modify table per page dropdown
            jQuery('#sample_3_wrapper .dataTables_length select').select2(); // initialize select2 dropdown

        }

    };

}();