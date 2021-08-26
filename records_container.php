<!--In used table-->
<div class="container-fluid pt-3">
    <div class="mx-3 px-3 rounded" style="background-color: #6A89B7;">   
        <h4 class="py-1 text-white">Records</h4>
    </div>
    <div class="row mx-3 my-2">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                <div class="float-start d-grid d-md-block">
                <button class="btn btn-primary" type="button" onclick="add_assign_record()">Assign</button>
                <a href="accountability.php"><button class="btn btn-warning" type="button">Generate Accountability</button></a>
                <a href="return_record.php"><button class="btn btn-danger" type="button">Return list</button></a>
            </div>
            </div>
          <div class="p-2 flex-grow-1 bd-highlight">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded-pill" id="record_search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
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
                <thead class="shadow-sm sticky-top" style="background-color: #6A89B7;">
                    <tr>
                    <th scope="col" class="fs-6">Asset Tag</th>
                    <th scope="col" class="fs-6">Name/Brand</th>
                    <th scope="col" class="fs-6">Type of Device</th>
                    <th scope="col" class="fs-6">Serial No.</th>
                    <th scope="col" class="fs-6">Descriptions</th>
                    <th scope="col" class="fs-6">Employee name</th>
                    <th scope="col" class="fs-6">SBU</th>
                    <th scope="col" class="fs-6">Position</th>
                    <th scope="col" class="fs-6">Location</th>
                    <th scope="col" class="fs-6">Date Issued</th>
                    <th scope="col" class="fs-6">Status</th>
                    <th scope="col" class="fs-6">Remarks</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="recordlist" class="border">
               
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
$(function(){
    record_list();
});

$(document).ready(function(){
  $("#record_search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#recordlist tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>