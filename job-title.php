<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Careers In Chennai <?php if(isset($_GET['title']) && $_GET['title'] != '') {
    echo $_GET['title']; }
else {
    echo "Job Title";
}
?></title>
       
<?php
include('header.php');
?>

<style>
input::placeholder{
    font-size:10px !important;
}
    body{
         
font-size:12px !important;
    }
    .page-title-box{
background-color:#13a4d6 !important;
padding-top:10%;
padding-bottom: 5%;
}
#heading{
text-transform: none;
}
.position-relative{
z-index: 1;
}
#sections{
padding-top: 30px !important;
}
#choices-single-categories{
border-radius:3px !important;
}
.fs-13 {
     font-size: 12px; 
}
#span{
background-color:white !important;
border: none !important;
}
#button{
background-color:#A0DAEE;
}
#para{
    display:none;
}
                                         
    .pagination {
        display: flex;
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    .text-primary{
    
        color:#13a4d6 !important;
        /*padding:20px !important;*/
    }

    .pagination a {
        color: #007bff;
        text-decoration: none;
        padding: 8px 16px;
        border: 1px solid #007bff;
        margin-right: 5px;
        border-radius: 4px;
    }

    .pagination a:hover {
        background-color: #007bff;
        color: #fff;
    }

    .pagination .active {
        background-color: #007bff;
        color: #fff;
    }
    #line-content{
margin-top: 1rem !important;
}


.small, small{
    font-size:12px !important;
}
.fs-14 {
     font-size:12px !important;
}

@media only screen and (max-width: 320px) {
#img{
    width:15%;
    position: absolute;
    left:85%;
    top:-5px;
}
.primary-link{
    margin-left: 200px !important;
}
.mdi-chevron-double-right::before {
   
    margin-right: -40px;
   
}
#accordionExample{
        display:none;
    }

}

@media only screen and (max-width: 375px) {
#img{
    width:15%;
    position: absolute;
    left:85%;
    top:-5px;
}
.primary-link{
    margin-left: 200px;
}
.mdi-chevron-double-right::before {
   
    margin-right: -80px;
   
}
#accordionExample{
        display:none;
    }

}
@media only screen and (max-width: 425px) {
#img{
    width:15%;
    position: absolute;
    left:85%;
    top:-5px;
  
}
#accordionExample{
        display:none;
    }

.primary-link{
    margin-left: 200px !important;
}
.mdi-chevron-double-right::before {
   
    margin-right: -80px;
   
}
}

@media only screen and (max-width: 765px) {
#img{
    width:17%;
    position: absolute;
    left:80%;
    top:-5px;
}

#container1{
    margin-top:10%;
}
#accordionExample{
        display:none;
    }
}

@media only screen and (max-width: 768px) {
#img{
    width:17%;
    position: absolute;
    left:80%;
    top:-5px;
}

#container1{
    margin-top:10%;
}
/*.primary-link{*/
/*    padding:140px !important;*/
/*}*/
.primary-link{
    margin-left: 390px;
}

.mdi-chevron-double-right::before {
   
    margin-right: -80px;
   
}
#accordionExample{
        display:none;
    }
}

/**/
#button {
    font-size: 12px !important;

    padding: 3px !important;
}
.primary-link{
    padding:10px;
     
}

/**/
.p-4 {
    padding: 0rem !important;
    height:50px !important;
}
@media (min-width: 992px) {
    .col-lg-7 {
       
        width: 70.33333333%;
    }
}
@media only screen and (max-width: 768px) {
    #img {
        width: 17%;
        position: absolute;
        left: 80%;
        top: -5px;
    }
    #accordionExample{
        display:none;
    }
}


.text-dark {
    --bs-text-opacity: 1;
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
}
#filter{
       font-size:14px !important;
   }
   /*Style for search */
          
        .dropdown1000, .dropdown1002, .dropdown1003, .dropdown10022{
            font-size:12px;
            display: none;
            position: absolute;
            width: 100%;
            border: 1px solid #ccc;
            background-color: white;
            max-height: 150px;
            overflow-y: auto;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

/* Add this to your existing CSS */
.dropdown1000, .dropdown1002, .dropdown1003, .dropdown10022 {
    list-style-type: none; /* Removes bullets */
    padding: 0; /* Removes padding */
    margin: 0; /* Removes margin */
}
        .dropdown1000 li, .dropdown1002 li, .dropdown1003 li, .dropdown10022 li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdown1000 li:hover, .dropdown1002 li:hover, .dropdown1003 li:hover, .dropdown10022 li:hover {
            background-color: #f0f0f0;
        }
        
/*style for filter*/


.filler-job-form .choices__inner, .filter-job-input-box, .filter-job-input-box.form-select {
    padding:10px !important;
}
</style>

    </head>

    <body>                  
            <div class="main-content">

                <div class="page-content">

                    <!-- Start home -->
                    <section class="page-title-box" style="padding-top:100px; padding-bottom:0px !important;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="text-center text-white"><br>
                                        <h1 class="mb-4" style="font-size:12px;">SEARCH JOBS</h1>
                                        <div class="page-next">
                                            <nav class="d-inline-block" aria-label="breadcrumb text-center">
                                                <ol class="breadcrumb justify-content-center">
                                                    <li class="breadcrumb-item"><a href="index.php" id="heading" style="font-size:12px;">Home</a></li>
                                                    <li class="breadcrumb-item"><a href="javascript:void(0)" id="heading" style="font-size:12px;">Search Jobs</a></li>
                                                   
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                            <!--end row-->
                        </div>
                        <!--end container-->
                    </section>
                    <!-- end home -->

                    <!-- START SHAPE -->
                    <div class="position-relative" >
                        <div class="shape">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                                <path fill="" fill-opacity="1"
                                    d="M0,192L120,202.7C240,213,480,235,720,234.7C960,235,1200,213,1320,202.7L1440,192L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
                            </svg>
                        </div>
                    </div>
                    <!-- END SHAPE -->




                    <!-- START JOB-LIST -->
                    <section class="section" id="sections">
                        <div class="container" >
                            <div class="row">





                                <div class="col-lg-12" >
                                    <div class="me-lg-5">
                                        <div class="job-list-header">
                                              <form id="filter-form" action="job-title.php" method="GET">
                                                <div class="row g-2">
                                                    
                                                    
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="filler-job-form">
                                            
                <!--COMPANY NAME-->
        <!--<i class="uil uil-briefcase-alt" style="margin-bottom:70px !important;"></i>-->
        <input type="text" id="search-bar" name="company_name"  class="search-box form-control filter-job-input-box" style="font-size:10px !important;" placeholder="Company name...">
        <ul id="dropdown1000" class="dropdown1000"></ul>
                                                        </div>
                                                    </div>
                                                        <!--LOCATION-->
                                                        <div class="col-lg-3 col-md-6" >
                                                        <div class="filler-job-form">
                                                            <!--<i class="uil uil-location-point"></i>-->
                                                         
                   <input type="text" id="search-bar2" name="choices-single-locationchoices-single-location"  class="search-box form-control filter-job-input-box" style="font-size:10px !important;" placeholder="Location...">
                    <ul id="dropdown1002" class="dropdown1002"></ul>                      
                                                            
                                                        </div>
                                                    </div><!--end col-->
                                                        
                                                        
                                                        <!--POSITION NAME-->
                                                        
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="filler-job-form">
                                                                <!--<div class="input-group">-->
                                                                   
                                                                        <!--<span class="input-group-text" id="span">-->
                                                                            <!--<i class="uil uil-clipboard-notes"></i>-->
                                                                    
                                                        <input type="text" id="search-bar3" name="title"  class="search-box form-control filter-job-input-box" style="font-size:10px !important;" placeholder="Position name...">
                                                        <ul id="dropdown1003" class="dropdown1003"></ul>

                                                        
   
                                                                    
                                                                <!--</div>-->
                                                            </div>
                                                        </div><!--end col-->

                                                    <div class="col-lg-3 col-md-6">
                                                        <button type="submit"  class="btn btn-primary submit-btn w-100 h-55" style="height:40px;padding:0px !important;"><i class="uil uil-search me-1"></i> Search</button>
                                                    
                                                      
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </form>
                                        </div>

<!--end job-list-header-->

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



                    <!-- START JOB-LIST -->
                
        
                            <div class="row">
                                
                                                                

<div class="col-lg-2">
    <hr>
    <center id="filter1"><h5 class="accordion-header" id="filter" onclick="toggleElement()"><i class="uil uil-filter"></i> Filters</h5></center>
                                    <div class="side-bar mt-5 mt-lg-0">
                                        <div class="accordion" id="accordionExample">
                                           
                                            <div class="accordion-item mt-4">   
                                            <h6 class="accordion-header" id="experienceOne">
                                                <button class="accordion-button" type="button" style="padding:4px !important;font-size:12px !important;" id="button"data-bs-toggle="collapse" data-bs-target="#experience" aria-expanded="true" aria-controls="experience">
                                                   Work experience
                                                </button>
                                            </h6>
                                     
                                            <div id="experience" class="accordion-collapse collapse" aria-labelledby="experienceOne">
                                                <div class="accordion-body">
                                                    <div class="side-title">
                                                               <form id="myForm" action="job-title.php">
                                                        <div class="form-check mt-2">
                                                            <input id="para" type="text" name="company_name" value="<?php if(isset($_GET['company_name']) && $_GET['company_name'] != '') { echo $_GET['company_name']; } else { echo ""; }?>" >
                                                            <input id="para" type="text" name="choicessinglecategories" value="<?php if(isset($_GET['choicessinglecategories']) && $_GET['choicessinglecategories'] != '') { echo $_GET['choicessinglecategories']; }  else { echo ""; } ?>" >
                                                            <input id="para" type="text" name="choices-single-location" value="<?php if(isset($_GET['choices-single-location']) && $_GET['choices-single-location'] != '') { echo $_GET['choices-single-location']; } else { echo ""; }?>" >
                                                                            <input id="para" type="text" name="title" value="<?php if(isset($_GET['title']) && $_GET['title'] != '') { echo $_GET['title']; } else { echo ""; }?>">
                                                            <input class="form-check-input" type="radio" value="0" id="flexCheckChecked1" name="experience" onclick="submitForm()" <?php if (isset($_GET['experience']) && $_GET['experience'] == '0') { echo "Checked"; } else{ echo ""; } ?> />
                                                            <label class="form-check-label ms-2 text-muted" for="flexCheckChecked1" style="font-size:12px !important;">No experience</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="radio" value="3" id="flexCheckChecked2" name="experience" onclick="submitForm()" <?php if (isset($_GET['experience']) && $_GET['experience'] == '3') { echo "Checked"; } else{ echo ""; } ?> />
                                                            <label class="form-check-label ms-2 text-muted" for="flexCheckChecked2" style="font-size:12px !important;">0-3 years</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="radio" value="6" id="flexCheckChecked3" name="experience" onclick="submitForm()" <?php if (isset($_GET['experience']) && $_GET['experience'] == '6') { echo "Checked"; } else{ echo ""; } ?> />
                                                            <label class="form-check-label ms-2 text-muted" for="flexCheckChecked3" style="font-size:12px !important;">3-6 years</label>
                                                        </div>
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="radio" value="9" id="flexCheckChecked4" name="experience"  onclick="submitForm()" <?php if (isset($_GET['experience']) && $_GET['experience'] == '9') { echo "Checked"; } else{ echo ""; } ?> />
                                                            <label class="form-check-label ms-2 text-muted" for="flexCheckChecked4" style="font-size:12px !important;">More than 6 years</label>
                                                        </div>
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                          
                                            </div><!-- end accordion-item -->
                                    
                                            <div class="accordion-item mt-3">
                                                <h6 class="accordion-header" id="datePosted">
                                                    <button class="accordion-button"  style="padding:4px !important;font-size:12px !important;" id="button" type="button" data-bs-toggle="collapse"  data-bs-target="#dateposted" aria-expanded="false" aria-controls="dateposted">
                                                       Date Posted
                                                    </button>
                                                </h6>
                                                <div id="dateposted" class="accordion-collapse collapse" aria-labelledby="datePosted">
                                                    <div class="accordion-body">
                                                        <div class="side-title form-check-all">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" id="checkAll" value="" name="datePosted" onclick="submitForm()" <?php if (isset($_GET['datePosted']) && $_GET['datePosted'] == '') { echo "Checked"; } else{ echo ""; } ?> />
                                                                <label class="form-check-label ms-2 text-muted" for="checkAll" style="font-size:12px !important;">
                                                                    All
                                                                </label>
                                                            </div>
                                                       
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="radio" name="datePosted" value="1"    id="flexCheckChecked6" onclick="submitForm()" <?php if (isset($_GET['datePosted']) && $_GET['datePosted'] == '1') { echo "Checked"; } else{ echo ""; } ?> />
                                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked6" style="font-size:12px !important;">
                                                                    Last 24 hours
                                                                </label>
                                                            </div>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="radio" name="datePosted" value="7"   id="flexCheckChecked7" onclick="submitForm()" <?php if (isset($_GET['datePosted']) && $_GET['datePosted'] == '7') { echo "Checked"; } else{ echo ""; } ?> />
                                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked7" style="font-size:12px !important;">
                                                                    Last 7 days
                                                                </label>
                                                            </div>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="radio" name="datePosted" value="14"   id="flexCheckChecked8" onclick="submitForm()" <?php if (isset($_GET['datePosted']) && $_GET['datePosted'] == '14') { echo "Checked"; } else{ echo ""; } ?> />
                                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked8" style="font-size:12px !important;">
                                                                    Last 14 days
                                                                </label>
                                                            </div>
                                                            <div class="form-check mt-2">
                                                                <input class="form-check-input" type="radio" name="datePosted" value="30"  id="flexCheckChecked9"  onclick="submitForm()" <?php if (isset($_GET['datePosted']) && $_GET['datePosted'] == '30') { echo "Checked"; } else{ echo ""; } ?> />
                                                                <label class="form-check-label ms-2 text-muted" for="flexCheckChecked9" style="font-size:12px !important;">
                                                                    Last 30 days
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end accordion-item -->
                                    
                                    
                                           </form>
                                    
                                    
                                    
                                    <script>
document.addEventListener("DOMContentLoaded", function() {
    var checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            document.getElementById("myForm").submit();
        });
    });
});

</script>



                                            <div class="accordion-item mt-3">
                                                <h2 class="accordion-header" id="tagCloud">
                                                    <button class="accordion-button"  style="padding:4px !important;font-size:12px !important;" id="button" type="button" data-bs-toggle="collapse"  data-bs-target="#tagcloud" aria-expanded="false" aria-controls="tagcloud">
                                                   Tags Cloud
                                                    </button>
                                                </h2>
                                                <div id="tagcloud" class="accordion-collapse collapse " aria-labelledby="tagCloud">
                                                    <div class="accordion-body">
                                                        <div class="side-title">
                                                            <a href="javascript:void(0)" class="badge tag-cloud fs-13 mt-2" style="font-size:12px !important;">design</a>
                                                            <a href="javascript:void(0)" class="badge tag-cloud fs-13 mt-2" style="font-size:12px !important;">marketing</a>
                                                            <a href="javascript:void(0)" class="badge tag-cloud fs-13 mt-2" style="font-size:12px !important;">business</a>
                                                            <a href="javascript:void(0)" class="badge tag-cloud fs-13 mt-2" style="font-size:12px !important;">developer</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- end accordion-item -->
                                    
                                        </div><!--end accordion-->
                                        
                                    </div><!--end side-bar-->
                                </div>
                              



                                <div class="col-lg-8" >
                                    <div class="me-lg-5">
                                        <div class="job-list-header">
                                           
                                           
                                           
                                        </div><!--end job-list-header-->
                                      
                                        <!-- Job-list -->
                                        <div >
                                            
                                  <?php         
                            
require('db.php');

// Set the number of job postings per page
$postsPerPage = 15;

// Get the current page number from the URL, default to 1 if not set
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the offset based on the current page and posts per page
$offset = ($page - 1) * $postsPerPage;

$current_date = date('Y-m-d');
$datePosted = isset($_GET['datePosted']) && $_GET['datePosted'] != '' ? $_GET['datePosted'] : "30";
$experience = isset($_GET['experience']) ? $_GET['experience'] : '';
$company_name = isset($_GET['company_name']) ? $_GET['company_name'] : '';
$title = isset($_GET['title']) ? $_GET['title'] : '';
$choicessinglecategories = isset($_GET['choicessinglecategories']) ? $_GET['choicessinglecategories'] : '';

// Base query
$query = "SELECT * FROM job_posting WHERE upload_date >= DATE_SUB(?, INTERVAL ? DAY) AND upload_date <= ?";

// Add conditions based on filters
$params = [$current_date, $datePosted, $current_date];
$types = "sss";

if (!empty($choicessinglecategories)) {
    $query .= " AND posting_title LIKE ?";
    $params[] = '%' . $choicessinglecategories . '%';
    $types .= "s";
}

if (!empty($company_name)) {
    $query .= " AND company_name LIKE ?";
    $params[] = '%' . $company_name . '%';
    $types .= "s";
}

if (!empty($title)) {
    $query .= " AND posting_title LIKE ?";
    $params[] = '%' . $title . '%';
    $types .= "s";
}

if (!empty($experience)) {
    $query .= " AND work_experience_mini IS NOT NULL AND work_experience_mini <= ?";
    $params[] = $experience;
    $types .= "s";
}

// Append order and limit
$query .= " ORDER BY RAND() LIMIT ?, ?";
$params[] = $offset;
$params[] = $postsPerPage;
$types .= "ii";

// Prepare and execute the statement
$stmt = $con->prepare($query);
$stmt->bind_param($types, ...$params);
$stmt->execute();
$result = $stmt->get_result();

while ($row1 = $result->fetch_assoc()) {

?>
            
                                            
                                            <div class="job-box bookmark-post card mt-5" id="line-content"><br>
                                                <div class="p-4" >
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <a href="<?php echo $row1['external_link']; ?>">
                                                           <?php
                                            $sql11 = "SELECT logo FROM company_logo WHERE id = '$row1[external_tag]'";
$result11 = $con->query($sql11);

if ($result11->num_rows > 0) {
    
    $row111 = $result11->fetch_assoc();
    
    ?>
    <div class="images">
    <img src="companylogo/<?php echo $row111['logo']; ?>" alt="Blob Image" width="100%" class="img-fluid2">
</div>
<?php
}
                                            ?>      
                                                                
                                                        <?php
//                                             $sql11 = "SELECT company_logo FROM company_logo WHERE id = '$row1[external_tag]'";
// $result11 = $con->query($sql11);

// if ($result11->num_rows > 0) {
//     $row111 = $result11->fetch_assoc();
//     $imageData = $row111['company_logo'];

//     // Convert blob data to base64-encoded data URI
//     $base64Image = base64_encode($imageData);
//     $dataUri = "data:image/jpeg;base64," . $base64Image;

//     // Display the image using img tag
//     echo "<img src='$dataUri' alt='Blob Image' width='120%' style='padding-left:15px;'' id='img'>";
// }
                                           ?>
                                                                
                                                                
                                                                </a>
                                                        </div><!--end col-->
                                                        <div class="col-lg-10">
                                                            <div class="mt-3 mt-lg-0">
                                                                <h6 class="fs-17 mb-1" id="designation_name" ><a href="<?php echo $row1['external_link']; ?>" class="text-dark" style="font-size:14px !important;"><?php echo ucfirst($row1['posting_title']); ?></a> <small class="text-muted fw-normal">
                                                                    
                                                                    
                                                                    
                                                                    
                                                                  
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    </small></h6>
                                                                <ul class="list-inline mb-0">
                                                                    <li class="list-inline-item">
                                                                        <p class="text-muted fs-14 mb-0"><?php echo ucfirst($row1['company_name']); ?></p>
                                                                    </li>
                                                                   
                                                                    <!--<li class="list-inline-item">-->
                                                                    <!--    <p class="text-muted fs-14 mb-0"><i class="uil uil-wallet"></i> $250 - $800 / month</p>-->
                                                                    <!--</li>-->
                                                                </ul>
                                                                  <?php
                                                                    if($row1['work_experience_mini'] == 'NULL'){ 
                                                                        echo " ";
                                                                    }elseif($row1['work_experience_maxi'] == 'NULL'){
                                                                    ?>
                                                                    
                                                                    Experience : <?php echo $row1['work_experience_mini']; ?>
                                                                    
                                                                    <?php
                                                                    }else{
                                                                         ?> 
                                                                    Experience : <?php echo $row1['work_experience_mini']; ?> - <?php echo $row1['work_experience_maxi']; ?> Years
                                                                   
                                                                  
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                     <li class="list-inline-item">
                                                                        <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i><?php echo $row1['city']; ?></p>
                                                                    </li>
                                                                <!--<div class="mt-2"  style="font-size:12px;">-->
                                                                <!--    <span class="badge bg-success-subtle text-success  mt-1" style="font-size:12px;padding:2px !important;">Full Time</span>-->
                                                                    <!--<span class="badge bg-warning-subtle text-warning  mt-1">Urgent</span>-->
                                                                <!--    <span class="badge bg-info-subtle text-info  mt-1"  style="font-size:12px;padding:2px !important;">Private</span>-->
                                                                <!--    Job Posted: <?php echo $row1['upload_date']; ?>-->
                                                                <!--</div>-->
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                    <!--<div class="favorite-icon">-->
                                                    <!--    <a href="javascript:void(0)"><i class="uil uil-heart-alt fs-18"></i></a>-->
                                                    <!--</div>-->
                                                </div>
                                                
                                                <!--<div class="p-3 bg-light" >-->
                                                    <div class="row justify-content-between">
                                                        <div class="col-md-8">
                                                            <div  style="font-size:12px !important;">
                                                                
                                                                 <?php if($row1['required_skills'] == 'NULL'){ 
                                                                    
                                                                    echo "";
                                                                    
                                                                    }else { ?>
                                                                    <br><br>
                                                                      <span class="text-primary"  style="padding:10px;font-size:11px !important">Skills: </span><?php  echo $row1['required_skills']; ?>
                                                                    
                                                                    <?php
                                                                   
                                                                    }?>
                                                                   
                                                                <!--<ul class="list-inline mb-0">-->
                                                                <!--    <li class="list-inline-item"><i class="uil uil-tag"></i> Keywords :</li>-->
                                                                <!--    <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">Ui designer</a>,</li>-->
                                                                <!--    <li class="list-inline-item"><a href="javascript:void(0)" class="primary-link text-muted">developer</a></li>-->
                                                                <!--</ul>-->
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                        <div class="col-md-3">
                                                            <div class="text-md-end">
                                                                <br>
                                                                <a href="<?php echo $row1['external_link']; ?>" class="primary-link"  style="font-size:11px;padding:0px;">Apply Now  <i class="mdi mdi-chevron-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--end col-->
                                                    </div>
                                                    <!--end row-->
                                                <!--</div>-->
                                            </div>
                                            <!--end job-box-->

                    <?php
}
?>


   
                                           
                                        </div>

                                        <!-- End Job-list -->



                                        <div class="row">
                                            <div class="col-lg-12 mt-4 pt-2">
                                                
                    <nav aria-label="Page navigation example">
<?php
$current_date = date('Y-m-d');
$datePosted = isset($_GET['datePosted']) && $_GET['datePosted'] !== '' ? $_GET['datePosted'] : 30;
$experience = isset($_GET['experience']) ? trim($_GET['experience']) : '';
$category = isset($_GET['choicessinglecategories']) ? trim($_GET['choicessinglecategories']) : '';
$company_name = isset($_GET['company_name']) ? trim($_GET['company_name']) : '';
$title = isset($_GET['title']) ? trim($_GET['title']) : '';

$totalPostsQuery = "SELECT COUNT(*) AS total FROM job_posting WHERE 
                     upload_date >= DATE_SUB(?, INTERVAL ? DAY) 
                     AND upload_date <= ? 
                     AND work_experience_mini IS NOT NULL";

$conditions = [];
$params = [$current_date, $datePosted, $current_date];

if ($experience !== '') {
    $conditions[] = "work_experience_mini LIKE ?";
    $params[] = '%' . $experience . '%';
    $conditions[] = "work_experience_mini <= ?";
    $params[] = $experience;
}

if ($category !== '') {
    $conditions[] = "posting_title LIKE ?";
    $params[] = '%' . $category . '%';
}

if ($company_name !== '') {
    $conditions[] = "company_name LIKE ?";
    $params[] = '%' . $company_name . '%';
}

if ($title !== '') {
    $conditions[] = "posting_title LIKE ?";
    $params[] = '%' . $title . '%';
}

if (count($conditions) > 0) {
    $totalPostsQuery .= ' AND ' . implode(' AND ', $conditions);
}

// Prepare and execute the statement
$stmt = $con->prepare($totalPostsQuery);
$stmt->bind_param(str_repeat('s', count($params)), ...$params);
$stmt->execute();
$totalPostsResult = $stmt->get_result();
$totalPosts = $totalPostsResult->fetch_assoc()['total'];

// Determine the total number of pages
$totalPages = ceil($totalPosts / $postsPerPage);
$showPages = 4;

echo '<style>
.pagination a {
    background-color: white;
    text-decoration: none;
    color: black;
    padding: 8px 12px;
    border: 1px solid #ddd;
    margin: 2px;
    border-radius: 4px;
}
.pagination a:hover {
    background-color: #ddd;
}
.pagination .current {
    background-color: #13a4d6;
    color: white;
    text-decoration: none;
    padding: 8px 12px;
    border: 1px solid #ddd;
    margin: 2px;
    border-radius: 4px;
}
</style>';

// Calculate start and end pages based on the current page
$startPage = max(1, $page - $showPages);
$endPage = min($totalPages, $page + $showPages);

echo '<div class="pagination">';

// Display an arrow to navigate to the previous set of pages
if ($startPage > 1) {
    echo '<a href="?page=' . max(1, $startPage - $showPages) . '">&laquo;</a>';
}

// Display page links
for ($i = $startPage; $i <= $endPage; $i++) {
    if ($i == $page) {
        echo '<span class="current">' . $i . '</span>';
    } else {
        $queryString = http_build_query(array_filter([
            'choicessinglecategories' => $category,
            'company_name' => $company_name,
            'title' => $title,
            'page' => $i
        ]));

        echo '<a href="?' . $queryString . '">' . $i . '</a>';
    }
}

// Display an arrow to navigate to the next set of pages
if ($endPage < $totalPages) {
    echo '<a href="?page=' . min($totalPages, $endPage + $showPages) . '">&raquo;</a>';
}

echo '</div>';
?>
</nav>
<br>

<?php
$current_date = date('Y-m-d');

$sql = "SELECT COUNT(id) FROM job_posting WHERE 
        upload_date >= DATE_SUB(?, INTERVAL ? DAY) 
        AND upload_date <= ? 
        AND work_experience_mini IS NOT NULL";

$params = [$current_date, $datePosted, $current_date];

if ($experience !== '') {
    $sql .= " AND work_experience_mini LIKE ?";
    $params[] = '%' . $experience . '%';
}

if ($category !== '') {
    $sql .= " AND posting_title LIKE ?";
    $params[] = '%' . $category . '%';
}

if ($company_name !== '') {
    $sql .= " AND company_name LIKE ?";
    $params[] = '%' . $company_name . '%';
}

if ($title !== '') {
    $sql .= " AND posting_title LIKE ?";
    $params[] = '%' . $title . '%';
}

// Prepare and execute the statement
$stmt = $con->prepare($sql);
$stmt->bind_param(str_repeat('s', count($params)), ...$params);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Overall result: " . $row['COUNT(id)'];
}
?>

                        
                                        
                                        
                                    </div>

                                </div>
                             

</div>
</div>
<!-- START SIDE-BAR -->
<div class="col-lg-2" id="side-banner">
    <?php
    require('job-seeker-banner.php');
    ?>
</div>
  
                                
        
                                <!-- END SIDE-BAR -->
                         </div>
                        </div>
                    </section>
                    <!-- END JOB-LIST -->




<script>
function toggleElement() {
  var element = document.getElementById("accordionExample");
  if (element.style.display === "none") {
    element.style.display = "block";
  } else {
    element.style.display = "none";
  }
}
</script>



                </div>
                <!-- End Page-content -->

           

            
<?php
include('footer.php');

    $con->close();
?>
      

                
                <!--end back-to-top-->
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
 

    </body>
</html>