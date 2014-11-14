{{HTML::style(asset("/public/css/jquery.dataTables.css"))}}

{{HTML::script(asset("/public/js/bootstrap.min.js"))}}
{{HTML::script("public/js/comman.js")}}
{{HTML::script(asset("/public/js/jquery.dataTables.min.js"))}}



<?php if($found){ ?>


    <div class="row">
        <h1>Show Employee Record</h1>
    </div>
    <br>

<table id="dataTableDept" class="display" cellspacing="0" width="100%"style="margin-top: 30px;">

        <thead>
        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone no</th>
            <th>Address</th>
            <th>City</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        </thead>

        <tbody>

        <?php
        foreach($employees as $employee){
        ?>

            <tr>
                <td>{{$employee->id}}</td>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->phone}}</td>
                <td>{{$employee->address}}</td>
                <td>{{$employee->city}}</td>
                <td>
                    <a href="#" class="edit-employee" rel="{{$employee->id}}" title="Edit">Edit</a>&nbsp;&nbsp;
                    <i class="fa fa-edit"></i>
                </td>
                <td>
                    <a href="#" class="delete-employee" rel="{{$employee->id}}" title="Delete">Delete</a>&nbsp;&nbsp;
                    <i class="fa fa-university"></i>
                </td>

            </tr>


        <?php
        }
        ?>

        </tbody>
</table>

<?php
} else{ echo "No tenders to show..."; }
?>
