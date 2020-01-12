
<!--tabledeki fieldleri gizletmek ucun olan style bunu external css in icinde yazma yoxsa diger seyfelerdeki tablelerde korlanar-->
<style>
    th:nth-child(2){
        display: none;
    }

    td:nth-child(2){
        display: none;
    }

    th:nth-child(3){
        display: none;
    }

    td:nth-child(3){
        display: none;
    }

    th:nth-child(4){
        display: none;
    }

    td:nth-child(4){
        display: none;
    }

    th:nth-child(10){
        display: none;
    }

    td:nth-child(10){
        display: none;
    }


    th:nth-child(6){
        display: none;
    }

    td:nth-child(6){
        display: none;
    }




    th:nth-child(7){
        display: none;
    }

    td:nth-child(7){
        display: none!important;
    }

    th:nth-child(8){
        display: none!important;
    }
    td:nth-child(8){
        display: none!important;
    }

    th:nth-child(9){
        display: none!important;
    }
    td:nth-child(9){
        display: none!important;
    }

    th:nth-child(12){
        display: none!important;
    }
    td:nth-child(12){
        display: none!important;
    }

    th:nth-child(13){
        display: none!important;
    }
    td:nth-child(13){
        display: none!important;
    }

    th:nth-child(19){
        display: none!important;
    }
    td:nth-child(19){
        display: none!important;
    }

    th:nth-child(20){
        display: none!important;
    }
    td:nth-child(20){
        display: none!important;
    }

    th:nth-child(21){
        display: none!important;
    }
    td:nth-child(21){
        display: none!important;
    }


    .dt-buttons{
        display: none;
    }


    .cke_dialog_ui_hbox_last{
        display: inherit!important;
    }
</style>
<!--tabledeki fieldleri gizletmek ucun olan style bunu external css in icinde yazma yoxsa diger seyfelerdeki tablelerde korlanar-->


<section>


    <div class="card card-cascade narrower z-depth-0 pb-4">

        <!--tablenin basliqi-->
        <div
            class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

            <div style="visibility: hidden;">
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                        class="fas fa-th-large mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                        class="fas fa-columns mt-0"></i></button>
            </div>

            <a class="white-text mx-3">Turlar</a>

            <div style="visibility: hidden;">
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                        class="fas fa-pencil-alt mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                        class="fas fa-eraser mt-0"></i></button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i
                        class="fas fa-info-circle mt-0"></i></button>
            </div>

        </div>
        <!--tablenin basliqi-->


        <div class="px-4">
            <!-- Tablenin ozu -->
            <div class="table-responsive">
                <!--Table-->
                <table class="table table-hover table-bordered mb-0" id="datatable" data-url="<?php echo $get_data_link?>">

                    <!-- Table head -->
                    <thead>
                    <tr>

                        <th class="c_switch_th c_neglect" data-orderable="false" style="width: 20px!important; padding: 5px!important;">

                            <!--<label for="checkbox" class="form-check-label mr-2 label-table c_label_thead"><input type="checkbox" class="c_check_all form-check-input"/><span id="c_span_whole"></span></label>-->
                            <a class="red lighten-1 btn btn-danger mr-1 c_delete_all" style="padding: 6px!important;"><i style="font-size: 13px;" class="fas fa-trash"></i></a>

                            <input class="form-check-input c_check_all" type="checkbox" id="checkbox">
                            <label for="checkbox" class="form-check-label mr-2 label-table c_label_thead c_switch_margin"></label>

                        </th>


                        <th data-orderable="true" class="c_th_max_width"><a>id<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Servisin id-si<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Teklifin id-si<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Adı<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>name_en<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>name_ru<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>desc_az<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>desc_en<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>desc_ru<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Şəkli<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Başlama Tarixi<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Bitmə Tarixi<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Qiyməti<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun Kodu<i class="fas fa-sort ml-1"></i></a></th>

                        <th data-orderable="true" class="c_th_max_width"><a>Turun Baxış Sayı<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Turun həmin günkü hava haqqında məlumatı<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Temperaturu (Selsi ilə)<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Link<i class="fas fa-sort ml-1"></i></a></th>

                        <th data-orderable="true" class="c_th_max_width"><a>Long<i class="fas fa-sort ml-1"></i></a></th>
                        <th data-orderable="true" class="c_th_max_width"><a>Lat<i class="fas fa-sort ml-1"></i></a></th>


                        <th data-orderable="false" class="c_operations c_neglect" style="width: 53px!important;"><a>Turun Qalereyası</a></th>
                        <th data-orderable="false" class="c_operations c_neglect" style="width: 53px!important;"><a>Tura Daxildir</a></th>
                        <th data-orderable="false" class="c_operations c_neglect" style="width: 53px!important;"><a>Əməliyatlar</a></th>


                    </tr>
                    </thead>
                    <!-- Table head -->


                    <!-- Table body data table melumatlari bura ajaxnan getirir-->
                    <tbody></tbody>
                    <!-- Table body data table melumatlari bura ajaxnan getirir-->

                </table>
                <!-- Table -->
            </div>
            <!-- Tablenin ozu -->
        </div>
    </div>





</section>












