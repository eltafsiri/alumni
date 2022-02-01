  


  <!DOCTYPE html>
  <html lang="en">
  
  
  <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Bottom Navbar Bootstrap</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  </head>
  
  <body>
      <div class="container mt-4">
          <h2 class="alert alert-info">
              DAFTAR ALUMNI YANG TELAH MENGISI LINK DAFTAR
          </h2>
<!-- //masukan judul yang ada di atas tabel -->
          <div class="card">
              <div class="card-body">
                  <table class="table table-striped">
                      <tr>
                          <td>No</td>
                          <td>NAMA SISWA</td>
                          <td>TAHUN LULUS</td>
                          <td>EMAIL</td>
                          <td>KULIYAH</td>
                          <td>KE</td>
                          <td>JURUSAN</td>  
                                           
                         
                      </tr>
                      <?php 
                          include('data.php'); 
                          $no = 1;
                      ?>
                      <!-- $newArray adalah variabel yang didapatkan dari data.php 
                    //masukan data yang ada di googlesheet , nama harus sesuai
                    -->
                      <?php foreach ($newArray as $value) { ?>
                          <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $value["Nama Siswa"]; ?></td>
                              <td><?php echo $value["Tahun Lulus"]; ?></td>
                              <td><?php echo $value["E-mail"]; ?></td>
                              <td><?php echo $value["Apa Anda Melanjutkan Sekolah?"]; ?></td>
                              <td><?php echo $value["Nama Lembaga Pendidikan"]; ?></td>
                              <td><?php echo $value["Jurusan"]; ?></td>
                             
                          </tr>
          
                      <?php } ?>
                  </table>
              </div>
          </div>
      </div>
  
  </body>
  
  </html>