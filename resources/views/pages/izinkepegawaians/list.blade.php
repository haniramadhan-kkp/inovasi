<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = "Izinkepegawaians"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="list" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col col-md-auto  " >
                    <div class=" h5 font-weight-bold text-primary" >
                        Izinkepegawaians
                    </div>
                </div>
                <div class="col-md-auto  " >
                    <a  class="btn btn-primary" href="<?php print_link("izinkepegawaians/add", true) ?>" >
                    <i class="material-icons">add</i>                               
                    Add New Izinkepegawaians 
                </a>
            </div>
            <div class="col-md-3  " >
                <!-- Page drop down search component -->
                <form  class="search" action="{{ url()->current() }}" method="get">
                    <input type="hidden" name="page" value="1" />
                    <div class="input-group">
                        <input value="<?php echo get_value('search'); ?>" class="form-control page-search" type="text" name="search"  placeholder="Search" />
                        <button class="btn btn-primary"><i class="material-icons">search</i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    }
?>
<div  class="" >
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-12 comp-grid " >
                <?php Html::display_page_errors($errors); ?>
                <div  class=" page-content" >
                    <div id="izinkepegawaians-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/izinkepegawaians/", $field_name, $field_value); ?>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <th class="td-id" > Id</th>
                                        <th class="td-created_at" > Created At</th>
                                        <th class="td-updated_at" > Updated At</th>
                                        <th class="td-jenis_cuti" > Jenis Cuti</th>
                                        <th class="td-lama_cuti" > Lama Cuti</th>
                                        <th class="td-mulai_cuti" > Mulai Cuti</th>
                                        <th class="td-akhir_cuti" > Akhir Cuti</th>
                                        <th class="td-sisa_n2" > Sisa N2</th>
                                        <th class="td-sisa_n1" > Sisa N1</th>
                                        <th class="td-sisa_n" > Sisa N</th>
                                        <th class="td-keterangan_n2" > Keterangan N2</th>
                                        <th class="td-keterangan_n1" > Keterangan N1</th>
                                        <th class="td-keterangan_n" > Keterangan N</th>
                                        <th class="td-alamat_cuti" > Alamat Cuti</th>
                                        <th class="td-no_telp" > No Telp</th>
                                        <th class="td-cat_atasan" > Cat Atasan</th>
                                        <th class="td-cat_pejabat" > Cat Pejabat</th>
                                        <th class="td-statusizinkepegawaian_id" > Statusizinkepegawaian Id</th>
                                        <th class="td-keperluan_cuti" > Keperluan Cuti</th>
                                        <th class="td-pegawai_id" > Pegawai Id</th>
                                        <th class="td-formulir_cuti" > Formulir Cuti</th>
                                        <th class="td-btn"></th>
                                    </tr>
                                </thead>
                                <?php
                                    if($total_records){
                                ?>
                                <tbody class="page-data">
                                    <!--record-->
                                    <?php
                                        $counter = 0;
                                        foreach($records as $data){
                                        $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                                        $counter++;
                                    ?>
                                    <tr>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <!--PageComponentStart-->
                                        <td class="td-id">
                                            <a href="<?php print_link("izinkepegawaians/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                        </td>
                                        <td class="td-created_at">
                                            <?php echo  $data['created_at'] ; ?>
                                        </td>
                                        <td class="td-updated_at">
                                            <?php echo  $data['updated_at'] ; ?>
                                        </td>
                                        <td class="td-jenis_cuti">
                                            <?php echo  $data['jenis_cuti'] ; ?>
                                        </td>
                                        <td class="td-lama_cuti">
                                            <?php echo  $data['lama_cuti'] ; ?>
                                        </td>
                                        <td class="td-mulai_cuti">
                                            <?php echo  $data['mulai_cuti'] ; ?>
                                        </td>
                                        <td class="td-akhir_cuti">
                                            <?php echo  $data['akhir_cuti'] ; ?>
                                        </td>
                                        <td class="td-sisa_n2">
                                            <?php echo  $data['sisa_n2'] ; ?>
                                        </td>
                                        <td class="td-sisa_n1">
                                            <?php echo  $data['sisa_n1'] ; ?>
                                        </td>
                                        <td class="td-sisa_n">
                                            <?php echo  $data['sisa_n'] ; ?>
                                        </td>
                                        <td class="td-keterangan_n2">
                                            <?php echo  $data['keterangan_n2'] ; ?>
                                        </td>
                                        <td class="td-keterangan_n1">
                                            <?php echo  $data['keterangan_n1'] ; ?>
                                        </td>
                                        <td class="td-keterangan_n">
                                            <?php echo  $data['keterangan_n'] ; ?>
                                        </td>
                                        <td class="td-alamat_cuti">
                                            <?php echo  $data['alamat_cuti'] ; ?>
                                        </td>
                                        <td class="td-no_telp">
                                            <?php echo  $data['no_telp'] ; ?>
                                        </td>
                                        <td class="td-cat_atasan">
                                            <?php echo  $data['cat_atasan'] ; ?>
                                        </td>
                                        <td class="td-cat_pejabat">
                                            <?php echo  $data['cat_pejabat'] ; ?>
                                        </td>
                                        <td class="td-statusizinkepegawaian_id">
                                            <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("statusizinkepegawaians/view/$data[statusizinkepegawaian_id]?subpage=1") ?>">
                                            <i class="material-icons">visibility</i> <?php echo "Statusizinkepegawaians" ?>
                                        </a>
                                    </td>
                                    <td class="td-keperluan_cuti">
                                        <?php echo  $data['keperluan_cuti'] ; ?>
                                    </td>
                                    <td class="td-pegawai_id">
                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("users/view/$data[pegawai_id]?subpage=1") ?>">
                                        <i class="material-icons">visibility</i> <?php echo "Users" ?>
                                    </a>
                                </td>
                                <td class="td-formulir_cuti">
                                    <?php echo  $data['formulir_cuti'] ; ?>
                                </td>
                                <!--PageComponentEnd-->
                                <td class="td-btn">
                                    <div class="dropdown" >
                                        <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                        <i class="material-icons">menu</i> 
                                        </button>
                                        <ul class="dropdown-menu">
                                            <a class="dropdown-item "   href="<?php print_link("izinkepegawaians/view/$rec_id"); ?>" >
                                            <i class="material-icons">visibility</i> View
                                        </a>
                                        <a class="dropdown-item "   href="<?php print_link("izinkepegawaians/edit/$rec_id"); ?>" >
                                        <i class="material-icons">edit</i> Edit
                                    </a>
                                    <a class="dropdown-item record-delete-btn" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal" href="<?php print_link("izinkepegawaians/delete/$rec_id"); ?>" >
                                    <i class="material-icons">delete_sweep</i> Delete
                                </a>
                            </ul>
                        </div>
                    </td>
                </tr>
                <?php 
                    }
                ?>
                <!--endrecord-->
            </tbody>
            <tbody class="search-data"></tbody>
            <?php
                }
                else{
            ?>
            <tbody class="page-data">
                <tr>
                    <td class="bg-light text-center text-muted animated bounce p-3" colspan="1000">
                        <i class="material-icons">block</i> No record found
                    </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
    <?php
        if($show_footer){
    ?>
    <div class=" mt-3">
        <div class="row align-items-center justify-content-between">    
            <div class="col-md-auto justify-content-center">    
                <div class="d-flex justify-content-start">  
                    <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("izinkepegawaians/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                    <i class="material-icons">delete_sweep</i> Delete Selected
                    </button>
                </div>
            </div>
            <div class="col">   
                <?php
                    if($show_pagination == true){
                    $pager = new Pagination($total_records, $record_count);
                    $pager->show_page_count = false;
                    $pager->show_record_count = true;
                    $pager->show_page_limit =false;
                    $pager->limit = $limit;
                    $pager->show_page_number_list = true;
                    $pager->pager_link_range=5;
                    $pager->render();
                    }
                ?>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</div>
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
