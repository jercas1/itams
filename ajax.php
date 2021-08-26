<?php 
session_start();

$function = $_POST['function'];
    
    //for login
    if ($function =='login'){
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        login($username, $password);
    }
    // for adding asset
    else if ($function == 'save_new_asset'){
        
        $n_asset_tag = $_POST['asset_tag'];
        $n_date_purchase = date("Y-m-d H:i:s", strtotime($_POST['date_purchase']));
        $n_asset_name = $_POST['asset_name'];
        $n_serial_no = $_POST['serial_no'];
        $n_description = $_POST['description'];
        $n_sbu = $_POST['sbu'];
        $n_price = $_POST['price'];
        $n_installed_os = $_POST['installed_os'];
        $n_ms_office = $_POST['ms_office'];
        $n_remarks = $_POST['remarks'];
        $n_type = $_POST['type'];
        $n_status = $_POST['status'];

        save_new_asset($n_asset_tag, $n_date_purchase, $n_asset_name, $n_serial_no, $n_description, $n_sbu, $n_price, $n_installed_os, $n_ms_office, $n_remarks, $n_type, $n_status);
    }
    //getting assets list
    else if ($function == 'asset_lists'){
        
        asset_lists();
    }
    //load asset detail from modal
    else if ($function == 'load_asset'){
        
        $id = $_POST['id'];
        load_asset($id);
    }
    //update asset details
    else if ($function == 'save_edited_asset'){
        
        $id = $_POST['id'];
        $asset_tag = $_POST['asset_tag'];
        $date_purchase = date("Y-m-d H:i:s", strtotime($_POST['date_purchase']));
        $asset_name = $_POST['asset_name'];
        $serial_no = $_POST['serial_no'];
        $description = $_POST['description'];
        $sbu = $_POST['sbu'];
        $price = $_POST['price'];
        $installed_os = $_POST['installed_os'];
        $ms_office = $_POST['ms_office'];
        $remarks = $_POST['remarks'];
        $type = $_POST['type'];
        $status = $_POST['status'];
        save_edited_asset($id, $asset_tag, $date_purchase, $asset_name, $serial_no, $description, $sbu, $price, $installed_os, $ms_office, $remarks, $type, $status);
    }
    //delete asset
    else if($function == 'delete_asset'){
        
        $id = $_POST['id'];
        delete_asset($id);
    }

    else if($function == 'assignasset_loader'){
        $id = $_POST['id'];
        assignasset_loader($id);
    }

    else if($function == 'get_employee'){
        $item = $_POST['item'];
        get_employee($item);
    }

    else if($function == 'submit_assign'){
        $assign_id = $_POST['id'];
        $assign_asset_tag = $_POST['assign_asset_tag'];
        $assign_asset_name = $_POST['assign_asset_name'];
        $assign_type = $_POST['assign_type'];
        $assign_serial_no = $_POST['assign_serial_no'];
        $assign_description = $_POST['assign_description'];
        $assign_status = $_POST['assign_status'];
        $assign_remarks = $_POST['assign_remarks'];
        $emp_id = $_POST['emp_id'];
        $date_assigned = date("Y-m-d H:i:s", strtotime($_POST['date_assigned']));
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $emp_sbu = $_POST['emp_sbu'];
        $position = $_POST['position'];
        $location = $_POST['location'];
        submit_assign($assign_id, $assign_asset_tag, $assign_asset_name, $assign_type, $assign_serial_no, $assign_description, $assign_status, $assign_remarks, $emp_id, $date_assigned, $firstname, $lastname, $emp_sbu, $position, $location);
    }

    else if($function == 'record_lists'){
        
        record_lists();
    }

    else if($function == 'get_asset'){
        $asset = $_POST['asset'];
        get_asset($asset);
    }
    
    else if($function == 'save_assign_record'){
        $asset_id = $_POST['asset_id'];
        $assign_asset_tag_record = $_POST['assign_asset_tag_record'];
        $assign_asset_name_record = $_POST['assign_asset_name_record'];
        $assign_type_record = $_POST['assign_type_record'];
        $assign_serial_record = $_POST['assign_serial_record'];
        $assign_description_record = $_POST['assign_description_record'];
        $assign_status_record = $_POST['assign_status_record'];
        $assign_remarks_record = $_POST['assign_remarks_record'];
        $emp_id_record = $_POST['emp_id_record'];
        $emp_date_assigned_record = date("Y-m-d H:i:s", strtotime($_POST['emp_date_assigned_record']));
        $firstname_record = $_POST['firstname_record'];
        $lastname_record = $_POST['lastname_record'];
        $emp_sbu_record = $_POST['emp_sbu_record'];
        $position_record = $_POST['position_record'];
        $location_record = $_POST['location_record'];
        save_assign_record($asset_id, $assign_asset_tag_record, $assign_asset_name_record, $assign_type_record, $assign_serial_record, $assign_description_record, $assign_status_record, $assign_remarks_record, $emp_id_record, $emp_date_assigned_record, $firstname_record, $lastname_record, $emp_sbu_record, $position_record, $location_record);
    }

    else if($function == 'load_recorded_detail'){
        $id = $_POST['id'];
        load_recorded_detail($id);
    }

    else if($function == 'save_updated_details'){
        $id = $_POST['id'];
        $update_remarks = $_POST['asset_remarks'];
        $update_location = $_POST['location'];
        save_updated_details($id, $update_remarks, $update_location);
        
    }

    else if($function == 'return_asset'){
        $record_id = $_POST['id'];
        $collectedby = $_POST['collectedby'];
        $asset_remarks = $_POST['asset_remarks'];
        $returnnote = $_POST['returnnote'];
        return_asset($record_id, $collectedby, $asset_remarks, $returnnote);
    }

    else if($function == 'return_lists'){
        return_lists();
    }
    
    else if($function == 'asset_log_details'){
        
        $assetid = $_POST['assetid'];
        asset_log_details($assetid);
    }

    else if($function == 'acc_get_employee'){
        $emp_details = $_POST['emp'];
        acc_get_employee($emp_details);
    }

    else if($function == 'generate_acc_form'){
        $emp_id = $_POST['id'];
        generate_acc_form($emp_id);
    }


    //login
    function login($username, $password){
        
        include 'dbcon.php';


        $query = "SELECT username, password_1 FROM tbl_users where username='$username' AND password_1='$password'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            while($row = mysqli_fetch_assoc($result)){
                $_SESSION['username'] = $row['username'];
                echo "Login Successfully!";
            }
            }else{
                echo "Please check Username/Email and Password if correct.";
            }
                             
        }

    // adding asset
    function save_new_asset($n_asset_tag, $n_date_purchase, $n_asset_name, $n_serial_no, $n_description, $n_sbu, $n_price, $n_installed_os, $n_ms_office, $n_remarks, $n_type, $n_status){
        
        include 'dbcon.php';

        $query = "INSERT INTO tbl_assets (asset_tag, asset_name, descriptions, serial_no, price, sbu, date_purchase, installed_os, ms_office, remarks, type_of, status) VALUES ('$n_asset_tag', '$n_asset_name', '$n_description', '$n_serial_no', '$n_price', '$n_sbu', '$n_date_purchase', '$n_installed_os', '$n_ms_office', '$n_remarks', '$n_type', '$n_status')";
        
        if(mysqli_query($conn, $query)){
            echo 'yes';
        }else{
            echo $conn->error;
        }  
    }

    //getting assets list
    function asset_lists(){
        
        include 'dbcon.php';

        $query = "SELECT * FROM tbl_assets";
        $result = mysqli_query($conn, $query);
        //checking if meron data
//        echo 'Hello World';
        
        while($row = mysqli_fetch_array($result)){
            echo '<tr onclick="assetlogs('.$row[0].')">
                    <td >'.$row[1].'</td>
                    <td>'.$row[2].'</td>
                    <td>'.$row[3].'</td>
                    <td>'.$row[4].'</td>
                    <td>'.number_format($row[5]).'</td>
                    <td>'.$row[6].'</td>
                    <td>'.date("M d, Y", strtotime($row[7])).'</td>
                    <td>'.$row[8].'</td>
                    <td>'.$row[9].'</td>
                    <td>'.$row[10].'</td>
                    <td>'.$row[11].'</td>
                    <td>'.$row[12].'</td>
                    <td>
                        <button class="btn btn-primary btn-sm" type="button" onclick="assignasset_loader('.$row[0].')">Assign</button>
                        <button class="btn btn-warning btn-sm" type="button" onclick="view_asset('.$row[0].')">Update</button>
                    </td>
                </tr>';
        }

    }

    //load asset thru modal
    function load_asset($id){
        include 'dbcon.php';

        $query = "select * from tbl_assets where id = ".$id."";
        $result = mysqli_query($conn, $query);
        while ($rows = mysqli_fetch_array($result))
        {
            $arr[] = array(
                'id'=>$rows[0],
                'asset_tag'=>$rows[1],
                'asset_name'=>$rows[2],
                'descriptions'=>$rows[3],
                'serial_no'=>$rows[4],
                'price'=>$rows[5],
                'sbu'=>$rows[6],
                'date_purchase'=> date("Y-m-d", strtotime($rows[7])),
                'installed_os'=>$rows[8],
                'ms_office'=>$rows[9],
                'remarks'=>$rows[10],
                'type_of'=>$rows[11],
                'status'=>$rows[12]
            );
        }
        echo json_encode($arr);
        exit();
    }

    //update asset details
    function  save_edited_asset($id, $asset_tag, $date_purchase, $asset_name, $serial_no, $description, $sbu, $price, $installed_os, $ms_office, $remarks, $type, $status){
        
        include 'dbcon.php';
    
        $query = "UPDATE tbl_assets SET asset_tag='$asset_tag', date_purchase='$date_purchase', asset_name='$asset_name', descriptions='$description', serial_no='$serial_no', price='$price', sbu='$sbu', installed_os='$installed_os', ms_office='$ms_office', remarks='$remarks', type_of='$type', status='$status' WHERE id='$id'";
        
        if(mysqli_query($conn, $query)){
            echo 'updated success!';
        }else{
            echo $conn->error;
        }   
}

    //delete asset
    function delete_asset($id){
        
        include 'dbcon.php';
        
        $query = "DELETE FROM tbl_assets WHERE id=$id";
        
        if(mysqli_query($conn, $query)){
            echo 'Delete Success!';
        }else{
            echo $conn->error;
        }
    }


    //assigning asset thru assets
    function assignasset_loader($id){
        include 'dbcon.php';
        
        $query = "SELECT * FROM tbl_assets WHERE id = ".$id."";
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($result)){
            
            $arr[] = array(
                'asset_tag'=>$row[1],
                'asset_name'=>$row[2],
                'descriptions'=>$row[3],
                'serial_no'=>$row[4],
                'remarks'=>$row [10],
                'type_of'=>$row[11],
                'status'=>$row[12]
            );
        }
        echo json_encode($arr);
        exit();
    }

    function get_employee($item){
        
        include 'dbcon.php';
        $search_id = mysqli_real_escape_string($conn, $item);
        $query = "SELECT * 
                    FROM tbl_employees 
                    WHERE id LIKE '%".$search_id."%'
                    OR first_name LIKE '%".$search_id."%'
                    OR last_name LIKE '%".$search_id."%'";
        
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_array($result)){
                $arr[] = array(
                    'id'=>$rows[0],
                    'first_name'=>$rows[1],
                    'last_name'=>$rows[2],
                    'sbu_id'=>$rows[8],
                    'position'=>$rows[5]
                    
                );
            }
            echo json_encode($arr);
            exit();
        }else{
            echo 'Data not Found!';
        }
    }

    //save records
    function submit_assign($assign_id, $assign_asset_tag, $assign_asset_name, $assign_type, $assign_serial_no, $assign_description, $assign_status, $assign_remarks, $emp_id, $date_assigned, $firstname, $lastname, $emp_sbu, $position, $location){
        
        include 'dbcon.php';
        
        if($assign_status === 'In use'){
            
            echo "This asset is already assign! Choose another";
            
        }else{
            $query = "INSERT INTO tbl_records (date_created, emp_id, asset_id, location, emp_fname, emp_lname, emp_sbu, emp_position, asset_tag, asset_name, asset_descriptions, asset_serial_no, asset_type_of, asset_status, asset_remarks, record_status) VALUES ('$date_assigned', '$emp_id', '$assign_id', '$location', '$firstname', '$lastname', '$emp_sbu', '$position', '$assign_asset_tag', '$assign_asset_name', '$assign_description', '$assign_serial_no', '$assign_type', '', '$assign_remarks', '0')";
        
        
        if(mysqli_query($conn, $query)){
            echo "Saved!";
            $query = "UPDATE tbl_assets ass 
                        LEFT JOIN tbl_records rec
                        ON ass.id = rec.asset_id
                        SET ass.`status` = 'In use',
                        rec.asset_status = 'In use'
                        WHERE ass.id='$assign_id'";
            if(mysqli_query($conn, $query)){
                
            }else{
                echo $conn->error;
            }

        }else{
            echo $conn->error;
        }
            
        }   
    }


    //display records
    function record_lists(){
        
        include 'dbcon.php';
        
        $query = "SELECT 
                    rec.id,
                    rec.asset_tag,
                    rec.asset_name,
                    rec.asset_type_of,
                    rec.asset_serial_no,
                    rec.asset_descriptions,
                    CONCAT(rec.emp_fname, rec.emp_lname) AS Employee,
                    sbu.sbu_name,
                    rec.emp_position,
                    rec.location,
                    rec.date_created, 
                    rec.asset_status, 
                    rec.asset_remarks,
                    rec.record_status
                    FROM tbl_records rec
                    INNER JOIN tbl_employees emp ON emp.id = rec.emp_id
                    INNER JOIN tbl_sbu sbu ON sbu.id = emp.sbu_id
                    WHERE rec.id=rec.id
                    AND rec.record_status = '0'
                    GROUP BY rec.asset_tag
                    ORDER BY rec.id DESC
                    ";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_array($result)){
            echo '<tr>
            
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
            <td>'.$row[4].'</td>
            <td>'.$row[5].'</td>
            <td>'.$row[6].'</td>
            <td>'.$row[7].'</td>
            <td>'.$row[8].'</td>
            <td>'.$row[9].'</td>
            <td>'.date("M d, Y", strtotime($row[10])).'</td>
            <td>'.$row[11].'</td>
            <td>'.$row[12].'</td>
            <td><button class="btn btn-warning btn-sm" type="button" onclick="view_record_detail('.$row[0].')">Update</button>
            <button class="btn btn-danger btn-sm" type="button" onclick="return_asset_confirmation('.$row[0].')">Return</button></td>
            </tr>';
        }
    }

    function get_asset($asset){
        
        include 'dbcon.php';
        
        
        $search = mysqli_real_escape_string($conn, $asset);
        $query = "SELECT * 
                    FROM tbl_assets 
                    WHERE id LIKE '%".$search."%' 
                    OR asset_tag LIKE '%".$search."%'
                    AND status!='In use'";

        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($rows = mysqli_fetch_array($result)){
                $arr[] = array(
                    'id'=>$rows[0],
                    'asset_tag'=>$rows[1],
                    'asset_name'=>$rows[2],
                    'descriptions'=>$rows[3],
                    'serial_no'=>$rows[4],
                    'status'=>$rows[12],
                    'type_of'=>$rows[11],
                    'remarks'=>$rows[10]                 
                );

            }
            
            echo json_encode($arr);
            exit();
            
        }else{
            echo 'Data not Found!';
        }
    }

    function save_assign_record($asset_id, $assign_asset_tag_record, $assign_asset_name_record, $assign_type_record, $assign_serial_record, $assign_description_record, $assign_status_record, $assign_remarks_record, $emp_id_record, $emp_date_assigned_record, $firstname_record, $lastname_record, $emp_sbu_record, $position_record, $location_record){
        
        include 'dbcon.php';
        
        if($assign_status_record === 'In use'){
            
            echo "You can't assign this Item";
            
        }else{
            $query = "INSERT INTO tbl_records (date_created, emp_id, asset_id, location, emp_fname, emp_lname, emp_sbu, emp_position, asset_tag, asset_name, asset_descriptions, asset_serial_no, asset_type_of, asset_status, asset_remarks, record_status) VALUES ('$emp_date_assigned_record', '$emp_id_record', '$asset_id', '$location_record', '$firstname_record', '$lastname_record','$emp_sbu_record', '$position_record', '$assign_asset_tag_record', '$assign_asset_name_record', '$assign_description_record', '$assign_serial_record', '$assign_type_record', 'In use', '$assign_remarks_record', '0')";
        
        
        if(mysqli_query($conn, $query)){
            echo "Saved!";
            $query = "UPDATE tbl_assets SET status='In use' WHERE id=$asset_id";
            if(mysqli_query($conn, $query)){
                
            }else{
                echo $conn->error;
            }

        }else{
            echo $conn->error;
        }
        }
    }

    
    function load_recorded_detail($id){
        
        include 'dbcon.php';

        $query = "SELECT * FROM tbl_records WHERE id = ".$id."";
        
        $result = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($result)){
      
            $arr[] = array(
                'id'=>$row[0],
                'asset_id'=>$row[3],
                'asset_tag'=>$row[9],
                'asset_name'=>$row[10],
                'asset_type_of'=>$row[12],
                'asset_serial_no'=>$row[13],
                'asset_descriptions'=>$row[11],
                'asset_status'=>$row[14],
                'asset_remarks'=>$row[15],
                'emp_id'=>$row[2],
                'date_created'=>date("Y-m-d", strtotime($row[1])),
                'emp_fname'=>$row[5],
                'emp_lname'=>$row[6],
                'emp_sbu'=>$row[7],
                'emp_position'=>$row[8],
                'location'=>$row[4]

            );
        }
        echo json_encode($arr);
        exit();
}

    function save_updated_details($id, $update_remarks, $update_location){
        
        include 'dbcon.php';
        
        $query = "UPDATE tbl_records SET asset_remarks='$update_remarks', location='$update_location' WHERE id='$id'";
        
        if(mysqli_query($conn, $query)){
            echo 'Update Success!';
        }else{
            echo $conn->error;
        }
    }

    function return_asset($record_id, $collectedby, $asset_remarks, $returnnote){
        
        include 'dbcon.php';
        
        $query = "INSERT INTO tbl_return (id, return_date, record_id, collected_by, asset_remarks, note) VALUES ('', NOW(), '$record_id', '$collectedby', '$asset_remarks', '$returnnote')";
        if(mysqli_query($conn, $query)){
            echo 'Return Success';   
            $query = "UPDATE tbl_records rec
                            LEFT JOIN tbl_assets ass
                            ON rec.asset_id = ass.id
                            SET
                                rec.record_status = 1,
                                rec.asset_status = '$asset_remarks',
                                ass.`status` = '$asset_remarks'
                            WHERE rec.id = $record_id";
            if(mysqli_query($conn, $query)){
                echo 'Record Update';
               
            }
        }else{
            echo $conn->error;
        }
    }
                

    function return_lists(){

            include 'dbcon.php';

            $query = "SELECT ret.id,
                            ret.return_date,
                            ret.collected_by,
                            ret.asset_remarks,
                            ret.note,
                            ret.record_id,
                            rec.date_created,
                            rec.asset_id,
                            rec.asset_tag,
                            rec.asset_name,
                            rec.asset_descriptions,
                            rec.asset_type_of,
                            rec.asset_serial_no,
                            rec.asset_status,
                            rec.asset_remarks,
                            rec.emp_id,
                            CONCAT(rec.emp_fname,' ',rec.emp_lname),
                            rec.emp_sbu,
                            rec.emp_position,
                            rec.location,
                            rec.record_status
                    FROM tbl_return ret
                    INNER JOIN tbl_records rec ON rec.id = ret.record_id
                    WHERE rec.record_status = 1
                    ORDER BY ret.return_date DESC";

            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result)){
                echo '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.date("M d, Y", strtotime($row[1])).'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[5].'</td>
                        <td>'.date("M d, Y", strtotime($row[6])).'</td>
                        <td>'.$row[7].'</td>
                        <td>'.$row[8].'</td>
                        <td>'.$row[9].'</td>
                        <td>'.$row[10].'</td>
                        <td>'.$row[11].'</td>
                        <td>'.$row[12].'</td>
                        <td>'.$row[13].'</td>
                        <td>'.$row[14].'</td>
                        <td>'.$row[15].'</td>
                        <td>'.$row[16].'</td>
                        <td>'.$row[17].'</td>
                        <td>'.$row[18].'</td>
                        <td>'.$row[19].'</td>
                        </tr>';
            }
        }
    
    function asset_log_details($assetid){
        
        include 'dbcon.php';

            $query = "SELECT 
                    a.id AS AssetID,
                    r.id AS RecordID,
                    CONCAT(r.emp_fname,' ',r.emp_lname) AS Employee,
                    r.emp_sbu,
                    r.emp_position,
                    r.location,
                    r.date_created,
                    ret.return_date,
                    ret.asset_remarks
                FROM tbl_assets a
                INNER JOIN tbl_records r 
                ON a.id = r.asset_id
                INNER JOIN tbl_return ret
                ON r.id = ret.record_id
                WHERE a.id = $assetid
                GROUP BY r.id
                ORDER BY r.date_created ASC";

            $result = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result)){
                echo '<tr>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        <td>'.$row[5].'</td>
                        <td>'.date("M d, Y", strtotime($row[6])).'</td>
                        <td>'.date("M d, Y", strtotime($row[7])).'</td>
                        <td>'.$row[8].'</td>
                        </tr>';
            }
    }

    function acc_get_employee($emp_details){
        include 'dbcon.php';
        
        $search = mysqli_real_escape_string($conn, $emp_details);
        $query = "SELECT 
                        emp.id,
                        rec.date_created,
                        rec.emp_fname,
                        rec.emp_lname,
                        sbu.sbu_name,
                        dept.dept_name,
                        rec.emp_position,
                        rec.asset_tag,
                        rec.asset_name,
                        rec.asset_type_of,
                        rec.asset_descriptions,
                        rec.asset_remarks,
                        rec.record_status

                    FROM tbl_employees emp
                    INNER JOIN tbl_records rec
                    ON emp.id = rec.emp_id
                    INNER JOIN tbl_sbu sbu
                    ON sbu.id = emp.sbu_id
                    INNER JOIN tbl_dept dept
                    ON dept.id = emp.dept_id

                    WHERE rec.record_status = 0
                    AND (rec.emp_id LIKE '%".$search."%'
                    OR rec.emp_fname LIKE '%".$search."%'
                    OR rec.emp_lname LIKE '%".$search."%')
                    GROUP BY rec.asset_id"; 
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo '<tr>
                        <th>Employee Name:</th>
                        <td>'.$row[2].' '.$row[3].'</td>
                        </tr>
                        <tr>
                        <th>Asset Tag:</th>
                        <td>'.$row[7].'</td>
                        </tr>
                        <th class="text-primary">Borrowed Item:</th>
                        <td class="text-primary">'.$row[9].'</td>
                        </tr>';
            }
       }else{
            echo 'No data Found';
        }
    }

    function generate_acc_form($emp_id){
        include 'dbcon.php';
        
        
        $search = mysqli_real_escape_string($conn, $emp_id);
        $query = "SELECT 
                        emp.id,
                        rec.date_created,
                        emp.first_name,
                        emp.last_name,
                        sbu.sbu_name,
                        dept.dept_name,
                        rec.emp_position,
                        rec.asset_tag,
                        rec.asset_name,
                        rec.asset_type_of,
                        rec.asset_descriptions,
                        rec.asset_remarks,
                        rec.record_status

                    FROM tbl_employees emp
                    INNER JOIN tbl_records rec
                    ON emp.id = rec.emp_id
                    INNER JOIN tbl_sbu sbu
                    ON sbu.id = emp.sbu_id
                    INNER JOIN tbl_dept dept
                    ON dept.id = emp.dept_id

                    WHERE rec.record_status = 0
                    AND (rec.emp_id LIKE '%".$search."%'
                    OR rec.emp_fname LIKE '%".$search."%'
                    OR rec.emp_lname LIKE '%".$search."%')
                    GROUP BY rec.asset_id"; 
        
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                
                $empid = $row[0];
                $date_issued = date("M d, Y", strtotime($row[1]));
                $borrower_name = $row[2] .' '. $row[3];
                $emp_sbu_name = $row[4];
                $emp_department = $row[5];
                $emp_position = $row[6];
                $asset_tag = $row[7];
                $asset_name = $row[8];
                $asset_type = $row[9];
                $ass_description = $row[10];
                $ass_remarks = $row[11];

                echo json_encode($row);

            }
   
        }

        
}

 

?>


   