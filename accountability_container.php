<div class="container-fluid pt-3 mb-5">
    <div class="mx-3 px-3 rounded" style="background-color: #6A89B7;">
        <h4 class="py-1 text-white">Accountability form</h4>
    </div>
</div>

<div class="container-fluid px-5">
    <div class="row">
        <div class="col-lg-4 col-md-5">
            <p>Please fill out the following to generate Accountability Form</p>
            <div class="col mb-3">
                <input type="text" class="form-control" id="acc_search_employee" placeholder="Search Employee ID" required>
            </div>
            <div class="row" style="height: 50vh; overflow: auto;">
                <div class="col">
                    <table class="table">
                        <tbody class="bg-white" id="emp_borrowed_details">
                            
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="row mb-3">
                <label for="p_fname" class="form-label">Prepared &amp; Provided by:</label>
                <div class="col d-flex gx-4">
                    <input type="text" class="form-control" id="fullname" placeholder="Fullname" required>
                </div>
            </div>
            <div class="row">
                <label for="field_issuer" class="form-label">Issuer:</label>
                <div class="col">
                    <input type="text" class="form-control mb-3" id="field_issuer" placeholder="" required>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" name="generate" type="button" onclick="generate_acc_form()">Generate</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-7">
            
        </div>
    </div>

</div>
<script>
$(document).ready(function(){

	$('#acc_search_employee').keyup(function(){
		var search = $(this).val().toLowerCase();
		if((search == '')&&(search == null))
		{ 
            acc_get_emp_record();
            // generate_acc_form();
		}
		else
		{
			
            acc_get_emp_record(search);
            // generate_acc_form(search);
		}
	});
});
    

</script>