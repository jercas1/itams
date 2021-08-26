<!--return table-->
<div class="container-fluid pt-3">
    <div class="mx-3 px-3 rounded" style="background-color: #6A89B7;">   
        <h4 class="py-1 text-white">Records</h4>
    </div>
    <div class="row mx-3 my-2">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <div class="float-start d-grid d-md-block">
                <a href="records.php"><button class="btn btn-danger" type="button">In Used list</button></a>
            </div>
            </div>
          <div class="p-2 flex-grow-1 bd-highlight">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded-pill" id="return-search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
            </div>
        </div>
    </div>
    <div class="row mx-3">
        <div class="col">
            <div class="table-responsive text-nowrap rounded bg-white">
                <table class="table table-default border table-bordered table-hover table-scroll rounded" cellspacing="0" >
                <thead class="shadow-sm sticky-top bg-dark text-white">
                    <tr>
                    <th scope="col" class="fs-6">Return ID</th>
                    <th scope="col" class="fs-6">Date of Return</th>
                    <th scope="col" class="fs-6">Collect by</th>
                    <th scope="col" class="fs-6">Return Asset Remark</th>
                    <th scope="col" class="fs-6">Notes</th>
                    <th scope="col" class="fs-6">Record ID</th>
                    <th scope="col" class="fs-6">Date Issued</th>
                    <th scope="col" class="fs-6">Asset ID </th>
                    <th scope="col" class="fs-6">Asset Tag</th>
                    <th scope="col" class="fs-6">Asset Name</th>
                    <th scope="col" class="fs-6">Description</th>
                    <th scope="col" class="fs-6">Type of Device</th>
                    <th scope="col" class="fs-6">Serial No.</th>
                    <th scope="col" class="fs-6">Asset Status</th>
                    <th scope="col" class="fs-6">Remarks</th>
                    <th scope="col" class="fs-6">Employee ID</th>
                    <th scope="col" class="fs-6">Fullname</th>
                    <th scope="col" class="fs-6">Employee SBU</th>
                    <th scope="col" class="fs-6">Position</th>
                    <th scope="col" class="fs-6">Location</th>
                    </tr>
                </thead>
                <tbody id="returnlist" class="border">
               
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    return_list();
});
    
$(document).ready(function(){
  $("#return-search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#returnlist tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

