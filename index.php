<!doctype html>
<html lang="en">
    <head>
<meta charset="UTF-8">

<html lang="en"/>
<title>"Your Next Careers in Chennai- Search Now"</title>
 <meta charset="utf-8" />
<meta name="description" content="Find your ideal job in Chennai today with Careers in Chennai. Explore thousands of opportunities, from entry-level to senior roles, in the heart of the City." />
<meta name="keywords" content="Jobs in chennai, Careers in Chennai,Job openings in Chennai,Job vacancies in Chennai,part time jobs in Chennai" />
<meta name="robots" content="index, follow" />
<meta name="author" content="Careers in Chennai" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="og:url" content="index.php" />
<meta property="og:title" content="Your Next Careers in Chennai- Search Now" />
<meta property="og:description" content="Find your ideal job in Chennai today with Careers in Chennai. Explore thousands of opportunities, from entry-level to senior roles, in the heart of the City." />
<meta property="og:image" content="" />
<meta name="msvalidate.01" content="" />
<meta name="google-site-verification" content="" />
<meta name="MobileOptimized" content="width" />
<meta name="HandheldFriendly" content="true" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
      <link rel="stylesheet" href="index_css.css">
  <?php
include('header.php');
?>
 <?php
        $con = mysqli_connect("localhost","job_searching","job_searching","job_searching");
    // Check connection
    
    $con->set_charset("utf8mb4");
    
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        
        $query1 = "SELECT * from job_posting WHERE client_id != '' AND client_id != 'NULL' ORDER BY RAND() LIMIT 5";
        $result1 = $con->query($query1);
        while($row1 = $result1->fetch_assoc()) {
            
            $query211 = "SELECT company_logo from registration_details WHERE id = '$row1[client_id]'";
$result211 = $con->query($query211);

if($row211=$result211->fetch_assoc())
    {
            
    $company_logo1 = "job_searching/post_job/companylogo/" . $row211['company_logo'];
            
    }
    ?>
    <script type="application/ld+json">
    {
      "@context" : "https://schema.org/",
      "@type" : "JobPosting",
      "title" : "<?php echo $row1['posting_title']; ?>",
      "description" : "<?php echo $row1['description']; ?>",
      "identifier": {
        "@type": "PropertyValue",
        "name": "<?php echo $row1['company_name']; ?>",
        "value": "<?php echo $row1['id']; ?>"
      },
      "datePosted" : "<?php echo $row1['date_opened']; ?>",
      "validThrough" : "<?php
      

$dateOpened = $row1['date_opened']; // Get the date opened from $row1
$currentDate = new DateTime($dateOpened); // Create a DateTime object from the string representation of the date
$currentDate->modify('+' . $row1['valid_through']); // Add 30 days to the current date
$currentDateFormatted = $currentDate->format('Y-m-d'); // Format the date

// Output the formatted date
echo $currentDateFormatted;

?>
       ?>",
      "employmentType" : "<?php echo $row1['job_type']; ?>",
      "hiringOrganization" : {
        "@type" : "Organization",
        "name" : "<?php echo $row1['company_name']; ?>",
        "sameAs" : "<?php echo $row1['website_link']; ?>",
        "logo" : "<?php echo $company_logo1; ?>"
      },
      "jobLocation": {
        "@type": "Place",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "<?php echo $row1['address1']; ?>",
          "addressLocality": "<?php echo $row1['city']; ?>",
          "addressRegion": "<?php echo $row1['area']; ?>",
          "postalCode": "<?php echo $row1['pincode']; ?>",
          "addressCountry": "India"
        }
      },
      "baseSalary": {
        "@type": "MonetaryAmount",
        "currency": "INR",
        "value": {
          "@type": "QuantitativeValue",
          "value": <?php echo $row1['work_experience_mini']; ?>,
          "unitText": "Yearly"
        }
      }
    }
    </script>
    
    <?php
        }
    ?>


    <!-- Include jQuery -->
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!--old dropdown style-taken-->

<style>
    #home{
        padding-top: 100px !important;
        padding-bottom:100px !important;
    }
    .bg-overlay{
        background-color:#13a4d6 !important;
    }
    #h1display5{
        font-size:14px;
    }
    #textwarning1{
        color:#FFCC99 !important;
    }
    .fs-17{
        font-size:14px;
    }
    .modal-header{
        font-size:14px; !important
    }
    #exampleModalLabel{
        font-size:14px; !important
    }
    .modal-body{
        font-size:12px !important;
    }
    #btnn{
        background-color:white !important;
        font-size:12px !important;
        border-radius:20px;
        color:black;
        width:auto !important;
        border:2px solid black;
    }
    #tredingkeuwords{
        font-size:14px;
    }
    
    #section01{
padding-top: 10px !important;
padding-bottom: 30px !important;
}

#title01{
font-size:14px!important;
}
#row01{
padding-top:0px !important;
}
#company{
padding:1px !important;
}
#popucategory01{
padding:0px !important;
}
#popucategory02{
background-color:white !important;
}
#fs01{
font-size:12px !important;
}
#textmuted{
font-size:12px !important;
}
#mt5{
margin-top:12px !important;
}
#btn02{
font-size:12px !important;
}
#searchbylocation{
font-weight:bold;font-size:14px !important;
}
#section02{
padding-top: 30px !important; padding-bottom: 30px !important;
}
#sectiontitle03{
padding-bottom:0px !important;
}
#recent-jobs-tab{
font-size:14px !important;
}
#featured-jobs-tab{
font-size:14px !important;
}
#freelancer-tab{
font-size:14px !important;
}
#part-time-tab{
font-size:14px !important;
}
#recent_jobs1{
font-size:14px !important;
}
#recent_jobs3{
font-size:12px !important;
}
#postedjob{
font-size:12px !important;
float:right !important;
}
#collg09{
font-size:12px !important;
text-align:justify !important;
}
#recent_jobs2{
font-size:14px !important;
font-weight:bold;
}
#recent_jobs4{
font-size:12px !important;
}

#p3borderbglight{
color:black;
text-align:center !important;
padding:5px !important;
font-size:12px !important;
font-weight:500;
border-radius:10px !important;
box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
}

#button1001{
font-size:12px !important;
padding:0px 7px;
}

</style>
    </head>

    <body>
            <div class="main-content">

                <div class="page-content">

                    <!-- START HOME -->
                    <section class="bg-home" id="home">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="text-center text-white">
                                        <h1 class="display-5 fw-semibold mb-3" id="h1display5">Search From <span class="text-warning fw-bold" id="textwarning1">50,000+</span>
                                            Open Jobs.</h1>
                                        <p class="fs-17">Find jobs</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
<?php


if (isset($_GET['company_name'])) {
    $company_name = $con->real_escape_string($_GET['company_name']);

    // Example query: Adjust this based on your actual table and columns
    $sql = "SELECT * FROM job_listings WHERE company_name LIKE '%$company_name%'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // Output search results here
            echo "<div>Job Title: " . htmlspecialchars($row['job_title']) . "</div>";
            // Add other job details as needed
        }
    } else {
        echo "No results found.";
    }
}
?>


 <style>
 .form-control, .form-select {
     font-size:11px;
 }
 input::placeholder{
    font-size:10px !important;
}
          
        .dropdown1000, .dropdown1002, .dropdown1003 {
            display: none;
            position: absolute;
            width: 100%;
            border: 1px solid #ccc;
            background-color: white;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-size:10px !important;
        }

/* Add this to your existing CSS */
.dropdown1000, .dropdown1002, .dropdown1003 {
    list-style-type: none; /* Removes bullets */
    padding: 0; /* Removes padding */
    margin: 0; /* Removes margin */
}


        .dropdown1000 li, .dropdown1002 li, .dropdown1003 li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdown1000 li:hover, .dropdown1002 li:hover, .dropdown1003 li:hover {
            background-color: #f0f0f0;
        }
    </style>

                        <form action="search_view1.php">
                                <div class="registration-form">
                                <div class="search-container">
                                    <input type="text" class="search-input" id="searchField" placeholder="Search jobs...">
                                    <i class="fas fa-search search-icon"></i>
                                </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Job Search</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
<form action="search_view1.php">
                        <div class="row g-3">
                            
                            <div class="col-md-3 position-relative">
<div class="search-dropdown0">
  <input type="text" id="search-bar" class="form-control" placeholder="Type here Company Name..." name="company_name">
            <ul id="dropdown1000" class="dropdown1000"></ul>
</div>
                            </div>
                            
                            <div class="col-md-3 position-relative">
                                <div class="search-dropdown1">
                           <input type="text" id="search-bar2" placeholder="Type here Location..." class="form-control" name="choices-single-location">
            <ul id="dropdown1002" class="dropdown1002"></ul>
                                </div>
                            </div>
                            
                            <div class="col-md-3 position-relative">
                                
                                <div class="search-dropdown2">
<input type="text" id="search-bar3" placeholder="Type here Position..." class="form-control" name="choicessinglecategories">
            <ul id="dropdown1003" class="dropdown1003"></ul>
            
</div>
                            </div>
                            
                            <div class="col-md-3">
                                <button id="btnn" class="btn btn-primary" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    
     
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> 
$(document).ready(function() {
    let companyOptions = [];
    let locationOptions = [];
    let positionOptions = [];

    // Fetch options from the server
    $.getJSON('fetch_data/company_name_data.php', function(data) {
        companyOptions = data;
    }).fail(function() {
        console.error('Error fetching company data');
    });

    $.getJSON('fetch_data/location_name_data.php', function(data) {
        locationOptions = data;
    }).fail(function() {
        console.error('Error fetching location data');
    });

    $.getJSON('fetch_data/position_name_data.php', function(data) {
        positionOptions = data;
    }).fail(function() {
        console.error('Error fetching position data');
    });

    function updateDropdown(inputId, dropdownId, options) {
        let query = $(inputId).val().split(',').pop().trim();  // Use the last typed word for searching

        if (query === "") {
            $(dropdownId).hide();
            return;
        }
        
        // Separate matches that start with the query from other matches
        let startingMatches = options.filter(option => option.toLowerCase().startsWith(query.toLowerCase()));
        let containingMatches = options.filter(option => !option.toLowerCase().startsWith(query.toLowerCase()) && option.toLowerCase().includes(query.toLowerCase()));

        let matches = [...startingMatches, ...containingMatches];  // Combine both arrays

        if (matches.length > 0) {
            $(dropdownId).empty().show();
            matches.forEach(match => {
                $(dropdownId).append(`<li>${match}</li>`);
            });
        } else {
            $(dropdownId).hide();
        }
    }

    // Event handlers for the search bars
    $('#search-bar').on('input', function() {
        updateDropdown('#search-bar', '#dropdown1000', companyOptions);
    });

    $('#search-bar2').on('input', function() {
        updateDropdown('#search-bar2', '#dropdown1002', locationOptions);
    });

    $('#search-bar3').on('input', function() {
        updateDropdown('#search-bar3', '#dropdown1003', positionOptions);
        console.log('Updating position dropdown'); // Debugging line
    });

    // Update search bar with the selected dropdown value
    function updateSearchBar(inputId, dropdownId, options) {
        let selected = $(this).text();
        let currentValue = $(inputId).val();
        let parts = currentValue.split(',').map(part => part.trim()).filter(part => part.length > 0);

        // Remove the last part and add the selected item
        if (parts.length > 0) {
            parts.pop();
        }
        $(inputId).val(parts.join(', ') + (parts.length > 0 ? ', ' : '') + selected);
        
        $(dropdownId).hide();
        $(inputId).focus();
        updateDropdown(inputId, dropdownId, options);  // Update the dropdown after selection
    }

    // Event handlers for clicking on dropdown items
    $(document).on('click', '#dropdown1000 li', function() {
        updateSearchBar.call(this, '#search-bar', '#dropdown1000', companyOptions);
    });

    $(document).on('click', '#dropdown1002 li', function() {
        updateSearchBar.call(this, '#search-bar2', '#dropdown1002', locationOptions);
    });

    $(document).on('click', '#dropdown1003 li', function() {
        updateSearchBar.call(this, '#search-bar3', '#dropdown1003', positionOptions);
    });

    // Hide dropdown when clicking outside
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.search-wrapper').length) {
            $('.dropdown1000, .dropdown1002, .dropdown1003').hide();
        }
    });

    // Show dropdown when clicking on the input field
    $('#search-bar').on('focus', function() {
        updateDropdown('#search-bar', '#dropdown1000', companyOptions);
    });

    $('#search-bar2').on('focus', function() {
        updateDropdown('#search-bar2', '#dropdown1002', locationOptions);
    });

    $('#search-bar3').on('focus', function() {
        updateDropdown('#search-bar3', '#dropdown1003', positionOptions);
    });
});
</script>
    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               </div><!--end container-->
                            </form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="treding-keywords list-inline mb-0 text-white-50 mt-4 mt-lg-3 text-center" id="tredingkeuwords">
                                        <li class="list-inline-item text-white"><i class="mdi mdi-tag-multiple-outline text-warning fs-18"></i> Trending Keywords:</li>
                                        <li class="list-inline-item"><a href="job-title.php?title=Design">Design,</a></li>
                                        <li class="list-inline-item"><a href="job-title.php?title=Development">Development,</a></li>
                                        <li class="list-inline-item"><a href="job-title.php?title=Manager">Manager,</a></li>
                                        <li class="list-inline-item"><a href="job-title.php?title=Senior">Senior</a></li>
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- End Home -->

                    <!-- START SHAPE -->
                    <div class="position-relative">
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="1440" height="150" preserveAspectRatio="none" viewBox="0 0 1440 220">
                                <g mask="url(&quot;#SvgjsMask1004&quot;)" fill="none">
                                    <path d="M 0,213 C 288,186.4 1152,106.6 1440,80L1440 250L0 250z" fill="rgba(255, 255, 255, 1)"></path>
                                </g>
                                <defs>
                                    <mask id="SvgjsMask1004">
                                        <rect width="1440" height="250" fill="#ffffff"></rect>
                                    </mask>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->
                    
                       <!-- START CATEGORY -->
                    <section class="section" id="section01">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6"id="company">
                                    <div class="section-title text-center">
                                        <h5 class="title" id="title01">Browse Jobs Company wise</h5>
                                      
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            <div class="row" id="row01">
                                
                                <!--WHERE jp.external_tag IN ('2', '6', '18', '243','37','31')-->
                              <?php
                              date_default_timezone_set('Asia/Kolkata');
                              
                              $currentDate = date('Y-m-d');

$pastDate = date('Y-m-d', strtotime('-30 days'));

                              
                              
$sql21 = "SELECT DISTINCT jp.external_tag, jp.company_name, cl.id AS logo_id, COUNT(jp.id) AS job_count
        FROM job_posting jp
        LEFT JOIN company_logo cl ON jp.external_tag = cl.id
        WHERE jp.external_tag IN ('120', '319', '104', '243','382','603')
        AND jp.upload_date BETWEEN '$pastDate' AND '$currentDate'
        GROUP BY jp.external_tag
        ORDER BY RAND()
        LIMIT 6";

$result1111 = $con->query($sql21);

while ($row1111 = $result1111->fetch_assoc()) {
?>
    <div class="col-lg-2 col-md-6 mt-4 pt-2" id="company">
        <div class="popu-category-box rounded text-center" id="popucategory01">
            <div class="popu-category-icon icons-md" id="popucategory02">
                <?php
                // Check if logo_id is not null
                if ($row1111['logo_id'] != null) {
                    ?>
                    <img src="companylogo/company_logo_<?php echo $row1111['logo_id']; ?>.jpg" alt="Company Logo" width="100%">
                <?php  }  ?>
            </div>
            <div class="popu-category-content mt-4">
                <a href="job-categories2.php?id=<?php echo $row1111['company_name']; ?>" class="text-muted fs-14 mb-0 stretched-link">
                    <h5 id="fs01" class="fs-18"><?php echo $row1111['company_name']; ?></h5>
                </a>
                <p class="text-muted mb-0" id="textmuted">
                    <?php echo $row1111['job_count'] . " Jobs"; ?>
                </p>
            </div>
        </div><!--end popu-category-box-->
    </div><!--end col-->
<?php
}
?>

                            </div>
                            <!--end row-->
                            <div class="row">
                                <div cla ss="col-lg-12">
                                    <div class="mt-5 text-center" id="mt5">
                                        <a href="search-companies.php" id="btn02" class="btn btn-primary btn-hover">Browse All Companies <i class="uil uil-arrow-right"></i></a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                        <!--end container-->
                    </section>

<center id="searchbylocation">Search By Location</center>

<div class="container">
    <div class="scroll-container">
        <button class="scroll-btn left-btn">&lt;</button>
        <div class="categories">
            <?php
        
            $query90 = "SELECT * from location WHERE image != '' ORDER BY RAND() LIMIT 12";
            $result90 = $con->query($query90);
            while($row90 = $result90->fetch_assoc()) {
            ?>
            <div class="category">
                  <a href="search-by-location.php?location=<?php $encodedString11 = base64_encode($row90['pincode']); echo $encodedString11; ?>">
                <div class="logos">
                    <img src="assets/location images/<?php echo $row90['image']; ?>.jpg" alt="<?php echo $row90['image']; ?>">
                </div>
                </a>
            </div>
            <?php } ?>
        </div>
        <button class="scroll-btn right-btn">&gt;</button>
    </div>
</div>

                    <!-- END CATEGORY -->





                    <!-- START JOB-LIST -->
                    <section class="section bg-light" id="section02">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-4 pb-2" id="sectiontitle03">
                                        <h6 id="title01" class="title">Recent & Featured Jobs</h6>
                                       
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <ul class="job-list-menu nav nav-pills nav-justified flex-column flex-sm-row mb-4" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="recent-jobs-tab" data-bs-toggle="pill"
                                                data-bs-target="#recent-jobs" type="button" role="tab" aria-controls="recent-jobs"
                                                aria-selected="true">Featured Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="featured-jobs-tab" data-bs-toggle="pill"
                                                data-bs-target="#featured-jobs" type="button" role="tab" aria-controls="featured-jobs"
                                                aria-selected="false">Recent Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="freelancer-tab" data-bs-toggle="pill"
                                                data-bs-target="#freelancer" type="button" role="tab" aria-controls="freelancer"
                                                aria-selected="false">Fresher Jobs</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="part-time-tab" data-bs-toggle="pill"
                                                data-bs-target="#part-time" type="button" role="tab" aria-controls="part-time"
                                                aria-selected="false">Part Time Jobs</button>
                                        </li>
                                        <!--<li class="nav-item" role="presentation">-->
                                        <!--    <button class="nav-link" id="full-time-tab" data-bs-toggle="pill"-->
                                        <!--        data-bs-target="#full-time" type="button" role="tab" aria-controls="full-time"-->
                                        <!--        aria-selected="false">Full Time</button>-->
                                        <!--</li>-->
                                    </ul>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                            
                            <div class="row g-3">
                                <!--<div class="col-lg-12">-->
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="recent-jobs" role="tabpanel"
                                            aria-labelledby="recent-jobs-tab">

                            <div class="row g-3">                   
                            <?php
                     
                            
                            $query1 = "SELECT * from job_posting WHERE client_id != '' AND client_id != 'NULL' ORDER BY RAND() LIMIT 6";
$result1 = $con->query($query1);

while($row1=$result1->fetch_assoc())
    {
                            ?>
<div class="col-md-6" id="jobs">
                                            <div class="job-box bookmark-post card mt-4">
                                                <!--<div class="bookmark-label text-center">-->
                                                <!--    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>-->
                                                <!--</div>-->
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-9" id="designation_name">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="
                                                                   <?php if($row1['external_link'] == 'NULL'){ 
                                                                echo "job-details.php";
                                                                   }
                                                                   else{
                                                                       echo "$row1[external_link]";
                                                                   }
                                                                ?>
                                                                " class="text-muted fs-14 mb-0" id="recent_jobs1"><?php echo ucfirst($row1['posting_title']); ?></a></h5>
                                                                <p class="text-muted fs-14 mb-0" id="recent_jobs3"><?php echo ucfirst($row1['company_name']); ?></p>
                                                            </div>
                                                             <p class="text-muted mb-0" id="recent_jobs3"><b>Location -</b> <?php echo $row1['area']; ?></p>
                                                            <p class="text-muted mb-2" id="recent_jobs3">
                                                                    <?php if($row1['salary'] == 'NULL'){ 
                                                                    echo "";
                                                                    }else { ?>
                                                                      <span style="font-size:12px !important;"><b>Salary</b> - ₹</span><?php echo $row1['salary']; ?>
                                                                    <?php
                                                                    }?>
                                                                </p>
                                                                   <p class="text-muted mb-0" id="recent_jobs3"><span class="text-muted fs-14 mb-0" id="recent_jobs3">
                                                                    
                                                                    <?php
                                                                    if($row1['work_experience_mini'] == 'NULL'){ 
                                                                        echo "";
                                                                    }elseif($row1['work_experience_maxi'] == 'NULL'){
                                                                    ?>
                                                                    
                                                                    <b>Experience :</b> <?php echo $row1['work_experience_mini']; ?>
                                                                    
                                                                    <?php
                                                                    }else{
                                                                         ?> 
                                                                    <b>Experience : </b><?php echo $row1['work_experience_mini']; ?> - <?php echo $row1['work_experience_maxi']; ?> Years
                                                                   
                                                                  
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    
                                                                    </p>
                                                                    
                                                                    </div>
                                                                    
                                                                         <div class="col-md-3">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="#">
                                                                    
                                                                    <?php
                                            $sql111 = "SELECT company_logo FROM registration_details WHERE id = '$row1[client_id]'";
$result111 = $con->query($sql111);

while($row111=$result111->fetch_assoc())
    {
        ?>
        <div class="images">
     <img src="images/<?php echo $row111['company_logo']; ?>" alt="<?php echo ucfirst($row1['company_name']); ?>" width="100%" class="img-fluid1">
        </div>
        <?php
    }
                                            ?>
                                                                    </a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                                     <div class="col-md-12" id="designation_name">
                                                                <span id="recent_jobs3" class="badge bg-danger-subtle text-danger fs-13 mt-1">Full Time</span>
                                                                <span id="recent_jobs3" class="badge bg-info-subtle  text-info fs-13 mt-1">Private</span>
                                                                <span id="recent_jobs3" class="badge bg-warning-subtle text-warning fs-13 mt-1">Urgent</span>
                                                                <span id="postedjob"><b>Posted:</b> <?php echo $row1['upload_date']; ?></span>
                                                    </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <!--end col-->
                                                        <div class="col-lg-9 col-md-5" id="collg09">
                                                            <div id="collg09">
                                                                <p class="text-muted mb-0" id="collg09"><span class="text-muted fs-14 mb-0" id="collg09">
                                                                     <?php if($row1['required_skills'] == 'NULL'){ 
                                                                    echo "";
                                                                    }else { ?>
                                                                      <span class="text-primary">Skills: </span><?php echo substr($row1['required_skills'], 0, 100); ?>...
                                                                    <?php
                                                                    }?>
                                                                </span>
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                           <?php if($row1['external_link'] == ''){ 
                                                                    ?>
                                                                     <div class="col-lg-3 col-md-3" id="recent_jobs3">
                                                            <div class="text-start text-md-end" id="recent_jobs3">
                                                                <a href="job-details.php?id=<?php  $encodedString1 = base64_encode($row1['id']); echo $encodedString1; ?>" id="recent_jobs3" class="primary-link"><b>Apply Now</b></a>
                                                                <a href="job-details.php?id=<?php  $encodedString2 = base64_encode($row1['id']); echo $encodedString2; ?>" id="recent_jobs3" data-bs-toggle="modal" > <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                                    <?php
                                                                    }else { ?>
                                                        <div class="col-lg-3 col-md-3" id="recent_jobs3">
                                                            <div class="text-start text-md-end" id="recent_jobs3">
                                                                <a href="<?php echo $row1['external_link']; ?>" class="primary-link" id="recent_jobs3"><b>Apply Now</b></a>
                                                               <a href="<?php echo $row1['external_link']; ?>" data-bs-toggle="modal" id="recent_jobs3"> <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                                    }
                                                                    ?>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->
                                            </div>
<?php
}
?>
</div>
                                             <center>
                                                 <div class="text-center mt-4 pt-2">
                                                <a href="companies-job-list.php" class="btn btn-primary" id="recent_jobs3">View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                            </center>
                                        </div>
                                        <!--end recent-jobs-tab-->
                                        <div class="tab-pane fade" id="featured-jobs" role="tabpanel"
                                            aria-labelledby="featured-jobs-tab">
                                                        <div class="row g-3">                              
                            <?php
                       
                            
                            $query1 = "SELECT * from job_posting WHERE external_tag = '101' AND new_tag = '09052000' ORDER BY RAND() LIMIT 6";
$result1 = $con->query($query1);

while($row1=$result1->fetch_assoc())
    {
        
                            ?>
<div class="col-md-6" id="jobs">
                                            <div class="job-box bookmark-post card mt-4">
                                                <!--<div class="bookmark-label text-center">-->
                                                <!--    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>-->
                                                <!--</div>-->
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                       
                                                        <div class="col-md-9">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="<?php
    if ($row1['external_link'] == 'NULL') {
        echo "job-details.php";
    } else {
        $encodedString1 = base64_encode($row1['external_link']);
        echo "job-details1.php?id=$encodedString1";
    }
?>"
                                                                 class="text-muted fs-14 mb-0" id="recent_jobs2"><?php echo ucfirst($row1['posting_title']); ?></a></h5>
                                                                <p class="text-muted fs-14 mb-0" id="recent_jobs3"><?php echo ucfirst($row1['company_name']); ?></p>
                                                           <p class="text-muted mb-0" id="recent_jobs3"><b>Location -</b> <?php echo $row1['city']; ?></p>
                                                             <p class="text-muted mb-2" id="recent_jobs3">
                                                   <span><?php if ($row1['salary'] === NULL) { echo ""; } else { echo "<b>Salary</b> - ₹" . $row1['salary']; } ?></span>
                                                                </p>
                                                                              <p class="text-muted mb-0" id="recent_jobs3"><span class="text-muted fs-14 mb-0" id="recent_jobs3">
                                                       <?php
                                                                    if($row1['work_experience_mini'] == 'NULL'){ 
                                                                        echo "";
                                                                    }elseif($row1['work_experience_maxi'] == 'NULL'){
                                                                    ?>
                                                                    
                                                                   <b id="recent_jobs3"> Experience :</b> <?php echo $row1['work_experience_mini']; ?> Years
                                                                    
                                                                    <?php
                                                                    }else{
                                                                         ?> 
                                                                  <b id="recent_jobs3">  Experience :</b> <?php echo $row1['work_experience_mini']; ?> <?php echo $row1['work_experience_maxi']; ?> Years
                                                          <?php
                                                                    }
                                                                    ?>
                                                                    </p>
                                                                <span id="recent_jobs3" class="badge bg-danger-subtle text-danger fs-13 mt-1">Full Time</span>
                                                                <span id="recent_jobs3" class="badge bg-info-subtle  text-info fs-13 mt-1">Private</span>
                                                                <!--<span class="badge bg-warning-subtle text-warning fs-13 mt-1">Urgent</span>-->
                                                                <span id="recent_jobs3">Posted: <?php echo $row1['upload_date']; ?></span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                   <div class="col-md-3">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="#">
                                                                  <?php
                                            $sql = "SELECT logo FROM company_logo WHERE id = '$row1[external_tag]'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    
    ?>
    <div class="images">
    <img src="companylogo/<?php echo $row['logo']; ?>" alt="Blob Image" width="100%" class="img-fluid2">
</div>
<?php
}
                                            ?>
                                                                    </a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                        <!--end col-->
                                                        <div class="col-lg-9 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-muted fs-14 mb-0" id="recent_jobs3">
                                                                          <?php if(($row1['required_skills'] == 'NULL')||($row1['required_skills'] == '')){ 
                                                                    
                                                                    echo "";
                                                                    
                                                                    }else { ?>
                                                                    
                                                                      <span class="text-primary">Skills: </span><?php echo $row1['required_skills']; ?>
                                                                    
                                                                    <?php
                                                                   
                                                                    }?>
                                                                   
                                                                </span>
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                           <?php if($row1['new_tag'] == '09052000'){ 
                                                                    
                                                                    ?>
                                                                    
                                                                     <div class="col-lg-3 col-md-3">
                                                            <div class="text-start text-md-end" id="recent_jobs3">
                                                                <a href="job-details1.php?id=<?php $encodedString1 = base64_encode($row1['external_link']); echo $encodedString1; ?>"  id="recent_jobs6"  class="primary-link">Apply Now</a>
                                                               <a href="job-details1.php?id=<?php $encodedString2 = base64_encode($row1['external_link']); echo $encodedString2; ?>"  id="recent_jobs6"  data-bs-toggle="modal" > <i class="mdi mdi-chevron-double-right"></i></a>
                                                         </div>
                                                        </div>
                                                                    <?php
                                                                    
                                                                    }else { ?>
                                                        
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="text-start text-md-end" id="recent_jobs3">
                                                               <a href="<?php echo $row1['external_link']; ?>"  id="recent_jobs6"  class="primary-link">Apply Now</a>
                                                               <a href="<?php echo $row1['external_link']; ?>"  id="recent_jobs6"  data-bs-toggle="modal" > <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                                    }
                                                                    ?>
                                                        
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            
                                            
                                                          </div>
                                            <!--end job-box-->

<?php
}
?>
</div>                                      <center>
                                            <div class="text-center mt-4 pt-2" id="recent_jobs3">
                                                <a href="job-list.php" class="btn btn-primary"  id="recent_jobs6" >View More <i class="uil uil-arrow-right"></i></a>
                                            </div>
                                            </center>
                                        </div>
                                        <!--end featured-jobs-tab-->
                                        <div class="tab-pane fade" id="freelancer" role="tabpanel" aria-labelledby="freelancer-tab">
                                                     <div class="row g-3">  
                            <?php
                            $query1 = "SELECT * from job_posting WHERE work_experience_mini LIKE '%fresher%' OR work_experience_mini = '0' ORDER BY RAND() LIMIT 6";
$result1 = $con->query($query1);

while($row1=$result1->fetch_assoc())
    {
        
                            ?>
<div class="col-md-6" id="jobs">
                                            <div class="job-box bookmark-post card mt-4">
                                                <!--<div class="bookmark-label text-center">-->
                                                <!--    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>-->
                                                <!--</div>-->
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                              
                                                        <div class="col-md-9">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1"><a href="
                                                                
                                                                   <?php if($row1['external_link'] == 'NULL'){ 
                                                              
                                                                echo "job-details.php";
                                                                
                                                                   }
                                                                   else{
                                                                       echo "$row1[external_link]";
                                                                       
                                                                   }
                                                                ?>
                                                                " class="text-muted fs-14 mb-0" id="recent_jobs4"><?php echo ucfirst($row1['posting_title']); ?></a></h5>
                                                                <p class="text-muted fs-14 mb-0" id="recent_jobs4"><?php echo ucfirst($row1['company_name']); ?></p>
                                                                <p class="text-muted mb-0"><span class="text-muted fs-14 mb-0" id="recent_jobs3">
                                                                    
                                                                    <?php
                                                                    if($row1['work_experience_mini'] == 'NULL'){ 
                                                                        echo "";
                                                                    }elseif($row1['work_experience_maxi'] == 'NULL'){
                                                                    ?>
                                                                    
                                                                    <b>Experience : </b><?php echo $row1['work_experience_mini']; ?>
                                                                    
                                                                    <?php
                                                                    }else{
                                                                         ?> 
                                                                   <b> Experience :</b> <?php echo $row1['work_experience_mini']; ?> - <?php echo $row1['work_experience_maxi']; ?> Years
                                                                   
                                                                  
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    </p>
                                                                    
                                                                    <p class="text-muted mb-0" id="recent_jobs3"><?php echo $row1['area']; ?></p>
                                                                      <p class="text-muted mb-2" id="recent_jobs3">
                                                                    <?php if($row1['salary'] == 'NULL'){ 
                                                                    
                                                                    echo "";
                                                                    
                                                                    }else { ?>
                                                                    
                                                                     <span id="recent_jobs3"><b>Salary</b> - ₹</span><?php echo $row1['salary']; ?>
                                                                    
                                                                    <?php
                                                                   
                                                                    }?>
                                                                    
                                                                </p>
                                                                    <span id="recent_jobs3" class="badge bg-danger-subtle text-danger fs-13 mt-1">Full Time</span>
                                                                <span id="recent_jobs3" class="badge bg-info-subtle  text-info fs-13 mt-1">Private</span>
                                                                <!--<span style="font-size:12px !important;" class="badge bg-warning-subtle text-warning fs-13 mt-1">Urgent</span>-->
                                                                <span id="recent_jobs3">Posted: <?php echo $row1['upload_date']; ?></span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                                 <div class="col-md-3">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="#">
                                                                    
                                                                    
                                                                  <?php
                                            $sql212 = "SELECT id FROM company_logo WHERE id = '635'";
$result212 = $con->query($sql212);

if ($result212->num_rows > 0) {
    $row212 = $result212->fetch_assoc();
    ?>
    
 <div class="images">   
<img src="companylogo/company_logo_<?php echo $row212['id']; ?>.jpg" alt="Blob Image" width="100%" class="img-fluid4">
</div>
<?php

}
                                            ?>
                                                                    
                                                                    
                                                                    </a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                       
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                    
                                                        <!--end col-->
                                                        <div class="col-lg-9 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-muted fs-14 mb-0">
                                                                    
                                                                     <?php if($row1['required_skills'] == 'NULL'){ 
                                                                    
                                                                    echo "";
                                                                    
                                                                    }else { ?>
                                                                    
                                                                      <span class="text-primary">Skills: </span><?php echo $row1['required_skills']; ?>
                                                                    
                                                                    <?php
                                                                   
                                                                    }?>
                                                                   
                                                                </span>
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                           <?php if($row1['external_link'] == 'NULL'){ 
                                                                    
                                                                    ?>
                                                                    
                                                                     <div class="col-lg-3 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="#applyNow" id="recent_jobs3" data-bs-toggle="modal" class="primary-link">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                                    <?php
                                                                    
                                                                    }else { ?>
                                                        
                                                        <div class="col-lg-3 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                
                                                                <a href="<?php echo $row1['external_link']; ?>" id="recent_jobs3" class="primary-link">Apply Now</a>
                                                                
                                                                <a href="<?php echo $row1['external_link']; ?>" id="recent_jobs3" data-bs-toggle="modal" > <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <?php
                                                                    }
                                                                    ?>
                                                        
                                                        
                                                        
                                                        
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->
                                            </div>

<?php
}
?>

</div>
                                            <!--<div class="text-center mt-4 pt-2">-->
                                            <!--    <a href="job-list.php" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                        <!--end freelancer-tab-->










                                        <div class="tab-pane fade" id="part-time" role="tabpanel" aria-labelledby="part-time-tab">
                                               <div class="row g-3">
                                                   
                                                                           
                            <?php
                                $conn = mysqli_connect("localhost","mainproject","mainproject","mainproject");
                            
                            $query1 = "SELECT * from upcomingjob WHERE status = '' ORDER BY RAND() LIMIT 6";
$result1 = $conn->query($query1);

while($row1=$result1->fetch_assoc())
    {
        
                            ?>
<div class="col-md-6" id="jobs">
                                            <div class="job-box bookmark-post card mt-4">
                                                <!--<div class="bookmark-label text-center">-->
                                                <!--    <a href="javascript:void(0)" class="text-white align-middle"><i class="mdi mdi-star"></i></a>-->
                                                <!--</div>-->
                                                <div class="p-4">
                                                    <div class="row align-items-center">
                                                        
                                                        <div class="col-md-9">
                                                            <div class="mb-2 mb-md-0">
                                                                <h5 class="fs-18 mb-1" id="recent_jobs1"><a href="parttimejob/candidate/candidate_login.php" id="recent_jobs1" class="text-muted fs-14 mb-0"><?php echo ucfirst($row1['projectdescription']); ?></a></h5>
                                                                <p class="text-muted fs-14 mb-0" id="recent_jobs3"><?php echo ucfirst($row1['projectname']); ?></p>
                                                         
                                                                <p class="text-muted mb-0" id="recent_jobs3"><i class="mdi mdi-map-marker text-primary me-1"></i>Location : <?php echo $row1['location']; ?></p>
                                                                
                                                                
                                                                 <p class="text-muted mb-2">
                                                                    <?php if($row1['payperday'] == 'NULL'){ 
                                                                    
                                                                    echo "";
                                                                    
                                                                    }else { ?>
                                                                    
                                                                      <b>Salary : </b><span class="text-primary">₹</span><?php echo $row1['payperday']; ?>
                                                                    
                                                                    <?php
                                                                   
                                                                    }?>
                                                                    
                                                                </p>
                                                                 <span class="badge bg-danger-subtle text-danger fs-13 mt-1" id="recent_jobs3">Part Time</span>
                                                                <span class="badge bg-warning-subtle text-warning fs-13 mt-1" id="recent_jobs3">Urgent</span>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                       <div class="col-md-3">
                                                            <div class="text-center mb-4 mb-md-0">
                                                                <a href="parttimejob/candidate/candidate_login.php">
                                                                 
                                                                    
                                                               <?php
                                            $sql = "SELECT id FROM company_logo WHERE id = '101'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<div class="images">
<img src="companylogo/company_logo_<?php echo $row['id']; ?>.jpg" alt="Blob Image" width="100%" class="img-fluid3">
</div>
<?php
}
                                            ?>
                                                                    
                                                                    
                                                                    
                                                                    </a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                 
                                                        
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                                <div class="p-3 bg-light">
                                                    <div class="row">
                                                     
                                                        <!--end col-->
                                                        <div class="col-lg-9 col-md-5">
                                                            <div>
                                                                <p class="text-muted mb-0"><span class="text-muted fs-14 mb-0" id="recent_jobs3">
                                                                    
                                                              Contact Details : <?php echo $row1['number']; ?> &nbsp;&nbsp; - &nbsp;&nbsp; <?php echo $row1['mailid']; ?> 
                                                                   
                                                                </span>
                                                                     </p>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        
                                                           <?php if($row1['id'] != ''){ 
                                                                    
                                                                    ?>
                                                                    
                                                                     <div class="col-lg-3 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                <a href="parttimejob/candidate/candidate_login.php" data-bs-toggle="modal" id="recent_jobs3" class="primary-link"><b>Apply Now </b><i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                                    <?php
                                                                    
                                                                    }else { ?>
                                                        
                                                        <div class="col-lg-2 col-md-3">
                                                            <div class="text-start text-md-end">
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <?php
                                                                    }
                                                                    ?>
                                                        
                                                        
                                                        
                                                        
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                </div>
                                            </div>
                                            <!--end job-box-->
</div>
<?php
}


$con->close();
?>


                                            <!--<div class="text-center mt-4 pt-2">-->
                                            <!--    <a href="job-list.php" class="btn btn-primary">View More <i class="uil uil-arrow-right"></i></a>-->
                                            <!--</div>-->
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        <!--end full-time-tab-->
                                        
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END JOB-LIST -->
                    
                    
                    
                    
                    
                    
                    
<div class="">
<center id="recent_jobs2">Search By Job Title</center>

<br>
<div class="container">

    <div class="row g-4" style="background-color:#ccfaff;border-radius:20px !important;">
        
            <div class="col-md-6" style="padding-top:0px !important;">
                
                <img src="assets/images/process-1.png"  alt="process 1" class="img-fluid" style="height:250px !important; padding-left:100px;">
          <center>      <p style="font-size:12px !important;"><b>Discover jobs across popular roles</b>
<br>
Select a role and we'll show you relevant jobs for it!</p></center>
                
            </div>
        
        <div class="col-md-6" id="it_roles_title">
<div class="row g-4">
    
  <div class="d-grid gap-2 d-md-block text-center">
  <button onclick="function_it_non_it_title(1)" value="IT"  class="btn btn-primary btn-sm"  style="font-size:12px !important;padding: 0px 7px;" type="button">IT</button>
  <button onclick="function_it_non_it_title(2)"  value="NON-IT" class="btn btn-primary btn-sm"  style="font-size:12px !important;padding:0px 7px;"  type="button">NON-IT</button>
</div>
<br><br>

      <div class="col-md-4"> <a href="job-title.php?title=Full Stack Developer"><div class="p-3 border bg-light" id="p3borderbglight">Full Stack Developer</div></a>
    <br>
     <a href="job-title.php?title=Network Engineer"><div class="p-3 border bg-light" id="p3borderbglight">Network Engineer</div> </a>
    <br>
     <a href="job-title.php?title=Cybersecurity Analyst"> <div class="p-3 border bg-light" id="p3borderbglight">Cybersecurity</div></a>
    <br>
    <a href="job-title.php?title=Application engineer"><div class="p-3 border bg-light" id="p3borderbglight">Application engineer</div></a>
    </div>
    
    <br>
       <div class="col-md-4"><a href="job-title.php?title=Data Scientist"><div class="p-3 border bg-light" id="p3borderbglight">Data Scientist</div></a>
    <br>
     <a href="job-title.php?title=Cloud Architect"><div class="p-3 border bg-light" id="p3borderbglight">Cloud Architect</div></a>
 <br>
     <a href="job-title.php?title=IT Project Manager"><div class="p-3 border bg-light" id="p3borderbglight">IT Project Manager</div></a>
    <br>
    <a href="job-title.php?title=Recruiter"><div class="p-3 border bg-light" id="p3borderbglight">Recruiter</div></a>
    </div>
       <div class="col-md-4"><a href="job-title.php?title=Data Scientist"> <div class="p-3 border bg-light" id="p3borderbglight">Data Scientist</div></a>
    <br>
     <a href="job-title.php?title=DevOps Engineer"><div class="p-3 border bg-light" id="p3borderbglight">DevOps Engineer</div></a>
    <br>
     <a href="job-title.php?title=AI/Machine Learning"><div class="p-3 border bg-light" id="p3borderbglight">AI/Machine Learning</div></a>
    <br>
    <a href="job-title.php?title=Game developer"><div class="p-3 border bg-light" id="p3borderbglight">Game developer</div></a> </div> </div>
   
   <div class="text-center mt-4 pt-2"><a href="It-jobs-in-chennai.php" class="btn btn-primary btn-sm" id="recent_jobs3">View More <i class="uil uil-arrow-right"></i></a><br><br></div></div>

      <div class="col-md-6" style="display:none;" id="non_it_roles_title">
  <div class="row g-4">
  <div class="d-grid gap-2 d-md-block text-center">
  <button onclick="function_it_non_it_title(1)" value="IT"  class="btn btn-primary btn-sm" id="button1001" type="button">IT</button>
  <button onclick="function_it_non_it_title(2)"  value="NON-IT" class="btn btn-primary btn-sm" id="button1001" type="button">NON-IT</button>
</div>
<br><br>

      <div class="col-md-4"> <a href="job-title.php?title=Sales Representative"><div class="p-3 border bg-light" id="p3borderbglight">Sales</div> </a>
    <br>
     <a href="job-title.php?title=Human Resources"><div class="p-3 border bg-light" id="p3borderbglight">Human Resources</div></a>
      <br>
     <a href="job-title.php?title=Accountant"> <div class="p-3 border bg-light" id="p3borderbglight">Accountant</div> </a>
    <br>
     <a href="job-title.php?title=Business Analyst"> <div class="p-3 border bg-light" id="p3borderbglight">Business Analyst</div> </a> </div>
    <div class="col-md-4">
     <a href="job-title.php?title=Marketing Manager"><div class="p-3 border bg-light" id="p3borderbglight">Marketing Manager</div></a>
      <br>
     <a href="job-title.php?title=Project Manager"><div class="p-3 border bg-light" id="p3borderbglight">Project Manager</div> </a>
      <br>
     <a href="job-title.php?title=Executive Assistant"><div class="p-3 border bg-light" id="p3borderbglight">Executive Assistant</div></a>
     <br>
     <a href="job-title.php?title=Graphic Designer"><div class="p-3 border bg-light" id="p3borderbglight">Graphic Designer</div></a>
    </div> <div class="col-md-4">
     <a href="job-title.php?title=Teacher"><div class="p-3 border bg-light" id="p3borderbglight">Teacher</div> </a>
      <br>
     <a href="job-title.php?title=Healthcare"><div class="p-3 border bg-light" id="p3borderbglight">Healthcare</div></a>
      <br>
     <a href="job-title.php?title=Customer Service"><div class="p-3 border bg-light" id="p3borderbglight">Customer Service</div></a>
      <br>
     <a href="job-title.php?title=Photographer"><div class="p-3 border bg-light" id="p3borderbglight">Photographer</div></a>
    </div></div>

<div class="text-center mt-4 pt-2">
            <a href="non-it-jobs-in-chennai.php" class="btn btn-primary btn-sm" id="recent_jobs3">View More <i class="uil uil-arrow-right"></i></a><br><br>
                                            </div></div></div></div></div>
<br><br>
<center id="recent_jobs2">Search By Job Functions</center>

<div class=""><br>
<div class="container">

    <div class="row g-4" style="background-color:#ccfaff;border-radius:20px !important;">
        
            <div class="col-md-6" style="padding-top:0px !important;">
                
                <img src="images/background-image-2 (1).png" alt="process 2" class="img-fluid" style="height:250px !important;padding-left:30px">
          <center>      <p style="font-size:12px !important;"><b>Discover jobs across popular roles</b>
<br>
Select a role and we'll show you relevant jobs for it!</p></center>
                
            </div>
        
        <div class="col-md-6" id="it_roles_function">

<div class="row g-4">
    
  <div class="d-grid gap-2 d-md-block text-center">
  <button onclick="function_it_non_it_function(1)" value="IT"  class="btn btn-primary btn-sm" id="button1001" type="button">IT</button>
  <button onclick="function_it_non_it_function(2)"  value="NON-IT" class="btn btn-primary btn-sm" id="button1001" type="button">NON-IT</button>
</div>
 <div class="col-md-4">
    
      <a href="job-title.php?title=PHP"><div class="p-3 border bg-light" id="p3borderbglight">PHP Jobs</div></a>
    <br>
     <a href="job-title.php?title=.NET"> <div class="p-3 border bg-light" id="p3borderbglight">.NET Jobs</div></a>
    <br>
     <a href="job-title.php?title=C++"><div class="p-3 border bg-light" id="p3borderbglight">C++ Jobs</div></a>
    <br>
    <a href="job-title.php?title=Database"><div class="p-3 border bg-light" id="p3borderbglight">Database Jobs</div> </a></div>
    
       <div class="col-md-4">
     <a href="job-title.php?title=MySQL"><div class="p-3 border bg-light" id="p3borderbglight">MySQL Jobs</div></a>
    <br>
     <a href="job-title.php?title=Oracle"><div class="p-3 border bg-light" id="p3borderbglight">Oracle Jobs</div></a>
 <br>
     <a href="job-title.php?title=Perl"><div class="p-3 border bg-light" id="p3borderbglight">Perl Jobs</div></a>
    <br>
    <a href="job-title.php?title=SAP Basis"> <div class="p-3 border bg-light" id="p3borderbglight">SAP Basis Jobs</div></a></div>
       <div class="col-md-4">
     <a href="job-title.php?title=SAS"><div class="p-3 border bg-light" id="p3borderbglight">SAS Jobs</div></a>
    <br>
     <a href="job-title.php?title=Javascript"><div class="p-3 border bg-light" id="p3borderbglight">Javascript Jobs</div> </a>
    <br>
     <a href="job-title.php?title=Python "><div class="p-3 border bg-light" id="p3borderbglight">Python Jobs</div></a>
    <br>
    <a href="job-title.php?title=Java"><div class="p-3 border bg-light" id="p3borderbglight">Java Jobs</div></a></div>
     <div class="text-center mt-4 pt-2"><a href="it-functions-in-chennai.php" class="btn btn-primary btn-sm" style="font-size:.7rem !important;">View More <i class="uil uil-arrow-right"></i></a><br><br></div></div></div>
<br><br>
       <div class="col-md-6" style="display:none;" id="non_it_roles_function">
       
  <div class="row g-4">
      
  <div class="d-grid gap-2 d-md-block text-center">
  <button onclick="function_it_non_it_function(1)" value="IT"  class="btn btn-primary btn-sm"  style="font-size:12px  !important;padding:0px 7px;" type="button">IT</button>
  <button onclick="function_it_non_it_function(2)"  value="NON-IT" class="btn btn-primary btn-sm"  style="font-size:12px  !important;padding:0px 7px;"  type="button">NON-IT</button>
</div>
<br><br>

      <div class="col-md-4">
       <a href="job-title.php?title=Mathematical"><div class="p-3 border bg-light" id="p3borderbglight">Mathematical Jobs</div></a>
    <br>
     <a href="job-title.php?title=Photography"><div class="p-3 border bg-light" id="p3borderbglight">Photography Jobs</div></a>
      <br>
     <a href="job-title.php?title=Counselling"><div class="p-3 border bg-light" id="p3borderbglight">Counselling Jobs</div></a>
    <br>
     <a href="job-title.php?title=Music"><div class="p-3 border bg-light" id="p3borderbglight">Music Jobs</div></a></div>
    
    <div class="col-md-4">
     <a href="job-title.php?title=Telling"><div class="p-3 border bg-light" id="p3borderbglight">Telling Jobs</div> </a>
      <br>
     <a href="job-title.php?title=Journalism"><div class="p-3 border bg-light" id="p3borderbglight">Journalism Jobs</div></a>
      <br>
     <a href="job-title.php?title=Animation"><div class="p-3 border bg-light" id="p3borderbglight">Animation Jobs</div></a>
     <br>
     <a href="job-title.php?title=Baking"><div class="p-3 border bg-light" id="p3borderbglight">Baking Jobs</div></a>
    </div>
    <div class="col-md-4">
     <a href="job-title.php?title=Sales"><div class="p-3 border bg-light" id="p3borderbglight">Sales Jobs</div></a>
      <br>
     <a href="job-title.php?title=IT Recruitment"><div class="p-3 border bg-light" id="p3borderbglight">IT Recruitment Jobs</div></a>
      <br>
     <a href="job-title.php?title=Finance"><div class="p-3 border bg-light" id="p3borderbglight">Finance Jobs</div></a>
      <br>
     <a href="job-title.php?title=Income Tax"><div class="p-3 border bg-light" id="p3borderbglight">Income Tax Jobs</div></a></div>
    <div class="text-center mt-4 pt-2"> 
    <a href="non-it-functions-in-chennai.php" class="btn btn-primary btn-sm" style="font-size:12px !important;">View More <i class="uil uil-arrow-right"></i></a>
    <br><br>
    </div></div></div>

 </div>
</div></div>
                    <!-- START PROCESS -->
                    <section class="section" style="padding-bottom: 0px !important;padding-top:30px !important;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6" style="font-size:12px !important;">
                                    <div class="section-title me-5">
                                        <h6 class="title" style="font-size:14px !important;">How It Works</h6>
                                        <p class="text-muted">Post a job to tell us about your requirements. We'll quickly match you with the right set of candidates.</p>
                                        <div class="process-menu nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="margin-bottom: 0px !important;">
                                            <a class="nav-link active" id="v-pills-home-tab" style="margin-bottom: 0px !important;" data-bs-toggle="pill" href="" role="tab" aria-controls="v-pills-home" aria-selected="true">
                                                <div class="d-flex">
                                                    <div class="number flex-shrink-0">
                                                        1
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18"  style="font-size:14px !important;">Register an Account</h5>
                                                        <p class="text-muted mb-0">Register your organization and start using a variety of recruitment services, enabling a smooth recruitment experience.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="v-pills-profile-tab" style="margin-bottom: 0px !important;" data-bs-toggle="pill" href="" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                <div class="d-flex">
                                                    <div class="number flex-shrink-0">
                                                        2
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18" style="font-size:14px !important;">Post your Job</h5>
                                                        <p class="text-muted mb-0">Post your job Online and our team of experts would reach out to you to understand and work closely with you for your recruitment needs.</p>
                                                    </div>
                                                </div>
                                            </a>
                                            <a class="nav-link" id="v-pills-messages-tab" style="margin-bottom: 0px !important;" data-bs-toggle="pill" href="" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                                                <div class=" d-flex">
                                                    <div class="number flex-shrink-0">
                                                        3
                                                    </div>
                                                    <div class="flex-grow-1 text-start ms-3">
                                                        <h5 class="fs-18" style="font-size:14px !important;">Experience smooth Hiring</h5>
                                                        <p class="text-muted mb-0">Our team of experts and technicians ensure you witness a smooth hiring process based on your needs creating a excellent hiring experience.</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-lg-6">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            <center>
                                            <img src="assets/images/process-01.png" alt="process 3" class="img-fluid"  style="max-width: 70% !important;">
                                            </center>
                                        </div></div></div></div> <!--end row--></div><!--end container--></section>
                    <!-- END PROCESS -->

        <!-- START BLOG -->
                    <section class="section bg-light" id="recruitment_services" >
                        <div class="container" >
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <div class="section-title text-center mb-5" id="recruitment_services1">
                                        <h5 class="title mb-3" id="recruitment_services2">Recruitment Services</h5>
                                       
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                          
                            <div class="row" >
                                <div class="col-lg-3 col-md-6" >
                                    <div class="blog-box card p-2 mt-3" id="recruitment_services3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="assets/images/interviews.jpeg" alt="Interview" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                           
                                        </div>
                                        <div class="card-body" >
                                            <a href="interview.php" class="primary-link">
                                                <h6 id="recruitment_services4" class="fs-17">Interview Drive</h6>
                                            </a>
                                            <p class="text-muted" id="recruitment_services5">Our "interview drive" is a coordinated recruitment event to interview and hire multiple candidates efficiently.</p>


                                            <a href="interview.php" id="recruitment_services6" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-box card p-2 mt-3"  id="recruitment_services3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="assets/images/candidate screening.jpg" alt="candidate screening" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                           
                                        </div>
                                        <div class="card-body">
                                            <a href="candidate.php" class="primary-link">
                                                <h6 class="fs-17" id="recruitment_services4" >Candidate Screening</h6>
                                            </a>
                                            <p class="text-muted" id="recruitment_services5" >"Candidate screening" involves evaluating applicants' qualifications to identify the best fit for job positions.</p>
                                            <a href="candidate.php" id="recruitment_services6" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->

                                <div class="col-lg-3 col-md-6">
                                    <div class="blog-box card p-2 mt-3" id="recruitment_services3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="assets/images/talent.png" alt="Talent" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                          
                                        </div>
                                        <div class="card-body">
                                            <a href="talent.php" class="primary-link">
                                                <h6 class="fs-17" id="recruitment_services4" >Talent Pool </h6>
                                            </a>
                                            <p class="text-muted" id="recruitment_services5">"Talent pool development" involves nurturing and enhancing a diverse range of skilled individuals for organizational growth.</p>
                                            <a href="talent.php" id="recruitment_services6" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->
                                
                                 <div class="col-lg-3 col-md-6">
                                    <div class="blog-box card p-2 mt-3" id="recruitment_services3">
                                        <div class="blog-img position-relative overflow-hidden">
                                            <img src="assets/images/Recruitment automation.png" alt="Recruitment automation" class="img-fluid">
                                            <div class="bg-overlay"></div>
                                          
                                        </div>
                                        <div class="card-body">
                                            <a href="recuirement.php" class="primary-link">
                                                <h6 class="fs-17" id="recruitment_services4">Recruitment Automation</h6>
                                            </a>
                                            <p class="text-muted" id="recruitment_services5" >Recruitment automation" streamlines hiring processes, enhancing efficiency and effectiveness in candidate selection.</p>
                                            <a href="recuirement.php" id="recruitment_services6" class="form-text text-primary">Read more <i class="mdi mdi-chevron-right align-middle"></i></a>
                                        </div>
                                    </div><!--end blog-box-->
                                </div><!--end col-->
                            </div>
                         
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- END BLOG -->
                </div>
                <!-- End Page-content -->
                
<?php include('footer.php'); ?>
    <script src="index_js.js"></script>
                <!--end back-->
            </div>
            <!-- end main content-->
        </div>
        <!-- END layout-wrapper -->
    </body>
</html>
