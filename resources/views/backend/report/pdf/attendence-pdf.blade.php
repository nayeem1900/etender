<!DOCTYPE html>
<html>
<head>
    <title>Employee Attendence Report</title>



    <style type="text/css">

        table{
            border-collapse:collapse;
        }
        h2 h3{

            margin:0;
            padding:0;
        }
        table{
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid#dee2e6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid#dee2e6;
        }
        .table tbody+tbody{

            border-top:2px solid#dee2e6;
        }
        .table table{
            background-color: #fff;
        }
        .table-bordered th,
        .table-bordered td {
            border:1px solid#dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td{
            border-bottom-width: 2px;
        }
        .text-center{
            text-align: center;
        }

        table tr td{
            padding:5px;
        }



    </style>
</head>
<body>




{{--jj--}}
<div class="container">


    <div class="row">




        <div class="col-md-12 text-center">
            <h5 style="font-weight: bold;padding-top: -25px;">Employee Attendence Report</h5>
        </div>
        <div class="col-md-12">
            <strong>Employee Name:</strong>{{$allData['0']['user']['name']}}, <strong>ID NO:</strong>
            {{$allData['0']['user']['name']}},<strong>Month:</strong>{{$month}}
            <table border="1" width="100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Attend Status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($allData as $value)
                <tr>
                    <td width="50%">{{date('d-m-Y',strtotime($value->date))}}</td>
                    <td width="50%">{{$value->attend_status}}</td>

                </tr>
@endforeach
                <tr>

                    <td colspan="2">
                        <strong>Total Absent:</strong>{{$absents}},<strong>Total Leave:</strong>{{$leaves}}
                    </td>
                </tr>
                </tbody>

            </table><br/>
            <i style="font-size: 10px;float: right;">Print Date:{{date("d m y")}}</i>

        </div>








        <div class="col-md-12">
            <table border="0" width="100%">
                <tbody>
                <tr>

                    <td style="width: 30%"></td>
                    <td style="width: 30%"></td>
                    <td style="width: 40%; text-align: center;">
                        <hr style="border:solid 1px;width: 60%;color: #000;margin-bottom: 0px;">
                        <p style="text-align: center;">Principal/Head Master</p>
                    </td>
                </tr>
                </tbody>

            </table>
        </div>
    </div>



</div>
</body>
</html>