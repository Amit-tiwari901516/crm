<!DOCTYPE html>
<html lang="en">
<head>
<base href="/public">
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
        padding-bottom: 20px;
    }
    label
    {
        display:inline-block;
        width: 200px; 
    }  
    .div_design
    {
        text-align: end;
        padding-bottom: 15px; 
    } 
    .div_design2
    {
        text-align: center;
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
                <div class="div_center">
                    <h1 class="font_size">Details</h1>
                   
                    <div class="row">
                            <div class=" div_design mt-2 col-lg-3" >
                                <label>First Name :</label>
                            </div>
                            <div class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->first_name}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3">
                                <label>Laast Name :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->last_name}}</p>
                            </div> 
                            
                        
                            <div class=" div_design mt-2 col-lg-3">
                                <label>Phone :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->phone}}</p>
                            </div>
                            
                            <div class=" div_design mt-2 col-lg-3">
                                <label>Title :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->title}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3">
                                <label>Email :</label>
                            </div> 
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->email}}</p>
                            </div>
                            
                            <div class=" div_design mt-2 col-lg-3">
                                <label>Company :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                               <p>{{$lead->company}}</p>
                            </div>
                          
                            <div class=" div_design mt-2 col-lg-3">
                                <label>Lead Source :</label>
                            </div> 
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->lead_source}}</p>
                            </div>
                           
                            <div class=" div_design mt-2 col-lg-3">
                                <label>Lead Status :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                               <p>{{$lead->lead_status}}</p>
                            </div>
                                        <!--=======Address========-->
                          

                            <div class=" div_design mt-2 col-lg-3">
                                <label>Street :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->street}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3">
                                <label>City :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->city}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3 ">
                                <label>State :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                               <p>{{$lead->state}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3">
                                <label>Zip Code :</label>  
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->zip_code}}</p>
                            </div>

                            <div class=" div_design mt-2 col-lg-3">
                                <label>Country :</label>
                            </div>
                            <div  class=" div_design2 mt-2 col-lg-3">
                                <p>{{$lead->country}}</p>
                            </div>

                           
                    </div>
                   
                    <div class="row">
                            <div class="div_design mt-2 col-lg-3">
                                <label>Description :</label>
                            </div>
                            <div  class="  mt-2 col-lg-9">
                                <p>{{$lead->description}}</p>
                            </div>
                    </div>
                    <div class="div_design  ">
                        <a href="{{url('/convert_lead',$lead->id)}}" class="btn btn-primary">Convert</a>
                        <a class="btn btn-success " href="{{url('edit_lead',$lead->id)}}" style="margin-right: 84px;">Edit</a>      
                    </div>
                        
                   
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
