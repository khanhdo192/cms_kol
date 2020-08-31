$(".tt-dropdown-menu").css("z-index","11001");
$(document).ready(function(){
    $('#jobfield').tokenfield({
        autocomplete: {
            source: ['Singer','Actor','Influencer','Youtuber','Family','Comedy','Music'],
            delay: 100
        },
        showAutocompleteOnFocus: true,            
            
  });
});


function readURL(input){
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgCurrent')
                .attr('src', e.target.result)
        };

        reader.readAsDataURL(input.files[0]);
    }
}


$(document).ready(function(){
    var count = 1;
    $('#add').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group' id='row"+count+"'>";
        html_code += "<input type='text' class='form-control' name='sow_name[]' placeholder='Sow' required>";
        html_code += "<input type='text' class='form-control' name='ratecard[]' placeholder='Rate card' required>";
        html_code += "<input type='date' class='form-control' name='time[]' placeholder='' required>";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus remove' data-row='row"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('#curd_table').append(html_code);
    });
    $(document).on('click', '.remove', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addnote').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group' id='row2"+count+"'>";
        html_code += "<input type='text' class='form-control' name='note_txt[]' placeholder='Note'>";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removenote' data-row='row2"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('#noteform').append(html_code);
    });
    $(document).on('click', '.removenote', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addfb').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group' id='row3"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_fb[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removefb' data-row='row3"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('#postfb').append(html_code);
    });
    $(document).on('click', '.removefb', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addins').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group' id='row4"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_ins[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removeins' data-row='row4"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('#postins').append(html_code);
    });
    $(document).on('click', '.removeins', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(document).ready(function(){
    var count = 1;
    $('#addyt').click(function(){
        count = count + 1;
        var html_code = "<div class='input-group' id='row5"+count+"'>";
        html_code += "<input type='text' class='form-control' name='in_yt[]' placeholder='Link ...' >";
        html_code += "<div class='input-group-append'>";
        html_code += "<button class='btn btnminus removeyt' data-row='row5"+count+"' type='button'><i class='fas fa-minus-circle'></i></button>";
        html_code += "</div>";
        html_code += "</div>";
        $('#postyt').append(html_code);
    });
    $(document).on('click', '.removeyt', function(){
        var delete_row = $(this).data("row");
        $('#' + delete_row).remove();
    });
});

$(function () {
    $('[data-toggle="popover"]').popover()
});

$(document).ready(function() {
    $(document).ready(function() {
        var dataTable = $('#dataTable').dataTable();
        $("#searchbox").keyup(function() {
            dataTable.fnFilter(this.value);
        });    
    });
    
    $('#dataTable').DataTable( {    
        "bInfo" : false,
        "pageLength": 10,
        "lengthChange": false,
        "language": {
            "paginate": {
                "previous": "Trước",
                "next": "Sau",
            }
        },
    } );
} );

jQuery.fn.dataTableExt.afnFiltering.push(
	function( oSettings, aData, iDataIndex ) {
		var iColumn = 3;
		var iMin = document.getElementById('min').value * 1;
		var iMax = document.getElementById('max').value * 1;

		var iVersion = aData[iColumn] == "-" ? 0 : aData[iColumn]*1;
		if ( iMin === "" && iMax === "" )
		{
			return true;
		}
		else if ( iMin === "" && iVersion < iMax )
		{
			return true;
		}
		else if ( iMin < iVersion && "" === iMax )
		{
			return true;
		}
		else if ( iMin < iVersion && iVersion < iMax )
		{
			return true;
		}
		return false;
	}
);