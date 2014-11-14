<html>

<head>
    <title>Admin Dashboard</title>

    {{HTML::style(asset("/public/css/bootstrap.min.css"))}}
    {{HTML::style(asset("/public/font-awesome-4.1.0/css/font-awesome.min.css"))}}

    {{HTML::style(asset("/public/css/main.css"))}}
    {{HTML::style(asset("/public/css/media.css"))}}


    {{HTML::script("public/js/jquery.js")}}
    {{HTML::script("public/js/bootstrap.min.js")}}

    {{HTML::script("public/js/comman.js")}}
</head>
<body style="background-color: #5bc0de">
<div class="container">
    <div class="row">
        <div class="login-page">
<div class="row">

<div class="col-lg-12">
    <div class="col-lg-3">
        {{HTML::image(asset("/public/images/find_user.png"), "" , array("class"=>"img-responsive"))}}
    </div>
                <div class="col-lg-9">
                    <h1>Admin Authentication</h1>
                </div>
    <div class="clear"></div>
                   </div>
    </div>
<div class="row">
<div class="col-lg-12">

    <form class="frm">
        <div class="col-lg-12"style="margin-top: 10px;">
            <div class="col-lg-3">User Name </div>
            <div class="col-lg-7">
                <input type="text"placeholder="username" name="username" class="form-control">
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12"style="margin-top: 10px;">
            <div class="col-lg-3">Password </div>
            <div class="col-lg-7">
                <input type="text" placeholder="password" name="password" class="form-control">
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-12"style="margin-top: 10px;">
            <div class="col-lg-3"></div>
            <div class="col-lg-7">
                <input type="button" value="Authenticate" name="submit" id="login" class="btn btn-success">
                <p></p>
            </div>
            <div class="clear"></div>
        </div>

    </form>
</div>
            </div>
            </div>
        </div>
    </div>

</body>
</html>