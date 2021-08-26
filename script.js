//Sidebar function
//let sidebar = document.querySelector(".sidebar");
//let closeBtn = document.querySelector("#btn");
//
//closeBtn.addEventListener("click", ()=>{
//  sidebar.classList.toggle("open");
//});

//functions
function loginBtn() {
    var username = $('#username').val(); //admin
    var password = $('#password').val(); //admin

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: {
            function: 'login',
            username: username,
            password: password
        },
        dataType: 'text',
        success: function (data) {
            alert(data);
            if (data.includes("Login Successfully!")) {
                //                alert("Login Successfully!")
                window.location = "index.php";
            }
            else {
                // console.log(data);
                //                alert("Please check Username/Email and Password if correct.");
            }
        }
    });
}

function logoutBtn() {
    alert("You Logged Out!");
    window.location = "logout.php";
}

//modal add asset
function addasset() {
    $('#addasset').modal('show');
}

function save_asset() {
    var asset_tag = $('#new_asset_tag').val().toUpperCase();
    var date_purchase = $('#new_date_purchase').val();
    var asset_name = $('#new_asset_name').val();
    var serial_no = $('#new_serial_no').val();
    var description = $('#new_description').val();
    var sbu = $('#new_sbu').val();
    var price = $('#new_price').val();
    var installed_os = $('#new_installed_os').val();
    var ms_office = $('#new_ms_office').val();
    var remarks = $('#new_remarks').val();
    var type = $('#new_type').val();
    var status = $('#new_status').val();

    if ((asset_tag == "") || (asset_tag == null) && (date_purchase == null) || (date_purchase == "") && (asset_name == null) || (asset_name == "") && (sbu == null) || (sbu == "") && (type == null) || (type == "")) {


        document.getElementById('val_tag').classList.add('was-validated');
        document.getElementById('val_date').classList.add('was-validated');
        document.getElementById('val_asset').classList.add('was-validated');
        document.getElementById('val_type').classList.add('was-validated');
        document.getElementById('val_sbu').classList.add('was-validated');
        ////        return false;

    } else {
        $.ajax({
            type: 'POST',
            url: 'ajax.php',
            data: {
                function:
                    'save_new_asset',
                asset_tag: asset_tag,
                date_purchase: date_purchase,
                asset_name: asset_name,
                serial_no: serial_no,
                description: description,
                sbu: sbu,
                price: price,
                installed_os: installed_os,
                ms_office: ms_office,
                remarks: remarks,
                type: type,
                status: status

            },
            dataType: 'text',
            success: function (data) {
                console.log(data)
                alert("Success");
                setTimeout(function(){
                $('#addasset').modal('hide');
                asset_list();
                },500);
              
            } 
        });
    }
}
$('#addasset').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("myForm").reset();
})


function asset_list() {

    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { function: 'asset_lists' },
        dataType: 'text',
        success: function (data) {
            //alert(data);
            $('#assetlist').empty();
            $('#assetlist').append(data);
        }
    });
}

//modal view asset 
function view_asset(id) {

    $('#viewasset').modal();

    $('#viewasset').attr('assetid', id);

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'load_asset', id: id },
        dataType: 'json',
        success: function (data) {

            $('#asset_tag').val(data[0]['asset_tag']);
            $('#date_purchase').val(data[0]['date_purchase']);
            $('#asset_name').val(data[0]['asset_name']);
            $('#serial_no').val(data[0]['serial_no']);
            $('#type').val(data[0]['type_of']);
            $('#description').val(data[0]['descriptions']);
            $('#sbu').val(data[0]['sbu']);
            $('#price').val(data[0]['price']);
            $('#installed_os').val(data[0]['installed_os']);
            $('#ms_office').val(data[0]['ms_office']);
            $('#status').val(data[0]['status']);
            $('#remarks').val(data[0]['remarks']);
        }
    });
}

//save updated asset detail
function save_edited_assets() {

    var id = $('#viewasset').attr('assetid');

    var asset_tag = $('#asset_tag').val();

    var date_purchase = $('#date_purchase').val();

    var asset_name = $('#asset_name').val();

    var serial_no = $('#serial_no').val();

    var type = $('#type').val();

    var description = $('#description').val();

    var sbu = $('#sbu').val();

    var price = $('#price').val();

    var installed_os = $('#installed_os').val();

    var ms_office = $('#ms_office').val();

    var status = $('#status').val();

    var remarks = $('#remarks').val();


    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'save_edited_asset', id: id, asset_tag: asset_tag, date_purchase: date_purchase, asset_name: asset_name, serial_no: serial_no, type: type, description: description, sbu: sbu, price: price, installed_os: installed_os, ms_office: ms_office, status: status, remarks: remarks },
        dataType: 'text',
        success: function (data) {

            setTimeout(function(){
                $('#viewasset').modal('hide');
                asset_list();
                },500);
        }
    });
}
$('#addasset').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("myForm").reset();
})
//modal message delete
function delete_asset_confirmation(id) {

    $('#deleteasset').modal();
    $('#deleteasset').attr('confirmation_delete', id);
}

function delete_asset() {

    var id = $('#deleteasset').attr('confirmation_delete');

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'delete_asset', id: id },
        dataType: 'text',
        success: function (data) {
            location.reload();
        }
    });
}

function loadassets(keys) {
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'getasset', keys: keys },
        dataType: 'text',
        success: function (data) {

            $('#assetlist').empty();
            $('#assetlist').append(data);
        }
    });

}

$('#addasset').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("myForm").reset();
})


//Assigning an Asset

//modal for assign asset
function assignasset_loader(id) {

    $('#assignassetthruassets').modal('show');
    $('#assignassetthruassets').attr('assign_assetid', id);

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'assignasset_loader', id: id },
        dataType: 'json',
        success: function (data) {
            console.log(data);
            $('#assign_asset_tag').val(data[0]['asset_tag']);
            $('#assign_asset_name').val(data[0]['asset_name']);
            $('#assign_type').val(data[0]['type_of']);
            $('#assign_serial_no').val(data[0]['serial_no']);
            $('#assign_description').val(data[0]['descriptions']);
            $('#assign_status').val(data[0]['status']);
            $('#assign_remarks').val(data[0]['remarks']);
        }
    });
}

//load employee details thru their id
function load_data(item) {

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'get_employee', item: item },
        dataType: 'json',
        success: function (data) {

            $('#emp_id').val(data[0]['id']);
            $('#firstname').val(data[0]['first_name']);
            $('#lastname').val(data[0]['last_name']);
            $('#emp_sbu').val(data[0]['sbu_id']);
            $('#position').val(data[0]['position']);

        }
    });
}

//save assign to records
function submit_assignasset() {

    var id = $('#assignassetthruassets').attr('assign_assetid');
    var assign_asset_tag = $('#assign_asset_tag').val();
    var assign_asset_name = $('#assign_asset_name').val();
    var assign_type = $('#assign_type').val();
    var assign_serial_no = $('#assign_serial_no').val();
    var assign_description = $('#assign_description').val();
    var assign_status = $('#assign_status').val();
    var assign_remarks = $('#assign_remarks').val();
    var emp_id = $('#emp_id').val();
    var date_assigned = $('#emp_date_assigned').val();
    var firstname = $('#firstname').val();
    var lastname = $('#lastname').val();
    var emp_sbu = $('#emp_sbu').val();
    var position = $('#position').val();
    var location = $('#location').val();

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'submit_assign', id: id, assign_asset_tag: assign_asset_tag, assign_asset_name: assign_asset_name, assign_type: assign_type, assign_serial_no: assign_serial_no, assign_description: assign_description, assign_status: assign_status, assign_remarks: assign_remarks, emp_id: emp_id, date_assigned: date_assigned, firstname: firstname, lastname: lastname, emp_sbu: emp_sbu, position: position, location: location },
        dataType: 'text',
        success: function (data) {
            
            alert(data);
            setTimeout(function(){
                $('#assignassetthruassets').modal('hide');
                asset_list();
                },500);  
        }
    });
}
$('#assignassetthruassets').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("assigning-asset").reset();
})

//display record list
function record_list() {

    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { function: 'record_lists' },
        dataType: 'text',
        success: function (data) {

            $('#recordlist').empty();
            $('#recordlist').append(data);
        }
    });
}

//add assign modal
function add_assign_record() {
    $('#assignassetthrurecord').modal('show');
}


//assign thru record
function assign_asset_record(asset) {
    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'get_asset', asset: asset },
        dataType: 'json',
        success: function (data) {

            $('#assign_asset_id_record').val(data[0]['id']);
            $('#assign_asset_tag_record').val(data[0]['asset_tag']);
            $('#assign_serial_record').val(data[0]['serial_no']);
            $('#assign_status_record').val(data[0]['status']);
            $('#assign_asset_name_record').val(data[0]['asset_name']);
            $('#assign_type_record').val(data[0]['type_of']);
            $('#assign_description_record').val(data[0]['descriptions']);
            $('#assign_remarks_record').val(data[0]['remarks']);
        }
    });

}


function assign_emp_record(item) {

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'get_employee', item: item },
        dataType: 'json',
        success: function (data) {

            $('#emp_id_record').val(data[0]['id']);
            $('#firstname_record').val(data[0]['first_name']);
            $('#lastname_record').val(data[0]['last_name']);
            $('#emp_sbu_record').val(data[0]['sbu_id']);
            $('#position_record').val(data[0]['position']);

        }
    });
}


//save assign to records
function submit_assign_record() {

    var asset_id = $('#assign_asset_id_record').val();
    var assign_asset_tag_record = $('#assign_asset_tag_record').val();
    var assign_asset_name_record = $('#assign_asset_name_record').val();
    var assign_type_record = $('#assign_type_record').val();
    var assign_serial_record = $('#assign_serial_record').val();
    var assign_description_record = $('#assign_description_record').val();
    var assign_status_record = $('#assign_status_record').val();
    var assign_remarks_record = $('#assign_remarks_record').val();
    var emp_id_record = $('#emp_id_record').val();
    var emp_date_assigned_record = $('#emp_date_assigned_record').val();
    var firstname_record = $('#firstname_record').val();
    var lastname_record = $('#lastname_record').val();
    var emp_sbu_record = $('#emp_sbu_record').val();
    var position_record = $('#position_record').val();
    var location_record = $('#location_record').val();


    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'save_assign_record', asset_id: asset_id, assign_asset_tag_record: assign_asset_tag_record, assign_asset_name_record: assign_asset_name_record, assign_type_record: assign_type_record, assign_serial_record: assign_serial_record, assign_description_record: assign_description_record, assign_status_record: assign_status_record, assign_remarks_record: assign_remarks_record, emp_id_record: emp_id_record, emp_date_assigned_record: emp_date_assigned_record, firstname_record: firstname_record, lastname_record: lastname_record, emp_sbu_record: emp_sbu_record, position_record: position_record, location_record: location_record },
        dataType: 'text',
        success: function(data){

            setTimeout(function(){
                $('#assignassetthrurecord').modal('hide');
                record_list();
                },500);
        }
    });
}

$('#assignassetthrurecord').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("myForm").reset();
})


function view_record_detail(id) {

    $('#viewrecorddetails').modal();

    $('#viewrecorddetails').attr('record_id', id);


    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'load_recorded_detail', id: id },
        dataType: 'json',
        success: function (data) {

            console.log(data);
            $('#asset_id_record').val(data[0]['asset_id']);
            $('#asset_tag_record').val(data[0]['asset_tag']);
            $('#asset_name_record').val(data[0]['asset_name']);
            $('#type_record').val(data[0]['asset_type_of']);
            $('#serial_record').val(data[0]['asset_serial_no']);
            $('#description_record').val(data[0]['asset_descriptions']);
            $('#status_record').val(data[0]['asset_status']);
            $('#remarks_record').val(data[0]['asset_remarks']);
            $('#emp_id_recorded').val(data[0]['emp_id']);
            $('#emp_date_assigned_recorded').val(data[0]['date_created']);
            $('#firstname_recorded').val(data[0]['emp_fname']);
            $('#lastname_recorded').val(data[0]['emp_lname']);
            $('#emp_sbu_recorded').val(data[0]['emp_sbu']);
            $('#position_recorded').val(data[0]['emp_position']);
            $('#location_recorded').val(data[0]['location']);
        }
    });
}

////save updated asset detail
function submit_updated_details() {

    var id = $('#viewrecorddetails').attr('record_id');

    var asset_remarks = $('#remarks_record').val();
    var location = $('#location_recorded').val();

    if((asset_remarks == "")||(asset_remarks == null)||(location == "")||(location == null)){
        document.getElementById('val_remarks_record').classList.add('was-validated');
        document.getElementById('val_location_recorded').classList.add('was-validated');
        
    }else{
        $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'save_updated_details', id: id, asset_remarks: asset_remarks, location: location },
        dataType: 'text',
        success: function (data) {
            
            setTimeout(function(){
                $('#viewrecorddetails').modal('hide');
                record_list();
                },500);
        }
    });
        
    }   
}
$('#viewrecorddetails').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("update-assign-details").reset();
})


//modal message confirmation return
function return_asset_confirmation(return_id){
    
    $('#returnconfirmationmessage').modal();
    $('#returnconfirmationmessage').attr('confirmation_return', return_id);
    
}


function return_asset_trigger(id) {
    
    var id = $('#returnconfirmationmessage').attr('confirmation_return');
    var collectedby = $('#textfieldforcollectedby').val();
    var asset_remarks = $('#textfieldforassetstatus').val();
    var returnnote = $('#textfieldfornotes').val();
    
    if((collectedby == "")||(collectedby == null) || (asset_remarks == "")||(asset_remarks == null) || (returnnote == "")||(returnnote == null)){
        
        document.getElementById('val_collect').classList.add('was-validated');
        document.getElementById('val_asstatus').classList.add('was-validated');
        document.getElementById('val_notes').classList.add('was-validated');
        
    }else{
        $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'return_asset', id: id, collectedby:collectedby, asset_remarks:asset_remarks, returnnote:returnnote},
        dataType: 'text',
        success: function (data) {           
          console.log(data);
        }
    });
    
    setTimeout(function(){
        $('#returnconfirmationmessage').modal('hide');
        record_list();
    }, 1000);
    }
    
}
$('#returnconfirmationmessage').on('hidden.bs.modal', function (e) {
    console.log('helloworld')
    document.getElementById("form-return").reset();
})

function return_list() {

    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: { function: 'return_lists' },
        dataType: 'text',
        success: function (data) {

            $('#returnlist').empty();
            $('#returnlist').append(data);
        }
    });
}

function assetlogs(assetid){

    $('#assetlogsmodal').modal();
    $('#assetlogsmodal').attr('asset_id', assetid);

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'asset_log_details', assetid:assetid},
        dataType: 'text',
        success: function(data){
            
            $('#assetloglist').empty();
            $('#assetloglist').append(data);
        }
    });
    
}

function acc_get_emp_record(emp){
    
    
        $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'acc_get_employee', emp: emp},
        dataType: 'text',
        success: function(data){
            
            $('#emp_borrowed_details').empty();
            $('#emp_borrowed_details').append(data);
                    
        }
    });
    
}

function generate_acc_form(id){
    
    var id = $('#acc_search_employee').val();

    $.ajax({
        type: 'POST',
        url: 'ajax.php',
        data: { function: 'generate_acc_form', id: id},
        dataType: 'text',
        success: function(data){
            console.log(data);
            console.log(id);
            window.location.href =
              "http://localhost/itams/accountability_form.php?data=" + data;
        }
    })
}



