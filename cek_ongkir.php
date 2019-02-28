<?php
 $asal = 154;
 $id_kabupaten = $_POST['kab_id'];
 $kurir = $_POST['kurir'];
 $berat = $_POST['berat'];

 $curl = curl_init();
 curl_setopt_array($curl, array(
   CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 30,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
   CURLOPT_HTTPHEADER => array(
     "content-type: application/x-www-form-urlencoded",
     "key: b84f8ce759c95a64df91967d63ddeead"
   ),
 ));

 $response = curl_exec($curl);
 $err = curl_error($curl);

 $data = json_decode($response);

 //echo $response;

 //echo 'kurir :'.$data->rajaongkir-results[0]->name;
 echo '
    <h4>Paket Pengiriman.</h4>
    <p>Kurir : '.$data->rajaongkir->results[0]->name.'</p><br>
    <table class="table" border="1">
        <thead>
          <tr>
            <th><b>No. </b></th>
            <th><b>Service </b></th>
            <th><b>Harga </b></th>
            <th>Option</th>
          </b></tr>
        </thead>
        <tbody>';
    $i=1;    
 foreach($data->rajaongkir->results[0]->costs as $hasil){
        $bataswaktu = $hasil->cost[0]->etd;
        if ($bataswaktu == 1){
            echo '
            <tr>
                <td>'.$i++.'</td>
                <td>'.$hasil->service.'</td>
                <td>Rp. '.$hasil->cost[0]->value.',- ('.$hasil->cost[0]->etd.' Hari)</td>
                <td>
                    <input onclick="pilihan('.$i.')" type="radio" id="pilih'.$i.'" name="pilih" value="'.$hasil->cost[0]->value.'"> Pilih
                </td>
              </tr>
            ';
        }
 }
    echo '
        </tbody>
    </table>';
 
?>