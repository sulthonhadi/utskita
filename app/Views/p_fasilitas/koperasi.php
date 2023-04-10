<div class="py-5" >
    <div class="table-responsive datatables-wrapper">
        <table id="example" class="table table-striped table-hover border-1 caption-top text-center mt-3"
        style="background-color: var(--primary);width: 95%;margin:2.5%;height:65vh;" >
            <caption style="width: 400px;text-align: center;letter-spacing: 1px;font-size: 48px;
                    border-bottom-right-radius: 50px;color: #fff;background-color: var(--primary2);
                    font-family: 'Square Peg', cursive;font-style: 'Square Peg';font-weight: 400px;
                    margin-bottom: 20px ;">
                <h1>Daftar Barang Koperasi</h1>
            </caption>
            <thead class="mt5 " style="background-color: var(--primary2);color: var(--aksen);height:40px;">
                <tr>
                    <th class="table-head" scope="col";>No</th>
                    <th class="table-head" scope="col";>Kode Barang</th>
                    <th class="table-head" scope="col";>Nama Barang</th>
                    <th class="table-head" scope="col";>Harga</th>
                    <th class="table-head" scope="col";>Kategori</th>
                    <th class="table-head" scope="col";>Satuan</th>
                    <th class="table-head" scope="col";>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no=1
                ?>
                <tr>
                    <td class="table-row" scope="col"><?=$no++?></td>
                    <td class="table-row" scope="col";>aaaaaaaaa</td>
                    <td class="table-row" scope="col">bbbbbbbbb</td>
                    <td class="table-row" scope="col";>ccccccccc</td>
                    <td class="table-row" scope="col">ddddddd</td>
                    <td class="table-row" scope="col";>eeeeeeee</td>
                    <td class="table-row" scope="col";>fffffff</td>
                </tr>
            <?php
            $sisa =  $no % 10;

            for ($i = 1; $i <= 11-$sisa; $i++) {
                if ($i % 10 !== 0) {			
            ?>
            <tr>
            <td class="table-row" scope="row"><?=$no++?></td>
            <td class="table-row" scope="row"></td>
            <td class="table-row" scope="row"></td>
            <td class="table-row" scope="row"></td>
            <td class="table-row" scope="row"></td>
            <td class="table-row" scope="row"></td>
            <td class="table-row" scope="row"></td>
            </tr>
            <?php 
                }
            }
            ?>
            
            </tbody>
        </table>
    </div>
</div>
    <?php
date_default_timezone_set("Asia/Jakarta");
$now = time();
$day = date('l', $now);
$hour = date('H', $now);

if ($day == "Monday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "MONDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "MONDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "MONDAY";
        $waktu = "EVENING";
    }else{
        $hari = "MONDAY";
        $waktu = "NIGHT";
    }
}elseif ($day == "Tuesday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "TUESDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "TUESDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "TUESDAY";
        $waktu = "EVENING";
    }else {
        $hari = "TUESDAY";
        $waktu = "NIGHT";
    }
}elseif ($day == "Wednesday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "WEDNESDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "WEDNESDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "WEDNESDAY";
        $waktu = "EVENING";
    }else {
        $hari = "WEDNESDAY";
        $waktu = "NIGHT";
    }
}elseif ($day == "Thursday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "THURSDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "THURSDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "THURSDAY";
        $waktu = "EVENING";
    }else {
        $hari = "THURSDAY";
        $waktu = "NIGHT";
    }
}elseif ($day == "Friday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "FRIDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "FRIDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "FRIDAY";
        $waktu = "EVENING";
    }else {
        $hari = "FRIDAY";
        $waktu = "NIGHT";
    }
}elseif ($day == "Saturday"){
    if ($hour >= 04 && $hour < 12){
        $hari = "SATURDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "SATURDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "SATURDAY";
        $waktu = "EVENING";
    }else {
        $hari = "SATURDAY";
        $waktu = "NIGHT";
    }
}else {
    if ($hour >= 04 && $hour < 12){
        $hari = "SUNDAY";
        $waktu = "MORNING";
    }elseif ($hour >= 12 && $hour < 15){
        $hari = "SUNDAY";
        $waktu = "AFTERNOON";
    }elseif ($hour >= 15 && $hour < 18){
        $hari = "SUNDAY";
        $waktu = "EVENING";
    }else{
        $hari = "SUNDAY";
        $waktu = "NIGHT";
    }
}
?>
<div class="container" style="display: flex;justify-content: center;align-items: center;width: 100%;">
    <div class="container_daytime" style="display: flex;width: 95vw;width: 80%;align-items: center;justify-content: center;flex-direction: column;margin-bottom: 0;">
        <div class="day">
            <h1 style="font-size: 45px;font-family: 'Kanit',sans-serif;font-weight:900;"><?php echo "$hari";?></h1>
        </div>
        <div class="time">
            <h5 style="font-size: 25px;font-family: 'Kanit',sans-serif;font-weight: 900;"><?php echo "$waktu";?></h5>
        </div>
    </div>
</div>
