<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = "Add New Pinjambmns"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        Add New Pinjambmns
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
                        <form id="pinjambmns-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('pinjambmns.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="peminjam_id">Peminjam Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-peminjam_id-holder" class=" ">
                                                <select required=""  id="ctrl-peminjam_id" data-field="peminjam_id" name="peminjam_id"  placeholder="Select a value ..."    class="form-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                    $options = $comp_model->pegawai_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('peminjam_id', $value, "");
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
                                            <label class="control-label" for="atas_nama">Atas Nama <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-atas_nama-holder" class=" ">
                                                <input id="ctrl-atas_nama" data-field="atas_nama"  value="<?php echo get_value('atas_nama') ?>" type="text" placeholder="Enter Atas Nama"  required="" name="atas_nama"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tanggal_pinjam">Tanggal Pinjam <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tanggal_pinjam-holder" class="input-group ">
                                                <input id="ctrl-tanggal_pinjam" data-field="tanggal_pinjam" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('tanggal_pinjam') ?>" type="datetime" name="tanggal_pinjam" placeholder="Enter Tanggal Pinjam" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tanggal_kembali">Tanggal Kembali <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tanggal_kembali-holder" class="input-group ">
                                                <input id="ctrl-tanggal_kembali" data-field="tanggal_kembali" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('tanggal_kembali') ?>" type="datetime" name="tanggal_kembali" placeholder="Enter Tanggal Kembali" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="bmn_dipinjam">Bmn Dipinjam <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-bmn_dipinjam-holder" class=" ">
                                                <textarea placeholder="Enter Bmn Dipinjam" id="ctrl-bmn_dipinjam" data-field="bmn_dipinjam"  required="" rows="5" name="bmn_dipinjam" class=" form-control"><?php echo get_value('bmn_dipinjam') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="keperluan">Keperluan <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-keperluan-holder" class=" ">
                                                <textarea placeholder="Enter Keperluan" id="ctrl-keperluan" data-field="keperluan"  required="" rows="5" name="keperluan" class=" form-control"><?php echo get_value('keperluan') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="kelengkapan">Kelengkapan <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-kelengkapan-holder" class=" ">
                                                <textarea placeholder="Enter Kelengkapan" id="ctrl-kelengkapan" data-field="kelengkapan"  required="" rows="5" name="kelengkapan" class=" form-control"><?php echo get_value('kelengkapan') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="catatan">Catatan <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-catatan-holder" class=" ">
                                                <textarea placeholder="Enter Catatan" id="ctrl-catatan" data-field="catatan"  required="" rows="5" name="catatan" class=" form-control"><?php echo get_value('catatan') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">Please enter text</div>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="tanggal_pengembalian">Tanggal Pengembalian <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-tanggal_pengembalian-holder" class="input-group ">
                                                <input id="ctrl-tanggal_pengembalian" data-field="tanggal_pengembalian" class="form-control datepicker  datepicker"  required="" value="<?php echo get_value('tanggal_pengembalian') ?>" type="datetime" name="tanggal_pengembalian" placeholder="Enter Tanggal Pengembalian" data-enable-time="false" data-min-date="" data-max-date="" data-date-format="Y-m-d" data-alt-format="F j, Y" data-inline="false" data-no-calendar="false" data-mode="single" />
                                                <span class="input-group-text"><i class="material-icons">date_range</i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="surat_peminjaman">Surat Peminjaman <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-surat_peminjaman-holder" class=" ">
                                                <input id="ctrl-surat_peminjaman" data-field="surat_peminjaman"  value="<?php echo get_value('surat_peminjaman') ?>" type="text" placeholder="Enter Surat Peminjaman"  required="" name="surat_peminjaman"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="foto_pengambilan">Foto Pengambilan <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-foto_pengambilan-holder" class=" ">
                                                <input id="ctrl-foto_pengambilan" data-field="foto_pengambilan"  value="<?php echo get_value('foto_pengambilan') ?>" type="text" placeholder="Enter Foto Pengambilan"  required="" name="foto_pengambilan"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="foto_pengembalian">Foto Pengembalian <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-foto_pengembalian-holder" class=" ">
                                                <input id="ctrl-foto_pengembalian" data-field="foto_pengembalian"  value="<?php echo get_value('foto_pengembalian') ?>" type="text" placeholder="Enter Foto Pengembalian"  required="" name="foto_pengembalian"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="statuspinjambmn_id">Statuspinjambmn Id <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-statuspinjambmn_id-holder" class=" ">
                                                <select required=""  id="ctrl-statuspinjambmn_id" data-field="statuspinjambmn_id" name="statuspinjambmn_id"  placeholder="Select a value ..."    class="form-select" >
                                                <option value="">Select a value ...</option>
                                                <?php 
                                                    $options = $comp_model->statuspinjambmn_id_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('statuspinjambmn_id', $value, "");
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
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                Submit
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
    
$(document).ready(function(){
	// custom javascript | jquery codes
});

</script>
@endsection
