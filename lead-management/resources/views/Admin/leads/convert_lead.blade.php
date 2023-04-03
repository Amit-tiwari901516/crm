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
        font-size: 30px;
        padding-bottom: 20px;
    }
    .text_color
    {
        color: black;
        padding-bottom: 20px;
        width: 80%;
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
            @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>

                @endif
                <div class="div_center">
                    <form action="{{ url('convert_lead',$lead->id)}}" method="POST">
                    @csrf
                        <h1 class="font_size"><b>Convert Lead </b><span style="font-size:16px;"> ({{$lead->first_name}} {{$lead->last_name}})</span></h1>
                        <br>
                        <h4><b>Create New Account: </b><span style="font-size:14px;"> {{$lead->company}}</span> </h4>
                        <br>
                        <h4><b>Create New Contact: </b><span style="font-size:14px;"> {{$lead->first_name}} {{$lead->last_name}}</span></h4>
                        <br>
                        <h4><b>Create New Deal For This Account</b></h4>
                        <div class="row">
                            <div class=" div_design mt-2 col-lg-4" >
                                <label>Amount</label>
                            </div>
                           
                            <div class=" div_design mt-2 col-lg-8" >
                                <input class="text_color" type= "text" name="amount" placeholder="">
                            </div>

                            <div class=" div_design mt-2 col-lg-4" >
                                <label>Deal Name</label>
                            </div>
                           
                            <div class=" div_design mt-2 col-lg-8" >
                                <input class="text_color" type= "text" name="deal_name" placeholder=""   required="">
                            </div>

                            <div class=" div_design mt-2 col-lg-4" >
                                <label>Closing Date</label>
                            </div>
                           
                            <div class=" div_design mt-2 col-lg-8" >
                                <input class="text_color" type= "date" name="closing_date" placeholder=""   required="">
                            </div>

                            @php
                            $deal_stage = array('Quanlifications','Need Analysis','Proposal/Price Quote','Negotiation','Closed Won','Closed Lost' );
                            @endphp
                            <div class=" div_design mt-2 col-lg-4" >
                                <label>Stage</label>
                            </div>
                           
                            <div class=" div_design mt-2 col-lg-8" >
                                <select class="text_color" name="deal_stage" required=""style="width: 80   %; height: 44px; padding: 8px;">
                                    @foreach($deal_stage as $single)
                                    <option value="{{ $single }}"> {{ $single }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm" name="submit" valur="submit" style="margin-left: 100px; background-color:blue;">Convert</button>
                        <a href="{{ url('manage_leads') }}" class="btn btn-secondary btn-sm" style="margin-left: 00px;">Cancel</a>  
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