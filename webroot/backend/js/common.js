function companyValidate() {
    $(".error").html('');
    var companyname = $("#companyname").val();
    var firstname = $("#firstname").val();
    var lastname = $("#lastname").val();
    var phonenumber = $("#phonenumber").val();
    var address = $("#address").val();
    var zipcode = $("#zipcode").val();

    if(companyname == '') {
        $(".companynameErr").addClass('error').html('Please enter company name');
        $("#companyname").focus();
        return false;

    }else if(firstname == '') {
        $(".firstErr").addClass('error').html('Please enter your firstname');
        $("#firstname").focus();
        return false;

    }else if(lastname == '') {
        $(".lastErr").addClass('error').html('Please enter your lastname');
        $("#lastname").focus();
        return false;

    }else if(phonenumber == '') {
        $(".phoneErr").addClass('error').html('Please enter your phonenumber');
        $("#phonenumber").focus();
        return false;

    }else if(address == '') {
        $(".addressErr").addClass('error').html('Please enter your address');
        $("#address").focus();
        return false;

    }else if(zipcode == '') {
        $(".zipcodeErr").addClass('error').html('Please enter your zipcode');
        $("#zipcode").focus();
        return false;
    }else {
        $("#addCompany").submit();
    }

}

$(document).ready(function () {
    initialize();
});
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.
var placeSearch, autocomplete,autocomplete1;
var componentForm = {
    street_number: 'short_name',
    route: 'long_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
};

function initialize() {
    // Create the autocomplete object, restricting the search
    autocomplete1 = new google.maps.places.Autocomplete(
        /** @type {HTMLInputElement} */ (document.getElementById('address')),
        { types: ['geocode'],componentRestrictions: {country: 'IND'} });
    google.maps.event.addListener(autocomplete1, 'place_changed', function() {
        fillInAddress();
    });


}

// The START and END in square brackets define a snippet for our documentation:
// [START region_fillform]
function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete1.getPlace();


    // Get each component of the address from the place details
    // and fill the corresponding field on the form.
    for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
        }
    }


}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = new google.maps.LatLng(
                position.coords.latitude, position.coords.longitude);
            autocomplete.setBounds(new google.maps.LatLngBounds(geolocation,
                geolocation));
        });
    }
}

function changeStatus(id, changestaus, field, urlval, action)
{
    $.ajax({
        type   : 'POST',
        url    : baseUrl+''+urlval,
        data   : {id:id, field:field ,changestaus:changestaus,action:action},
        success: function(data){
            //clearConsole();
            if(action == '') {
                window.location.reload();
            }else {
                $("#"+field+"_"+id).html(data);
                return false;
            }
        }
    });
    return false;
}



function deleteRecord(id, urlval, action, page, loadDiv)
{
    var str = "Are you sure want to delete this "+action;
    if(confirm(str))
    {
        $("#maska").show();$(".ui-loader").show();
        $.ajax({
            type   : 'POST',
            url    : baseUrl+''+urlval,
            data   : {id:id, page:page, action:action},
            success: function(data){

                $("#ajaxReplace").html(data);
                if(action != 'customer' && action != 'Followers'){
                    $("#"+loadDiv).DataTable({
                        columnDefs: [ { orderable: false, targets: [-1,-2] } ]
                    });
                }else if(action == 'Followers'){
                    $("#"+loadDiv).DataTable({
                        columnDefs: [ { orderable: false, targets: [-1,-2,-4] } ]
                    });
                }
            }
        });return false;
    }
}