<x-layouts.website title="{{ $seoTitle['value'] }}" seoDec="{{ $seoDec['value'] }}" seoAuth="{{ $seoAuth['value'] }}"
    seoKey="{{ $seoKey['value'] }}">
    <div class="over-wrap">
        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap"
                                style="height: 290px; background-image: url('{{ asset('assets/images/head-bg.jpg') }}');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290"
                                    width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>Contact
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li>
                    <a href="/">Home
                    </a>
                </li>
                <li class="uk-active">
                    <span>Contact
                    </span>
                </li>
            </ul>
        </div>
        <div class="tm-bottom-a-box  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-a" class="tm-bottom-a uk-grid" data-uk-grid-match="{target:'> div > .uk-panel'}"
                    data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="contact-page">
                                <div class="uk-grid">
                                    <div class="uk-width-1-1">
                                        <div class="contact-title">
                                            <h2>
                                                @if ($Heading)
                                                    {{ $Heading->value != null ? $Heading->value : '' }}
                                                @endif

                                            </h2>
                                        </div>
                                        <div class="contact-text">
                                            @if ($Paragraph)
                                                {{ $Paragraph->value != null ? $Paragraph->value : '' }}
                                            @endif

                                        </div>
                                    </div>
                                    <div class="uk-width-1-1">
                                        <div class="contact-socials-wrap">
                                            <ul class="contact-socials">
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-facebook">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-twitter">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-google-plus">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-pinterest-p">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-youtube">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-instagram">
                                                        </i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="uk-icon-flickr">
                                                        </i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="uk-grid" data-uk-grid-match="{target:'.contact-enquiries'}">

                                    @if ($contacts)
                                        @for ($i = 0; $i < count($contacts); $i += 4)
                                            <?php
                                            $name = $contacts[$i];
                                            $phone = $contacts[$i + 1];
                                            $mail = $contacts[$i + 2];
                                            $location = $contacts[$i + 3];
                                            ?>
                                            <div class="uk-width-medium-1-3 uk-panel">
                                                <div style="min-height: 139px;" class="contact-enquiries">
                                                    <div class="title">
                                                        {{ $name->value }}
                                                    </div>
                                                    <div class="phone">
                                                        <i class="uk-icon-phone">
                                                        </i>
                                                        {{ $phone->value }}
                                                    </div>
                                                    <div class="mail">
                                                        <i class="uk-icon-envelope">
                                                        </i>
                                                        <a href="malto:{{ $mail->value }}">
                                                            {{ $mail->value }}
                                                        </a>
                                                    </div>
                                                    <div class="location">
                                                        <i class="uk-icon-map-marker">
                                                        </i>
                                                        {{ $location->value }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="tm-bottom-e-box tm-full-width  ">
            <div class="uk-container uk-container-center">
                <section id="tm-bottom-e" class="tm-bottom-e uk-grid uk-grid-collapse"
                    data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">

                    <div class="uk-width-1-1">
                        <div class="uk-panel">
                            <div class="map-wrap">

                                <div class="contact-form-wrap uk-flex">
                                    <div class="uk-container uk-container-center uk-flex-item-1">
                                        <div class="uk-grid  uk-grid-collapse uk-flex-item-1 uk-height-1-1 uk-nbfc">
                                            <div class="uk-width-5-10 contact-left uk-vertical-align contact-left-wrap">
                                                <div class="contact-info-lines uk-vertical-align-middle">

                                                    @if ($contactslow)
                                                        @for ($i = 0; $i < count($contactslow); $i += 4)
                                                            <?php
                                                            $name = $contactslow[$i];
                                                            $phone = $contactslow[$i + 1];
                                                            $mail = $contactslow[$i + 2];
                                                            $location = $contactslow[$i + 3];
                                                            ?>

                                                            <div class="item phone"><span class="icon"><i
                                                                        class="uk-icon-phone"></i></span>{{ $name->value ? $name->value : 'Name' }}
                                                            </div>
                                                            <div class="item mail"><span class="icon"><i
                                                                        class="uk-icon-envelope"></i></span><a
                                                                    href="mailto:support@cpsal.com">{{ $mail->value ? $mail->value : 'Email Address' }}</a>
                                                            </div>
                                                            <div class="item location"
                                                                style="padding-right: 150px !important"><span
                                                                    class="icon"><i
                                                                        class="uk-icon-map-marker"></i></span>{{ $location->value ? $location->value : 'Address' }}
                                                            </div>
                                                            </div>
                                                        @endfor
                                                    @endif 

                                            </div>
                                            <div class="uk-width-medium-5-10 uk-width-small-1-1 contact-right-wrap">
                                                <div class="contact-form uk-height-1-1">
                                                    <div
                                                        class="uk-position-cover uk-flex uk-flex-column uk-flex-center">
                                                        <div class="contact-form-title">
                                                            <h2>Get in touch</h2>
                                                        </div>
                                                        <div id="aiContactSafe_form_1">
                                                            <div class="aiContactSafe" id="aiContactSafe_mainbody_1">
                                                                <div class="contentpaneopen">
                                                                    <div id="aiContactSafeForm">
                                                                        <form method="post" id="adminForm_1"
                                                                            name="adminForm_1">
                                                                            <div id="displayAiContactSafeForm_1">
                                                                                <div class="aiContactSafe"
                                                                                    id="aiContactSafe_contact_form">
                                                                                    <div class="aiContactSafe"
                                                                                        id="aiContactSafe_info"></div>
                                                                                    <div class="aiContactSafe_row"
                                                                                        id="aiContactSafe_row_aics_name">
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_label_left">
                                                                                            <span
                                                                                                class="aiContactSafe_label"
                                                                                                id="aiContactSafe_label_aics_name"><label
                                                                                                    for="aics_name">Name</label></span>&nbsp;
                                                                                            <label
                                                                                                class="required_field">*</label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_name"
                                                                                                id="aics_name"
                                                                                                class="textbox"
                                                                                                placeholder="Name"
                                                                                                value=""
                                                                                                type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row"
                                                                                        id="aiContactSafe_row_aics_email">
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_label_left">
                                                                                            <span
                                                                                                class="aiContactSafe_label"
                                                                                                id="aiContactSafe_label_aics_email"><label
                                                                                                    for="aics_email">E-mail</label></span>&nbsp;
                                                                                            <label
                                                                                                class="required_field">*</label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_right">
                                                                                            <input name="aics_email"
                                                                                                id="aics_email"
                                                                                                class="email"
                                                                                                placeholder="Email"
                                                                                                value=""
                                                                                                type="text">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="aiContactSafe_row"
                                                                                        id="aiContactSafe_row_aics_message">
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_label_left">
                                                                                            <span
                                                                                                class="aiContactSafe_label"
                                                                                                id="aiContactSafe_label_aics_message"><label
                                                                                                    for="aics_message">Message</label></span>&nbsp;
                                                                                            <label
                                                                                                class="required_field">*</label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="aiContactSafe_contact_form_field_right">
                                                                                            <textarea name="aics_message" id="aics_message" cols="40" rows="10" class="editbox"
                                                                                                placeholder="Message"></textarea>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <br>
                                                                            <div id="aiContactSafeBtns">
                                                                                <div id="aiContactSafeButtons_center"
                                                                                    style="clear:both; display:block; text-align:center;">
                                                                                    <table
                                                                                        style="margin-left:auto; margin-right:auto;">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td>
                                                                                                    <div
                                                                                                        id="aiContactSafeSend_loading_1">
                                                                                                        &nbsp;</div>
                                                                                                </td>
                                                                                                <td  id="td_aiContactSafeSendButton">
                                                                                                    <input
                                                                                                        id="aiContactSafeSendButton"
                                                                                                        value="Send"
                                                                                                        type="submit">
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <script>
                                    window.map = false;



                                    function initialize() {
                                        var myLatlng = new google.maps.LatLng(50.3915097, -4.1306689);

                                        var mapOptions = {
                                            zoom: 16,
                                            center: myLatlng,
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            scrollwheel: false,

                                            streetViewControl: false,
                                            overviewMapControl: false,
                                            mapTypeControl: false

                                        };

                                        window.map = new google.maps.Map(document.getElementById('map'), mapOptions);

                                    }

                                    google.maps.event.addDomListener(window, 'load', initialize);
                                </script>
                                <div id="map"></div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div></x-layouts.website>
