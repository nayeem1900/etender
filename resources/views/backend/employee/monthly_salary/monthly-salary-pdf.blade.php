<!DOCTYPE html>
<html>
<head>
    <title>Monthly Salary</title>



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
        .text-right{
            text-align: right;
        }
        table tr td{
            padding:5px;
        }
        .table-bordered thead th, .table-bordered td , .table-bordered th{
            border: 1px; solid: black !important;

        }
        .table-bordered thead th{
            background-color: #cacaca;
        }

    </style>
</head>
<body>




{{--jj--}}
<div class="container">
    @php
        $date=date('Y-m',strtotime($totalattendgroupbyid['0']->date));
        if($date!=''){
               $where[] = ['date','like', $date.'%'];
           }


       $totalattend = App\Model\EmployeeAttendence::with (['user'])->where($where)->where('employee_id',$totalattendgroupbyid['0']->employee_id)->get();
           $singleSalary=(float)$totalattendgroupbyid['0']['user']['salary'];
           $salaryperday=(float)$singleSalary/30;
           $absentcount=count($totalattend->where('attend_status','absent'));
            $totalsalaryminus=(float)$absentcount*(float)$salaryperday;
            $totalsalary=(int)$singleSalary-(int)$totalsalaryminus;

    @endphp

    <div class="row">



        <div class="col-md-12 text-center">
            <h5 style="font-weight: bold;padding-top: -25px;">Employee Monthly Salary</h5>
        </div>
        <div class="col-md-12">


            <table border="1" width="100%">
                <tbody>
                <tr>
                    <td style="width: 50%">Employee Name</td>
                    <td>{{$totalattendgroupbyid['0']['user']['name']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Basic Salary</td>
                    <td>{{$totalattendgroupbyid['0']['user']['salary']}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Total Absent for this Month</td>
                    <td>{{$absentcount}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Month</td>
                    <td>{{date('M Y',strtotime($totalattendgroupbyid['0']->date))}}</td>
                </tr>
                <tr>
                    <td style="width: 50%">Salary For This Month</td>
                    <td>{{$totalsalary}}</td>
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

    <hr style="border:dashed 1px;width:96%; color:#DDD;margin-bottom: 50px;">


</div>
</body>
</html>