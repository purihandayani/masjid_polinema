  <!-- Container START -->
        <div class="container">
            <div id="colres">
                <div class="disp">';
                    $query2 = mysqli_query($config, "SELECT institusi, nama, website, status, alamat, logo FROM tbl_instansi");
                    list($institusi, $nama, $status,$website, $alamat, $logo) = mysqli_fetch_array($query2);
                    if(!empty($logo)){
                        echo '<img class="logodisp" src="./upload/'.$logo.'"/>';
                    } else {
                        echo '<img class="logodisp" src="./asset/img/logo.png"/>';
                    }
                    if(!empty($institusi)){
                        echo '<h5 class="up">'.$institusi.'</h5>';
                    } else {
                       echo '<h5 class="up">'.$institusi.'</h5>';
                    }
                    if(!empty($nama))
                    {
                        echo" <h6 class='up'>Politeknik Negeri Malang</h6>";
                    } 
                      if(!empty($alamat))
                    {
                        echo" <h3 class='up'>Jl. Soekarno Hatta No 9 Malang</h3>
                        <h3 class='up'> Telp(0341)404424-404425 Fax (0341)404420</h3>";
                    } 
                       if(!empty($website))
                    {
                        echo" <h2 class='up'>http://polinema.ac.id</h2>";
                    } 

                    //if(!empty($nama){
                      // echo '<h5 class="up" id="nama">Politeknik Negeri Malang</h5><br/>';
                    //} else {
                     // echo '<h5 class="up" id="nama">POLITEKNIK NEGERI MALANG</h5><br/>';
                    //}
                    //if(!empty($alamat)){
                      //  echo '<h6 class="status">'.$alamat.'</h6>';
                    //} else {
                      // echo '<h6 class="status">'.$alamat.'/h6>';
                    //}
                    //if(!empty($website)){
                      //  echo '<span id="alamat">'.$website.'</span>';
                    //} else {
                      //  echo '<span id="alamat">'.$website.'</span>';
                    //}
                    echo '
                </div>
                <div class="separator"></div>';