<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Edit Izinkepegawaians"; //set dynamic page title
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
                        Edit Izinkepegawaians
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("izinkepegawaians/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jenis_cuti">Jenis Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jenis_cuti-holder" class=" ">
                                            <input id="ctrl-jenis_cuti" data-field="jenis_cuti"  value="<?php  echo $data['jenis_cuti']; ?>" type="text" placeholder="Enter Jenis Cuti"  required="" name="jenis_cuti"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="lama_cuti">Lama Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-lama_cuti-holder" class=" ">
                                            <input id="ctrl-lama_cuti" data-field="lama_cuti"  value="<?php  echo $data['lama_cuti']; ?>" type="number" placeholder="Enter Lama Cuti" step="any"  required="" name="lama_cuti"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="mulai_cuti">Mulai Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-mulai_cuti-holder" class="input-group ">
                                            <input id="ctrl-mulai_cuti" data-field="mulai_cuti" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['mulai_cuti']; ?>" type="datetime" name="mulai_cuti" placeholder="Enter Mulai Cuti" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="akhir_cuti">Akhir Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-akhir_cuti-holder" class="input-group ">
                                            <input id="ctrl-akhir_cuti" data-field="akhir_cuti" class="form-control datepicker  datepicker"  required="" value="<?php  echo $data['akhir_cuti']; ?>" type="datetime" name="akhir_cuti" placeholder="Enter Akhir Cuti" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                            <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sisa_n2">Sisa N2 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sisa_n2-holder" class=" ">
                                            <input id="ctrl-sisa_n2" data-field="sisa_n2"  value="<?php  echo $data['sisa_n2']; ?>" type="number" placeholder="Enter Sisa N2" step="any"  required="" name="sisa_n2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sisa_n1">Sisa N1 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sisa_n1-holder" class=" ">
                                            <input id="ctrl-sisa_n1" data-field="sisa_n1"  value="<?php  echo $data['sisa_n1']; ?>" type="number" placeholder="Enter Sisa N1" step="any"  required="" name="sisa_n1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sisa_n">Sisa N <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sisa_n-holder" class=" ">
                                            <input id="ctrl-sisa_n" data-field="sisa_n"  value="<?php  echo $data['sisa_n']; ?>" type="number" placeholder="Enter Sisa N" step="any"  required="" name="sisa_n"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan_n2">Keterangan N2 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan_n2-holder" class=" ">
                                            <input id="ctrl-keterangan_n2" data-field="keterangan_n2"  value="<?php  echo $data['keterangan_n2']; ?>" type="text" placeholder="Enter Keterangan N2"  required="" name="keterangan_n2"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan_n1">Keterangan N1 <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan_n1-holder" class=" ">
                                            <input id="ctrl-keterangan_n1" data-field="keterangan_n1"  value="<?php  echo $data['keterangan_n1']; ?>" type="text" placeholder="Enter Keterangan N1"  required="" name="keterangan_n1"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan_n">Keterangan N <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan_n-holder" class=" ">
                                            <input id="ctrl-keterangan_n" data-field="keterangan_n"  value="<?php  echo $data['keterangan_n']; ?>" type="text" placeholder="Enter Keterangan N"  required="" name="keterangan_n"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="alamat_cuti">Alamat Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-alamat_cuti-holder" class=" ">
                                            <textarea placeholder="Enter Alamat Cuti" id="ctrl-alamat_cuti" data-field="alamat_cuti"  required="" rows="5" name="alamat_cuti" class=" form-control"><?php  echo $data['alamat_cuti']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="no_telp">No Telp <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-no_telp-holder" class=" ">
                                            <input id="ctrl-no_telp" data-field="no_telp"  value="<?php  echo $data['no_telp']; ?>" type="text" placeholder="Enter No Telp"  required="" name="no_telp"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cat_atasan">Cat Atasan <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cat_atasan-holder" class=" ">
                                            <textarea placeholder="Enter Cat Atasan" id="ctrl-cat_atasan" data-field="cat_atasan"  required="" rows="5" name="cat_atasan" class=" form-control"><?php  echo $data['cat_atasan']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="cat_pejabat">Cat Pejabat <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-cat_pejabat-holder" class=" ">
                                            <textarea placeholder="Enter Cat Pejabat" id="ctrl-cat_pejabat" data-field="cat_pejabat"  required="" rows="5" name="cat_pejabat" class=" form-control"><?php  echo $data['cat_pejabat']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="statusizinkepegawaian_id">Statusizinkepegawaian Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-statusizinkepegawaian_id-holder" class=" ">
                                            <select required=""  id="ctrl-statusizinkepegawaian_id" data-field="statusizinkepegawaian_id" name="statusizinkepegawaian_id"  placeholder="Select a value ..."    class="form-select" >
                                            <option value="">Select a value ...</option>
                                            <?php
                                                $options = $comp_model->statusizinkepegawaian_id_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['statusizinkepegawaian_id'] ? 'selected' : null );
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keperluan_cuti">Keperluan Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keperluan_cuti-holder" class=" ">
                                            <input id="ctrl-keperluan_cuti" data-field="keperluan_cuti"  value="<?php  echo $data['keperluan_cuti']; ?>" type="text" placeholder="Enter Keperluan Cuti"  required="" name="keperluan_cuti"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="pegawai_id">Pegawai Id <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-pegawai_id-holder" class=" ">
                                            <select required=""  id="ctrl-pegawai_id" data-field="pegawai_id" name="pegawai_id"  placeholder="Select a value ..."    class="form-select" >
                                            <option value="">Select a value ...</option>
                                            <?php
                                                $options = $comp_model->pegawai_id_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['pegawai_id'] ? 'selected' : null );
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="formulir_cuti">Formulir Cuti <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-formulir_cuti-holder" class=" ">
                                            <input id="ctrl-formulir_cuti" data-field="formulir_cuti"  value="<?php  echo $data['formulir_cuti']; ?>" type="text" placeholder="Enter Formulir Cuti"  required="" name="formulir_cuti"  class="form-control " />
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
