<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')

<style type="text/css">
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }
    .font_size
    {
        font-size: 40px;
        text-align: center;
        padding-top: 20px;
    }
    .input_color
    {
        color: black;
    }
    .center
    {
        margin:auto;
        width:50%;
        text-align:center;
        margin-top:40px;
        border:2px solid green;
    }
    .img_size
    {
        width: 100px;
        height: 100px;
    }
    .th_color
    {
        color: black;
        border-bottom: 1px solid green;
    }
    .th_deg
    {
        padding:20px;
    }
  
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
  <div class="main-panel">
            <div class="content-wrapper">
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif

                <h2 class="font_size">All Leads</h2>
            <table class="center" style="width:90%; margin:auto;">
                <tr class="th_color">
                    <th class="th_deg">Lead Name</th>
                    <th class="th_deg">Company</th>
                    <th class="th_deg">Email</th>
                    <th class="th_deg">Phone</th>
                    <th class="th_deg">Lead Source</th>
                    <th class="th_deg">Lead Source</th>
                    <th class="th_deg">Action</th>
                </tr>
                @foreach($lead as $lead)
                
                <tr>
                  
                    <td><a href="{{url('show_lead',$lead->id)}}">{{$lead->first_name}} {{$lead->last_name}}</a></td>
                    <td>{{$lead->company}}</td>
                    <td>{{$lead->email}}</td>
                    <td>{{$lead->phone}}</td>
                    <td>{{$lead->lead_source}}</td>
                    <td>{{$lead->lead_status}}</td>
                    <td>
                        <a class="btn btn-success fa fa-edit" href="{{url('edit_lead',$lead->id)}}"></a>
                        <a class="btn btn-danger fas fa-trash-alt" onclick="return confirm('Sure You Want To Delete This Lead')" href="{{url('/delete_lead',$lead->id)}}"></a>    
                    </td>
                </tr>

                @endforeach
            </table>
            
            </div>
        </div>
  <!-- /.content-wrapper -->
  @include('admin.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.script')
</body>
</html>
