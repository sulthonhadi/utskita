<?php
echo $this->extend('template_by_nofal');
echo $this->section('content') ?>
<!-- Nav tabs -->
<div class="container mt-5">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pmii-tab" data-bs-toggle="tab" data-bs-target="#pmii" type="button" role="tab" aria-controls="home" aria-selected="true">PMII</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">banjari</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">bulutangkis</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">futsal</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#banjari" type="button" role="tab" aria-controls="messages" aria-selected="false">teater</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#seni" type="button" role="tab" aria-controls="messages" aria-selected="false">seni</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#volly" type="button" role="tab" aria-controls="messages" aria-selected="false">volly</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#qiroah" type="button" role="tab" aria-controls="messages" aria-selected="false">qiroah</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#pramuka" type="button" role="tab" aria-controls="messages" aria-selected="false">pramuka</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#penalaran" type="button" role="tab" aria-controls="messages" aria-selected="false">penalaran</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#pn" type="button" role="tab" aria-controls="messages" aria-selected="false">pagar nusa</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#kewirausahaan" type="button" role="tab" aria-controls="messages" aria-selected="false">kewirausaan</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#teater" type="button" role="tab" aria-controls="messages" aria-selected="false">teater</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#etnika_nusantara" type="button" role="tab" aria-controls="messages" aria-selected="false">etnika nusantara</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#etnika_nusantara" type="button" role="tab" aria-controls="messages" aria-selected="false">etnika nusantara</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#desain_grafis" type="button" role="tab" aria-controls="messages" aria-selected="false">desain grafis</button>
        </li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php
            include('struktur_pmii.php');
            ?>
        </div>
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <?php
            include('banjari.php');
            ?>
        </div>
        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <?php
            include('bulutangkis.php');
            ?>
        </div>
        <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('futsal.php');
            ?>
        </div>
        <div class="tab-pane" id="banjari" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('teater.php');
            ?>
        </div>
        <div class="tab-pane" id="seni" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('seni.php');
            ?>
        </div>
        <div class="tab-pane" id="volly" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('volly.php');
            ?>
        </div>
        <div class="tab-pane" id="qiroah" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('qiroah.php');
            ?>
        </div>
        <div class="tab-pane" id="pramuka" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('pramuka.php');
            ?>
        </div>
        <div class="tab-pane" id="penalaran" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('penalaran.php');
            ?>
        </div>
        <div class="tab-pane" id="pn" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('pn.php');
            ?>
        </div>
        <div class="tab-pane" id="kewirausahaan" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('kewirausahaan.php');
            ?>
        </div>
        <div class="tab-pane" id="teater" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('teater.php');
            ?>
        </div>
        <div class="tab-pane" id="etnika_nusantara" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('etnika_nusantara.php');
            ?>
        </div>
        <div class="tab-pane" id="desain_grafis" role="tabpanel" aria-labelledby="messages-tab">
            <?php
            include('desain_grafis.php');
            ?>
        </div>
    </div>

</div>

<?php echo $this->endSection() ?>