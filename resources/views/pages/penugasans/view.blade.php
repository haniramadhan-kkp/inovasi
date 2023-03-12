<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    //check if current user role is allowed access to the pages
    $can_add = $user->canAccess("penugasans/add");
    $can_edit = $user->canAccess("penugasans/edit");
    $can_view = $user->canAccess("penugasans/view");
    $can_delete = $user->canAccess("penugasans/delete");
    $pageTitle = "Penugasans Details"; //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="view" data-page-url="{{ url()->full() }}">
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
                        Penugasans Details
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
                <div class="col-md-12 comp-grid " >
                    <?php Html::display_page_errors($errors); ?>
                    <div  class=" page-content" >
                        <?php
                            $counter = 0;
                            if($data){
                            $rec_id = ($data['id'] ? urlencode($data['id']) : null);
                            $counter++;
                        ?>
                        <div id="page-main-content" class=" px-3 mb-3">
                            <div class="page-data">
                                <!--PageComponentStart-->
                                <div class="mb-3 row row gutter-lg">
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Id</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['id'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Created At</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['created_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Updated At</small>
                                                    <div class="fw-bold">
                                                        <?php echo  $data['updated_at'] ; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-12 col-md-4">
                                        <div class="bg-light mb-3 card-1 p-2 border rounded">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <small class="text-muted">Pemberi Tugas Id</small>
                                                    <div class="fw-bold">
                                                        <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("users/view/$data[pemberi_tugas_id]?subpage=1") ?>">
                                                        <i class="material-icons">visibility</i> <?php echo "Users Detail" ?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-12 col-md-4">
                                    <div class="bg-light mb-3 card-1 p-2 border rounded">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <small class="text-muted">Penerima Tugas Id</small>
                                                <div class="fw-bold">
                                                    <a size="sm" class="btn btn-sm btn btn-secondary page-modal" href="<?php print_link("users/view/$data[penerima_tugas_id]?subpage=1") ?>">
                                                    <i class="material-icons">visibility</i> <?php echo "Users Detail" ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Uraian Tugas</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['uraian_tugas'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Uraian Hasil</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['uraian_hasil'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Lampiran</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['lampiran'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Tanggal Penugasan</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['tanggal_penugasan'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Tanggal Deadline</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['tanggal_deadline'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4">
                                <div class="bg-light mb-3 card-1 p-2 border rounded">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <small class="text-muted">Tanggal Penyelesaian</small>
                                            <div class="fw-bold">
                                                <?php echo  $data['tanggal_penyelesaian'] ; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--PageComponentEnd-->
                        <div class="d-flex gap-1 justify-content-start">
                            <?php if($can_edit){ ?>
                            <a class="btn btn-sm btn-success has-tooltip "   title="Edit" href="<?php print_link("penugasans/edit/$rec_id"); ?>" >
                            <i class="material-icons">edit</i> Edit
                        </a>
                        <?php } ?>
                        <?php if($can_delete){ ?>
                        <a class="btn btn-sm btn-danger has-tooltip record-delete-btn" data-prompt-msg="Are you sure you want to delete this record?" data-display-style="modal" title="Delete" href="<?php print_link("penugasans/delete/$rec_id?redirect=penugasans"); ?>" >
                        <i class="material-icons">delete_sweep</i> Delete
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
            }
            else{
        ?>
        <!-- Empty Record Message -->
        <div class="text-muted p-3">
            <i class="material-icons">block</i> No Record Found
        </div>
        <?php
            }
        ?>
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
