<style>
    #search-banner {
        background-image: url(template/newAboutUs/images/banner/0.jpg);
        background-size: cover;
        min-height: 418px;
    }

    .page-title {
        text-align: center;
        color: #e62e04;
        padding: 20px;
    }

    .main-search {
        margin: 50px;
    }

    .search-options {
        margin: auto;
    }

    .search-options input[type='text'] {
        border-radius: 5px;
        height: 45px;
        margin-top: 30px;
        padding: 0.7em;
        margin: 0.4em 1em;
        background: none;
        outline: none;
        font-size: 1.1em;
        border: 1px solid #e6e6e6;
    }

    .search-options input[type='button'] {
        width: 150px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.3333333;
        border-radius: 6px;
        color: #fff;
        background-color: #e62e04;
        border-color: #e62e04;
    }

    .nav-tabs>li {
        float: left;
        margin-bottom: -1px
    }

    .nav-tabs>li>a {
        margin-right: 2px;
        line-height: 1.42857143;
        border: 1px solid transparent;
        border-radius: 4px 4px 0 0
    }

    .nav-tabs>li>a:hover {
        border-color: #eee #eee #ddd
    }

    .nav-tabs>li.active>a,
    .nav-tabs>li.active>a:focus,
    .nav-tabs>li.active>a:hover {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }


    .tab-content>.tab-pane {
        display: none
    }

    .tab-content>.active {
        display: block
    }

    .fade {
        opacity: 0;
        -webkit-transition: opacity .15s linear;
        -o-transition: opacity .15s linear;
        transition: opacity .15s linear
    }

    .fade.in {
        opacity: 1
    }

    .nav {
        padding-left: 0;
        margin-bottom: 0;
        list-style: none
    }

    .nav>li {
        position: relative;
        display: block
    }

    .nav>li>a {
        position: relative;
        display: block;
        padding: 10px 15px
    }

    .nav>li>a:focus,
    .nav>li>a:hover {
        text-decoration: none;
        background-color: #eee
    }

    .nav>li.disabled>a {
        color: #777
    }

    .nav>li.disabled>a:focus,
    .nav>li.disabled>a:hover {
        color: #777;
        text-decoration: none;
        cursor: not-allowed;
        background-color: transparent
    }

    ul.nav-tabs li a.active {
        color: #555;
        cursor: default;
        background-color: #fff;
        border: 1px solid #ddd;
        border-bottom-color: transparent
    }

    select.form-control {
        height: 34px !important;
    }
</style>

<div class="noprint">



    <section class="main-search">
        <div class="container">

            <h2>Search</h2>

            <ul class="nav nav-tabs">
                <li class="<?php
                            if ($nav_dropdown == 'id-search')
                                echo 'active';
                            ?>">
                    <a data-toggle="tab" href="#idSearch">Id Search</a>
                </li>
                <li class="<?php
                            if ($nav_dropdown == 'basic-search')
                                echo 'active';
                            ?>">
                    <a data-toggle="tab" href="#basicSearch">Basic Search</a></li>
                <li class="<?php
                            if ($nav_dropdown == 'education-search')
                                echo 'active';

                            ?>">
                    <a data-toggle="tab" href="#educationSearch">Education Search</a></li>
                <li class="<?php
                            if ($nav_dropdown == 'location-search')
                                echo 'active';
                            ?>">
                    <a data-toggle="tab" href="#locationSearch">Location Search</a></li>
                <li class="<?php
                            if ($nav_dropdown == 'advance-search')
                                echo 'active';
                            ?>">
                    <a data-toggle="tab" href="#advanceSearch">Advance Search</a></li>
            </ul>

            <div class="tab-content">
                <div id="idSearch" class="<?php
                                            if ($nav_dropdown == 'id-search')
                                                echo 'tab-pane fade in active';
                                            else echo 'tab-pane fade';
                                            ?>">
                    <h1 class="page-title">Id Search</h1>
                    <form class="form-inline  text-center" id="id-search-form" action="<?php echo base_url('id-search') ?>" method="post">
                        <input type="hidden" name="search_type" value="id-search">
                        <div class="form-group search-options">
                            <input type="text" class="form-control" name="search_id" id="search_id" placeholder="Enter ID" style=" width: 250px; height:45px; ">
                            <input type="button" class="search-btn btn btn-lg btn-info btn-base-1" value="Submit">
                        </div>
                    </form>
                    <script>
                        $(document).ready(function() {
                            $(".search-btn").click(function() {
                                var search_id = $("#search_id").val();
                                if (search_id.trim() == '') {
                                    $("#search_id").focus();
                                    return;
                                }

                                filter_members(0,'id_search');
                            });
                        });
                    </script>
                </div>
                <div id="basicSearch" class="<?php
                                                if ($nav_dropdown == 'basic-search')
                                                    echo 'tab-pane fade in active';
                                                else echo 'tab-pane fade';
                                                ?>">
                    <h1 class="page-title">Basic Search</h1>
                    <form class="form-inline  text-center" id="basic-search-form" action="<?php echo base_url('basic-search') ?>" method="post" style="flex-flow: column wrap;">
                        <input type="hidden" name="search_type" value="basic-search">
                        <div class="form-group search-options">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Select Gender: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control gender" name="gender" id="gender" style="width:390px; margin-top:7px; border:thin; border-style:solid; border-color:#e6e6e6;">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age: </td>
                                        <td style="display:inline-flex">
                                            <div class="col-md-6 ">
                                                <select class="form-control from-age" name="from_age" id="from_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 contact-top2">
                                                <select class="form-control to-age" name="to_age" id="to_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Religion: </td>
                                        <td>
                                            <select class="form-control religion" name="religion" id="religion" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                <option value="">Choose One</option>
                                                <option value="Hindu">Hindu</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Sikh">Sikh</option>
                                                <option value="Jain">Jain</option>
                                                <option value="Buddhist">Buddhist</option>
                                                <option value="Spiritual">Spiritual</option>
                                                <option value="Parsi">Parsi</option>
                                                <option value="Jewish">Jewish</option>
                                                <option value="Inter-Religion">Inter-Religion</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Caste: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control caste" name="caste" id="caste" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <option value="" selected=""><?php echo translate('choose_a_religion_first') ?></option>
                                                    <option value="Brahmin">Brahmin</option>
                                                    <option value="Kayastha">Kayastha</option>
                                                    <option value="Agarwal">Agarwal</option>
                                                    <option value="Rajput">Rajput</option>
                                                    <option value="Khatri">Khatri</option>
                                                    <option value="Maratha">Maratha</option>
                                                    <option value="Arora">Arora</option>
                                                    <option value="Scheduled Caste">Scheduled Caste</option>
                                                    <option value="Yadav">Yadav</option>
                                                    <option value="Punjabi">Punjabi</option>
                                                    <option value="Bengali">Bengali</option>
                                                    <option value="Nair">Nair</option>
                                                    <option value="Kshatriya">Kshatriya</option>
                                                    <option value="Gupta">Gupta</option>
                                                    <option value="Jat">Jat</option>
                                                    <option value="Adi Andhra">Adi Andhra</option>
                                                    <option value="Adi Dravida">Adi Dravida</option>
                                                    <option value="Adi Karnataka">Adi Karnataka</option>
                                                    <option value="Agnikula Kshatriya">Agnikula Kshatriya</option>
                                                    <option value="Agri">Agri</option>
                                                    <option value="Ahom">Ahom</option>
                                                    <option value="Ambalavasi">Ambalavasi</option>
                                                    <option value="Amil Sindhi">Amil Sindhi</option>
                                                    <option value="Anglo Indian">Anglo Indian</option>
                                                    <option value="Araya">Araya</option>
                                                    <option value="Arekatica">Arekatica</option>
                                                    <option value="Arunthathiyar">Arunthathiyar</option>
                                                    <option value="Arya Vysya">Arya Vysya</option>
                                                    <option value="Aryasamaj">Aryasamaj</option>
                                                    <option value="Ayyaraka">Ayyaraka</option>
                                                    <option value="Badaga">Badaga</option>
                                                    <option value="Bahi">Bahi</option>
                                                    <option value="Baibhand Sindhi">Baibhand Sindhi</option>
                                                    <option value="Baidya">Baidya</option>
                                                    <option value="Baishnab">Baishnab</option>
                                                    <option value="Baishya">Baishya</option>
                                                    <option value="Balija">Balija</option>
                                                    <option value="Banik">Banik</option>
                                                    <option value="Baniya">Baniya</option>
                                                    <option value="Banjara">Banjara</option>
                                                    <option value="Barai">Barai</option>
                                                    <option value="Bari">Bari</option>
                                                    <option value="Barujibi">Barujibi</option>
                                                    <option value="Besta">Besta</option>
                                                    <option value="Bhandari">Bhandari</option>
                                                    <option value="Bhanusali Sindhi">Bhanusali Sindhi</option>
                                                    <option value="Bhatia">Bhatia</option>
                                                    <option value="Bhatia Sindhi">Bhatia Sindhi</option>
                                                    <option value="Bhatraju">Bhatraju</option>
                                                    <option value="Bhavasar Kshatriya">Bhavasar Kshatriya</option>
                                                    <option value="Bhavsar">Bhavsar</option>
                                                    <option value="Bhovi">Bhovi</option>
                                                    <option value="Bhumihar Brahmin">Bhumihar Brahmin</option>
                                                    <option value="Billava">Billava</option>
                                                    <option value="Bishnoi/Vishnoi">Bishnoi/Vishnoi</option>
                                                    <option value="Boyer">Boyer</option>
                                                    <option value="Brahmbatt">Brahmbatt</option>
                                                    <option value="Bunt">Bunt</option>
                                                    <option value="Bunt (Shetty)">Bunt (Shetty)</option>
                                                    <option value="Chambhar">Chambhar</option>
                                                    <option value="Chandraseniya Kayastha Prab">Chandraseniya Kayastha Prab</option>
                                                    <option value="Chandravanshi Kahar">Chandravanshi Kahar</option>
                                                    <option value="Chasa">Chasa</option>
                                                    <option value="Chattada Sri Vaishnava">Chattada Sri Vaishnava</option>
                                                    <option value="Chaurasia">Chaurasia</option>
                                                    <option value="Chettiar">Chettiar</option>
                                                    <option value="Chhapru Sindhi">Chhapru Sindhi</option>
                                                    <option value="Chhetri">Chhetri</option>
                                                    <option value="Chippolu (Mera)">Chippolu (Mera)</option>
                                                    <option value="CKP">CKP</option>
                                                    <option value="Coorgi">Coorgi</option>
                                                    <option value="Dadu Sindhi">Dadu Sindhi</option>
                                                    <option value="Darji">Darji</option>
                                                    <option value="Dawoodi Bhora">Dawoodi Bhora</option>
                                                    <option value="Devadiga">Devadiga</option>
                                                    <option value="Devandra Kula Vellalar">Devandra Kula Vellalar</option>
                                                    <option value="Devang Koshthi">Devang Koshthi</option>
                                                    <option value="Devanga">Devanga</option>
                                                    <option value="Devar/Thevar/Mukkulathor">Devar/Thevar/Mukkulathor</option>
                                                    <option value="Devendra Kula Vellalar">Devendra Kula Vellalar</option>
                                                    <option value="Dhaneshawat Vaish">Dhaneshawat Vaish</option>
                                                    <option value="Dhangar">Dhangar</option>
                                                    <option value="Dheevara">Dheevara</option>
                                                    <option value="Dhiman">Dhiman</option>
                                                    <option value="Dhoba">Dhoba</option>
                                                    <option value="Dhobi">Dhobi</option>
                                                    <option value="Dumal">Dumal</option>
                                                    <option value="Dusadh (Paswan)">Dusadh (Paswan)</option>
                                                    <option value="Ediga">Ediga</option>
                                                    <option value="Ezhava">Ezhava</option>
                                                    <option value="Ezhuthachan">Ezhuthachan</option>
                                                    <option value="Gabit">Gabit</option>
                                                    <option value="Ganda">Ganda</option>
                                                    <option value="Gandla">Gandla</option>
                                                    <option value="Ganiga">Ganiga</option>
                                                    <option value="Ganigashetty">Ganigashetty</option>
                                                    <option value="Garhwali">Garhwali</option>
                                                    <option value="Garhwali Rajput">Garhwali Rajput</option>
                                                    <option value="Gavali">Gavali</option>
                                                    <option value="Gavara">Gavara</option>
                                                    <option value="Gawali">Gawali</option>
                                                    <option value="Ghisadi">Ghisadi</option>
                                                    <option value="Ghumar">Ghumar</option>
                                                    <option value="Goala">Goala</option>
                                                    <option value="Goan">Goan</option>
                                                    <option value="Gomantak">Gomantak</option>
                                                    <option value="Gomantak Maratha">Gomantak Maratha</option>
                                                    <option value="Gondhali">Gondhali</option>
                                                    <option value="Goswami">Goswami</option>
                                                    <option value="Goswami/Gosavi Brahmin">Goswami/Gosavi Brahmin</option>
                                                    <option value="Goud">Goud</option>
                                                    <option value="Gounder">Gounder</option>
                                                    <option value="Gowda">Gowda</option>
                                                    <option value="Gramani">Gramani</option>
                                                    <option value="Gudia">Gudia</option>
                                                    <option value="Gujarati">Gujarati</option>
                                                    <option value="Guptan">Guptan</option>
                                                    <option value="Gurav">Gurav</option>
                                                    <option value="Gurjar">Gurjar</option>
                                                    <option value="Hegde">Hegde</option>
                                                    <option value="Himachali">Himachali</option>
                                                    <option value="Hindu-Others">Hindu-Others</option>
                                                    <option value="Hugar (Jeer)">Hugar (Jeer)</option>
                                                    <option value="Hyderabadi Sindhi">Hyderabadi Sindhi</option>
                                                    <option value="Intercaste">Intercaste</option>
                                                    <option value="Irani">Irani</option>
                                                    <option value="Iyengar">Iyengar</option>
                                                    <option value="Iyer">Iyer</option>
                                                    <option value="Jaalari">Jaalari</option>
                                                    <option value="Jaiswal">Jaiswal</option>
                                                    <option value="Jandra">Jandra</option>
                                                    <option value="Jangam">Jangam</option>
                                                    <option value="Jatav">Jatav</option>
                                                    <option value="Jeer">Jeer</option>
                                                    <option value="Jogi (Nath)">Jogi (Nath)</option>
                                                    <option value="Kachara">Kachara</option>
                                                    <option value="Kadava Patel">Kadava Patel</option>
                                                    <option value="Kahar">Kahar</option>
                                                    <option value="Kaibarta">Kaibarta</option>
                                                    <option value="Kalal">Kalal</option>
                                                    <option value="Kalar">Kalar</option>
                                                    <option value="Kalinga">Kalinga</option>
                                                    <option value="Kalinga Vysya">Kalinga Vysya</option>
                                                    <option value="Kalita">Kalita</option>
                                                    <option value="Kalwar">Kalwar</option>
                                                    <option value="Kamboj">Kamboj</option>
                                                    <option value="Kamma">Kamma</option>
                                                    <option value="Kannada Mogaveera">Kannada Mogaveera</option>
                                                    <option value="Kansari">Kansari</option>
                                                    <option value="Kapu">Kapu</option>
                                                    <option value="Kapu Naidu">Kapu Naidu</option>
                                                    <option value="Karana">Karana</option>
                                                    <option value="Karmakar">Karmakar</option>
                                                    <option value="Karuneegar">Karuneegar</option>
                                                    <option value="Karuneekar">Karuneekar</option>
                                                    <option value="Kasar">Kasar</option>
                                                    <option value="Kashyap">Kashyap</option>
                                                    <option value="Katiya">Katiya</option>
                                                    <option value="Keralite">Keralite</option>
                                                    <option value="Khandayat">Khandayat</option>
                                                    <option value="Khandelwal">Khandelwal</option>
                                                    <option value="Kharwar">Kharwar</option>
                                                    <option value="Khatik">Khatik</option>
                                                    <option value="Khukhrain">Khukhrain</option>
                                                    <option value="Koiri">Koiri</option>
                                                    <option value="Kokanastha Maratha">Kokanastha Maratha</option>
                                                    <option value="Koli">Koli</option>
                                                    <option value="Koli Mahadev">Koli Mahadev</option>
                                                    <option value="Kongu Vellala Gounder">Kongu Vellala Gounder</option>
                                                    <option value="Konkani">Konkani</option>
                                                    <option value="Kori">Kori</option>
                                                    <option value="Koshti">Koshti</option>
                                                    <option value="Kudumbi">Kudumbi</option>
                                                    <option value="Kulal">Kulal</option>
                                                    <option value="Kulalar">Kulalar</option>
                                                    <option value="Kulita">Kulita</option>
                                                    <option value="Kumaoni">Kumaoni</option>
                                                    <option value="Kumaoni Rajput">Kumaoni Rajput</option>
                                                    <option value="Kumawat">Kumawat</option>
                                                    <option value="Kumbara">Kumbara</option>
                                                    <option value="Kumbhakar">Kumbhakar</option>
                                                    <option value="Kumbhar">Kumbhar</option>
                                                    <option value="Kumhar">Kumhar</option>
                                                    <option value="Kummari">Kummari</option>
                                                    <option value="Kunbi">Kunbi</option>
                                                    <option value="Kuravan">Kuravan</option>
                                                    <option value="Kurmi">Kurmi</option>
                                                    <option value="Kurmi Kshatriya">Kurmi Kshatriya</option>
                                                    <option value="Kuruba">Kuruba</option>
                                                    <option value="Kuruhina Shetty">Kuruhina Shetty</option>
                                                    <option value="Kurumbar">Kurumbar</option>
                                                    <option value="Kushwaha">Kushwaha</option>
                                                    <option value="Kushwaha (Koiri)">Kushwaha (Koiri)</option>
                                                    <option value="Kutchi">Kutchi</option>
                                                    <option value="Lambadi">Lambadi</option>
                                                    <option value="Lambani">Lambani</option>
                                                    <option value="Larai Sindhi">Larai Sindhi</option>
                                                    <option value="Larkana Sindhi">Larkana Sindhi</option>
                                                    <option value="Leva patel">Leva patel</option>
                                                    <option value="Leva Patidar">Leva Patidar</option>
                                                    <option value="Leva patil">Leva patil</option>
                                                    <option value="Lingayath">Lingayath</option>
                                                    <option value="Lodhi Rajput">Lodhi Rajput</option>
                                                    <option value="Lohana">Lohana</option>
                                                    <option value="Lohana Sindhi">Lohana Sindhi</option>
                                                    <option value="Lohar">Lohar</option>
                                                    <option value="Lubana">Lubana</option>
                                                    <option value="Madiga">Madiga</option>
                                                    <option value="Mahajan">Mahajan</option>
                                                    <option value="Mahar">Mahar</option>
                                                    <option value="Maharashtrian">Maharashtrian</option>
                                                    <option value="Mahendra">Mahendra</option>
                                                    <option value="Maheshwari">Maheshwari</option>
                                                    <option value="Mahishya">Mahishya</option>
                                                    <option value="Mahisya">Mahisya</option>
                                                    <option value="Majabi">Majabi</option>
                                                    <option value="Mala">Mala</option>
                                                    <option value="Malayalee">Malayalee</option>
                                                    <option value="Malayalee Namboodiri">Malayalee Namboodiri</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Mallah">Mallah</option>
                                                    <option value="Mangalorean">Mangalorean</option>
                                                    <option value="Manipuri">Manipuri</option>
                                                    <option value="Mannuru Kapu">Mannuru Kapu</option>
                                                    <option value="Mapila">Mapila</option>
                                                    <option value="Maruthuvar">Maruthuvar</option>
                                                    <option value="Marvar">Marvar</option>
                                                    <option value="Marwari">Marwari</option>
                                                    <option value="Matang">Matang</option>
                                                    <option value="Mathur">Mathur</option>
                                                    <option value="Maurya">Maurya</option>
                                                    <option value="Meena">Meena</option>
                                                    <option value="Meenavar">Meenavar</option>
                                                    <option value="Mehra">Mehra</option>
                                                    <option value="Menon">Menon</option>
                                                    <option value="Mera">Mera</option>
                                                    <option value="Meru">Meru</option>
                                                    <option value="Meru Darji">Meru Darji</option>
                                                    <option value="Mochi">Mochi</option>
                                                    <option value="Modak">Modak</option>
                                                    <option value="Mogaveera">Mogaveera</option>
                                                    <option value="Monchi">Monchi</option>
                                                    <option value="Mudaliar">Mudaliar</option>
                                                    <option value="Mudaliar - Senguntha">Mudaliar - Senguntha</option>
                                                    <option value="Mudaliar Arcot">Mudaliar Arcot</option>
                                                    <option value="Mudaliar Saiva">Mudaliar Saiva</option>
                                                    <option value="Mudaliyar">Mudaliyar</option>
                                                    <option value="Mudiraj">Mudiraj</option>
                                                    <option value="Mukkulathor">Mukkulathor</option>
                                                    <option value="Mukulathur">Mukulathur</option>
                                                    <option value="Munnuru Kapu">Munnuru Kapu</option>
                                                    <option value="Muthuraja">Muthuraja</option>
                                                    <option value="Naagavamsam">Naagavamsam</option>
                                                    <option value="Nadar">Nadar</option>
                                                    <option value="Nagaralu">Nagaralu</option>
                                                    <option value="Nai">Nai</option>
                                                    <option value="Naicker">Naicker</option>
                                                    <option value="Naidu">Naidu</option>
                                                    <option value="Naik">Naik</option>
                                                    <option value="Naik/Nayaka">Naik/Nayaka</option>
                                                    <option value="Naika">Naika</option>
                                                    <option value="Nair Vaniya">Nair Vaniya</option>
                                                    <option value="Nair Vilakkithala">Nair Vilakkithala</option>
                                                    <option value="Namasudra">Namasudra</option>
                                                    <option value="Nambiar">Nambiar</option>
                                                    <option value="Namboodiri">Namboodiri</option>
                                                    <option value="Namosudra">Namosudra</option>
                                                    <option value="Napit">Napit</option>
                                                    <option value="Nath">Nath</option>
                                                    <option value="Nayaka">Nayaka</option>
                                                    <option value="Neeli">Neeli</option>
                                                    <option value="Nepali">Nepali</option>
                                                    <option value="Nhavi">Nhavi</option>
                                                    <option value="OBC/Barber/Naayee">OBC/Barber/Naayee</option>
                                                    <option value="Oriya">Oriya</option>
                                                    <option value="Oswal">Oswal</option>
                                                    <option value="Otari">Otari</option>
                                                    <option value="Padmasali">Padmasali</option>
                                                    <option value="Padmashali">Padmashali</option>
                                                    <option value="Pal">Pal</option>
                                                    <option value="Panchal">Panchal</option>
                                                    <option value="Pandaram">Pandaram</option>
                                                    <option value="Panicker">Panicker</option>
                                                    <option value="Parkava Kulam">Parkava Kulam</option>
                                                    <option value="Parsi">Parsi</option>
                                                    <option value="Partraj">Partraj</option>
                                                    <option value="Pasi">Pasi</option>
                                                    <option value="Paswan">Paswan</option>
                                                    <option value="Patel">Patel</option>
                                                    <option value="Patel Desai">Patel Desai</option>
                                                    <option value="Patel Dodia">Patel Dodia</option>
                                                    <option value="Patel Kadva">Patel Kadva</option>
                                                    <option value="Patel Leva">Patel Leva</option>
                                                    <option value="Pathare Prabhu">Pathare Prabhu</option>
                                                    <option value="Patil">Patil</option>
                                                    <option value="Patil Leva">Patil Leva</option>
                                                    <option value="Patnaick">Patnaick</option>
                                                    <option value="Patnaick/Sistakaranam">Patnaick/Sistakaranam</option>
                                                    <option value="Patra">Patra</option>
                                                    <option value="Perika">Perika</option>
                                                    <option value="Pillai">Pillai</option>
                                                    <option value="Poosala">Poosala</option>
                                                    <option value="Porwal">Porwal</option>
                                                    <option value="Prajapati">Prajapati</option>
                                                    <option value="Raigar">Raigar</option>
                                                    <option value="Rajaka">Rajaka</option>
                                                    <option value="Rajastani">Rajastani</option>
                                                    <option value="Rajbhar">Rajbhar</option>
                                                    <option value="Rajbonshi">Rajbonshi</option>
                                                    <option value="Rajput Rohella/Tank">Rajput Rohella/Tank</option>
                                                    <option value="Ramdasia">Ramdasia</option>
                                                    <option value="Ramgariah">Ramgariah</option>
                                                    <option value="Ravidasia">Ravidasia</option>
                                                    <option value="Rawat">Rawat</option>
                                                    <option value="Reddy">Reddy</option>
                                                    <option value="Relli">Relli</option>
                                                    <option value="Rohiri Sindhi">Rohiri Sindhi</option>
                                                    <option value="Sadgope">Sadgope</option>
                                                    <option value="Saha">Saha</option>
                                                    <option value="Sahiti Sindhi">Sahiti Sindhi</option>
                                                    <option value="Sahu">Sahu</option>
                                                    <option value="Saini">Saini</option>
                                                    <option value="Sakkhar Sindhi">Sakkhar Sindhi</option>
                                                    <option value="Saliya">Saliya</option>
                                                    <option value="Saurashtra">Saurashtra</option>
                                                    <option value="Savji">Savji</option>
                                                    <option value="Scheduled Tribe">Scheduled Tribe</option>
                                                    <option value="Sehwani Sindhi">Sehwani Sindhi</option>
                                                    <option value="Senai Thalaivar">Senai Thalaivar</option>
                                                    <option value="Senguntha Mudaliyar">Senguntha Mudaliyar</option>
                                                    <option value="Sepahia">Sepahia</option>
                                                    <option value="Setti Balija">Setti Balija</option>
                                                    <option value="Settibalija">Settibalija</option>
                                                    <option value="Shah">Shah</option>
                                                    <option value="Shetty">Shetty</option>
                                                    <option value="Shikarpuri Sindhi">Shikarpuri Sindhi</option>
                                                    <option value="Shimpi">Shimpi</option>
                                                    <option value="Sindhi">Sindhi</option>
                                                    <option value="Sindhi-Amil">Sindhi-Amil</option>
                                                    <option value="Sindhi-Baibhand">Sindhi-Baibhand</option>
                                                    <option value="Sindhi-Bhanusali">Sindhi-Bhanusali</option>
                                                    <option value="Sindhi-Bhatia">Sindhi-Bhatia</option>
                                                    <option value="Sindhi-Chhapru">Sindhi-Chhapru</option>
                                                    <option value="Sindhi-Dadu">Sindhi-Dadu</option>
                                                    <option value="Sindhi-Hyderabadi">Sindhi-Hyderabadi</option>
                                                    <option value="Sindhi-Larai">Sindhi-Larai</option>
                                                    <option value="Sindhi-Larkana">Sindhi-Larkana</option>
                                                    <option value="Sindhi-Lohana">Sindhi-Lohana</option>
                                                    <option value="Sindhi-Rohiri">Sindhi-Rohiri</option>
                                                    <option value="Sindhi-Sahiti">Sindhi-Sahiti</option>
                                                    <option value="Sindhi-Sakkhar">Sindhi-Sakkhar</option>
                                                    <option value="Sindhi-Sehwani">Sindhi-Sehwani</option>
                                                    <option value="Sindhi-Shikarpuri">Sindhi-Shikarpuri</option>
                                                    <option value="Sindhi-Thatai">Sindhi-Thatai</option>
                                                    <option value="SKP">SKP</option>
                                                    <option value="Somvanshi">Somvanshi</option>
                                                    <option value="Sonar">Sonar</option>
                                                    <option value="Soni">Soni</option>
                                                    <option value="Sourashtra">Sourashtra</option>
                                                    <option value="Sozhiya Vellalar">Sozhiya Vellalar</option>
                                                    <option value="Srisayana">Srisayana</option>
                                                    <option value="Srisayani">Srisayani</option>
                                                    <option value="Sugali (Naika)">Sugali (Naika)</option>
                                                    <option value="Sunari">Sunari</option>
                                                    <option value="Sundhi">Sundhi</option>
                                                    <option value="Sutar">Sutar</option>
                                                    <option value="Suthar">Suthar</option>
                                                    <option value="Swakula Sali">Swakula Sali</option>
                                                    <option value="Swarnakar">Swarnakar</option>
                                                    <option value="Tamboli">Tamboli</option>
                                                    <option value="Tamil">Tamil</option>
                                                    <option value="Tamil Yadava">Tamil Yadava</option>
                                                    <option value="Tanti">Tanti</option>
                                                    <option value="Tantubai">Tantubai</option>
                                                    <option value="Tantuway">Tantuway</option>
                                                    <option value="Telaga">Telaga</option>
                                                    <option value="Teli">Teli</option>
                                                    <option value="Telugu">Telugu</option>
                                                    <option value="Thakkar">Thakkar</option>
                                                    <option value="Thakore">Thakore</option>
                                                    <option value="Thakur">Thakur</option>
                                                    <option value="Thatai Sindhi">Thatai Sindhi</option>
                                                    <option value="Thigala">Thigala</option>
                                                    <option value="Thiyya">Thiyya</option>
                                                    <option value="Tili">Tili</option>
                                                    <option value="Togata">Togata</option>
                                                    <option value="Tonk Kshatriya">Tonk Kshatriya</option>
                                                    <option value="Turupu Kapu">Turupu Kapu</option>
                                                    <option value="Udayar">Udayar</option>
                                                    <option value="Uppara">Uppara</option>
                                                    <option value="Urali Gounder">Urali Gounder</option>
                                                    <option value="Urs">Urs</option>
                                                    <option value="Vada Balija">Vada Balija</option>
                                                    <option value="Vadagalai">Vadagalai</option>
                                                    <option value="Vaddera">Vaddera</option>
                                                    <option value="Vaish">Vaish</option>
                                                    <option value="Vaishnav">Vaishnav</option>
                                                    <option value="Vaishnav Bhatia">Vaishnav Bhatia</option>
                                                    <option value="Vaishnav Vania">Vaishnav Vania</option>
                                                    <option value="Vaishnav Vanik">Vaishnav Vanik</option>
                                                    <option value="Vaishnava">Vaishnava</option>
                                                    <option value="Vaishya">Vaishya</option>
                                                    <option value="Vaishya Vani">Vaishya Vani</option>
                                                    <option value="Valluvan">Valluvan</option>
                                                    <option value="Valmiki">Valmiki</option>
                                                    <option value="Vania">Vania</option>
                                                    <option value="Vaniya">Vaniya</option>
                                                    <option value="Vanjara">Vanjara</option>
                                                    <option value="Vanjari">Vanjari</option>
                                                    <option value="Vankar">Vankar</option>
                                                    <option value="Vannar">Vannar</option>
                                                    <option value="Vannia Kula Kshatriyar">Vannia Kula Kshatriyar</option>
                                                    <option value="Vanniyar">Vanniyar</option>
                                                    <option value="Variar">Variar</option>
                                                    <option value="Varshney">Varshney</option>
                                                    <option value="Veera Saivam">Veera Saivam</option>
                                                    <option value="Veerashaiva">Veerashaiva</option>
                                                    <option value="Velaan/Vellalar">Velaan/Vellalar</option>
                                                    <option value="Velama">Velama</option>
                                                    <option value="Vellalar">Vellalar</option>
                                                    <option value="Vellalar Devandra Kula">Vellalar Devandra Kula</option>
                                                    <option value="Veluthedathu Nair">Veluthedathu Nair</option>
                                                    <option value="Vettuva Gounder">Vettuva Gounder</option>
                                                    <option value="Vilakkithala Nair">Vilakkithala Nair</option>
                                                    <option value="Vishwakarma">Vishwakarma</option>
                                                    <option value="Viswabrahmin">Viswabrahmin</option>
                                                    <option value="Vokkaliga">Vokkaliga</option>
                                                    <option value="Vysya">Vysya</option>
                                                    <option value="Yellapu">Yellapu</option>
                                                    <option value="Shia">Shia</option>
                                                    <option value="Sunni">Sunni</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Catholic">Catholic</option>
                                                    <option value="Orthodox">Orthodox</option>
                                                    <option value="Protestant">Protestant</option>
                                                    <option value="Others">Others</option>
                                                    <option value="Sikh - Ahluwalia">Sikh - Ahluwalia</option>
                                                    <option value="Sikh - Arora">Sikh - Arora</option>
                                                    <option value="Sikh - Bhatia">Sikh - Bhatia</option>
                                                    <option value="Sikh - Bhatra">Sikh - Bhatra</option>
                                                    <option value="Sikh - Clean Shaven">Sikh - Clean Shaven</option>
                                                    <option value="Sikh - Ghumar">Sikh - Ghumar</option>
                                                    <option value="Sikh - Gursikh">Sikh - Gursikh</option>
                                                    <option value="Sikh - Intercaste">Sikh - Intercaste</option>
                                                    <option value="Sikh - Jat">Sikh - Jat</option>
                                                    <option value="Sikh - Kamboj">Sikh - Kamboj</option>
                                                    <option value="Sikh - Kesadhari">Sikh - Kesadhari</option>
                                                    <option value="Sikh - Khatri">Sikh - Khatri</option>
                                                    <option value="Sikh - Kshatriya">Sikh - Kshatriya</option>
                                                    <option value="Sikh - Lubana">Sikh - Lubana</option>
                                                    <option value="Sikh - Majabi">Sikh - Majabi</option>
                                                    <option value="Sikh - Others">Sikh - Others</option>
                                                    <option value="Sikh - Rajput">Sikh - Rajput</option>
                                                    <option value="Sikh - Ramdasia">Sikh - Ramdasia</option>
                                                    <option value="Sikh - Ramgharia">Sikh - Ramgharia</option>
                                                    <option value="Sikh - Ravidasia">Sikh - Ravidasia</option>
                                                    <option value="Sikh - Saini">Sikh - Saini</option>
                                                    <option value="Sikh - Tonk Kshatriya">Sikh - Tonk Kshatriya</option>
                                                    <option value="Digambar">Digambar</option>
                                                    <option value="Jain-Others">Jain-Others</option>
                                                    <option value="Shewetamber">Shewetamber</option>
                                                    <option value="Sonam">Sonam</option>
                                                    <option value="jhnnj">jhnnj</option>
                                                    <option value="ss">ss</option>
                                                    <option value="Brahmin-Adi Gaur">Brahmin-Adi Gaur</option>
                                                    <option value="Brahmin- Adichya">Brahmin- Adichya</option>
                                                    <option value="Brahmin- Bhargava">Brahmin- Bhargava</option>
                                                    <option value="Brahmin- Bhatt">Brahmin- Bhatt</option>
                                                    <option value="Brahmin- Bhumihar">Brahmin- Bhumihar</option>
                                                    <option value="Brahmin-Chaturvedi">Brahmin-Chaturvedi</option>
                                                    <option value="Brahmin-Dadhich">Brahmin-Dadhich</option>
                                                    <option value="Brahmin- Garhwali">Brahmin- Garhwali</option>
                                                    <option value="Brahmin- Gaur">Brahmin- Gaur</option>
                                                    <option value="Brahmin- Goswami">Brahmin- Goswami</option>
                                                    <option value="Brahmin-Gurjar Gaur">Brahmin-Gurjar Gaur</option>
                                                    <option value="Brahmin- Iyer">Brahmin- Iyer</option>
                                                    <option value="Brahmin- Jangir">Brahmin- Jangir</option>
                                                    <option value="Brahmin- Jijhota">Brahmin- Jijhota</option>
                                                    <option value="Brahmin- Kanyakubj">Brahmin- Kanyakubj</option>
                                                    <option value="Brahmin- Kumaoni">Brahmin- Kumaoni</option>
                                                    <option value="Brahmin- Maithil">Brahmin- Maithil</option>
                                                    <option value="Brahmin- Nagar">Brahmin- Nagar</option>
                                                    <option value="Brahmin- Others">Brahmin- Others</option>
                                                    <option value="Brahmin- Paliwal">Brahmin- Paliwal</option>
                                                    <option value="Brahmin- Panda">Brahmin- Panda</option>
                                                    <option value="Brahmin- Pandit">Brahmin- Pandit</option>
                                                    <option value="Brahmin-Pareek">Brahmin-Pareek</option>
                                                    <option value="Brahmin- Rigvedi">Brahmin- Rigvedi</option>
                                                    <option value="Brahmin- Sakaldwipi">Brahmin- Sakaldwipi</option>
                                                    <option value="Brahmin- Sanadya">Brahmin- Sanadya</option>
                                                    <option value="Brahmin-Sanketi">Brahmin-Sanketi</option>
                                                    <option value="Brahmin-Saraswat">Brahmin-Saraswat</option>
                                                    <option value="Brahmin-Saryuparin">Brahmin-Saryuparin</option>
                                                    <option value="Brahmin- Shrimali">Brahmin- Shrimali</option>
                                                    <option value="Brahmin- Sri Gaur">Brahmin- Sri Gaur</option>
                                                    <option value="Brahmin= Vishnava">Brahmin= Vishnava</option>
                                                    <option value="Brahmin- Tyagi">Brahmin- Tyagi</option>
                                                    <option value="Brahmin- Vaidiki">Brahmin- Vaidiki</option>
                                                    <option value="Brahmin- Vaishnav">Brahmin- Vaishnav</option>
                                                    <option value="Brahmin- Vyas">Brahmin- Vyas</option>
                                                    <option value="Sain">Sain</option>
                                                    <option value="Bairwa">Bairwa</option>
                                                    <option value="Meghwal">Meghwal</option>
                                                    <option value="Brahmin-Khandal">Brahmin-Khandal</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>With Photo: </td>
                                        <td>
                                            <div class="col-md-12 text-left">
                                                <input type="checkbox" name="with_photo" class="checkbox" id="with_photo">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group search-options">
                            <input type="button" class="search-btn-basic btn btn-lg btn-info btn-base-1" value="Submit">
                        </div>
                    </form>
                    <script>
                        $(document).ready(function() {

                            $(".religion").change(function() {
                                var religion_id = $(this).val();
                                if (religion_id == "") {
                                    $(".caste").html("<option value=''><?php echo translate('choose_a_religion_first') ?></option>");
                                } else {
                                    $.ajax({
                                        url: "<?= base_url() ?>home/get_dropdown_by_id_caste/caste/religion_id/" + religion_id, // form action url
                                        type: 'POST', // form submit method get/post
                                        dataType: 'html', // request type html/json/xml
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function(data) {
                                            $(".caste").html(data);
                                        },
                                        error: function(e) {
                                            console.log(e)
                                        }
                                    });
                                }
                            });

                            $(".search-btn-basic").click(function() {
                                filter_members(0,'basic_search');
                            });
                        });

                        function init() {
                            $.ajax({
                                url: "<?= base_url() ?>home/get_dropdown_by_id/religion", // form action url
                                type: 'POST', // form submit method get/post
                                dataType: 'html', // request type html/json/xml
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $(".religion").html(data);
                                },
                                error: function(e) {
                                    console.log(e)
                                }
                            });
                        }

                        init();
                    </script>
                </div>
                <div id="educationSearch" class="<?php
                                                    if ($nav_dropdown == 'education-search')
                                                        echo 'tab-pane fade in active';
                                                    else echo 'tab-pane fade';
                                                    ?>">
                    <h1 class="page-title">Education Search</h1>
                    <form class="form-inline  text-center" id="education-search-form" action="<?php echo base_url('education-search') ?>" method="post" style="flex-flow: column wrap;">
                        <input type="hidden" name="search_type" value="education-search">
                        <div class="form-group search-options">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Select Gender: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control gender" name="gender" id="gender" style="width:390px; margin-top:7px; border:thin; border-style:solid; border-color:#e6e6e6;">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age: </td>
                                        <td style="display:inline-flex">
                                            <div class="col-md-6 ">
                                                <select class="form-control from-age" name="from_age" id="from_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 contact-top2">
                                                <select class="form-control to-age" name="to_age" id="to_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Education: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control" name="education" id="education" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6" onchange="fillcaste(this.value)">
                                                    <option value="" selected="">Choose One</option>
                                                    <option value="------------------------PG-Professional Courses------------------------" disabled="">------------------------PG-Professional Courses------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="CA (Chartered Accountant)">CA (Chartered Accountant)</option>
                                                    <option value="CFA (Chartered Financial Analyst)">CFA (Chartered Financial Analyst)</option>
                                                    <option value="CS (Company Secretary)">CS (Company Secretary)</option>
                                                    <option value="ICWA">ICWA</option>
                                                    <option value="Integrated PG">Integrated PG</option>
                                                    <option value="M.Arch. (Architecture)">M.Arch. (Architecture)</option>
                                                    <option value="M.Ed. (Education)">M.Ed. (Education)</option>
                                                    <option value="M.Lib.Sc. (Library Sciences)">M.Lib.Sc. (Library Sciences)</option>
                                                    <option value="M.Plan. (Planning)">M.Plan. (Planning)</option>
                                                    <option value="Master of Fashion Technology">Master of Fashion Technology</option>
                                                    <option value="Master of Health Administration">Master of Health Administration</option>
                                                    <option value="Master of Hospital Administration">Master of Hospital Administration</option>
                                                    <option value="MBA/PGDM">MBA/PGDM</option>
                                                    <option value="MCA PGDCA part time">MCA PGDCA part time</option>
                                                    <option value="MCA/PGDCA">MCA/PGDCA</option>
                                                    <option value="ME/M.Tech/MS (Engg/Sciences)">ME/M.Tech/MS (Engg/Sciences)</option>
                                                    <option value="MFA (Fine Arts)">MFA (Fine Arts)</option>
                                                    <option value="ML/LLM (Law)">ML/LLM (Law)</option>
                                                    <option value="MSW (Social Work)">MSW (Social Work)</option>
                                                    <option value="PG Diploma">PG Diploma</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------PG-General Courses------------------------" disabled="">------------------------PG-General Courses------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="M.Com. (Commerce)">M.Com. (Commerce)</option>
                                                    <option value="M.Sc. (Science)">M.Sc. (Science)</option>
                                                    <option value="MA (Arts)">MA (Arts)</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------Graduation-Professional Courses------------------------" disabled="">------------------------Graduation-Professional Courses------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="B.Arch (Architecture)">B.Arch (Architecture)</option>
                                                    <option value="B.Ed (Education)">B.Ed (Education)</option>
                                                    <option value="B.El.Ed (Elementary Education)">B.El.Ed (Elementary Education)</option>
                                                    <option value="B.Lib.Sc (Library Sciences)">B.Lib.Sc (Library Sciences)</option>
                                                    <option value="B.P.Ed. (Physical Education)">B.P.Ed. (Physical Education)</option>
                                                    <option value="B.Plan (Planning)">B.Plan (Planning)</option>
                                                    <option value="Bachelor of Fashion Technology">Bachelor of Fashion Technology</option>
                                                    <option value="BBA/BBM/BBS">BBA/BBM/BBS</option>
                                                    <option value="BCA (Computer Application)">BCA (Computer Application)</option>
                                                    <option value="BE B.Tech (Engineering)">BE B.Tech (Engineering)</option>
                                                    <option value="BFA (Fine Arts)">BFA (Fine Arts)</option>
                                                    <option value="BHM (Hotel Management)">BHM (Hotel Management)</option>
                                                    <option value="BL/LLB/BGL (Law)">BL/LLB/BGL (Law)</option>
                                                    <option value="BSW (Social Work)">BSW (Social Work)</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------Graduation-General Courses------------------------" disabled="">------------------------Graduation-General Courses------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="B.A. (Arts)">B.A. (Arts)</option>
                                                    <option value="B.Com (Commerce)">B.Com (Commerce)</option>
                                                    <option value="B.Sc (Science)">B.Sc (Science)</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------Medicine (General/Dental/Surgeon)------------------------" disabled="">------------------------Medicine (General/Dental/Surgeon)------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="B.A.M.S (Bachelor of Ayurvedic Medicine and Surgery)">B.A.M.S (Bachelor of Ayurvedic Medicine and Surgery)</option>
                                                    <option value="B.Pharm (Pharmacy)">B.Pharm (Pharmacy)</option>
                                                    <option value="B.V.Sc. (Veterinary Science)">B.V.Sc. (Veterinary Science)</option>
                                                    <option value="BDS (Dental Surgery)">BDS (Dental Surgery)</option>
                                                    <option value="BHMS (Homeopathy)">BHMS (Homeopathy)</option>
                                                    <option value="M.Pharm. (Pharmacy)">M.Pharm. (Pharmacy)</option>
                                                    <option value="M.V.Sc. (Veterinary Science)">M.V.Sc. (Veterinary Science)</option>
                                                    <option value="MBBS">MBBS</option>
                                                    <option value="MD/ MS (Medicine)">MD/ MS (Medicine)</option>
                                                    <option value="MDS (Master of Dental Surgery)">MDS (Master of Dental Surgery)</option>
                                                    <option value="BPT (Physiotherapy)">BPT (Physiotherapy)</option>
                                                    <option value="MPT (Physiotherapy)">MPT (Physiotherapy)</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------Doctorate (Phd)------------------------" disabled="">------------------------Doctorate (Phd)------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="M.Phil. (Philosophy)">M.Phil. (Philosophy)</option>
                                                    <option value="Ph.D. (Doctorate)">Ph.D. (Doctorate)</option>
                                                    <option value="Other Doctorate">Other Doctorate</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------Diploma Courses------------------------" disabled="">------------------------Diploma Courses------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="Arts/ Graphic Designing">Arts/ Graphic Designing</option>
                                                    <option value="Engineering">Engineering</option>
                                                    <option value="Fashion/ Design">Fashion/ Design</option>
                                                    <option value="Languages">Languages</option>
                                                    <option value="Pilot Licenses">Pilot Licenses</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------12th but not pursuing graduation------------------------" disabled="">------------------------12th but not pursuing graduation------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="12th">12th</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="------------------------10th but not pursuing 12th------------------------" disabled="">------------------------10th but not pursuing 12th------------------------</option>
                                                    <option value="" disabled=""></option>
                                                    <option value="10th">10th</option>
                                                    <option value="IIT/IIM">IIT/IIM</option>
                                                    <option value="D- Pharma">D- Pharma</option>
                                                    <option value="ANM/GNM/ Nursing">ANM/GNM/ Nursing</option>
                                                    <option value="B.Sc (Nursing)">B.Sc (Nursing)</option>
                                                    <option value="ITI">ITI</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>With Photo: </td>
                                        <td>
                                            <div class="col-md-12 text-left">
                                                <input type="checkbox" name="with_photo" class="checkbox" id="with_photo">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group search-options">
                            <input type="button" class="search-btn-education btn btn-lg btn-info btn-base-1" value="Submit">
                        </div>
                    </form>
                    <script>
                        $(document).ready(function() {
                            $(".search-btn-education").click(function() {
                                filter_members(0,'education_search');
                            });
                        });
                    </script>
                </div>
                <div id="locationSearch" class="<?php
                                                if ($nav_dropdown == 'location-search')
                                                    echo 'tab-pane fade in active';
                                                else echo 'tab-pane fade';
                                                ?>">
                    <h1 class="page-title">Location Search</h1>
                    <form class="form-inline  text-center" id="location-search-form" action="<?php echo base_url('location-search') ?>" method="post" style="flex-flow: column wrap;">
                        <input type="hidden" name="search_type" value="location-search">
                        <div class="form-group search-options">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Select Gender: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control gender" name="gender" id="gender" style="width:390px; margin-top:7px; border:thin; border-style:solid; border-color:#e6e6e6;">
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Age: </td>
                                        <td style="display:inline-flex">
                                            <div class="col-md-6 ">
                                                <select class="form-control from-age" name="from_age" id="from_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 contact-top2">
                                                <select class="form-control to-age" name="to_age" id="to_age" style="width:180px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <?php
                                                    for ($i = 18; $i <= 65; $i++) {
                                                    ?>
                                                        <option value=<?php echo $i ?>><?php echo $i ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Country: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select name="country" class="form-control"  data-placeholder="Choose a country" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                <option value="101"><?php echo translate("india") ?></option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>State: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select name="state" class="form-control"  id="location_state" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <option value=""><?php echo translate('choose_a_country_first') ?></option>
                                                    <?php
                                                    foreach ($states as $k => $v) {
                                                    ?>
                                                        <option value="<?php echo $v->state_id; ?>"><?php echo $v->name;  ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <!--tr>
                            <td>District: </td>
                            <td>
                                <div class="col-md-6 ">
                                    <select class="form-control span12 dist" name="dist" id="dist" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6" onchange="fillcity(this.value)">
                                        <option value="Any" selected="">Any</option>
                                    </select>
                                </div>
                            </td>
                        </tr-->
                                    <tr>
                                        <td>City: </td>
                                        <td>
                                            <div class="col-md-6 ">
                                                <select class="form-control state" name="city" data-placeholder="Choose a city" style="width:390px;margin-top:7px;border:thin; border-style:solid;border-color:#e6e6e6">
                                                    <option value="">Choose one</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>With Photo: </td>
                                        <td>
                                            <div class="col-md-12 text-left">
                                                <input type="checkbox" name="with_photo" class="checkbox" id="with_photo">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group search-options">
                            <input type="button" class="search-btn-location btn btn-lg btn-info btn-base-1" value="Submit">
                        </div>
                    </form>
                    <script>
                        $(document).ready(function() {
                            $(".country").change(function() {
                                var country_id = $(this).val();
                                if (country_id == "") {
                                    $(".state").html("<option value=''><?php echo translate('choose_a_country_first') ?></option>");
                                    $(".city").html("<option value=''><?php echo translate('choose_a_state_first') ?></option>");
                                } else {
                                    $.ajax({
                                        url: "<?= base_url() ?>home/get_dropdown_by_id/state/country_id/" + country_id, // form action url
                                        type: 'POST', // form submit method get/post
                                        dataType: 'html', // request type html/json/xml
                                        cache: false,
                                        contentType: false,
                                        processData: false,
                                        success: function(data) {
                                            $(".state").html(data);
                                            $(".city").html("<option value=''><?php echo translate('choose_a_state_first') ?></option>");
                                        },
                                        error: function(e) {
                                            console.log(e)
                                        }
                                    });
                                }
                            });


                            $(".search-btn-location").click(function() {
                         
                                filter_members(0,'location_search');
                            });
                            $('select#location_state').change(function() {
                                fetchCity("location_state");
                            });
                        });


                        function init() {
                            $.ajax({
                                url: "<?= base_url() ?>home/get_dropdown_by_id/country", // form action url
                                type: 'POST', // form submit method get/post
                                dataType: 'html', // request type html/json/xml
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: function(data) {
                                    $(".country").html(data);
                                },
                                error: function(e) {
                                    console.log(e)
                                }
                            });
                        }

                        init();
                    </script>
                </div>
                <div id="advanceSearch" class="<?php
                                                if ($nav_dropdown == 'advance-search')
                                                    echo 'tab-pane fade in active';
                                                else echo 'tab-pane fade';
                                                ?>">
                    <h1 class="page-title">Advance Search</h1>
                    <form class="form-default w-50 mx-auto" id="advance-search-form" data-toggle="validator" role="form">
                        <?php if (!empty($this->session->userdata['member_id'])) { ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('looking_for') ?></label>
                                        <div class="radio radio-primary">
                                            <?php $member_gender = $this->db->get_where('member', array('member_id' => $this->session->userdata['member_id']))->row()->gender; ?>
                                            <?php if ($member_gender == '2') { ?>
                                                <input type="radio" name="gender" id="groom" value="1" <?php if (!empty($home_gender == 1)) { ?>checked<?php } ?>>
                                                <label for="groom"><?= translate('groom') ?></label>

                                            <?php } elseif ($member_gender == '1') { ?>
                                                <input type="radio" name="gender" id="bride" value="2" <?php if (!empty($home_gender == 2)) { ?>checked<?php } ?>>
                                                <label for="bride" class="pr-3"><?= translate('bride') ?></label>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('looking_for') ?></label>
                                        <div class="radio radio-primary">
                                            <input type="radio" name="gender" id="bride" value="2" <?php if (!empty($home_gender == 2)) { ?>checked<?php } ?>>
                                            <label for="bride" class="pr-3"><?= translate('bride') ?></label>
                                            <input type="radio" name="gender" id="groom" value="1" <?php if (!empty($home_gender == 1)) { ?>checked<?php } ?>>
                                            <label for="groom"><?= translate('groom') ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('age_from') ?></label>
                                    <input type="number" class="form-control form-control-sm" name="aged_from" id="filter_aged_from" value="<?php if (isset($aged_from)) {
                                                                                                                                                echo $aged_from;
                                                                                                                                            } ?>">
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('to') ?></label>
                                    <input type="number" class="form-control form-control-sm" name="aged_to" id="filter_aged_to" value="<?php if (isset($aged_to)) {
                                                                                                                                            echo $aged_to;
                                                                                                                                        } ?>">
                                </div>
                                <div class="help-block with-errors">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('member_id') ?></label>
                                    <input type="text" class="form-control form-control-sm" name="member_id" id="filter_member_id" value="<?php if (isset($member_id)) {
                                                                                                                                                echo $member_id;
                                                                                                                                            } ?>">
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group has-feedback">
                                    <label for="" class="text-uppercase"><?php echo translate('marital_status') ?></label>
                                    <?= $this->Crud_model->select_html('marital_status', 'marital_status', 'name', 'edit', 'form-control form-control-sm selectpicker', '', '', '', ''); ?>
                                    <span class="help-block with-errors"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-sm-12">
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'spiritual_and_social_background'))->row()->value == "yes") {
                                ?>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('religion') ?></label>
                                        <?= $this->Crud_model->select_html('religion', 'religion', 'name', 'edit', 'form-control form-control-sm selectpicker s_religion', $home_religion, '', '', ''); ?>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('caste_/_sect') ?></label>

                                        <select class="form-control form-control-sm selectpicker s_caste" name="caste">
                                            <option value="<?= $home_caste ?>"><?php echo translate('choose_a_religion_first') ?></option>
                                        </select>

                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback" id="">
                                        <label for="" class="text-uppercase"><?php echo translate('sub_caste') ?></label>

                                        <select class="form-control form-control-sm selectpicker s_sub_caste" name="sub_caste">
                                            <option value="<?= $home_sub_caste ?>"><?php echo translate('choose_a_caste_first') ?></option>
                                        </select>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'language'))->row()->value == "yes") {
                                ?>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('mother_tongue') ?></label>
                                        <?= $this->Crud_model->select_html('language', 'language', 'name', 'edit', 'form-control form-control-sm selectpicker', $home_language, '', '', ''); ?>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'education_and_career'))->row()->value == "yes") {
                                ?>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('profession') ?></label>
                                        <input type="text" class="form-control form-control-sm" name="profession" id="filter_profession" value="<?php if (isset($profession)) {
                                                                                                                                                    echo $profession;
                                                                                                                                                } ?>">
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                if ($this->db->get_where('frontend_settings', array('type' => 'present_address'))->row()->value == "yes") {
                                ?>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('country') ?></label>
                                        <select name="country" required class="form-control form-control-sm" data-placeholder="Choose a country">

                                            <option value="101"><?php echo translate("india") ?></option>
                                        </select>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('state') ?></label>

                                        <select class="form-control form-control-sm" name="state" id="advance_state">
                                            <option value=""><?php echo translate('choose_a_country_first') ?></option>
                                            <?php
                                            foreach ($states as $k => $v) {
                                            ?>
                                                <option value="<?php echo $v->state_id; ?>"><?php echo $v->name;  ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('city') ?></label>
                                        <select name="city" class="form-control form-control-sm" data-placeholder="Choose a city">
                                            <option value="">Choose one</option>
                                        </select>
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                        if ($this->db->get_where('frontend_settings', array('type' => 'physical_attributes'))->row()->value == "yes") {
                        ?>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('min_height_(Feet)') ?></label>
                                        <input type="text" class="form-control form-control-sm height_mask" name="min_height" id="min_height" value="<?php if ($min_height != "") {
                                                                                                                                                            echo $min_height;
                                                                                                                                                        } else {
                                                                                                                                                            echo '0.00';
                                                                                                                                                        } ?>">
                                        <div class="help-block with-errors">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group has-feedback">
                                        <label for="" class="text-uppercase"><?php echo translate('max_height_(Feet)') ?></label>
                                        <input type="text" class="form-control form-control-sm height_mask" name="max_height" id="max_height" value="<?php if ($max_height != "") {
                                                                                                                                                            echo $max_height;
                                                                                                                                                        } else {
                                                                                                                                                            echo '8.00';
                                                                                                                                                        } ?>">
                                    </div>
                                    <div class="help-block with-errors">
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                        <div class="pt-0">
                            <div class="card-title b-xs-bottom">
                                <h3 class="heading heading-sm text-uppercase"><?php echo translate('member_type') ?></h3>
                            </div>
                            <div class="card-body">
                                <div class="filter-radio">
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_all_members" value="all" <?php if (!empty($search_member_type == "all")) { ?>checked<?php } ?>>
                                        <label for="s_all_members"><?php echo translate('all_members') ?></label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_premium_members" value="premium_members" <?php if (!empty($search_member_type == "premium_members")) { ?>checked<?php } ?>>
                                        <label for="s_premium_members"><?php echo translate('premium_members') ?></label>
                                    </div>
                                    <div class="radio radio-primary">
                                        <input type="radio" name="search_member_type" id="s_free_members" value="free_members" <?php if (!empty($search_member_type == "free_members")) { ?>checked<?php } ?>>
                                        <label for="s_free_members"><?php echo translate('free_members') ?></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-block btn-base-1 mt-2 z-depth-2-bottom" onclick="filter_members('0','advance_search')"><?php echo translate('search') ?></button>
                    </form>

                </div>
            </div>
    </section>
    <script>
        $('select#advance_state').change(function() {
            fetchCity('advance_state');
        });



        function fetchCity(key) {
            
            var state_id = $('select#'+key).val();
            console.log('state_id')
            console.log(state_id)
            $.ajax({
                url: "<?php echo base_url() ?>home/get_dropdown_by_id_city/city/state_id/" + state_id,
                method: "POST",
                dataType: 'html', // request type html/json/xml
                data: {
                    table: 'city',
                    field: 'state_id',
                    id: state_id
                },
                success: function(data) {
                    $('select[name="city"]').html(data);
                }
            });
        }

        function filter_members(page, type) {
            var url = '<?php echo base_url(); ?>home/ajax_search_list/' + page + '/';
            if(type==='id_search'){
                var form = $('#id-search-form');
            }else if(type==='basic_search'){
                var form = $('#basic-search-form');
            }else if(type==='education_search'){
                var form = $('#education-search-form');
            }else if(type==='location_search'){
                var form = $('#location-search-form');
            }else if(type==='advance_search'){
                var form = $('#advance-search-form');
            }
            var place = $('#result');
            var formdata = false;
            if (window.FormData) {
                formdata = new FormData(form[0]);
            }
            $(".btn-back-to-top").click();
            $.ajax({
                url: url, // form action url
                type: 'POST', // form submit method get/post
                dataType: 'html', // request type html/json/xml
                data: formdata ? formdata : form.serialize(), // serialize form data
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    place.html("");
                    place.html("<div class='text-center pt-5 pb-5' id='payment_loader'><i class='fa fa-refresh fa-5x fa-spin'></i><p>Please Wait...</p></div>").fadeIn();
                },
                success: function(data) {
                    var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;
                    if (width <= 768) {
                        $(".size-sm").css("display", "none");
                        $(".size-sm-btn").css("display", "block");
                    }
                    setTimeout(function() {
                        place.html(data); // fade in response data
                    }, 20);
                    setTimeout(function() {
                        place.fadeIn(); // fade in response data
                    }, 30);
                },
                error: function(e) {
                    console.log(e)
                }
            });
        }
    </script>
</div>
<script>
    $('ul.nav-tabs li a').click(function(){
        $('#result').html('')
    })
</script>

<section class="slice sct-color-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="margin:auto">
                <input type="hidden" id="member_type" value="<?php if (!empty($member_type)) {
                                                                    echo $member_type;
                                                                } ?>">
                <div class="block-wrapper" id="result">
                </div>
                <div id="pagination" style="float: right;">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7110.342296643133!2d75.76782217529804!3d26.993135282372016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db38bfb061ef3%3A0xe19ce734a7b10b26!2sthe%20varvadhu!5e0!3m2!1sen!2sin!4v1595499468169!5m2!1sen!2sin" frameborder="0" style="border:0; width:100%; min-height:352px;" allowfullscreen></iframe>
</section>