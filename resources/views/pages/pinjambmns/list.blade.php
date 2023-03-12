<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("pinjambmns/add");
    $can_edit = $user->canAccess("pinjambmns/edit");
    $can_view = $user->canAccess("pinjambmns/view");
    $can_delete = $user->canAccess("pinjambmns/delete");
    $field_name = request()->segment(3);
    $field_value = request()->segment(4);
    $total_records = $records->total();
    $limit = $records->perPage();
    $record_count = count($records);
    $pageTitle = "Pinjambmns"; //set dynamic page title
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
                        Pinjambmns
                    </div>
                </div>
                <div class="col-md-auto  " >
                    <?php if($can_add){ ?>
                    <a  class="btn btn-primary" href="<?php print_link("pinjambmns/add", true) ?>" >
                    <i class="material-icons">add</i>                               
                    Add New Pinjambmns 
                </a>
                <?php } ?>
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
                    <div id="pinjambmns-list-records">
                        <div id="page-main-content" class="table-responsive">
                            <?php Html::page_bread_crumb("/pinjambmns/", $field_name, $field_value); ?>
                            <table class="table table-hover table-striped table-sm text-left">
                                <thead class="table-header ">
                                    <tr>
                                        <?php if($can_delete){ ?>
                                        <th class="td-checkbox">
                                        <label class="form-check-label">
                                        <input class="toggle-check-all form-check-input" type="checkbox" />
                                        </label>
                                        </th>
                                        <?php } ?>
                                        <th class="td-id" > Id</th>
                                        <th class="td-created_at" > Created At</th>
                                        <th class="td-updated_at" > Updated At</th>
                                        <th class="td-peminjam_id" > Peminjam Id</th>
                                        <th class="td-atas_nama" > Atas Nama</th>
                                        <th class="td-tanggal_pinjam" > Tanggal Pinjam</th>
                                        <th class="td-tanggal_kembali" > Tanggal Kembali</th>
                                        <th class="td-bmn_dipinjam" > Bmn Dipinjam</th>
                                        <th class="td-keperluan" > Keperluan</th>
                                        <th class="td-kelengkapan" > Kelengkapan</th>
                                        <th class="td-catatan" > Catatan</th>
                                        <th class="td-tanggal_pengembalian" > Tanggal Pengembalian</th>
                                        <th class="td-surat_peminjaman" > Surat Peminjaman</th>
                                        <th class="td-foto_pengambilan" > Foto Pengambilan</th>
                                        <th class="td-foto_pengembalian" > Foto Pengembalian</th>
                                        <th class="td-statuspinjambmn_id" > Statuspinjambmn Id</th>
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
                                        <?php if($can_delete){ ?>
                                        <td class=" td-checkbox">
                                            <label class="form-check-label">
                                            <input class="optioncheck form-check-input" name="optioncheck[]" value="<?php echo $data['id'] ?>" type="checkbox" />
                                            </label>
                                        </td>
                                        <?php } ?>
                                        <!--PageComponentStart-->
                                        <td class="td-id">
                                            <a href="<?php print_link("pinjambmns/view/$data[id]") ?>"><?php echo $data['id']; ?></a>
                                        </td>
                                        <td class="td-created_at">
                                            <?php echo  $data['created_at'] ; ?>
                                        </td>
                                        <td class="td-updated_at">
                                            <?php echo  $data['updated_at'] ; ?>
                                        </td>
                                        <td class="td-peminjam_id">
                                            <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("users/view/$data[peminjam_id]?subpage=1") ?>">
                                            <i class="material-icons">visibility</i> <?php echo "Users" ?>
                                        </a>
                                    </td>
                                    <td class="td-atas_nama">
                                        <?php echo  $data['atas_nama'] ; ?>
                                    </td>
                                    <td class="td-tanggal_pinjam">
                                        <?php echo  $data['tanggal_pinjam'] ; ?>
                                    </td>
                                    <td class="td-tanggal_kembali">
                                        <?php echo  $data['tanggal_kembali'] ; ?>
                                    </td>
                                    <td class="td-bmn_dipinjam">
                                        <?php echo  $data['bmn_dipinjam'] ; ?>
                                    </td>
                                    <td class="td-keperluan">
                                        <?php echo  $data['keperluan'] ; ?>
                                    </td>
                                    <td class="td-kelengkapan">
                                        <?php echo  $data['kelengkapan'] ; ?>
                                    </td>
                                    <td class="td-catatan">
                                        <?php echo  $data['catatan'] ; ?>
                                    </td>
                                    <td class="td-tanggal_pengembalian">
                                        <?php echo  $data['tanggal_pengembalian'] ; ?>
                                    </td>
                                    <td class="td-surat_peminjaman">
                                        <?php echo  $data['surat_peminjaman'] ; ?>
                                    </td>
                                    <td class="td-foto_pengambilan">
                                        <?php echo  $data['foto_pengambilan'] ; ?>
                                    </td>
                                    <td class="td-foto_pengembalian">
                                        <?php echo  $data['foto_pengembalian'] ; ?>
                                    </td>
                                    <td class="td-statuspinjambmn_id">
                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("statuspinjambmns/view/$data[statuspinjambmn_id]?subpage=1") ?>">
                                        <i class="material-icons">visibility</i> <?php echo "Statuspinjambmns" ?>
                                    </a>
                                </td>
                                <!--PageComponentEnd-->
                                <td class="td-btn">
                                    <div class="dropdown" >
                                        <button data-bs-toggle="dropdown" class="dropdown-toggle btn text-primary btn-flat btn-sm">
                                        <i class="material-icons">menu</i> 
                                        </button>
                                        <ul class="dropdown-menu">
                                            <?php if($can_view){ ?>
                                            <a class="dropdown-item "   href="<?php print_link("pinjambmns/view/$rec_id"); ?>" >
                                            <i class="material-icons">visibility</i> View
                                        </a>
                                        <?php } ?>
                                        <?php if($can_edit){ ?>
                                        <a class="dropdown-item "   href="<?php print_link("pinjambmns/edit/$rec_id"); ?>" >
                                        <i class="material-icons">edit</i> Edit
                                    </a>
                                    <?php } ?>
                                    <?php if($can_delete){ ?>
                                    <a class="dropdown-item record-delete-btn" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal" href="<?php print_link("pinjambmns/delete/$rec_id"); ?>" >
                                    <i class="material-icons">delete_sweep</i> Delete
                                </a>
                                <?php } ?>
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
                    <?php if($can_delete){ ?>
                    <button data-prompt-msg="Are you sure you want to delete these records?" data-display-style="modal" data-url="<?php print_link("pinjambmns/delete/{sel_ids}"); ?>" class="btn btn-sm btn-danger btn-delete-selected d-none">
                    <i class="material-icons">delete_sweep</i> Delete Selected
                    </button>
                    <?php } ?>
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
