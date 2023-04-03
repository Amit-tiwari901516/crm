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
                    <h1 class="font_size">Edit Lead Information</h1>
                   <form action="{{ url('/update_lead',$lead->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class=" div_design mt-2 col-lg-6">
                                <label>First Name :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="first_name" placeholder="Amit"  value="{{$lead->first_name}}" required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Laast Name :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="last_name" placeholder="Tiwari"  value="{{$lead->last_name}}" required="">
                            </div> 
                        
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Phone :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "number" name="phone" placeholder="9513578426"  value="{{$lead->phone}}" required="">
                            </div>
                            
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Title :<span class="text-danger ">*</span></label>
                                <input class="text_color" type= "text" name="title" placeholder="Testing"  value="{{$lead->title}}" required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Email :<span class="text-danger ">*</span></label>
                                <input class="text_color" type= "email" name="email" placeholder="amit@gmail.com"  value="{{$lead->email}}" required="">
                            </div> 
                            
                            <div class=" div_design mt-2 col-lg-6">
                                <label>Company :<span class="text-danger">*</span></label>
                                <input class="text_color" type= "text" name="company" placeholder="Company"  value="{{$lead->company}}" required="">
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
                                <input class="text_color" type= "text" name="street"  value="{{$lead->street}}" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>City :</label>
                                <input class="text_color" type= "text" name="city" value="{{$lead->city}}"  placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6 ">
                                <label>State :</label>
                                <input class="text_color" type= "text" name="state" value="{{$lead->state}}"  placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Zip Code :</label>  
                                <input class="text_color" type= "text" name="zip_code"  value="{{$lead->zip_code}}" placeholder="" >
                            </div>

                            <div class=" div_design mt-2 col-lg-6">
                                <label>Country :</label>
                                <input class="text_color" type= "text" name="country" value="{{$lead->country}}"  placeholder="" >
                            </div>

                            <h1 class="font_size mt-2 col-lg-12">Description Information</h1>

                            <div class=" div_design mt-2 col-lg-12">
                                <label>Description :</label>
                                <textarea name="description" class="text_color" rows="4" aria-label="With textarea"  value="{{$lead->description}}" spellcheck="false"  style="width: 70%;"></textarea>
                            </div>

                           
                        </div>
                            <div class="div_design  ">
                                
                                <input type= "submit"  style="background: #005cbf;" value="Update Lead" class="btn btn-primary" >
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
