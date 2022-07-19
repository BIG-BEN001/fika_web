@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Management Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/enterprise-solutions" class="h5 text-white">Enterprise Solutions</a>
        </div>
    </div>
</div>




<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f5f5f7; ">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/enterprise.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-3">
                    {{-- <h5 class="fw-bold text-primary text-uppercase">About Us</h5> --}}
                    <h3 class="mb-0">Enterprise</h3>
                </div>
                <p class="mb-4">Fika has well advanced in theory to invest in the provision of enterprise applications. These solutions are business applications that are complex, scalable, distributed, component-based, as well as mission critical. ER Solutions may be deployed on a variety of platforms accross corporate networks, intranets, or Internet. Inclined to Fika's mission, the solutions are data-centric, user friendly, and must meet certain stringent requirements for security, administration, and maintenance.</p>

                <p class="mb-4">Fika has determined help organizations utilise the powerful features of these solutions by providing a model to bring some order out of the complexity. The model of approach taken is to help organize an application's requirements into small set of distinct but interdependent categories, and show how each requirement interacts with another.</p>
                
                <h4>Our brands of Enterprise Solutions comprises of:</h4>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fika CRM</h5>               
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Imaging and Printing Solutions</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Content Management Systems</h5>      
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Point of Sale Solutions</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Loyalty Solutions</h5> 
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Enterprise Document Management Systems</h5>                                          
                    </div>
                    
                </div>
            </div>
           
        
        </div>

        
    </div>
</div>
<!-- About End -->




@endsection