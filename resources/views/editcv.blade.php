@extends ('master')
<link rel="stylesheet" href="plugins/bs-stepper/css/bs-stepper.min.css">
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12 mt-5">
      <h2>Craete Your CV</h2>
      <div id="stepper1" class="bs-stepper">
        <div class="bs-stepper-header">
          <div class="step" data-target="#test-l-1">
            <button type="button" class="btn step-trigger">
              <span class="bs-stepper-circle">1</span>
              <span class="bs-stepper-label">Basic Information</span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#test-l-2">
            <button type="button" class="btn step-trigger">
              <span class="bs-stepper-circle">2</span>
              <span class="bs-stepper-label">Work And Education</span>
            </button>
          </div>
          <div class="line"></div>
          <div class="step" data-target="#test-l-3">
            <button type="button" class="btn step-trigger">
              <span class="bs-stepper-circle">3</span>
              <span class="bs-stepper-label">Others</span>
            </button>
          </div>
        </div>
        <form action="{{ route('updatecv') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="bs-stepper-content">
            <div id="test-l-1" class="content">
              <div class="row">
              <div class="form-group col-md-6">
                  <label for="Image">Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="Image" name="Image" value="Images/{{$cv['image']}}">
                      <label class="custom-file-label" for="SelectImage">Select Image</label>
                    </div>
                  </div>
                </div>
                <div class="form-group col-md-6">
                  <label for="Category">Category</label>
                  <select class="form-control select" name="Category" id="Category">
                    @foreach($categories as $category)
                    <option value="{{ $category['id'] }}" selected>{{$category['name']}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="FirstName">First Name</label>
                  <input type="text" class="form-control" id="FirstName" name="FirstName" value="{{$cv['first_name']}}" placeholder="Enter First Name">
                </div>
                <div class="form-group col-md-6">
                  <label for="LastName">Last Name</label>
                  <input type="text" class="form-control" id="LastName" name="LastName" value="{{$cv['last_name']}}" placeholder="Enter Last Name">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="MobileNumber">Mobile Number</label>
                  <input type="Number" class="form-control" id="MobileNumber" name="MobileNumber" value="{{$cv['mobile_number']}}" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group col-md-6">
                  <label for="Email">Email</label>
                  <input type="Email" class="form-control" id="Email" name="Email" value="{{$cv['email']}}" placeholder="Enter Email">
                </div>
              </div>
              <div class="form-group">
                <label for="Addresss">Addresss</label>
                <input type="Text" class="form-control" id="Addresss" name="Addresss" value="{{$cv['address']}}" placeholder="Enter Addresss">
              </div>
              <button class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
            </div>
            <div id="test-l-2" class="content">
              <div class="form-group">
                <h2>Work Experience</h2>
                <div class="form-group work1">
                  <label for="JobTitle1">Job Title</label>
                  <input type="Text" class="form-control" id="JobTitle1" name="JobTitle1" value="{{$cv['job_title_1']}}" placeholder="Enter Job Title">
                  <label for="CompanyName1">Company Name</label>
                  <input type="Text" class="form-control" id="CompanyName1" name="CompanyName1" value="{{$cv['company_name_1']}}" placeholder="Enter Company Name">
                  <label for="Duration1">Duration</label>
                  <input type="Text" class="form-control" id="Duration1" name="Duration1" value="{{$cv['duration_1']}}" placeholder="Enter Duration">
                  <label for="Description1">Description</label>
                  <input type="Text" class="form-control" id="Description1" name="Description1" value="{{$cv['description_1']}}" placeholder="Enter Description">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveWork1">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group work2">
                  <h2>Work Experience 2</h2>
                  <label for="JobTitle1">Job Title</label>
                  <input type="Text" class="form-control" id="JobTitle2" name="JobTitle2" value="{{$cv['job_title_2']}}" placeholder="Enter Job Title">
                  <label for="CompanyName1">Company Name</label>
                  <input type="Text" class="form-control" id="CompanyName2" name="CompanyName2" value="{{$cv['company_name_2']}}" placeholder="Enter Company Name">
                  <label for="Duration2">Duration</label>
                  <input type="Text" class="form-control" id="Duration2" name="Duration2" value="{{$cv['duration_2']}}" placeholder="Enter Duration">
                  <label for="Description2">Description</label>
                  <input type="Text" class="form-control" id="Description2" name="Description2" value="{{$cv['description_2']}}" placeholder="Enter Description">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveWork2">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group work3">
                  <h2>Work Experience 3</h2>
                  <label for="JobTitle1">Job Title</label>
                  <input type="Text" class="form-control" id="JobTitle3" name="JobTitle3" value="{{$cv['job_title_3']}}" placeholder="Enter Job Title">
                  <label for="CompanyName1">Company Name</label>
                  <input type="Text" class="form-control" id="CompanyName3" name="CompanyName3" value="{{$cv['company_name_3']}}" placeholder="Enter Company Name">
                  <label for="Duration3">Duration</label>
                  <input type="Text" class="form-control" id="Duration3" name="Duration3" value="{{$cv['duration_3']}}" placeholder="Enter Duration">
                  <label for="Description3">Description</label>
                  <input type="Text" class="form-control" id="Description3" name="Description3" value="{{$cv['description_3']}}" placeholder="Enter Description">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveWork3">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group work4">
                  <h2>Work Experience 4</h2>
                  <label for="JobTitle1">Job Title</label>
                  <input type="Text" class="form-control" id="JobTitle4" name="JobTitle4" value="{{$cv['job_title_4']}}" placeholder="Enter Job Title">
                  <label for="CompanyName1">Company Name</label>
                  <input type="Text" class="form-control" id="CompanyName4" name="CompanyName4" value="{{$cv['company_name_4']}}" placeholder="Enter Company Name">
                  <label for="Duration4">Duration</label>
                  <input type="Text" class="form-control" id="Duration4" name="Duration4" value="{{$cv['duration_4']}}" placeholder="Enter Duration">
                  <label for="Description4">Description</label>
                  <input type="Text" class="form-control" id="Description4" name="Description4" value="{{$cv['description_4']}}" placeholder="Enter Description">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveWork4">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group work5">
                  <h2>Work Experience 5</h2>
                  <label for="JobTitle1">Job Title</label>
                  <input type="Text" class="form-control" id="JobTitle5" name="JobTitle5" value="{{$cv['job_title_5']}}" placeholder="Enter Job Title">
                  <label for="CompanyName1">Company Name</label>
                  <input type="Text" class="form-control" id="CompanyName5" name="CompanyName5" value="{{$cv['company_name_5']}}" placeholder="Enter Company Name">
                  <label for="Duration5">Duration</label>
                  <input type="Text" class="form-control" id="Duration5" name="Duration5" value="{{$cv['duration_5']}}" placeholder="Enter Duration">
                  <label for="Description5">Description</label>
                  <input type="Text" class="form-control" id="Description5" name="Description5" value="{{$cv['description_5']}}" placeholder="Enter Description">
                </div>
                <button class="btn btn-success" type="button" id="AddWork1">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddWork2">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddWork3">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddWork4">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddWork5">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-warning" type="button" id="RemoveWork5">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group">
                  <h2>Education</h2>
                </div>
                <div class="form-group Education1">
                  <label for="ExamName1">Exam Name</label>
                  <input type="Text" class="form-control" id="ExamName1" name="ExamName1" value="{{$cv['exam_name_1']}}" placeholder="Enter Exam Name">
                  <label for="InstitutionName1">Institution Name</label>
                  <input type="Text" class="form-control" id="InstitutionName1" name="InstitutionName1" value="{{$cv['institution_name_1']}}" placeholder="Enter Institution Name">
                  <label for="Bord1">Bord</label>
                  <select class="form-control select" name="Bord1" id="Bord1">
                    <option selected="selected">Select Bord</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Kumilla">Kumilla</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Maymonsing">Maymonsing</option>
                  </select>
                  <label for="Grade1">Grade</label>
                  <input type="Text" class="form-control" id="Grade1" name="Grade1" value="{{$cv['grade_1']}}" placeholder="Enter Grade">
                  <label for="PassingYear1">Passing Year</label>
                  <input type="Number" class="form-control" id="PassingYear1" name="PassingYear1" value="{{$cv['passing_year_1']}}" placeholder="Enter Passing Year">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveEducation1">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group Education2">
                  <h2>Education 2</h2>
                  <label for="ExamName2">Exam Name</label>
                  <input type="Text" class="form-control" id="ExamName2" name="ExamName2" value="{{$cv['exam_name_2']}}" placeholder="Enter Exam Name">
                  <label for="InstitutionName2">Institution Name</label>
                  <input type="Text" class="form-control" id="InstitutionName2" name="InstitutionName2" value="{{$cv['institution_name_2']}}" placeholder="Enter Institution Name">
                  <label for="Bord2">Bord</label>
                  <select class="form-control select" name="Bord2" id="Bord2">
                    <option selected="selected">Select Bord</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Kumilla">Kumilla</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Maymonsing">Maymonsing</option>
                  </select>
                  <label for="Grade2">Grade</label>
                  <input type="Text" class="form-control" id="Grade2" name="Grade2" value="{{$cv['grade_2']}}"  placeholder="Enter Grade">
                  <label for="PassingYear2">Passing Year</label>
                  <input type="Number" class="form-control" id="PassingYear2" name="PassingYear2" value="{{$cv['passing_year_2']}}" placeholder="Enter Passing Year">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveEducation2">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group Education3">
                  <h2>Education 3</h2>
                  <label for="ExamName3">Exam Name</label>
                  <input type="Text" class="form-control" id="ExamName3" name="ExamName3" value="{{$cv['exam_name_3']}}" placeholder="Enter Exam Name">
                  <label for="InstitutionName3">Institution Name</label>
                  <input type="Text" class="form-control" id="InstitutionName3" name="InstitutionName3" value="{{$cv['instution_name_3']}}" placeholder="Enter Institution Name">
                  <label for="Bord3">Bord</label>
                  <select class="form-control select" name="Bord3" id="Bord3">
                    <option selected="selected">Select Bord</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Kumilla">Kumilla</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Maymonsing">Maymonsing</option>
                  </select>
                  <label for="Grade3">Grade</label>
                  <input type="Text" class="form-control" id="Grade3" name="Grade3" value="{{$cv['grade_3']}}" placeholder="Enter Grade out of">
                  <label for="PassingYear3">Passing Year</label>
                  <input type="Number" class="form-control" id="PassingYear3" name="PassingYear3" value="{{$cv['passing_year_3']}}" placeholder="Enter Passing Year">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveEducation3">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group Education4">
                  <h2>Education 4</h2>
                  <label for="ExamName4">Exam Name</label>
                  <input type="Text" class="form-control" id="ExamName4" name="ExamName4" value="{{$cv['exam_name_4']}}" placeholder="Enter Exam Name">
                  <label for="InstitutionName4">Institution Name</label>
                  <input type="Text" class="form-control" id="InstitutionName4" name="InstitutionName4" value="{{$cv['institution_name_4']}}" placeholder="Enter Institution Name">
                  <label for="Bord4">Bord</label>
                  <select class="form-control select" name="Bord4" id="Bord4">
                    <option selected="selected">Select Bord</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Kumilla">Kumilla</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Maymonsing">Maymonsing</option>
                  </select>
                  <label for="Grade4">Grade</label>
                  <input type="Text" class="form-control" id="Grade4" name="Grade4" value="{{$cv['grade_4']}}" placeholder="Enter Grade out of">
                  <label for="PassingYear4">Passing Year</label>
                  <input type="Number" class="form-control" id="PassingYear4" name="PassingYear4" value="{{$cv['passing_year_4']}}" placeholder="Enter Passing Year">
                </div>
                <button class="btn btn-warning" type="button" id="RemoveEducation4">
                  <i class="fas fa-minus"></i>Remove
                </button>
                <div class="form-group Education5">
                  <h2>Education 5</h2>
                  <label for="ExamName5">Exam Name</label>
                  <input type="Text" class="form-control" id="ExamName5" name="ExamName5" value="{{$cv['exam_name_5']}}" placeholder="Enter Exam Name">
                  <label for="InstitutionName5">Institution Name</label>
                  <input type="Text" class="form-control" id="InstitutionName5" name="InstitutionName5" value="{{$cv['institution_name_5']}}" placeholder="Enter Institution Name">
                  <label for="Bord5">Bord</label>
                  <select class="form-control select" name="Bord5" id="Bord5">
                    <option selected="selected">Select Bord</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Dinajpur">Dinajpur</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Kumilla">Kumilla</option>
                    <option value="Chitagong">Chitagong</option>
                    <option value="Jashore">Jashore</option>
                    <option value="Maymonsing">Maymonsing</option>
                  </select>
                  <label for="Grade5">Grade</label>
                  <input type="Text" class="form-control" id="Grade5" name="Grade5" value="{{$cv['grade_5']}}" placeholder="Enter Grade out of">
                  <label for="PassingYear5">Passing Year</label>
                  <input type="Number" class="form-control" id="PassingYear5" name="PassingYear5" value="{{$cv['passing_year_5']}}" placeholder="Enter Passing Year">
                </div>
                <button class="btn btn-success" type="button" id="AddEducation1">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddEducation2">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddEducation3">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddEducation4">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-success" type="button" id="AddEducation5">
                  <i class="fas fa-plus"></i>Add
                </button>
                <button class="btn btn-warning" type="button" id="RemoveEducation5">
                  <i class="fas fa-minus"></i>Remove
                </button>
              </div>
              <button class="btn btn-primary" type="button" onclick="stepper1.previous()">Previous</button>
              <button class="btn btn-primary" type="button" onclick="stepper1.next()">Next</button>
            </div>
            <div id="test-l-3" class="content">
              <div class="form-group">
                <label for="Skills">Skills</label>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Skill1" name="Skill1" value="{{$cv['skill_1']}}" placeholder="Enter Skill name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="Ability1" id="Ability1">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Skill2" name="Skill2" value="{{$cv['skill_2']}}" placeholder="Enter Skill name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="Ability2" id="Ability2">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Skill3" name="Skill3" value="{{$cv['skill_3']}}" placeholder="Enter Skill name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="Ability3" id="Ability3">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Skill4" name="Skill4" value="{{$cv['skill_4']}}" placeholder="Enter Skill name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="Ability4" id="Ability4">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <label for="Languages">Languages</label>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Ln1" name="Ln1" value="{{$cv['ln_1']}}" placeholder="Enter Language name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="LnAb1" id="LnAb1">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Ln2" name="Ln2" value="{{$cv['ln_2']}}" placeholder="Enter Language name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="LnAb2" id="LnAb2">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="Ln3" name="Ln3" value="{{$cv['ln_3']}}" placeholder="Enter Language name">
                  </div>
                  <div class="form-group col-md-6">
                    <select class="form-control select" name="LnAb3" id="LnAb3">
                      <option selected="selected">Select Ability</option>
                      <option value="10">10 %</option>
                      <option value="20">20 %</option>
                      <option value="30">30 %</option>
                      <option value="40">40 %</option>
                      <option value="50">50 %</option>
                      <option value="60">60 %</option>
                      <option value="70">70 %</option>
                      <option value="80">80 %</option>
                      <option value="90">90 %</option>
                      <option value="100">100 %</option>
                    </select>
                  </div>
                </div>
                <label for="ExtraCurriculamActivities">Extra Curriculam Activities</label>
                <textarea class="form-control" id="ExtraCurriculamActivities" name="ExtraCurriculamActivities" value="{{$cv['extra_curriculam_activie']}}" placeholder="Enter Extra Curriculam Activities" cols="30" rows="3"></textarea>
                <label for="References">References</label>
                <textarea class="form-control" id="References" name="References" value="{{$cv['reference']}}" placeholder="Enter References" cols="30" rows="3"></textarea>
              </div>
              <button class="btn btn-primary" type="button" onclick="stepper1.previous()">Previous</button>
              <button class="btn btn-primary" type="submit">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  //line bar
  var stepper1Node = document.querySelector('#stepper1')
  var stepper1 = new Stepper(document.querySelector('#stepper1'))

  stepper1Node.addEventListener('show.bs-stepper', function(event) {
    console.warn('show.bs-stepper', event)
  })
  stepper1Node.addEventListener('shown.bs-stepper', function(event) {
    console.warn('shown.bs-stepper', event)
  })

  //show/hide work and education  
  $(document).ready(function() {
    $('#RemoveWork1').hide()
    $('#RemoveWork2').hide()
    $('#RemoveWork3').hide()
    $('#RemoveWork4').hide()
    $('#RemoveWork5').hide()
    $('#AddWork2').hide()
    $('#AddWork3').hide()
    $('#AddWork4').hide()
    $('#AddWork5').hide()
    $('.work1').hide()
    $('.work2').hide()
    $('.work3').hide()
    $('.work4').hide()
    $('.work5').hide()
    $('#AddWork1').on("click", function() {
      $(this).parent().find('.work1').show()
      $('#AddWork1').hide()
      $('#AddWork2').show()
      $('#RemoveWork1').show()
    })
    $('#AddWork2').on("click", function() {
      $(this).parent().find('.work2').show()
      $('#AddWork2').hide()
      $('#AddWork3').show()
      $('#RemoveWork2').show()
    })
    $('#AddWork3').on("click", function() {
      $(this).parent().find('.work3').show()
      $('#AddWork3').hide()
      $('#AddWork4').show()
      $('#RemoveWork3').show()
    })
    $('#AddWork4').on("click", function() {
      $(this).parent().find('.work4').show()
      $('#AddWork4').hide()
      $('#AddWork5').show()
      $('#RemoveWork4').show()
    })
    $('#AddWork5').on("click", function() {
      $(this).parent().find('.work5').show()
      $('#AddWork5').hide()
      $('#RemoveWork5').show()
    })
    $('#RemoveWork1').on("click", function() {
      $(this).parent().find('.work1').hide()
      $('#AddWork1').show()
      $('#AddWork2').hide()
      $('#RemoveWork1').hide()
    })
    $('#RemoveWork2').on("click", function() {
      $(this).parent().find('.work2').hide()
      $('#AddWork2').show()
      $('#AddWork3').hide()
      $('#RemoveWork2').hide()
    })
    $('#RemoveWork3').on("click", function() {
      $(this).parent().find('.work3').hide()
      $('#AddWork3').show()
      $('#AddWork4').hide()
      $('#RemoveWork3').hide()
    })
    $('#RemoveWork4').on("click", function() {
      $(this).parent().find('.work4').hide()
      $('#AddWork4').show()
      $('#AddWork5').hide()
      $('#RemoveWork4').hide()
    })
    $('#RemoveWork5').on("click", function() {
      $(this).parent().find('.work5').hide()
      $('#RemoveWork5').hide()
      $('#AddWork5').show()
      $('#AddWork1').hide()
    })

    $('.Education1').hide()
    $('.Education2').hide()
    $('.Education3').hide()
    $('.Education4').hide()
    $('.Education5').hide()
    $('#RemoveEducation1').hide()
    $('#RemoveEducation2').hide()
    $('#RemoveEducation3').hide()
    $('#RemoveEducation4').hide()
    $('#RemoveEducation5').hide()
    $('#AddEducation2').hide()
    $('#AddEducation3').hide()
    $('#AddEducation4').hide()
    $('#AddEducation5').hide()
    $('#AddEducation1').on("click", function() {
      $(this).parent().find('.Education1').show()
      $('#AddEducation1').hide()
      $('#AddEducation2').show()
      $('#RemoveEducation1').show()
    })
    $('#AddEducation2').on("click", function() {
      $(this).parent().find('.Education2').show()
      $('#AddEducation2').hide()
      $('#AddEducation3').show()
      $('#RemoveEducation2').show()
    })
    $('#AddEducation3').on("click", function() {
      $(this).parent().find('.Education3').show()
      $('#AddEducation3').hide()
      $('#AddEducation4').show()
      $('#RemoveEducation3').show()
    })
    $('#AddEducation4').on("click", function() {
      $(this).parent().find('.Education4').show()
      $('#AddEducation4').hide()
      $('#AddEducation5').show()
      $('#RemoveEducation4').show()
    })
    $('#AddEducation5').on("click", function() {
      $(this).parent().find('.Education5').show()
      $('#AddEducation5').hide()
      $('#RemoveEducation5').show()
    })
    $('#RemoveEducation1').on("click", function() {
      $(this).parent().find('.Education1').hide()
      $('#AddEducation1').show()
      $('#AddEducation2').hide()
      $('#RemoveEducation1').hide()
    })
    $('#RemoveEducation2').on("click", function() {
      $(this).parent().find('.Education2').hide()
      $('#AddEducation2').show()
      $('#AddEducation3').hide()
      $('#RemoveEducation2').hide()
    })
    $('#RemoveEducation3').on("click", function() {
      $(this).parent().find('.Education3').hide()
      $('#AddEducation3').show()
      $('#AddEducation4').hide()
      $('#RemoveEducation3').hide()
    })
    $('#RemoveEducation4').on("click", function() {
      $(this).parent().find('.Education4').hide()
      $('#AddEducation4').show()
      $('#AddEducation5').hide()
      $('#RemoveEducation4').hide()
    })
    $('#RemoveEducation5').on("click", function() {
      $(this).parent().find('.Education5').hide()
      $('#RemoveEducation5').hide()
      $('#AddEducation5').show()
      $('#AddEducation1').hide()
    })
  })
</script>
@endsection

<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bs-stepper/js/bs-stepper.min.js"></script>