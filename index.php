<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phoneix</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        /* Style for the logo image */
.logo {
    height: auto;
    max-height: 80px; /* Adjust this value as needed */
    width: auto;
    max-width: 100%;
}

/* Adjustments for larger screens */
@media (min-width: 992px) {
    .navbar-brand {
        padding: 0.5rem 1rem;
    }

    .logo {
        max-height: 100px; /* Increase the height for larger screens if needed */
    }
}
        .short-text {
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 120px; /* Adjust based on line height and number of lines */
}

.short-text.expanded {
    max-height: none;
    -webkit-line-clamp: unset;
}
.short-text {
    height: 150px; /* Adjust as needed */
    overflow: hidden;
    transition: height 0.3s ease;
}

.short-text.expanded {
    height: auto;
}
@media (max-width: 2560px) {
    #map {
        width: 100%; /* Ensure the map takes full width on small screens */
        height: 100%; /* Maintain aspect ratio */
    }
    #col3{
        margin-top: 220px;
    }
  
   
}
@media (max-width: 1440px) {
    #map {
        width: 100%; /* Ensure the map takes full width on small screens */
        height: 100%; /* Maintain aspect ratio */
    }
    #col3{
        margin-top: 200px;
    }
  
   
}
@media (max-width: 1024px) {
    #map {
        width: 100%; /* Ensure the map takes full width on small screens */
        height: 100%; /* Maintain aspect ratio */
    }
    #col3{
        margin-top: 150px;
    }
  
   
}
@media (max-width: 768px) {
    #map {
        width: 100%; /* Ensure the map takes full width on small screens */
        height: auto; /* Maintain aspect ratio */
    }
    #col3{
        margin-top:0px;
     
    }
}
@media (max-width: 500px) {
    #map {
        width: 100%; /* Ensure the map takes full width on small screens */
        height: auto; /* Maintain aspect ratio */
    }
}
@media(max-width: 500px) {
    .copyright .col-md-6 {
        text-align: center; /* Center text in the footer for mobile devices */
    }

    .copyright .col-md-6:nth-child(2) {
        margin-top: 1rem; /* Space between rows on mobile */
    }

    .footer-link {
        display: block; /* Make each link block level */
        width: 100%; /* Full width for each link */
        margin-bottom: 0.5rem; /* Space between links */
    }
}
.contactus{
    margin-top: 127.5px;
}
@media(max-width:500px){
    .contactus{
    margin-top:0px;
}
}

@media(max-width:500px){
    .contactuscolumn{
    margin-top: 45px;
}
}
.card.contactus {
    border: none; /* Remove any default card borders */
    border-radius: 10px; /* Apply border radius to the card itself */
    overflow: hidden; /* Ensure the image is clipped to the border radius */
    box-shadow: none; /* Remove any box-shadow if you don’t want it */
}

.card-img {
    border-radius: 10px; /* Apply border radius to the image if needed */
    width: 100%;
    height: auto; /* Maintain aspect ratio */
    display: block; /* Ensure the image is displayed correctly */
}
/* General Styling for the About Us Section */
#about-us {
    background-color: #f8f9fa; /* Light background for contrast */
    padding: 2rem 0; /* Adjust vertical padding */
}

.container {
    max-width: 1200px; /* Adjust the maximum width */
    padding-left: 15px; /* Add padding on left */
    padding-right: 15px; /* Add padding on right */
}

/* Ensure headings are bold and styled properly */
h1, h2 {
    font-weight: bold; /* Ensure headings are bold */
}

h1.text-primary {
    color: #252a8f; /* Primary color for heading */
}

/* Justified text for paragraphs */
.about-text p {
    text-align: justify; /* Justify text alignment */
    text-justify: inter-word; /* Ensure even spacing between words */
}

/* Styling for the Cards */
.card {
    border: none; /* Remove default card border */
    border-radius: 10px; /* Apply rounded corners */
    overflow: hidden; /* Clip the content to fit the border radius */
    box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Add subtle shadow for depth */
    text-align: center; /* Center text within the card */
}

/* Center the image within the card */
.card img {
    display: block;
    margin: 0 auto; /* Center horizontally */
    max-width: 100%; /* Ensure the image does not overflow its container */
    height: auto; /* Maintain aspect ratio */
}

/* Ensure consistent spacing for card text */
.card h5 {
    margin-top: 1rem; /* Add margin to heading */
}

.card-text {
    font-size: 1rem; /* Adjust font size if needed */
    color: #333; /* Ensure text color is readable */
}

/* Responsive Design Adjustments */
@media (max-width: 768px) {
    .container {
        padding-left: 15px;
        padding-right: 15px;
    }
}
.logophoneix {
        width: 110px; 
        height: 80px;
        margin-bottom: 5px;
    }
    @media (max-width: 1024px) {
        .logophoneix {
            width: 110px;
            height: 80px;
            margin-top: -7px;
            margin-right: 0px;
        }
        
        #logoname {
            margin-top: 10px; /* Adjust for better spacing */
            margin-left: 0; /* Center the text */
            text-align: center;
          
        }
    }

    @media (max-width: 768px) {
        .logophoneix {
            width: 110px;
            height: 80px;
            margin-top: -10px;
            margin-right: 220px;
        }
        
        #logoname {
            margin-top: 10px; /* Adjust for better spacing */
            margin-left: 0; /* Center the text */
            text-align: center;
            font-size: 0px;
        }
    }

    @media (max-width: 500px) {
        .logophoneix {
            width: 100px; 
            height: 70px;
            margin-top: -7px;
            margin-left: 90px;
        }
        
        #logoname {
            font-size: 16px; /* Adjust font size for smaller screens */
        }
        .navbar-brand{
            width: 70%;
        }
    }
    .navbar-toggler {
        border: none;
    }
    @media (max-width: 768px) {
        .navbar-nav {
            text-align: center;
            width: 100%; /* Ensure the links take up full width */
        }

        .nav-item {
            width: 100%; /* Ensure each nav-item takes up full width */
        }
    }

    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-white sticky-top p-0">
    <a href="index.html" class="navbar-brand bg-white d-flex align-items-center px-4 px-lg-5 flex-column flex-lg-row">
        <img src="img/phoneix logo.png" alt="Logo" class="logophoneix">
        <h4 class="d-none d-md-block" id="logoname">Phoneix Cargo Services Pvt Ltd</h4>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="#" class="nav-item nav-link active">Home</a>
            <a href="#about-us" class="nav-item nav-link">About</a>
            <a href="#services" class="nav-item nav-link">Services</a>
            <a href="#contact" class="nav-item nav-link">Contact Us</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->





    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative mb-2">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Phoneix Cargo Services PVT LTD</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Delivering Excellence Across Borders: Your Trusted Partner in Global Logistics <br>
                                    Navigating Your Success: Precision Logistics for a Dynamic World</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown"></h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Phoneix Cargo Services PVT LTD</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Delivering Excellence Across Borders: Your Trusted Partner in Global Logistics <br>
                                    Navigating Your Success: Precision Logistics for a Dynamic World</p>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


<!-- About Start -->
<div id="about-us" class="container-fluid overflow-hidden py-2 px-lg-0">
    <div class="container py-2 px-lg-0">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 text-center">
                <div class="about-text wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-3" style="color:#252a8f">About Us</h1>
                    <h2 class="mb-5">Welcome to Phoenix Cargo Services PVT LTD</h2>
                    <p class="mb-5" style="text-align: justify;">
                        Phoenix Cargo was incorporated in 2012 and has since enjoyed balanced growth, creating a stable platform to provide professional services in all aspects of domestic and international freight forwarding and logistics.
                        <br><br>
                        Our independence is a key strength, allowing us complete control over our operations, suppliers, and business partners. This enables us to deliver a highly personalized service to our clients.
                        <br><br>
                        Phoenix values long-term customer relationships in India and is committed to upholding its values, vision, and mission to both customers and team members.
                    </p>
                    <!-- Global Coverage and On Time Delivery -->
                    <div class="row g-4 mb-5 text-center">
                        <div class="col-sm-6 d-flex align-items-stretch wow fadeIn" data-wow-delay="0.5s">
                            <div class="card h-100 w-100 p-3 text-center border-0 rounded-lg shadow-sm">
                                <img width="90" height="90" src="https://img.icons8.com/pulsar-color/48/globe.png" alt="globe" class="mb-3"/>
                                <h5>Global Coverage</h5>
                                <p class="m-0" style="text-align: justify;">Phoenix Cargo Services Pvt. Ltd. offers extensive global coverage, ensuring that your cargo reaches destinations around the world efficiently and reliably. Our network of trusted partners and strategic locations enables us to manage shipments with precision, no matter where they are headed.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-stretch wow fadeIn" data-wow-delay="0.7s">
                            <div class="card h-100 w-100 p-3 text-center border-0 rounded-lg shadow-sm">
                                <img width="90" height="90" src="https://img.icons8.com/clouds/100/truck.png" alt="truck" class="mb-3"/>
                                <h5>On Time Delivery</h5>
                                <p class="m-0" style="text-align: justify;">We pride ourselves on our commitment to on-time delivery. With our meticulous planning and streamlined processes, we ensure that your shipments are handled promptly and reach their destinations as scheduled, providing you with peace of mind and dependable service.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Our Mission and Our Vision -->
                    <div class="row g-4 text-center">
                        <div class="col-sm-6 d-flex align-items-stretch">
                            <div class="card h-100 w-100 p-3 text-center border-0 rounded-lg shadow-sm">
                                <h6 class="text-uppercase mb-3">
                                    <img width="60" height="60" src="https://img.icons8.com/bubbles/50/telescope.png" alt="telescope"/>
                                </h6>
                                <h5>Our Vision</h5>
                                <p class="card-text" style="text-align: justify;">To be a customer-friendly company, where customers have the desire to trust, support, and confidently grow together.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-stretch">
                            <div class="card h-100 w-100 p-3 text-center border-0 rounded-lg shadow-sm">
                                <h6 class="text-uppercase mb-3">
                                    <img width="60" height="60" src="https://img.icons8.com/bubbles/50/define-location.png" alt="define-location"/>
                                </h6>
                                <h5>Our Mission</h5>
                                <p class="card-text" style="text-align: center;">Seed the People; Pour the Values; Grow the Success.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->




   <!-- Service Start -->
<div id="services" class="container-xxl py-3">
    <div class="container py-3">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-5" style="color:#252a8f">Explore Our Services</h1>
        </div>
        <div class="row g-4">
            <!-- Service Item 1 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/lift.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">Warehousing and Storage Distribution</h3>
                    <h4 class="mb-3" style="text-align: center;">Optimizing Your Supply Chain</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd provides efficient warehousing and storage distribution solutions that are key to optimizing your supply chain and ensuring seamless operations. By implementing advanced warehousing solutions and effective storage strategies, Phoenix Cargo Services Pvt Ltd helps businesses enhance inventory management, reduce operational costs, and improve order fulfillment accuracy. This involves the strategic placement of inventory, leveraging technology for real-time tracking, and employing best practices for space utilization. Proper warehousing and distribution not only streamline the flow of goods but also contribute to faster response times and increased customer satisfaction.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            <!-- Service Item 2 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/inplant.png" alt="" style="height:350px;width:auto;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">In-Plant Factory Operation</h3>
                    <h4 class="mb-3" style="text-align: center;">Streamlining Production Efficiency</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd specializes in optimizing in-plant factory operations to maximize the efficiency and productivity of manufacturing processes. By focusing on enhancing in-plant workflows, Phoenix Cargo Services Pvt Ltd helps businesses improve operational efficiency, reduce waste, and achieve better production quality. This includes integrating advanced technologies, refining process management, and ensuring seamless coordination between different production stages. Effective in-plant operations lead to faster turnaround times, lower production costs, and better product consistency, contributing to a more competitive manufacturing environment.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            <!-- Service Item 3 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/cold storage.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3"style="text-align: center;">Cold Storage Warehouse</h3>
                    <h4 class="mb-3"style="text-align: center;">Preserving Quality and Extending Shelf Life</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd operates state-of-the-art cold storage warehouses crucial for businesses dealing with perishable goods. These facilities maintain controlled environments with low temperatures to preserve quality and extend shelf life. Key aspects include precise temperature control, humidity management, and efficient inventory systems to ensure optimal storage conditions. Phoenix Cargo Services Pvt Ltd's robust cold storage solutions prevent spoilage, reduce waste, and ensure that products remain safe and fresh throughout the supply chain, leading to enhanced product integrity, customer satisfaction, and regulatory compliance.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>
            <!-- Service Item 4 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/open yard storage.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">Open Storage Yard</h3>
                    <h4 class="mb-3" style="text-align: center;">Maximizing Space and Accessibility</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd offers open storage yard solutions for managing large volumes of goods or equipment that do not require climate control. Ideal for storing construction materials, vehicles, and bulk items, open storage yards provide ample space for easy access and efficient organization. Key considerations include proper layout planning, security measures, and maintenance practices to protect stored items from environmental elements. By utilizing Phoenix Cargo Services Pvt Ltd's open storage yards effectively, businesses can optimize space usage, streamline inventory management, and improve operational efficiency while keeping costs manageable.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>    
            <!-- Service Item 5 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/ftwz.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">Free Trade Warehouse (FTWZ)</h3>
                    <h4 class="mb-3" style="text-align: center;">Facilitating International Trade and Efficiency</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd operates Free Trade Warehouse Zones (FTWZ), designed to facilitate international trade by offering tax and duty exemptions on goods stored within the zone. These warehouses provide advantages such as deferred customs duties, streamlined customs procedures, and enhanced logistical efficiencies. FTWZs are particularly beneficial for businesses looking to manage their global supply chains more effectively, enabling cost savings on import/export duties and taxes while offering secure and flexible storage solutions. Phoenix Cargo Services Pvt Ltd's FTWZs enhance competitive edge, optimize inventory management, and expedite distribution processes.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>  
            <!-- Service Item 6 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/bonded warehouse.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">Bonded Warehouse</h3>
                    <h4 class="mb-3" style="text-align: center;">Deferring Duties and Streamlining Imports</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd manages bonded warehouses where goods can be stored without immediate payment of customs duties and taxes. This arrangement allows businesses to defer costs until goods are released for domestic use or re-exported. Bonded warehouses help companies manage cash flow and optimize import-export operations. They offer benefits such as storing goods without incurring duties, handling customs formalities, and improving inventory management. Phoenix Cargo Services Pvt Ltd's bonded warehouses enhance logistical efficiency, reduce financial burden, and provide better control over inventory and supply chain processes.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>  
            <!-- Service Item 7 -->
            <div class="col-md-6 col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="margin-left:auto;margin-right:auto;">
                <div class="service-item p-4">
                    <div class="overflow-hidden mb-4">
                        <img class="img-fluid" src="img/aftermarket.png" alt="" style="height:350px;width:100%;">
                    </div>
                    <h3 class="mb-3" style="text-align: center;">After Market Warehouse</h3>
                    <h4 class="mb-3" style="text-align: center;">Streamlining the Storage and Distribution of Replacement Parts</h4>
                    <p class="short-text" style="text-align: justify;">
                    Phoenix Cargo Services Pvt Ltd operates aftermarket warehouses specializing in the storage and distribution of spare parts and accessories for previously purchased products. These warehouses are essential for industries such as automotive, electronics, and machinery, where ongoing support and maintenance are necessary. Phoenix Cargo Services Pvt Ltd's aftermarket warehouses ensure that components are readily available for repairs, upgrades, or replacements. By centralizing inventory, managing stock levels, and optimizing logistics, these warehouses help businesses maintain smooth operations, reduce downtime, and provide better service to customers, supporting product longevity and overall operational efficiency.
                    </p>
                    <a class="btn-slide mt-2 read-more" href="javascript:void(0);"><i class="fa fa-arrow-right"></i><span>Read More</span></a>
                </div>
            </div>            
        </div>
    </div>
</div>
<!-- Service End -->


     <!-- Our customer Start -->
     <div class="container-xxl py-2">
        <div class="container py-2">
            <div class="row g-3">
                <div class="col-lg-12  wow fadeInUp" data-wow-delay="0.1s">
                <h4 class=" text-center  mb-3" style="color:#252a8f">Our Customers</h4>
                
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <img src="img/cust1.PNG" alt="Logo" style="width:100%;height:60%;">
                    </div>
                    <div class="col-lg-3">
                        <img src="img/cust2.PNG" alt="Logo" style="width:100%;height:60%;">
                    </div>
                    <div class="col-lg-3">
                        <img src="img/cust3.PNG" alt="Logo" style="width:100%;height:60%;">
                    </div>
                    <div class="col-lg-3">
                        <img src="img/cust4.PNG" alt="Logo" style="width:100%;height:60%;">
                    </div>
                </div>
                   
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our customer End -->

   <!-- value added seervices -->
   <div class="container-xxl py-2">
    <div class="container py-2">
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <h4 class="text-center mb-3" style="color:#252a8f;">Value Added Services</h4>
                <h6 class="mb-3" style="text-align: center;">
                    Govt Licensed Cargo Surveyors vide Group company (MS LOGISTICS)
                </h6>
                <h6 class="mb-3" style="text-align: center;">
                    Owned & Leased Transport Fleets for Cargo LCL & FCL trucking
                </h6>
            </div>
        </div>
    </div>
</div>

    </div>
</div>
   <!-- value added seervices -->


  <!-- Contact Start -->


<div id="contact" class="container-fluid overflow-hidden py-3 px-lg-0">
    <div class="container contact-page py-3 px-lg-0">
        <div class="row g-5 mx-lg-0">
            <div class="col-md-6 contact-form wow fadeIn" data-wow-delay="0.1s">
                <h1 style="color:#252a8f">Get In Touch</h1>
                <h1 class="mb-4">Contact Us</h1>
                <div class="p-4 rounded shadow" style="background-color: #a1dde2;border-radius: 7px;"">
                <form id="form" action="mail.php" method="post">
    <div class="row g-3">
        <div class="col-12">
            <label for="name" class="form-label">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="col-12">
            <label for="phone" class="form-label">Phone:</label>
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" maxlength="10" required>
        </div>
        <div class="col-12">
            <label for="message" class="form-label">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <div class="col-12">
            <input class="btn btn-primary w-100 py-3" type="submit" id="submit" name="submit" value="Send Message">
            <?php if (!empty($message)) { ?>
                <div class="success alert alert-success">
                    <strong><?php echo $message; ?></strong>
                </div>
            <?php } ?>
        </div>
    </div>
</form>

                </div>
            </div>
            <div class="col-md-6 contactuscolumn">
                <div class="card contactus">
                    <img src="img/contactus1.png" alt="" class="card-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- our footprints start -->
<div class="container" >
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-3" style="color:#252a8f">Our Footprints</h1>
        <div class="row">
        <div class="col-lg-9" id="col9">
          <img id="map" src="img/footprint.png" alt="" >
        </div>
        <div class="col-lg-3" id="col3">
            <ul>
                <h5>INDIA</h5>
               
                <li>Tirupur(O)</li>
                <li>Tuticorin(O)</li>
                <li>Chennai(O)</li>
                <li>Cochin(A)</li>
                <li>Mumbai(A)</li>
                <li>Delhi(A)</li>
            </ul>
            <ul>
                <h5>UAE</h5>
             
                <li>Dubai(A)</li>
                <li>Bahrain(A)</li>
            </ul>
        </div>
      
        
        
        </div>
    </div>
</div>
 <!-- our footprints end -->

 <!-- Quality Policy Start -->
<div class="container">
    <div class="wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-3" style="color:#252a8f">Quality Policy</h1>
        <div class="row">
            <div class="col-lg-12">
                <p style="text-align: justify;">
                    We at Phoenix Cargo Services (P) Limited are committed towards achieving higher levels of CUSTOMER SATISFACTION.
                </p>
                <p style="text-align: justify;">
                    To ensure the customer commitments are met, we start our quality communication right from the Booking till Cargo delivery.
                </p>
            </div>
        </div>
    </div>
</div>
<!-- Quality Policy End -->


<!-- Footer Start -->
<div class="container-fluid text-light pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: 6rem; background-color:#252a8f;">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Our Features</h4>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right  me-2"></i>Expert Freight Forwarding</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right  me-2"></i>Personalized Service</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right  me-2"></i>Long-Term Relationships</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right  me-2"></i>Precision Logistics</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">About</h4>
                <p class="mb-2" style="text-align: justify;">Phoenix Cargo Services Pvt. Ltd.</p>
                <p class="mb-2" style="text-align: justify;">We pride ourselves on our strong, long-term relationships with customers across India. Our commitment to our values, vision, and mission is reflected in our dedicated team and the trust we've built with our clients.</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Services</h4>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right me-2"></i>Custom Brokerage</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right me-2"></i>Freight Forwarding</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right me-2"></i>Transportation</p>
                <p class="mb-2" style="text-align: justify;"><i class="fa fa-arrow-right me-2"></i>Warehousing</p>
            </div>

            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Contact Us</h4>
                <p class="mb-2" ><i class="fa fa-map-marker-alt me-3"></i>OLD DOOR NO:96,<br>Armenian Street, Mannadi,<br>Chennai - 600 001.</p>
                <p class="mb-2" ><i class="fa fa-phone-alt me-3"></i>+91 99523 38856</p>
                <p class="mb-2" ><i class="fa fa-envelope me-3"></i>sales@phoenix</p>
                <p class="mb-2" >Branch: Tirupur, Coimbatore, Thoothukudi,Cochin, Bangalore</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; Phoenix Cargo Services PVT LTD, All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a class="footer-link me-5" href="#" style="color: white;">Privacy Policy</a>
                    <a class="footer-link" href="#" style="color: white;">Terms and Conditions</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

    

   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-lg-square up"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    
         document.getElementById("name").addEventListener("input", function(event) {
        let nameInput = event.target.value;
        // Allow only letters and spaces in the name field
        event.target.value = nameInput.replace(/[^A-Za-z\s]/g, '');
    });

     // Restrict phone field to only digits
     document.getElementById("phone").addEventListener("input", function(event) {
        let phoneInput = event.target.value;
        event.target.value = phoneInput.replace(/[^0-9]/g, '');  // Allow only digits
    });

          document.addEventListener("DOMContentLoaded", function() {
    var readMoreLinks = document.querySelectorAll('.read-more');
    
    readMoreLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            var currentlyExpanded = document.querySelector('.short-text.expanded');
            var shortText = this.previousElementSibling;

            // Collapse any currently expanded content
            if (currentlyExpanded && currentlyExpanded !== shortText) {
                currentlyExpanded.classList.remove('expanded');
                currentlyExpanded.nextElementSibling.querySelector('span').textContent = 'Read More';
            }

            // Toggle the clicked content
            if (shortText.classList.contains('expanded')) {
                shortText.classList.remove('expanded');
                this.querySelector('span').textContent = 'Read More';
            } else {
                shortText.classList.add('expanded');
                this.querySelector('span').textContent = 'Read Less';
            }
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    var navbarHeight = document.querySelector('.navbar').offsetHeight;

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"], a[href="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            var targetId = this.getAttribute('href');
            var target;

            if (targetId === "#") {
                // Special case for "Home" link
                target = document.body; // Scroll to the top
            } else {
                target = document.querySelector(targetId);
            }

            if (target) {
                var additionalOffset = parseInt(this.getAttribute('data-offset'), 10);
                if (isNaN(additionalOffset)) {
                    additionalOffset = 0; // Default offset value
                }

                // Calculate the scroll position with the navbar offset
                var scrollToPosition = target.offsetTop - navbarHeight + additionalOffset;

                window.scrollTo({
                    top: scrollToPosition,
                    behavior: 'smooth'
                });
            } else {
                console.error("Target not found:", targetId);
            }
        });
    });

    // Select all nav links
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    // Fixed scroll threshold values
    const homeThreshold = 700;        // Highlight Home up to 700px from the top
    const aboutThreshold = 1600;      // Adjust these values as needed
    const servicesThreshold = 3400;   // Adjust these values as needed
    const contactThreshold = 7000;   // Adjust this value to the top of the contact section

    // Function to highlight nav links based on scroll position
    function onScroll() {
        let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

        // Highlight Home if scrolled up to homeThreshold
        if (scrollPosition <= homeThreshold) {
            navLinks.forEach(link => link.classList.remove('active'));
            document.querySelector('.navbar-nav .nav-link[href="#"]').classList.add('active');
        } else if (scrollPosition > homeThreshold && scrollPosition <= aboutThreshold) {
            // Highlight About if scrolled between homeThreshold and aboutThreshold
            navLinks.forEach(link => link.classList.remove('active'));
            document.querySelector('.navbar-nav .nav-link[href="#about-us"]').classList.add('active');
        } else if (scrollPosition > aboutThreshold && scrollPosition <= servicesThreshold) {
            // Highlight Services if scrolled between aboutThreshold and servicesThreshold
            navLinks.forEach(link => link.classList.remove('active'));
            document.querySelector('.navbar-nav .nav-link[href="#services"]').classList.add('active');
        } else if (scrollPosition > servicesThreshold && scrollPosition <= contactThreshold) {
            // Highlight Contact if scrolled between servicesThreshold and contactThreshold
            navLinks.forEach(link => link.classList.remove('active'));
            document.querySelector('.navbar-nav .nav-link[href="#contact"]').classList.add('active');
        } else {
            // Optionally handle highlighting for sections beyond contactThreshold
            navLinks.forEach(link => link.classList.remove('active'));
        }
    }

    // Attach the scroll event listener
    window.addEventListener('scroll', onScroll);
    onScroll(); // Trigger on page load
});

document.addEventListener("DOMContentLoaded", function() {
    // Get the button
    const backToTopButton = document.querySelector('.up');

    // Show or hide the button based on scroll position
    function toggleBackToTopButton() {
        if (window.pageYOffset > 200) { // Adjust the value based on when you want the button to appear
            backToTopButton.classList.add('show');
        } else {
            backToTopButton.classList.remove('show');
        }
    }

    // Scroll to top smoothly when the button is clicked
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Attach the scroll event listener
    window.addEventListener('scroll', toggleBackToTopButton);

    // Initialize the button visibility on page load
    toggleBackToTopButton();
});


</script>
      
</body>

</html>