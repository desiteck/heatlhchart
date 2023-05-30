<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <!-- Meta -->
    <meta name="description" content="Health Chart.">
    <meta name="health" content="Health">

    <title>Protein Assesment</title>

    <!-- vendor css -->
    <link href="./support/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- <link href="./support/ionicons/css/ionicons.min.css" rel="stylesheet"> -->
    <link href="./support/highlightjs/styles/github.css" rel="stylesheet">
    <link href="./support/select2/css/select2.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="./support/bracket.css">
  </head>

  <body>
  <div class="br-pagebody">
        <div class="br-section-wrapper">
            <!-- <div class="row">
            <div class="col-lg-6">
          <h6 class="br-section-label">Protein Required</h6>
          <p class="br-section-text idealproteinRquired">69 GM</p>
          </div>
           <div class="col-lg-6">
            <h6 class="br-section-label">Ideal Weight</h6>
          <p class="br-section-text idealweight">69 Kg</p>
          </div>
          </div>-->
          <div class="form-layout form-layout-1">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="name" name="name" value="" placeholder="Enter Name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-groug mg-b-10-force">
                  <label class="form-control-label">Gender: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="gender" name='gender' data-placeholder="Choose Gender">
                    <option label="Choose Gender"></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Calculate For: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="optional" name='optional' data-placeholder="Calculate For">
                    <option label="Calculate For"></option>
                    <option value="Adult">Adult</option>
                    <option value="Children">Children</option>
                    <option value="Pregnant">Pregnant</option>
                    <option value="Lactating">Lactating</option>
                  </select>
                </div>
              </div><!-- col-4 -->  
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Age: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="age"  name="age" value="" placeholder="Enter Age">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Height: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="height" type="text" name="height" value="" placeholder="Enter height cm">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Weight: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" id="weight" name="weight" value="" placeholder="Enter Weight Kg">
                </div>
              </div><!-- col-4 --> 
               <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Activity: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="activity" name='activity' data-placeholder="Choose Activity">
                    <option label="Choose Activity"></option>
                    <option value="1">Sedentary-Little or No Exercise</option>
                    <option value="2">Light 1-3 time/week</option>
                    <option value="3">Moderate 4-5 time/week</option>
                    <option value="4">Very Active 6-7 time/week</option>
                    <option value="5">Intense – hard daily exercise/sports</option>
                  </select>
                </div>
              </div><!-- col-4 -->    
            </div><!-- row -->
            <div class='row'>
                <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Bread<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="bread">
                         <input type="number" step="1" max="10" value="0" id="bread" name="bread" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="bread">
                      </div>
                   </div>
                </div>
                <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Oats(100gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="oats">
                         <input type="number" step="1" max="10" value="0" id="oats" name="oats" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="oats">
                      </div>
                   </div>
                </div>
                <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Roti(35gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="roti">
                         <input type="number" step="1" max="10" value="0" id="roti" name="roti" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="roti">
                      </div>
                   </div>
                </div>
                <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Idly<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="idly">
                         <input type="number" step="1" max="10" value="0" id="idly" name="idly" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="idly">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Dosa(Plain)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="dosa">
                         <input type="number" step="1" max="10" value="0" id="dosa" name="dosa" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="dosa">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Milk(200ml)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="milk">
                         <input type="number" step="1" max="10" value="0" id="milk" name="milk" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="milk">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Pratha(50gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="pratha">
                         <input type="number" step="1" max="10" value="0" id="pratha" name="pratha" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="pratha">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Puri<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="puri">
                         <input type="number" step="1" max="10" value="0" id="puri" name="puri" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="puri">
                      </div>
                   </div>
                </div>
                
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Corn(100gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="corn">
                         <input type="number" step="1" max="10" value="0" id="corn" name="corn" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="corn">
                      </div>
                   </div>
                </div> <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Dal(75gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="dal">
                         <input type="number" step="1" max="10" value="0" id="dal" name="dal" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="dal">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Sambar(100gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="sambar">
                         <input type="number" step="1" max="10" value="0" id="sambar" name="sambar" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="sambar">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Vegitable<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="vegi">
                         <input type="number" step="1" max="10" value="0" id="vegi" name="vegi" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="vegi">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Fish(50gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="fish">
                         <input type="number" step="1" max="10" value="0" id="fish" name="fish" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="fish">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Dahi(75gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="dahi">
                         <input type="number" step="1" max="10" value="0" id="dahi" name="dahi" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="dahi">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Kichri<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="kichri">
                         <input type="number" step="1" max="10" value="0" id="kichri" name="kichri" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="kichri">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Chicken(1pc)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="chicken">
                         <input type="number" step="1" max="10" value="0" id="chicken" name="chicken" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="chicken">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Egg<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="egg">
                         <input type="number" step="1" max="10" value="0" id="egg" name="egg" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="egg">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Choley(100gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="choley">
                         <input type="number" step="1" max="10" value="0" id="choley" name="choley" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="choley">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Tea<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="tea">
                         <input type="number" step="1" max="10" value="0" id="tea" name="tea" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="tea">
                      </div>
                   </div>
                </div>
                 <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Salad<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="salad">
                         <input type="number" step="1" max="10" value="0" id="salad" name="salad" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="salad">
                      </div>
                   </div>
                </div>
                <div class="col-12 col-lg-6">
                   <div class="form-group mg-b-5-force d-flex justify-content-between">
                      <div class="col-6">
                          <label class="form-control-label">Rice(100gm)<span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-6 input-group w-auto justify-content-end align-items-center">
                         <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="rice">
                         <input type="number" step="1" max="10" value="0" id="rice" name="rice" class="quantity-field border-0 text-center w-25" disabled>
                         <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm" data-field="rice">
                      </div>
                   </div>
                </div>
            </div>
            <div class="form-layout-footer">
              <button class="btn btn-info" onClick=onFormSubmit()>Check Protein</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div>
        <footer class="br-footer">
              <div class="footer-left">
                <div class="mg-b-2">Copyright © 2022. Desiteck. All Rights Reserved.</div>
                <div>Check Your Protein.</div>
                <div class='text-justify'>DISCLAIMER : Information provided on this website is of a general nature only and is included for the sole purpose of providing general information about protein intake as per ICMR. This information is not intended to be a subtitute for individualised professional medical advice, diagnosis or treatment and reliance should not be place on it. For presonalised medical or nutition advice, user should make an appointment with their doctor, dietitian or qulified health care professional.</div>
              </div>
              <!--<div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Share:</span>
                <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
              </div>-->
        </footer>
         <div id="successmodal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-success tx-semibold mg-b-20 welcomename">Congratulations!</h4>
                  <p class="mg-b-20 mg-x-20 userresult"></p>
                  <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                    Continue
                  </button>
                </div><!-- modal-body -->
              </div><!-- modal-content -->
            </div><!-- modal-dialog -->
          </div><!-- modal -->
        <div id="errorsmodal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <i class="icon ion-ios-checkmark-outline tx-100 tx-warning lh-1 mg-t-20 d-inline-block"></i>
                  <h4 class="tx-warning tx-semibold mg-b-20 welcomename">Error!</h4>
                  <p class="mg-b-20 mg-x-20 usererror"></p>
                  <button type="button" class="btn btn-warning tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" data-dismiss="modal" aria-label="Close">
                    Continue
                  </button>
                </div><!-- modal-body -->
              </div><!-- modal-content -->
            </div><!-- modal-dialog -->
          </div><!-- modal -->
  </div>
  <script src="../support/jquery.js"></script>
  <script src="../support/bootstrap.bundle.min.js"></script>
  <script src="../support/bracket.js"></script>
  <script type="text/javascript">
   function onFormSubmit(){
       
       
       
       
       //e.preventDefault();
       let name = $("#name").val();
       let height = $("#height").val();
       let weight =  $("#weight").val();
       let age = $("#age").val();
       let idealWeight = height - 100;
       let gender = $("#gender").val();
       let activity = $("#activity").val();
       let bmr = 0;
       let prequired = 0;
       let calories = 0;
       let proteinIntake = 0;
       let error = [];
       let text = '';
       if(name.length <= 0 || name === ''){
          error.push("Name can't be empty");
       }
       if(height.length <= 0 || height === ''){
           error.push("Height can't be empty");
       }
       if(weight.length <= 0 || weight === ''){
           error.push("Weight can't be empty");
       }
       if(age.length <= 0 || age === ''){
           error.push("Age can't be empty");
       }
       if(activity.length <= 0 || activity === ''){
           error.push("Select Activity");
       }
       if(gender.length <= 0 || gender === ''){
           error.push("Select Gender");
       }
       if(error.length > 0){
           for (let i = 0; i < error.length; i++) {
              text += "<li>" + error[i] + "</li>";
            }
           $('.usererror').html(text);
           $('#errorsmodal').modal('show');
       }else{
       
       bmr = (gender == 'Female')? Math.round(655.1 + (9.563 * idealWeight) + (1.850 * height) - (4.676 * age)):Math.round(66.5 + (13.75 * idealWeight) + (5.003 * height) - (6.75 * age));
       function calrequired (){
           
           switch(activity){
               case '1':
                   return Math.round(bmr * 1.2);
               break;
                case '2':
                   return Math.round(bmr * 1.375);
               break;
                case '3':
                   return Math.round(bmr * 1.55);
               break;
                case '4':
                   return Math.round(bmr * 1.725);
               break;
               case '5':
                   return Math.round(bmr * 1.9);
               break;
               default:
                    return Math.round(bmr * 1.2);
               break;
           }
           
       }
       calories = calrequired();
       
       function proteinRequired(){
           
           switch(activity){
               case '1':
                   return Math.round(idealWeight * 0.8);
               break;
               case '2':
                   return Math.round(idealWeight * 1);
               break;
               case '3':
                   return Math.round(idealWeight * 1.2);
               break;
               case '4':
                   return Math.round(idealWeight * 1.4);
               break;
               case '5':
                   return Math.round(idealWeight * 1.7);
               break;
           }
       }
        
       if($('#optional').val() == 'Pregnant'){
           prequired = proteinRequired() + 25;
       }else if($('#optional').val() == 'Lactating'){
           prequired = proteinRequired() + 15;
       }else{
           prequired = proteinRequired();
       }
        function countProtein(){
           proteinIntake = Math.round(($('#bread').val() * 1.4) + ($('#oats').val() * 16.0) + ($('#roti').val() * 3.0) + ($('#idly').val() * 1.0) + ($('#dosa').val() * 2.0) + ($('#milk').val() * 6.8) + ($('#pratha').val() * 4.1) + ($('#puri').val() * 2.0) +
           ($('#corn').val() * 6.6) +($('#dal').val() * 3.0) +($('#sambar').val() * 2.1) +($('#vegi').val() * 0) +($('#fish').val() * 8.75) +($('#dahi').val() * 2.6) +($('#kichri').val() * 4.3) + ($('#chicken').val() * 8.0) + ($('#egg').val() * 7.0) +
           ($('#choley').val() * 4.2) +($('#tea').val() * 1.0)+($('#salad').val() * 0)+($('#rice').val() * 7.5));
      
        }
        countProtein();
        $('.welcomename').html(`Congratulations! ${name}` );
        $('.userresult').html(`Calorie Required : <b>${calories}</b> <br> Ideal bodyweight should be : <b>${idealWeight}kg</b> <br> Protein Required :  <b>${prequired}gm</b> <br> Your Protein Tank : <b>${proteinIntake}gm</b><br> Your Protein Deficiency Per/Day : <b>${prequired - proteinIntake}gm</b>`)
        $('#successmodal').modal('show');
   }
   }
   
   
   function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.input-group').on('click', '.button-plus', function(e) {
       
        incrementValue(e);
    });

    $('.input-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });
  </script>
  </body>
  
</html>