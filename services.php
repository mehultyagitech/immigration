
<?php include("inc/header.php") ?>

        <!-- Start Page-title Area -->
        <div class="page-title-area bg-black">
            <div class="container">
                <div class="page-title-content">
                    <h2>Services </h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>Services </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page-title Area -->

         <!-- Start Services Area -->
         <div class="services-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">SERVICES</span>
                    <h2>All The Services That We Provide to Our Clients</h2>
                </div>

                <div class="row justify-content-center">
                <?php
$pointers = [
    [
        "title" => "Temporary Foreign Worker Program: Bridging Labor Shortages with Global Talent",
        "description" => "The Temporary Foreign Worker Program allows Canadian employers to hire foreign workers to address labor shortages in their companies. Qualified individuals can contribute their skills and expertise to the Canadian workforce.",
        "icon" => "ri-briefcase-4-line"
    ],
    [
        "title" => "International Mobility Program: Facilitating Global Workforce Mobility",
        "description" => "The International Mobility Program enables foreign workers to work in Canada without the need for a Labour Market Impact Assessment (LMIA). This program promotes the exchange of knowledge and fosters global collaboration.",
        "icon" => "ri-earth-line"
    ],
    [
        "title" => "Open Work Permits: Flexibility and Opportunities for Foreign Workers",
        "description" => "Open work permits offer the freedom to work for any employer in Canada without a specific job offer or LMIA. Spouses, international students, and refugees can benefit from this option, allowing them to explore various job opportunities.",
        "icon" => "ri-user-3-line"
    ],
    [
        "title" => "Visit Visa for Canada Immigration: Exploring the Beauty of Canada",
        "description" => "A visitor visa grants individuals the opportunity to experience Canada's beauty for up to six months. Visitors can enjoy their short-term stay and engage in various activities across the country.",
        "icon" => "ri-eye-line"
    ],
    [
        "title" => "Extending Your Stay in Canada: Embracing Long-Term Opportunities",
        "description" => "If you desire to extend your stay in Canada beyond the initial visitor visa period, you may be eligible to apply for an extension. Our immigration experts can assist you in understanding the eligibility requirements and the process.",
        "icon" => "ri-time-line"
    ],
    [
        "title" => "Super Visa: Strengthening Family Bonds in Canada",
        "description" => "The Super Visa allows parents and grandparents of Canadian citizens or permanent residents to stay in Canada for up to two years at a time. Families can enjoy valuable time together in Canada.",
        "icon" => "ri-family-line"
    ],
    [
        "title" => "Business Visa for Canada Immigration: Exploring Business Opportunities",
        "description" => "A business visa facilitates entry into Canada for business professionals looking to invest or establish their ventures. Individuals can expand their networks and contribute to Canada's thriving business landscape.",
        "icon" => "ri-briefcase-line"
    ],
    [
        "title" => "Study Visa for Canada Immigration: Pursuing Academic Excellence",
        "description" => "A study visa allows international students to pursue their education in Canada. Students can enroll in Canadian educational institutions and fulfill their academic goals.",
        "icon" => "ri-book-line"
    ],
    [
        "title" => "Working While Studying in Canada: Balancing Work and Studies",
        "description" => "International students studying in Canada may have the opportunity to work while pursuing their education. By obtaining a work permit, students can gain practical experience and financial support.",
        "icon" => "ri-briefcase-3-line"
    ],
    [
        "title" => "Express Entry Visa for Canada Immigration: Fast-Track to Permanent Residency",
        "description" => "Canada's Express Entry system offers a streamlined pathway for skilled workers to obtain permanent residency. Skilled workers can realize their dream of living and working in Canada permanently.",
        "icon" => "ri-map-pin-2-line"
    ],
    [
        "title" => "Provincial Nominee Program (PNP) for Canada Immigration: Settling in Specific Provinces or Territories",
        "description" => "The Provincial Nominee Program (PNP) allows skilled workers to immigrate to and settle in specific provinces or territories in Canada. Individuals can contribute to the local economy and establish themselves in their desired region.",
        "icon" => "ri-building-line"
    ],
    [
        "title" => "Family Sponsorship: Reuniting Families in Canada",
        "description" => "Canadian citizens and permanent residents can sponsor their eligible family members to join them in Canada. Families can reunite and build their lives together in Canada.",
        "icon" => "ri-heart-line"
    ],
    [
        "title" => "Permanent Residency and Citizenship",
        "description" => "If you are approved for an Express Entry visa, you will be granted permanent residency in Canada. Our immigration experts can assist you in understanding the requirements for obtaining permanent residency and citizenship.",
        "icon" => "ri-group-2-line"
    ]
];

foreach ($pointers as $pointer) {
    $title = $pointer['title'];
    $description = $pointer['description'];
    $iconClass = $pointer['icon'];
    $pointerId = strtolower(str_replace(' ', '-', strtok($title, ':')));
    $mainTitle = strtok($title, ':');

    ?>
    <div class="col-lg-4 col-sm-6 col-md-6">
        <div class="services-box">
            <div class="d-flex align-items-center">
                <i class="icon <?php echo $iconClass; ?>"></i>
                <h3><a href="#<?php echo $pointerId; ?>"><?php echo $mainTitle; ?></a></h3>
            </div>
            <p><?php echo $description; ?></p>
            <a href="#<?php echo $pointerId; ?>" class="default-btn">Read More <i class="ri-arrow-right-line"></i></a>
        </div>
    </div>
    <?php
}
?>


                </div>
            </div>
        </div>
        <!-- End Services Area -->

        
         <!-- Start What We Do Area -->
         <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Temporary Foreign Worker Program </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>The Temporary Foreign Worker Program (TFWP) allows Canadian employers to hire foreign workers to fill labor shortages in their companies. To qualify for the TFWP, you will need a job offer from a Canadian employer, a positive Labour Market Impact Assessment (LMIA), and a work permit.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->


         <!-- Start What We Do Area -->
         <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>International Mobility Program</h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>The International Mobility Program (IMP) is designed for foreign workers who do not require an LMIA to work in Canada. This includes workers under international agreements such as the North American Free Trade Agreement (NAFTA) and the Comprehensive and Progressive Agreement for Trans-Pacific Partnership (CPTPP), as well as workers in specific occupations such as researchers, academics, and intra-company transferees.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

        <!-- Start What We Do Area -->
        <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Open Work Permits</h2> 
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Applying for a Work Permit</a>
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>An open work permit allows you to work for any employer in Canada, without the need for a specific job offer or LMIA. Open work permits are typically issued to spouses or common-law partners of Canadian citizens or permanent residents, as well as to certain international students and refugees.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To apply for a work permit, you will need to provide a valid job offer, proof of your qualifications and work experience, and proof that you will leave Canada at the end of your work permit. You may also need to undergo a medical exam and obtain a police certificate. </p>
                                </div>
                               
                            </div>


                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

         <!-- Start What We Do Area -->
         <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Visit Visa for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for a Visitor Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for a Visitor Visa</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you're planning a short visit to Canada, you may need a visitor visa to enter the country. A visitor visa is a temporary resident visa that allows you to stay in Canada for up to six months. Here's what you need to know about applying for a visitor visa:</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for a visitor visa, you must demonstrate that you meet the requirements of Canada's immigration law. This includes having a valid passport, demonstrating that you have sufficient funds to support your stay in Canada, and showing that you will leave Canada at the end of your visit. You may 
                                       also need to undergo a medical examination and provide biometric information, such as fingerprints and a photograph.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for a visitor visa, you will need to submit an application and pay the application fee. You may also need to provide additional supporting documents, such as a letter of invitation from a Canadian resident or proof of your ties to your home country.Our team of immigration experts can assist you in preparing and submitting your visitor visa application. We can help ensure that your application is complete and accurate and provide guidance on the application process and any additional requirements.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->
        
         <!-- Start What We Do Area -->
         <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Extending Your Stay in Canada</h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you wish to stay in Canada beyond the six-month period allowed by your visitor visa, you may be able to apply for an extension. However, you must do so before your current visa expires. Our immigration experts can help you understand the eligibility requirements and application process for extending your stay in Canada.Contact us today to learn more about visitor visas and how we can help you plan your visit to Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

        

        
             
       

       <!-- Start What We Do Area -->
       <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Super Visa</h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for a Super Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for a Super Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Renewing Your Super Visa</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you're a parent or grandparent of a Canadian citizen or permanent resident, you may be eligible for a Super Visa. A Super Visa is a multiple-entry visa that allows parents and grandparents to stay in Canada for up to two years at a time, without the need for renewal.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for a Super Visa, you must meet certain requirements. You must provide proof of your relationship to the Canadian citizen or permanent resident, such as a birth certificate or marriage certificate. You must also demonstrate that you have purchased private medical insurance that meets certain requirements, have sufficient funds to support your stay in Canada, and will return to your home country at the end of your visit.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for a Super Visa, you will need to submit an application and pay the application fee. You may also need to provide additional supporting documents, such as a letter of invitation from your child or grandchild, proof of your ties to your home country, and a copy of your travel itinerary. 
                                       Our team of immigration experts can assist you in preparing and submitting your Super Visa application. We can help ensure that your application is complete and accurate, and provide guidance on the application process and any additional requirements.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>If you wish to extend your stay in Canada beyond the two-year period allowed by your Super Visa, you may be able to apply for an extension. However, you must do so before your current visa expires. Our immigration experts can help you understand the eligibility requirements and application process for extending your stay in Canada. 
                                       Contact us today to learn more about Super Visas and how we can help you reunite with your loved ones in Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

        <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                   

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Business Visa for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for a Business Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for a Business Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="training-tab" data-bs-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Extending your Visa in Canada</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you're a business person looking to invest or establish a business in Canada, you may be eligible for a business visa. A business visa allows you to enter Canada temporarily to engage in business activities, such as attending meetings, conferences, or exploring business opportunities. </p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for a business visa, you must demonstrate that you meet the requirements of Canada's immigration law. This includes having a valid passport, demonstrating that you have sufficient funds to support your stay in Canada, and showing that you will leave Canada at the end of your visit. You may also need to provide additional supporting documents, such as a letter of invitation from a Canadian business, proof of your ties to your home country, and evidence of your business experience. </p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for a business visa, you will need to submit an application and pay the application fee. You may also need to provide additional supporting documents, such as a detailed business plan, market research, and financial statements.Our team of immigration experts can assist you in preparing and submitting your business visa application. We can help ensure that your application is complete and accurate, and provide guidance on the application process and any additional requirements.</p>
                                </div>
                                <div class="tab-pane fade" id="training" role="tabpanel">
                                    <p>LIf you wish to stay in Canada beyond the period allowed by your business visa, you may be able to apply for an extension. However, you must do so before your current visa expires. Our immigration experts can help you understand the eligibility requirements and application process for extending your stay in Canada. 
                                      Contact us today to learn more about business visas and how we can help you plan your business trip to Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- Start What We Do Area -->
          <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Study Visa for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for a Study Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for a Study Visa</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>Canada is home to many world-class universities and colleges, making it a popular destination for international students. If you are planning to study in Canada, you will need a study visa to enter and stay in the country.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for a study visa, you must have been accepted into a Canadian educational institution and provide proof of your acceptance. You must also demonstrate that you have sufficient funds to cover your tuition fees, living expenses, and return transportation to your home country. Additionally, you may be required to undergo a medical examination and provide police clearance certificates. </p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for a study visa, you will need to submit an application and pay the application fee. You may also need to provide additional supporting documents, such as your letter of acceptance from the educational institution, proof of funds, and medical and police clearance certificates. 
                                       Our team of immigration experts can assist you in preparing and submitting your study visa application. We can help ensure that your application is complete and accurate, and provide guidance on the application process and any additional requirements.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->


        <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                   

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Working While Studying in Canada</h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Extending Your Stay in Canada </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you are studying in Canada and want to work while you study, you may be eligible for a work permit. Our immigration experts can help you understand the eligibility requirements and application process for a work permit, and provide guidance on how to balance work and studies in Canada.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>If you wish to stay in Canada beyond the period allowed by your study visa, you may be able to apply for an extension. Our immigration experts can help you understand the eligibility requirements and application process for extending your stay in Canada. 
                                     Contact us today to learn more about study visas and how we can help you achieve your academic goals in Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
        <!-- Start What We Do Area -->
        <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Express Entry Visa for Canada Immigration</h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for an Express Entry Visa</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for an Express Entry Visa </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>Canada's Express Entry system is a popular program for skilled workers looking to immigrate to Canada. The Express Entry system is designed to fast-track the processing of applications for permanent residency for skilled workers who meet the eligibility requirements.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for an Express Entry visa, you must meet the eligibility requirements for one of the three programs under Express Entry: the Federal Skilled Worker Program, the Federal Skilled Trades Program, or the Canadian Experience Class. These programs are designed for skilled workers who have work experience in Canada or abroad and meet certain criteria, such as language proficiency and education.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for an Express Entry visa, you will need to create an online profile and submit an Expression of Interest (EOI). Based on your profile, you will be ranked against other applicants in a points-based system called the Comprehensive Ranking System (CRS). If you are selected, you will receive an Invitation to Apply (ITA) for permanent residency. 
                                      Our team of immigration experts can assist you in creating your online profile and submitting your Expression of Interest. We can also help you understand the eligibility requirements and provide guidance on how to improve your chances of being selected.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->
        
             <!-- Start What We Do Area -->
             <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Permanent Residency and Citizenship </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>If you are approved for an Express Entry visa, you will be granted permanent residency in Canada. After a certain period of time, you may be eligible to apply for Canadian citizenship. 
                                     Our immigration experts can also assist you in understanding the requirements for obtaining permanent residency and citizenship in Canada, and provide guidance on how to become a Canadian citizen. 
                                     Contact us today to learn more about Express Entry visas and how we can help you achieve your immigration goals in Canada. </p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->  
    
        <!-- Start What We Do Area -->
        <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Provincial Nominee Program (PNP) for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for Provincial Nominee Program</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Applying for Provincial Nominee Program</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Permanent Residency and Citizenship </a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>The Provincial Nominee Program (PNP) is a program designed for skilled workers who want to immigrate to Canada and settle in a specific province or territory. The PNP allows provinces and territories to nominate candidates based on their specific economic needs and requirements.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>Each province or territory in Canada has its own eligibility requirements for the Provincial Nominee Program. Generally, to be eligible for the PNP, you must have work experience in a skilled occupation and meet the minimum language requirements for the province or territory. </p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for the Provincial Nominee Program, you will need to contact the province or territory where you wish to settle and meet their specific eligibility requirements. You may also be required to undergo a medical examination and provide police clearance certificates. 
                                       Our team of immigration experts can assist you in understanding the eligibility requirements for the Provincial Nominee Program and provide guidance on how to apply to the specific province or territory.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>If you are approved for the Provincial Nominee Program, you will be granted permanent residency in Canada and be able to live and work in the province or territory that nominated you. After a certain period of time, you may be eligible to apply for Canadian citizenship. 
                                       Our immigration experts can also assist you in understanding the requirements for obtaining permanent residency and citizenship in Canada and provide guidance on how to become a Canadian citizen. 
                                       Contact us today to learn more about the Provincial Nominee Program and how we can help you achieve your immigration goals in Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

         <!-- Start What We Do Area -->
         <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Canadian Citizenship for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Eligibility for Canadian Citizenship</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Application for Canadian Citizenship</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Citizenship Ceremony</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Dual Citizenship</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>Canadian citizenship is the status that represents your legal attachment to Canada. Canadian citizens have many benefits, including the right to vote, obtain a Canadian passport, and live and work in Canada without any immigration restrictions.</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To be eligible for Canadian citizenship, you must meet the following requirements: 
                                       1. Be at least 18 years old 
                                       2. Be a permanent resident of Canada 
                                       3. Have lived in Canada for at least 3 out of the last 5 years 
                                       4. Have knowledge of Canada's official languages (English or French) 
                                       5. Pass a citizenship test 
                                       6. Have no outstanding criminal charges or immigration issues</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>To apply for Canadian citizenship, you will need to submit an application to Immigration, Refugees and Citizenship Canada (IRCC). The application process can be complex and time-consuming, but our team of immigration experts can assist you in preparing your application and ensuring that all requirements are met.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>If your application for Canadian citizenship is approved, you will be invited to attend a citizenship ceremony where you will take an oath of citizenship and receive your citizenship certificate.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>Canada allows dual citizenship, which means that you can hold citizenship in two countries at the same time. However, some countries do not allow their citizens to hold dual citizenship, so it is important to check with your country of origin before applying for Canadian citizenship. 
                                      Contact us today to learn more about Canadian citizenship and how we can assist you in the application process.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->

              <!-- Start What We Do Area -->
              <div class="what-we-do-area pt-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-image">
                            <img src="assets/img/what-we-do/what-we-do1.jpg" alt="image">
                            <img src="assets/img/shape/shape5.png" alt="image" class="shape">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="what-we-do-content">
                            <span class="sub-title">SEE WHAT WE DO</span>
                            <h2>Canadian Citizenship for Canada Immigration </h2>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="project-tab" data-bs-toggle="tab" href="#project" role="tab" aria-controls="project" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="case-study-tab" data-bs-toggle="tab" href="#case-study" role="tab" aria-controls="case-study" aria-selected="false">Applying for Family Sponsorship</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="services-tab" data-bs-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Permanent Residency and Citizenship</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="project" role="tabpanel">
                                    <p>To be eligible for Family Sponsorship, you must be a Canadian citizen or permanent resident, at least 18 years old, and be able to support your sponsored family member financially. The family member you are sponsoring must also meet the eligibility requirements, which vary depending on the type of relationship. 
                                       Types of Family Sponsorship 
                                       There are several types of family sponsorships, including: 
                                       1. Spousal Sponsorship - for spouses, common-law partners, and conjugal partners 
                                       2. Parent and Grandparent Sponsorship - for parents and grandparents 
                                       3. Dependent Child Sponsorship - for dependent children under the age of 22 
                                       4. Other eligible relatives - for other eligible family members, such as siblings, nieces, and nephews</p>
                                </div>
                                <div class="tab-pane fade" id="case-study" role="tabpanel">
                                    <p>To apply for Family Sponsorship, you will need to submit an application to Immigration, Refugees and Citizenship Canada (IRCC). The application process can be complex and time-consuming, but our team of immigration experts can assist you in preparing your application and ensuring that all requirements are met.</p>
                                </div>
                                <div class="tab-pane fade" id="services" role="tabpanel">
                                    <p>If your family member is approved for Family Sponsorship, they will be granted permanent residency in Canada and be able to live and work in Canada. After a certain period of time, they may be eligible to apply for Canadian citizenship. 
                                      Our immigration experts can also assist you in understanding the requirements for obtaining permanent residency and citizenship in Canada and provide guidance on how to become a Canadian citizen. 
                                      Contact us today to learn more about Family Sponsorship and how we can help you reunite with your family in Canada.</p>
                                </div>
                            </div>
                            <a href="#" class="default-btn">Book a Meeting <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End What We Do Area -->
        
    

        
       

        
        <?php include("inc/footer.php") ?>