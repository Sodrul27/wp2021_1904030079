<?php
  require 'function.php';

  //agar tidak bisa masuk ke pengetikan manual pada url
  if(!isset($_GET['id'])){
    header('location: index.php');
    exit;
  }


  $id = $_GET['id'];
  if(hapus($id)){
    echo "
            <script>
            alert('data berhasil dihapus..!');
            document.location.href= 'index.php'
            </script>
            ";

  }else{
    echo "
            <script>
            alert('data gagal dihapus ');
            </script>
            ";


  }

  $nidn = $_GET['nidn'];
  if(hapusdosen($nidn)){
    echo "
            <script>
            alert('data berhasil dihapus..!');
            document.location.href= 'dosen.php'
            </script>
            ";

  }else{
    echo "
            <script>
            alert('data gagal dihapus ');
            </script>
            ";


  }
    
?>