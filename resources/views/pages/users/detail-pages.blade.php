    <?php
        $rec_id = $masterRecordId ?? null;
        $page_id = "tab-".random_str(6);
    ?>
    <div class="master-detail-page card">
        <div class="card-header text-bold h5 p-3 mb-3">Users Records</div>
        <div class="p-2">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a data-bs-toggle="tab" href="#notulensis_<?php echo $page_id ?>" class="nav-link active">
                    Users Notulensis
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="tab" href="#notulensiroleusers_<?php echo $page_id ?>" class="nav-link ">
                Users Notulensiroleusers
            </a>
        </li>
        <li class="nav-item">
            <a data-bs-toggle="tab" href="#izinkepegawaians_<?php echo $page_id ?>" class="nav-link ">
            Users Izinkepegawaians
        </a>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="tab" href="#penugasans_<?php echo $page_id ?>" class="nav-link ">
        Users Penugasans
    </a>
</li>
<li class="nav-item">
    <a data-bs-toggle="tab" href="#penugasans_<?php echo $page_id ?>" class="nav-link ">
    Users Penugasans
</a>
</li>
<li class="nav-item">
    <a data-bs-toggle="tab" href="#pinjambmns_<?php echo $page_id ?>" class="nav-link ">
    Users Pinjambmns
</a>
</li>
</ul>
</div>
<div class="tab-content">
    <div class="tab-pane fade show active" id="notulensis_<?php echo $page_id ?>" role="tabpanel">
    <div class=" ">
        <?php
            $params = ['notulen_id' => $rec_id,'show_header' => false]; //new query param
            $query = array_merge(request()->query(), $params);
            $queryParams = http_build_query($query);
            $url = url("notulensis/index/notulen_id/$rec_id?$queryParams");
        ?>
        <div class="ajax-inline-page" data-url="{{ $url }}" >
            <div class="ajax-page-load-indicator">
                <div class="text-center d-flex justify-content-center load-indicator">
                    <span class="loader mr-3"></span>
                    <span class="fw-bold">Loading...</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tab-pane fade show " id="notulensiroleusers_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['user_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("notulensiroleusers/index/user_id/$rec_id?$queryParams");
    ?>
    <div class="ajax-inline-page" data-url="{{ $url }}" >
        <div class="ajax-page-load-indicator">
            <div class="text-center d-flex justify-content-center load-indicator">
                <span class="loader mr-3"></span>
                <span class="fw-bold">Loading...</span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade show " id="izinkepegawaians_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['pegawai_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("izinkepegawaians/index/pegawai_id/$rec_id?$queryParams");
    ?>
    <div class="ajax-inline-page" data-url="{{ $url }}" >
        <div class="ajax-page-load-indicator">
            <div class="text-center d-flex justify-content-center load-indicator">
                <span class="loader mr-3"></span>
                <span class="fw-bold">Loading...</span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade show " id="penugasans_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['pemberi_tugas_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("penugasans/index/pemberi_tugas_id/$rec_id?$queryParams");
    ?>
    <div class="ajax-inline-page" data-url="{{ $url }}" >
        <div class="ajax-page-load-indicator">
            <div class="text-center d-flex justify-content-center load-indicator">
                <span class="loader mr-3"></span>
                <span class="fw-bold">Loading...</span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade show " id="penugasans_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['penerima_tugas_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("penugasans/index/penerima_tugas_id/$rec_id?$queryParams");
    ?>
    <div class="ajax-inline-page" data-url="{{ $url }}" >
        <div class="ajax-page-load-indicator">
            <div class="text-center d-flex justify-content-center load-indicator">
                <span class="loader mr-3"></span>
                <span class="fw-bold">Loading...</span>
            </div>
        </div>
    </div>
</div>
</div>
<div class="tab-pane fade show " id="pinjambmns_<?php echo $page_id ?>" role="tabpanel">
<div class=" ">
    <?php
        $params = ['peminjam_id' => $rec_id,'show_header' => false]; //new query param
        $query = array_merge(request()->query(), $params);
        $queryParams = http_build_query($query);
        $url = url("pinjambmns/index/peminjam_id/$rec_id?$queryParams");
    ?>
    <div class="ajax-inline-page" data-url="{{ $url }}" >
        <div class="ajax-page-load-indicator">
            <div class="text-center d-flex justify-content-center load-indicator">
                <span class="loader mr-3"></span>
                <span class="fw-bold">Loading...</span>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
