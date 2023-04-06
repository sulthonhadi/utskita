<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Daftar Barang Koperasi</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous' />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Lobster&family=Montserrat:ital,wght@1,700&family=Square+Peg&display=swap" rel="stylesheet">

    <!-- JQUERY -->
    <script src="<?= base_url('assets/lib/jquery/jquery.min.js') ?>" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <style>
        :root{
            --primary: #fff;
            --primary2: #0000ff;
            --aksen: #bfcfff;
        }
        ::selection { background-color: var(--aksen); color: var(--primary); }
        ::-moz-selection { background-color: var(--aksen); color: var(--primary); }
    /* pagination style */
		.row .col-sm-12.col-md-7{
			width:100%;
			display:flex;
			flex-direction:column;
			align-items:center;
		}
		.dataTables_paginate .pagination .paginate_button.page-item.active a{
			background-color: var(--aksen);
			border-color: var(--primary2);
			color: var(--primary2);
		}
		.dataTables_paginate .paginate_button.page-item a{
			color: var(--primary2);
			border-color: var(--primary2);
			background-color: var(--primary2);
            color:var(--aksen);
		}
		.dataTables_paginate .paginate_button.previous.page-item.disabled a{
			color: var(--primary2);
			border-color: var(--primary2);
			background-color: var(--primary2);
            color:var(--aksen);
		}
		.dataTables_paginate .paginate_button.page-item a:hover{
			background-color: var(--primary2);
            color:var(--aksen);
			color: var(--primary2);
		}


		/* table place */
		.container-table{
			margin-top: 80px;
			bottom: 50px;
			left: 0;
			right: 0;
		}

		/* search style */
		.col-sm-12.col-md-6{
			width:98%;
			display:flex;
			flex-direction:column;
			align-items:flex-end;
			margin-right: 1%;
		}
		.col-sm-12.col-md-6 .dataTables_filter input.form-control{
			background-color: var(--aksen);
			width: 300px;
			border-color:#000;
		}
		.col-sm-12.col-md-6 .dataTables_filter input.form-control::placeholder{
			color:#000;
		}
        @media(max-width:768px){
            .table-responsive{
            overflow:hidden;
            overflow-x: scroll;
            }
        }
        .container_daytime h1{
            background: linear-gradient(90deg,#0000ff,#bfcfff);
            background-position: center;
            background-repeat: repeat;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 2px;
            margin-bottom: 0;
        }
        .time h5{
            background: linear-gradient(90deg,#bfcfff,#0000ff);
            background-position: center;
            background-repeat: repeat;
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: 2px;
        }
</style>
</head>
<body>
    
    <div class="">
        <?php
        echo $this->renderSection('content');
        ?>
    </div>
