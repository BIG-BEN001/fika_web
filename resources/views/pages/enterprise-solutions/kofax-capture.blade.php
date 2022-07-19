@extends('layouts.app')

@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Enterprise Solutions</h1>
            <a href="/" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="#" class="h5 text-white">Kofax Capture</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #fcfcfc;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Kofax Capture</h5>
               
                    <h1 class="mb-0">Transform Document Intensive Workflows</h1>
                </div>
                <p class="mb-4">Kofax Capture™ delivers best-in-class, pre-built intelligent document processing capabilities, making AI accessible to your organization to fully automate content-centric workflows. It ingests, classifies and extracts data and turns it into actionable insights for further processing.</p>

            </div>
            <div class="col-lg-6  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/workplace.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" >
    <div class="container py-5">
   
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Automate, accelerate and scale</h4>
                                <p>Speed workflows with market-leading document processing. Paired with embedded AI in Kofax Transformation™, you get powerful cognitive services that act upon data across any channel or device.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Gain control of your content</h4>
                                <p>Through tight integration with virtually all capture channels and your organization’s system of record, you can control the critical content that drives business decisions.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                           
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <h4 class="mb-3">Optimize your operations with insights</h4>
                                <p>Integrated analytics let you monitor the efficiency of operations so when errors and bottlenecks occur, you can reduce or eliminate friction, increase productivity and serve customers better.</p>
                               
                            </div>
                        </div>
                    </div>
        
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background: #f8f6f6;">
    <div class="container-fluid py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 800px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5> --}}
            <h2 class="mb-0">Why Customers Choose Kofax Capture</h2>
        </div>
        <div class="row g-5">
            <!-- Blog list Start -->
            <div class="col-lg-12">
                <div class="row g-5">
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/app-dev1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Secure documents, data and more</h4>
                                <p>Get production-level scanning and indexing from structured and unstructured documents that contain information in many forms, including machine-printed text, barcodes and checkboxes.</p>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/sales1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                               
                                </div>
                                <h4 class="mb-3">Content capture anywhere, any time</h4>
                                <p>Extend capture capabilities with an integrated link between intelligent devices like MFDs, network scanners and mobile.</p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow slideInUp" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <img class="img-fluid" src="img/webapplication1.jpg" alt="" style="width: 100%; height: 300px">
                                {{-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a> --}}
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    
                                </div>
                                <h4 class="mb-3">Realize a swift return on investment</h4>
                                <p>Automate content capture and distribution by placing content at your workers’ fingertips, creating efficiencies that result in a higher and faster ROI.</p>
                               
                            </div>
                        </div>
                    </div>
        
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            {{-- <h5 class="fw-bold text-primary text-uppercase">Printing & Imaging</h5> --}}
            <h2 class="mb-0">How Kofax Capture Can Help</h2>
            {{-- <p>Modernize slow, manual, error-prone or expensive processes related to processing documents and electronic data.</p> --}}
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Integrates With Any System</h4>
                    <p class="m-0">Includes more than 140 connectors to various line-of-business applications, ECM, ERP, BPM and workflow solutions.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                  
                    <h4 class="mb-3">Customizable Without Scripting</h4>
                    <p class="m-0">Tailor the solution with modules like automated document separation, postal mail scanning and forms extraction</p>
                   
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Flexible API</h4>
                    <p class="m-0">A flexible scripting capability allows you to customize the solution including export destinations and rules for data release.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Process Ready</h4>
                    <p class="m-0">Kofax VRS® technology intelligently cleans, rotates, crops and straightens documents before data is extracted.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Automatic Learning</h4>
                    <p class="m-0">With Kofax Transformation®, the software can be trained to understand unique document types for classification, separation and extraction.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    
                    <h4 class="mb-3">Enterprise Edition</h4>
                    <p class="m-0">Extend capture throughout the enterprise with Terminal Services and Citrix® server technology to leverage enterprise-class database management systems.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                   
                    <h4 class="mb-3">Device Integration</h4>
                    <p class="m-0">Supports over 300 models of multifunction printers, including top MFD vendors like Canon, HP, Lexmark, Konica Minolta and Xerox.</p>
                    
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us for Inquiry</h3>
                    {{-- <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p> --}}
                    <h2 class="text-white mb-0">+254 20 2495918</h2>
                </div>
            </div>
        </div>
    </div>
</div>

    


@endsection