<!DOCTYPE html>
<html lang="en">
<head>
@include('admin.css')

<style type="text/css">
    .div_center
    {
        
        padding-bottom: 40px;
    }
    .font_size
    {
        font-size: 40px;
        padding-bottom: 40px;
    }
    .text_color
    {
        color: black;
        width:350px;
        padding-bottom: 20px;
    }
    label
    {
        display:inline-block;
        width: 200px; 
    }  
    .div_design
    {
        text-align: start;
        margin-left: 150px;
        padding-bottom: 15px;
        
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
                <div class="div_center">
                    <h1 class="font_size">Add Account</h1>
                   <form action="{{url('/add_account')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        
                        <div class="row">
                            <div class=" div_design mt-2 col-lg-12">
                                <label>Account Name :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="account_name" placeholder="" required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-12 ">
                                <label>phone :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "number" name="phone" placeholder="" required="">
                            </div> 
                        
                            <div class=" div_design mt-2  col-lg-12">
                                <label>Website :</label>
                                <input class="text_color" type= "text" name="website" placeholder="" required="">
                            </div>
                        </div>    
                            
                        <button type="submit" class="btn btn-primary btn-sm" name="submit" value="submit" style="margin-left: 30px; background-color:blue; width:60px;">Save</button>
                        <a href="" class="btn btn-secondary btn-sm" style="margin-left: 10px;">Cancel</a>
                    </form>
                </div>
            
            </div>
        </div>
  <!-- /.content-wrapper -->
  @include('admin.footer')

  <!-- Control Sidebar --> class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.script')
</body>
</html>
