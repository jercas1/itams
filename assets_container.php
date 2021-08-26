<div class="container-fluid pt-3">
    <div class="mx-3 px-3 rounded" style="background-color: #6A89B7;">
        <h4 class="py-1 text-white">Assets</h4>
    </div>
    <div class="row mx-3 my-2">
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-grow-1 bd-highlight">
                
            </div>
          <div class="p-2 flex-grow-1 bd-highlight">
            <div class="input-group rounded">
                <input type="search" class="form-control rounded-pill" name="search_text" id="search_asset" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i>
                </span>
            </div>
              
            </div>
          <div class="p-2 bd-highlight">
            <div class="float-end d-grid d-md-block">
                <button class="btn btn-primary" type="button" onclick="addasset()">Add Asset</button>
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
<!--                    <th scope="col" class="text-start">#</th>-->
                    <th scope="col" class="fs-6">Asset Tag</th>
                    <th scope="col" class="fs-6">Item Name</th>
                    <th scope="col" class="fs-6">Description</th>
                    <th scope="col" class="fs-6">Serial No.</th>
                    <th scope="col" class="fs-6">Price</th>
                    <th scope="col" class="fs-6">SBU Dept</th>
                    <th scope="col" class="fs-6">Date Puchase</th>
                    <th scope="col" class="fs-6">OS Installed</th>
                    <th scope="col" class="fs-6">MS Office</th>
                    <th scope="col" class="fs-6">Remarks</th>
                    <th scope="col" class="fs-6">Type</th>
                    <th scope="col" class="fs-6">Status</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="assetlist" class="border">
               
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>

$(function(){
    asset_list();
    
});
$(document).ready(function(){
  $("#search_asset").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#assetlist tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    
</script>
