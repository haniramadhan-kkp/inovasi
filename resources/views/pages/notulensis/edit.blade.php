<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Edit Notulensis"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="material-icons">arrow_back</i>                                
                    </a>
                </div>
                <div class="col col-md-auto  " >
                    <div class=" h5 font-weight-bold text-primary" >
                        Edit Notulensis
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid " >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class="card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("notulensis/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kegiatan">Kegiatan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kegiatan-holder" class=" ">
                                            <input id="ctrl-kegiatan" data-field="kegiatan"  value="<?php  echo $data['kegiatan']; ?>" type="text" placeholder="Enter Kegiatan"  required="" name="kegiatan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tanggal">Tanggal <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tanggal-holder" class="input-group ">
                                            <input id="ctrl-tanggal" data-field="tanggal" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['tanggal']; ?>" type="datetime" name="tanggal" placeholder="Enter Tanggal" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="tempat">Tempat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-tempat-holder" class=" ">
                                            <input id="ctrl-tempat" data-field="tempat"  value="<?php  echo $data['tempat']; ?>" type="text" placeholder="Enter Tempat"  required="" name="tempat"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pimpinan_rapat">Pimpinan Rapat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pimpinan_rapat-holder" class=" ">
                                            <input id="ctrl-pimpinan_rapat" data-field="pimpinan_rapat"  value="<?php  echo $data['pimpinan_rapat']; ?>" type="text" placeholder="Enter Pimpinan Rapat"  required="" name="pimpinan_rapat"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="isi">Isi <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-isi-holder" class=" ">
                                            <textarea placeholder="Enter Isi" id="ctrl-isi" data-field="isi"  required="" rows="5" name="isi" class=" form-control"><?php  echo $data['isi']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kesimpulan">Kesimpulan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kesimpulan-holder" class=" ">
                                            <textarea placeholder="Enter Kesimpulan" id="ctrl-kesimpulan" data-field="kesimpulan"  required="" rows="5" name="kesimpulan" class=" form-control"><?php  echo $data['kesimpulan']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="undangan">Undangan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-undangan-holder" class=" ">
                                            <input id="ctrl-undangan" data-field="undangan"  value="<?php  echo $data['undangan']; ?>" type="text" placeholder="Enter Undangan"  required="" name="undangan"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="dokumentasi">Dokumentasi <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-dokumentasi-holder" class=" ">
                                            <input id="ctrl-dokumentasi" data-field="dokumentasi"  value="<?php  echo $data['dokumentasi']; ?>" type="text" placeholder="Enter Dokumentasi"  required="" name="dokumentasi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="daftar_hadir">Daftar Hadir <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-daftar_hadir-holder" class=" ">
                                            <input id="ctrl-daftar_hadir" data-field="daftar_hadir"  value="<?php  echo $data['daftar_hadir']; ?>" type="text" placeholder="Enter Daftar Hadir"  required="" name="daftar_hadir"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            Update
                            <i class="material-icons">send</i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
<!-- Page custom css -->
@section('pagecss')
<style>

</style>
@endsection
<!-- Page custom js -->
@section('pagejs')
<script>
    <!--pageautofill-->
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
