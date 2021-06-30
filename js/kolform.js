$(document).ready(function(){
    $('#jobfield').tokenfield({
        autocomplete: {
            source: ['Singer','Actor','Influencer','Youtuber','Family','Comedy','Music'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});

$(document).ready(function(){
    $('#companyfield').tokenfield({
        autocomplete: {
            source: ['Bread n tea'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});


$(document).ready(function() {
	
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
   
    $(".file-upload").on('change', function(){
        readURL(this);
    });
    
    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});


$(document).ready(function(){
    var count = 1;
    $('#addfb').click(function(){
        count = count + 1;
        var html_code = '<div class="row row'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowfb_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="ratefb[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tablefb').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addins').click(function(){
        count = count + 1;
        var html_code = '<div class="row row2'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowins_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row2'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateins[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row2'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableins').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addyt').click(function(){
        count = count + 1;
        var html_code = '<div class="row row3'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowyt_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row3'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateyt[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row3'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableyt').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addtk').click(function(){
        count = count + 1;
        var html_code = '<div class="row row4'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowtk_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row4'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="ratetk[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row4'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tabletk').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addoff').click(function(){
        count = count + 1;
        var html_code = '<div class="row row5'+count+'">';
        html_code += '<div class="col-xl-7">';
        html_code += '<input type="text" class="form-control inputform" name="sowoff_name[]" placeholder="Sow" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-5">';
        html_code += '<div class="form-row row5'+count+'">';
        html_code += '<div class="col-xl-10">';
        html_code += '<input type="text" class="form-control inputform" name="rateoff[]" placeholder="Rate card" value="">';
        html_code += '</div>';
        html_code += '<div class="col-xl-2">';
        html_code += '<span class="minusinput remove" data-row="row5'+count+'"><i style="margin-top:10px;" class="fas fa-times"></i></span>';
        html_code += '</div>';
        html_code += '</div>';
        $('#curd_tableoff').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

// $(document).ready(function(){
//     var count = 1;
//     $('#addnote').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row2"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='note_txt[]' placeholder='Note'>";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removenote' data-row='row2"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#noteform').append(html_code);
//     });
//     $(document).on('click', '.removenote', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addfb').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row3"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_fb[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removefb' data-row='row3"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postfb').append(html_code);
//     });
//     $(document).on('click', '.removefb', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addins').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row4"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_ins[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeins' data-row='row4"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postins').append(html_code);
//     });
//     $(document).on('click', '.removeins', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

// $(document).ready(function(){
//     var count = 1;
//     $('#addyt').click(function(){
//         count = count + 1;
//         var html_code = "<div class='input-group' id='row5"+count+"'>";
//         html_code += "<input type='text' class='form-control' name='in_yt[]' placeholder='Link ...' >";
//         html_code += "<div class='input-group-append'>";
//         html_code += "<button class='btn btnminus removeyt' data-row='row5"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
//         html_code += "</div>";
//         html_code += "</div>";
//         $('#postyt').append(html_code);
//     });
//     $(document).on('click', '.removeyt', function(){
//         var delete_row = $(this).data("row");
//         $('#' + delete_row).remove();
//     });
// });

$(function () {
    $('[data-toggle="popover"]').popover({
        trigger:"hover"
    });
});

        
        
$(document).ready(function() {
    
    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#minfb1').val(), 10 );
                var max = parseInt( $('#maxfb1').val(), 10 );
                var impact = parseFloat( data[4] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && impact <= max ) ||
                     ( min <= impact   && isNaN( max ) ) ||
                     ( min <= impact   && impact <= max ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table = $('#dataTable').DataTable();
        $('#minfb1, #maxfb1').keyup( function() {
            table.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min2 = parseInt( $('#minfb2').val(), 10 );
                var max2 = parseInt( $('#maxfb2').val(), 10 );
                var active = parseFloat( data[5] ) || 0; // use data for the age column
         
                if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                     ( isNaN( min2 ) && active <= max2 ) ||
                     ( min2 <= active   && isNaN( max2 ) ) ||
                     ( min2 <= active   && active <= max2 ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table2 = $('#dataTable').DataTable();
        $('#minfb2, #maxfb2').keyup( function() {
            table2.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#minins1').val(), 10 );
                var max = parseInt( $('#maxins1').val(), 10 );
                var impact = parseFloat( data[8] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && impact <= max ) ||
                     ( min <= impact   && isNaN( max ) ) ||
                     ( min <= impact   && impact <= max ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table = $('#dataTable').DataTable();
        $('#minins1, #maxins1').keyup( function() {
            table.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min2 = parseInt( $('#minins2').val(), 10 );
                var max2 = parseInt( $('#maxins2').val(), 10 );
                var active = parseFloat( data[9] ) || 0; // use data for the age column
         
                if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                     ( isNaN( min2 ) && active <= max2 ) ||
                     ( min2 <= active   && isNaN( max2 ) ) ||
                     ( min2 <= active   && active <= max2 ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table2 = $('#dataTable').DataTable();
        $('#minins2, #maxins2').keyup( function() {
            table2.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#minyt1').val(), 10 );
                var max = parseInt( $('#maxyt1').val(), 10 );
                var impact = parseFloat( data[12] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && impact <= max ) ||
                     ( min <= impact   && isNaN( max ) ) ||
                     ( min <= impact   && impact <= max ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table = $('#dataTable').DataTable();
        $('#minyt1, #maxyt1').keyup( function() {
            table.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min2 = parseInt( $('#minyt2').val(), 10 );
                var max2 = parseInt( $('#maxyt2').val(), 10 );
                var active = parseFloat( data[13] ) || 0; // use data for the age column
         
                if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                     ( isNaN( min2 ) && active <= max2 ) ||
                     ( min2 <= active   && isNaN( max2 ) ) ||
                     ( min2 <= active   && active <= max2 ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table2 = $('#dataTable').DataTable();
        $('#minyt2, #maxyt2').keyup( function() {
            table2.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#mintk1').val(), 10 );
                var max = parseInt( $('#maxtk1').val(), 10 );
                var impact = parseFloat( data[16] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && impact <= max ) ||
                     ( min <= impact   && isNaN( max ) ) ||
                     ( min <= impact   && impact <= max ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table = $('#dataTable').DataTable();
        $('#mintk1, #maxtk1').keyup( function() {
            table.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min2 = parseInt( $('#mintk2').val(), 10 );
                var max2 = parseInt( $('#maxtk2').val(), 10 );
                var active = parseFloat( data[17] ) || 0; // use data for the age column
         
                if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                     ( isNaN( min2 ) && active <= max2 ) ||
                     ( min2 <= active   && isNaN( max2 ) ) ||
                     ( min2 <= active   && active <= max2 ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table2 = $('#dataTable').DataTable();
        $('#mintk2, #maxtk2').keyup( function() {
            table2.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min = parseInt( $('#minoff1').val(), 10 );
                var max = parseInt( $('#maxoff1').val(), 10 );
                var impact = parseFloat( data[20] ) || 0; // use data for the age column
         
                if ( ( isNaN( min ) && isNaN( max ) ) ||
                     ( isNaN( min ) && impact <= max ) ||
                     ( min <= impact   && isNaN( max ) ) ||
                     ( min <= impact   && impact <= max ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table = $('#dataTable').DataTable();
        $('#minoff1, #maxoff1').keyup( function() {
            table.draw();
        });
    });

    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, dataIndex ) {
                var min2 = parseInt( $('#minoff2').val(), 10 );
                var max2 = parseInt( $('#maxoff2').val(), 10 );
                var active = parseFloat( data[21] ) || 0; // use data for the age column
         
                if ( ( isNaN( min2 ) && isNaN( max2 ) ) ||
                     ( isNaN( min2 ) && active <= max2 ) ||
                     ( min2 <= active   && isNaN( max2 ) ) ||
                     ( min2 <= active   && active <= max2 ) )
                {
                    return true;
                }
                return false;
            }
        );

        var table2 = $('#dataTable').DataTable();
        $('#minoff2, #maxoff2').keyup( function() {
            table2.draw();
        });
    });
    
    $(document).ready(function(){
        $.fn.dataTable.ext.search.push(
            function( settings, data, index, rowData, counter ) {
              var locations = $('input:checkbox[name="kol_location"]:checked').map(function() {
                return this.value;
              }).get();
           
              if (locations.length === 0) {
                return true;
              }
              
              if (locations.indexOf(data[25]) !== -1) {
                return true;
              }
              
              return false;
            }
          );

          $.fn.dataTable.ext.search.push(
            function( settings, data, index, rowData, counter ) {
              var genders = $('input:checkbox[name="kol_gender"]:checked').map(function() {
                return this.value;
              }).get();
           
              if (genders.length === 0) {
                return true;
              }
              
              if (genders.indexOf(data[3]) !== -1) {
                return true;
              }
              
              return false;
            }
          );

          var table3 = $('#dataTable').DataTable();
          $('input:checkbox').on('change',function(){
              table3.draw();
          });
    });

    $(document).ready(function() {
        var dataTable = $('#dataTable').dataTable();
        $("#searchbox").keyup(function() {
            dataTable.fnFilter(this.value);
        });   
    });

    $(document).ready(function(){
        var table4 = $('#dataTable').DataTable();
        table4.columns([3,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,25,28]).visible(false);

        
            $('#fbshow').click(function(){
                table4.columns([4,5,6,7]).visible(true);
                table4.columns([8,9,10,11]).visible(false);
                table4.columns([12,13,14,15]).visible(false);
                table4.columns([16,17,18,19]).visible(false);
                table4.columns([20,21,22,23]).visible(false);
                $('.pf1').show();
                $('.pf2').hide();
                $('.pf3').hide();
                $('.pf4').hide();
                $('.pf5').hide();
            });
            $('#inshow').click(function(){
                table4.columns([4,5,6,7]).visible(false);
                table4.columns([8,9,10,11]).visible(true);
                table4.columns([12,13,14,15]).visible(false);
                table4.columns([16,17,18,19]).visible(false);
                table4.columns([20,21,22,23]).visible(false);
                $('.pf1').hide();
                $('.pf2').show();
                $('.pf3').hide();
                $('.pf4').hide();
                $('.pf5').hide();
            });
            $('#ytshow').click(function(){
                table4.columns([4,5,6,7]).visible(false);
                table4.columns([8,9,10,11]).visible(false);
                table4.columns([12,13,14,15]).visible(true);
                table4.columns([16,17,18,19]).visible(false);
                table4.columns([20,21,22,23]).visible(false);
                $('.pf1').hide();
                $('.pf2').hide();
                $('.pf3').show();
                $('.pf4').hide();
                $('.pf5').hide();
            });
            $('#tkshow').click(function(){
                table4.columns([4,5,6,7]).visible(false);
                table4.columns([8,9,10,11]).visible(false);
                table4.columns([12,13,14,15]).visible(false);
                table4.columns([16,17,18,19]).visible(true);
                table4.columns([20,21,22,23]).visible(false);
                $('.pf1').hide();
                $('.pf2').hide();
                $('.pf3').hide();
                $('.pf4').show();
                $('.pf5').hide();
            });
            $('#otshow').click(function(){
                table4.columns([4,5,6,7]).visible(false);
                table4.columns([8,9,10,11]).visible(false);
                table4.columns([12,13,14,15]).visible(false);
                table4.columns([16,17,18,19]).visible(false);
                table4.columns([20,21,22,23]).visible(true);
                $('.pf1').hide();
                $('.pf2').hide();
                $('.pf3').hide();
                $('.pf4').hide();
                $('.pf5').show();
            });
    });

    // $(document).ready(function(){
    //     var table5 = $('#dataTable').DataTable();
    //         $('#filterjob').on('change', function () {
    //             table5.columns(1).search( this.value ).draw();
    //         } );
    // });

    $(document).ready(function(){
        var table6 = $('#dataTable').DataTable();
        $('#searchjob').on( 'keyup', function () {
            table6
                .columns( 2 )
                .search( this.value )
                .draw();
        } );
    });

    $(document).ready(function(){
        var table7 = $('#dataTable').DataTable();
        $('#searchcompany').on( 'keyup', function () {
            table7
                .columns( 28 )
                .search( this.value )
                .draw();
        } );
    });

    $(document).ready(function(){
        $(".btnrefresh").click(function(){
            $("#filterForm").trigger("reset");
            $('#dataTable').DataTable().search('').draw();
        });
    });

    

    $('#dataTable').dataTable( {    
        "bInfo" : false,
        "pageLength": 10,
        "ordering": false,
        "lengthChange": false,
        //"dom": 'Bfrtip',
        // "buttons": [
        //     'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        "language": {
            "paginate": {
                "previous": "Trước",
                "next": "Sau",
            }
        },
        'columnDefs': [
            
            {
               'targets': 0,
               'checkboxes': {
                  'selectRow': true
               }
            }
         ],
         'select': {
            'style': 'multi'
         },
         'order': [[1, 'asc']],


        'dom': 'Bfrtip',


                'buttons': [
                    {
                        'extend': 'pdfHtml5',
                        'className': 'btn btn-success',
                        'text': 'PDF',
                        'exportOptions': {
                            'columns': [2,4,5,6,7,26],
                            'modifier': {
                                'selected': true
                            }
                        },
                        'title': 'Kol PDF'
                    }, 
                    {
                        'extend': 'excelHtml5',
                        'className': 'btn btn-success',
                        'text': 'EXCEL',
                        'exportOptions': {
                            'columns': [2,4,5,6,7,26],
                            'modifier': {
                                'selected': true
                            }
                        },
                        'title': 'Kol Excel'
                    },
                ],
              

        initComplete: function() {
       	 var $buttons = $('.dt-buttons').hide();
         $('#exportLink').on('change', function() {
            var btnClass = $(this).find(":selected")[0].id 
               ? '.buttons-' + $(this).find(":selected")[0].id 
               : null;
            if (btnClass) $buttons.find(btnClass).click(); 
         })
        },
        'select': {
            'style': 'multi'
        },
    } );
} );



// $(document).ready(function(){
//     $('#searchjob').on('keyup',function(event){
//         event.preventDefault();
//         var jobkey = $(this).val().toLowerCase();
//         $('#dataTable2 tr').filter(function(){
//             $(this).toggle($(this).text().toLowerCase().indexOf(jobkey)>-1);
//         });
//     });
// });




 
