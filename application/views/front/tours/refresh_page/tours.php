<?php $lang = $this->session->userdata("dil")?>


<div class="list-content clearfix">

    <?php if (!empty($tours)){ ?>
        <?php foreach ($tours as $item) {    ?>
            <div class="list-item-entry">
                <div class="hotel-item style-3 bg-white">
                    <div class="table-view">
                        <div class="radius-top cell-view">
                            <img style="object-fit: cover" src="<?php echo base_url("uploads/tours/$item[img]")?>" alt="Turun Şəkli">
                        </div>
                        <div class="title hotel-middle clearfix cell-view">
                            <div class="date list-hidden"><?php echo $item["date"]?></div>
                            <div class="date grid-hidden"><strong><?php echo $item["date"]?> -  <?php echo $item["end_date"]?></strong></div>
                            <h4 style="text-transform:none;margin-bottom: 10px"><b><a class="c_search_value_name" href="<?php

                                    echo base_url("$lang/tour/$item[id]")

                                    ?>"><?php echo $item["name_" . $lang]?></a></b></h4>

                            <p class="f-14 grid-hidden c_search_value_desc">
                                <?php

                                if (strlen($item["desc_" . $lang]) > 113){
                                    echo mb_substr(strip_tags(trim($item["desc_" . $lang])), 0,  113) . "...";
                                }else{
                                    echo strip_tags(trim($item["desc_" . $lang]));
                                }
                                ?>
                            </p>
                        </div>
                        <div class="title hotel-right clearfix cell-view">
                            <div class="hotel-person color-dark-2"><span class="color-blue">$<?php echo $item["tour_price"]?></span></div>
                            <a class="c-button b-40 bg-blue hv-blue-o grid-hidden" href="<?php

                            echo base_url("$lang/tour/$item[id]")

                            ?>"><?php echo $this->lang->line("etrafli")?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php }?>
    <?php }else{ ?>
        <div class="alert alert-danger"><?php echo $this->lang->line("empty")?></div>
    <?php }?>

</div>

<!--pagination-->
<div class="c_pagination clearfix padd-120">
    <?php print_r($links); ?>
</div>
<!--pagination-->



<script>
    var text = $('.list-item-entry').text();

    <?php if (!empty($this->session->userdata("search_value"))){ ?>

        var search = '<?php echo $this->session->userdata("search_value")?>';
        $(".c_search_value_name:contains('"+search+"')").each(function () {
            var regex = new RegExp(search,'gi');
            $(this).html($(this).text().replace(regex, "<span class='c_find'>"+search+"</span>"));
        });

        $(".c_search_value_desc:contains('"+search+"')").each(function () {
            var regex = new RegExp(search,'gi');
            $(this).html($(this).text().replace(regex, "<span class='c_find'>"+search+"</span>"));
        });

        var search = capitalizeFirstLetter(search);
        $(".c_search_value_name:contains('"+search+"')").each(function () {
            var regex = new RegExp(search,'gi');
            $(this).html($(this).text().replace(regex, "<span class='c_find'>"+search+"</span>"));
        });

        $(".c_search_value_desc:contains('"+search+"')").each(function () {
            var regex = new RegExp(search,'gi');
            $(this).html($(this).text().replace(regex, "<span class='c_find'>"+search+"</span>"));
        });




    <?php }?>


    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

</script>

<script>
    $(".c_pagination_li").on('click','a', function (event) {

        event.preventDefault();

        $.ajax({
            type: "POST",

            url: $(this).attr("href"),

            beforeSend: function() {
                $('.c_spinner').show();
            },

            complete: function() {
                $('.c_spinner').hide();
            },

            success: function(data) {
                $(".c_refresh").html(data);
            },
            error: function() {
                alert('Xəta baş verdi');
            }
        });

    });
</script>


