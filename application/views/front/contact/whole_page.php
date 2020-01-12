<!--HTML + Links-->
<?php $this->load->view("front/includes/header"); ?>
<!--Links-->

<!--Loader-->
<?php $this->load->view("front/includes/loading_effect"); ?>
<!--Loader-->

<!--Navigation bar-->
<?php $this->load->view("front/includes/navbar"); ?>
<!--Navigation bar-->

<?php $lang = $this->session->userdata("dil") ?>


<!-- MAP BLOCK -->
<div class="map-block">
    <div id="map-canvas" class="style-4" data-lat="33.664467" data-lng="-117.601586" data-zoom="10" data-style="2"></div>
    <div class="addresses-block">
        <a data-lat="33.664467" data-lng="-117.601586" data-string="Santa Monica Hotel"></a>
    </div>
</div>

<div class="main-wraper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                <div class="second-title">
                    <h4 class="subtitle color-dr-blue-2 underline"><?php echo $this->lang->line("bizimle_elaqe")?></h4>
                    <h2></h2>
                </div>
            </div>
        </div>

        <div class="contact-row">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <div class="contact-entry">
                        <img width="40px" height="40px" style="object-fit: inherit" class="contact-icon" src="<?php echo base_url("uploads/contact/$contact[address_img]")?>" alt="">
                        <div class="contact-label color-grey-3"><?php echo $this->lang->line("adres")?>:</div>
                        <div class="contact-text color-dark-2"><?php echo $contact["address_$lang"]?></div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact-entry">
                        <img  width="40px" height="40px" style="object-fit: inherit"  class="contact-icon" src="<?php echo base_url("uploads/contact/$contact[email_img]")?>" alt="">
                        <div class="contact-label color-grey-3">Email:</div>
                        <a class="contact-text color-dark-2 link-dr-blue-2" href="mailto:let’s_travel@world.com"><?php echo $contact["email"]?></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="contact-entry">
                        <img width="40px" height="40px" style="object-fit: inherit"  class="contact-icon" src="<?php echo base_url("uploads/contact/$contact[phone_img]")?>" alt="">
                        <div class="contact-label color-grey-3"><?php echo $this->lang->line("telefon")?>:</div>
                        <a class="contact-text color-dark-2 link-dr-blue-2" href="tel:"><?php echo $contact["phone"]?></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="share style-2 clearfix">
            <ul>
                <li class="color-in"><a href="<?php echo $contact["linkedln"]?>"><i class="fa fa-linkedin"></i>linkedin</a></li>
                <li class="color-fb"><a href="<?php echo $contact["facebook"]?>"><i class="fa fa-facebook"></i>facebook</a></li>
                <li class="color-tw"><a href="<?php echo $contact["twitter"]?>"><i class="fa fa-twitter"></i>twitter</a></li>
                <li style="background-color: #cd4c67"><a href="<?php echo $contact["instagram"]?>"><i class="fa fa-instagram"></i>instagram</a></li>
                <li style="background-color: #25d366" "><a href="<?php echo $contact["whatsapp"]?>"><i class="fa fa-whatsapp"></i>whatsapp</a></li>
                <li class="color-pin"><a href="<?php echo $contact["youtube"]?>"><i class="fa fa-youtube"></i>youtube</a></li>
            </ul>
        </div>
    </div>
</div>

<br><br><br>

<!--Footer-->
<?php $this->load->view("front/includes/footer"); ?>
<!--Footer-->

<!--Scripts-->
<?php $this->load->view("front/includes/scripts"); ?>
<!--Scripts-->
