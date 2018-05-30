<!doctype html>
<html lang="en">
<head>
    <title>Attendance</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="container">
        <div class="page-header">
            <img src="https://1.bp.blogspot.com/-yrypDURFLrk/Wl2Zdy5oGoI/AAAAAAAABQ8/gT7v-2JNd-M6tDZwTXsQ8zoqO5GOj6xkgCLcBGAs/s400/Altmetric_rgb.png" class="img-circle" alt="">
        </div>
    </div>


    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">StudentM</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">List Student</a></li>
                <li><a href="/student">Add Student</a></li>
            </ul>
        </div>
    </nav>
    <div class="row centered-form">
        <div class="col-sm-4"></div>
        <div class="col-sm-4 page-header text-center">
            <h2>Attendance Slots</h2>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Slot</th>
                    <th>Thoi gian</th>
                    <th>Mon hoc</th>
                    <th>Ma lop</th>
                    <th>Ngay</th>
                    <th>Take Attendance</th>

                </tr>
                </thead>
                <tbody id="myTable">
                @foreach($list_attendances as $item)
                    <tr>
                        <td>{{$item->slot_id}}</td>
                        <td>{{$item->time_slot}}</td>
                        <td>{{$item->mon_hoc}}</td>
                        <td>{{$item->ma_lop}}</td>
                        <td>{{$item->ngay}}</td>
                        <td><a href="attendaces/take/{{$item->ma_lop}}">take</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-12 text-center">
            <ul class="pagination pagination-lg pager" id="myPager"></ul>
        </div>
    </div>

</div>
<script>

</script>
</body>
</html>