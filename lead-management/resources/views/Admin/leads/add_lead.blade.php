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
        padding-bottom: 20px;
    }
    label
    {
        display:inline-block;
        width: 200px; 
    }  
    .div_design
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif
                <div class="div_center">
                    <h1 class="font_size">Lead Information</h1>
                   <form action="{{url('/add_lead')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class=" div_design mt-2 col-lg-6">
                                <label>First Name :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="first_name" placeholder="Amit" required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Laast Name :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="last_name" placeholder="Tiwari" required="">
                            </div> 
                        
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Phone :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "number" name="phone" placeholder="9513578426" required="">
                            </div>
                            
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Title :<span class="text-danger ">*</span></label>
                                <input class="text_color" type= "text" name="title" placeholder="Testing" required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Email :<span class="text-danger ">*</span></label>
                                <input class="text_color" type= "email" name="email" placeholder="amit@gmail.com" required="">
                            </div> 
                            
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Company :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="company" placeholder="Company" required="">
                            </div>
                            @php
                            $lead_source = array('Advertising','Social Media','Direct Call','Search');
                            @endphp
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Lead Source :<span class="text-danger">*</span></label>
                                <select class="text_color" name="lead_source" required=""  style="width: 42%; height: 44px; padding: 8px;">
                                    @foreach($lead_source as $single)
                                    <option value="{{ $single }}"> {{ $single }}</option>
                                    @endforeach
                                </select>
                            </div> 
                            @php
                            $lead_status = array('Quanlifications','Need Analysis','Proposal/Price Quote','Negotiation','Closed Won','Closed Lost' );
                            @endphp
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Lead Status :<span class="text-danger ">*</span></label>
                                <select class="text_color" name="lead_status" required=""style="width: 42%; height: 44px; padding: 8px;">
                                    @foreach($lead_status as $single)
                                    <option value="{{ $single }}"> {{ $single }}</option>
                                    @endforeach
                                </select>
                            </div>
                                        <!--=======Address========-->
                            <h1 class="font_size mt-2 col-lg-12">Address Information</h1>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Street :</label>
                                <input class="text_color" type= "text" name="street" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>City :</label>
                                <input class="text_color" type= "text" name="city" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6 ">
                                <label>State :</label>
                                <input class="text_color" type= "text" name="state" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Zip Code :</label>  
                                <input class="text_color" type= "text" name="zip_code" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Country :</label>
                                <input class="text_color" type= "text" name="country" placeholder="" >
                            </div>

                            <h1 class="font_size mt-2 col-lg-12">Description Information</h1>

                            <div class=" div_design mt-2 col-lg-12">
                                <label>Description :</label>
                                <textarea name="description" class="text_color" rows="4" aria-label="With textarea" spellcheck="false"  style="width: 70%;"></textarea>
                            </div>

                           
                        </div>
                            <div class="div_design  ">
                                
                                <input type= "submit"  style="background: #005cbf;" value="Add Lead" class="btn btn-primary" >
                            </div>
                        
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
