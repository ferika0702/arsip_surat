@extends('dashboard.main')

@section('container')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>
                DATA TENTANG SAYA
                
            </h2>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>DATA DIRI
                        </h2>
                    </div>
                    <div class="body">

                         <div class="row clearfix">
                                <div class="col-md-3">
                              <div class="image">
                                <a style="cursor: pointer;" data-toggle="modal" data-target="#gantiFoto">
                                    <img src="{{url('images/ferika.jpeg')}}" width="100px" height="130px" alt="User" />
                                </a>
                            </div>
                         </div>
                         <div class="col-md-4">
                                <p>NIM : 1931710080</p>
                                <p>NAMA : FERIKA ASMARA PUTRA DIJANTO</p>
                                <p>KELAS : MI 3C</p>
                                <p>ABSEN : 12</p>
                         </div>
                     </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
@endsection

