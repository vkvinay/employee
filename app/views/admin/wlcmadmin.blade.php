<html>

<head>
    <title>Admin Dashboard</title>

    {{HTML::style(asset("/public/css/bootstrap.min.css"))}}
    {{HTML::style(asset("/public/font-awesome-4.1.0/css/font-awesome.min.css"))}}
    {{HTML::style(asset("/public/css/main.css"))}}
    {{HTML::style(asset("/public/css/media.css"))}}
    {{HTML::style(asset("/public/css/jquery.dataTables.css"))}}




    {{HTML::script("public/js/jquery.js")}}
    {{HTML::script("public/js/bootstrap.min.js")}}
    {{HTML::script(asset("/public/js/jquery.dataTables.min.js"))}}
    {{HTML::script("public/js/comman.js")}}
    <script type="text/javascript">
        $(function(){
            $("#dataTableDept").DataTable();
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row"style="background-color:#101010;">
        <div class="col-lg-12">
            <div class="col-lg-9"></div>
            <div class="col-lg-3 top-link">

                    <a href="#">Home</a>
                    <a href="#">Profile</a>
<!--                    <a href="#" class="logout">LogOut</a>-->
                {{HTML::link("/index", "Logout")}}

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-2 left num">
            <div class="row left-btn">
                <a href="#" class="dash">Dashboard</a>
            </div>
            <div class="row left-btn">
                <a href="#"class="add">Add Employee</a>
            </div>
            <div class="row left-btn">
                <a href="#"class="show">Show Employee</a>
            </div>
        </div>
        <div class="col-lg-10 right">
            <div class="form-view">
                <h1>Welcome Admin</h1>
            </div>
        </div>
    </div>
</div>

</body>
</html>